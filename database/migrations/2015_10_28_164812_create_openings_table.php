<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpeningsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('openings', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('type');
            $table->text('description');
            $table->text('duties');
            $table->text('qualifications');
            $table->text('apply');
            $table->string('hours');
            $table->string('pay');
            $table->string('duration');
            $table->string('location');
            $table->string('updated');
            $table->string('entered_by');
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('openings');
	}

}
