<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class UserModel extends Model implements Authenticatable
{
    use AuthenticatableTrait;
    use HasFactory;
    protected $table = 'm_user'; //m_user is the table name
    protected $primaryKey = 'user_id'; //user_id is the primary key

    protected $fillable = [
        'level_id',
        'username',
        'nama',
        'password'
    ];

    public function level(): BelongsTo
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }
}
