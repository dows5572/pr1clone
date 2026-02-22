<?php
include("navbar.php");
include("connect.php");

if(isset($_POST["colID"], $_POST["colName"], $_POST['pop'])){
    $updateID = $_POST["colID"];
    $updateName = $_POST["colName"];
    $population = $_POST["pop"];
}
$sql = "UPDATE tblColleges SET
        collegeName = '$updateName',
        population = $population
        WHERE  collegeID = '$updateID'";

if ($conn->query($sql)=== true){
    echo "update successfully";
} else {
    echo "update failed";
}
?>