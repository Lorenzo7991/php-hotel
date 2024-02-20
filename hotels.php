<?php
include('partials/hotel_table.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets\favicon.ico" type="image/ico">
    <title>Hotels</title>
    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css'
        integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=='
        crossorigin='anonymous' />
    <!-- Fontawsome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css'
        integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=='
        crossorigin='anonymous' />
</head>

<body class="bg-dark text-white">

    <div class="container">
        <h1>Hotels</h1>
        <ul>
            <?php foreach ($hotels as $hotel): ?>
                <li>
                    <h5 class="mb-1">
                        <?= $hotel['name']; ?>
                    </h5>
                    <p class="mb-1">
                        <?= $hotel['description']; ?>
                    </p>
                    <small><strong>
                            <?= $hotel['parking'] ? 'Parcheggio' : 'No parcheggio'; ?>
                        </strong></small>
                    <br>
                    <small><strong>Voto:</strong>
                        <?= $hotel['vote']; ?>
                    </small>
                    <br>
                    <small><strong>Distance from the center:</strong>
                        <?= $hotel['distance_to_center']; ?> km
                    </small>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

</body>

</html>