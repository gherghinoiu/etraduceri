<?php include 'includes/header.php'; ?>

<?php
$page_content = [
    'ro' => [
        'title' => 'Comandă Traducere',
        'subtitle' => 'Completați formularul de mai jos pentru a primi o ofertă personalizată',
        'personal_info' => 'Informații Personale',
        'name' => 'Nume Complet',
        'email' => 'Adresa de Email',
        'phone' => 'Telefon',
        'company' => 'Companie (opțional)',
        'translation_details' => 'Detalii Traducere',
        'source_lang' => 'Limba Sursă',
        'target_lang' => 'Limba Țintă',
        'service_type' => 'Tipul Serviciului',
        'urgency' => 'Urgența',
        'documents' => 'Documente',
        'upload_info' => 'Încărcați documentele (PDF, DOC, DOCX, JPG, PNG)',
        'additional_info' => 'Informații Suplimentare',
        'message' => 'Mesaj (opțional)',
        'submit' => 'Trimite Cererea'
    ],
    'en' => [
        'title' => 'Order Translation',
        'subtitle' => 'Complete the form below to receive a personalized quote',
        'personal_info' => 'Personal Information',
        'name' => 'Full Name',
        'email' => 'Email Address',
        'phone' => 'Phone',
        'company' => 'Company (optional)',
        'translation_details' => 'Translation Details',
        'source_lang' => 'Source Language',
        'target_lang' => 'Target Language',
        'service_type' => 'Service Type',
        'urgency' => 'Urgency',
        'documents' => 'Documents',
        'upload_info' => 'Upload documents (PDF, DOC, DOCX, JPG, PNG)',
        'additional_info' => 'Additional Information',
        'message' => 'Message (optional)',
        'submit' => 'Send Request'
    ]
];

$content = $page_content[$current_lang];

$languages = [
    'ro' => ['Română', 'Engleză', 'Franceză', 'Germană', 'Spaniolă', 'Italiană', 'Rusă', 'Chineză', 'Japoneză'],
    'en' => ['Romanian', 'English', 'French', 'German', 'Spanish', 'Italian', 'Russian', 'Chinese', 'Japanese']
];

$services = [
    'ro' => ['Traducere Autorizată', 'Traducere Legalizată', 'Interpretariat', 'Corecturi Text'],
    'en' => ['Authorized Translation', 'Certified Translation', 'Interpreting', 'Proofreading']
];

$urgency_options = [
    'ro' => ['Standard (3-5 zile)', 'Urgent (1-2 zile)', 'Express (24 ore)'],
    'en' => ['Standard (3-5 days)', 'Urgent (1-2 days)', 'Express (24 hours)']
];
?>

<section class="section">
    <div class="container">
        <div class="text-center mb-4">
            <h1 class="section-title"><?php echo $content['title']; ?></h1>
            <p style="font-size: 1.2rem; color: #666;"><?php echo $content['subtitle']; ?></p>
        </div>

        <div class="form-container">
            <form id="orderForm" method="POST" action="process_order.php" enctype="multipart/form-data">
                <!-- Informații Personale -->
                <h3 style="margin-bottom: 20px; color: #1e40af;"><?php echo $content['personal_info']; ?></h3>

                <div class="form-group">
                    <label for="name"><?php echo $content['name']; ?> *</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email"><?php echo $content['email']; ?> *</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="phone"><?php echo $content['phone']; ?></label>
                    <input type="tel" id="phone" name="phone">
                </div>

                <div class="form-group">
                    <label for="company"><?php echo $content['company']; ?></label>
                    <input type="text" id="company" name="company">
                </div>

                <!-- Detalii Traducere -->
                <h3 style="margin: 40px 0 20px; color: #1e40af;"><?php echo $content['translation_details']; ?></h3>

                <div class="form-group">
                    <label for="source_language"><?php echo $content['source_lang']; ?> *</label>
                    <select id="source_language" name="source_language" required>
                        <option value="">Selectați limba</option>
                        <?php foreach ($languages[$current_lang] as $lang): ?>
                            <option value="<?php echo $lang; ?>"><?php echo $lang; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="target_language"><?php echo $content['target_lang']; ?> *</label>
                    <select id="target_language" name="target_language" required>
                        <option value="">Selectați limba</option>
                        <?php foreach ($languages[$current_lang] as $lang): ?>
                            <option value="<?php echo $lang; ?>"><?php echo $lang; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="service_type"><?php echo $content['service_type']; ?> *</label>
                    <select id="service_type" name="service_type" required>
                        <option value="">Selectați serviciul</option>
                        <?php foreach ($services[$current_lang] as $service): ?>
                            <option value="<?php echo $service; ?>"><?php echo $service; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="urgency"><?php echo $content['urgency']; ?> *</label>
                    <select id="urgency" name="urgency" required>
                        <option value="">Selectați urgența</option>
                        <?php foreach ($urgency_options[$current_lang] as $option): ?>
                            <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- Upload Documente -->
                <h3 style="margin: 40px 0 20px; color: #1e40af;"><?php echo $content['documents']; ?></h3>

                <div class="form-group">
                    <label><?php echo $content['upload_info']; ?></label>
                    <div class="file-upload" onclick="document.getElementById('documents').click()">
                        <i class="fas fa-cloud-upload-alt" style="font-size: 2rem; color: #1e40af; margin-bottom: 10px;"></i>
                        <p><?php echo $current_lang == 'ro' ? 'Faceți click pentru a selecta fișiere sau trageți-le aici' : 'Click to select files or drag them here'; ?></p>
                        <input type="file" id="documents" name="documents[]" multiple accept=".pdf,.doc,.docx,.jpg,.jpeg,.png" style="display: none;">
                    </div>
                    <div class="file-list"></div>
                </div>

                <!-- Informații Suplimentare -->
                <h3 style="margin: 40px 0 20px; color: #1e40af;"><?php echo $content['additional_info']; ?></h3>

                <div class="form-group">
                    <label for="message"><?php echo $content['message']; ?></label>
                    <textarea id="message" name="message" placeholder="<?php echo $current_lang == 'ro' ? 'Detalii suplimentare despre traducere...' : 'Additional details about the translation...'; ?>"></textarea>
                </div>

                <button type="submit" class="submit-btn">
                    <i class="fas fa-paper-plane"></i> <?php echo $content['submit']; ?>
                </button>
            </form>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>