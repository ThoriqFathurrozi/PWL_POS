<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{
    use HasFactory;

    protected $table = 'm_barang'; //m_barang is the table name
    protected $primaryKey = 'barang_id'; //barang_id is the primary key
}
