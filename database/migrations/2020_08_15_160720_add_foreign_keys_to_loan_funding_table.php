<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLoanFundingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('loan_funding', function(Blueprint $table)
		{
			$table->foreign('lender_id', 'loan_funding_ibfk_1')->references('id')->on('customers')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('loan_id', 'loan_funding_ibfk_2')->references('id')->on('loans')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('loan_funding', function(Blueprint $table)
		{
			$table->dropForeign('loan_funding_ibfk_1');
			$table->dropForeign('loan_funding_ibfk_2');
		});
	}

}
