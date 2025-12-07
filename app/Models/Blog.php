<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Blog extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'user_id',
        'status'
    ];

    public function blog()
    {
        return $this->belongsTo(User::class);
    }

}
