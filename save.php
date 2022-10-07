<?php

$projectnumber = $_POST["projectnumber"];
$projectname = $_POST["projectname"];
$estimatedcost = $_POST["estimatedcost"];
#$lastmodifytime = $_POST["lastmodifytime"];
$conn = mysqli_connect("sql107.epizy.com", "epiz_32676150", "r7ec2jBE9uN", "epiz_32676150_projectbomber") or die("connection failed");
$sql = "INSERT INTO project(ProjectNumber, ProjectName, EstimatedCostInLacs) VALUES ('{$projectnumber}','{$projectname}','{$estimatedcost}' )";
$result = mysqli_query($conn, $sql) or die("Enter correct project number !");
header("location: http://projectbomber.42web.io/");
mysqli_close($conn);
?>