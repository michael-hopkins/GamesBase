<?php namespace Hopkins\GamesBase\Models;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

/**
 * Hopkins\GamesBase\Models\Point
 *
 * @property integer $id
 * @property string $for
 * @property string $reason
 * @property integer $modifier
 * @property string $given_by
 * @property string $room
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read Player $player
 * @property-read \Illuminate\Database\Eloquent\Collection|\$related[] $morphedByMany
 * @method static Builder|Point whereId($value)
 * @method static Builder|Point whereFor($value)
 * @method static Builder|Point whereReason($value)
 * @method static Builder|Point whereModifier($value)
 * @method static Builder|Point whereGivenBy($value)
 * @method static Builder|Point whereRoom($value)
 * @method static Builder|Point whereCreatedAt($value)
 * @method static Builder|Point whereUpdatedAt($value)
 */
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
        return $this->belongsTo(Player::class,'for','user_name');
    }
}
