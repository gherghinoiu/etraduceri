// Add Inview
jQuery(document).ready(function () {
  jQuery('.t4-section-inview').bind('inview', function(event, visible) {
    if (visible) {
      jQuery(this).addClass('t4-inview');
      var animateClass = jQuery(this).find('.animated').data('animated-type');
      jQuery(this).find('.animated').addClass(animateClass);
    }
  });
  // check show megamenu
  jQuery(document).find('.t4-megamenu').bind('inview',function(event,visible){
    if (visible) {
      jQuery('body').addClass('nav-open');
    }else{
      jQuery('body').removeClass('nav-open');
    }
  });
});

document.addEventListener('DOMContentLoaded', function() {
    const fileInput = document.getElementById('form-documents');
    const fileListDisplay = document.getElementById('file-list-display');

    if (fileInput && fileListDisplay) {
        fileInput.addEventListener('change', function() {
            if (this.files.length > 0) {
                // Create a string of file names
                let fileNames = Array.from(this.files).map(file => file.name).join(', ');
                fileListDisplay.textContent = fileNames;
            } else {
                fileListDisplay.textContent = 'Niciun fișier selectat';
            }
        });
    }
});