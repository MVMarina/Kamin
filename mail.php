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
          echo"<h4> Вы не ввели имя</h4>";  
        }
          elseif(!preg_match("/^[A-Za-zА-Яа-я][^0-9]+$/", $_POST['name']))
          // elseif(!preg_match("/^[a-zA-ZА-Яа-я][^0-9]*/", $_POST['name']))
        { 
          echo"<h4> Вы неправильно ввели имя</h4>";   
        }
        elseif(empty($_POST['tel']))
       {    
        echo"<h4> Вы не ввели телефон</h4>";  
        }
            elseif(!preg_match("/^[0-9-+]{7,16}[^A-Za-zА-Яа-я]{0}/", $_POST['tel']))
        { 
            echo"<h4> Вы неправильно ввели телефон</h4>";   
        }
         elseif(empty($_POST['email']))
        {  
          echo"<h4> Вы не ввели E-mail</h4>"; // выводим сообщение об ошибке   
        }
        elseif(!preg_match("/[-a-zA-Z0-9_-]{3,20}@[-a-zA-Z0-9]{2,64}\.[a-zA-Z\.]{2,9}/", $_POST['email']))
        { 
          echo"<h4> Вы неправильно ввели E-mail</h4>";  
        }
        else{   
            echo "<h3> Здравствуйте,".$name."! <br> <br>Ваш телефон - ".$tel." <br> <br>Ваш email - ".$email."<br><br>Ваше сообщение успешно отправлено.<br> <br>С вами свяжутся через некоторое время.</h3> ";  
      }  
    }  

    echo "<br><br><br>";
  ?>

<?php include 'footer.php';?>