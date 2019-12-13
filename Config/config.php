<?php

return [
	'name' => 'ValidationReseller', 
	'fields' => ['id', 'name', 'email', 'goal', 'password'],
	'sample' => [
		[
			'name' => 'id',
			'observation' => 'Código do representante.',
			'sample_1' => '1',
			'filled' => false
		], 
		[
			'name' => 'name',
			'observation' => 'Nome do representante.',
			'sample_1' => 'pedro',
			'filled' => true
		], 
		[
			'name' => 'email',
			'observation' => 'Email do representante.',
			'sample_1' => 'pedro@gmail.com.br',
			'filled' => true
		], 
		[
			'name' => 'goal',
			'observation' => 'Meta de venda do representante.',
			'sample_1' => '25000',
			'filled' => false
		], 
		[
			'name' => 'password',
			'observation' => 'Senha utilizado no APP.',
			'sample_1' => '12345678',
			'filled' => true
		]
	]
];
