<?php

namespace Modules\ValidationReseller\Validator;

use App\Imports\ValidatorImport;

class ResellersValidator extends ValidatorImport
{	  

	public function rule($data){
		return  [
			'id_representante' => 	'integer|min:1|unique_custom_values',
			'nome' => 				'string|max:255',
			'login' => 				'required|string|max:100|unique_custom_values',
			'senha' => 				'required|string|max:255',
			'cpf_cnpj' => 			'nullable|string|max:15|unique_custom_values',
			'email' => 				'nullable|string|max:50|email',
			'telefone' => 			'nullable|string|max:15',
			'admin' => 				'integer|between:0,1'
		];
	}

}
