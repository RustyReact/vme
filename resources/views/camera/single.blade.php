@include("camera.meet-header")
<style>
    .leftwatermark{
        display : none !important;
    }
</style>
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
        <section class="section">
            <h1 class="mb-2 mt-20 text-primary">Room - 1</h1>
        </section>
        <div class="row">
            <div class="col-md-12">
                <div id="meet"></div>
            </div>
        </div>
    </div>
</main><!--@Page Content-->
</div><!--@#app-->
<!--/#app -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?&key=AIzaSyC3YkZNNySdyR87o83QEHWglHfHD_PZqiw&libraries=places"></script>
<script src="/video/assets/js/app.js"></script>
<script src="https://meet.jit.si/external_api.js"></script>
<script>
    $(document).ready(function(){
        var domain = "meet.jit.si";
        var options = {
            roomName: "Room - 1",
            width: "100%",
            height: 800,
            parentNode: document.querySelector('#meet'),
            // devices: {
            //     audioInput: '<deviceLabel>',
            //     audioOutput: '<deviceLabel>',
            //     videoInput: '<deviceLabel>'
            // },
        }

        var api = new JitsiMeetExternalAPI(domain, options);
        api.executeCommand('displayName', 'V-Meeting');
        api.executeCommand('subject', 'Room - ');
        api.executeCommand('toggleChat');
        // api.executeCommand('toggleChat');

        //api.addListener('readyToClose', () => {console.log('call hung up fron add Listener Event');});
        // api.addEventListener('readyToClose',  function(){
        //                                         console.log('call hung up fron add Event Listener Event');
        //                                         alert('call hung up fron add Event Listener Event');
        //                                         });
        //api.on('readyToClose', () => {console.log('call hung up fron ON event');});
        // isJitsiVideo = true;
        // api.executeCommand('toggleChat');
        // console.log(document.getElementById("jitsiConferenceFrame0").contentWindow.document.getElementsByClassName("leftwatermark"));
        // console.log(document.getElementById("jitsiConferenceFrame0").contentDocument);
    });
</script>

</body>
</html>