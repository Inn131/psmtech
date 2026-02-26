  document.addEventListener("DOMContentLoaded", function() {
      
    if (document.body.classList.contains("page-id-3508")) return;
      
  const popup = document.getElementById('form-popup');
  const closeBtn = document.querySelector('.close-btn');
  const openform = document.querySelector('#popup-trigger');
  
  // Function to show the popup
  function showPopup() {
    if (localStorage.getItem('popupClosed') === 'true') return; // Don't show if closed before
    popup.style.opacity = '1'; 
    popup.style.visibility = 'visible'; 
    popup.classList.add('show');
    popup.style.display = 'block';
  }

  // Show popup after 7 seconds on load if not closed earlier
  setTimeout(showPopup, 7000);

  // Scroll popup button click event
      $('#scroll-popup-btn').on('click', function(e) {
        e.preventDefault();

        // 1. Scroll to top
        $('html, body').animate({ scrollTop: 0 }, 500);
        popup.style.opacity = '1'; 
    popup.style.visibility = 'visible'; 
        popup.classList.add('show');
    popup.style.display = 'block';
    });

  // Open form button click
  openform.addEventListener('click', function() {
    showPopup();
  });

  // Close button click
  closeBtn.addEventListener('click', function() {
    popup.style.display = 'none';
    popup.classList.remove('show');
    localStorage.setItem('popupClosed', 'true'); // Save that popup is closed
  });
  });
  
  
