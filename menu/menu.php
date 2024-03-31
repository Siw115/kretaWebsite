<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kreta Voorburg | Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../style.css" rel="stylesheet">
</head>
<body>

<?php include('../utensils/header.php'); ?>

<div class="container mt-3">
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <img class="card-img" src="../images/menu-image.jpeg" alt="Afbeelding voor de menu kaart">
                <div class="card-img-overlay">
                    <button class="btn btn-primary card-button">Menu Kaart</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <img class="card-img" src="../images/dessert-menu.jpeg" alt="Afbeelding voor de dessert kaart">
                <div class="card-img-overlay">
                    <button class="btn btn-primary card-button">Dessert Kaart</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <img class="card-img" src="../images/wine-menu.jpeg" alt="Afbeelding voor de wijn kaart">
                <div class="card-img-overlay">
                    <button class="btn btn-primary card-button">Wijn Kaart</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../utensils/bootstrap_includes_scripts.php'); ?>


</body>
</html>