<?php
// include('cek_sesi.php');
include('header_logged.php');
?>

    <div>
    <h1 class="mb-n2" style="font-size:35px;text-align:center;">Our Thoughts of You</h1><br>
    <h3 class="mt-n4" style="font-size:20px;text-align:center;">A Personal Memory Lane</h3>
    
    <div class="container">
        <div class="row">
            <div class="col-6">
            <p class="text-personalised mt-n3">
            The boys still can’t move on from November 16 and believe me when I say I have left part of my soul at Victoria Concert Hall since that day.<br>
            Therefore, permit me to have a little flashback.<br><br>

            I couldn’t believe my eyes when I got queue number 109 in SISTIC and successfully proceeded to pay the ticket(s). And the thing that made me even more shocked was, there were <b>THOUSANDS</b> of fans who were also in line at the blood-bath battlefield of the ticket war. And the fact that not all the “soldiers” won the “battle”, I felt having a moral responsibility to bring the “presence” of fans that couldn't make it to Victoria Concert Hall and shared the same excitement I would experience there. In other words, I wanted to show my gratitude for getting the ticket(s) by creating a project that fans could participate in to celebrate their (almost) four million subscribers milestone.<br><br>

            Inspired by the “Four Hours of Asian Mum to Help You Focus on Practising/Studying/Working” video, I realized that during nine years of their YouTube career, there are millions of souls out there that have been inspired, cheered, or even healed. And I need them to fathom more about our thoughts of them. Knowing that there are many ways to express our love and combine it with the abundant talent of this fandom, making this project to be inclusive is the main goal. Thus, I decided to make a fanbook that contained stories, love letters, and fanarts. At first, I feared to even ideate this idea knowing that I was (am) new to tsvtwt, but to regret was (is) a bigger fear I avoid experiencing. So, I shot my shot.<br><br>

            From the start, I knew this was a BIG project that I would never be able to handle by myself. And with my limited friends in tsvtwt back then, I asked Navarra, Gab, Sav, Key, and Andrea to help me manage the project, and like pieces of a puzzle, we turned out to complete and perfect each other. I couldn’t and never ask for more. With their highly creative minds, our chat room was a complete buzz of ideas, as well as fangirling shoutings. Also, special mention to Navarra for pitching the fanfiction section so the fanbook could reach even further to the writer gang. During the initial stage, of course, there was a moment when I felt super insecure that I kept my expectation low. But seeing the enthusiasm (we received over a hundred submissions just in 24 hours, OMG), I believed that WE could make it happen, <b>TOGETHER.</b><br><br>
            </p>
            </div>

            <div class="col-6">
            <p class="text-personalised mt-n3">
            Ups and downs were inevitable, this project was not perfect, nor were we - the fanbook mods. Some criticisms were being thrown even before the fanbook was officially started, let alone during the fanbook-making process. But at the end of the day, it was not about how perfect or professionally made the fanbook was, it was about the sentiment. And the value of a sentiment is the amount of sacrifice you prepared to make for it, says John Galsworthy. And witnessing all of your sacrifices (time, energy, and idea), we never want to turn this into a letdown. We racked our brain preparing not only to plan B but up until plan G to hand the fanbook, buying a software license for lay-outing purpose, editing submissions so it perfectly qualifies with the fanbook’s rules and printing standard, beta-reading the submissions, riding around the city to find the best print shop, mailing TwoSet Violin support team and even SSO for the autograph session details, these all were being done with a hope that all of our hard works would be paid off.<br><br>

            Not to describe the fanbook-handing mission as a dramatic move is an understatement. The post-concert euphoria and all the enthusiasms (even from non-participants) spamming the SSO IG live chat were a pure excitement I never thought would happen and helped the fanbook find its final destination, Brett and Eddy. Also, a special tribute to Camera-san and (presumably) the head usher/ event manager for being supportive and cooperative to make sure the fanbooks were safely received by Brett and Eddy.<br><br>

            Lastly, thank you so much. If there were words or phrases out there that could describe something beyond “thank you”, please tell me and I will re-write this letter.
            To the editorial team, thank you for E V E R Y T H I N G, everything I can't mention one by one. Thank you for joining and supporting my bet for this crazy project, this crazy journey.
            To all participants, thank you for your dedication, loves, and support for Brett, Eddy, and this project. This would be absolutely nothing without you. I vouch for what Brett and Eddy have said multiple times, this is the <b>MOST TALENTED fandom ever.</b><br><br>

            With Love,<br>
            Shaf
            </p>
            </div>
        </div>
    </div>
    <br>
    <div>
        <center>
            <?php 
                $sql = "SELECT * FROM users WHERE id = " . $_SESSION['id'];
                $qry = mysqli_query($conn,$sql);
                $jml = mysqli_num_rows($qry);
                if($jml>0)
                {
                    $data = mysqli_fetch_array($qry);
                    $type = $data['type'];
                }

                if ($type == "participant") {
                    echo '
                    <a href="personalised_message2.php">
                        <button class="btn btn-primary home-b"><span><img src="assets/message.png" style="height: 27px; width:auto;"></span>&nbsp;&nbsp;Open your message here!</button>
                    </a>
                    ';
                } else {
                    echo '
                    <a href="personalised_message3.php">
                        <button class="btn btn-primary home-b"><span><img src="assets/message.png" style="height: 27px; width:auto;"></span>&nbsp;&nbsp;Open your message here!</button>
                    </a>';
                }
            ?>
        </center>
    </div>
    
</div>

        
    
<?php
include('footer.php');
?>