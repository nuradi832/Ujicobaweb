<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . "/vendor/autoload.php"; // Pastikan path ini sesuai dengan lokasi autoload Composer
require_once __DIR__ . "/config/connection.php"; // Menyertakan file koneksi database


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $name = htmlspecialchars(trim($_POST['name']));
    $address = htmlspecialchars(trim($_POST['address']));
    $visit_date = htmlspecialchars(trim($_POST['visit_date']));
    $quantity = intval($_POST['quantity']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $ticket_price = 20000;
    $total_price = $ticket_price * $quantity;

    // Membuat kode tiket acak
    $ticket_code = strtoupper(bin2hex(random_bytes(4)));

    // Validasi data
    if (empty($name) || empty($address) || empty($visit_date) || $quantity < 1 || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Harap isi semua data dengan benar!";
        exit;
    }

    // Menyimpan data pemesanan ke database
    $query = "INSERT INTO bookings (name, email, address, visit_date, quantity, price, total_price, ticket_code, created_at) 
        VALUES ('$name', '$email', '$address', '$visit_date', $quantity, $ticket_price, $total_price, '$ticket_code', now())";

    mysqli_query($conn, $query);


    // Membuat pesan email dengan menyertakan file template
    ob_start();
    include 'email_template.php'; // Memasukkan template HTML
    $message = ob_get_clean(); // Menyimpan output HTML ke dalam variabel $message

    // Mengirim email menggunakan PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Konfigurasi SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'nuradi045@gmail.com'; // Email pengirim
        $mail->Password = 'xlug udrl sclv worm'; // App Password Gmail 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Pengaturan pengirim dan penerima
        $mail->setFrom('nuradi045@gmail.com', 'Tiket Tirto Asri Walik'); // Email dan nama pengirim
        $mail->addAddress($email, $name); // Email dan nama penerima

        // Konten email
        $mail->isHTML(true);
        $mail->Subject = "Informasi Pemesanan Tiket Anda";
        $mail->Body = $message;

        // Kirim email
        $mail->send();
        echo "<script>
                alert('Email berhasil dikirim ke $email.');
                window.history.back();
              </script>";
    } catch (Exception $e) {
        echo "<script>
                alert('Gagal mengirim email. Error: {$mail->ErrorInfo}');
                window.history.back();
              </script>";
    }
} else {
    echo "Metode permintaan tidak valid.";
}
