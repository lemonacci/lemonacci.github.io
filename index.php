<?php
session_start();
include('config.php');
include('header.php');

if (isset($_SESSION['loggedin'])) {
    header('Location: index_logged.php');
    exit;
}
?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-2" style="font-size: 41px;">OUR THOUGHTS OF YOU</h1>
            </div>
            <div class="col-12">
                <p class="p-home mt-n2"><b>2SET4MIL FANBOOK PROJECT</b></p>
            </div>
            <div class="col-12">
                <p class="p-home mt-1 mb-4" style="font-size: 16px;font-weight:600;width:570px;">This is an official website of “Our Thoughts of You”, a fanbook 2SET4MIL project to celebrate TwoSet Violin’s 4 million subscriber and nine years of YouTube career milestones. It is a free project which included 127 twosetters from around the world.<br><br><b>Login</b> for personalized messages and <b>See The Fanbook</b> for downloading the fanbook and free gift!</p>
            </div>
            <div class="col-12">
            <a href="login.php">
                <button class="btn btn-primary home-b">Login</button>
            </a>&nbsp;
            <a href="download.php">
                <button class="btn btn-primary home-b">See The Fanbook</button>
            </a>
            </div>
        </div>
    </div>

    
<?php
include('footer.php');
?>