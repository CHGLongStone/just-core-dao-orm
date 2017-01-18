<?php 

return array(
    'ORM_VIEW' => array(		
		'client_log' => array(
			'DSN' => 'JCORE',
			'table' => 'client_log',
			'pk_field' => 'client_log_pk',
			'fk_field' => array(
				'client_user_fk' => array(
					'table' => 'client_user',
					'pk_field' => 'client_user_pk',
				),
				'client_fingerprint_fk' => array(
					'table' => 'client_fingerprint',
					'pk_field' => 'client_fingerprint_pk',
				),
			),
		),
		
		'client' => array(
			'TABLE_LIST' => array(
				'client',
				'fingerprint_to_client_user',
				'client_user_fingerprint',
				'client_user',
			),
			'TABLE_STRUCTURE' => array(
				'client' => array(
					'client_user' => array(
						'parent_pk' => 'client_pk',
						'child_pk' => 'client_fk',
					),
					'client_user_fingerprint' => array(
						'fingerprint_to_client_user' => array(
							'parent_pk' => 'client_user_fk',
							'child_pk' => 'client_user_fingerprint_fk',
						)
					),
				),
			),
		),
    ),
);


?>