echo '<?php
include "koneksi.php";
$sql = "INSERT INTO mahasiswa (npm, nama) VALUES (\"23753003\", \"Allena Zandra\")";
if(mysqli_query($conn, $sql)){
    echo "Data berhasil ditambahkan!";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>' > tambah.php
