<?php
$email = $_POST["email"];
$fullname = $_POST["fullname"];
$phone = $_POST["phone"];
$hear = $_POST["hear"];

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>Basic Form Processing</title>
</head>
<body>
<?php
echo "<p> You entered an email address of {$email}.</p>";
echo "<p> You entered a fullname of {$fullname}.</p>";
echo "<p> You entered a phone number of {$phone}.</p>";
echo "<p> You heard about carboot.com through a {$hear}.</p>";

?>
</body>
</html>
