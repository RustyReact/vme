@include("camera.meet-header")

<!-- /.right-sidebar -->
<!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
<div class="control-sidebar-bg shadow  fixed"></div>

<svg class="d-none">
    <defs>
        <symbol id="icon-cross" viewBox="0 0 24 24">
            <title>cross</title>
            <path
                    d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"
            />
        </symbol>
    </defs>
</svg>

<main id="pageContent" class="page has-sidebar">
    <div class="container-fluid relative animatedParent animateOnce pt-5">
        <div class="animated fadeInUpShort p-md-5 p-3 pull-up-lg">
            <div class="row ">
                <div class="col-md-4">
                    <div id="meet-1"></div>
                </div>
                <div class="col-md-4">
                    <div id="meet-2"></div>
                </div>
                <div class="col-md-4">
                    <div id="meet-3"></div>
                </div>
            </div>
        </div>
    </div>
</main>
</div><!--@#app-->
<!--/#app -->
<script src="https://maps.googleapis.com/maps/api/js?&key=AIzaSyC3YkZNNySdyR87o83QEHWglHfHD_PZqiw&libraries=places"></script>
<script src="/video/assets/js/app.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://meet.jit.si/external_api.js"></script>
<script>
    $(document).ready(function(){
        var domain = "meet.jit.si";
        var options = {
            roomName: "V Meeting",
            width: "100%",
            height: 400,
            parentNode: document.querySelector('#meet-1')
        }
        var options2 = {
            roomName: "V Meeting",
            width: "100%",
            height: 400,
            parentNode: document.querySelector('#meet-2')
        }
        var options3 = {
            roomName: "V Meeting",
            width: "100%",
            height: 400,
            parentNode: document.querySelector('#meet-3')
        }
        var api = new JitsiMeetExternalAPI(domain, options);
        var api = new JitsiMeetExternalAPI(domain, options2);
        var api = new JitsiMeetExternalAPI(domain, options3);
    });
</script>

</body>
</html>