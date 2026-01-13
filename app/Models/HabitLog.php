<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;


class HabitLog extends Model
{
    use HasFactory;
    
    protected $fillable = ['user_id', 'habit_id', 'completed_at'];

    //Um registro pertence a um usuário
    public function user():BelongsTo
    {
        return $this->BelongsTo(User::class);
    }

    //Um registro pertence a um hábito
    public function habit():BelongsTo
    {
        return $this->BelongsTo(Habit::class);
    }
}
