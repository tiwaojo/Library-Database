<!DOCTYPE html>
<html lang="en">

<head>  

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <link rel="stylesheet" href="CSS/navstyle.css">
</head>

<body>
<div class= "box-area">
        <header>
            <div class= "wrapper">
                <nav>
                    <a href="index.php">Home</a>
                    <a href="memberslist.php">Members</a>
                    <a href="signin.php">Sign-In</a>
                    <a href="signup.php">Register</a>
                    <a href="booklist.php">Book List</a>
                    <a href="librarylist.php">Visit Us!</a>
                    <div class= "views">
                        <button class="dropbtn">Views</button>
                        <div class="dropdown-views">
                            <a href="views/view1.php"> View 1</a>
                            <a href="views/view2.php"> View 2</a>
                            <a href="views/view3.php"> View 3</a>
                            <a href="views/view4.php"> View 4</a>
                            <a href="views/view5.php"> View 5</a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
</div>
<div class="Title">
<h2>Display all Libraries</h2>
</div>
    <table>
    <tr>
            <th>Id</th>
            <th>Namee</th>
            <th>Location</th>
            <?php include 'LibDatabase/Library/readLib.php'; ?>
        </tr>
  </table>
  </body>