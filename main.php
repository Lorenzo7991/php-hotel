<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets\favicon.ico" type="image/ico">
    <title>Hotels</title>
    <!-- Bootstrap CDN -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css'
        integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=='
        crossorigin='anonymous' />
    <!-- Fontawsome CDN -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css'
        integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=='
        crossorigin='anonymous' />
</head>

<!-- Body dark mode -->

<body class="bg-dark text-white">
    <!-- Page container -->
    <div class="container py-5">
        <!-- Header section -->
        <header class="d-flex justify-content-between align-items-center">
            <!-- Page title -->
            <h1>Hotels</h1>
            <!-- Form with filter on parkings slot -->
            <form action="" method="GET" class="d-flex align-items-center">
                <div class="mb-3">
                    <label for="parking" class="form-label">Parking</label>
                    <select name="parking" id="parking" class="form-select">
                        <!-- <option value="">Select a choice</option> -->
                        <option value="">Show all</option>
                        <option value="true">Parking</option>
                        <option value="false">NO - Parking</option>
                    </select>
                </div>
                <!-- Form btn submit -->
                <button type="submit" class="btn btn-primary ms-3" style="margin-bottom: -15px">Filtra</button>
            </form>
        </header>
        <!-- Main section -->
        <main>
            <!-- Imported main content -->
            <?php include('includes/Page.php') ?>
        </main>
    </div>
</body>

</html>