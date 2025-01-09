<?php
// Sprawdzenie, czy formularz został wysłany metodą POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Odbieranie danych z formularza
    $name = htmlspecialchars($_POST['name']);  // Imię i nazwisko
    $email = htmlspecialchars($_POST['email']);  // E-mail
    $message = htmlspecialchars($_POST['message']);  // Wiadomość

    // Adres e-mail, na który mają być wysyłane wiadomości
    $to = "awejda112@proton.me";  // Twój adres e-mail

    // Temat wiadomości
    $subject = "Wiadomość z formularza kontaktowego";

    // Treść wiadomości
    $body = "Imię i nazwisko: $name\nE-mail: $email\nWiadomość: $message";

    // Nagłówki wiadomości
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Content-Type: text/plain; charset=UTF-8";

    // Funkcja mail do wysyłania wiadomości
    if (mail($to, $subject, $body, $headers)) {
        // Jeśli wiadomość została wysłana
        echo "Wiadomość została wysłana.";
    } else {
        // Jeśli wystąpił błąd podczas wysyłania
        echo "Wystąpił błąd podczas wysyłania wiadomości.";
    }
}
?>
