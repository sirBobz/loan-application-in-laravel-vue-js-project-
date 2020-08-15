<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Payment
 * 
 * @property int $id
 * @property int $transaction_id
 * @property int $loan_id
 * @property string $payments
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Loan $loan
 * @property Transaction $transaction
 *
 * @package App\Models
 */
class Payment extends Model
{
	protected $table = 'payments';

	protected $casts = [
		'transaction_id' => 'int',
		'loan_id' => 'int'
	];

	protected $fillable = [
		'transaction_id',
		'loan_id',
		'payments'
	];

	public function loan()
	{
		return $this->belongsTo(Loan::class);
	}

	public function transaction()
	{
		return $this->belongsTo(Transaction::class);
	}
}
