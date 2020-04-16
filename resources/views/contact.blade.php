
@include('include.header')
    <style>
        .promo_full{
            background-image : url("https://d24cgw3uvb9a9h.cloudfront.net/static/93917/image/new/home/Zendesk.jpg");
        }
    </style>
	<section class="parallax_window_in" data-parallax="scroll" data-image-src="/home/new/5.jpg" data-natural-width="1400" data-natural-height="470">
		<div id="sub_content_in">
			<h1>Contact us</h1>
			<!-- <p>"Usu habeo equidem sanctus no ex melius labitur conceptam eos"</p> -->
		</div>
	</section>
	<!-- End section -->
	<!-- End SubHeader ============================================ -->

	<div class="container margin_60_35">
		<div class="row">

			<div class="col-md-9">
				<h3>Contact us</h3>
				<p>
					Mussum ipsum cacilds, vidis litro abertis.
				</p>
				<div>
					<div id="message-contact"></div>
					<form method="post" action="assets/contact.php" id="contactform">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>First name</label>
									<input type="text" class="form-control styled" id="name_contact" name="name_contact" placeholder="Jhon">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Last name</label>
									<input type="text" class="form-control styled" id="lastname_contact" name="lastname_contact" placeholder="Doe">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Email:</label>
									<input type="email" id="email_contact" name="email_contact" class="form-control styled" placeholder="jhon@email.com">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Phone number:</label>
									<input type="text" id="phone_contact" name="phone_contact" class="form-control styled" placeholder="00 44 5435435">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Your message:</label>
									<textarea rows="5" id="message_contact" name="message_contact" class="form-control styled" style="height:100px;" placeholder="Hello world!"></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Are you human? 3 + 1 =</label>
									<input type="text" id="verify_contact" class=" form-control styled" placeholder=" 3 + 1 =">
								</div>
								<p><input type="submit" value="Submit" class="btn_1" id="submit-contact"></p>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- End col lg 9 -->
			<aside class="col-md-3">
				<div class="box_style_2">
					<h4>Contacts info</h4>
					<p>
						11 Fifth Ave - New York, US
						<br> + 61 (2) 8093 3400
						<br>
						<a href="contacts.html#">info@domain.com</a>
					</p>
					<h5>Get directions</h5>
					<form action="http://maps.google.com/maps" method="get" target="_blank">
						<div class="form-group">
							<input type="text" name="saddr" placeholder="Enter your location" class="form-control styled">
							<input type="hidden" name="daddr" value="New York, NY 11430">
							<!-- Write here your end point -->
						</div>
						<input type="submit" value="Get directions" class="btn_1 add_bottom_15">
					</form>
					<hr class="styled">
					<h4>Departmens</h4>
					<ul class="contacts_info">
						<li>Administration
							<br>
							<a href="tel://003823932342">0038 23932342</a>
							<br><a href="tel://003823932342">admin@lovefit.com</a>
							<br>
							<small>Monday to Friday 9am - 7pm</small>
						</li>
						<li>General questions
							<br>
							<a href="tel://003823932342">0038 23932342</a>
							<br><a href="tel://003823932342">questions@lovefit.com</a>
							<br>
							<small>Monday to Friday 9am - 7pm</small>
						</li>
					</ul>
				</div>
			</aside>
			<!--End aside -->
		</div>
		<!-- End row -->
	</div>
	<!-- End container -->

	<div id="map_contact"></div>
	<!-- end map-->

	@include('include.footer')


	<script src="/home/js/jquery-2.2.4.min.js"></script>
	<script src="/home/js/common_scripts_min.js"></script>
	<script src="assets/validate.js"></script>
	<script src="/home/js/functions.js"></script>

	<!-- GOOGLE map -->
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDBaAMXXj9LXB8YlUmdfYzlAwepg8jxkpU"></script>
	<script type="text/javascript" src="/home/js/mapmarker.jquery.js"></script>
	<script type="text/javascript" src="/home/js/mapmarker_func.jquery.js"></script>

</body>

</html>