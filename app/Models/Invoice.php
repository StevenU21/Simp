<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Invoice
 *
 * @property $id
 * @property $cost
 * @property $description
 * @property $date
 * @property $order_number
 * @property $pay_code
 * @property $unit_price
 * @property $sub_total
 * @property $IVA
 * @property $total
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Invoice extends Model
{
    
    static $rules = [
		'cost' => 'required',
		'description' => 'required',
		'date' => 'required',
		'order_number' => 'required',
		'pay_code' => 'required',
		'unit_price' => 'required',
		'sub_total' => 'required',
		'IVA' => 'required',
		'total' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cost','description','date','order_number','pay_code','unit_price','sub_total','IVA','total'];



}
