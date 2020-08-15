<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Transaction
 * 
 * @property int $id
 * @property int $customer_id
 * @property float $amount
 * @property string $reference
 * @property Carbon $time
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Customer $customer
 * @property Collection|Payment[] $payments
 *
 * @package App\Models
 */
class Transaction extends Model
{
	protected $table = 'transactions';

	protected $casts = [
		'customer_id' => 'int',
		'amount' => 'float'
	];

	protected $dates = [
		'time'
	];

	protected $fillable = [
		'customer_id',
		'amount',
		'reference',
		'time'
	];

	public function customer()
	{
		return $this->belongsTo(Customer::class);
	}

	public function payments()
	{
		return $this->hasMany(Payment::class);
	}
}
