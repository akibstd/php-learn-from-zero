<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class books extends Model
{
   protected $table='books';

   protected $fillable=['nama_buku','pengarang','tahun_terbit'];
}
