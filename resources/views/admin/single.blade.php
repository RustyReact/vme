
@include("admin.include.admin-header")
<style>
    #videospace .leftwatermark{
        display : none !important;
    }
    .watermark{
        display : none !important;
    }
    #jitsiConferenceFrame0 #react{
        display : none !important;
    }
    #largeVideoContainer{
        background-color : white !important;
    }
</style>
                    <!-- begin:: Content -->
                    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                        <!--Begin::Dashboard 6-->
                        <!--begin:: Widgets/Stats-->
                        <div class="kt-portlet">
                            <div class="kt-portlet__body  kt-portlet__body--fit">
                                <div id="meet"></div>
                            </div>
                        </div>
                    </div>
                </div>

@include("admin.include.admin-footer")     

    <!-- <script src="/video/assets/js/app.js"></script> -->
    <script src="https://meet.jit.si/external_api.js"></script>
    <script>
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
            DEFAULT_BACKGROUND: '#474747',
            chromeExtensionBanner: {
                url: "https://chrome.google.com/webstore/detail/jitsi-meetings/kglhbbefdnlheedjiejgomgmfplipfeb",
                chromeExtensionsInfo: [{"path": "jitsi-logo-48x48.png", "id": "kglhbbefdnlheedjiejgomgmfplipfeb"}]
            },
        }
        var api = new JitsiMeetExternalAPI(domain, options);
        
        api.executeCommand('displayName', '{{session("user_name")}}');
        api.executeCommand('subject', 'Room - {{session("user_name")}}');
        // $("#jitsiConferenceFrame0").find("#react").css("display","none");
    </script>
</body>
</html>