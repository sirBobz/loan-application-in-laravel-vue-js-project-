<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 * 
 * @property int $id
 * @property string $name
 * @property string $type
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|LoanFunding[] $loan_fundings
 * @property Collection|Loan[] $loans
 * @property Collection|Transaction[] $transactions
 *
 * @package App\Models
 */
class Customer extends Model
{
	protected $table = 'customers';

	protected $fillable = [
		'name',
		'type'
	];

	public function loan_fundings()
	{
		return $this->hasMany(LoanFunding::class, 'lender_id');
	}

	public function loans()
	{
		return $this->hasMany(Loan::class);
	}

	public function transactions()
	{
		return $this->hasMany(Transaction::class);
	}
}
