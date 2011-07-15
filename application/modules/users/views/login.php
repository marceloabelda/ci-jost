<!DOCTYPE HTML>
<html>
<head>
	<title>Login CI-PACK</title>
</head>

<body>

<div class='mainInfo'>
	
	<div id="infoMessage"><?php echo $message;?></div>
	
    <?php echo form_open("users/admin/login");?>
    	
      <p>
      	<label for="email">Email:</label>
      	<?php echo form_input($email);?>
      </p>
      
      <p>
      	<label for="password">Password:</label>
      	<?php echo form_input($password);?>
      </p>      
      
      <p><?php echo form_submit('submit', 'Login');?></p>

      
    <?php echo form_close();?>

</div>
</body>
</html>
