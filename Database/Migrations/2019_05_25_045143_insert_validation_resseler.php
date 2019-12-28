<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Portal\Entities\Validation;

class InsertValidationResseler extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Validation::create([
                'alias' => 'representantes',
                'module_name' => 'ValidationReseller',
                'module_alias' => 'validationreseller',
                'video' => 'https://www.youtube.com/embed/zpOULjyy-n8?rel=0',
                'file' => 'representantes.xlsx',
                'validation' => 'resellers', 
                'import' => 'Saller@import'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Validation::where('module_name', 'ValidationReseller')->first()->delete();
    }
}
