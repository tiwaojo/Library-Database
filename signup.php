<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD

=======
>>>>>>> 99e70e69873e24ac64d39ab339dbab707ec77034
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>

<body>
    <form class="container py-4 col-form-label-lg" action="processSignup.php" method="post">
        <h2> Signup Here </h2><br>
        <h3>First Name</h3>
        <div class="form-group">
            <input type="text" name="fname" class="form-control" placeholder="First Name" required>
        </div>
        <h3>Last Name</h3>
        <div class="form-group">
            <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
        </div>
        <h3>Email</h3>
        <div class="form-group">
            <input type="text" name="email" placeholder="Enter Email Address" class="form-control" required>
        </div>
        <h3>Birth Date</h3>
        <div class="form-group">
            <input type="date" name="bdate" placeholder="BirthDate" class="form-control" required>
        </div>
        
        <h3>Address</h3>
        <input type="text" name="streetAddone" placeholder="Street Address" style="width: 80%;"><br>
        <input type="text" name="streetAddtwo" placeholder="Street Address Line 2" style="width: 80%;"><br>
        <input type="text" name="city" placeholder="City">
        <input type="text" name="stateorProv" placeholder="State / Province"><br>
        <input type="text" name="postCode" placeholder="Postal / Zip Code">
        <input type="text" name="country" placeholder="Country"><br>

        <h3>Username</h3>
        <div class="form-group">
            <input type="text" name="user" class="form-control" placeholder="Username" required>
        </div>
        <h3>Password</h3>
        <div class="form-group">
            <input type="password" name="password" placeholder="Password" class="form-control" required>
        </div>
        <div class="">
            <p id="emailHelp" class="form-text text-muted">Already have an account? Log in <a href="signin.php">here</a>
            </p>
        </div>
        <br>
        <!-- create button for submitting the form -->
        <button type="submit" class="btn"> Submit </button>
    </form>
</body>

</html>