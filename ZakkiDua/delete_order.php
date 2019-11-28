<?php

$id = $_GET['id'];
if ($_GET['status'] == 1) {
    $back = "new_project";
} elseif ($_GET['status'] == 2) {
    $back = "on_work";
} elseif ($_GET['status'] == 3) {
    $back = "complete_project";
} elseif ($_GET['status'] == 4) {
    $back = "revision_project";
}
delete_order($id);
echo "<script>
alert ('Order berhasil dihapus!!!')
window.location='index.php?page=" . $back . "';
</script>";

echo "<script>
    window.location='index.php?page=" . $back . "';</script>";
