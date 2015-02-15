<?php namespace Hopkins\GamesBase\Models;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    use ValidatingTrait;

    protected $rules = [
        'for'   => 'required',
        'modifier'    => 'required',
        'reason' => 'string',
        'given_by' => 'string'
    ];
    protected $guard = ['id'];

    public function player(){
        return $this->belongsTo(Player::class);
    }
}
