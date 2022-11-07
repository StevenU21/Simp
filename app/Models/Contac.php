<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contac
 *
 * @property $id
 * @property $email
 * @property $title
 * @property $description
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Contac extends Model
{
    
    static $rules = [
		'email' => 'required',
		'title' => 'required',
		'description' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['email','title','description'];



}
