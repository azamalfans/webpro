<?php
$post_id = $_GET['id'];

echo "You like post ID #".$post_id."!";

// sql query
// update <table> set like = like +1
// where post_id = $post_id