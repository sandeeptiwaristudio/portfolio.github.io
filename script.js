document.getElementById('converterForm').addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent form submission

  var romanizedText = document.getElementById('romanizedText').value;

  // Send an AJAX request to the server
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'convert.php', true);
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      var convertedText = xhr.responseText;
      document.getElementById('convertedText').textContent = convertedText;
    }
  };
  xhr.send('romanizedText=' + encodeURIComponent(romanizedText));
});
