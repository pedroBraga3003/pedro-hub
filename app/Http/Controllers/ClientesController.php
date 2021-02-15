<?php
namespace App\Http\Controllers;
use App\Cliente;
use Illuminate\Http\Request;
use PDF;
class ClientesController extends Controller
{
    protected $validacaoCampos = [
        'campos' =>
        [
            'nome_cliente' => 'required|max:50',
            'galc' => 'required|max:50',
            'endereco_instalacao' => 'required|max:100',
            'velocidade' => 'required|numeric',
        ],
        'mensagens' => [
            'nome_cliente.required' => 'Campo obrigatório.',
            'nome_cliente.max' => 'Campo com limite de 50 caracteres',
            'galc.required' => 'Campo obrigatório.',
            'galc.max' => 'Campo com limite de 50 caracteres',
            'endereco_instalacao.required' => 'Campo obrigatório.',
            'endereco_instalacao.max' => 'Campo com limite de 100 caracteres',
            'velocidade.required' => 'Campo obrigatório.',
            'velocidade.numeric' => 'O campo aceita somente números.',
        ]
        ];
    /**
     * Lista os clientes
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $objCliente = new Cliente();
        $clientes = $objCliente->listaPaginacao( (!empty($request->query()) ? $request->query() : [] ));
        unset($objCliente);
        return view('clientes.index',compact('clientes'))
               ->with('i', (request()->input('page', 1) - 1) * 4);
    }
    /**
     * Abre a tela de adicionar
     *
     * @return \Illuminate\Http\Response
     */
    public function adicionar(){
        return view('clientes.adicionar');
    }
    /**
     * Salvar um cliente 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function salvar(Request $request){
        $objCliente =  new Cliente();
        $request->validate($this->validacaoCampos['campos'],$this->validacaoCampos['mensagens']);
        $cliente = $objCliente->salvar($request->all());
        unset($objCliente);
        return redirect()
                        ->route('clientes.index')
                        ->with('success','Cliente cadastrado com sucesso!');
    }
    /**
     * Carrega os dados na tela de editar
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function visualizar($id){
        $objCliente =  new Cliente();
        $cliente = $objCliente->buscarPorId($id);
        if(empty( $cliente )){
            return redirect()
                    ->route('clientes.index')
                    ->withInput()
                    ->withErrors([
                        'error' => 'Você não tem permissão para acessar esta área.',
                    ]);
        }
        unset($objCliente);
        return view('clientes.visualizar',compact('cliente'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function editar($id){
        $objCliente =  new Cliente();
        $cliente = $objCliente->buscarPorId( $id);
        if(empty( $cliente )){
            return redirect()
                    ->route('clientes.index')
                    ->withInput()
                    ->withErrors([
                        'error' => 'Você não tem permissão para acessar esta área.',
                    ]);
        }
        unset($objCliente);
        return view('clientes.editar',compact('cliente'));
    }
    /**
     * atualiza o cliente
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function atualizar(Request $request, $id){
        $objCliente =  new Cliente();
        $cliente = $objCliente->buscarPorId($id);
        if(empty( $cliente )){
            return redirect()
                    ->route('grupo_roteiros.index')
                    ->withInput()
                    ->withErrors([
                        'error' => 'Você não tem permissão para acessar esta área.',
                    ]);
        }
        $request->validate($this->validacaoCampos['campos'],$this->validacaoCampos['mensagens']);
        if(empty($request->ativo)){
            $request->request->add(['ativo' => 'N']);
        }
        $cliente->atualizar($request->all());
        unset($objCliente);
        return redirect()
                        ->route('clientes.index')
                        ->with('success','Cliente atualizado com sucesso!');
    }
    /**
     * Deletar o cliente
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function deletar($id){
        $objCliente =  new Cliente();
        $cliente = $objCliente->buscarPorId($id);
        if(empty( $cliente )){
            return redirect()
                    ->route('clientes.index')
                    ->withInput()
                    ->withErrors([
                        'error' => 'Você não tem permissão para acessar esta área.',
                    ]);
        }
        unset($objCliente);
        $cliente->destroy($id);
        return redirect()
                        ->route('clientes.index')
                        ->with('success','Cliente removido com sucesso!');
    }
    /**
     * Abrir tela de relatorio
     *
     * @param Request $request
     * @return void
     */
    public function relatorio(Request $request){
        $objCliente =  new Cliente();
        $clientes = $objCliente->buscarAtivos();
        $dados = ['titulo' => 'Relatório de ativos - '.date('d/m/Y H:i:s'),'clientes' => $clientes];
        $pdf = PDF::loadView('clientes.relatorio', $dados);
        unset( $objCliente );
        return $pdf->download('relatorio_ativos_'.date('d_m_Y_H_i_s').'.pdf');
    }
}
