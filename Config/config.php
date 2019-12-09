<?php

return [
    'name' => 'ValidationReseller', 
    'fields' => ['id', 'name', 'email', 'goal', 'password'],
	'sample' => [
		[
			'name' => 'id',
			'observation' => 'Código do representante.',
			'filled' => false
		], 
		[
			'name' => 'name',
			'observation' => 'Nome do representante.',
			'filled' => true
		], 
		[
			'name' => 'email',
			'observation' => 'Email do representante.',
			'filled' => true
		], 
		[
			'name' => 'goal',
			'observation' => 'Meta de venda do representante.',
			'filled' => false
		], 
		[
			'name' => 'password',
			'observation' => 'Senha utilizado no APP.',
			'filled' => true
		]
	]
];
