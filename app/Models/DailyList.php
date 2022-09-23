<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class DailyList extends Model
{
    use  HasFactory;
    protected $fillable = [
        'title',
        'description',
        'date',
        'user_id'
    ];
}
