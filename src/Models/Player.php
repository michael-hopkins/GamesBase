<?php namespace Hopkins\GamesBase\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Hopkins\SlackAgainstHumanity\Models\Player
 *
 * @property integer $id
 * @property string $user_name
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|Card[] $cards
 * @property-read \Illuminate\Database\Eloquent\Collection|\$related[] $morphedByMany
 * @method static Builder|Player whereId($value)
 * @method static Builder|Player whereUserName($value)
 * @method static Builder|Player whereCah($value)
 * @method static Builder|Player whereIdle($value)
 * @method static Builder|Player whereIsJudge($value)
 * @method static Builder|Player wherePlayed($value)
 * @method static Builder|Player whereNumCards($value)
 * @method static Builder|Player whereCreatedAt($value)
 * @method static Builder|Player whereUpdatedAt($value)
 * @property integer $cah
 * @property integer $played
 * @property integer $num_cards
 * @property integer $is_judge
 * @property integer $idle
 * @property-read \Illuminate\Database\Eloquent\Collection|Point[] $points
 */
class Player extends Model
{
    protected $fillable = ['user_name','cah','idle','is_judge','played','num_cards'];

    public function cards(){
        return $this->hasMany('\Hopkins\SlackAgainstHumanity\Models\Card');
    }

    public function points(){
        return $this->hasMany(Point::class);
    }


}
