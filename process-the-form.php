<?php
$email = $_POST["email"];

/*
1)
This page contains code that will display the email address the user entered.
Add code that will also display the values from the other text field and the radio buttons. 
Make sure you display the values from each of the different form controls in the body of the HTML page. 
You will also need to make sure you have selected one of the radio buttons or you will get errors.
*/

/*
2)
In the index.html page add another form control to gather the user's phone number. 
Display the entered phone number below along with the other values from the form. 
*/

/*
3)
See if you can write some code that will test if the user has answered the question correctly. 
*/

/*
4)
Experiment with using the GET method instead of POST, make sure you understand the difference.
*/



?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>Basic Form Processing</title>
 <link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>Basic Form Processing</h1>
<?php
echo "<p> You entered an email address of <strong>{$email}</strong>.</p>";
?>
</body>
</html>
