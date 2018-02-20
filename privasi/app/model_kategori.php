<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_kategori extends Model
{
    protected $table = 'line_kategori';
    protected $primaryKey = 'id';
    protected $fillable = ['id','kategori_id','kategori_nama']; 
}
