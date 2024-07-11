<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;



class Question extends Model
{

    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replies()
    {
        return $this->hasmany(Reply::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


}
