<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PaymentType
 *
 * @property $id
 * @property $name
 * @property $last_name
 * @property $card_number
 * @property $special_number
 * @property $end
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PaymentType extends Model
{
    
    static $rules = [
		'name' => 'required',
		'last_name' => 'required',
		'card_number' => 'required',
		'special_number' => 'required',
		'end' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','last_name','card_number','special_number','end'];



}
