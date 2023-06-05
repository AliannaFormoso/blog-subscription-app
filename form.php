<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <?php include("includes/head-imports.php"); ?>
</head>

<body>
<?php include("includes/nav-header.php"); ?>

    
    <main>

        <form id="reg-form" method="post" action="submit.php">
            <h2>Sign Up Form</h2>
            <hr class="mb-5">
            <h4 class="mb-3">Please, fill out this form</h4>


            <label class="form-label mb-1 col-form-label-lg" for="first_name">First Name <sup>*</sup> </label>
            <input class="form-control-lg mb-3" required type="text" id="first_name" name="first_name"
                placeholder="Type your first name" minlength="3" maxlength="20" pattern="^[A-Za-z -']+$"
                title="It should be at least three letters, and only letters" />



            <label class="form-label col-form-label-lg" for="last_name">Last Name <sup>*</sup></label>
            <input class="form-control-lg mb-3" required type="text" id="last_name" name="last_name"
                placeholder="Type your last name(s)" minlength="3" maxlength="50" pattern="^[A-Za-z -']+$"
                title="It should be at least three letters, and just letters" />

            <label class="form-label  col-form-label-lg" for="email">Email <sup>*</sup></label>
            <input class="form-control-lg mb-3" required id="email" name="email" placeholder="Type your email"
                type="email" pattern="^[\w._%+\-]+(\+[\w_%+\-]+)?@[\w.]+\.[a-zA-Z]{2,8}$" />

            <label class="form-label col-form-label-lg" for="user_name">User Name <sup>*</sup></label>
            <input class="form-control-lg" required type="text" id="user_name" name="user_name" placeholder="User Name"
                minlength="3" maxlength="20" pattern="^[A-Za-z0-9]*([A-Za-z]{3})+[A-Za-z0-9]*$"
                title="It should be at least three characters long, and contain between 3 and 20 letters and/or any amount of numbers" />
            <span class="form-text mb-3">
                Must contain at least 3 letters, numbers are optional
            </span>


            <label class="form-label col-form-label-lg" for="pass">Password<sup>*</sup></label>
            <input class="form-control-lg" required type="password" id="pass" name="pass"
                placeholder="Type your password" pattern="^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=\S+$).{4,8}$"
                title="Password must contain: Between 4-8 characters, at least an uppercase letter, at least a lower-case letter and a number" />
            <span class="form-text mb-4">
                Must be 4-8 characters long, at least an upper case, lower case and number
            </span>

            <div class="form-check">
                <input class="form-check-input-lg" type="checkbox" value="" id="flexCheckDefault" required>&nbsp;&nbsp;
                <label class="form-check-label mb-4 col-form-label-lg" for="flexCheckDefault">
                    Agree to Terms and Conditions<sup>*</sup>
                </label>
            </div>

            <p class=" mb-5"><b>(*) Required fields</b></p>


            <div class="flex-buttons">
                <button id="submit-button" type="submit" class=" buttons">Submit</button>
                <button id="reset-button" type="reset" class=" buttons">Reset</button>


            </div>

        </form>
    </main>

    <?php include("includes/footer.php"); ?>
    <?php include("includes/scripts-imports.php"); ?>
<script src="scripts.js"></script>
</body>

</html>