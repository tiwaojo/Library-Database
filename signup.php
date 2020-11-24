<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="CSS/style.css">

    <!-- FOnts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&family=Noto+Sans+JP:wght@700&family=Roboto&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800;900&display=swap" rel="stylesheet">


    <title>Signup</title>
</head>

<body>

    <div class="left-rec ">
        <div class="centered">
            <h4 class="library">
                Library
            </h4>
            <h3 class="lib-message">
                Join our knowledge repository
            </h3>
            <h5>Our Library Database contains a variety of content to explore</h5>
        </div>
    </div>

    <div class="right-rec">
        <div>
            <img class="group-people" src="Images\Group.svg" alt="group">
        </div>


        <h1 class="acc-header ">
            Create an Account
        </h1>
        <div class="centered">
            <form class="container py-4 col-form-label-lg" action="#" autocomplete="on" method="post">
                <!-- <h2> Signup Here </h2> -->


                <div class="form-group-row">
                    <div class="form-group-column">
                        <h4>First Name</h4>
                        <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                    </div>

                    <div class="form-group-column">
                        <h4>Last Name</h4>
                        <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                    </div>
                </div>


                <div class="form-group-row">
                    <div class="form-group-column">
                        <h4>Email</h4>
                        <input type="text" name="email" placeholder="Enter Email Address" class="form-control" required>
                    </div>

                    <div class="form-group-column">
                        <h4>Birth Date</h4>
                        <input type="date" name="bdate" max="1970-12-31" placeholder="BirthDate" class="form-control"
                            required>
                    </div>
                </div>

                <h4>Phone Number</h4>
                <div class="form-group">
                    <input type="tel" id="phone" name="phone" placeholder="123-456-7890"
                        pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" required>
                </div>

                <h4>Address</h4>
                <input type="text" name="streetAddone" placeholder="Street Address" style="width: 80%;"><br>
                <input type="text" name="streetAddtwo" placeholder="Street Address Line 2" style="width: 80%;"><br>
                <input type="text" name="city" placeholder="City">
                <input type="text" name="stateorProv" placeholder="State / Province"><br>
                <input type="text" name="postCode" placeholder="Postal / Zip Code">
                <input type="text" name="country" placeholder="Country"><br>

                <h4>Username</h4>
                <div class="form-group">
                    <input type="text" name="user" class="form-control" placeholder="Username" required>
                </div>
                <h4>Password</h4>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" class="form-control" required>
                </div>
                <div class="change-form">
                    <p id="" class="form-text text-muted">Already have an account? Log in <a
                            href="signin.php">here</a>
                    </p>
                </div>
                <br>
                <!-- create button for submitting the form -->
                <button type="submit" class="btn"> Submit </button>
            </form>
        </div>
    </div>


</body>

</html>