<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'id',
        'nome_cliente',
        'galc',
        'porta',
        'endereco_instalacao',
        'velocidade',
        'ativo'
    ];
    /**
     * Lista paginacao
     *
     * @param array $condicoes
     * @return void
     */
    public function listaPaginacao($get = []){
        $query = Cliente::query();
        if(!empty($get['busca'])){
            $query
                ->orWhere( 'nome_cliente', 'like', '%'.$get['busca'].'%' )
                ->orWhere( 'endereco_instalacao', 'like', '%'.$get['busca'].'%' );
        }
        $clientes = [];
        $clientes = $query->paginate(5);
        unset($query);
        return $clientes;
    }
    /**
     * Salvar
     *
     * @param [type] $dados
     * @return void
     */
    public function salvar($dados){
        $cliente = [];
        $cliente = $this->create($dados);
        return $cliente;
    }
    /**
     * Atualizar
     *
     * @param [type] $dados
     * @return void
     */
    public function atualizar($dados){
        $cliente = [];
        $cliente = $this->update($dados);
        return $cliente;
    }
    /**
     * Buscar Por ID
     *
     * @param [int] $id
     * @return void
     */
    public function buscarPorId($id){
        $cliente = [];
        $cliente = $this->select($this->fillable)
                        ->where([
                            ['id','=',  $id]
                        ])->first();
        return $cliente;
    }
    /**
     * Buscar ativos
     *
     * @param [int] $id
     * @return void
     */
    public function buscarAtivos(){
        $cliente = [];
        $cliente = $this->select($this->fillable)
                        ->where([
                            ['ativo','=', 'S']
                        ])->get();
        return $cliente;
    }
}
