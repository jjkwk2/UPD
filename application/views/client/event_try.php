<!-- <!DOCTYPE html>
<html lang="en">
<body>
    <form action="<?php //echo base_url('events/uploadPics');?>" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="image"/>
        <input type="submit" name="submit" value="UPLOAD"/>
    </form>
</body>
</html> -->

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Generating Multiple Maps in a Page</title>
<style>
#block-wrp {
  width: 784px;
  display: flex;
  display: -webkit-flex;
  justify-content: space-around;
  flex-wrap: wrap;
}
#block-wrp .block-item {
  height: 400px;
  width: 48%;
  position: relative;
  display: flex;
  display: -webkit-flex;
  flex-direction: column;
  -webkit-flex-direction: column
}
#block-wrp .block-item .map-item {
  height: 90%
}
#block-wrp .block-item span.city-name {
  text-align: center;
  color: #000;
  text-transform: uppercase;
  font-weight: bold;
  background: #a2ccff;
  height: 10%;
  line-height: 2em;
}
</style>
</head>
<body>
<div id="block-wrp">
  <div class="block-item">
    <div id="mapCanvas1" class="map-item"> </div>
    <span class="city-name">London</span> </div>
  <div class="block-item">
    <div id="mapCanvas2" class="map-item"> </div>
    <span class="city-name">Amsterdam</span> </div>
</div>
<script type="text/javascript">
var map1, map2;
function drawMap() {
    
    var mapOptions = {
      zoom: 13,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      mapTypeControl: true,
      fullscreenControl: false 
     }
    mapOptions.center = new google.maps.LatLng(51.509865, -0.118092); // London
    map1 = new google.maps.Map(document.getElementById("mapCanvas1"), mapOptions);
    
    mapOptions.center = new google.maps.LatLng(52.370216, 4.895168); // Amsterdam
    map2 = new google.maps.Map(document.getElementById("mapCanvas2"), mapOptions);
 }
</script> 
<script async defer src="http://maps.google.com/maps/api/js?key=AIzaSyCvDN-LuS_9_VFkR71Sc56P6y4cwWKvEpU&callback=drawMap"></script>
</body>
</html>