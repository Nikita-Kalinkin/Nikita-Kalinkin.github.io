<?php
 $name = ($_POST['name']); //переменная input с атрибутом name="name"
 $phone = ($_POST['phone']); //переменная input с атрибутом name="phone"
 $email = ($_POST['email']); //переменная input с атрибутом name="email"
//В переменную $token нужно вставить токен, который нам прислал @botFather
$token = "1975117798:AAHwNJqJnOK3l2t5HaE5fd-osINhJVgXETg";
//Сюда вставляем chat_id
$chat_id = "-1001512087010";
 

//Собираем в массив то, что будет передаваться боту
    $arr = array(
        'Имя:' => $name,
        'Телефон:' => $phone,
        'E-mail:' => $email,
    );

//Настраиваем внешний вид сообщения в телеграме
    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
    };

//Передаем данные боту
    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

    /*ЕСЛИ ПИСЬМО ОТПРАВЛЕНО УСПЕШНО ВЫВОДИМ СООБЩЕНИЕ*/
    if ($sendToTelegram == "true")
    {
        echo "Ваше сообщение отправлено. Мы ответим вам в ближайшее время.\r\n";
    }
    /*ЕСЛИ ПИСЬМО НЕ УДАЛОСЬ ОТПРАВИТЬ ВЫВОДИМ СООБЩЕНИЕ ОБ ОШИБКЕ*/
    else
    {
        echo "Не удалось отправить, попробуйте снова!";
    }
?>