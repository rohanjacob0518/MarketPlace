<html>
    <body>
        <form method="POST" action="buyerlistproducts.php">
            ID:<input type="number" id="id" name="id">
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
    $sql = mysqli_query($conn,"SELECT * FROM `products` WHERE merchid = 12");
    echo "Name<br>";
    while($row = mysqli_fetch_array($sql,MYSQLI_NUM))
    {
        echo $row[1];   
        echo "<br>";
    }
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