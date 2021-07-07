<?php

namespace Modules\ValidationReseller\Services; 


use Modules\Portal\Rules\NotInCustomRule;
use Modules\Portal\Rules\NullRule;
use Modules\Portal\Services\Validation\Data\InfoValidationService;
use Modules\Portal\Services\Validation\Data\InfoValidationsService;


class InfoService extends InfoValidationService
{

	public function rule($data, $index, $columns){
		return  [
			'id' => ['nullable', 'integer', 'min:1', new NotInCustomRule(InfoValidationService::chunkColumn($columns, 'id', 0, $index-2), 'Duplicado')],
			'name' => ['filled', 'string', 'max:191'],
			'login' => ['filled', 'string', 'max:191', new NotInCustomRule(InfoValidationService::chunkColumn($columns, 'login', 0, $index-2), 'Duplicado')],
			'email' => ['filled', 'string', 'max:191', new NotInCustomRule(InfoValidationService::chunkColumn($columns, 'email', 0, $index-2), 'Duplicado')],
			'goal' => 'numeric|min:0|regex:/^\d+(\.\d{1,2})?$/',
			'password' => 'filled|string|max:191'
		];
	}

	public function modifiers($data)
	{
		return [
			['rule' => ['goal' => [new NullRule()]], 'filter' => 'setToZero']
		];
	}

	public function columnsFormat($header)
	{
		return [
			'name' => InfoValidationsService::STRING_FORMAT, 
			'email' => InfoValidationsService::STRING_FORMAT,
			'password' => InfoValidationsService::STRING_FORMAT,
			'login' => InfoValidationsService::STRING_FORMAT
		];
	}

}