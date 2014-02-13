<?php

use Illuminate\Database\Migrations\Migration;

class CreateAddresses extends Migration {

	public function up() {
		
		Schema::create('addresses', function($table) {
			$table->increments('id');
			$table->string('user_id', 10)->unsigned();
			$table->string('addressee', 50)->nullable();
			$table->string('organization', 50)->nullable();
			$table->string('street', 50);
			$table->string('street_extra', 50)->nullable();
			$table->string('city', 50);
			$table->string('state_a2', 2);
			$table->string('state_name', 60);
			$table->string('zip', 11);
			$table->string('country_a2', 2)->default('US');
			$table->string('country_name', 60)->default('United States');
			$table->string('phone', 20)->nullable();
			$table->boolean('is_primary')->default(false)->index();
			$table->boolean('is_billing')->default(false)->index();
			$table->boolean('is_shipping')->default(false)->index();
			$table->float('latitude')->nullable();
			$table->float('longitude')->nullable();
		});
		
	}

	public function down() {
		Schema::drop('addresses');
	}

}