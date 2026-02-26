document.addEventListener('DOMContentLoaded', function(event) {
    const popup = document.getElementById('form-popup');
    const closeBtn = document.querySelector('.close-btn');
    const openform = document.querySelector('#popup-trigger');
    
    openform.addEventListener('click', function() {
        popup.style.opacity = '1'; 
    popup.style.visibility = 'visible'; 
        popup.classList.add('show');
    popup.style.display = 'block';
    });
        
        // Close button click
    closeBtn.addEventListener('click', function() {
      popup.style.display = 'none';
      popup.classList.remove('show');
    });
    
    const responseOutput = event.target.querySelector('.wpcf7-response-output');
  const customPlaceholder = event.target.querySelector('.custom-response-placeholder');

  if (responseOutput && customPlaceholder) {
    customPlaceholder.innerHTML = responseOutput.outerHTML;
    responseOutput.remove(); // Remove original
  }
  
});