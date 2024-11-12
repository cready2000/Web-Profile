<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    date_default_timezone_set('Asia/Jakarta');

    // Ambil data dari form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $created_at = date('Y-m-d H:i:s');

    // Query untuk memasukkan data ke tabel contact
    $sql = "INSERT INTO contact (name, email, subject, message, created_at)
            VALUES ('$name', '$email', '$subject', '$message', '$created_at')";

    if ($conn->query($sql) === TRUE) {
        // Jika berhasil, simpan link WhatsApp di response JSON
        $encodedMessage = urlencode("Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message");
        $whatsappLink = "https://wa.me/6282230013246?text=" . $encodedMessage;

        // Kembalikan link WhatsApp dalam format JSON
        echo json_encode(["status" => "success", "whatsappLink" => $whatsappLink]);
    } else {
        echo json_encode(["status" => "error", "message" => "Error: " . $sql . " - " . $conn->error]);
    }
}
?>