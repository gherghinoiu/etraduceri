<?php
  // 1. Încarcă creierul site-ului și limba
  include 'core/init.php';

  // 2. Setează variabilele unice pentru această pagină
  $pageTitle = $lang['seo_title_comanda'];
  $metaDescription = $lang['seo_desc_comanda'];
  $bodyClass = "comanda-online-page"; // Clasificări unice de pe <body>

  // 3. Încarcă Header-ul
  include 'includes/header.php';
?>

<div class="translation-form-container" id="top-of-order-form" >
  <form class="translation-form" id="order-form" action="upload_handler.php" method="POST" enctype="multipart/form-data">

    <input type="hidden" name="csrf" value="<?php echo $_SESSION['csrf']; ?>">

    <h2 class="translation-form__title"><?php echo $lang['comanda_form_title']; ?></h2>

    <div class="translation-form__grid">
      <div class="translation-form__group">
        <label for="form-name" class="translation-form__label"><?php echo $lang['comanda_form_name']; ?></label>
        <input type="text" id="form-name" name="name" class="translation-form__input" placeholder="<?php echo $lang['comanda_form_name_ph']; ?>" required>
      </div>

      <div class="translation-form__group">
        <label for="form-phone" class="translation-form__label"><?php echo $lang['comanda_form_phone']; ?></label>
        <input type="tel" id="form-phone" name="phone" class="translation-form__input" placeholder="<?php echo $lang['comanda_form_phone_ph']; ?>" required>
      </div>

      <div class="translation-form__group">
        <label for="form-email" class="translation-form__label"><?php echo $lang['comanda_form_email']; ?></label>
        <input type="email" id="form-email" name="email" class="translation-form__input" placeholder="<?php echo $lang['comanda_form_email_ph']; ?>" required>
      </div>

      <div class="translation-form__group">
        <label for="form-service" class="translation-form__label"><?php echo $lang['comanda_form_service']; ?></label>
        <select id="form-service" name="service" class="translation-form__select" required>
          <option value="" disabled selected><?php echo $lang['comanda_form_service_option_default']; ?></option>
          <option value="autorizata"><?php echo $lang['comanda_form_service_option_auth']; ?></option>
          <option value="legalizata"><?php echo $lang['comanda_form_service_option_legal']; ?></option>
          <option value="interpretariat"><?php echo $lang['comanda_form_service_option_inter']; ?></option>
          <option value="corectura"><?php echo $lang['comanda_form_service_option_proof']; ?></option>
        </select>
      </div>

      <div class="translation-form__group translation-form__group--full-width">
        <label for="form-documents" class="translation-form__label"><?php echo $lang['comanda_form_upload']; ?></label>
        <div class="translation-form__file-upload">
          <input type="file" id="form-documents" name="documents[]" class="translation-form__file-input" multiple required>
          <label for="form-documents" class="translation-form__file-label">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg>
            <span><?php echo $lang['comanda_form_upload_btn']; ?></span>
          </label>
          <div class="translation-form__file-list" id="file-list-display"><?php echo $lang['comanda_form_upload_no_files']; ?></div>
        </div>
      </div>

      <div class="translation-form__group translation-form__group--full-width">
        <label for="form-details" class="translation-form__label"><?php echo $lang['comanda_form_details']; ?></label>
        <textarea id="form-details" name="details" rows="5" class="translation-form__textarea" placeholder="<?php echo $lang['comanda_form_details_ph']; ?>"></textarea>
      </div>
    </div>

    <button class="translation-form__submit" type="submit">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
        <span><?php echo $lang['comanda_form_submit']; ?></span>
    </button>

    <div id="form-status-message" class="translation-form__status"></div>
  </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('order-form');
  const statusMessage = document.getElementById('form-status-message');
  const submitButton = form.querySelector('button[type="submit"]');
  const submitButtonText = submitButton.querySelector('span');

  form.addEventListener('submit', function (event) {
    event.preventDefault();

    submitButton.disabled = true;
    submitButtonText.textContent = '<?php echo $lang['comanda_form_submitting']; ?>';
    statusMessage.innerHTML = '';

    const formData = new FormData(form);

    fetch('upload_handler.php', {
      method: 'POST',
      body: formData
    })
    .then(response => {
      if (!response.ok) {
        return response.json().then(err => { throw new Error(err.message || '<?php echo $lang['comanda_form_status_error']; ?>') });
      }
      return response.json();
    })
    .then(data => {
      if (data.status === 'success') {
        statusMessage.innerHTML = `<p class="success"><?php echo $lang['comanda_form_status_success']; ?></p>`;
        form.reset();
      } else {
        throw new Error(data.message || '<?php echo $lang['comanda_form_status_error']; ?>');
      }
    })
    .catch(error => {
      console.error('Submission Error:', error);
      statusMessage.innerHTML = `<p class="error">Error: ${error.message}</p>`;
    })
    .finally(() => {
      submitButton.disabled = false;
      submitButtonText.textContent = '<?php echo $lang['comanda_form_submit']; ?>';
    });
  });
});
</script>

<?php include 'includes/footer.php'; ?>
