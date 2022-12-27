<?php
include('header_logged.php');
?>

    <center>
        <img src="assets/profile.jpg" class="rounded-circle" style="width: 95px; height: 95px;">
        <h1 style="font-size:30px;">Hi, <?= $name ?>!</h1>

        <p class="pr-5 pl-5 p-message">
          Thank you for putting your interest and supporting 2SET4MIL Fanbook Project, Our Thoughts of You. This is a free fan project to celebrate TwoSet Violin’s four million subscribers and nine years of YouTube career. Contributed by fans around the world, this project included 127 Twosetters from 36 countries. However, even though this fan project had not reached you by the time it started, we are still tremendously happy and grateful we could (can) share the euphoria the moment we handed the fanbook, even the following bits. We hope we can be united someday in the future by another chance.
        </p>

        <h2 style="font-size:25px;">But the journey has come to an end</h2>
        <p class="pr-5 pl-5 p-message">
            A start always pairs with an end. Like a sailing boat has found its shore, “Our Thoughts of You” has finally sheltered on its final home. This might be the final chapter of our story, but something we promise will last: our memory. The fanbook journey has come to an end, I hope the future will unite us in a new opportunity.
        </p>

        <h2 style="font-size:25px;">Before we part, anything you’d like to tell?</h2> 
        <form action="add_message_non.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="user_id1" id="user_id1" value="<?= $id ?>" />
            <textarea id="message1" name="message1" class="form-control p-4 mb-2" rows="3" style="border:3px solid #7B4D2D;border-radius: 10px;height:130px;"></textarea>
            <div class="row">
                <div class="col-12 mb-4">
                    <button type="submit" name="create_non" class="home-b" style="float:right;width: 90px;">Submit</button>
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