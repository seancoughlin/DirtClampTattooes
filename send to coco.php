<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
	<title>Send me to Coco!!!</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<?php
	if(!empty($_POST["send"])){
		$fullname = $_POST["fullname"];
		$pronoun = $_POST["pronoun"];
		$fileName1 = $_POST["fileName1"];
		$fileName2 = $_POST["fileName2"];
		$fileName3 = $_POST["fileName3"];
		$When1 = $_POST["When1"];
		$When2 = $_POST["When2"];
		$When3 = $_POST["When3"];
		$questions = $_POST["questions"];
		$toEmail = $_POST["seanmikecoughlin@gmail.com"];

		$mailHeaders = "Name: " . fullname .
		"\r\n fullname: " . $fullname .
		"\r\n pronoun: " . $pronoun .
		"\r\n fileName1: " . $fileName1 .
		"\r\n fileName2: " . $fileName2 .
		"\r\n fileName3: " . $fileName3 .
		"\r\n When1: " . $When1 .
		"\r\n When2: " . $When2 .
		"\r\n When3: " . $When3 .
		"\r\n When2: " . $When2 .
		"\r\n questions: " . $questions .

		if(mail($toEmail, $fullname, $mailHeaders)){
			$message = "I got your message! weeeee talk to you so soon!!"
		}


	}

	?>

	<div class="form-container">
		<form action="client.php"> 
			<label for="fullname">First and Last Name</label><br>
			<input type="text" id="fullname" name="fullname" value="Your Name" required><br>
			<br>
			<label for="pronoun">What are your pronouns?</label><br>
			<input type="text" id="pronoun" name="pronoun" value="pronoun" required>
			<br>
			<br>
			<label for="Upload">Upload a photo of the design(s) you're interested in!</label><br>
			<input type="file" id="myFile" name="fileName1" required>
			<input type="file" id="myFile" name="fileName2">
			<input type="file" id="myFile" name="fileName3">
			<br>
			<br>
			<label for="When1">When works for you? <br> Please give me three dates and times!
				<br>
				i work Mon-Thurs with time slots at 11am and 3pm!!

			</label>
			<br>
			<br>
			<input type="text" id="When1" name="When1" value="1. (00/00/0000) @ 00:00AM/PM" required><br>
			<br>
			<input type="text" id="When2" name="When2" value="2. (00/00/0000) @ 00:00AM/PM" required>
			<br>
			<br>
			<input type="text" id="When3" name="When3" value="3. (00/00/0000) @ 00:00AM/PM" required>
			<br>
			<br>
			<label for="questions">Do you have any questions? 
				<br>
				Is there anything you want me to know before our appointment?
			</label>
			<input type="text" id="questions" name="questions" value="tell me!">
			<br>
			<br>
			please double check everything is right before you press submit!
			<br>
			If something is wrong I might not be able to give you a spot :-/
			<br>
			that would be not nice :-(
			<br>
			<br>
			<input type="submit" name="send" value="-----> Submit Everything < -----">

			<?php if(!empty($message)){ ?>

			} 
			<div class="success">
				<strong><?php echo $message; ?></strong>

			</form>
		</div>



	</body>
	</html>