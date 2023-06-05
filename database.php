<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php error_reporting(E_ALL ^ E_NOTICE); ?>
    <?php error_reporting(0); ?> 
    <?php include("includes/head-imports.php"); ?>
    <title>DataBase records</title>
</head>

<body>
<?php include("includes/nav-header.php"); ?>
    
        <?php
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $user_name = $_POST['user_name'];
        $pass = $_POST['pass'];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "sqlcourse";

        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = "SELECT first_name, last_name, email, user_name FROM records";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            echo "<h3>Database records:</h3>";
            echo "<table>";
            echo "<thead><tr><th>Full Name</th><th>Email</th><th>User Name</th></tr></thead>";
            while ($row = $result->fetch_assoc()) {
                
        
                echo "<tr><td>" . $row["first_name"] . " " . $row["last_name"] . " </td><td>" . $row["email"] . "</td><td> " . $row["user_name"] . "</td></tr>";
                
            }

            echo "</table>";
        } else {
            echo "0 results";
        }

        $conn->close();

        ?>

<?php include("includes/scripts-imports.php"); ?>
<?php include("includes/footer.php"); ?>
</body>

</html>

