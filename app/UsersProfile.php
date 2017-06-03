<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * @property integer $id
 * @property integer $user_id
 * @property string $user_name
 * @property string $bio
 * @property string $growing_since
 * @property string $birthdate
 * @property string $avatar_url
 * @property integer $comment_rep
 * @property integer $review_rep
 * @property User $user
 */
class UsersProfile extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'full_name', 'finger_print', 'finger_print2', 'is_admin', 'is_active', 'email'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
