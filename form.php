
<!-- Контейнер div в форме предназначен для вывода сообщений об ошибке. --> 
 <div id="form_result"></div>
 
<form action="mail.php" method="get">  <!-- или method="post" -->
    <input type="text" name="name" placeholder="Имя" required> 
    <input type="text" name="tel" placeholder="Телефон" required> 
    <input type="text" name="email" placeholder="e-mail" required> <br><br>
    <textarea rows="3" cols="45" name="message"></textarea>
    <input type="submit" value="Отправить">
   
</form>