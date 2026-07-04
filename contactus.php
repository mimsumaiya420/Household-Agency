<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us | Household Staffing Agency</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #bbd7de;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 40px;
            background-color: #edfedd;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h2 {
            text-align: center;
            color: #2a3d45;
            margin-bottom: 30px;
        }

        .contact-info, .contact-form {
            margin-bottom: 30px;
        }

        .contact-info p {
            font-size: 18px;
            line-height: 1.6;
            color: #333;
        }

        form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        form input, form textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        form button {
            padding: 12px 30px;
            font-size: 16px;
           background-color:rgb(22, 138, 49);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        form button:hover {
             background-color:rgb(39, 170, 22);
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Contact Us</h2>

    <div class="contact-info">
    <p><strong>Household Staffing Agency</strong></p>
    <p>House #14, Road #3, Islamnagar, Savar<br>
        Near Jahangirnagar University, Dhaka 1342</p>

    <p><strong>Phone:</strong> +880 1234 567890</p>
    <p><strong>Email:</strong> info@householdagency.com</p>
    <p><strong>Open Hours:</strong> Saturday - Thursday, 9:00 AM - 6:00 PM</p>
</div>


    <div class="contact-form">
        <form action="contact.php" method="post">
            <label for="name">Your Name:</label>
            <input type="text" name="name" id="name" required>

            <label for="email">Your Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="message">Your Message:</label>
            <textarea name="message" id="message" rows="6" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </div>
</div>


<p>
    <a href="index.php">Home</a>
  </p>
</body>
</html>
