<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'tb_produto';
    protected $primaryKey = 'id_produto';
    protected $fillable = ['id_categoria_produto', 'nome_produto', 'valor'];

    public function categoria()
    {
        return $this->belongsTo(CategoriaProduto::class, 'id_categoria_produto', 'id_categoria_planejamento');
    }
}
