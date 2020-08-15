<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Loan
 * 
 * @property int $id
 * @property int $customer_id
 * @property float $amount
 * @property string $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Customer $customer
 * @property Collection|LoanFunding[] $loan_fundings
 * @property Collection|Payment[] $payments
 *
 * @package App\Models
 */
class Loan extends Model
{
	protected $table = 'loans';

	protected $casts = [
		'customer_id' => 'int',
		'amount' => 'float'
	];

	protected $fillable = [
		'customer_id',
		'amount',
		'status'
	];

	public function customer()
	{
		return $this->belongsTo(Customer::class);
	}

	public function loan_fundings()
	{
		return $this->hasMany(LoanFunding::class);
	}

	public function payments()
	{
		return $this->hasMany(Payment::class);
	}
}
