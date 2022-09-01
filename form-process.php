<?php
$email = $_POST["email"];

/*
This page contains code that will display the email address the user entered.
Add code that will also display the values from the other text fields and the radio buttons. 
Make sure you display the values from each of the different form controls in the body of the HTML page. 
You will also need to make sure you have selected one of the radio buttons or you will get errors.
*/

/*
In the html-forms.html page add another form control to gather the user's phone number. 
Display the entered phone number below along with the other values from the form. 
*/

/*
Experiment with using the GET method instead of POST, make sure you understand the difference.
*/

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
?>
</body>
</html>
