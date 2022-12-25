<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclemodelsTable extends Migration {

    public function down() {
        Schema::dropIfExists('vehiclemodels');
    }

    public function up() {
        Schema::create('vehiclemodels', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid')->unique();
            
			$table->string('name', 80);
			$table->string('brand', 60)->nullable();
			$table->string('version', 20);
             
            $table->timestamps();
			$table->softDeletes();
             
        });
    }
}
