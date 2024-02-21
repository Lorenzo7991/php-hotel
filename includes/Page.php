<!-- Import via DIR directive Hotels data for partial path -->
<?php require_once(__DIR__ . '/../partials/hotel_table.php');

/*  Global variable renamed */
$data = $_GET;
/* Check using coalescing operator */
$parkingFilter = $data['parking'] ?? null;
/* Flag variable */
$filteredHotels = [];

/* Loop to filter hotels based on parking key. */
if ($parkingFilter === '') {
    $filteredHotels = $hotels;  //If parkingFilter value is equal to empty string, show all hotels
} else {
    $filteredHotels = array_filter($hotels, function ($hotel) use ($parkingFilter) {  // Else, use array_filter function to filter elements of $hotels array, using a callback function.
    });
}

?>
<!-- Structure of table, exported on main.php -->
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
            <!-- Loop to iterate over filtered hotels -->
            <?php foreach ($filteredHotels as $hotel): ?>
                <tr>
                    <th scope="col">
                        <?= $hotel['name']; ?>
                    </th>
                    <td>
                        <?= $hotel['description']; ?>
                    </td>
                    <td>
                        <!-- Ternary operator to set correct icon based on the value of "parking" key: -->
                        <?= $hotel['parking'] ? '<i class="fa-solid fa-square-check text-success "></i>' : '<i class="fa-solid fa-square-xmark text-danger"></i>'; ?>
                    </td>
                    <td>
                        <?= $hotel['vote']; ?>/5
                    </td>
                    <td>
                        <?= $hotel['distance_to_center']; ?> km
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>