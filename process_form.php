<?php
// Ambil data dari formulir
$name = $_POST["name"];
$email = $_POST["email"];
$Kelas = isset($_POST["Kelas"]) ? true : false;
$gender = $_POST["gender"];

// Validasi input di sisi server
if (empty($name) || empty($email) || !($gender == 'Laki-Laki' || $gender == 'Perempuan')) {
    echo "Data tidak valid. Harap periksa kembali.";
} else {
    // Simpan data ke basis data
    saveToDatabase($name, $email, $Kelas, $gender);
    echo "Data berhasil disimpan ke basis data.";
}

// Fungsi untuk menyimpan data ke basis data
function saveToDatabase($name, $email, $Kelas, $gender) {
    $conn = new mysqli("localhost", "root", "", "mahasiswa");

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi ke basis data gagal: " . $conn->connect_error);
    }

    $name = cleanInput($name);
    $email = cleanInput($email);
    $Kelas = $Kelas ? 'Ya' : 'Tidak';
    $gender = cleanInput($gender);

    $sql = "INSERT INTO mahasiswa (nama, email, kelas, gender)
            VALUES ('$name', '$email', '$Kelas', '$gender')";

    if ($conn->query($sql) !== TRUE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

// Fungsi untuk membersihkan input dari karakter yang tidak diinginkan
function cleanInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}
?>