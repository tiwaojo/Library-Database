<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Database</title>

    <link rel="stylesheet" href="/Library-Database/CSS/navstyle.css">
    
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

<header>
    <div class="wrapper">

        <nav id='menu'>
            <div class="collapse" id="nav-items">
                <!--All headers at top of page-->
                <ul>
                    <a href="/Library-Database/index">Home</a>
                    <li><a class='dropbtn'>Views</a>
                        <ul class='sub-menus'>
                            <li><a href='/Library-Database/views/view1#content-area'>Views 1</a></li>
                            <li><a href='/Library-Database/views/view2#content-area'>Views 2</a></li>
                            <li><a href='/Library-Database/views/view3#content-area'>Views 3</a></li>
                            <li><a href='/Library-Database/views/view4#content-area'>Views 4</a></li>
                            <li><a href='/Library-Database/views/view5#content-area'>Views 5</a></li>
                            <li><a href='/Library-Database/views/view6#content-area'>Views 6</a></li>
                            <li><a href='/Library-Database/views/view7#content-area'>Views 7</a></li>
                            <li><a href='/Library-Database/views/view8#content-area'>Views 8</a></li>
                            <li><a href='/Library-Database/views/view9#content-area'>Views 9</a></li>
                            <li><a href='/Library-Database/views/view10#content-area'>Views 10</a></li>
                        </ul>
                    </li>
                    <li> <a href="/Library-Database/views/member_search#content-area">Search</a>
                    </li>
                    <li> <a href="/Library-Database/views/readLib.php">Library List</a></li>
                    <li> <a href="/Library-Database/views/update#inputfield">Update</a></li>
                    <li> <a href="/Library-Database/views/signin">Sign-out</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<body>

    <section class="Title">
        <img src="/Library-Database/Images/Group2.svg" alt="group at library">
        <!--background imgage-->
        <h2>Library Database</h2>
    </section>