<?php
$metodo = $_SERVER['REQUEST_METHOD'];

$servername = "172.17.0.1:3306";
    $user = "root";
    $pass = "1234";
    $db="mydb";
  
    // Create connection
    $conn = mysqli_connect($servername, $user, $pass, $db) or die("Connessione non riuscita". mysqli_connect_error());

  
    //if ($metodo == "GET"){
    
   //echo "riccabello";

  //}
    //if ($metodo == "POST"){
    
    //echo "Sì, mi è arrivata un POST!";
  //}
    //if ($metodo == "PUT"){
    
    //echo "Sì, mi è arrivata un PUT!";
  //}
    //if ($metodo == "DELETE"){
    
   // echo "Sì, mi è arrivata una DELETE!";
  //}
        




header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data = ['id' => 10001, 'birthDate' => "1953-09-01", 'firstName' => 'Georgi', 'lastName' => 'Facello', 'gender' => 'M', 'hireDate' => '1986-06-25'];

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo json_encode($data);
    $sql = "SELECT * from employees";
    $result = $conn->query($sql);
    // echo ($result);
    // return $result;
} else 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo json_encode($data);
} else 
    if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    echo json_encode($data);
} else 
    if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    echo json_encode($data);
}

?>