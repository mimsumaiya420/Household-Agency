<!DOCTYPE html>
<html>
<head>
    <title>Household Job Registration</title>
    <style>
        .worker-registration {
            max-width: 600px;
            margin: 50px auto;
            background-color: rgb(210, 238, 244);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            font-family: Arial, sans-serif;
        }
        .worker-registration h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }
        .worker-registration label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: #444;
        }
        .worker-registration input[type="text"],
        .worker-registration input[type="number"],
        .worker-registration select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }
        .worker-registration button {
            width: 100%;
            padding: 12px;
            background-color: rgb(22, 138, 49);
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .worker-registration button:hover {
            background-color: rgb(39, 170, 22);
        }
    </style>
</head>
<body>

<?php include('header.php'); ?>

<div class="worker-registration">
    <h2>Offline Worker Registration (by Field Agent)</h2>
    <form method="post" action="register.php">
        <label>Full Name:</label>
        <input type="text" name="name" required>

        <label>Age:</label>
        <input type="number" name="age" required>

        <label>Gender:</label>
        <select name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>

        <label>Type of Work:</label>
        <select name="job_type" required>
            <option value="">-- Select Job Type --</option>
            <option value="Maid">Maid</option>
            <option value="Plumber">Plumber</option>
            <option value="Electrician">Electrician</option>
            <option value="Carpenter">Carpenter</option>
            <option value="Handyman">Handyman</option>
            <option value="Cook">Cook</option>
            <option value="Cleaner">Cleaner</option>
        </select>

        <label>Location:</label>
        <input type="text" name="location" required>

        <label>Phone Number:</label>
        <input type="text" name="phone">

        <label>NID No:</label>
        <input type="text" name="nid_no" required>

        <label>Work Experience:</label>
        <input type="text" name="work_experience" required>

        <button type="submit">Register Worker</button>
    </form>
</div>

</body>
</html>
