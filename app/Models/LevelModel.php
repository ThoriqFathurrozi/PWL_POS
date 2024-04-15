<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LevelModel extends Model
{
    use HasFactory;

    protected $table = 'm_level'; //m_level is the table name
    protected $primaryKey = 'level_id'; //level_id is the primary key
    protected $fillable = ['level_kode', 'level_nama'];

    public function user(): HasMany
    {
        return $this->hasMany(UserModel::class);
    }
}
