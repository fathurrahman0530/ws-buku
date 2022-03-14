<?php
require("koneksi.php");

$perintah = "SELECT * FROM katalog";
$eksekusi = mysqli_query($conn, $perintah);
$cek      = mysqli_affected_rows($conn);

if ($cek > 0) {
  $response['kode']   = 1;
  $response['pesan']  = "Data Tersedia";
  $response['data']   = array();

  while ($ambil = mysqli_fetch_assoc($eksekusi)) {
    $F["id"]          = $ambil["id"];
    $F["judul_buku"]  = $ambil["judul_buku"];
    $F["penerbit"]    = $ambil["penerbit"];
    $F["harga_buku"]  = $ambil["harga_buku"];
    $F["stok"]        = $ambil["stok"];

    array_push($response['data'], $F);
  }
} else {
  $response['kode']   = 0;
  $response['pesan']  = "Data Tidak Tersedia";
}

echo json_encode($response);
mysqli_close($conn);
