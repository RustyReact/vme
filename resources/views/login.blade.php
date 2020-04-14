<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" href="/home/img/favicon.ico" type="image/x-icon">

	<link rel="stylesheet" type="text/css" href="/home/new/login/vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="/home/new/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="/home/new/login/vendor/animate/animate.css">
	
	<link rel="stylesheet" type="text/css" href="/home/new/login/vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="/home/new/login/vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="/home/new/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="/home/new/login/css/main.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet"/>
    <style>
        @media(max-width: 3000px){
            .container-login100{
                background : url("/home/new/login-1.jpg") 50%50% no-repeat;
                /* background-image : url("/home/new/login-1.jpg");
                background-position : left;
                background-size :  100%100%;
                background-repeat : no-repeat; */
            }
        }
        @media(max-width: 1600px){
            .container-login100{
                background : url("/home/new/login-1.jpg") 50%50% no-repeat;
            }
        }
        .wrap-login100{
            background : #00000082;
        }

    </style>
</head>
<body>
	<div class="limiter">
		<div class="container-login100">

        <div class="topnav">
            <div class="row">
                <div class="col-xs-3">
                    <a href="/" id="logo">
						<img src="/home/img/logo.png" width="95" height="27" alt="" data-retina="true" class="logo_normal">
					</a>
                </div>
                <div class="col-xs-9">
                    <div class="menu">
                        <a class="active" href="/">Home</a>
                        <a href="/contact">Contact US</a>
                    </div>
                </div>
            </div>
        </div>
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="/home/new/login/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" id="login_form">
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="/home/new/login/#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="/register">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
	
	<script src="/home/new/login/vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="/home/new/login/vendor/bootstrap/js/popper.js"></script>
	<script src="/home/new/login/vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="/home/new/login/vendor/select2/select2.min.js"></script>

	<script src="/home/new/login/vendor/tilt/tilt.jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script>
		$("#login_form").submit(function(event){
			event.preventDefault();
			var fs = new FormData(document.getElementById("login_form"));
			$.ajax({
				url : "/login",
				type : "post",
				data : fs,
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				processData : false,
				contentType : false,
				success : function(res){
					if(res == "success"){

					}
					else{
						toastr.options = {
							closeButton: !0,
							progressBar: !0,
							showMethod: "slideDown",
							timeOut: 6e3
						}, toastr.error("", "Fail to login").css(({
							width: "500px",
							"max-width": "500px"
						}));
					}
				},
				// error : function(res){
				// 	document.location.reload();	
				// }
			})
		})
	</script>
	<!-- <script src="/home/new/login/js/main.js"></script> -->
	
</body>
</html>