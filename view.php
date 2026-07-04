<!DOCTYPE html>
<html>
<head>
    <title>View All Workers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(223, 235, 238);
            padding: 40px;
            text-align: center;
        }

        h2 {
            color: #2d862d;
        }

        table {
            width: 90%;
            margin: 20px auto;
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

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .back-btn {
            display: inline-block;
            margin-top: 30px;
            padding: 10px 20px;
            background-color: #2d862d;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .back-btn:hover {
            background-color: #246b26;
        }
    </style>
</head>
<body>

<h2>All Registered Workers</h2>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "household-staffing";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p style='color:red;'>Connection failed: " . $conn->connect_error . "</p>");
}

// Fetch all workers
$sql = "SELECT * FROM workers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
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
                <td>" . htmlspecialchars($row['id']) . "</td>
                <td>" . htmlspecialchars($row['name']) . "</td>
                <td>" . htmlspecialchars($row['age']) . "</td>
                <td>" . htmlspecialchars($row['gender']) . "</td>
                <td>" . htmlspecialchars($row['job_type']) . "</td>
                <td>" . htmlspecialchars($row['location']) . "</td>
                <td>" . htmlspecialchars($row['phone']) . "</td>
                 <td>" . htmlspecialchars($row["nid_no"]) . "</td>
                <td>" . htmlspecialchars($row["work_experience"]) . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No workers found.</p>";
}

$conn->close();
?>

<a class="back-btn" href="jobs.php">← Back to Registration</a>

</body>

<p>
    <a href="index.php">Home</a>
  </p>
</html>
