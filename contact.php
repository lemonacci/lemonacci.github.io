<?php
session_start();
include('config.php');
include('header.php');

if (isset($_SESSION['loggedin'])) {
    header('Location: contact_logged.php');
    exit;
}
?>

    <h1 style="margin-top:5%;font-size:30px;">Contact us:</h1>
    <h6 class="p-home">E-mail: 2set4milfanbook@gmail.com<br>
        xxx:<br>
        xxx:</h6>
    <br>
    
    
<?php
include('footer.php');
?>