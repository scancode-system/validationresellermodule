<?php

namespace Modules\ValidationReseller\Validator;

use Modules\Portal\Imports\ValidatorImport;

class ResellersValidator extends ValidatorImport
{	  

	protected $required = ['login', 'senha'];

	public function rule($data){
		return  [
			'id_representante' => 	'integer|min:1|unique_custom_values',
			'nome' => 				'string|max:255',
			'login' => 				'filled|string|max:100|unique_custom_values',
			'senha' => 				'filled|string|max:255',
			'admin' => 				'integer|between:0,1'
		];
	}

}
