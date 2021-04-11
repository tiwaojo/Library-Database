<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../CSS/style.css">
    <!-- {{-- <link rel="stylesheet" href="../../public/css/navstyle.css"> --}} -->
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Fonts -->
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
            <img class="group-people" src="../Images\Group.svg" alt="group">
        </div>


        <h1 class="acc-header ">

            Create an Account
        </h1>
        <div class="centered">
            <form class="container py-4 col-form-label-lg" action='{{ route('auth.create')}}' method="POST"><!--register.php selected and form uses Post method-->
                @csrf

                <div class="form-group-row">
                    <div class="form-group-column">
                        <h4>Name</h4><!--textfield to set First name-->
                        <input type="text" name="name" class="form-control" placeholder="Name" value="{{old('name') }}">
                        <span class="text-danger">@error('name'){{$message}}@enderror</span>
                    </div>

                    {{-- <div class="form-group-column">
                        <h4>Last Name</h4><!--textfield to set last name-->
                        <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                    </div> --}}
                </div>


                <div class="form-group-row">
                    <div class="form-group-column">
                        <h4>Email</h4><!--Email textfield to set Email-->
                        <input type="text" name="email" placeholder="Enter Email Address" class="form-control"value="{{old('email') }}" >
                        <span class="text-danger">@error('email'){{$message}}@enderror</span>
                    </div>

                    {{-- <div class="form-group-column">
                        <h4>Birth Date</h4><!--Date/month to set Birthdate-->
                        <input type="date" name="bdate" max="1970-12-31" placeholder="BirthDate" class="form-control"
                            required>
                    </div> --}}
                </div>

                {{-- <div class="form-group-row">
                    <div class="form-group-column">
                        <h4>Phone Number</h4><!--textfield to set phone number-->
                        <input type="tel" id="phone" name="phone" placeholder="123-456-7890"
                             class="form-control" required>

                    </div>
                    <div class="form-group-column">
                        <h4>Gender</h4><!--textfield to set Gender-->
                        <select id="" name="sex" selected>
                            <option value="M">M</option>
                            <option value="F">F</option>

                        </select>
                    </div>
                </div>
                <h4>Address</h4><!--textfield to set Address-->
                <input type="text" name="streetAddone" placeholder="Street Address" style="width: 80%;"><br>
                <input type="text" name="streetAddtwo" placeholder="Street Address Line 2" style="width: 80%;"><br>
                <input type="text" name="city" placeholder="City">
                <input type="text" name="stateorProv" placeholder="State / Province"><br>
                <input type="text" name="postCode" placeholder="Postal / Zip Code">
                <input type="text" name="country" placeholder="Country"><br> --}}

                {{-- <h4>Username</h4><!--textfield to set Username-->
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                </div> --}}
                <h4>Password</h4><!--textfield to set password-->
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" class="form-control" >
                    <span class="text-danger">@error('password'){{$message}}@enderror</span>
                </div>
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

                <div class="change-form">
                    <p id="" class="form-text text-muted">Already have an account? Log in <a href="LogIn">here</a><!--link to Log in-->
                    </p>
                </div>
                <br>
                <!-- create button for submitting the form -->
                <button type="submit" class="btn" value="Submit">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>
