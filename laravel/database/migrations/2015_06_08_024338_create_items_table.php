<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('items', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
            $table->string('slug')->unique('slug');
            $table->string('name');
            $table->string('original_file_name');
            $table->string('file_name')->unique('file_name');
            $table->text('description')->nullable();
            $table->enum('type', ['grp', 'zip', 'image', 'file', 'mod', 'iscript']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('items');
	}

}
