<!-- Header Section -->
<div class="container-fluid text-center mt-4 kop">
    <div class="row">
        <div class="col">
            <h1>Kreta Voorburg</h1>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light mt-1">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php if($_SERVER['REQUEST_URI'] == '/kretaWebsite/') echo 'active'; ?>" aria-current="page" href="/kretaWebsite/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($_SERVER['REQUEST_URI'] == '/kretaWebsite/src/menu/menu.php') echo 'active'; ?>" href="/kretaWebsite/src/menu/menu.php">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($_SERVER['REQUEST_URI'] == '/kretaWebsite/src/gallery/gallery.php') echo 'active'; ?>" href="/kretaWebsite/src/gallery/gallery.php">Galerij</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<hr>