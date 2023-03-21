<?php
/*
  Created on : Mar 20, 2023, 8:01:17 PM
  Author     : @Eduardo Naranjo
  File:      : sakila_customer.php
 */

include("dbconfig.php");


$sql = "select * 
         from customer 
        order by customer_id ";

$statement = $pdo->prepare($sql);
$statement->execute();
$rows = $statement->fetchAll();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Customers</title>
    </head>
    <body>

        <h3>Sakila - Customers</h3>
        
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Store</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Active</th>
                    <th>Created Date</th>
                    <th>Updated</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row): ?>
                <tr>
                    <td><?php echo $row['customer_id']; ?></td>
                    <td><?php echo $row['store_id']; ?></td>
                    <td><?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['address_id']; ?></td>
                    <td><?php echo $row['active']; ?></td>
                    <td><?php echo $row['create_date']; ?></td>
                    <td><?php echo $row['last_update']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>


    </body>
</html>
