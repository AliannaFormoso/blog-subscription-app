<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("includes/head-imports.php"); ?>
    <title>Register form</title>
</head>

<body>
<?php include("includes/nav-header.php"); ?>


    <?php

    // function checkInput($input)  {
    //     $input = trim($input);
    //     $input = stripslashes($input);
    //     $input = htmlspecialchars($input);
    //     return $input;
    // }
    
    // $first_name = checkInput($_POST['first_name']);
    // $last_name = checkInput($_POST['last_name']);
    // $email = checkInput($_POST['email']);
    // $user_name = checkInput($_POST['user_name']);
    // $pass = checkInput($_POST['pass']);
    
    $first_name = ($_POST['first_name']);
    $last_name = ($_POST['last_name']);
    $email = ($_POST['email']);
    $user_name = ($_POST['user_name']);
    $pass = ($_POST['pass']);

    // fields validations
    if (empty($first_name) || empty($last_name) || empty($email) || empty($user_name) || empty($pass)) {
        echo "<br><h3>⚠️ Please, fill out all form fields</h3>";
        header("refresh:5;url=form.php");
        echo "<br><br><h4>You will return to the form in 5 secs ⌚</h4>";
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h3><br>⚠️ Email format is invalid</h3>";
        header("refresh:5;url=form.php");
        echo "<br><br><h4>You will return to the form in 5 secs ⌚</h4>";
        exit();
    } else if (strlen($pass) < 4 || strlen($pass) > 8) {
        echo "<h3><br>⚠️ Password must contain between 4 and 8 characters</h3>";
        header("refresh:5;url=form.php");
        echo "<br><br><h4>You will return to the form in 5 secs ⌚</h4>";
        exit();
    } else {


        // Create connection
    
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "sqlcourse";


        $conn = new mysqli($servername, $username, $password, $dbname);

        // -----------------  Check connection  -------------------------
    
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // check repeated email -----------------------------
        $sql = "SELECT first_name FROM records WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<h3><br><br>⚠️ This email is in use! Please try a different one.</h3>";
            header("refresh:5;url=form.php");
            echo "<br><br><h4>You will return to the form in 5 secs ⌚</h4>";

            exit();
        } else {


            echo "<h3>Connected successfully ☑️ </h3><br>";

            $sql = "INSERT INTO records (first_name, last_name, email, user_name, pass) VALUES ('$first_name','$last_name', '$email', '$user_name', '$pass')";

            if ($conn->query($sql) === TRUE) {
                echo "<h3>New record created  successfully ☑️</h3><br>";
                echo "<h4>Details 👇🏼</h4><br>";
                echo "<table >";
                echo "<thead><tr><th>Full Name</th><th>Email</th><th>User Name</th></tr></thead>";
                echo "<tr><td> $first_name $last_name </td><td> $email </td><td> $user_name</td></tr>";
                echo "</table>";
                echo "<a id='db' href='database.php' role='button'>" . "SHOW DATABASE" . "</a>";
            } else {
                echo "Something went wrong. Please try again. <br><br> Error: " . $sql . "<br><br>" . $conn->error;
            }


            $conn->close();

        }

    }

    ?>
<?php include("includes/scripts-imports.php"); ?>
<?php include("includes/footer.php"); ?>
</body>

</html>