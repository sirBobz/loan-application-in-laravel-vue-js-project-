<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLoanFundingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('loan_funding', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('loan_id')->index('loan_id');
			$table->integer('lender_id')->index('lender_id');
			$table->decimal('amount', 10);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('loan_funding');
	}

}
