<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;
use Illuminate\Database\Eloquent\Relations\hasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Habit extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'name'];

    //Um hábito pertence a um usuário
    public function user():belongsTo
    {
        return $this->belongsTo(User::class);
    }

    //Um hábito pode ter muitos registros
    public function habitLogs(): hasMany
    {
        return $this->hasMany(HabitLog::class);
    }
}
