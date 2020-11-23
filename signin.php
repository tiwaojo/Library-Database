<php ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/style.css">
        <title>Sign in</title>
    </head>

    <body>
        <div class="left-rec">
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
            <!-- <h3 class="acc-header">
            Create an Account
        </h3> -->
            <div class="centered">
                <form class="container py-4 col-form-label-lg" action="processLogin.php" method="post">
                    <h2> Login Here </h2><br>
                    <div class="form-group">
                        <input type="text" name="email" placeholder="Email Address" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" class="form-control" required>
                    </div>
                    <br>
                    <small id="emailHelp" class="form-text text-muted">Don't have an account? Sign up <a
                            href="signup.php">
                            here </a></small>
                    <br>
                    <button type="submit" class="btn"> Login </button>
                </form>
            </div>
        </div>
    </body>

    </html>