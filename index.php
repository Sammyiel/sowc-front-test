<!DOCTYPE html>
<html lang="en" id="the-website">

<head>
    <title>ALU - School Of Wildlife Conservation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="Front-files/imgs/SOWC Icon-02.jpg" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Front-files/node_modules/bootstrap/dist/css/bootstrap.min.css">

    <!-- Font-Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- User defined CSS -->
    <link rel="stylesheet" href="Front-files/user-defined-style.css">
</head>

<header>
    <figure>
        <a href="https://sowc.alueducation.com/" target="_blank"><img src="Front-files/imgs/SOWC Logo-02.jpg" width="100%" alt="SOWC-image icon" id="icon" /></a>
    </figure>
</header>

<hr>

<body>
    <div class="topnav">
        <!-- <div class="row"> -->
            <a href="index.php?page=home">Home</a>
            <a href="index.php?page=about-us">About Us</a>
            <a href="index.php?page=contact-us">Contact Us</a>
            <form class="search-bar" action="">
                <button type="submit"><i class="fa fa-search" action=""></i></button><input type="text" placeholder="Search.." name="search">
            </form>
    </div>

    <br>

    <div class="row">
        <div class="dropdown col-sm-12 col-md-3">
            <button onclick="myFunction()" class="btn btn-lg dropdown-toggle" data-toggle="dropdown" id="the-selector">Select topic &nbsp;<span class="caret"></span></button>
            <div id="myDropdown" class="dropdown-content">
                <ul class="dropdown-menu">
                    <li><input type="text" placeholder="Search..." id="myInput" onkeyup="filterFunction()"></li>
                    <li><a href="index.php?page=carbon market">Carbon market</a></li>
                    <li><a href="index.php?page=conservation">Conservation</a></li>
                    <li><a href="index.php?page=ecotourism">Ecotourism</a></li>
                    <li><a href="index.php?page=hunting">Hunting</a></li>
                    <li><a href="index.php?page=non-timber forest products">Non-timber forest products</a></li>
                    <li><a href="index.php?page=socio-economic">Socio-economic</a></li>
                    <li><a href="index.php?page=wildlife-ranching">Wildlife ranching</a></li>
                    <li><a href="index.php?page=other-resources">Other related resources</a></li>
                </ul>
            </div>
        </div>
    </div>

    <article>
        <main role="main" class="container-fluid">
            <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
                if ($page == 'about-us') {
                    include 'Front-files/about-us.html';
                } elseif ($page == 'contact-us') {
                    include 'Front-files/contact-us.html';
                } elseif ($page == 'carbon market') {
                    include 'Front-files/carbon market.html';
                } elseif ($page == 'conservation') {
                    include 'Front-files/conservation.html';
                } elseif ($page == 'ecotourism') {
                    include 'Front-files/ecotourism.html';
                } elseif ($page == 'hunting') {
                    include 'Front-files/hunting.html';
                } elseif ($page == 'non-timber forest products') {
                    include 'Front-files/non-timber forest products.html';
                } elseif ($page == 'socio-economic') {
                    include 'Front-files/socio-economic.html';
                } elseif ($page == 'wildlife-ranching') {
                    include 'Front-files/wildlife-ranching.html';
                } elseif ($page == 'other-resources') {
                    include 'Front-files/other-resources.html';
                } else {
                    include 'Front-files/home.html';
                }
            } else {
                include 'Front-files/home.html';
            }
            ?>

        </main>

        <div>
            <!-- Results go here -->
        </div>
    </article>

    <hr>

    <!-- <br> -->

    <footer id="footer-background">
            <div class="row">
                <a href="index.php?page=carbon market" class="col-sm-12 col-md-6"><img src="Front-files/imgs/Carbon.transparent.png" width="25%">Carbon market</a>
                <a href="index.php?page=non-timber forest products" class="col-sm-12 col-md-6"><img src="Front-files/imgs/forest-products.transparent.png" width="25%">Non-timber products</a>
            </div>

            <div class="row">
                <a href="index.php?page=conservation" class="col-sm-12 col-md-6"><img src="Front-files/imgs/ranching.transparent.png" width="25%">Conservation</a>
                <a href="index.php?page=socio-economic" class="col-sm-12 col-md-6"><img src="Front-files/imgs/ecotourism.transparent.png" width="25%">Socio-economic</a>
            </div>

            <div class="row">
                <a href="index.php?page=ecotourism" class="col-sm-12 col-md-6"><img src="Front-files/imgs/ecotourism.transparent.png" width="25%" />Ecotourism</a>
                <a href="index.php?page=wildlife-ranching" class="col-sm-12 col-md-6"><img src="Front-files/imgs/ranching.transparent.png" width="25%">Wildlife ranching</a>
            </div>

            <div class="row">
                <a href="index.php?page=hunting" class="col-sm-12 col-md-6"><img src="Front-files/imgs/hunting-and-fishing.transparent.png" width="25%">Hunting</a>
                <a href="index.php?page=other-resources" class="col-sm-12 col-md-6"><img src="Front-files/imgs/hunting-and-fishing.transparent.png" width="25%">Other related resources</a>
            </div>

    </footer>
    <hr>
    <div id="copyright">
        &copyAfrican Leadership University
    </div>

    <!-- User defined JS -->
    <script src="Front-files/user-defined-js.js"></script>

</body>

</html>