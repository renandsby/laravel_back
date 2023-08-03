<?php

namespace App\Enuns;

enum ProdutoMarca: string
{
    case A = "Eletrolux";
    case C = "Closed";
    case P = "Pendent";

    public static function fromValue(string $name):string
    {
        foreach (self::cases() as $status){
            if($name === $status->name){
                return $status->value;
            }
        }
        throw new \ValueError("$status não é válido");
    }
}
