<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Yjang Wynter</title>
    <link rel="stylesheet" href="main-content.css" type="text/css">
    <link rel="stylesheet" href="nav.css" type="text/css">
      <link rel="stylesheet" href="contact-form.css" type="text/css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="icon" href="Logo.png">
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>

  </head>
  <body onload="typeWriter()">

    <div class="intro">
      <div class="intro-inner">
      <h1 id="name" ></h1>
      <h2>(pronounced "ee-jaan")</p>
      <p>I am a front-end developer <br>who loves to build and learn, <br>
        and currently studying web design at UCF.</p>

      <a href="#contact" class="btn1">Let's get in touch.</a>


        </div>
      </div>

            <!--    ==================
                Navigation Snippet Begins
                    ==================   -->
<!--- Small Navigation and title
<header >
<div id="myHeader" class=" nav">
    <nav id="navbar">
      <div class="nav-container">
      <div id="nav-image">
      <a href="#"> <img class="logo" src="Logo.png" alt="logo"></a>
      </div>

      <div class="nav-links">
      <ul>
        <li> <a href="#about">About</a> </li>
        <li> <a href="#projects">Projects</a> </li>
        <li> <a href="#services">Services</a> </li>
        <li> <a href="#contact">Contact</a> </li>
      </ul>

    </div>
    </div>
    </nav>
  </div>
    </header>
      -->
  <!--    ==================
        Navigation Snippet Ends
          ==================   -->

  <div class="content">
<main id="about"><!--Rundown of my ethics & values in my services & Rundown of my history and skills -->
  <div class="main-content">
      <h1><i>Ok, so what do you do anyway?</i></h1>
      <p>Well, I design and develop websites and web applications.<br/> From landing pages to CMS, I can design and build it.
      <br> However, sometimes if you find me in the wild I might be: <br>
      </p>
      <p>
      <ul>
        <li>Running & editing a podcast with my friend. <a target="_blank" href="https://tangentpodcast.com/">(On to Season 2!)</a></li>
            <li>Feeding my caffiene addiction</li>
        <li>Working on certifications on <a target="_blank"href="https://www.freecodecamp.org/yjangwynter">freeCodeCamp</a></li>

        </ul>
        </p>
      </div>
  </main>
  <section id="projects"><!--- Selection of my three projects-->
    <h1><i>I guess you're busy?</i></h1>
    <p id="project-text">Like a lot of things my life, it can take some time. <br/>
      That said, I'm open for work, whether on contract or employment. <br/>
    However, I honestly like the act of building and creating. <br/>
    It’s kind of like the feeling we had as kids playing with Legos. <br/>
That said, here’s a short selection of my recent projects!
    </p>

    <div class="sites">

 <div class="container">
   <img id="mom"src="mom_project.jpeg" alt="mom">
       <div class="overlay mom">
         <a target="_blank" href="https://solwynter.com" class="site-link" title="User Profile">
           <p>A Professional website for Stream of Services.<br /> The site is powered with Squarespace.</p>
          </a>
       </div>
 </div>
 <div class="container">
   <img id="codepen"src="codepen.png" class="image">
     <div class="overlay codepen">
       <a target="_blank" href="https://codepen.io/Yjang_Wynter/" class="site-link" title="User Profile">
         <p >I keep some small projects on CodePen to experiment and practice.</p>
       </a>
     </div>
 </div>
<div class="container">
  <img id="podcast"src="tp-logo.jpeg" class="image">
    <div class="overlay podcast">
      <a target="_blank" href="https://tangentpodcast.com" class="site-link" title="User Profile">
        <p>A Podcast with my friend Jeff and I.<br /> The site is powered with WordPress.</p>
      </a>
    </div>
  </div>


  </section>
  <section class="services" id="services"><!--- Two select starting & 1 custom -->
      <div class="service-text">

      <h1><i>OK, enough chat. <br/>Can you build me the next Amazon or Facebook?</i></h1>
        <p>
          Well not quite, however I believe in putting meaningful effort in every project I do.<br/>
        The way I do this is by crafting each of my projects with tactful design, <br/>focusing on optimization, and with integrity.<br/>
I just happen to build wonderful websites & web apps.<br/>
        </p>
        <h2>Would you like one?</h2>
      </div>
    <div class="packages">
        <div class="package-1">
            <div class="p1-text">
              <h1>Static Websites/ Landing Pages</h1>
              <p>Starting at $400 & typically includes:</p>
              <ul>
                <li>Domain & Hosting Registration</li>
                  <li>SSL Configuration</li>
                  <li>All Standard Pages</li>
                  <li>Personal Domain & G Suite Integration</li>
                  <li>Standard Technical Support</li>
                  <li>Contact Form</li>
                  <li>Delivery: 7-10 business days </li>

              </ul>
            </div>

        </div>
        <div class="package-2">
          <div class="p2-text">
          <h1>WordPress CMS Development</h1>
          <p>Starting at $600 & typically includes:</p>
          <ul>
            <li>All Features from previous package</li>
              <li>Third-Party Integration</li>
              <li>WordPress Mobile App Installation</li>
              <li> Premium Technical Support</li>
              <li>Delivery: 10-15 business days</li>
          </ul>
          </div>
        </div>
        <div class="package-3">
          <div class="p3-text">
          <h1>Web Application</h1>
              <p>Starting at $1200 & typically includes:</p>
              <ul>
                <li>All Features from previous packages</li>
                  <li>Full Technical Support</li>
                  <li>Delivery: To be discussed</li>
              </ul>
            </div>
        </div>
      </div>
  </section>
  <section id="contact"><!--- Contact Form -->
    <div class="contact-form">
      <h1>Don’t be a stranger. Say hello!</h1>
      <form action="http://yjangwynter.com/index.php" method="post">
        First Name: <input type="text" name="first_name"><br>
        Last Name: <input type="text" name="last_name"><br>
        Email: <input type="text" name="email"><br>
        Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
          <input type="submit" name="submit" value="Submit">
  </form>
    </div>
      <?php
      //Thank you @Funk FOrty Niner from stackoverflow
      if(isset($_POST['submit'])){
          $to = "yjangwynter@gmail.com"; // this is your Email address
          $from = $_POST['email']; // this is the sender's Email address
          $first_name = $_POST['first_name'];
          $last_name = $_POST['last_name'];
          $subject = "Form submission";
          $subject2 = "Copy of your form submission";
          $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
          $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

          $headers = "From:" . $from;
          $headers2 = "From:" . $to;
          mail($to,$subject,$message,$headers);
          mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
          }

      ?>
  </section>
  <footer id="footer"><!--- Social media, phone, copyright -->
&copy2019 Yjang Wynter <br> Stalk Me! <br>
<a target="_blank" href="https://twitter.com/yjangwynter"><i class="fa fa-twitter fa-2x"></i> </a>
<a target="_blank"href="https://github.com/YjangWynter"><i class="fa fa-github fa-2x"></i> </a>
<a target="_blank"href="https://linkedin.com/in/yjangwynter"><i class="fa fa-linkedin fa-2x"></i> </a>
  </footer>
</div>
<script>
/* Script from w3schools for sticky navbar */
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
  </body>
</html>
