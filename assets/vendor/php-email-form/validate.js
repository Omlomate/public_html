document.getElementById('contactForm').addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent the default form submission
  var form = event.target;
  var formData = new FormData(form);

  fetch(form.action, {
      method: 'POST',
      body: formData,
  })
  .then(response => response.json())
  .then(data => {
      if (data.success) {
          form.style.display = 'none';
          document.getElementById('thankYouMessage').style.display = 'block';
      } else {
          alert('There was a problem submitting your form. Please try again.');
      }
  })
  .catch(error => {
      alert('There was an error submitting your form. Please try again later.');
  });
});