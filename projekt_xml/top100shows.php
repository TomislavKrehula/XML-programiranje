<?php

$xml = simplexml_load_file('shows.xml');

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tomislav Krehula</title>
    <link href="index.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body {
            background-image: url(images/background.jpg);
        }

        form {
            margin-left: 10px;
        }

        h3 {
            text-align: center;
            color: white;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            text-align: center;
        }

        footer {
            background-color: rgb(16, 17, 16);
            padding: 10px;
            text-align: center;
            color: white;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Watch Streams</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="movies.html">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="series.html">Series</a>
                    </li>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Top 100
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="top100movies.php">Movies</a></li>
                            <li><a class="dropdown-item" href="#">TV Shows</a></li>
                        </ul>
                    </div>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search"
                            aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </ul>
            </div>
        </div>
    </nav>

    <h3 class="mt-3 mb-3">Top 100 TV Shows</h3>

    <div class="container">
        <table class="table table-dark table-striped mt-3">
            <thead>
                <tr class="text-center">
                    <th>Rank</th>
                    <th>Name</th>
                    <th>Aired</th>
                    <th>Episodes</th>
                    <th>Rating</th>
                    <th>PG rating</th>
                </tr>
            </thead>

            <tbody .table-striped>
                <?php foreach ($xml->show as $show): ?>
                <tr class="text-center">
                    <td>
                        <?php echo $show->rank; ?>
                    </td>
                    <td>
                        <?php echo $show->name; ?>
                    </td>
                    <td>
                        <?php echo $show->release; ?>
                    </td>
                    <td>
                        <?php echo $show->episodes; ?>
                    </td>
                    <td>
                        <?php echo $show->rating; ?>
                    </td>
                    <td>
                        <?php echo $show->parentalGuide; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <nav aria-label="Page navigation example" data-bs-theme="dark">
        <ul class="pagination justify-content-center mb-5">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>

    <div class="footer">
        <footer>
            <p>Tomislav Krehula - 2024</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>