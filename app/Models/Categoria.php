<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//Model for manipulate category data ans the relation whit options
class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
    ];
    public function opciones()
    {
        return $this->hasMany(Opcion::class, 'category_id');
    }
    
}