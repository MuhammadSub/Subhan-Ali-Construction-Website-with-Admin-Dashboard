<script src="js/jquery.ripples-min.js" type="text/javascript"></script>          
<script src="js/typed.min.js" type="text/javascript"></script>        
<script src="js/jquery.waypoints.min.js" type="text/javascript"></script>        
<script src="js/jquery.counterup.min.js" type="text/javascript"></script>           
<script src="js/main.js" type="text/javascript"></script>
<script src="js/smoothscroll.js" type="text/javascript"></script>


  <script> 
    $(window).scroll(function(){
        var height = $(window).scrollTop();
        if(height > 100){
            $('#back2Top').fadeIn();
        }
        else{
            $('#back2Top').fadeOut();
        }
    });
    
    $(document).ready(function(){
        $("#back2Top").click(function(event){
            event.preventDefault();
            $("html, body").animate({ scrollTop: 0}, "slow");
            return false;
        });
    });
</script>
 <script>
    
    $(function(){
        $('a.smooth-scroll').click(function(event){
            event.preventDefault();
            var section = $(this).attr("href");
            
            $('html,body').animate({
                scrollTop: $(section).offset().top - 64
            }, 1250, "easeInOutExpo");
        });
    });
    
</script>