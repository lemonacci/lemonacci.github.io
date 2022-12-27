<?php
session_start();
include('config.php');

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $socmed_uname = $_POST['socmed_uname'];
    $country = $_POST['country'];
    $submission = null;
    
    $result = mysqli_query($conn, "SELECT socmed_uname from users WHERE socmed_uname = '$socmed_uname'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>alert('Account already existed')</script>";
    } else {
        $sql = "INSERT INTO users (name,socmed_uname,country,submission,type)
                        VALUES ('$name','$socmed_uname','$country','$submission','non participant')";
                $qry = mysqli_query($conn,$sql);
                mysqli_num_rows($qry);
            if ($qry) {
                // mysqli_num_rows($qry) = +1;
                // $row = mysqli_fetch_assoc($qry);

                //     $_SESSION['id'] = $row['id'];
                //     $_SESSION['name'] = $row['name'];
                //     $_SESSION['loggedin'] = true;

                //     if (isset($_SESSION['loggedin'])) {
                //         setcookie('id', $row['id'], time()+60);
                //         setcookie('name', $row['name'], time()+3600);
                //     }

                header('location:personalised_message1.php');
            }
            else{
                echo "<script>alert('Error')</script>";
                header('location:login_nonparticipant.php');
            }
        }
    }
?>