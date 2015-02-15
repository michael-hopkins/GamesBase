<?php namespace Hopkins\GamesBase\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Hopkins\GamesBase\Models\Player
 *
 * @property integer $id
 * @property string $user_name
 * @property integer $cah
 * @property integer $played
 * @property integer $num_cards
 * @property integer $is_judge
 * @property integer $idle
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|Point[] $points
 * @property-read \Illuminate\Database\Eloquent\Collection|\$related[] $morphedByMany
 * @method static Builder|Player whereId($value)
 * @method static Builder|Player whereUserName($value)
 * @method static Builder|Player whereCah($value)
 * @method static Builder|Player wherePlayed($value)
 * @method static Builder|Player whereNumCards($value)
 * @method static Builder|Player whereIsJudge($value)
 * @method static Builder|Player whereIdle($value)
 * @method static Builder|Player whereCreatedAt($value)
 * @method static Builder|Player whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\Hopkins\SlackAgainstHumanity\Models\Card[] $cards
 */
class Player extends Model
{
    protected $guarded = ['id'];

    public function points(){
        return $this->hasMany(Point::class,'for','user_name');
    }
}
