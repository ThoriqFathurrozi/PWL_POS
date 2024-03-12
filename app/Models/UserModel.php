<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    protected $table = 'm_user'; //m_user is the table name
    protected $primaryKey = 'user_id'; //user_id is the primary key
}
