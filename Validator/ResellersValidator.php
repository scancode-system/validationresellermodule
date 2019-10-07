<?php 

namespace Modules\ValidationReseller\Validator;

use Modules\Portal\Imports\ValidatorImport;
use Modules\Portal\Rules\NotInCustomRule;

class ResellersValidator extends ValidatorImport
{	  

	protected $required = ['login', 'senha'];

	public function rule($data){
		return  [
			'id_representante' => 	['integer', 'min:1',  new NotInCustomRule($this->chunkColumn('id_representante', 0, $this->row_index-2), 'Duplicado')],
			'nome' => 				'string|max:255',
			'login' => 				['filled', 'string', 'max:100',  new NotInCustomRule($this->chunkColumn('login', 0, $this->row_index-2), 'Duplicado')],
			'senha' => 				'filled|string|max:255',
			'admin' => 				'integer|between:0,1'
		];
	}

public function messages(){
		return  [];
	}
}
