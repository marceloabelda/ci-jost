<?php

$config = array(
    'mcb_menu'  =>  array(
        'escritorio' =>  array(
            'title' =>  'escritorio',
            'href'  =>  'escritorio'
        ),
        'clientes'   =>  array(
            'title'     =>  'clientes',
            //'href'      =>  'clientes/index',
            'submenu'   =>  array(
                'dominios'  =>  array(
                    'title' =>  'dominios',
                    'href'  =>  'dominios'
                ),
                'usuarios'  =>  array(
                    'title' =>  'usuarios',
                    'href'  =>  'usuarios',
                    'submenu'   =>  array(
						'mails'  =>  array(
							'title' =>  'mails',
							'href'  =>  'usuarios/mails'
						),
						'ftp'  =>  array(
							'title' =>  'ftp',
							'href'  =>  'usuarios/ftp'
						)	
					)
                )
            )
        ),
        'informes' =>array(
			'title'     =>  'Informes',
			'submenu'   =>  array(
                'espacio_ocupado'  =>  array(
                    'title' =>  'Espacio Ocupado',
                    'href'  =>  'espacio_ocupado',
                    'global_admin'  =>  TRUE
                )
			)
        )
    )
);

?>
