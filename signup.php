<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
<form class="container py-4 col-form-label-lg" action="processSignup.php" method="post">
        <h2> Signup Here </h2><br>
        <div class="form-group">
          
          <input type="text" name="fname" class="form-control" placeholder="First Name" required>
        </div>
        <div class="form-group">
          
          <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
        </div>
        <div class="form-group">
          
          <input type="text" name="user" class="form-control" placeholder="Username" required>
        </div>
        <div class="form-group">
          
          <input type="password" name="password" placeholder="Password" class="form-control" required>
        </div>
        <div class="form-group">
          
          <input type="text" name="email" placeholder="Enter Email Address" class="form-control" required>
          
        </div>
        
        <div class="">
          <p id="emailHelp" class="form-text text-muted">Already have an account? Log in <a href="sigin.php">here</a></p>
        </div>
        <br>
        <!-- create button for submitting the form -->
        <button type="submit" class="btn"> Submit </button>
      </form>
</body>
</html>