<html>
<head>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height:100%;
      width:100%;
      margin-top: 0px;
      margin-bottom: 0px;
      margin-right:0px;
      padding: 0;
    
     
      }
      /* Optional: Makes the sample page fill the window. */
    
}
    </style>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="1.css">
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
      

</head>

<body>
  
  
<?php include 'layout.php'; ?><br>
<div id="main">
</div>           

    <div id="map">
      
    <script>
      var maps;
      var position={lat: 18.795652, lng: 98.952887};
      var jsonobj = [
        {"location":"หอนาฬิกา","lat":"18.796485","lng":"98.953273"},
        {"location":"โรงอาหารวิดวะ","lat":"18.795246","lng":"98.951074"},
        {"location":"โรงเรียนสาธิต มช","lat":"18.795479","lng":"98.953949"},
        {"location":"ที่ทำงานสุดหล่อ","lat":"18.795652","lng":"98.952887"}
      ];
      function initMap() {
        maps = new google.maps.Map(document.getElementById('map'), {
          center: position,
          zoom: 16,
        });

        var marker, i , info;
       $.each(jsonobj, function(i, item){
        marker = new google.maps.Marker({
          position : new google.maps.LatLng(item.lat, item.lng),
          map: maps
          });
          info = new google.maps.InfoWindow();
          google.maps.event.addListener(marker,'click',(function(marker,i){
            return function(){
              info.setContent(item.location);
              info.open(maps, marker);
            }
          })(marker, i));

       });
         
    
      }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLlPkgIjxNsgSIYPbhknlpOUfzTjrxp6w&callback=initMap"
    async defer></script>
    </div>
  
</div>
</body>
</html>


