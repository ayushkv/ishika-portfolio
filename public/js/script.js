// jQuery for scroll reveal animation
$(document).ready(function() {
    // Check if the element is in the viewport
    function isScrolledIntoView(elem) {
      var docViewTop = $(window).scrollTop();
      var docViewBottom = docViewTop + $(window).height();
      var elemTop = $(elem).offset().top;
      var elemBottom = elemTop + $(elem).height();
  
      return (elemBottom <= docViewBottom && elemTop >= docViewTop);
    }
  
    // On scroll, add the 'visible' class to portfolio items
    $(window).scroll(function() {
      $('.portfolio-item').each(function() {
        if (isScrolledIntoView(this)) {
          $(this).addClass('visible');
        }
      });
    });
  
    // Initial check to add visibility to items already in view
    $('.portfolio-item').each(function() {
      if (isScrolledIntoView(this)) {
        $(this).addClass('visible');
      }
    });

    // Handle form submission
  $('#contactForm').on('submit', function(e) {
    e.preventDefault();  // Prevent the form from submitting the usual way
    
    var formData = $(this).serialize();  // Serialize the form data

    // Show a loading spinner (optional)
    Swal.fire({
      title: 'Submitting...',
      text: 'Please wait while we send your message.',
      didOpen: () => {
        Swal.showLoading();
      }
    });

    // Perform the AJAX request
    $.ajax({
      url: '/send-message',  // The route to handle the form submission in your controller
      method: 'POST',
      data: formData,
      success: function(response) {
        // Close the loading spinner
        Swal.close();

        // Display success message from the controller response
        Swal.fire({
          icon: 'success',
          title: 'Message Sent!',
          text: response.message,  // Message returned from the controller
        }).then(function() {
          // Reset the form after successful submission
          $('#contactForm')[0].reset();
        });
      },
      error: function(xhr, status, error) {
        // Handle errors (if any)
        Swal.close();
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: xhr.responseJSON.message,
        });
      }
    });
  });

  });
  