<?php
    $_page = ( !empty($_GET['page']) ) ? strtolower($_GET['page']) : 'home';

    // (<condition>) ? <true> : <false> ;
    // (!empty(test) ) ? 1  : 0 ;

    // if ( !empty($_GET['page']) ) {
    //     $_page =$_GET['page'];
    // } else {
    //     $_page  = 'home';
    // }

    // if ( $_page != 'home' && $_page != 'blogs' && $_page != 'users' ) {
    //     $_page  = 'home';
    // }

    $_allowed_pages = ['home' , 'blogs', 'users' ];

    if ( !in_array($_page, $_allowed_pages ) ) {
        $_page  = 'home';
    }

    // echo $_page;
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>PHP Tutorial - Basic 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/datatables/datatables.min.css" />
    <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>
<div class="container">
    <?php include_once("template/header.php"); ?>

    <?php 
        // if ($_page == 'blogs') {
        //     include_once("view/blogs.php"); 
        // } elseif ($_page == 'users') {
        //     include_once("view/users.php");
        // } else {
        //     include_once("view/home.php");
        // }
        include_once("view/$_page.php");
    ?>
    
    <?php include_once("template/footer.php"); ?>
</div>

<script src="../assets/js/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="../assets/datatables/datatables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#table-blogs').DataTable();
        });
    </script>

</body>

</html>