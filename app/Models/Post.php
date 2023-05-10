<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    // // use if model has other name than the migration
    // protected $table = 'posts';

    // // use if primary key has other name than 'id';
    // protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'content'
    ];

    protected $dates = ['deleted_at'];

}
