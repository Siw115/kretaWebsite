<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kreta Voorburg | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>

<?php include('utensils/header.php'); ?>

<div class="container">
    <div class="row justify-content-center m-3">
        <div class="col-md-8">
            <div class="d-flex justify-content-center align-items-center jumbotron-home">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-6">
                        <div class="text-center">
                            <h3 class="mb-3">Lieve Gasten</h3>
                            <p>We zijn blij dat wij u weer mogen verwelkomen! Vanaf 12:00 zijn wij geopend voor lunch & diner.</p>
                            <h4 class="mt-3">Team Kreta</h4>
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="../images/art.png" class="img-fluid" alt="Afbeelding van Kreta restaurant raam art">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <h2 class="text-primary">Grieks Restaurant Kreta</h2>
    <p>Grieks restaurant Kreta, zit op de hoek van de Parkweg in Voorburg. Het restaurant is opgericht op 10 februari 1988 en wordt al 31 jaar met passie gerund door de eigenaren Vasilis Chalos en Sakis Makris samen met de rest van de familie. Het restaurant kenmerkt zich door de traditionele en gezellige sfeer. <a href="#" class="text-decoration-none" data-bs-toggle="collapse" data-bs-target="#collapseExample">Klik hier</a> om meer te weten over onze terras.</p>
    <div class="collapse" id="collapseExample">
        <div class="alert alert-info" role="alert">
            <i class="bi bi-info-circle-fill"></i>
            Zodra het weer het toelaat, is er ook een prachtig (verwarmd) terras waar u heerlijk kunt genieten in de warme periode.
        </div>
    </div>
    <p><em>Ontdek de authentieke Griekse smaken bij Grieks Restaurant Kreta!</em></p>
    <div id="carouselExampleIndicators" class="carousel slide mt-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://via.placeholder.com/800x400?text=Slide+1" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/800x400?text=Slide+2" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/800x400?text=Slide+3" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="container mt-5 mb-4">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100 shadow d-flex flex-column">
                <div class="card-body d-flex flex-column justify-content-center align-items-center flex-grow-1">
                    <i class="bi bi-house-check text-primary fs-3 mb-3"></i>
                    <h5 class="card-title text-center">Online Bestellen</h5>
                    <p class="card-text text-center">Ook is er een mogelijkheid voor de gasten die liever thuis van de Griekse keuken willen genieten. U kunt online het menu bekijken en telefonisch bestellen. Vervolgens kunt u op het gewenste tijdstip uw bestelling ophalen.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow d-flex flex-column">
                <div class="card-body d-flex flex-column justify-content-center align-items-center flex-grow-1">
                    <i class="bi bi-menu-app text-primary fs-3 mb-3"></i>
                    <h5 class="card-title text-center">Diverse Opties</h5>
                    <p class="card-text text-center">U kunt tevens bij Restaurant Kreta terecht voor lunch, diner, groepsdiner, buffet, catering en speciale gelegenheden. Ook is er een aparte ruimte met extra privacy voor een zakendiner. U kunt Restaurant Kreta altijd bellen voor de mogelijkheden.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow d-flex flex-column">
                <div class="card-body d-flex flex-column justify-content-center align-items-center flex-grow-1">
                    <i class="bi bi-briefcase-fill text-primary fs-3 mb-3"></i>
                    <h5 class="card-title text-center">Zakendiner</h5>
                    <p class="card-text text-center">Er is een aparte ruimte met extra privacy voor een zakendiner. U kunt Restaurant Kreta altijd bellen voor de mogelijkheden.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('utensils/bootstrap_includes_scripts.php'); ?>

</body>
</html>
