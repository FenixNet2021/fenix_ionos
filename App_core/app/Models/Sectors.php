<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sectors extends Model
{
    use HasFactory;
    protected $table = 'sector';
    protected $primaryKey='id_sector';
    protected $fillable=['description'];

}
