<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Preference
 *
 * @property $id
 * @property $wishlist
 * @property $carshop
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Preference extends Model
{
    
    static $rules = [
		'wishlist' => 'required',
		'carshop' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['wishlist','carshop'];



}
