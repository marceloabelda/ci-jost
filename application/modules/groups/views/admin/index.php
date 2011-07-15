<div class='mainInfo'>

	<h1>Grupos</h1>
	<p>Listo de grupos.</p>
	
	<div id="infoMessage"><?php echo $message;?></div>
	
	<table cellpadding=0 cellspacing=10>
		<tr>
			<th>Name</th>
			<th>Description</th>
		</tr>
		<?php foreach ($groups as $group):?>
			<tr>
				<td><?php echo $group->name?></td>
				<td><?php echo $group->description?></td>
			</tr>
		<?php endforeach;?>
	</table>
	
	<p><a href="<?php echo site_url('groups/admin/create_group');?>">Create a new group</a></p>
	
	<p><a href="<?php echo site_url('users/admin/logout'); ?>">Logout</a></p>
	
</div>
