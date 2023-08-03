<?php

namespace App\Models;

use App\Enuns\SupportStatus;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;


    // fala quais colunas podem ser gravadas no banco
    protected $fillable = [
        'subject',
        'body',
        'marca',
    ];

    public function marcas(): Attribute
    {
        return Attribute::make(
            set: fn (ProdutosMarcas $marcas) => $marcas->name,
        );
    }
}
