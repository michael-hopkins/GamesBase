<?php namespace Hopkins\GamesBase\Models;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    protected $fillable = ['player_id','reason','modifier'];

    public function player(){
        return $this->belongsTo(Player::class);
    }
}
