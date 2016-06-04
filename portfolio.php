<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iDesign - Portfolio</title>
    <!-- myProject references -->
    <link href="css/screen.css" rel="stylesheet" type="text/css" media="screen" />
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="dist/animate.css">
    <link rel="stylesheet" href="dist/morphext.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    <script src="http://malsup.github.io/min/jquery.cycle2.min.js"></script>
    <script src="js/jquery.cycle.all.js"></script>
   

    <script>
        $(document).ready(function() {
           $('#slideshow').cycle({
           fx: 'scrollHorz',
           speed: 500,
           timeout: 2000,
           pause: 1
           });
           
           $('#slide').cycle({ 
    fx:      'turnDown', 
    delay:   -1000 
});

           
           $('#fade').cycle();
                   
           $('#zoom').cycle({ 
    fx:    'zoom', 
    sync:  false, 
    delay: -1000 
});
           
        });
    </script>
</head>
<body>

    <div id="page">
        <header>
            <a class="logo" title="That Net" href="default.html" target="_blank"><span>That Net Design</span></a>
            <div class="hero">
                <h1>Add <span id="js-rotating">fun, art, style, life</span> with coding and design</h1>
                <a class="btn" title="Let's start creating websites" href="canvas.html">Let's start<span> creating websites</span></a>
                <script>window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"><\/script>')</script>
        <script src="dist/morphext.js"></script>
        <script>
         $("#js-rotating").Morphext({
    // The [in] animation type. Refer to Animate.css for a list of available animations.
    animation: "bounceIn",
    // An array of phrases to rotate are created based on this separator. Change it if you wish to separate the phrases differently (e.g. So Simple | Very Doge | Much Wow | Such Cool).
    separator: ",",
    // The delay between the changing of each phrase in milliseconds.
    speed: 2000,
    complete: function () {
        // Called after the entrance animation is executed.
    }
});
        </script>
            </div>
        </header>

        <section class="main">

           
        </section>


        <section class="aboutme">
            
        <div id="slideshow" style="margin-right: auto; margin-left: auto; float: left; clear: both;">
        <a href="http://triosdevelopers.com/~L.L.Johnson/iDesign/" target="_blank">
          <img src="images/1.jpg" width="420" height="315">
        </a>
        <a href="http://llesterjohnson.azurewebsites.net/" target="_blank">
         <img src="images/2.jpg" width="420" height="315">
        </a>
         <a href="http://triosdevelopers.com/~L.L.Johnson/iDesign/main.php" target="_blank">
         <img src="images/3.jpg" width="420" height="315">
         </a>
		<a href="ljljwpproject.azurewebsites.net" target="_blank">	
          <img src="images/4.jpg" width="420" height="315"> 
		</a>
         
        </div>


               <article>
                   
                <p> 
                    <strong style="font-size:large; font-weight:bold">L. Lester Johnson</strong><br />
                    Web Developer/Designer <br />
                </p>
                <p style ="text-align:justify">
                 I'm a father, husband, son, and a brother currently living in Toronto, Ontario. I love computers, both hardware and software, and I even dream in HTML5. I
                 am proficient in CSS3, PHP, JavaScript, Java, C#, .Net, MySQL, SQL, Adobe Illustrator, Adobe Photoshop, Adobe Bridge, SQL Server Management Studio, SQL Data Tools and web design applications such as Dreamweaver, Netbeans, XAMPP, Visual Studio 2013, and Eclipse.
                 I used to work for a computer manufacturing company called NEO Manufacturing Inc. as a senior technician, co-workers call me Verbal - The man with the plan. </p> 
                <p>I'm currently enrolled at triOS College Toronto Campus taking up Applications Developer (Mobile Web Specialist) and in a few months I'll be looking for a job to pay the bills and maybe even had extra to spend on a decent computer table.
                </p>
                

                <a class="btn" title="Beam me up, Scotty!" href="default.html">Home</a>

               

            </article>

        </section>

        <section class="how-to">
            <aside>
                <div class="content">
                    <img alt="Planning your website design" src="images/photo_planning.jpg">
                    <h4>How-To: Planning</h4>
                    <p>Planning your website ahead of time will give it clear direction as well as prevent missed deadlines and backtracking.</p>
                    <a title="What website design do you need." href="#">Learn more</a>
                </div>
            </aside>
            <aside>
                <div class="content">
                    <img alt="Choosing the right design" src="images/photo_mouse.jpg">

                    <h4>How-To: Design</h4>
                    <p>One of the most important things to remember during the process of website development is to create a clean, appealing design.</p>
                    <a title="Allow us to help you choose the right design." href="#">Learn more</a>
                </div>
            </aside>
            <blockquote>
                <p class="quote">I Design websites that my clients can manage and update on their own without any knowledge of HTML.</p>
                <p class="credit"><strong>L. Lester Johnson</strong><br><em>Web Designer</em><br>5nDesign</p>
            </blockquote>

        </section><?php include('navigation.php');?>
<?php include('footer.php');?>
</div>
</body>
</html>
