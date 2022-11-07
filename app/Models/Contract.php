<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contract
 *
 * @property $id
 * @property $begin
 * @property $end
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Contract extends Model
{
    
    static $rules = [
		'begin' => 'required',
		'end' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['begin','end'];



}
