<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HargaPangan extends Model
{
   use HasFactory;

   protected $fillable = [
       'komoditas_id',
       'pasar_id',
       'tanggal',
       'harga',
   ];

   public function komoditas()
   {
       return $this->belongsTo(Komoditas::class);
   }

   public function pasar()
   {
       return $this->belongsTo(Pasar::class);
   }
}   
