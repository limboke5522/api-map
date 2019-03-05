<html>
<head>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 80%;
      width:70%;
      margin-top: 60px;
      margin-right: 150px;
      padding: 0;
      float:right;
      }
      /* Optional: Makes the sample page fill the window. */
    
}
    </style>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="1.css">
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
      

</head>

<body>
  
  <div>
<?php include 'layout.html'; ?><br><br><br><br><br><br><br><br>
</div>           

<div class="c" align="center"> 

<h1>Location</h1>

</div>
    <div id="map">
      
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 18.795652, lng: 98.952887},
          zoom: 16
          
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLlPkgIjxNsgSIYPbhknlpOUfzTjrxp6w&callback=initMap"
    async defer></script>
    </div>


   
</body>
</html>


