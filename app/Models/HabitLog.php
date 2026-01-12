<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\belongsTo;
use Illuminate\Database\Eloquent\Model;

class HabitLog extends Model
{
    protected $fillable = ['user_id', 'habit_id', 'completed_at'];

    //Um registro pertence a um usuário
    public function user():belongsTo
    {
        return $this->belongsTo(User::class);
    }

    //Um registro pertence a um hábito
    public function habit():belongsTo
    {
        return $this->belongsTo(Habit::class);
    }
}
