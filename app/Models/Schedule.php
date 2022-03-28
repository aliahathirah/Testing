<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory; // Factory, it has "fake" data
    protected $fillable = ['title','description','attachment','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}