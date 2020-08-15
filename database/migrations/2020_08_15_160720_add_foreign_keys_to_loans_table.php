<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLoansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('loans', function(Blueprint $table)
		{
			$table->foreign('customer_id', 'loans_ibfk_1')->references('id')->on('customers')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('loans', function(Blueprint $table)
		{
			$table->dropForeign('loans_ibfk_1');
		});
	}

}
