<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 * @package App
 * @mixin Builder
 */
class Post extends Model
{

//    protected $table = 'my_posts';
//    protected $primaryKey = 'post_id';
//    public $incrementing = false;
//    protected $keyType = 'string';
//    public $timestamps = false;

    // По умолчанию записать в бд во время записи в бд
    /*protected $attributes = [
        'content' => 'Lorem ipsum...',
    ];*/

    protected $fillable = ['title', 'content'];

}
