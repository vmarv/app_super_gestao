<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public function produtos() {
       //return $this->belongsToMany('App\Produto', 'pedidos_produtos'); 
       return $this->belongsToMany('App\Item', 'pedidos_produtos', 'pedido_id', 'produto_id')->withPivot('id', 'created_at', 'updated_at');  // quando os nomes não são padrões

       // 1 parametro - modelo do relacionamento q estamos implementando
       // 2 parametro - tabela auxiliar que armazena o registro de relacionamento
       // 3 parametro - O nome da FK da tabela mapeada pelo modelo na tabela de relacionamento
       // 4 parametro - representa o nome da FK da tabela mapeada pelo model ultilizado no relacionamento que estamos implementando
    }
}
