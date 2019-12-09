<?php

namespace Modules\ValidationReseller\Services;


class ValidationResellerService {
	
	public function fields(){
		return config('validationreseller.fields');
	}

	public function sample(){
		return config('validationreseller.sample');
	}

}
