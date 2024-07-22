<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
          background-image: url('abc.png');
          background-color: rgb(0, 0, 0);
          color: white;
          font-family: Arial, sans-serif;
          background-size: cover;
          background-repeat: no-repeat;
        }
        .reservationForm {
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
          height: 100vh;
          margin: 0;
        }
        .input {
          margin-bottom: 20px;
          position: relative;
        }
        .input p {
          margin: 0;
          color: orange; /* Set input box border color */
        }
        .input input, .input select {
          width: 150%;
          padding: 20px;
          border: 2px solid orange; /* Set input box border color */
          border-radius: 5px;
          background-color: rgba(0, 0, 0, 0.5);
          color: white;
          box-sizing: border-box;
        }
        .input input:focus, .input select:focus {
          outline: none;
        }
        .B_Table_No {
          color: orange; /* Set table checkbox color */
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
        }
        .B_Table_No-btn {
          background-color: rgb(255, 241, 50);
          color: black;
          padding: 10px 20px;
          border: none;
          cursor: pointer;
          margin: 5px;
        }
        .B_Table_No-btn.active {
          background-color: orange;
          color: white;
        }
        .B_Table_No-btn.saved {
          background-color: red;
          color: white;
        }
        .message-box {
          display: none;
          position: fixed;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          padding: 20px;
          background-color: rgba(255, 255, 255, 0.1);
          border-radius: 5px;
          text-align: center;
        }
        .heading {
    text-align: center;
    margin-bottom: 5px;
}

.save-btn {
    border: 2px solid orange;
    display: block;
    margin: 0 auto;
    padding: 15px 30px;
    font-size: 15px;
}

        @import url('https://fonts.googleapis.com/css2?family=Chivo:wght@200&display=swap');

    </style>
</head>
<body>
<div class="heading">
  <h2>Book your table from here</h2>
</div>


<section class="booking" id="booking">
    <form method='post' id="bookingForm" action="<?php echo e(route('delightcelao.store')); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('post'); ?>
        <div class="reservationForm">
            <div class="input">
                <p>Name:</p>
                <input type="text" id="B_Name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="input">
                <p>Email:</p>
                <input type="email" id="B_Email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="input">
                <p>Mobile Number:</p>
                <input type="tel" id="B_Mobile" name="mobile" pattern="[0-9]{10}" placeholder="Enter your mobile number" required>
                <small></small>
            </div>
            <div class="input">
                <p>Date:</p>
                <input type="date" id="B_Date" name="date" placeholder="Select a date" required>
            </div>
            <div class="input">
                <p>Meal:</p>
                <select id="B_Meal" name="meal" required>
                    <option value="meal">Select</option>
                    <option value="Breakfast">Breakfast</option>
                    <option value="Lunch">Lunch</option>
                    <option value="Dinner">Dinner</option>
                </select>
            </div>
            <div class="input">
                <p>Number of People:</p>
                <input type="number" id="B_People" name="people" min="1" placeholder="Enter the number of people" required>
            </div>
        </div>

        <div>
          <img src="<?php echo e(URL('images/bla.png')); ?>" alt="">
          <img src="images/bla.png" class="bla-image" alt="">
        </div>

        <div class="B_Table_No">
            <label><input type="checkbox" name="tables[]" value="Table No1"> Table No1</label><br>
            <label><input type="checkbox" name="tables[]" value="Table No2"> Table No2</label><br>
            <label><input type="checkbox" name="tables[]" value="Table No3"> Table No3</label><br>
            <label><input type="checkbox" name="tables[]" value="Table No4"> Table No4</label><br>
            <label><input type="checkbox" name="tables[]" value="Table No5"> Table No5</label><br>
            <label><input type="checkbox" name="tables[]" value="Table No6"> Table No6</label><br>
            <label><input type="checkbox" name="tables[]" value="Table No7"> Table No7</label><br>
            <label><input type="checkbox" name="tables[]" value="Table No8"> Table No8</label><br>
        </div>
        <input type="submit" value="Save my choice" class="save-btn">
    </form>
    <div>
  <?php if($errors->any()): ?>
    <div class="message-box">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
  <?php endif; ?>

  
</div>
</section>
<script>
    // JavaScript to display the message box after form submission
    document.getElementById('bookingForm').addEventListener('submit', function() {
        document.querySelector('.message-box').style.display = 'block';
    });
</script>


</body>
</html>
<?php /**PATH C:\xampp\htdocs\resturant.app\resources\views/delightcelao/booking.blade.php ENDPATH**/ ?>