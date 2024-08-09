<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrondissements</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include Vue.js -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <style>
        .navbar-custom {
            background-color: #343a40; /* Dark background for navbar */
        }

        .navbar-custom .navbar-brand, 
        .navbar-custom .navbar-nav .nav-link {
            color: #ffffff; /* White text color for navbar */
        }

        .card-body {
            padding: 1.25rem; /* Adjust card body padding */
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <a class="navbar-brand" href="#">Arrondissements</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div id="app" class="container mt-4">
        <div class="row">
            <div class="col-md-4" v-for="arrondissement in arrondissements" :key="arrondissement.id">
                <div class="card mb-4">
                    <img :src="arrondissement.image_url" class="card-img-top" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">@{{ arrondissement.nom }}</h5>
                        <p class="card-text">@{{ arrondissement.description }}</p>
                        <p><strong>Histoire:</strong> @{{ arrondissement.histoire }}</p>
                        <p><strong>Géographie:</strong> @{{ arrondissement.geographie }}</p>
                        <p><strong>Localisation:</strong> @{{ arrondissement.localisation }}</p>
                        <a href="#" class="btn btn-primary">More Info</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Initialize Vue.js
        new Vue({
            el: '#app',
            data: {
                arrondissements: @json($arrondissements)
            }
        });
    </script>
</body>

</html>
