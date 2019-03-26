/* mmtuts 

<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];


	$mailTo = "donna.dian.perry@gmail.com"; /*will not work gmail blocks php mail*/
	$headers = "From: ".$mailFrom; /*if this worked it would actually show who mail is from*/
	$txt = "You have received an e-mail from ".$name.".\n\n".$message; /*same with message*/


	mail($mailTo, $subject, $txt, $headers);
	header("Location: index, php?mailsend");
} */