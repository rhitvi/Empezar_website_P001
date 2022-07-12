<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Empezar</title>
    <link rel = "icon" href ="image/logo.jpg" 
            type = "image/x-icon">
    
</head>
<body>
    <header class="header">
        <a href="index.html"  class="logo"><img src="image/logo.jpg" class="img-logo"></a>
    <nav class="navbar">
        <ul class="nav-list">
            <li><a href="Aboutus.html" class="nav-link">About Us</a></li>
            <li><a href="services.html" class="nav-link">Service & Compliance</a></li>
            <li><a href="contactus.php" class="btn">Contact Us</a></li>
        </ul>
    </nav>
    </header>
    <div class="hero-image">
        <img src="image/img1.jpg" alt="">
        <div class="hero-text">
          <h1>Delivering Excellence in Logistics Solutions</h1>
        </div>
        </div>
       
    <section class="contact">
        <div class="content">
            <h1>Contact Us</h1>
            <p></p>
        </div>
        
        <div class="containr"></div>
            <div class="contactform">
                <form method="post" action="insert.php"> 
                    <h2>Get in touch</h2>
                    <div class="inputbox">
                        <input type="text" name="fname" required="required">
                        <span>Full name</span>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="email" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputbox">
                        <textarea required="required" name="messege"></textarea>
                        <span>Type your messege</span>
                    </div>
                    <div class="inputbox">
                        <input type="submit" name="" value="send">
                    </div>
                        
                </form>
            </div>
        </div>
    </section>

    <div class="footer-container">
        <h2>Give us a call!</h2>
        <div class="container grid grid-two">
            <div class="hero-data">.
               <p class="para"><b>Business hours</b><br>
                Monday-Friday: 8 am -5 pm (EST) <br>
                <b>Toll-free number:</b> +91 99133 88188 <br>
               <a href=" info@empezargroup.com"><u>Mail us</u></a></p>
            </div>
            <div class="hero-data">
               <p class="para"><b>Our Presence:</b><br>
                <b>West:</b> (Gujarat)
                Mundra/ Hajira/ Malya <br>
                <b> North:</b>
                Patli/ Delhi</p>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>

