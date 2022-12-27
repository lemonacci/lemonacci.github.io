<?php
session_start();

include ('config.php');  
if(isset($_POST['login'])){
    $name = $_POST['name'];
    $country =  $_POST['country'];

    $qry = mysqli_query($conn, "SELECT * FROM users WHERE name = '$name' AND country = '$country'");

    if (mysqli_num_rows($qry) === 1) {
        $row = mysqli_fetch_assoc($qry); 

        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['loggedin'] = true;

        if (isset($_SESSION['loggedin'])) {
            setcookie('id', $row['id'], time()+60);
            setcookie('name', $row['name'], time()+3600);
        }

        header('location:personalised_message1.php');        
    } else {
        header('location:login.php?alert=gagal');
    }
}
?>