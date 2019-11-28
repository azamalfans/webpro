<?php

$id = $_GET['id'];

$data = get_customer_by_id($id);
echo '<a href="index.php?page=new_project"> Back </a>

<form action="#" method="post" class="form-order">

    <input type="text" name="name" id="name" placeholder="Name" value="' . $data['cust_name'] . '" disabled>
    <br>

    <input type="email" name="email" id="email" value="' . $data['email'] . '" disabled>
    <br>
    <input type="text" name="plan" id="email" value="' . $data['plan'] . '" disabled>
    <br>

    <textarea type="text" name="description" id="description" placeholder="Description" disabled>' . $data['description'] . '</textarea>

    <br> Status
    ';

if ($data['status'] == 1) {
    echo '
    <button class="button green">New Project</button>
</form>';
} elseif ($data['status'] == 2) {
    echo '
    <button class="button yellow">Ongoing Project</button>
</form>';
} elseif ($data['status'] == 3) {
    echo '
    <button class="button blue">Completed Project</button>
</form>';
} elseif ($data['status'] == 4) {
    echo '
    <button class="button pink">Revision Project</button>
</form>';
}
