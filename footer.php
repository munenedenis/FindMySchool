 </div> <!-- /container -->
<footer style="float;right;">
              
  <a href="http://www.code4kenya.org">&copy; code4kenya 2012</a>
      
</footer>
  



  
  
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.8.0.min.js"><\/script>')</script>
  
  <script src="js/bootstrap.min.js"></script>
  
    <!--
  <script>
  var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>

-->

 <script>
            (function($, d) {
                // please don't copy and paste this page
                // it breaks my analytics!
                
                // demos
                $('#one').liteAccordion({
                        onTriggerSlide : function() {
                            this.find('figcaption').fadeOut();
                        },
                        onSlideAnimComplete : function() {    
                            this.find('figcaption').fadeIn();
                        },
                        autoPlay : true,
                        pauseOnHover : true,
                        theme : 'stitch',
                        rounded : true,
                        enumerateSlides : true                  
                }).find('figcaption:first').show();
                $('#two').liteAccordion();
                $('#three').liteAccordion({ theme : 'dark', rounded : true, enumerateSlides : true, firstSlide : 2, linkable : true, easing: 'easeInOutQuart' });
                $('#four').liteAccordion({ theme : 'light', firstSlide : 3, easing: 'easeOutBounce', activateOn: 'mouseover' });  

                // social links
                var js, id = 'facebook-jssdk'; 

                if (d.getElementById(id)) return;

                js = d.createElement('script'); 
                js.id = id; 
                js.async = true;
                js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                d.getElementsByTagName('head')[0].appendChild(js);

                // Load Plus One Button
                jQuery.getScript('https://apis.google.com/js/plusone.js');
                // Load Tweet Button Script
                jQuery.getScript('https://platform.twitter.com/widgets.js');
                // Load LinkedIn button
                jQuery.getScript('https://platform.linkedin.com/in.js?v=2');                
            })(jQuery, document);

            // analytics
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-17442910-1']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
  
</body>
</html>
