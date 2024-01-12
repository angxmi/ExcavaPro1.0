<html>
<html lang="en">

<head>
    <style>
        .dropdown-menu {
            display: none;
        }
        
        .dropdown-menu.show {
            display: block;
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
                        <h2>SITES</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <div class="container1">
                        <h2> Add Site Form</h2>
                        <!DOCTYPE html>
<html>
<head>
    <title>Form Submission</title>
</head>
<body>
    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $sitename = $_POST["firstname"];
        $location = $_POST["lastname"];
        $siteid = $_POST["siteid"];

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

        // Prepare and execute the SQL query to insert form data into the database
        $sql = "INSERT INTO site(sitename, sitelocation, siteid)
        VALUES ('$sitename', '$location', '$siteid')";

        if ($conn->query($sql) === TRUE) {
            echo "Form data submitted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close the database connection
        $conn->close();
    }
    ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <input type="text" name="firstname" placeholder="Site Name" required>
        <input type="text" name="lastname" placeholder="Location" required>
        <input type="text" name="siteid" placeholder="Site ID" >
        <input type="submit" value="Add">
    </form>

                    </div>
                </div>
                <div class="Admin-visiting">
                    <div class="last-appointments">
                        <div class="heading">
                            <h2>User's Profile</h2>
                            <a href="#" class="btn">View All</a>
                        </div>
                        <div class="visiting">
                            <thead>
                                <td>photo</td>
                                <td>Name</td>
                                <td>Visit time</td>

                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="img-box-small">
                                            <img src="profile.png" alt="">
                                        </div>
                                    </td>
                                    <td>Dieudonne</td>
                                    <td>12:00</td>
                                    <td><i class="far fa-eye"></i></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="img-box-small">
                                            <img src="profile.png" alt="">
                                        </div>
                                    </td>
                                    <td>Angel</td>
                                    <td>12:00</td>
                                    <td><i class="far fa-eye"></i></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="img-box-small">
                                            <img src="profile.png" alt="">
                                        </div>
                                    </td>
                                    <td>Zayla</td>
                                    <td>12:00</td>
                                    <td><i class="far fa-eye"></i></td>
                                </tr>

                                <tr>


                            </tbody>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>