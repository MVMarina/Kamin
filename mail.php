<?php include 'header.php';?>

<?php
    if(isset($_POST['submit']))
      // $name = 'name';
      $name = $_POST['name'];
      $name = htmlspecialchars($name);
      $name = urldecode($name);
      $name = trim($name);
      // $tel = 'tel';
      $tel = $_POST['tel'];
      $tel = htmlspecialchars($tel);
      $tel = urldecode($tel);
      $tel = trim($tel);
      // $email = 'email';
      $email = $_POST['email'];
      $email = htmlspecialchars($email);
      $email = urldecode($email);
      $email = trim($email);
      { 
        $name = mysql_escape_string(htmlspecialchars(strip_tags($_POST['name'])));
        if(empty($name))
        {    
          echo"Вы не ввели имя";  
        }
        elseif(empty($_POST['tel']))
        {    
          echo"Вы не ввели телефон";  
        }
            elseif(!preg_match("/[-a-zA-Z0-9]{3,15}/", $_POST['tel']))
        { 
          //если переменная не соответствует шаблону -a-zA-Z0-9  
          echo"Вы неправильно ввели телефон";   
        }

         elseif(empty($_POST['email']))
        {  
          echo"Вы не ввели E-mail"; // выводим сообщение об ошибке   
        }
        elseif(!preg_match("/[-a-zA-Z0-9_]{3,20}@[-a-zA-Z0-9]{2,64}\.[a-zA-Z\.]{2,9}/", $_POST['email']))
        { 
        //регулярное выражение на проверку правильности email  
          echo"Вы неправильно ввели E-mail";  
        }
        else{   
            echo "<h3> Здравствуйте,".$name."! <br> <br>Ваш телефон - ".$tel." <br> <br>Ваш email - ".$email."<br><br>Ваше сообщение успешно отправлено.<br> <br>С вами свяжутся через некоторое время.</h3> ";  
      }  
    }  

    echo "<br><br><br>";
  ?>

<?php include 'footer.php';?>