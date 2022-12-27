<?php
include("config.php");
if(isset($_POST['create_non']))
{
	$user_id = $_POST['user_id1'];
    $message = $_POST['message1'];

	$sql = "INSERT INTO message (user_id,message) VALUES ('$user_id','$message')";

	$qry = mysqli_query($conn,$sql);
	if($qry)
	{
		echo "<script>
				alert('Thanks for your message!')
			</script>";
		echo "<script>
				window.location.href='personalised_message3.php';
			</script>";
	}
	else
	{
		echo "<script>alert('Data failed');</script>";
		echo "<script>
				window.location.href='personalised_message3.php';
			</script>";
	}             
} else
{
echo "<meta http-equiv='refresh' 
			content='0; url=personalised_message3.php'>";
}
