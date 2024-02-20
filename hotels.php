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

    <div class="container py-5">
        <h1>Hotels</h1>
        <div class="table-responsive">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Parking</th>
                        <th>Vote</th>
                        <th>Distance from the center</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($hotels as $hotel): ?>
                        <tr>
                            <td>
                                <?= $hotel['name']; ?>
                            </td>
                            <td>
                                <?= $hotel['description']; ?>
                            </td>
                            <td>
                                <?= $hotel['parking'] ? '<i class="fa-solid fa-square-check text-success "></i>' : '<i class="fa-solid fa-square-check text-danger"></i>'; ?>
                            </td>
                            <td>
                                <?= $hotel['vote']; ?>
                            </td>
                            <td>
                                <?= $hotel['distance_to_center']; ?> km
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>


</html>