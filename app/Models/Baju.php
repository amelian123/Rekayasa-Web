<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Baju extends Model
{
    protected $table = 'baju';
    protected $primaryKey = 'id_baju';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'jenis', 'ukuran','warna','harga'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
