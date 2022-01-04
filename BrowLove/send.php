<?php
 $UserName = ($_POST['UserName']); //переменная input с атрибутом name="UserName"
 $phone = ($_POST['tel']); //переменная input с атрибутом name="tel"
 $email = ($_POST['email']); //переменная input с атрибутом name="email"
//В переменную $token нужно вставить токен, который нам прислал @botFather
$token = "1975117798:AAHwNJqJnOK3l2t5HaE5fd-osINhJVgXETg";
//Сюда вставляем chat_id
$chat_id = "-1001512087010";
 

//Собираем в массив то, что будет передаваться боту
    $arr = array(
        'Имя:' => $UserName,
        'Телефон:' => $tel,
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