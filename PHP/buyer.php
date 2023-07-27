<?php

    session_start();
    $conn=mysqli_connect("localhost","root","");
    if(!$conn)
    {
        echo "Failed to connect to database";
    }
    if(!mysqli_select_db($conn,'erdb'))
    {
        die('Connected to Server Failed Database Connection');
    }
    //$reflat= 9.5916;
    $reflong= 76.5222;
    $reflat =$_POST['reflat'];
    //$reflong =$_GET['reflong'];
    echo $reflat;

    function haversineDistance($lat1, $lon1, $lat2, $lon2) {
        $earthRadius = 6371; // in kilometers
    
        $dLat = deg2rad($lat2 - $lat1);
        $dLon = deg2rad($lon2 - $lon1);
    
        $a = sin($dLat / 2) * sin($dLat / 2) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * sin($dLon / 2) * sin($dLon / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        $distance = $earthRadius * $c;
    
        return $distance;
    }
    
    $result=mysqli_query($conn,"SELECT * FROM `client`;");
    $locations = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $distance = haversineDistance($reflat, $reflong, $row['lat'], $row['longt']);
        $row['distance'] = $distance;
        $locations[] = $row;
    }
    usort($locations, function($a, $b) {
        return $a['distance'] - $b['distance'];
    });

    foreach ($locations as $location) {
        echo $location['name'] . ': ' . $location['distance'] . ' km<br>';
    }
    mysqli_close($conn);
?>

<html>
    <head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

        <script>
                navigator.geolocation.getCurrentPosition(showPosition);
            
            function showPosition(position) {
              var reflat= position.coords.latitude;
              var reflong= position.coords.longitude;
            //  $.post('', { "reflat": reflat });
              $(document).ready(function() {
              $.ajax({
                url: "",
                type: "POST",
                data: { reflat: reflat }
            });
        });
              console.log(`The city name is ${reflat}`);
              $.post('', { reflong: reflong });
              //document.getElementById("lat").value = lat;
             // document.getElementById("long").value = long;
              getCityName(reflat, reflong);
              //document.getElementById("place").value = place;
            }
function getCityName(latitude, longitude) {
  // Define the URL for the OpenStreetMap Nominatim API
  const url = `https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${latitude}&lon=${longitude}`;

  // Make a GET request to the API
  fetch(url)
    .then(response => response.json())
    .then(data => {
      
      var refcityName = data.address.state_district;
        $.post('', { refcityName: refcityName });
      //  $('input[name="cityName"]').val(cityName);
      console.log(`The city name is ${refcityName}`);
    })
    .catch(error => console.error(error));
}
</script>

</html>