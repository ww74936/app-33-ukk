<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;
    protected $primaryKey ="id_kategori";
    protected $table = "kategoris";
    protected $fillable = [
        'kategori'
    ];

    public function buku()
    {
        return $this->belongsTo(buku::class, 'id_kategori', 'id_kategori');
    }

}
