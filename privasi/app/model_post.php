<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_post extends Model
{
    protected $table = 'line_post';
    protected $primaryKey = 'post_id';
    protected $fillable = ['post_id','post_pembuat','post_poto','post_tanggal','post_judul','post_slug','post_isi','kategori']; 

}
