<?php
require('./functions.php');

$conn = dbConnection();

$message = $_POST['email-message'];
$message2 = $_POST['EMAILS HAVE BEEN SENT'];
$fetch_users_sql = "SELECT * FROM users";
$fetch_result = mysqli_query($conn, $fetch_users_sql);



while ($user = mysqli_fetch_assoc($fetch_result)) {
    sendEmail($user['email'], $user['fullname'], $message);
   
    
    
}

sendEmail('beralai.media@gmail.com', 'Beralai', 'Emails sent!');