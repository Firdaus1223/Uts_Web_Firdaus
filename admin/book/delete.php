<?php

session_start();
include("../../core/functions.php");

if (!isset($_GET['id'])) {
  header('Location: ./index.php');
}

$book = find("buku", $_GET['id']);
$result = delete("buku", $_GET['id']);

flash("{$book['judul']} berhasil dihapus!", "success");
header("Location: ./index.php");
