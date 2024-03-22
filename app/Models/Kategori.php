<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'm_kategori'; //m_kategori is the table name
    protected $primaryKey = 'kategori_id'; //kategori_id is the primary key

    protected $fillable = [
        'kategori_kode',
        'kategori_nama'
    ];

    public function barang(): HasMany
    {
        return $this->hasMany(BarangModel::class, 'barang_id', 'barang_id');
    }
}
