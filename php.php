<?php
$message = ""; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $company = isset($_POST['company']) ? trim($_POST['company']) : '';
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
    
    if (empty($name) || empty($company) || empty($phone)) {
        echo $message = "Все поля обязаны быть заполнены!";
    } elseif (!filter_var($company, FILTER_VALIDATE_URL)) {
        echo $message = "Некорректный URL сайта!";
    } elseif (!preg_match('/^\+?[0-9\s()-]*$/', $phone)) {
        echo $message = "Некорректный номер телефона!";
    } else {
        
        $logFile = 'log.txt';
        $date = date("Y-m-d H:i:s");
        $logMessage = "Имя: $name, Сайт компании: $company, Номер телефона: $phone, Дата и время(мск): $date\n";
        file_put_contents($logFile, $logMessage, FILE_APPEND);

        echo $message = "Данные успешно сохранены!";
    }
}
