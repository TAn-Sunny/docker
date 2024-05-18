<!doctype php>
<php lang="en">

<head>
    <title>Pet Care</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- CSS link -->
    <link rel="stylesheet" href="style.css">

    <!-- FONT IMPORT -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@800&family=League+Spartan&family=Roboto&family=Rowdies:wght@300&family=Russo+One&display=swap');
    </style>


</head>

<body>
    <header>


        <a href="index.php"><img src="./images/logo.svg" alt="Logo" style="width: 50px;" id="Logo"></a>
        <a href="index.php" class="PetCare_Text"><img src="images/PetCare_font.svg" alt="Logo"
                style="width: 180px;" /></a>
        <nav class="navbar">
            <ul>
                <li> <a href="index.php">HOME</a></li>
                <li> <a href="about.php" id="currentPage">ABOUT</a></li>
            </ul>
        </nav>






        <div class="dropdown open menu">
            <button class="btn btn-light dropdown-toggle " type="button" id="triggerId" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Menu
            </button>
            <div class="dropdown-menu" aria-labelledby="triggerId">
                <button class="dropdown-item" href="index.php"><a href="index.php">HOME</a></button>
                <button class="dropdown-item " href="#">
                    <a class="nav-link" href="about.php">About</a>
                </button>
            </div>
        </div>

    </header>

    <main>
        <h1>About Us: We Speak Pawsome!</h1>
        <p>We're more than just a pet website – we're a community of passionate animal lovers dedicated to enriching the
            lives of pets and their humans. We understand the deep bond you share with your furry (or feathery, or
            scaled!) friend, and we're here to support you every step of the way.</p>

        
    </main>


    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</php>