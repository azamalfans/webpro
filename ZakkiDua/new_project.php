<h2 class="head-section">New project</h2>
<?php
$data = get_data_costomer(1);
?>

<a class="button" href="index.php?page=customer_form">Input customer</a>

<table class="content">
    <tr>
        <th class="numb">#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Plan</th>
        <th>Date</th>
        <th>Action</th>
    </tr>
    <?php
    $i = 1;
    while ($row = mysqli_fetch_assoc($data)) {

        echo "<tr>
        <td class='numb'>" . $i . "
 				<td>" . $row['cust_name'] . "</td>
 				<td>" . $row['email'] . "</td>
 				<td>" . $row['plan'] . "</td>
 				<td>" . date('d/m/Y', $row['order_date']) . "</td>
 				<td>
 					<a href='index.php?page=delete_order&id=" . $row['id_order'] . "&status=" . $row['status'] . "' >Hapus</a>
 					<a href='index.php?page=take_order&id=" . $row['id_order'] . "'>Take</a>
 					<a href='index.php?page=detail_customer&id=" . $row['id_order'] . "'>Detail</a>
 				</td>
             </tr>";
        $i++;
    }

    ?>
</table>