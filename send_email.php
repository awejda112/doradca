<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dane z formularza
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Adres e-mail odbiorcy
    $to = "awejda112@proton.me"; // Twój adres e-mail
    $subject = "Nowa wiadomość od $name";
    
    // Treść wiadomości
    $messageBody = "Imię i nazwisko: $name\n";
    $messageBody .= "E-mail: $email\n\n";
    $messageBody .= "Wiadomość:\n$message";

    // Nagłówki wiadomości
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Wysyłanie wiadomości
    if (mail($to, $subject, $messageBody, $headers)) {
        echo "Wiadomość została wysłana!";
    } else {
        echo "Wystąpił problem podczas wysyłania wiadomości.";
    }
}
?>
