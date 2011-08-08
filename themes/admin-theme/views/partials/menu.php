<?php 
$this->load->model('mcb_menu/menu_model');

echo $this->menu_model->display(array('view'=>'mcb_menu/menu'));
//echo modules::run('mcb_menu/display', array('view'=>'mcb_menu/menu')); 

?>

<!--
<ul id="trans-nav">
		<li><a>CONF. GENERAL</a>
			<ul>
				<li><php echo anchor('users/admin','Usuarios');?></li>
				<li><php echo anchor('groups/admin','Grupos');?></li>
			</ul>
		
		</li>
</ul>
--!>
