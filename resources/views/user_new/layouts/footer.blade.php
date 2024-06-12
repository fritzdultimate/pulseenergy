        <div class="nk-footer nk-footer-fluid bg-lighter">
            <div class="container-xl wide-lg">
                <div class="nk-footer-wrap">
                    <div class="nk-footer-copyright"> &copy; 2023 {{ env('SITE_NAME') }}. Designed by <a href="https://{{ env('APP_NAME') }}.com/" target="_blank">{{ env('SITE_NAME') }} team</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
    
    
    
    <script src="{{ asset('_assets/js/bundleee9a.js?ver=3.2.2') }}"></script>
    <script src="{{ asset('_assets/js/scriptsee9a.js?ver=3.2.2') }}"></script>
    <script src="{{ asset('_assets/js/demo-settingsee9a.js?ver=3.2.2') }}"></script>
    <script src="{{ asset('_assets/js/charts/chart-investee9a.js?ver=3.2.2') }}"></script>
    {{-- <script src="//code.tidio.co/1wfothfhmyujkqoyzha7qxxz96munqtb.js" async></script> --}}

    <script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+31 610227339", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
  </body>
</html>