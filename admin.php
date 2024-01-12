<html> 
    <head>
        <title></title>
        <link rel="stylesheet" href="admin.css">
    </head>
    <body>
        <div class="adm">
<section id="admin">
    <div class="container">
      <h2>Admin Panel</h2>
      <?php
// Database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "mining";

$connection = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the entered email and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Retrieve user credentials from the database
    $query = "SELECT * FROM users WHERE email = '$email' AND password='$password'";
    $result = mysqli_query($connection, $query);

    // Check if the query was successful and if a user with the matching email exists
    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Verify the entered password against the stored password hash
        
            // Passwords match, user is logged in
           header("location:indexdashboard.php");
            // Perform any additional actions or redirect the user to a different page
       
    } else {
        echo "Invalid email or password!";
    }
}
?>

<!-- HTML form -->
<form method="POST">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Enter your username">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password">
    </div>
    <button type="submit">Login</button>
</form>
    </div>
  </section>
        </div>
</body>
</html>

