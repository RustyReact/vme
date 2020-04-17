<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://meet.jit.si/external_api.js"></script>
<script>
$(document).ready(function(){
    var domain = "meet.jit.si";
	var options = {
		roomName: "V Meeting",
		width: 700,
		height: 700,
		parentNode: document.querySelector('#meet')
	}
var api = new JitsiMeetExternalAPI(domain, options);
});
</script>

<title>Single Room</title>
</head>
<body>
<h1>Welcome to US</h1>
<div class="row">
	<div class="col-lg-12">
		<div id="meet"></div>
	</div>
</div>

<p></p>
</body>
</html>