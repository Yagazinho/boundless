<?php

include("includes/config.php");

define("TITLE", "contact");
include("includes/head.php");

//page level script
$pageURL = "contacts.php";

//collecting data
if(isset($_POST['sendMessage'])){
	$userName = trim(stripslashes(mysqli_real_escape_string($con, $_POST['name'])));
	$email = trim(stripslashes(mysqli_real_escape_string($con, $_POST['email'])));
	$subject = trim(stripslashes(mysqli_real_escape_string($con, $_POST['sub'])));
	$message = trim(stripslashes(mysqli_real_escape_string($con, $_POST['mess'])));
	$phone = trim(intval($_POST['phone']));
//	validating data
	if(empty($userName)){
		array_push($errs, $userNameError = "field cannot be empty");
	}
	if(empty($email)){
		array_push($errs, $emailError = "field cannot be empty");
	}
	if(empty($phone)){
		array_push($errs, $phoneError = "field cannot be empty");
	}
	if(empty($subject)){
		array_push($errs, $subjectError = "field cannot be empty");
	}
	if(empty($message)){
		array_push($errs, $messageError = "field cannot be empty");
	}
//	checking for duplicates
	if(checkDuplicate('contacts', "mess='$message'")){ array_push($errs, $messageExistsError = ''); $emsg = "Message already exists, please modify"; }
//	uploading to db
	if(count($errs) == 0){
		if(mysqli_query($con, "INSERT INTO contacts(name,phone,email,sub,mess,dc) VALUE('$userName','$phone','$email','$subject','$message',NOW())")){
			$smsg = "Thank you '$userName' for your feedback, we will be in touch";
		}else{
			$emsg = "Something went wrong, please try again ".mysqli_error($con);
		}
	}
}


?>

<body>
	<div id="temp" class="temp-img">
		<div class="container-fluid">
			<?php include("includes/nav.php"); ?>
		</div>
		<div class="container py-10">
			<div class="row text-white">
				<div class="col-md-4 slide-text">
					<h1 class="pb-2"><strong>Give a Helping Hand To Those Who Need It!</strong></h1>
				</div>
			</div>
		</div>
	</div>
	<main>
		<header></header>
		<div class="contact-gap">
			<div class="row">
				<div class="col-md-12">
					<div class="location mb-cust"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d31519.25358313929!2d7.513905299999999!3d9.072264399999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sng!4v1686504716190!5m2!1sen!2sng" width="800" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</div>
			<div class="row my-5">
				<div class="col-md-8">
					<h5><strong>Get in touch</strong></h5>
					<form action="" method="post">
						<div class="row">
							<div class="col-md-12">
								<input type="text" name="name" placeholder="Your Name" value="<?php if(isset($_POST['name'])){echo $_POST['name'];} ?>" class="form-control form-group">
								<span class="text-danger"><?php if(isset($userNameError)){echo $userNameError; } ?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<input type="text" name="email" placeholder="Your Email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>" class="form-control form-group">
								<?php if(isset($emailError)):?><span class="text-danger"><?= $emailError;?></span><?php endif ?>
							</div>
							<div class="col-md-6">
								<input type="number" name="phone" placeholder="Your Phone" value="<?php if(isset($_POST['phone'])){echo $_POST['phone'];} ?>" class="form-control form-group">
								<?php if(isset($phoneError)):?><span class="text-danger"><?= $phoneError;?></span><?php endif ?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="text" name="sub" placeholder="Subject" value="<?php if(isset($_POST['sub'])){echo $_POST['sub'];} ?>" class="form-control form-group">
								<?php if(isset($subjectError)):?><span class="text-danger"><?= $subjectError;?></span><?php endif ?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<textarea name="mess" placeholder="Write a message" cols="30" rows="10" class="form-control form-group"><?php if(isset($_POST['mess'])){echo $_POST['mess'];} ?></textarea>
								<?php if(isset($messageError)):?><span class="text-danger"><?= $messageError;?></span><?php endif ?>
							</div>
						</div>
						<div class="d-flex">
							<button type="submit" name="sendMessage" class="btn px-5 btn-md btn-turqin">Send</button>
							<button type="reset" class="btn-lg btn-outline-danger btn">cancel</button>
						</div>
					</form>
				</div>
				<div class="col-md-4">
					<h5><strong>My Contact Details</strong></h5>
					<div class="row">
						<div class="col-md-12 my-3">
							<span class="text-turq">Email</span>
							<p class="">boundlesshearts@gmail.com</p>
						</div>
						<div class="col-md-12 my-3">
							<span class="text-turq">Phone</span>
							<p class="">(+234) 810 1992 11 </p>
						</div>
						<div class="col-md-12 my-3">
							<span class="text-turq">Address</span>
							<p class="">1234, forest hills boulevard <br>Asokoro <br>p.o.box 20 <br>912110 FCT</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</main>
	<?php include("includes/footer.php"); ?>
	<?php include("includes/foot.php"); ?>
