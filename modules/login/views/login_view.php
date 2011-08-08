<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<title>Login</title>
<style> label { display: block; } </style>
</head>
<body>
<h1> Please Login</h1>
<?php echo form_open('login'); ?>
<p>
<?php
      echo form_label('Email Address: ', 'email_address');
      echo form_input('email_address', set_value('email_address'), 'id="email_address" autofocus');
   ?>
</p>

<p>
<?php
      echo form_label('Password:', 'password');
      echo form_password('password', '', 'id="password"');
   ?>
</p>

<p>
<?php echo form_submit('submit', 'Login'); ?>
</p>
<?php echo form_close(); ?>

<?php echo validation_errors(); ?>
</body>
</html> 
