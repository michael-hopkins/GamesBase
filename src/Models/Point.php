<?php namespace Hopkins\GamesBase\Models;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

/**
 * Hopkins\GamesBase\Models\Point
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $point
 * @property string $for
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read Player $player
 * @property-read \Illuminate\Database\Eloquent\Collection|\$related[] $morphedByMany
 * @method static \Illuminate\Database\Query\Builder|\Hopkins\GamesBase\Models\Point whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Hopkins\GamesBase\Models\Point whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\Hopkins\GamesBase\Models\Point wherePoint($value)
 * @method static \Illuminate\Database\Query\Builder|\Hopkins\GamesBase\Models\Point whereFor($value)
 * @method static \Illuminate\Database\Query\Builder|\Hopkins\GamesBase\Models\Point whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Hopkins\GamesBase\Models\Point whereUpdatedAt($value)
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
        return $this->belongsTo(Player::class);
    }
}
