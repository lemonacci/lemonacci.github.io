<?php
session_start();

include('cek_sesi.php');
include('config.php');

$sql = "SELECT * FROM users WHERE id = " . $_SESSION['id'];
$qry = mysqli_query($conn,$sql);
$jml = mysqli_num_rows($qry);
if($jml>0)
{
	$data = mysqli_fetch_array($qry);
	$id = $data['id'];
	$name = $data['name'];
	$submission = $data['submission'];
	$submission2 = $data['submission2'];
	$submission3 = $data['submission3'];
	$submission4 = $data['submission4'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="assets/styles.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&family=Rufina:wght@400;700&display=swap" rel="stylesheet">

    <link rel="icon" href="assets/logo.png">

    <title>Fanbook 2SET4MIL</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top p-4" style="background-color: #FFFFFF;">
        <a class="navbar-brand nav-text"><img src="assets/logo.png" style="height: 30px; width: auto;">&nbsp;&nbsp;<b>FANBOOK 2SET4MIL</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto my-2 my-lg-0 nav-text">
                <li class="nav-item active">
                    <a class="nav-link" href="index_logged.php">Home&nbsp;<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="about_logged.php">About</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="download_logged.php">See The Fanbook</a>
                </li>
                <li class="nav-item active mr-5">
                    <a class="nav-link" href="about_logged.php#contact">Contact</a>
                </li>
                <li class="nav-item active" style="margin-left: 600px;">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>