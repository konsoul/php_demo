<?php include "db.php";

function createData()
{
    // Check for 'name=submit' in HTML and store it global variable $_POST as an array
    if (isset($_POST["submit"])) {

        // Make $connect variable global
        global $connect;

        // Stores more 'name=' values into global variable $_POST and into an associative array
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Sanatize
        $username = mysqli_real_escape_string($connect, $username);
        $password = mysqli_real_escape_string($connect, $password);

        // Password Encryption
        $hashFormat = "$2y$10$";
        $salt = "iusesomecrazystrings22";
        $hashF_and_salt = $hashFormat . $salt;
        $password = crypt($password, $hashF_and_salt);
        
    
        // Check if username and password meet criteria
        if (!$username) {
            echo "Must Insert Username";
            echo "<br>";
            die();
        } elseif (!$password) {
            echo "Must Insert Valid Password That Is Longer Than 10 Characters";
            die();
        } elseif (strlen($password) <= 10) {
            echo "Password Must Be At Least 10 Characters";
            die();
        }

        // Where to insert data and which columns to store them
        $query = "INSERT INTO users (username,password) ";
        // What data you want inserted into the selected columns
        $query .= "VALUES ('$username', '$password')";
        // Connects to DB and then runs the SQL commands from the $query variable and store it into $result array for error checking
        $result = mysqli_query($connect, $query);
        // Check that info was inserted properly
        if (!$result) {
            die("Query Failed!" . mysqli_error($connect));
        } else {
            echo "Created!";
        }
    }
}

function updateData()
{
    if (isset($_POST["submit"])) {
        global $connect;

        $username = $_POST["username"];
        $password = $_POST["password"];
        $id = $_POST["id"];

        // Update the username and password in the database
        $query = "UPDATE users SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id ";

        $result = mysqli_query($connect, $query);
    
        if (!$result) {
            die("OH NO!!!" . mysqli_error($connect));
        } else {
            echo "Updated!";
        }
    }
}

function deleteRows()
{
    if (isset($_POST['submit'])) {
        global $connect;

        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        // Delete the username and password in the database
        $query = "DELETE FROM users WHERE id = $id ";

        $result = mysqli_query($connect, $query);
    
        if (!$result) {
            die("OH NO!!!" . mysqli_error($connect));
        } else {
            echo "Deleted :O";
        }
    }
}


function readData()
{
    global $connect;
    
    $query = "SELECT * FROM users ";
    
    $result = mysqli_query($connect, $query);
    // Check that info was inserted properly
    if (!$result) {
        die("Query Failed!" . mysqli_error());
    }
    while ($row = mysqli_fetch_assoc($result)) {
        print_r($row);
    }
}


function showAllData()
{
    global $connect;

    // Select everything from the 'users' table
    $query = "SELECT * FROM users";

    $result = mysqli_query($connect, $query);

    // Check that info was inserted properly
    if (!$result) {
        die("Query Failed!" . mysqli_error());
    }
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}


$text = "thirdday!0003";

$hashType = '$2y$10$';
$salt = "iusesomecrazystrings22";
$salt_hash = $hashType . $salt;
$encryptedText = crypt($text, $salt_hash);

echo $encryptedText;
