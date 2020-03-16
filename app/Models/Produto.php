<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    // protected $table = 'produtos';

    protected $fillable = ['name', 'description', 'price', 'image'];

    public function search($filter = null)
    {
        $resultado = $this->where(function($query) use($filter){
            if($filter){
                $query->where('name', 'LIKE', "%{$filter}%");
                //$query->where('description', 'LIKE', "%{$filter}%");
            }
        })
        ->paginate();

        return $resultado;
    }
}
