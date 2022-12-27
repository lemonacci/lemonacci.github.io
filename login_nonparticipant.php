<?php
// include('cek_sesi.php');
include('header.php');
?>

    <div class="container">
        <div class="row">
            <div class="col-md-6 p-4">
            </div>
            <div class="col-md-6 p-5">
                <h1 class="text-center"><b>Login</b></h1>

                <form class="row g-3 p-5 mt-n4" action="register_process.php" method="post">
                    <div class="col-12">
                      <label class="form-label"><b>NAME</b></label>
                      <input type="text" class="form-control login-input" id="name" name="name" required>
                    </div>
                    <div class="col-12 mt-3">
                      <label class="form-label"><b>IG/TWT USERNAME</b></label>
                      <input type="text" class="form-control login-input" id="socmed_uname" name="socmed_uname" required>
                    </div><div class="col-12 mt-3">
                      <label class="form-label"><b>COUNTRY</b></label>
                      <input type="text" class="form-control login-input" id="country" name="country" required>
                    </div>
                    <div class="col-12 mt-5">
                    <center><button type="submit" class="b-black" id="register" name="register">Next</button></center>
                    </div>
              </form>
            </div>
        </div>
    </div>
        
<script>
$('.dropdown-toggle').dropdown()
</script>    
<?php
include('footer.php');
?>