<html>
    <head>
        Register Shop 
    </head>
    <body>
        <form method="POST" action="seller.php">
            Name:<input type="text" id="name" name="name">
            ShopLocation:<input type="text" name="cityName" id="cityName" value=""> 
            <input type="hidden" name="lat" id="lat" value="">
            <input type="hidden" name="long" id="long" value="">
            <input type="submit" value="submit" >
        </form>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
                navigator.geolocation.getCurrentPosition(showPosition);
            
            function showPosition(position) {
              var lat= position.coords.latitude;
              var long= position.coords.longitude;
              document.getElementById("lat").value = lat;
              document.getElementById("long").value = long;
              getCityName(lat, long);
              //document.getElementById("place").value = place;
            }
function getCityName(latitude, longitude) {
  // Define the URL for the OpenStreetMap Nominatim API
  const url = `https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${latitude}&lon=${longitude}`;

  // Make a GET request to the API
  fetch(url)
    .then(response => response.json())
    .then(data => {
      
      var cityName = data.address.state_district;
       // $.post('', { cityName: cityName }); //send direct to php initializes sql query without form data
       document.getElementById("cityName").value = cityName;
       // $('input[name="cityName"]').val(cityName);
      console.log(`The city name is ${cityName}`);
    })
    .catch(error => console.error(error));
}

            </script>
    </body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$conn = mysqli_connect('localhost','root','','erdb');
if(!$conn) {
    echo "Error";
    die($conn);
}
else{
    session_start();
    $cityName= $_POST['cityName'];
    $name= $_POST['name'];
    $lat= $_POST['lat'];
    $long= $_POST['long'];
    
    
    if (isset($_POST['name'])) {
    
    $sql = mysqli_query($conn,"INSERT INTO `client` (`name`, `lat`, `longt`,`place`) VALUES ('$name', '$lat', '$long','$cityName')");
    if(!$sql)
    {
        echo "ERROR";
    }
    else{
        echo "Success";
    }
}
}
}
?>