<?php
session_start();
include('config.php');
// include('cek_sesi.php');
include('header.php');

if (isset($_COOKIE['id']) && isset($_COOKIE['name'])) {

    $id = $_COOKIE['id'];
    $name = $_COOKIE['name'];

    $result = mysqli_query($conn, "SELECT name FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    if ($row['name']) {
        $_SESSION['loggedin'] = true;
    }
}

if (isset($_SESSION['loggedin'])) {
    header('Location: personalised_message1.php');
    exit;
}

if (isset($_GET['alert'])) {
    if ($_GET['alert'] == "gagal") {
        echo '
        <div class="alert alert-danger alert-dismissible fade show mt-n4" role="alert">
            Login failed!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>';
    }
}

if (isset($_GET['alert'])) {
    if ($_GET['alert'] == "logout") {
        echo '
        <div class="alert alert-warning alert-dismissible fade show mt-n4" role="alert">
            Logged out
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>';
    }
}
?>

    <div class="container">
        <div class="row">
            <div class="col-md-6 p-4">
            </div>
            <div class="col-md-6 p-5">
                <h1 class="text-center"><b>Login</b></h1>

                <form class="row p-5 mt-n1" action="login_process.php" method="post">
                    <div class="col-12">
                      <label class="form-label"><b>PARTICIPANT NAME</b></label>
                      <input type="text" class="form-control login-input" id="name" name="name" style="box-shadow: #7B4D2D!important;" required>
                    </div>
                    <div class="col-12 mt-3">
                        <label class="form-label"><b>COUNTRY</b></label>
                        <input type="text" class="form-control login-input" id="country" name="country" required>
                        <!-- <select class="form-control login-input">
                          <option selected>Choose...</option>
                          <option>...</option>
                        </select> -->
                    </div>
                    <div class="col-12 mt-5">
                    <center><a href="personalised_message1.php"><button type="submit" id="login" name="login"class="b-black">Next</button></a></center>
                    </div>
                  </form>

                <center><a href="login_nonparticipant.php"><button type="button" class="home-b mt-3" style="width: 200px;">I'm not a participant</button></a></center>
            </div>
        </div>
    </div>
        
<script>
$('.dropdown-toggle').dropdown()
</script>    
<?php
include('footer.php');
?>