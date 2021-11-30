<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 *
 * @property $id
 * @property $title
 * @property $content
 * @property $image
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Post extends Model
{
    
    static $rules = [
		'title' => 'required',
		'content' => 'required',
		'image' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title','content','image'];



}
