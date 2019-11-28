<?php
function connect_to_db()
{
    $koneksi = mysqli_connect("127.0.0.1", "root", "", "web_prog");

    if ($koneksi == false) {
        echo mysqli_error($koneksi);
        die;
    }
    return $koneksi;
}
// function get_data_new_costomer()
// {
//     $koneksi = connect_to_db();
//     $sql = "SELECT * FROM cust_order WHERE status=1";
//     return mysqli_query($koneksi, $sql);
// }
// function get_data_costomer($status)
// {
//     $koneksi = connect_to_db();
//     $sql = "SELECT * FROM cust_order WHERE status='$status'";
//     return mysqli_query($koneksi, $sql);
// }
// function delete_order($id)
// {
//     $koneksi = connect_to_db();
//     $sql = "DELETE from cust_order where id_order=" . $id;
//     mysqli_query($koneksi, $sql);
// }
// function add_customer($name, $email, $plan, $description)
// {
//     $order_date = time();
//     $koneksi = connect_to_db();
//     $sql = "INSERT INTO cust_order VALUES ('', '$name', '$email', '$plan', '$description', '1', '$order_date', '', '')";

//     mysqli_query($koneksi, $sql);
// }
// function get_customer_by_id($id)
// {
//     $koneksi = connect_to_db();
//     $sql = "SELECT * FROM cust_order WHERE id_order=" . $id;

//     $query = mysqli_query($koneksi, $sql);
//     return mysqli_fetch_array($query);
// }

// function take_order($id, $status)
// {
//     $date = time();
//     $koneksi = connect_to_db();
//     if ($status == 2 || $status == 4) {
//         $sql = "UPDATE cust_order set status='$status', on_work_date='$date' WHERE id_order='$id'";
//     } elseif ($status == 3) {
//         $sql = "UPDATE cust_order set status='$status', complete_date='$date' WHERE id_order='$id'";
//     }
//     mysqli_query($koneksi, $sql);
// }

function cek_login($username, $password)
{
    $koneksi = connect_to_db();
    $sql = "SELECT * FROM pengguna WHERE username = '$username' AND pass = '" . md5($password) . "'";
    $query = mysqli_query($koneksi, $sql);
    $num = mysqli_num_rows($query);

    return ($num > 0);
}

function daftar($username, $password)
{

    $koneksi = connect_to_db();
    $pass = md5($password);
    $sql = "INSERT INTO pengguna VALUES ('','$username','$pass')";

    $query = mysqli_query($koneksi, $sql);
}
function get_level_by_username($username)
{

    $koneksi = connect_to_db();
    $sql = "SELECT a.id_level,c.nama_level FROM level_pengguna AS a JOIN pengguna AS b ON a.id_pengguna=b.id JOIN level AS c ON c.id WHERE b.username='" . $username . "' LIMIT 1 ";

    $query = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($query) == 0) {
        return false;
    }

    return mysqli_fetch_array($query);
}
function get_menu_by_level($level)
{
    $koneksi = connect_to_db();
    $sql = "SELECT * FROM level_menu AS a JOIN menu AS b ON a.id_menu=b.id WHERE a.id_level='" . $level . "'";

    $query = mysqli_query($koneksi, $sql);

    return $query;
}
