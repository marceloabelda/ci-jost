<div class='mainInfo'>

	<h1>Create Group</h1>
	<p>Please enter the group information below.</p>
	
	<div id="infoMessage"><?php echo $message;?></div>
	
    <?php echo form_open("groups/admin/create_group");?>
      <p>Nombre:<br />
      <?php echo form_input($name);?>
      </p>
      
      <p>Descripción:<br />
      <?php echo form_input($description);?>
      </p>
      
      
      <p><?php echo form_submit('submit', 'Crear Grupo');?></p>

      
    <?php echo form_close();?>

</div>
