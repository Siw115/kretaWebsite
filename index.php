<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kreta Voorburg | Home</title>
    <?php include('utensils/bootstrap_includes.php');  ?>
</head>
<body>

<?php include('utensils/header.php'); ?>

<?php include('utensils/bootstrap_includes_scripts.php'); ?>

<script>
    // Get the current URL path
    var path = window.location.pathname;

    // Find the link that matches the current path and add the active class to it
    $('#myNavbar a[href="'+path+'"]').addClass('active');
</script>
</body>
</html>
