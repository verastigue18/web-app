<?php
require('../configs/db.config.php');

$sql = "SELECT Name, Email, Phone, Orders, OrderTotal, CustomersSince, Status FROM Customers";
$result = $conn->query($sql);


echo '<table>
        <thead>
            <tr class="table-header">
                <th>Customers Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Orders</th>
                <th>Order Total</th>
                <th>Customers Since</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>';

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["Name"]. "</td>
                <td>" . $row["Email"]. "</td>
                <td>" . $row["Phone"]. "</td>
                <td>" . $row["Orders"]. "</td>
                <td>" . $row["OrderTotal"]. "</td>
                <td>" . $row["CustomersSince"]. "</td>
                <td>" . $row["Status"]. "</td>
            </tr>";
    }
} else {
    echo "<tr><td colspan='7'>No data available</td></tr>";
}

echo '</tbody></table>';

// Close connection
$conn->close();
?>
