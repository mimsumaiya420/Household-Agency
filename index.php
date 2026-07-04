<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<?php include('header.php')  ?>
<body   >
    

   


    <title>Household Job Portal</title>
    <!-- start here -->

     
  <!-- Welcome Section with Background Image -->
<div style="position: relative; height: 400px; width: 100%; margin: 20px auto 0 auto; overflow: hidden;">

    <!-- Blurred Background Layer -->
    <div style="
        background-image: url('images/back.jpg');
        background-size: cover;
        background-position: center;
        filter: blur(1px);
        height: 100%;
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 0;
    "></div>

    <!-- Text Content Layer -->
    <div style="
        position: relative;
        z-index: 1;
        height: 100%;
        width: 100%;
        display: flex;
        align-items: flex-start;
        justify-content: center;
        padding-top: 40px;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
        color: black;
        text-align: center;
    ">
        <div style="max-width: 600px; padding: 0.1px; border-radius: 10px;">
            <h1 style="font-size: 32px; margin-bottom: 10px;"><strong>Welcome to Our Website</strong></h1>
            <p style="font-size: 20px; line-height: 1.5;">
                <strong>
                    This is a Householder Support Agency. <br>
                    You can easily hire workers for various home services including cleaning, caregiving, maintenance, and more.
                </strong>
            </p>
        </div>
    </div>
</div>

   
    
    <!-- add here... -->


  <h2 style="margin-top: 40px; text-align: center; margin-bottom:40px;">Available Service</h2>



    <div class="box">
        
        <form action="register.php" method="POST">
           
<h3>👩‍🍳 Cooking and Food-Related</h3>
<ul>
    <li>Cook / Chef</li>
    <li>Kitchen Helper</li>
    <li>Meal Prep Assistant</li>
</ul>

            

            <div class="buttons">
                
                <button type="button" onclick="window.location.href='hire.php'">Hire Worker</button>
                <button type="button" onclick="window.location.href='jobs.php'">Agent Worker Enrollment</button>
            </div>
        </form>
    </div>


     <!-- 2nd box -->

            <div class="box">
        
        <form action="register.php" method="POST">
           

          <h3>🧹 Cleaning and Housekeeping</h3>
<ul>
    <li>Housekeeper / Cleaner</li>
    <li>Maid</li>
    <li>Laundry Helper</li>
    <li>Window Cleaner</li>
</ul>


            

            <div class="buttons">
                 <button type="button" onclick="window.location.href='hire.php'">Hire Worker</button>
                <button type="button" onclick="window.location.href='jobs.php'">Agent Worker Enrollment</button>
            </div>
        </form>
    </div>


<!-- 3rd box -->


     <div class="box">
        
        <form action="register.php" method="POST">
           

          <h3>🧒 Child and Elderly Care</h3>
<ul>
    <li>Babysitter</li>
    <li>Nanny</li>
    <li>Governess / Tutor</li>
    <li>Elderly Caregiver</li>
</ul>

            

            <div class="buttons">
                <button type="button" onclick="window.location.href='hire.php'">Hire Worker</button>
                <button type="button" onclick="window.location.href='jobs.php'">Agent Worker Enrollment</button>
            </div>
        </form>
    </div>


    <!-- 4th box -->

    <div class="box">
        
        <form action="register.php" method="POST">
           

         <h3>🧰 Maintenance and Repairs</h3>
<ul>
    <li>Plumber</li>
    <li>Electrician</li>
    <li>Carpenter</li>
    <li>Handyman</li>
</ul>


            

            <div class="buttons">
                 <button type="button" onclick="window.location.href='hire.php'">Hire Worker</button>
                <button type="button" onclick="window.location.href='jobs.php'">Agent Worker Enrollment</button>
            </div>
        </form>
    </div>

<!-- 5th box -->

<div class="box">
        
        <form action="register.php" method="POST">
           

          <h3>🌱 Outdoor and Gardening</h3>
<ul>
    <li>Gardener</li>
    <li>Lawn Care Worker</li>
    <li>Landscaper</li>
</ul>


            

            <div class="buttons">
                 <button type="button" onclick="window.location.href='hire.php'">Hire Worker</button>
                <button type="button" onclick="window.location.href='jobs.php'">Agent Worker Enrollment</button>
            </div>
        </form>
    </div>
        <!-- 6th box -->

        <div class="box">
        
        <form action="register.php" method="POST">
           

          <h3>🚗 Driving and Transport</h3>
<ul>
    <li>Personal Driver / Chauffeur</li>
    <li>School Drop-off/Pick-up Driver</li>
</ul>


            

            <div class="buttons">
                <button type="button" onclick="window.location.href='hire.php'">Hire Worker</button>
                <button type="button" onclick="window.location.href='jobs.php'">Agent Worker Enrollment</button>
            </div>
        </form>
    </div>

    <!-- 7th box -->
 <div class="box">
        
        <form action="register.php" method="POST">
           

          <h3>🛍️ Others</h3>
<ul>
    <li>Personal Assistant</li>
    <li>House Manager</li>
    <li>Security Guard / Watchman</li>
    <li>Delivery Helper (for groceries, etc.)</li>
</ul>


            

            <div class="buttons">
                 <button type="button" onclick="window.location.href='hire.php'">Hire Worker</button>
                <button type="button" onclick="window.location.href='jobs.php'">Agent Worker Enrollment</button>
            </div>
        </form>
    </div>


  

  <!-- footer -->

  <footer style="background-color:#2a3d45; color: white; padding: 30px 0; text-align: center; font-family: Arial, sans-serif;">
    <div style="max-width: 1000px; margin: auto; padding: 0 20px;">
        <h3 style="margin-bottom: 10px;">Household Staffing Agency</h3>
        <p>House #14, Road #3, Islamnagar, Savar<br>
        Near Jahangirnagar University, Dhaka 1342</p>

        <p>📞 +880 1234 567890 &nbsp;&nbsp; | &nbsp;&nbsp; ✉️ info@householdagency.com</p>

        <div style="margin: 20px 0;">
            <a href="index.html" style="color: #ddd; margin: 0 10px; text-decoration: none;">Home</a>
            <a href="about.html" style="color: #ddd; margin: 0 10px; text-decoration: none;">About</a>
            <a href="services.html" style="color: #ddd; margin: 0 10px; text-decoration: none;">Services</a>
            <a href="contact.html" style="color: #ddd; margin: 0 10px; text-decoration: none;">Contact</a>
        </div>

        <!-- Social Icons -->
        <div style="margin: 20px 0;">
            <a href="https://facebook.com/youragency" target="_blank" style="margin: 0 10px;">
                <img src="https://cdn-icons-png.flaticon.com/24/733/733547.png" alt="Facebook" style="vertical-align: middle;">
            </a>
            <a href="https://youtube.com/youragency" target="_blank" style="margin: 0 10px;">
                <img src="https://cdn-icons-png.flaticon.com/24/1384/1384060.png" alt="YouTube" style="vertical-align: middle;">
            </a>
        </div>

        <p style="font-size: 14px; color: #bbb;">&copy; 2025 Household Staffing Agency. All rights reserved.</p>
    </div>
</footer>



  <!-- end footer -->
    
</body>
<style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            
        
        }

        .box {
            border: 2px solid #007BFF;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
            background-color: #f9f9f9;
        }

        h2 {
            color: #007BFF;
        }

        label {
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
        }

        .buttons {
            text-align: center;
        }

        .buttons button {
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
            border: none;
            color: white;
            background-color:rgb(22, 138, 49);
            border-radius: 5px;
            cursor: pointer;
        }

        .buttons button:hover {
            background-color:rgb(39, 170, 22);
        }
    </style>

  
</html>

