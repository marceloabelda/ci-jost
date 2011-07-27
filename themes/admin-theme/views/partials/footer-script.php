<?php
echo js('jquery-1.6.min.js');
echo js('jquery-ui.js');
echo js('jquery.orbit.min.js');
echo js('script.js');
echo js('jquery.tipsy.js');
echo js('jquery.reveal.js');


// datatables tabletools
echo css('../datatables/css/TableTools.css');
//echo css('../datatables/css/demo_table_jui.css');
//echo css('../datatables/css/TableTools_JUI.css');
echo css('../datatables/css/demo_table.css');

echo js('../datatables/js/jquery.dataTables.js');
echo js('../datatables/js/ZeroClipboard.js');
echo js('../datatables/js/TableTools.js');



?>
<!--  script en load
<script>
   $(window).load(function() {
            $('#featured').orbit({
                 animation: 'vertical-slide',           // fade, horizontal-slide, vertical-slide, horizontal-push
                 animationSpeed: 1000,                
                 timer: true,            
                 advanceSpeed: 4000,                    // if timer is enabled, time between transitions 
                 pauseOnHover: false,                   // if you hover pauses the slider
                 startClockOnMouseOut: false,           // if clock should start on MouseOut
                 startClockOnMouseOutAfter: 1000,       // how long after MouseOut should the timer start again
                 directionalNav: false,                  // manual advancing directional navs
                 captions: true,                        // do you want captions?
                 captionAnimation: 'fade',               // fade, slideOpen, none
                 captionAnimationSpeed: 800,            // if so how quickly should they animate in
                 bullets: false,                        // true or false to activate the bullet navigation
                 bulletThumbs: false,                   // thumbnails for the bullets
                 bulletThumbLocation: '',               // location from this file where thumbs will be
                 afterSlideChange: function(){}         // empty function 
            });
     });
</script>
-->

<!--[if lt IE 7 ]>

<script src="js/libs/dd_belatedpng.js"></script>
<script> DD_belatedPNG.fix('img, .png_bg');</script>
<![endif]-->

<!--[if IE 6]>
    <script type="text/javascript"> 
        /*Load jQuery if not already loaded*/ if(typeof jQuery == 'undefined'){ document.write("<script type=\"text/javascript\"   src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js\"></"+"script>"); var __noconflict = true; } 
            var IE6UPDATE_OPTIONS = {
                icons_path: "js/ie6update/images/"
            }
     </script>
     <script type="text/javascript" src="js/ie6update/ie6update.js"></script>
<![endif]-->

<!--Google Analytics
<script>
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-11669243-11']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
Google Analytics-->
