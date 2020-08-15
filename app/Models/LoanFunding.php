<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LoanFunding
 * 
 * @property int $id
 * @property int $loan_id
 * @property int $lender_id
 * @property float $amount
 * 
 * @property Customer $customer
 * @property Loan $loan
 *
 * @package App\Models
 */
class LoanFunding extends Model
{
	protected $table = 'loan_funding';
	public $timestamps = false;

	protected $casts = [
		'loan_id' => 'int',
		'lender_id' => 'int',
		'amount' => 'float'
	];

	protected $fillable = [
		'loan_id',
		'lender_id',
		'amount'
	];

	public function customer()
	{
		return $this->belongsTo(Customer::class, 'lender_id');
	}

	public function loan()
	{
		return $this->belongsTo(Loan::class);
	}
}
