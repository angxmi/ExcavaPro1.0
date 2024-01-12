<html>
<html lang="en">

<head>
    
<style>
    
    table {
      font-family: Arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    th, td {
      border: 1px solid #ddd;
      padding: 8px;
    }
    
    th {
      background-color: #f2f2f2;
    }
    
    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

   
.btn {
  display: inline-block;
  padding: 8px 16px;
  background-color: #333;
  color: #fff;
  text-decoration: none;
  border-radius: 3px;
}
  </style>
    <style>
        .dropdown-menu {
            display: none;
        }
        
        .dropdown-menu.show {
            display: block;
        }
        .card-container {
  display: flex;
  flex-wrap: wrap;
}

.card {
  width: 400px;
  height:300px;
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
    <script>
        function toggleDropdown(event) {
            event.stopPropagation();
            var dropdown = event.currentTarget.nextElementSibling;
            dropdown.classList.toggle("show");
        }

        window.addEventListener("click", function(event) {
            var dropdowns = document.getElementsByClassName("dropdown-menu");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains("show")) {
                    openDropdown.classList.remove("show");
                }
            }
        });
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

    <title> dashboard</title>
    <link href="dashboardstyle.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <ul>
                <li>
                    <a href="#">
                        <i class="fas fa-hard-hat"></i>
                        <div class="title">Mining/ LOGO</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-th-large"></i>
                        <div class="title">Dashboard</div>
                    </a>
                </li>
                <ul>
                    <li>
                        <a href="#" onclick="toggleDropdown(event)">
                            <i class="fas fa-users-cog"></i>
                            <div class="title">Manage Users</div>
                        </a>
                        <ul id="userDropdown" class="dropdown-menu">
                            <li><a href="rigester user.html">Add User</a></li>
                            <li><a href="#">Delete User</a></li>
                            <li><a href="edit user.html">Edit User</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onclick="toggleDropdown(event)">
                            <i class="fas fa-building"></i>
                            <div class="title">Site Management</div>
                        </a>
                        <ul id="siteDropdown" class="dropdown-menu">
                            <li><a href="add site.html">Add Site</a></li>
                            <li><a href="#">Delete Site</a></li>
                            <li><a href="edit site.html">Edit Site</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onclick="toggleDropdown(event)">
                            <i class="fas fa-cogs"></i>
                            <div class="title">Product Management</div>
                        </a>
                        <ul id="productDropdown" class="dropdown-menu">
                            <li><a href="add product.html">Add Product</a></li>
                            <li><a href="#">Delete Product</a></li>
                            <li><a href="update product.html">Edit Product</a></li>
                        </ul>
                    </li>
                </ul>
                <li>
                    <a href="indexdashboard.html">
                        <i class="fas fa-cog"></i>
                        <div class="title">Settings</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-question"></i>
                        <div class="title">Help</div>
                    </a>
                </li>
            </ul>

        </div>
        <div class="main">
            <div class="top-bar">
                <div class="input-box">
                    <i class="uil uil-search"></i>
                    <input type="text" placeholder="Search here..." />
                    <button class="button">Search</button>
                </div>
                <i class="fas fa-bell"></i>
                <div class="user">
                    <img src="profile.png" alt="">
                </div>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="card-content">
                        <div class="number">00</div>
                        <div class="card-name">Number of Users</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">00</div>
                        <div class="card-name">Total Sites</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-map"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">00</div>
                        <div class="card-name">No of Categories</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-folder"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">00</div>
                        <div class="card-name">No of Products</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-cube"></i>
                    </div>
                </div>
            </div>
            <div class="tables">
                <div class="last-appointments">
                    <div class="heading">
                        <h2>PRODUCTS</h2>
                        <a href="image.php" class="btn">View All Products</a>
                    </div>
                  
                        <h2>All products</h2>
                        <!DOCTYPE html>

                        <table>
    <thead>
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
        
            <th>Quantity</th>
            <th>Purity</th>
            <th>Origin</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
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

// Check if the delete button is clicked and confirmation is received
if (isset($_GET['id']) && isset($_GET['action']) && $_GET['action'] === 'delete') {
    $id = $_GET['id'];

    // Prepare and execute the SQL query to delete a product with the corresponding id
    $deleteSql = "DELETE FROM product WHERE productID = $id";
    if ($conn->query($deleteSql) === TRUE) {
        echo "Product deleted successfully.";
    } else {
        echo "Error deleting product: " . $conn->error;
    }
}

// Prepare and execute the SQL query to select products from the database
$sql = "SELECT * FROM product";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["productID"] . "</td>";
        echo "<td>" . $row["productName"] . "</td>";
    
        echo "<td>" . $row["quantity"] . "</td>";
        echo "<td>" . $row["purity"] . "</td>";
        echo "<td>" . $row["origin"] . "</td>";
        echo "<td>" . $row["price"] . "</td>";
        echo "<td>";
        echo "<a href='?id=" . $row["productID"] . "&action=delete' onclick='return confirm(\"Are you sure you want to delete this product?\")'>Delete</a> | ";
        echo "<a href='edit.php?id=" . $row["productID"] . "'>Edit</a>";
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='8'>No products found</td></tr>";
}

// Close the database connection
$conn->close();
?>
         </tbody>
    </table>
   

                    </div>
                </div>
            
            </div>
            </div>
            
        </div>
  
</body>

</html>