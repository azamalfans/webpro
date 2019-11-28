<h2 class="head-section">Completed project</h2>
<?php
$data = get_data_costomer(3);
?>

<table class="content">
    <tr>
        <th class="numb">#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Plan</th>
        <th>Finish Date</th>
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
 					<a href='#'>Hapus</a>  | 
                     <a href='index.php?page=revision_order&id=" . $row['id_order'] . "'>Revision</a>  | 
                     <a href='index.php?page=detail_customer&id=" . $row['id_order'] . "'>Detail</a>
 				</td>
             </tr>";
        $i++;
    }

    ?>
</table>