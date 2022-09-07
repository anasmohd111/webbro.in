
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web bro</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="webro.css">

</head>
<body>

<!-- header section starts  -->

<header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"> <i class="fas fa-user-secret"></i> web bro.in<br><h6>info tech company</h6></a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about </a>
        <a href="#service">service</a>
        <a href="#contact">contact us</a>
    </nav>

    <div class="icons" >
        <a href="#footer" class="fas fa-phone"></a>
        <a href="#contact" class="fas fa-user"></a>
    </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">


    <div class="slide-container active">
        <div class="slide">
            <div class="content">
                <span>welcome to</span>
                <h3>web bro.in</h3>
                <p>our job is to visualise and to make ideas real.</p>
                <a href="#" class="btn">let's start</a>
            </div>
            <div class="image">
                <img src="Static assets-rafiki.png" class="demo" alt="">
            </div>
        </div>
    </div>

    <div class="slide-container">
        <div class="slide">
            <div class="content">
                <span>Start your amazing stuff through </span>
                <h3>web bro.in</h3>
                <p>we will help you to grow your business.</p>
                <a href="#" class="btn">let's start</a>
            </div>
            <div class="image">
                <img src="Developer activity-bro.png" class="demo" alt="">
            </div>
        </div>
    </div>

    <div class="slide-container">
        <div class="slide">
            <div class="content">
                <span>scale up your bussiness with us</span>
                <h3>web bro.in</h3>
                <p>we have the best solution for your business to grow.</p>
                <a href="#" class="btn">let's start</a>
            </div>
            <div class="image">
                <img src="Programming-pana.png" class="demo" alt="">
            </div>
        </div>
    </div>

    <div id="prev" class="fas fa-chevron-left" onclick="prev()"></div>
    <div id="next" class="fas fa-chevron-right" onclick="next()"></div>

    <div class="wave wave1"></div>
    <div class="wave wave2"></div>
    <div class="wave wave3"></div>

    <div class="fas fa-cog nut1"></div>
    <div class="fas fa-cog nut2"></div>


</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">
    <div class="inner-container" >
        <h1>About us</h1>
        <p class="text">web bro.in is one of the best leading technology-providing company . web design,digital marketing,logo design and video & photo editing . our business solutions are designed to help you better align
            your marketing strategy with your overall business goals .
        </p>
    </div>
</section>

<!-- about section ends -->

<!-- service section starts  -->

<h1 class="heading" id="service"> <span>our</span> services</h1>
<section class="container">
    <div class="box">
    <img src="developer.png">
        <div class="content">
            <h3>web development</h3>
            <p>Web development services are used to design, build, support, and evolve all types of web-based software.</p>
            <a href="#">read more</a>
        </div>
    </div>
    <div class="box">
    <img src="coding.png">
        <div class="content">
            <h3>graphic design</h3>
            <p>We offer Graphic Design services know how graphic design is the process of creating visual content in form of pictures etc.</p>
            <a href="#">read more</a>
        </div>
    </div>
    <div class="box">
    <img src="digital.png">
        <div class="content">
            <h3>digital marketing</h3>
            <p>Digital marketing includes optimization across search engines visibility and engagement on social media platforms.</p>
            <a href="#">read more</a>
        </div>
    </div>
</section>

<section class="container">
    <div class="box">
    <img src="video.png">
        <div class="content">
            <h3>video & photo editing </h3>
            <p>i love editing, it's one of my favorite part.</p>
            <a href="#">read more</a>
        </div>
    </div>
    <div class="box">
    <img src="hosting.png">
        <div class="content">
            <h3>web hosting</h3>
            <p>the beginning is the most important thing of the work on your website.</p>
            <a href="#">read more</a>
        </div>
    </div>
    <div class="box">
    <img src="logo.png">
        <div class="content">
            <h3>logo design</h3>
            <p>logos are the graphic extension of the internal realities of a company.</p>
            <a href="#">read more</a>
        </div>
    </div>
</section>

<!-- service section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <form action="POST" >

        <div class="inputBox">
            <input type="fname" placeholder="Enter your first name" name="fname" />
            <input type="lname" placeholder="Enter your last name" name="lname" />
        </div>

        <div class="inputBox">
            <input type="number" placeholder="Enter your number" name="number" />
            <input type="email" placeholder="Enter your email" name="email" />
        </div>

        <textarea name="msg" placeholder="Your message"  id="" cols="30" rows="10" ></textarea>
        
        <input type="submit" value="Send message..." name="send" class="btn">

    </form>

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer" id="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#service">service</a>
            <a href="#review">reviews</a>
            <a href="#contact">contact us</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +91 7012712568 </a>
            <a href="#"> <i class="fas fa-envelope"></i> anas7736@gmail.com </a>
            <a href="#"> <i class="fas fa-map"></i> malappuram, kerala - india </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
        </div>

    </div>

    <div class="credit">created by <span>Anas Mohammed</span> | all right reserved</div>

</section>

<!-- footer section ends -->

















<!-- custom js file link  -->
<script src="portraits.js"></script>
    
</body>
</html>