<?php
// Set header type konten.
header("Content-Type: application/json; charset=UTF-8");

// Deklarasi variable untuk koneksi ke database.
$host     = "localhost";// Server database
$username = "root";     // Username database
$password = "";     // Password database
$database = "londri";     // Nama database

// Koneksi ke database.
$conn = new mysqli($host, $username, $password, $database);

// Deklarasi variable keyword buah.
$buah = $_GET["query"];

// Query ke database.
$query  = $conn->query("SELECT * FROM tbl_buah WHERE buah LIKE '%$buah%' ORDER BY buah DESC");

// Fetch hasil query.
$result = $query->fetch_All(MYSQLI_ASSOC);

// Cek apakah ada yang cocok atau tidak.
if (count($result) > 0) {
    foreach($result as $data) {
        $output['suggestions'][] = [
            'value' => $data['buah'],
            'buah'  => $data['buah']
        ];
    }

    // Encode ke JSON.
    echo json_encode($output);

// Jika tidak ada yang cocok.
} else {
    $output['suggestions'][] = [
        'value' => '',
        'buah'  => ''
    ];

    // Encode ke JSON.
    echo json_encode($output);
}
