<!DOCTYPE html>
<html lang="en">

<head>
<!DOCTYPE html>
<html lang="en">

<head>  
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                </nav>
            </div>
        </header>
        <div class="Title">
            <h2> OnTech Public Library </h2>
        </div>
        <div class="content-area">
            <div class="wrapper">
                <h2> Content </h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra rutrum pellentesque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris nec odio in turpis faucibus porttitor. Sed sollicitudin massa vitae ullamcorper elementum. Suspendisse id sodales purus. Aliquam condimentum volutpat tortor, id rutrum orci lobortis in. Nulla facilisi. Nullam blandit ipsum mi, vel porttitor tellus dignissim sit amet. Nunc nibh urna, commodo non tincidunt id, sodales vitae elit. Etiam imperdiet commodo justo ut ultrices. Nulla eget ornare mauris, non auctor sem. Nulla rutrum velit risus, vestibulum rutrum eros feugiat a.

Maecenas luctus hendrerit ipsum, quis pretium lectus gravida nec. In ex ex, feugiat sit amet cursus a, semper vitae neque. Duis tempor semper sapien ut congue. Sed at velit eu neque accumsan euismod sed in urna. Vivamus convallis justo at erat iaculis tincidunt. Proin non gravida odio, sed pretium arcu. Proin et neque sed odio maximus convallis non et ante. Nulla pulvinar dictum rhoncus. Vivamus luctus libero eu pretium lobortis. Ut gravida, augue molestie tristique iaculis, massa justo tincidunt lorem, ut efficitur neque lacus in est. Nulla facilisi. Integer posuere auctor mi. In vitae rhoncus nibh. Pellentesque venenatis, nisi a imperdiet rutrum, sapien libero eleifend ex, eget interdum nulla velit sed justo. Nullam eget tortor et est efficitur tincidunt vitae et urna. Donec neque erat, dapibus at erat sodales, placerat mattis mi.

Nullam metus eros, consectetur sit amet quam ut, gravida condimentum ex. Donec fringilla felis turpis, elementum posuere odio dictum vitae. Donec dictum leo in dui pretium, id ornare neque efficitur. Suspendisse eget felis id massa hendrerit dictum nec sit amet tortor. Praesent et vulputate justo. Duis aliquam et purus nec hendrerit. Cras at turpis turpis.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nulla turpis, finibus in dapibus ac, tincidunt vel odio. Proin gravida id elit quis malesuada. Fusce eu leo purus. Praesent vitae neque efficitur, porta nibh in, faucibus felis. Morbi tempus libero tortor, id interdum lacus vehicula eget. Donec tristique cursus felis. Nullam vitae mauris consequat, vehicula nunc in, vulputate sem. Sed ultrices, magna malesuada scelerisque interdum, nisi tortor euismod turpis, ut commodo sem nisi vitae ligula. Suspendisse malesuada justo sed rutrum blandit. In hac habitasse platea dictumst. Donec condimentum ullamcorper massa, a mattis dui commodo eu. Nullam ac tincidunt erat, a hendrerit magna. Etiam vel faucibus dui, in viverra nisl.

Curabitur sit amet velit id nunc convallis gravida ut sit amet elit. Sed sapien velit, semper sagittis lacus lobortis, ultrices mollis lorem. Praesent suscipit, eros eu bibendum semper, augue nibh auctor lorem, a auctor libero ligula posuere justo. Nam molestie bibendum ex, quis tincidunt risus volutpat vitae. Donec lacinia rhoncus commodo. Phasellus quis dictum risus. Vestibulum nibh lacus, dictum ac erat sed, iaculis auctor risus. Maecenas imperdiet tellus lacus, eu pretium nisi hendrerit eu. Vivamus porta neque sed elit gravida pulvinar. Nam velit orci, imperdiet at nibh sed, semper blandit neque. In sit amet massa quis quam varius porttitor nec nec lorem. Nunc sed orci magna. Sed porta dolor turpis, vel varius turpis porta nec.</P>
            </div>
        </div>
    <div>
</body>


<!-- <body>

    <h1>Library Database</h1>
    <h2>Display all members</h2>
    <table>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
        <?php
    // $object=new LibraryDatabase;
    // $object->connect();

    include 'LibDatabase/Members/read.php';

  ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <h2>Display all books</h2>
    <table>
        <tr>
            <th>ISBN</th>
            <th>Book Title</th>
            <th>Author</th>
            <th>Genre</th>
        </tr>
        <?php
    // $object=new LibraryDatabase;
    // $object->connect();

    include 'LibDatabase/Books/readbooks.php';

  ?>
  </table>

    <h2>Display all genres</h2>
    <table>
        <tr>
            <th>Genre ID</th>
            <th>Genre Name</th>

        </tr>
        <?php
    // $object=new LibraryDatabase;
    // $object->connect();

    include 'LibDatabase/Genre/readgenre.php';

  ?>
  </table>

    <h2>Display all Libraries</h2>
    <table>
    <tr>
            <th>Id</th>
            <th>Namee</th>
            <th>Location</th>
            <?php include 'LibDatabase/Library/readLib.php'; ?>
        </tr>
  </table>

  <h2>Display all Loaned Books</h2>
    <table>
    <tr>
            <th>Loan Id</th>
            <th>ISBN</th>
            <th>Members ID</th>
            <th>Date Loaned</th>
            <th>Loan Status</th>
            <th>Due Date</th>
            <?php include 'LibDatabase/Loaned_Book/LoanedRead.php'; ?>
        </tr>
  </table>

    <h2>Display all Publishers</h2>
    <table>
    <tr>
            <th>Publisher Id</th>
            <th>Publisher Name</th>
            <th>Publisher Address</th>
            <?php include 'LibDatabase/Publisher/ReadPub.php'; ?>
        </tr>
  </table>  
        
</body> -->

</html>
