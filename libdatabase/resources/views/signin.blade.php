<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="../../public/css/navstyle.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&family=Noto+Sans+JP:wght@700&family=Roboto&display=swap" rel="stylesheet">
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
            <h5>Our Library Database contains a variety of content to explore.</h5>
        </div>
    </div>

    <div class="right-rec">

        <div>
            <img class="group-people" src="../Images\community.svg" alt="group" style="width:40%">
        </div>

        <div class="centered-pos">
            <h1 class="acc-header " style="padding: 0;">
                Login here
            </h1>
            <form class=""  action='{{ route('auth.authenticate')}}'  method="post">
                <!-- login page selected and method set as post-->
                @csrf
                <div class="form-group">
                    <input type="text" name="email" placeholder="Email Address" class="form-control" required>
                    <!--textfield for entering email-->
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" class="form-control" required>
                    <!--textfield for entering password -->
                </div>
                <br>

                <div class="change-form">
                    <p id="" class="form-text text-muted">Don't have an account? Sign up <a href="Register">here</a>
                        <!--link to signup page-->
                    </p>
                </div>
                <br>
                <div class="results">
                    @if(Session::get('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    @if(Session::get('fail'))
                    <div class="alert alert-success">
                        {{Session::get('fail')}}
                    </div>
                    @endif
                </div>
                <button type="submit" class="btn" value="Submit">Submit</button><!-- Submit button -->
            </form>
        </div>
    </div>
</body>

</html>