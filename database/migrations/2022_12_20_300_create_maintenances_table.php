<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenancesTable extends Migration {

    public function down() {
        Schema::dropIfExists('maintenances');
    }

    public function up() {
        Schema::create('maintenances', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid')->unique();
            
			$table->integer('vehicle_id')->unsigned();
			$table->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('restrict');

			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');

			$table->integer('km');
			$table->date('dateservice');
			$table->float('values', 10,2);
			$table->string('observations', 255)->nullable();
             
            $table->timestamps();
			$table->softDeletes();
             
        });
    }
}
