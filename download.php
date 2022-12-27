<?php
session_start();
include('config.php');
include('header.php');

if (isset($_SESSION['loggedin'])) {
    header('Location: download_logged.php');
    exit;
}
?>

    <center><h1>TERMS OF AGREEMENT</h1></center>
    <ol class="pr-5 pl-5 p-message" style="line-height: 24px;">
        <li>Must we remind that this fanbook is a free project and made voluntarily by the participants, thus DO NOT turn this fanbook into profit. It’s a pure expression of our love and appreciation towards TwoSet Violin that we do not want to ruin its genuine meaning by involving profit or commercializing it.</li>
        <li>Printing or mass printing is allowed, for further information about printing specification, kindly contact the editorial team.</li>
        <li>DO NOT post or share submission(s) without putting credit of the author(s) and/or artist(s). We highly suggest to contact the author(s) and/or artist(s) for the permission to post. If the author(s) and/or artist(s) is/are anonymous or the social media handle(s) is/are not given, please contact the editorial team.</li>
        <li>The gift is free to download and use. Please keep in mind that it’s voluntarily made and designed by an artist, hence DO NOT commercialize it.</li>
        <li>If we find any report or complain of fanbook/fanbook’s submissions/gift misuse, the editorial team will rightfully take actions upon that.</li>
        <li>For further questions and information, please contact the editorial team.</li>
    </ol>

    <div class="form-check pl-5 pt-2 mb-5">
        <input class="form-check-input" type="checkbox" style="border: 3px solid #dab194!important;">
        <label class="form-check-label p-message" style="font-weight:600;">
            I agree
        </label>
    </div>
    
    <center>
    <h2>DOWNLOAD HERE</h2>
    <div class="row">
        <div class="col-12 mb-4">
            <a href="https://bit.ly/OurThoughtsofYou-Fanbook">
                <button type="button" class="home-b mr-2 font-weight-bold" style="width:142px; height:35px;">
                <span><img src="assets/message.png" style="height:20px; width:auto;margin-bottom:3px;"></span>&nbsp;&nbsp;FANBOOK</button>
            </a>
            <a href="personalised_message1.php">
                <button type="button" class="home-b font-weight-bold" style="width:142px; height:35px;"><span><img src="assets/gift.png" style="height: 21px; width:auto;margin-bottom:3px;"></span>&nbsp;&nbsp;GIFT</button>
            </a>
        </div>
    </div>
    </center>
    
<?php
include('footer.php');
?>
