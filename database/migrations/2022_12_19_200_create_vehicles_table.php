<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration {

    public function down() {
        Schema::dropIfExists('vehicles');
    }

    public function up() {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid')->unique();
            
			$table->integer('vehiclemodel_id')->unsigned();
			$table->foreign('vehiclemodel_id')->references('id')->on('vehiclemodels')->onDelete('restrict');

			$table->char('plaque', 8)->unique();
			$table->char('color', 2);
			$table->integer('manufacturing');
			$table->integer('yearmodel');
			$table->string('chassi', 100)->unique()->nullable();
             
            $table->timestamps();
			$table->softDeletes();
             
        });
    }
}
