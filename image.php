<!DOCTYPE html>
<html>
<head>
  <title>Card Example</title>
  <style>
    .card-container {
  display: flex;
  flex-wrap: wrap;
}

.card {
  width: 400px;
  height:400px;
  margin: 10px;
}
    .card {
      width: 300px;
      background-color: #f1f1f1;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }

    .card img {
      width: 100%;
      height: auto;
    }

    .card-content {
      padding: 20px;
    }

    .card h3 {
      margin-top: 0;
    }

    .card p {
      margin-bottom: 10px;
    }

    .card a {
      text-decoration: none;
      color: #333;
      background-color: #f1f1f1;
      padding: 8px 16px;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }

    .card a:hover {
      background-color: #ddd;
    }
  </style>
</head>
<body>
<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mining";

// Create a new connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select the product image and product description from the database
$sql = "SELECT product_image,productName,origin, productDescription FROM product";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo '<div class="card-container">';
    while ($row = $result->fetch_assoc()) {
        $productImage = $row["product_image"];
        $productDescription = $row["productDescription"];
        $productname=$row['productName'];
        $origin=$row['origin'];

        // Display the product image and product description in the HTML card
        echo '<div class="card">';
        echo '<p>' .   $productname . '</p>';
        echo '<img src="' . $productImage . '" alt="Card Image">';
        echo '<div class="card-content">';
     
        echo '<p>' . $origin . '</p>';
        echo '<p>' . $productDescription . '</p>';
      
        echo '</div>';
        echo '</div>';
    }
    echo '</div>'; // Close the card-container
} else {
    echo "No products found in the database.";
}

// Close the database connection
$conn->close();
?></body>
</html>