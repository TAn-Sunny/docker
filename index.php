<!doctype html>
<html lang="en">

<head>
    <title>Pet Care</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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


        <a href="index.php"><img src="./images/logo.jpg" alt="Logo" style="width: 50px;" id="Logo"></a>
        <a href="#" class="PetCare_Text"><img src="images/PetCare_font.svg" alt="Logo" style="width: 180px;" /></a>
        <nav class="navbar">
            <ul>
                <li> <a href="#" id="currentPage">HOME</a></li>
                <li> <a href="about.php">ABOUT</a></li>
            </ul>
        </nav>






        <div class="dropdown open menu">
            <button class="btn btn-light dropdown-toggle menu_btn" type="button" id="triggerId"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                MENU
            </button>
            <div class="dropdown-menu" aria-labelledby="triggerId">
                <button class="dropdown-item" href="#"><a class="nav-link" href="#" id="currentPage">Home</a></button>
                <button class="dropdown-item " href="#">
                    <a class="nav-link" href="about.php">About</a>
                </button>
            </div>
        </div>

    </header>

    <main>


        <section class="main-header">

            <div class="welcoming">
                <div class="welcoming-text">
                    <span style="font-size: 50px;">Spoil Your Furry Friends</span>

                    <span style="font-size: 15px;"><br>Pamper Them with Love and Expert Care</span>

                </div>

                <img src="/images/Cats&Dogs.jpg" alt="cat and dog" id="welcoming-img">
            </div>
        </section>

        <section class="service" style="padding: 1rem 5rem;">
            <div class="service-title">
                <h2 style="font-weight: bolder;">SERVICES</h2>
                <hr style=" opacity: 1;">
            </div>



            <div class="sevices">

                <div class="services-container">
                    <div class="card">

                        <div class="card-content">
                            <h2 class="card-title">Daycare <span class="triangle"> <img src="/images/triangle.svg"
                                        width="14"> </span></h2>
                            <p class="card-description">Our daycare service is designed to provide your furry friends a
                                safe
                            <p>price: 20$ / day</p>
                            <a class="btn service-btn" href="#" role="button">Book now</a>

                        </div>

                    </div>
                    <div class="card">

                        <div class="card-content">
                            <h2 class="card-title">Daycare <span class="triangle"> <img src="/images/triangle.svg"
                                        width="14"> </span></h2>
                            <p class="card-description">Our daycare service is designed to provide your furry friends a
                                safe
                            <p>price: 20$ / day</p>
                            <a class="btn service-btn" href="#" role="button">Book now</a>

                        </div>

                    </div>
                    <div class="card">

                        <div class="card-content">
                            <h2 class="card-title">Daycare <span class="triangle"> <img src="/images/triangle.svg"
                                        width="14"> </span></h2>
                            <p class="card-description">Our daycare service is designed to provide your furry friends a
                                safe
                            <p>price: 20$ / day</p>
                            <a class="btn service-btn" href="#" role="button">Book now</a>

                        </div>

                    </div>
                  
                </div>

            </div>

        </section>

        <section class="more">
            <div class="d-flex  justify-content-center align-items-center">
                <button type="button" class="btn btn-primary showMoreButton" onclick="showmore()">
                    Show more
                </button>
            </div>

            <p id="more-Content" style="display: none;">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, explicabo. Quibusdam incidunt suscipit,
                vero nihil labore voluptates facere culpa quaerat provident officiis odit veniam, earum mollitia
                corporis, exercitationem eos neque?
            </p>

            <style>
                #more-Content {
                    margin: 1rem;
                    padding: 10px;
                    border: 3px solid black;
                    background-color: white;
                    box-shadow: 10px 10px 0px 0px rgba(0, 0, 0, 1);
                }

               
            </style>
            <script>

                function showmore() {
                    var moreInfo = document.getElementById('more-Content');
                    if (moreInfo.style.display === 'none') {
                        moreInfo.style.display = 'block';
                    } else {
                        moreInfo.style.display = 'none';
                    }
                }

            </script>
        </section>

        <div class="container">
		<h2 class="mt-4 mb-4">Service List</h2>
		<!-- PHP script to display products -->
		<?php
		// Include the PHP script
		require_once('db.php');

		// Display products in HTML table
		$products = get_services();
		echo '<table class="table table-striped">';
		echo '<thead>';
		echo '<tr>';
		echo '<th>Name</th>';
		echo '<th>Price</th>';
		echo '<th>Description</th>';
		echo '</tr>';
		echo '</thead>';
		echo '<tbody>';
		foreach ($products as $product) {
			echo '<tr>';
			echo '<td>' . $product["name"] . '</td>';
			echo '<td>' . $product["price"] . '</td>';
			echo '<td>$' . $product["description"] . '</td>';
			echo '</tr>';
		}
		echo '</tbody>';
		echo '</table>';
		?>
	</div>
    </main>
    <footer class="container-fluid">
        <p>&copy; 2024 PetCare </p>
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>