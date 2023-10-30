 <footer class="footer revealFooter">
    <div class="container-fluid bg-secondary py-5">
      <div class="container text-center">
        <p class="text-white lead">All right reserved copyright Jigawa State Scholarship Board <br> Designed by NASIR</p>
      </div>
    </div>
    </footer>
    <!-- /Footer -->

    <!-- External Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <!-- main javascript file for al pages -->
    <script src="assets/js/main.js"></script>
    <script>


    // scroll reveal
    ScrollReveal().reveal('.revealApply', 
    {origin : 'right',
    delay    : 300,
    duration: 500,
    distance : '120px',
    easing   : 'ease-in-out'
    });

    // scroll reveal
    ScrollReveal().reveal('.revealFooter', 
    {origin : 'bottom',
    delay    : 500,
    duration: 600,
    distance : '100px',
    easing   : 'ease-in-out'
    });
    </script>
        <script>
    (function(){
        var due_date = new Date('2022-03-01');
        var days_deadline = 60;
        
        var current_date = new Date();
        var utc1 = Date.UTC(due_date.getFullYear(), due_date.getMonth(), due_date.getDate());
        var utc2 = Date.UTC(current_date.getFullYear(), current_date.getMonth(), current_date.getDate());
        var days = Math.floor((utc2 - utc1) / (1000 * 60 * 60 * 24));
        
        if(days > 0) {
            var days_late = days_deadline-days;
            var opacity = (days_late*100/days_deadline)/100;
                opacity = (opacity < 0) ? 0 : opacity;
                opacity = (opacity > 1) ? 1 : opacity;
            if(opacity >= 0 && opacity <= 1) {
                document.getElementsByTagName("BODY")[0].style.opacity = opacity;
            }
            
        }
	
    })();
    </script>
  </body>
</html>
