<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link rel="stylesheet" href="app.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Chivo:wght@200&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Chivo', sans-serif;
}

body {
          background-color:black
          
        }
.home {
  width: 100%;
  min-height: 100vh;
  background-image: url(./images/home\ bg.png);
  background-size: cover;
  display: flex;
  align-items: center;
  justify-content: start;
  position: relative;
  color: white;
  text-transform: uppercase;
}
.left  {
  width: 650px;
  min-height: 100vh;
  position: relative;
}
.left img {
  width: 100%;
  position: absolute;
  left: -100px;
}
.right {
  width: 750px;
  min-height: 100vh;
  padding: 70px 0;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  align-items: flex-end;
}
a {
  text-decoration: none;
  color: inherit;
}
.right .top {
  width: 600px;
  font-weight: 300;
}
.right .top p {
  font-size: 48px;
  text-align: right;
  margin-bottom: 16px;
}
.right .top a {
  display: block;
  text-align: end;
  font-size: 32px;
  color: #ffc901;
}
.middle img {
  width: 300px;
}
.bottom p  {
  font-size: 48px;
}
.bottom p span {
  color: #ffc901;
}
.home-footer {
  position: absolute;
  right: 0;
  bottom: 25px;
}
/* nav bar */
header {
  width: 100%;
  padding: 16px 0;
  background-color: #555553;
  position: sticky;
  top: 0;
  z-index: 1;
  text-transform: uppercase;
}
nav {
  width: 1200px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: auto;
  color: white;
  color: white;
  font-size: 20px;
  font-weight: 400;
}
nav .logo img {
  width: 145px;
}
nav .logo{
  margin-left: 100px;
  margin-right: 100px;
}
ul{
  display: flex;
  align-items: center;
}
.link {
  padding: 20px;
}
.link:hover{
  color: #ffc901;
}
::-webkit-scrollbar{
  width: 0;
}
html{
  scroll-behavior: smooth;
}
ul {
  display: flex;
  align-items: center;
}

.link {
  padding: 20px;
}

.link:hover {
  color: #ffc901;
}

/* remove scroll bar and smooth scroll */
::-webkit-scroollbar {
  width: 0;
}

html {
  scroll-behavior: smooth;
}

/* about us page */
.about {
  width: 100%;
  min-height: 100vh;
  background-image: url(./images/about.png);
  background-repeat: no-repeat;
  background-position: right;
  background-size: cover;
  color: white;
  padding: 100px;
}

.about-text, .title {
  display: flex;
  align-items: center;
  justify-content: center;
}
.about-text {
  width: 600px;
  flex-direction: column;
}

.title p {
  margin-left: 50px;
  margin-right: 50px;
  font-size: 48px;
}
.title p span {
  font-family: 'Atma', cursive;
}
.title, .des{
  margin-bottom: 68px;
}
.des{
  font-family: 'Overpass', sans-serif;
  font-weight: 300;
  text-align: center;
  font-size: 18px;
  line-height: 2rem;
  width: 500px;
}
.about-text a{
  font-family: 'Overpass', sans-serif;
  font-size: 32px;
}
.about-text a span{
  color: #ffc901;
}

/* menu */
.menu{
  width: 100%;
  min-height: 100vh;
  background-image: url(./images/home\ bg.png);
  background-size: cover;
  color: white;
  padding: 100px;
  position: relative;
}
.hand{
  position: absolute;
  top: 0;
  left: 10%;
  width: 550px;
}
.menu-text{
  width: 900px;
  display: flex;
  flex-direction: column;
  align-items: center;
  transform: translate(55%,10%);
}
.discount p{
  text-transform: uppercase;
  font-size: 46px;
  font-weight: 300;
}
.discount{
  width: 400px;
}
.discount p span{
  font-size: 38px;
}
.discount p:last-child{
  color: #ffc901;
  font-size: 26px;
  margin-top: 16px;
  text-align: center;
}
.gallery{
  color: #fff;
  background-image: url(./images/home\ bg.png);
  background-size: cover;
  min-height: 100vh;
  padding: 40px;
}
.gallery-images{
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 100px;
  gap: 1rem;
}
.gallery-images div{
  width: min-content;
}
.gallery-images img{
  margin-top: 1rem;
  border: 1px solid #ffc901;
}
.booking{
  min-height: 100vh;
  color: white;
  background-image: url(./images/booking\ bg.png);
  padding: 60px;
}
.sub-title{
  font-size: 26px;
  text-align: center;
  font-weight: 300;
}
.reservationForm{
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  margin-top: 60px;
  gap: 4rem;
}
.input{
  font-size: 24px;
  font-weight: lighter;
  margin-bottom: 10px;
}
.first,.mid,.last{
  display: flex;
  align-items: center;
  width: min-content;
  gap: 10rem;
}
.reservationForm.input{
  width: 300px;
}
input{
  outline: none;
  border: 1px solid #ffc901;
  width: 300px;
  background-color: transparent;
  display: flex;
  align-items: center;
  border-radius: 5px;
  color: white;
}
::placeholder {
  color: #fff;
}
input{
  padding: 10px;
}
.input {
  border: none;
  padding-right: 0;
}
.input{
  padding-right: 14px;
}
.box{
  color: #ffc901;
  cursor: pointer;
}
::-webkit-calendar-picker-indicator{
  cursor: pointer;
  background-color: #ffc901;
  padding: 5px;
  border-radius: 3px;
}
.btn{
  background-color: #ffc901;
  border: none;
  color: black;
  padding: 15px 70px 10px 70px;
  font-size: 32px;
  font-family: 'Overpass', sans-serif;
  border-radius: 10px;
  cursor: pointer;
}
.btn:hover{
  opacity: 0.8;
}
.contact{
  min-height: 100vh;
  color: white;
  background-image: url(./images/yellow\ dots.png);
  background-color: #141414;
  background-size: auto;
  background-repeat: no-repeat;
  background-position: right bottom;
}
.contact img{
  width: 100%;
}
.contact p, .contact-box p{
  font-family: 'Overpass', sans-serif;
} 
.para{
  width: 500px;
  display: flex;
  align-items: center;
  flex-direction: column;
  gap: 3rem;
  padding: 4rem 0;
  margin: auto;
}
.para .box{
  font-size: 62px;
}
.name{
  font-size: 28px;
  font-weight: lighter;
  letter-spacing: 2px;
  color: #ffc901;
}
.contact-box{
  padding: 50px;
  background-color: #1c1c1c;
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 3rem;
}
.text{
  width: 500px;
  display: flex;
  align-items: center;
  flex-direction: column;
  gap: 2rem;
}
.contact-box a{
  font-family: 'Overpass, sans-serif';
  color: #ffc901;
  font-size: 24px;
}
.contact-box h2{
  font-size: 32px;
  font-weight: lighter;
  color: #ffc901;
}
.container {
display: flex;
justify-content: space-around;
flex-wrap: wrap;
margin-top: 20px;
}
.card {
width: 300px;
background-color: #f9f9f9;
border-radius: 10px;
padding: 20px;
margin-bottom: 20px;
text-align: center;
}
.name {
margin-top: 10px;
font-weight: bold;
}
.stars {
margin-top: 10px;
}
.review {
margin-top: 10px;
}
.reservation-text {
position: absolute;
top: 30%;
left: 50%;
transform: translate(-50%, -50%);
text-align: center;
font-size: 40px;
font-weight: bold;
color: #ffc901;
}


/* CSS for background image */
.background {
background-image: url('view.png');
background-size: cover;
height: 100vh;
position: relative;
}

/* CSS for bla image */
.bla-image {
display: block;
margin: 0 auto;
margin-top: 150px; /* Adjust as needed */
width: 100%;
}

/* CSS for buttons */
.tables {
text-align: center;
margin-top: 20px; /* Adjust as needed */
}

.table-btn {
margin: 10px; /* Increase margin for better spacing */
padding: 15px 30px; /* Adjust padding to increase button size */
background-color: #ffcc00;
border: none;
border-radius: 8px; /* Increase border-radius for rounded corners */
font-size: 20px; /* Increase font size */
cursor: pointer;
}

.table-btn:hover {
background-color: #ffa500;
}

.save-btn-container {
text-align: center; /* Center the content horizontally */
margin-top: 20px;
margin-bottom: 50px; /* Adjust margin-top to create space between buttons */
display: flex;
justify-content: center;
}

/* CSS for Save my choice button */
.save-btn {
padding: 15px 30px; /* Adjust padding to match button size */
background-color: #ff9500;
border: none;
border-radius: 8px; /* Increase border-radius for rounded corners */
font-size: 30px; /* Adjust font size */
cursor: pointer;
}

/* Apply hover effect to Save my choice button */
.save-btn:hover {
background-color: #ffa500;
}
.menuc-text {
position: absolute;
top: 35%;
left: 50%;
transform: translate(-50%, -50%);
text-align: center;
font-size: 64px;
font-weight: bold;
color: rgb(251, 107, 40); /* Text color */
}

.save-btn-container input[type="submit"],
.save-btn-container a {
    margin: 0 10px;
    font-size: 20px;
}

    </style>
</head>
<body>
    <!--nav bar-->
    <header>
        <nav>
            <ul class="left-links" type="none">
                <li><a href="#about" class="link">
                    about us
                </a></li>
                <li><a href="#menu" class="link">
                    menu
                </a></li>
                <li><a href="#gallery" class="link">
                    gallery
                </a></li>
            </ul>
            <a href="#home" class="logo">
                <img src="./images/Yellow Emblem Food Drink Logo1.png" alt="">
            </a>
            <ul class="right-links" type="none">
                <li><a href="#booking" class="link">
                    booking
                </a></li>
                <li><a href="#contact" class="link">
                    contact
                </a></li>
                <li><a href="#" class="link">
                    blog
                </a></li>
            </ul>
        </nav>
    </header>
    <!-- home page-->
    <section id="home" class="home">
        <div class="left">
            <img src="./images/e.png" 
            alt="">
        </div>
        <div class="right">
            <div class="top">
                <p>
                    FIND THE HEAVEN IN OUR CULTURAL TASTE
                </p>
                <a href="#">
                    WITH ... 
                </a>
            </div>
            <div class="middle">
                <img src="./images/Yellow Emblem Food Drink Logo 2.png" alt="">
            </div>
            <div class="bottom">
                <p>book your <br> 
                table <span>now</span>
            </p>
            </div>
            <img src="./images/home footer.png" class="home-footer" alt="">
        </div>
    </section> 
    <!-- about us page -->
    <section class="about" id="about">
        <div class="about-text">
            <div class="title">
                <img src="./images/yellow wave.png" alt="">
                <p>ABOUT <span>Delight Celao</span></p>
                <img src="./images/yellow wave.png" alt="">

            </div>
            <p class="des">
                JOURNEYING OF FINDING THE GREATEST TASTE IN WORLD, WE TRIED ALMOST ALL THE CULTURAL TASTES. AS ALWAYS, WE STOPPED AT  GRANDMA'S FOODS. OF COURSE IT'S OUR CULTURAL TASTE, THAT WE ALWAYS CRAVING FOR. WE LEARNED GRANDMA'S HIDDEN RECIEPIES TO SHARE THE GREATEST TASTE WITH YOU
            </p>
            <a href="#">
                Visit Or Book <span>Now</span>
            </a>
        </div>
    </section>
    <section class="menu" id="menu">
        <img src="./images/koththu1.jpg" class="hand" alt="" height="700px" width="1050px">
        <div class="menu-text">
            <div class="title">
                <img src="./images/white wave.png" alt="">
                <p>OUR FOOD QUALITY</p>
                <img src="./images/white wave.png" alt="">
            </div>
            <p class="des">
                WE GUARANTEE THAT, WE ALWAYS USE PREMIUM SRI LANKAN SPICES AND INGREDIENTS. MOST IMPORTANTLY NO ARTIFICIAL FLAVOURS.
            </p>
            <div class="discount">
                <p>
                    double the fun <span>on every saturday</span>
                </p>
                <p>get upto 45% discount<br> </p>
                
            </div>
            <a href="/delightCelao/menus" class="btn">VIEW MENUS</a>
        </div>
    </section>
    <section class="gallery" id="gallery">
        <div class="title">
            <img src="./images/yellow wave.png" alt="">
                <p>GALLERY</p>
                <img src="./images/yellow wave.png" alt="">

        </div>
        <div class="gallery-images">
            <div>
                <img src="./images/suduappa2.jpg" alt="" height="250" width="450">
                <img src="./images/maakaral2.jpg" alt="" height="250" width="450">
            </div>
            <div>
                <img src="./images/parippu1.jpg" alt="" height="250" width="450">
                <img src="./images/pipinya2.jpg" alt="" height="250" width="450">
                <img src="./images/rathuala2.jpg" alt="" height="250" width="450">
            </div>
            <div>
                <img src="./images/cashewnut2.jpg" alt="" height="250" width="450">
                <img src="./images/aa2.jpg" alt="" height="250" width="450">
                
            </div>
        </div>
    </section>
    <section class="booking" id="booking">
    <div class="title">
        <img src="./images/yellow wave.png" alt="">
        <p>BOOK NOW</p>
        <img src="./images/yellow wave.png" alt="">
        

        
    </div>
    
        <div class="save-btn-container">
           
            <a href="/delightCelao/booking" class="btn">Next</a>
        </div>
        <div class="gallery-images">
            <div>
                <img src="./images/res1.jpg" alt="" height="250" width="450">
                
            </div>
            <div>
                <img src="./images/res2.jpg" alt="" height="250" width="450">
                <img src="./images/res3.jpg" alt="" height="250" width="450">
                
            </div>
            <div>
                <img src="./images/res4.jpg" alt="" height="250" width="450">
                
                
            </div>

</section>

    </script>
        <div class="container">
            <div class="card">
                <img src="images/heshi.jpg" alt="" height="250" width="220">
                <h1 class="name">HESHANI MADUPA</h1>
                <div class="stars">
                    <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                </div>
                <p class="review">
                    An absolute must-visit for anyone craving authentic Sri Lankan cuisine! This restaurant exceeded all expectations with its delicious array of dishes. From the moment we walked in, we were greeted warmly and made to feel right at home. The menu offers a fantastic selection of traditional Sri Lankan fare, with everything from fiery curries to crispy vadais. Each dish was bursting with flavor and expertly prepared. The cozy ambiance and attentive service only added to the overall experience. Highly recommend trying their kotthu roti and pol sambol – you won't be disappointed!
                </p>
            </div>
        
            <div class="card">
                <img src="images/dakshina.jpg" alt="" height="250" width="220">
                <h1 class="name">DAKSHINA DANANJAYA</h1>
                <div class="stars">
                    <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                </div>
                <p class="review">
                    An absolute must-visit for anyone craving authentic Sri Lankan cuisine! This restaurant exceeded all expectations with its delicious array of dishes. From the moment we walked in, we were greeted warmly and made to feel right at home. The menu offers a fantastic selection of traditional Sri Lankan fare, with everything from fiery curries to crispy vadais. Each dish was bursting with flavor and expertly prepared. The cozy ambiance and attentive service only added to the overall experience. Highly recommend trying their kotthu roti and pol sambol – you won't be disappointed!
                </p>
            </div>

            <div class="card">
                <img src="images/randi.jpg" alt="" height="250" width="220">
                <h1 class="name">RANDIMA PERERA</h1>
                <div class="stars">
                    <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                </div>
                <p class="review">
                    An absolute must-visit for anyone craving authentic Sri Lankan cuisine! This restaurant exceeded all expectations with its delicious array of dishes. From the moment we walked in, we were greeted warmly and made to feel right at home. The menu offers a fantastic selection of traditional Sri Lankan fare, with everything from fiery curries to crispy vadais. Each dish was bursting with flavor and expertly prepared. The cozy ambiance and attentive service only added to the overall experience. Highly recommend trying their kotthu roti and pol sambol – you won't be disappointed!
                </p>
            </div>

            <div class="card">
                <img src="images/ashi.jpg" alt="" height="250" width="220">
                <h1 class="name">ASHINSANI HERATH</h1>
                <div class="stars">
                    <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                </div>
                <p class="review">
                    An absolute must-visit for anyone craving authentic Sri Lankan cuisine! This restaurant exceeded all expectations with its delicious array of dishes. From the moment we walked in, we were greeted warmly and made to feel right at home. The menu offers a fantastic selection of traditional Sri Lankan fare, with everything from fiery curries to crispy vadais. Each dish was bursting with flavor and expertly prepared. The cozy ambiance and attentive service only added to the overall experience. Highly recommend trying their kotthu roti and pol sambol – you won't be disappointed!
                </p>
            </div>

            <div class="rate-us">
                <a href="/delightCelao/review" class="btn">Rate us</a>
            </div>

        </div>
    </section>
    <div class="contact-box">
        <div class="text">
            <h2>Enjoy Our Best Meal</h2>
            <P>
                TASTE THE AMAZING FOODS WITH THE GREAT VIEW OF SEA. HAVE A BLAST WITH YOUR LOVED ONES. ENJOY YOUR TIME FULLY.
            </P>
            <a href="#">CONTACT US NOW</a>
            <p>Delight Celao, Dehiwala, Colombo 011</p>
            <p>071 123 1234</p>
            <p>delightcelao@gmail.com</p>
        </div>
        <img src="./images/new1.png" alt="" height="350px" width="350px">
    </div>

  
</body>
</html><?php /**PATH C:\xampp\htdocs\resturant.app\resources\views/Delightcelao/index.blade.php ENDPATH**/ ?>