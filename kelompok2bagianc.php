<?php
// Membuat array multidimensi untuk produk
$produk = [
    ["ID" => 001 ,"nama" => "Buavita", "stok" => 15, "harga" => 25800],
    ["ID" => 002,"nama" => "Sariwangi", "stok" => 10, "harga" => 30500],
    ["ID" => 003,"nama" => "Obat nyamuk", "stok" => 40, "harga" => 12600],
    ["ID" => 004, "nama" => "Give", "stok" => 10, "harga" => 40500],
    ["ID" => 005, "nama" => "Sikat gigi", "stok" => 5, "harga" => 25000],
    ["ID" => 006,"nama" => "Mie jumbo", "stok" => 10, "harga" => 30500],
    ["ID" => 007, "nama" => "Premen", "stok" => 10, "harga" => 50500],
];

// Mengurutkan array berdasarkan nama produk
usort($produk, function($a, $b) {
    return strcmp($a['nama'], $b['nama']);
});

// Menampilkan array dalam bentuk tabel
echo "<table border='0'>
<tr>
    <th>ID</th>
    <th>Nama Produk</th>
    <th>Stok</th>
    <th>Harga</th>
</tr>";

foreach ($produk as $item) {
    echo "<tr>
        <td>{$item['ID']}</td>
        <td>{$item['nama']}</td>
        <td>{$item['stok']}</td>
        <td>" . number_format($item['harga'], 0, ',', '.') . "</td>
    </tr>";
}

?>