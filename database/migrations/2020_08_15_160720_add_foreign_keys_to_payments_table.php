<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('payments', function(Blueprint $table)
		{
			$table->foreign('loan_id', 'payments_ibfk_1')->references('id')->on('loans')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('transaction_id', 'payments_ibfk_2')->references('id')->on('transactions')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('payments', function(Blueprint $table)
		{
			$table->dropForeign('payments_ibfk_1');
			$table->dropForeign('payments_ibfk_2');
		});
	}

}
