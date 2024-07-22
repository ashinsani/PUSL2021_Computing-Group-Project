<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Chivo:wght@200&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Chivo', sans-serif;
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

.mcard-container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  margin-top: 25%;
}

.mcard {
  margin: 10px;
  width: 300px;
  border: 2px solid #ccc;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  transition: box-shadow 0.3s ease;
}

.mcard:hover {
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

.mcard .card-body {
  padding: 20px;
  color: black;
}

.mcard .card-title {
  margin-top: 0;
}

.mcard .card-text {
  margin-bottom: 0;
}
        body {
          background-image: url('images/abc.png'); /* Set the background image path */
          background-size: cover; /* This ensures the image covers the entire body */
          background-repeat: no-repeat !important;; /* This prevents the image from repeating */
          margin: 0;
          padding: 0;
        }
        .container {
          max-width: 700px;
          margin: 50px auto;
          background-color: rgba(255, 255, 255, 0.323); /* 50% transparent background */
          border-radius: 8px;
          padding: 20px;
          text-align: center;
          position: relative;
        }
        .day {
          font-size: 24px;
          font-weight: bold;
          color: #333;
          margin-bottom: 20px;
        }
        .card-container {
          display: flex;
          justify-content: space-around;
          align-items: center;
        }
        .card {
          width: 30%;
          padding: 20px;
          background-color: #f39d1b75;
          border-radius: 8px;
          box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
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
            <img src="{{URL('images/Yellow Emblem Food Drink Logo1.png')}}" alt="">
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

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <div class="day">Monday</div>
            <div class="card-container">
                <div class="card">
                    <h3>Breakfast</h3>
                    <p>Milk rice<br>Bread<br>Dhal temperd<br>Potato white curry<br>Fish ambulthiyal<br>Omlette<br><br>Desserts:<br>Banana<br>Youghert</p>
                </div>
                <div class="card">
                    <h3>Lunch</h3>
                    <p>White rice<br>Red rice<br>Dhal curry<br>Chicken black curry/Fish Curry<br>Brinjal Moju<br>Pol sambal<br>Papadam<br><br>Desserts:<br>Fruits: Papaya/Watermelon<br>Ice-cream</p>
                </div>
                <div class="card">
                    <h3>Dinner</h3>
                    <p>Kottu<br>Hoppers<br>Chicken curry<br>Lunu miris<br>Seeni sambal<br>Omlette<br><br>Desserts:<br>Fruits: Banana<br>Ice-cream</p>
                </div>
            </div>
        </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="day">Tuseday</div>
            <div class="card-container">
                <div class="card">
                    <h3>Breakfast</h3>
                    <p>Milk rice<br>Bread<br>Dhal temperd<br>Potato white curry<br>Fish ambulthiyal<br>Omlette<br><br>Desserts:<br>Banana<br>Youghert</p>
                </div>
                <div class="card">
                    <h3>Lunch</h3>
                    <p>White rice<br>Red rice<br>Dhal curry<br>Chicken black curry/Fish Curry<br>Brinjal Moju<br>Pol sambal<br>Papadam<br><br>Desserts:<br>Fruits: Papaya/Watermelon<br>Ice-cream</p>
                </div>
                <div class="card">
                    <h3>Dinner</h3>
                    <p>Kottu<br>Hoppers<br>Chicken curry<br>Lunu miris<br>Seeni sambal<br>Omlette<br><br>Desserts:<br>Fruits: Banana<br>Ice-cream</p>
                </div>
            </div>
        </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="day">Wednesday</div>
            <div class="card-container">
                <div class="card">
                    <h3>Breakfast</h3>
                    <p>Milk rice<br>Bread<br>Dhal temperd<br>Potato white curry<br>Fish ambulthiyal<br>Omlette<br><br>Desserts:<br>Banana<br>Youghert</p>
                </div>
                <div class="card">
                    <h3>Lunch</h3>
                    <p>White rice<br>Red rice<br>Dhal curry<br>Chicken black curry/Fish Curry<br>Brinjal Moju<br>Pol sambal<br>Papadam<br><br>Desserts:<br>Fruits: Papaya/Watermelon<br>Ice-cream</p>
                </div>
                <div class="card">
                    <h3>Dinner</h3>
                    <p>Kottu<br>Hoppers<br>Chicken curry<br>Lunu miris<br>Seeni sambal<br>Omlette<br><br>Desserts:<br>Fruits: Banana<br>Ice-cream</p>
                </div>
            </div>
        </div>
        </div>

        <div class="carousel-item">
          <div class="container">
            <div class="day">Thursday</div>
            <div class="card-container">
                <div class="card">
                    <h3>Breakfast</h3>
                    <p>Milk rice<br>Bread<br>Dhal temperd<br>Potato white curry<br>Fish ambulthiyal<br>Omlette<br><br>Desserts:<br>Banana<br>Youghert</p>
                </div>
                <div class="card">
                    <h3>Lunch</h3>
                    <p>White rice<br>Red rice<br>Dhal curry<br>Chicken black curry/Fish Curry<br>Brinjal Moju<br>Pol sambal<br>Papadam<br><br>Desserts:<br>Fruits: Papaya/Watermelon<br>Ice-cream</p>
                </div>
                <div class="card">
                    <h3>Dinner</h3>
                    <p>Kottu<br>Hoppers<br>Chicken curry<br>Lunu miris<br>Seeni sambal<br>Omlette<br><br>Desserts:<br>Fruits: Banana<br>Ice-cream</p>
                </div>
            </div>
        </div>
        </div>

        <div class="carousel-item">
          <div class="container">
            <div class="day">Fridayday</div>
            <div class="card-container">
                <div class="card">
                    <h3>Breakfast</h3>
                    <p>Milk rice<br>Bread<br>Dhal temperd<br>Potato white curry<br>Fish ambulthiyal<br>Omlette<br><br>Desserts:<br>Banana<br>Youghert</p>
                </div>
                <div class="card">
                    <h3>Lunch</h3>
                    <p>White rice<br>Red rice<br>Dhal curry<br>Chicken black curry/Fish Curry<br>Brinjal Moju<br>Pol sambal<br>Papadam<br><br>Desserts:<br>Fruits: Papaya/Watermelon<br>Ice-cream</p>
                </div>
                <div class="card">
                    <h3>Dinner</h3>
                    <p>Kottu<br>Hoppers<br>Chicken curry<br>Lunu miris<br>Seeni sambal<br>Omlette<br><br>Desserts:<br>Fruits: Banana<br>Ice-cream</p>
                </div>
            </div>
        </div>
        </div>

        <div class="carousel-item">
          <div class="container">
            <div class="day">Saturday</div>
            <div class="card-container">
                <div class="card">
                    <h3>Breakfast</h3>
                    <p>Milk rice<br>Bread<br>Dhal temperd<br>Potato white curry<br>Fish ambulthiyal<br>Omlette<br><br>Desserts:<br>Banana<br>Youghert</p>
                </div>
                <div class="card">
                    <h3>Lunch</h3>
                    <p>White rice<br>Red rice<br>Dhal curry<br>Chicken black curry/Fish Curry<br>Brinjal Moju<br>Pol sambal<br>Papadam<br><br>Desserts:<br>Fruits: Papaya/Watermelon<br>Ice-cream</p>
                </div>
                <div class="card">
                    <h3>Dinner</h3>
                    <p>Kottu<br>Hoppers<br>Chicken curry<br>Lunu miris<br>Seeni sambal<br>Omlette<br><br>Desserts:<br>Fruits: Banana<br>Ice-cream</p>
                </div>
            </div>
        </div>
        </div>

        <div class="carousel-item">
          <div class="container">
            <div class="day">Sunday</div>
            <div class="card-container">
                <div class="card">
                    <h3>Breakfast</h3>
                    <p>Milk rice<br>Bread<br>Dhal temperd<br>Potato white curry<br>Fish ambulthiyal<br>Omlette<br><br>Desserts:<br>Banana<br>Youghert</p>
                </div>
                <div class="card">
                    <h3>Lunch</h3>
                    <p>White rice<br>Red rice<br>Dhal curry<br>Chicken black curry/Fish Curry<br>Brinjal Moju<br>Pol sambal<br>Papadam<br><br>Desserts:<br>Fruits: Papaya/Watermelon<br>Ice-cream</p>
                </div>
                <div class="card">
                    <h3>Dinner</h3>
                    <p>Kottu<br>Hoppers<br>Chicken curry<br>Lunu miris<br>Seeni sambal<br>Omlette<br><br>Desserts:<br>Fruits: Banana<br>Ice-cream</p>
                </div>
            </div>
        </div>
        </div>
      </div>
      
    </div>

    
</body>
</html>