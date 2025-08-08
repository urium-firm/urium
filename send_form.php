
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "urium.rma@gmail.com";
    $subject = "Новая заявка с сайта Юриум";
    $body = "Имя: $name\nТелефон: $phone\nСообщение: $message";

    $headers = "From: no-reply@urium.ru\r\n";
    $headers .= "Content-type: text/plain; charset=utf-8";

    if (mail($to, $subject, $body, $headers)) {
        echo "Спасибо! Ваша заявка отправлена.";
    } else {
        echo "Ошибка при отправке. Попробуйте позже.";
    }
}
?>
