<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style>
	.popup {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 9999;
}

.popup-content {
  background-color: #fff;
  width: 300px;
  padding: 20px;
  margin: 100px auto;
  text-align: center;
}

.popup-content h2 {
  margin-top: 0;
}

.popup-content p {
  margin-bottom: 20px;
}

	</style>
	
	<script>
var openButton = document.getElementById('openPopup');
var closeButton = document.getElementById('closePopup');
var popup = document.getElementById('popup');

openButton.addEventListener('click', function() {
popup.style.display = 'block';
});

closeButton.addEventListener('click', function() {
popup.style.display = 'none';
});

	</script>
</head>

<body>
	
	<button id="openPopup">Open Popup</button>

<div id="popup" class="popup">
  <div class="popup-content">
    <h2>Popup Title</h2>
    <p>This is the content of the popup.</p>
    <button id="closePopup">Close</button>
  </div>
</div>

	
</body>
</html>