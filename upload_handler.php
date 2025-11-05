<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//include __DIR__ . '/includes/lang.php'; // ensures session + csrf
// Function to send a JSON error and exit
session_start();
// echo "The session CSRF is: ";
// var_dump($_SESSION['csrf']);
// echo "The post CSRF is: ";
// var_dump($_POST['csrf']);
function json_error($message, $code = 400)
{
    http_response_code($code);
    echo json_encode(['status' => 'error', 'message' => $message]);
    exit;
}
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Method Not Allowed');
}
if (!isset($_POST['csrf']) || !hash_equals($_SESSION['csrf'] ?? '', $_POST['csrf'])) {
    json_error('Invalid security token. Please refresh the page and try again.', 403);
}

$maxFiles = 10;
$maxSize = 50 * 1024 * 1024; // 50MB
$allowedExt = ['pdf', 'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'jpg', 'jpeg', 'png', 'tif', 'tiff', 'txt', 'rtf', 'odt', 'zip'];
$uploadDir = __DIR__ . '/uploads/';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0775, true);
}

if (!isset($_FILES['documents'])) {
    exit('Niciun fișier încărcat.');
}

$names = $_FILES['documents']['name'];
$tmp_names = $_FILES['documents']['tmp_name'];
$errors = $_FILES['documents']['error'];
$sizes = $_FILES['documents']['size'];

if (count($names) > $maxFiles) {
    exit('Ai depășit limita de 10 fișiere.');
}

$stored = [];
for ($i = 0; $i < count($names); $i++) {
    if ($errors[$i] !== UPLOAD_ERR_OK) {
        exit('Eroare la încărcarea fișierelor.');
    }
    if ($sizes[$i] > $maxSize) {
        exit('Un fișier depășește 50MB.');
    }
    $orig = $names[$i];
    $ext = strtolower(pathinfo($orig, PATHINFO_EXTENSION));
    if (!in_array($ext, $allowedExt, true)) {
        exit('Extensie neacceptată: ' . htmlspecialchars($ext));
    }
    // Prevent PHP execution
    if (in_array($ext, ['php', 'phtml', 'php3', 'php4', 'php5'])) {
        exit('Tip fișier interzis.');
    }

    $safeBase = preg_replace('/[^A-Za-z0-9._-]/', '_', pathinfo($orig, PATHINFO_FILENAME));
    $unique = $safeBase . '_' . bin2hex(random_bytes(4)) . '.' . $ext;
    $dest = $uploadDir . $unique;
    if (!move_uploaded_file($tmp_names[$i], $dest)) {
        exit('Nu s-a putut salva: ' . htmlspecialchars($orig));
    }
    $stored[] = $unique;
}

    $name    = htmlspecialchars($_POST['name'] ?? '');
    $phone   = htmlspecialchars($_POST['phone'] ?? '');
    $email   = htmlspecialchars($_POST['email'] ?? '');
    $service = htmlspecialchars($_POST['service'] ?? '');
    $details = htmlspecialchars($_POST['details'] ?? '');

    $upload_dir = __DIR__ . '/uploads/';
    $files_info = [];

    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    /*if (!empty($_FILES['documents']['name'][0])) {
        foreach ($_FILES['documents']['name'] as $key => $filename) {
            $tmp_name = $_FILES['documents']['tmp_name'][$key];
            $size     = $_FILES['documents']['size'][$key];

            if ($size > 50 * 1024 * 1024) { // 50MB
                continue; // skip oversized file
            }

            $safe_name = uniqid() . '-' . basename($filename);
            $target    = $upload_dir . $safe_name;

            if (move_uploaded_file($tmp_name, $target)) {
                $files_info[] = $safe_name;
            }
        }
    }*/

    // --- Email ---
    // Use the PHPMailer library
    // This line loads the library
    require __DIR__ . '/vendor/autoload.php';

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // --- Server settings (configure for your SMTP server) ---
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;  // Uncomment for detailed error messages
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host       = 'smtp.etraduceri.eu';                    // Specify main SMTP server
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'contact@etraduceri.eu';                 // SMTP username
        // IMPORTANT: Replace with your actual password. For security, it's recommended to load this from a secure configuration file or environment variable.
        $mail->Password   = 'YOUR_SMTP_PASSWORD';                   // IMPORTANT: SMTP password for contact@traduceri.eu
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            // Enable implicit SMTPS (SSL) encryption
        $mail->Port       = 465;                                    // TCP port to connect to for SSL
        $mail->CharSet    = 'UTF-8';

        // --- Recipients ---
        $mail->setFrom('contact@etraduceri.eu', 'Name Site');        // Who the email is from (should match username)
        $mail->addAddress('contact@etraduceri.eu', 'Admin');      // Who the email is to
        $mail->addReplyTo($email);                                   // Set the "Reply-To" to the user's email

        // --- Attachments ---
        // Loop through the files that were successfully stored and attach them
        foreach ($stored as $filename) {
            $filePath = $uploadDir . $filename;
            if (file_exists($filePath)) {
                $mail->addAttachment($filePath);
            }
        }

        // --- Content ---
        $mail->isHTML(false); // Set email format to plain text
        $mail->Subject = "Nouă comandă de traducere de la " . $name;

        // Construct the email body
        $mail->Body    = "
        A fost plasată o nouă comandă:

        Nume: $name
        Telefon: $phone
        Email: $email
        Serviciu: $service
        Detalii: $details

        Documente încărcate: " . implode(", ", $stored) . "
            ";

        $mail->send();

        // =================================================================
        // == 2. SEND CONFIRMATION EMAIL TO THE USER
        // =================================================================

        // --- Clear recipients and attachments for the next email ---
        $mail->clearAllRecipients();
        $mail->clearAttachments();
        $mail->clearReplyTos();

        // --- Set up the new email ---
        $mail->addAddress($email, $name); // Send TO the user
        $mail->setFrom('contact@etraduceri.eu', 'Laseda Services'); // FROM your company
        $mail->Subject = 'Confirmare primire cerere - etraduceri.eu';
        $mail->isHTML(true); // Set to HTML for the signature

        // --- Build the HTML Body based on the image ---
        $mail->Body = "
            Buna ziua,<br><br>
            Confirmam primirea cererii dvs. si va vom raspunde in cel mai scurt timp.<br><br>
            <hr>
            <p>
                <strong>LASEDA SERVICES S.R.L</strong><br>
                <strong>Mobil:</strong> +40 745 612 895<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+40 749 051 111<br>
                <strong>E-mail:</strong> <a href='mailto:contact@etraduceri.eu'>contact@etraduceri.eu</a><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='mailto:lasedaservices@gmail.com'>lasedaservices@gmail.com</a>
                </br>
                <a href='https://etraduceri.eu/ro/'>https://etraduceri.eu/ro/</a>
            </p>
            <p>
                Laseda Services | Sector 6, Bucuresti, 062043, Romania
            </p>
        ";

        // Use an alternative plain text body for email clients that don't support HTML
        $mail->AltBody = "Buna ziua,\n\nConfirmam primirea cererii dvs. si va vom raspunde in cel mai scurt timp.\n\nLASEDA SERVICES S.R.L\nMobil: +40 745 612 895, +40 749 051 111\nE-mail: contact@etraduceri.eu\nhttps://etraduceri.eu/ro/";


        $mail->send();

        // The email is sent, the script continues to the HTML confirmation below...
        // If email is sent successfully, send a success JSON response
        // 1. Setează mesajul de succes în sesiune
        $_SESSION['form_status'] = [
            'status' => 'success',
            'message' => 'Comanda a fost trimisa cu succes! Va multumim.'
        ];
        echo json_encode(['status' => 'success', 'message' => 'Comanda a fost plasata cu succes! Va multumim.']);
    } catch (Exception $e) {
        // If sending fails, you can log the error.
        // For the user, it might be best to still show the success page
        // but log the error for yourself.
        error_log("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
        $_SESSION['form_status'] = [
            'status' => 'error',
            'message' => 'Eroare la trimitere. Vă rugăm încercați din nou.'
        ];
        json_error('E-mailul nu a putut fi trimis. Va rugam incercati sa sunati la numarul 0749051111. Ne cerem scuze pentru neplacerea creata', 500);
    }


    // NOTE: I noticed you process uploaded files twice.
    // The first loop (saving to the $stored array) is good and secure.
    // The second loop (inside the if ($_SERVER['REQUEST_METHOD'] === 'POST') block) is redundant.
    // You can safely remove that second file processing loop. The code I provided above
    // already uses the $stored variable from the first loop.
}
/*
// Here you could send an email with the order details and file list.
// For demo, just show confirmation.
?><!doctype html>
<html lang="ro"><head><meta charset="utf-8"><link rel="stylesheet" href="/assets/css/style.css"><title>Comandă trimisă</title></head>
<body class="container sections">
  <div class="card">
    <h1>Comanda a fost trimisă cu succes!</h1>
    <p>Fișiere încărcate:</p>
    <ul>
      <?php foreach($stored as $f){ echo '<li>' . htmlspecialchars($f) . '</li>'; } ?>
    </ul>
    <p><a class="btn btn-primary" href="index.php">Înapoi la Acasă</a></p>
  </div>
</body></html>
*/