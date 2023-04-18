<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//Model for manipulate options data ans the relation whit category
class Opcion extends Model
{
    use HasFactory;

    protected $table = 'opciones';

    protected $fillable = [
        'option',
        'category_id',
    ];
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'category_id');
    }
    
}
