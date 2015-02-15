<?php namespace Hopkins\GamesBase\Interfaces;

use ArrayAccess;
use Hopkins\GamesBase\Models\Player;
use Hopkins\GamesBase\Models\Point;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use JsonSerializable;
use Illuminate\Contracts\Queue\QueueableEntity;
use Illuminate\Contracts\Routing\UrlRoutable;

interface PlayerInterface extends  ArrayAccess, Arrayable, Jsonable, JsonSerializable, QueueableEntity, UrlRoutable{
    
    /**
     * \Player
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
     * @property-read User $user
     * @property-read \Illuminate\Database\Eloquent\Collection|Card[] $cards
     * @property-read \Illuminate\Database\Eloquent\Collection|Point[] $points
     * @property-read \Illuminate\Database\Eloquent\Collection|\$related[] $morphedByMany
     * @method static \Illuminate\Database\Query\Builder|Player whereId($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereUserName($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereCah($value)
     * @method static \Illuminate\Database\Query\Builder|Player wherePlayed($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereNumCards($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereIsJudge($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereIdle($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereCreatedAt($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereUpdatedAt($value)
     */
    static function whereId($value);

    /**
     * \Player
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
     * @property-read User $user
     * @property-read \Illuminate\Database\Eloquent\Collection|Card[] $cards
     * @property-read \Illuminate\Database\Eloquent\Collection|Point[] $points
     * @property-read \Illuminate\Database\Eloquent\Collection|\$related[] $morphedByMany
     * @method static \Illuminate\Database\Query\Builder|Player whereId($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereUserName($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereCah($value)
     * @method static \Illuminate\Database\Query\Builder|Player wherePlayed($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereNumCards($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereIsJudge($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereIdle($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereCreatedAt($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereUpdatedAt($value)
     */
    static function whereUserName($value);

    /**
     * \Player
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
     * @property-read User $user
     * @property-read \Illuminate\Database\Eloquent\Collection|Card[] $cards
     * @property-read \Illuminate\Database\Eloquent\Collection|Point[] $points
     * @property-read \Illuminate\Database\Eloquent\Collection|\$related[] $morphedByMany
     * @method static \Illuminate\Database\Query\Builder|Player whereId($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereUserName($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereCah($value)
     * @method static \Illuminate\Database\Query\Builder|Player wherePlayed($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereNumCards($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereIsJudge($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereIdle($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereCreatedAt($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereUpdatedAt($value)
     */
    static function whereCah($value);

    /**
     * \Player
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
     * @property-read User $user
     * @property-read \Illuminate\Database\Eloquent\Collection|Card[] $cards
     * @property-read \Illuminate\Database\Eloquent\Collection|Point[] $points
     * @property-read \Illuminate\Database\Eloquent\Collection|\$related[] $morphedByMany
     * @method static \Illuminate\Database\Query\Builder|Player whereId($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereUserName($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereCah($value)
     * @method static \Illuminate\Database\Query\Builder|Player wherePlayed($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereNumCards($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereIsJudge($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereIdle($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereCreatedAt($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereUpdatedAt($value)
     */
    static function wherePlayed($value);

    /**
     * \Player
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
     * @property-read User $user
     * @property-read \Illuminate\Database\Eloquent\Collection|Card[] $cards
     * @property-read \Illuminate\Database\Eloquent\Collection|Point[] $points
     * @property-read \Illuminate\Database\Eloquent\Collection|\$related[] $morphedByMany
     * @method static \Illuminate\Database\Query\Builder|Player whereId($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereUserName($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereCah($value)
     * @method static \Illuminate\Database\Query\Builder|Player wherePlayed($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereNumCards($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereIsJudge($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereIdle($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereCreatedAt($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereUpdatedAt($value)
     */
    static function whereNumCards($value);

    /**
     * \Player
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
     * @property-read User $user
     * @property-read \Illuminate\Database\Eloquent\Collection|Card[] $cards
     * @property-read \Illuminate\Database\Eloquent\Collection|Point[] $points
     * @property-read \Illuminate\Database\Eloquent\Collection|\$related[] $morphedByMany
     * @method static \Illuminate\Database\Query\Builder|Player whereId($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereUserName($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereCah($value)
     * @method static \Illuminate\Database\Query\Builder|Player wherePlayed($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereNumCards($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereIsJudge($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereIdle($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereCreatedAt($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereUpdatedAt($value)
     */
    static function whereIsJudge($value);

    /**
     * \Player
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
     * @property-read User $user
     * @property-read \Illuminate\Database\Eloquent\Collection|Card[] $cards
     * @property-read \Illuminate\Database\Eloquent\Collection|Point[] $points
     * @property-read \Illuminate\Database\Eloquent\Collection|\$related[] $morphedByMany
     * @method static \Illuminate\Database\Query\Builder|Player whereId($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereUserName($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereCah($value)
     * @method static \Illuminate\Database\Query\Builder|Player wherePlayed($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereNumCards($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereIsJudge($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereIdle($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereCreatedAt($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereUpdatedAt($value)
     */
    static function whereIdle($value);

    /**
     * \Player
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
     * @property-read User $user
     * @property-read \Illuminate\Database\Eloquent\Collection|Card[] $cards
     * @property-read \Illuminate\Database\Eloquent\Collection|Point[] $points
     * @property-read \Illuminate\Database\Eloquent\Collection|\$related[] $morphedByMany
     * @method static \Illuminate\Database\Query\Builder|Player whereId($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereUserName($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereCah($value)
     * @method static \Illuminate\Database\Query\Builder|Player wherePlayed($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereNumCards($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereIsJudge($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereIdle($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereCreatedAt($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereUpdatedAt($value)
     */
    static function whereCreatedAt($value);

    /**
     * \Player
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
     * @property-read User $user
     * @property-read \Illuminate\Database\Eloquent\Collection|Card[] $cards
     * @property-read \Illuminate\Database\Eloquent\Collection|Point[] $points
     * @property-read \Illuminate\Database\Eloquent\Collection|\$related[] $morphedByMany
     * @method static \Illuminate\Database\Query\Builder|Player whereId($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereUserName($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereCah($value)
     * @method static \Illuminate\Database\Query\Builder|Player wherePlayed($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereNumCards($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereIsJudge($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereIdle($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereCreatedAt($value)
     * @method static \Illuminate\Database\Query\Builder|Player whereUpdatedAt($value)
     */
    static function whereUpdatedAt($value);

    public function cards();
}