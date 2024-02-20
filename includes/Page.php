<?php require_once(__DIR__ . '/../partials/hotel_table.php'); ?>

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