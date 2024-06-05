<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory as FactoriesHasFactory;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Ilumiate\DataBase\Eloquent\HasFactory;
use Iluminate\Database\Eloquent\Model;

class categoria extends EloquentModel{
    use FactoriesHasFactory;
    protected $table='categoria';
    protected$primarykey='id_categoria';
    public $timestamps=false;
    protected $fillable[
        'categoria',
        'descripcion',
        'estatus'
    ];
    protected $guarded=[

    ];
}