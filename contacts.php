<?php

define("TITLE", "contact");
include("includes/head.php");
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
								<input type="text" name="userName" placeholder="Your Name" value="" class="form-control form-group">
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<input type="text" name="email" placeholder="Your Email" value="" class="form-control form-group">
							</div>
							<div class="col-md-6">
								<input type="number" name="phone" placeholder="Your Phone" value="" class="form-control form-group">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="text" name="sub" placeholder="Subject" value="" class="form-control form-group">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<textarea name="mess" placeholder="Write a message" cols="30" rows="10" class="form-control form-group"></textarea>
							</div>
						</div>
					</form>
					<button class="btn px-5 btn-md btn-turqin">Send</button>
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
