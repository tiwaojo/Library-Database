<!-- <!DOCTYPE html> -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Database</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="{{asset('css/navstyle.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="CSS/navstyle.css"> -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&family=Noto+Sans+JP:wght@700&family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<script>
    function updatemenu() { //updates the menu
        if (document.getElementById('responsive-menu').clicked == true) {
            document.getElementById('menu').style.borderBottomRightRadius = '0';
            document.getElementById('menu').style.borderBottomLeftRadius = '0';
        } else {
            document.getElementById('menu').style.borderRadius = '10px';
        }
    }
</script>

<body>
    <header>
        <div class="wrapper">

            <nav id='menu'>
                <div class="collapse" id="nav-items">
                    <!--All headers at top of page-->
                    <ul>
                        <a href="/">Home</a>
                        <li><a class='dropbtn'>Views</a>
                            <ul class='sub-menus'>
                                <li><a href='/author'>Author</a></li>
                                <li><a href='/book'>Book</a></li>
                            </ul>
                        </li> 
                        <!-- <li> <a href="../views/readLib.php">Library List</a></li> -->
                        <!-- <li> <a href="../views/update.php#inputfield">Update</a></li> -->
                        <li> <a href="/LogIn">Sign-in</a></li>
                        
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <section class="Title">
        <!-- <img src="../Images\Group2.svg" alt="group at library"> -->
        <img src="{{asset('img/Group2.svg')}}" alt="">
        <!--background imgage-->
        <h2>Library Database</h2>
    </section>