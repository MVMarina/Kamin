﻿<?php include 'header.php';?>
<?php
  // $mail_to = "morozova.mariV@gmail.com";                  // емайл получателя данных из формы 
  $tema = "Форма обратной связи на PHP";               // тема полученного емайла 
  $message = "Ваше имя: ".$_POST['name']."<br>";   //присвоить переменной значение, полученное из формы name=name
  $message .= "E-mail: ".$_POST['email']."<br>";         //полученное из формы name=email
  $message .= "Номер телефона: ".$_POST['tel']."<br>"; //полученное из формы name=phone
  $message .= "Сообщение: ".$_POST['message']."<br>";    //полученное из формы name=message

// функцию отправки формы send_mail
function send_mail($message)
{
	// заголовок письма
		$headers= "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=utf-8\r\n";          // кодировка письма
		$headers .= "From: Тестовое письмо <адрес_почты_на_хосте>\r\n";         // от кого письмо
// отправляем письмо
		mail($$mail_to, $tema, $message);      //отправляет получателю на емайл значения переменных
}

if (mail("example@mail.ru", "Заявка с сайта", "Ваше имя:".$name. "Номер телефона:".$tel. "E-mail:". $email ,"From: example2@mail.ru \r\n"))
{ 
     echo "<h2>Сообщение успешно отправлено.<br> С вами свяжутся через некоторое время. </h2>"; 
} 
	else
{ 
     echo "<h2>При отправке сообщения возникли ошибки. <br><br><br><br><br><br><br><br></h2>";
     

}

?>







<?php include 'footer.php';?>