<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WORK EASY</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>

    <header>
        <a href="#" class="logo"><img src="logo1020.jpg"></a>

        <nav class="navbar">
            <a href="index.html" class="active">HOME</a>
            <a href="about.html">SERVICES</a>
            <a href="products.html" >PRODUCTS</a>
            <a href="register.html">HELP</a>
        </nav>
        <div class="icon">
            <i class="fas fa-bars" id="menu"></i>
            <!-- <a href="search.html"><i class="fas fa-search"></i></a> -->
            

        </div>
    </header>
    

    <div class="home" id="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper wrapper">
                <div class="swiper-slide slide slide1">
                    <div class="content">
                        <h3>WORK EASY</h3>
                        <h1>ASSURE YOU</h1>
                        <h2>
                        <p> 
                        
                            UNLOCKING THE  WORLD OF  POSSIBILITY  WITH WORK EASY
                        </p></h2>
                        <a href="http://localhost/crud/display.php" class="btn">HIER HERE</a>
                    </div>
                </div>

                <div class="swiper-slide slide slide2">
                    <div class="content">
                        <h3>WORK EASY</h3>
                        <h1>ASSURE YOU</h1>
                        <p>
                            UNLOCKING THE  WORLD OF  POSSIBILITY  WITH WORK EASY
                        </p>
                        <a href="http://localhost/crud/display.php" class="btn">HIER HERE</a>

                    </div>
                </div>
                <div class="swiper-slide slide slide3">
                    <div class="content">
                        <h3>WORK EASY</h3>
                        <h1>ASSURE YOU</h1>
                        <p>
                            UNLOCKING THE  WORLD OF  POSSIBILITY  WITH WORK EASY 
                        </p>
                        <a href="http://localhost/crud/display.php" class="btn">HIER HERE</a>
                    </div>
                </div>
               <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>


<!-- our menu end-->
<!-- our team start->

<!-news section end-->

<!-- footer section end-->
<section class="footer">
    <img src="logo1020.jpg" class="logo">
    <div class="container">
        <div>
            <h3>ABOUT US</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut laboriosam omnis</p>
                 </div>
    <div>
            <h3>TERMS AND CONDITIONS</h3>
            <a href="term.html" class="btn">READ MORE</a>

    </div>

            <input type="email" name="" placeholder="enter your email id"></input>
            <ul>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/vign_esh.2004/"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
            </ul>
        </div>

        <div>
            <h3>CONTACT US</h3>
            <span>WORKEASY.co</span>
            <span>+(91) 5566998811</span>
            <span>WORKEASY123@gmail.com</span>
            <span>www.WORKEASYco.in</span>
        </div>
    </div>
    <p>&copy;2023 reserved by WORK EASY co</p>
</section>
<!-- footer section end-->

<!--jump to top-->

<a href="#"><button class="top"><i class="fa-solid fa-angle-up"></i></button></a>

    <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".home-slider", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 7500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      loop:true,
    });
  </script>
            

    <script type="text/javascript">
        let menu =document.querySelector('#menu');
        let navbar =document.querySelector('.navbar');

        menu.onclick =() =>{
            
            menu.classList.toggle('fa-times');
            navbar.classList.toggle('active');
        }

    </script>
</body>
</html>