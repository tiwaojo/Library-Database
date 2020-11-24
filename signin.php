<php ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/style.css">

        <!-- FOnts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link
            href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&family=Noto+Sans+JP:wght@700&family=Roboto&display=swap"
            rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800;900&display=swap" rel="stylesheet">
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

            <div>
                <img class="group-people" src="Images\community.svg" alt="group" style="width:40%">
            </div>
            
            <div class="centered-pos"><h1 class="acc-header " style="padding: 0;">
                Login here
            </h1>
                <form class="" action="#" method="post">

                    <div class="form-group">
                        <input type="text" name="email" placeholder="Email Address" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" class="form-control" required>
                    </div>
                    <br>

                    <div class="change-form">
                        <p id="" class="form-text text-muted">Don't have an account? Sign up <a
                                href="signup.php">here</a>
                        </p>
                    </div>
                    <br>
                    <button type="submit" class="btn"> Login </button>
                </form>
            </div>
        </div>
    </body>

    </html>