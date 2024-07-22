<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rate Us & Give Feedback Form</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        /* Add the background image */
        background-image: url('images/abc.png');
        /* Adjust background image properties */
        background-size: cover;
        background-position: center;
    }
    .container {
        max-width: 600px;
        margin: 50px auto;
        background-color: rgba(243, 243, 243, 0.25); /* 50% transparent background */
        border-radius: 8px;
        padding: 30px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        
    }
    h1 {
        text-align: center;
        color: orangered;
    }
    .form-group {
        margin-bottom: 20px;

    }
    label {
        display: inline-block;
        font-weight: bold;
        margin-bottom: 5px;
        color: rgb(0, 0, 0);
    }
    input[type="text"],
    textarea {
        width: 100%;
        padding: 10px;
        border: 2px solid w;
        border-radius: 5px;
        background-color: rgba(255, 255, 255, 0.614); /* 50% transparent background */
    }
    input[type="checkbox"] {
        display: inline-block;
        margin-right: 5px;
        width: 20px; /* Adjust width */
        height: 20px; /* Adjust height */
        color: #45a049;
    }
    input[type="checkbox"]:checked + label {
        color: #45a049; /* Change label color to green when checkbox is checked */
    }
    .btn {
        display: inline-block;
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    .btn:hover {
        background-color: #45a049;
    }
    @import url('https://fonts.googleapis.com/css2?family=Chivo:wght@200&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Chivo', sans-serif;
}
body{
  background-color: grey;
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
form{
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  margin-top: 60px;
  gap: 4rem;
}
.input p {
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
form .input{
  width: 300px;
}
input, .input-i{
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
  padding: 14px;
}
.input-i input {
  border: none;
  padding-right: 0;
}
.input-i{
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

.day-container-1 {
background-color: black;
color: orange;
text-align: center;
width: 100%;
padding: 20px 0; /* Adjust padding as needed */
font-size: 36px;
position: absolute;
left: 0;
top: 55%;
}
.day-container-2 {
  background-color: black;
  color: orange;
  text-align: center;
  width: 100%;
  padding: 20px 0; /* Adjust padding as needed */
  font-size: 36px;
  position: absolute;
  left: 0;
  top: 155%;
  }

  .day-container-3 {
    background-color: black;
    color: orange;
    text-align: center;
    width: 100%;
    padding: 20px 0; /* Adjust padding as needed */
    font-size: 36px;
    position: absolute;
    left: 0;
    top: 255%;
    }
  
    .day-container-4 {
      background-color: black;
      color: orange;
      text-align: center;
      width: 100%;
      padding: 20px 0; /* Adjust padding as needed */
      font-size: 36px;
      position: absolute;
      left: 0;
      top: 355%;
      }
    
      .day-container-5 {
        background-color: black;
        color: orange;
        text-align: center;
        width: 100%;
        padding: 20px 0; /* Adjust padding as needed */
        font-size: 36px;
        position: absolute;
        left: 0;
        top: 455%;
        }

        .day-container-6 {
          background-color: black;
          color: orange;
          text-align: center;
          width: 100%;
          padding: 20px 0; /* Adjust padding as needed */
          font-size: 36px;
          position: absolute;
          left: 0;
          top: 555%;
          }

          .day-container-7 {
            background-color: black;
            color: orange;
            text-align: center;
            width: 100%;
            padding: 20px 0; /* Adjust padding as needed */
            font-size: 36px;
            position: absolute;
            left: 0;
            top: 655%;
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
            <img src="<?php echo e(URL('images/Yellow Emblem Food Drink Logo1.png')); ?>" alt="">
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

<div class="container">
    <h1>Rate Us & Give Feedback</h1>
    <form id="feedbackForm">
      <div>
      </div>
        <div class="form-group">
            <label for="Re_name">Your Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="rating">Rating:</label>
            <div>
                <input type="checkbox" id="rating1" name="rating" value="5">
                <label for="rating1"></label>
                <input type="checkbox" id="rating2" name="rating" value="4">
                <label for="rating2"></label>
                <input type="checkbox" id="rating3" name="rating" value="3">
                <label for="rating3"></label>
                <input type="checkbox" id="rating4" name="rating" value="2">
                <label for="rating4"></label>
                <input type="checkbox" id="rating5" name="rating" value="1">
                <label for="rating5"></label>
            </div>
        </div>
        <div class="form-group">
            <label for="Re_content">Review:</label>
            <textarea id="review" name="review" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn">Submit</button>
    </form>
</div>

<script>
    document.getElementById("feedbackForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent form submission
        alert("Your review has been added successfully!"); // Display message box
    });
</script>

</body>
</html><?php /**PATH C:\xampp\htdocs\resturant.app\resources\views/delightcelao/review.blade.php ENDPATH**/ ?>