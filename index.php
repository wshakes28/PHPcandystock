<?php

declare(strict_types=1);




$candy = [
    'M&M' => ['price' => '2.99', 'stock' => '50'],
    'Skittles' => ['price' => '2.99', 'stock' => '70'],
    'Payday' => ['price' => '3.99', 'stock' => '45'],
    'Oreo' => ['price' => '1.99', 'stock' => '35'],
    'Butterfinger' => ['price' => '3.99', 'stock' => '60']
];


$tax = 10;

function get_reorder_message($stock)
{
    return ($stock < 50) ? "Yes" : "No";
}

function get_total_value($price,  $quanity)
{
    return $price * $quanity;
}

function get_tax_due($price,  $quanity,  $tax = 0)
{
    return ($price * $quanity) * ($tax / 100);
}






?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" href="styles.css">

</head>

<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="https://cdn.pixabay.com/photo/2020/03/14/06/38/cream-4929805__340.jpg" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <h1 class="section-title center mb-2">The Candy Shop</h1>
    <div class="container ">
        <table class="table table-dark table-striped mx-auto ">
            <thead>
                <tr class="table-warning">
                    <th scope="col">Candy</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Re-order</th>
                    <th scope="col">Total Value</th>
                    <th scope="col">Tax due</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($candy as $key => $value) { ?>
                    <tr class="table-danger">

                        <td><?= $key ?></td>
                        <td><?= $value['stock'] ?></td>
                        <td><?= get_reorder_message($value['stock']) ?></td>
                        <td><?= get_total_value($value['price'], $value['stock']) ?></td>
                        <td><?= get_tax_due($value['price'], $value['stock'], $tax) ?></td>

                    </tr>
                <?php } ?>


            </tbody>

        </table>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous" defer></script>

</html>
