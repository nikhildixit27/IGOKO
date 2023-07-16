<?php 

if(!isset($_SESSION)){
    session_start();
}
include_once('../dbconnection.php');

// if(!isset($_SESSION['is_login'])){
if(isset($_POST['checklogin']) && isset($_POST['clientemail']) && isset($_POST['clientpass'])){
    // console.log("enter in client login info");
    $clientemail = $_POST['clientemail'];
    $clientpass = $_POST['clientpass'];

    $sql = "SELECT client_email, client_pass FROM clients WHERE client_email='".$clientemail."' AND client_pass ='".$clientpass."' ";

    $result = $conn->query($sql);

    $row = $result->num_rows;

    if($row === 1){
        echo json_encode($row);
        $_SESSION['is_login'] = true;
        $_SESSION['clientemail'] = $clientemail;
    }
    else if($row === 0){
        echo json_encode($row);
    }
}
// }
?>