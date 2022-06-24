<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class divisi extends Model
{
    use HasFactory;
    protected $table = "divisi";
    protected $primarykey = "id";
    protected $fillable = ['unit_kerja', 'bagian',  'karyawan_id'];




    public function dataKaryawan(){
        return $this->hasOne(karyawan::class, 'id','karyawan_id');
    }
}