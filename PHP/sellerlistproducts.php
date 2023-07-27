<html>
    <body>
        <form method="POST" action="sellerlistproducts.php">
            ID:<input type="number" id="id" name="id">
            Product Name:<input type="text" name="pname" id="pname">
            <input type="submit" value="submit" >
        </form>
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
    $merchid= $_POST['id'];
    $pname= $_POST['pname'];
    $sql = mysqli_query($conn,"INSERT INTO `products`(`pname`, `merchid`) VALUES ('$pname','$merchid')");
    if(!$sql)
    {
        echo "ERROR";
    }
    else{
        echo "Success";
    }
}
}
?>

