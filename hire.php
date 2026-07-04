<!DOCTYPE html>
<html>
<head>
  <title>Hire Worker Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background:rgb(207, 216, 219);
      padding: 20px;
    }
    form {
      background: #fff;
      padding: 20px;
      max-width: 400px;
      margin: auto;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    label {
      font-weight: bold;
      display: block;
      margin-top: 10px;
    }
    input, select, textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    button {
      margin-top: 15px;
      background-color: #28a745;
      color: white;
      padding: 10px;
      width: 100%;
      border: none;
      border-radius: 5px;
      font-size: 16px;
    }
    button:hover {
      background-color: #218838;
      cursor: pointer;
    }
  </style>
</head>
<body>

  <h2 style="text-align:center;">Hire a Household Worker</h2>

  <form >
    <label for="name">Your Name:</label>
    <input type="text" name="name" id="name" required>

    <label for="address">Address:</label>
    <textarea name="address" id="address" rows="3" required></textarea>

    <label for="phone">Phone Number:</label>
    <input type="text" name="phone" id="phone" required>

    <label for="worker_type">Type of Worker Needed:</label>
    <select name="worker_type" id="worker_type" required>
      <option value="">-- Select --</option>
      <option value="Cook">Cook</option>
      <option value="Chef">Chef</option>
      <option value="Kitchen Helper">Kitchen Helper</option>
      <option value="Meal Prep Assistant">Meal Prep Assistant</option>


      <option value="Housekeeper/cleaner">Housekeeper/cleaner</option>
      <option value="Maid">Maid</option>
      <option value="Laundry Helper">Laudnry Helper</option>
      <option value="Window Cleaner">Window cleaner</option>
     

      <option value="Babysitter">Babysitter</option>
      <option value="tutor">Tutor</option>
      <option value="Elderly Caregiver">Elderly Caregiver</option>
      <option value="nanny">nanny</option>
      
      



    </select>



    <label for="worker_id">Worker_ID</label>
    <input type="text" name="worker_id" id="worker_id" required>

     <button type="button" onclick="window.location.href='contact.php'">Submit</button>
  </form>


  <p>
    <a href="index.php">Home</a>
  </p>

</body>
</html>
