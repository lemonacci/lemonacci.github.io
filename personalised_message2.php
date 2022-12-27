<?php
include('header_logged.php');

$words = array('inspiring','warm','otherworldly','amazing');
$shuffled = shuffle($words);
?>

    <center>
        <img src="assets/profile.jpg" class="rounded-circle" style="width: 95px; height: 95px;">
        <h1 style="font-size:30px;">Hi, <?= $name ?>!</h1>

        <p class="pr-5 pl-5 p-message">
            Thank you for spending this two-month journey with us. We are immensely grateful to have you as a part of the fanbook project, our manifestation of love and supports toward Brett and Eddy. “Our Thoughts of You” would not be complete without you and your genuine feelings for our boys, in whichever way to express them. Your 
            <b>
            <?php 
                if ($submission4 != null) {
                    echo "$words[0] $submission, $words[1] $submission2, $words[2] $submission3, and $words[3] $submission4";
                } elseif ($submission3 != null && $submission4 == null) {
                    echo "$words[0] $submission, $words[1] $submission2, and $words[2] $submission3";
                } elseif ($submission2 != null && $submission3 == null) {
                    echo "$words[0] $submission and $words[1] $submission2";
                } else {
                    echo "$words[0] $submission";                    
                }
            ?>        
            </b>    
            made this fanbook’s adventure intact. Not only do we thank your end results, but we also want to, have to appreciate and acknowledge the time you’ve spent, the energy you’ve put in, and the dedication you’ve pulled through. We sincerely hope that Brett and Eddy feel the love we’ve poured that hugs them through the ups and downs. Last but not least, thank you for the memories we share together, may it forever settles in the back of your mind and heart.
        </p>

        <h2 style="font-size:25px;">But the journey has come to an end</h2>
        <p class="pr-5 pl-5 p-message">
            A start always pairs with an end. Like a sailing boat has found its shore, “Our Thoughts of You” has finally sheltered on its final home. This might be the final chapter of our story, but something we promise will last: our memory. The fanbook journey has come to an end, I hope the future will unite us in a new opportunity.
        </p>

        <h2 style="font-size:25px;">Before we part, anything you’d like to tell?</h2>
        <form action="add_message.php" method="post">
            <input type="hidden" name="user_id" id="user_id" value="<?= $id ?>">
            <textarea name="message" id="message" class="form-control p-4 mb-2" rows="3" style="border:3px solid #7B4D2D;border-radius: 10px;height:130px;"></textarea>
            <div class="row">
                <div class="col-12 mb-4">
                    <button type="submit" name="create" class="home-b" style="float:right;width: 90px;">Submit</button>
                </div>
            </div>
        </form>

        <h2 style="font-size:25px;">Lastly, until we meet again.</h2>
        <p class="pr-5 pl-5 p-message">
            With love,<br>
            Andrea, Gab, Key, Navarra, Sav, Shaf.
        </p>
    </center>
    <br>
    <!-- <a href="personalised_message1.html"><img src="assets/arrow-left.png" class="b-left mt-2"></a>
    <a href="personalised_message3.html"><img src="assets/arrow-right.png" class="b-right mt-2"></a> -->
        
    
<?php
include('footer.php');
?>