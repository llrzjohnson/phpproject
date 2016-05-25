<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iDesign - Contact</title>
    <!-- myProject references -->
    <link href="css/formvalidate.css" rel="stylesheet" type="text/css">
    <link href="css/screen.css" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" href="dist/animate.css">
    <link rel="stylesheet" href="dist/morphext.css">
    <script src="//https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="Scripts/jquery.validate.js"></script>
</head>
<body>

    <div id="page">
        <header>
            <a class="logo" title="That Net" href="default.php" target="_blank"><span>That Net Design</span></a>
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

        <section class="main"></section>

        <section class="contact">
            <article>
                <p>
                    <strong style="font-size:large; font-weight:bold">Please provide your name, email address (won't be published) and a comment</strong><br />
                </p>


                <form class="cmxform" id="commentForm" method="get" action="success.html">
                    <fieldset>

                        <p>
                            <label for="cname">Name :</label>
                            <input style="width:350px;" placeholder="At least 2 characters" id="cname" name="name" minlength="2" type="text" required>
                        </p>
                        <p>
                            <label for="cemail">E-Mail :</label>
                            <input style="width:350px;" placeholder="Valid E-mail" id="cemail" type="email" name="email" required>
                        </p>
                        <p>
                            <label for="curl">URL :</label>
                            <input style="width:350px;" placeholder="Valid URL, (optional)" id="curl" type="url" name="url">
                        </p>
                        <p>
                            <label for="ccomment">Your Inquiry :</label>
                            <textarea style="height:250px; width:350px;" placeholder="Inquiry" id="ccomment" name="comment" required></textarea>
                        </p>
                        <p>
                            <input class="submit" type="submit" value="Submit">
                        </p>
                    </fieldset>
                    
                </form>

               

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

        <nav>
            <ul>
                <li>
                    <a title="Home" href="default.php" aria-haspopup="true">Home</a>
                </li>
                <li>
                    <a title="About Me" href="about.php" aria-haspopup="true">About Me</a>

                </li>
                <li>
                    <a title="Portfolio" href="portfolio.php" aria-haspopup="true">Portfolio</a>
                </li>
                <li>
                    <a title="Canvas" href="canvas.php">Canvas</a>
                </li>
                <li>
                    <a title="Contact Me" href="#">Contact Me</a>
                </li>
                
            </ul>

        </nav>

        <footer>

            &copy; L. Lester Johnson 2016
            <div class="content">
                <a title="Privacy Policy" href="#">Privacy Policy</a>
                <a title="Terms of Service" href="#">Terms of Service</a>
            </div>
        </footer>

    </div>
</body>
</html>
