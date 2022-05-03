<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $fillable = [
        'content',
        'user_id',
        'project_id',
    ];

    public function  scopeSelection($query)
    {

        return $query->select('id', 'content', 'project_id', 'user_id');
    }
}
