<?php

session_start();
include("../../core/functions.php");

if (!isset($_GET['id'])) {
  header('Location: ./index.php');
}

$bookmark = find("bookmark", $_GET['id']);
$result = delete("bookmark", $_GET['id']);

flash("bookmark berhasil dihapus!", "success");
header("Location: ./index.php");
