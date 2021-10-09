<?php
$servername = "localhost";
$username = "root";
$password = "";
$bdname = "Pickup";

$conn = mysqli_connect($servername,$username,$password,$bdname); 

if($conn)
{
// echo "Connection Ok"; 
}
else{
    echo "Connection Failed ".mysqli_connect_error();
}


$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Gmail = $_POST['Gmail'];
$Address1 = $_POST['Address1'];
$Address2 = $_POST['Address2'];
$Weight = $_POST['Weight'];
$City = $_POST['City'];
$State = $_POST['State'];
$Zip = $_POST['Zip'];
$Mobile = $_POST['Mobile'];
$AlternateMobile = $_POST['AlternateMobile'];
$PickupDate = $_POST['PickupDate'];
// echo "$FirstName";
// echo "$LastName";
// echo "$Gmail";
// echo "$Address1";
// echo "$Address2";
// echo "$Weight";
// echo "$City";
// echo "$State";
// echo "$Zip";
// echo "$Mobile";
// echo "$AlternateMobile";
// echo "$PickupDate";
$sql = " INSERT INTO Pickup.RequestPickup ( `FirstName`, `LastName`, `Gmail`, `Address1`, `Address2`, `Weight`, `City`, `State`, `Zip`, `Mobile`, `Alternate Mobile`, `PickupDate`) VALUES('$FirstName', '$LastName', '$Gmail','$Address1', '$Address2', $Weight, '$City', '$State', '$Zip', '$Mobile', '$AlternateMobile', '$PickupDate') ";
// echo $sql;
if ($conn->query($sql) ==  true){
     echo "Sucessfully Submitted We will reponse soon";
}
else{
    echo " ERROR :  $sql <br> $conn->error ";
}
$conn->close();
error_reporting(0);
?>
