<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Worker
 *
 * @property $id
 * @property $name
 * @property $last_name
 * @property $phone_number
 * @property $address
 * @property $specialty
 * @property $category_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Category $category
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Worker extends Model
{

    static $rules = [
		'name' => 'required',
		'last_name' => 'required',
		'phone_number' => 'required',
		'address' => 'required',
		'specialty' => 'required',
		'category_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','last_name','phone_number','address','specialty','category_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }


}
