<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Database</title>
    <!-- <link rel="stylesheet" href="CSS/navstyle.css"> -->
    <link rel="stylesheet" href="../CSS/navstyle.css">
    <!-- FOnts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&family=Noto+Sans+JP:wght@700&family=Roboto&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<script>
function updatemenu() {
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
                    <!-- <button id="responsive-menu" type="menu" data-toggle="collapse"
                        data-target="#nav-items"><img src="Images\equalizer-black-18dp.svg" alt="">
                         </button> -->
                         <ul>
                            <a href="../views/index.php">Home</a>
                            <li><a class='dropbtn' >Views</a>
                                <ul class='sub-menus'>
                                    <li><a href='view1.php'>Views 1</a></li>
                                    <li><a href='view2.php'>Views 2</a></li>
                                    <li><a href='view3.php'>Views 3</a></li>
                                    <li><a href='view4.php'>Views 4</a></li>
                                    <li><a href='view5.php'>Views 5</a></li>
                                    <li><a href='view6.php'>Views 6</a></li>
                                    <li><a href='view7.php'>Views 7</a></li>
                                    <li><a href='view8.php'>Views 8</a></li>
                                    <li><a href='view9.php'>Views 9</a></li>
                                    <li><a href='view10.php'>Views 10</a></li>
                                </ul>
                            </li>
                            <li> <a href="../views/member_search">Search</a>
                            </li>
                            <li><a href="../views/booklist.php">Book List</a></li>
                            <li> <a href="../views/librarylist.php">Visit Us</a></li>
                            <li> <a href="../views/signin.php">Sign-out</a></li>
                        </ul>
                </div>

               
            </nav>



        </div>
    </header>
    <section class="Title">
        <img src="../Images\Group2.svg" alt="group at library">
        <h2>Library Database</h2>
    </section>