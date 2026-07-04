<!DOCTYPE html>
<html>
<head>
    <title>Worker Registration Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(223, 235, 238);
            padding: 40px;
            text-align: center;
        }
        .message-box {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 200px;
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }
        .success,
        .error {
            font-size: 35px;
            font-weight: bold;
            text-align: center;
        }
        .success {
            color: #2d862d;
        }
        .error {
            color: #cc0000;
        }
        table {
            width: 90%;
            margin: 40px auto;
            border-collapse: collapse;
            background-color: #fff;
        }
        th, td {
            border: 1px solid #aaa;
            padding: 10px;
        }
        th {
            background-color: #2d862d;
            color: white;
        }
    </style>
</head>
<body>

<?php
// MySQL Connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "household-staffing";

$conn = new mysqli("localhost", "root", "", "household-staffing");

// Check connection
if ($conn->connect_error) {
    die("<div class='message-box'><p class='error'>❌ Connection failed: " . $conn->connect_error . "</p></div>");
}

// Collect POST data safely
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$job_type = $_POST['job_type'];
$location = $_POST['location'];
$phone = $_POST['phone'];
$nid_no = $_POST['nid_no'];
$work_experience = $_POST['work_experience'];

// Insert data
$sql = "INSERT INTO workers (name, age, gender, job_type, location, phone, nid_no, work_experience)
     
        VALUES ('$name', '$age', '$gender', '$job_type', '$location', '$phone', '$nid_no','$work_experience')";

if ($conn->query($sql) === TRUE) {
    echo "<div class='message-box'><p class='success'>🎉 Worker registered successfully!</p></div>";
} else {
    echo "<div class='message-box'><p class='error'>❌ Error: " . $conn->error . "</p></div>";
}

// Fetch all workers
$result = $conn->query("SELECT * FROM workers");

if ($result->num_rows > 0) {
    echo "<h2>All Registered Workers</h2>";
    echo "<table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Job Type</th>
                <th>Location</th>
                <th>Phone</th>
                <th>NID No</th>
                <th>Work Experience</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . htmlspecialchars($row["id"]) . "</td>
                <td>" . htmlspecialchars($row["name"]) . "</td>
                <td>" . htmlspecialchars($row["age"]) . "</td>
                <td>" . htmlspecialchars($row["gender"]) . "</td>
                <td>" . htmlspecialchars($row["job_type"]) . "</td>
                <td>" . htmlspecialchars($row["location"]) . "</td>
                <td>" . htmlspecialchars($row["phone"]) . "</td>
                <td>" . htmlspecialchars($row["nid_no"]) . "</td>
                <td>" . htmlspecialchars($row["work_experience"]) . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No workers registered yet.</p>";
}

$conn->close();
?>


<p>
    <a href="index.php">Home</a>
  </p>

</body>
</html>
