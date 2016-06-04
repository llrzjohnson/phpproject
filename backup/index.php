<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iDesign - Home</title>
    <!-- myProject references -->
    <link href="css/screen.css" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" href="dist/animate.css">
    <link rel="stylesheet" href="dist/morphext.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
     <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
   <script src="dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="dist/sweetalert.css">
<script>
      $(window).load(function(){
        swal("Welcome to iDesign", "Let's start creating websites!", "success");
      });
  </script>
   
</head>
<body>

    <div id="page">
        <header>
            <a class="logo" title="That Net" href="http://www.google.com" target="_blank"><span>That Net Design</span></a>
            <div class="hero">
                <h1>Add <span id="js-rotating">fun, art, style, life</span> with coding and design</h1>
                <a class="btn" title="Let's start creating websites" href="canvas.php">Let's start<span> creating websites</span></a>
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

            <aside>
                <div class="content tools" style="background-image: url(images/icon_marker.svg)">
                    <h3><a href="https://www.google.com/webdesigner/" target="_blank">Tools of the trade</a></h3>
                    <p>
                        I use Visual Studio 2013, Dreamweaver, Brackets Visual, Net Beans, Brackets(free and really good, tons of plugins), and Notepad++ or SublimeText for quick file edits.
                        Each of them has its pros and cons and each code has specific needs.
                    </p>

                </div>
            </aside>

            <aside>
                <div class="content trending" style="background-image: url(images/icon_star.svg);">
                    <h3><a href="https://www.w3.org/blog/news/archives/5322" target="_blank">What&apos;s Trending</a></h3>
                    <p>Accessibility Requirements for People with Low Vision, developed by the Low Vision Accessibility Task Force (LVTF), 
                    was published last 17 March 2016 by the Web Content Accessibility Guidelines Working Group (WCAG WG).</p>

                </div>
            </aside>

            <aside>
                <div class="content find-it" style="background-image: url(images/icon_gear.svg)">
                    <h3><a href="https://www.google.ca/maps/place/North+York,+ON+M2R+3G7/@43.7819003,-79.4481732,17z/data=!3m1!4b1!4m2!3m1!1s0x882b2dbf3d55ea3d:0xf116a9867f216885" target="_blank">Where I am</a></h3>
                    <p>Toronto, the provincial capital of Ontario, Canada, is a large, ethnically diverse city sprawling along Lake Ontario’s northwestern shore.</p>

                </div>
            </aside>

           

        </section>

        <section class="atmosphere">
            <article>
                <h2>Designing websites with User Experience in mind.</h2>
                <p>
                    If visitors find your website easy to navigate, they will likely come back again and next time they will also tell their friends about it too.
                    UX design is the process of designing website that are useful, easy to use, and delightful to interact with. 
                    UX is also a very important factor to consider for Search Engine Optimization (SEO).
                </p>
                <a class="btn" title="Creating a modern atmosphere" href="#">Learn More</a>

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

        </section>
		<?php include('navigation.php');?>
		<?php include('footer.php');?>
		</div>
</body>
</html>
