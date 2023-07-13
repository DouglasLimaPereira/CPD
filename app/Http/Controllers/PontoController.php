<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ponto;
use Illuminate\Support\Facades\DB;
use App\Recursos\Anexo;
use App\Recursos\HoraExtra;
use Carbon\Carbon;
use DateTime\DateTime;
use Exception;

class PontoController extends Controller
{

    private $anexo;
    private $hora_extra;

    public function __construct(Anexo $anexo, HoraExtra $hora_extra)
    {
        $this->anexo = $anexo;
        $this->hora_extra = $hora_extra;
    } 

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user(); 
        // $pontos = auth()->user()->pontos;
        $pontos = $user->pontos()->orderBy('created_at', 'asc')->paginate(10);
        
        return view('ponto.index', compact('pontos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ponto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
        
            $dados = $request->all();
            
            $dados['user_id'] = auth()->user()->id;

            if (Ponto::firstWhere('data', $request['data'])) {
                return redirect()->back()->withInput();
            }

            $ponto = Ponto::create($dados);

            if(isset($request->comprovante1) && $request->comprovante1->isValid()){
                $comprovante1 = $this->anexo->Store($ponto->id, auth()->user()->id, $request->comprovante1, $ponto->comprovante1);
                $ponto->update([
                    'comprovante1' => $comprovante1,
                ]);
            }
            
            if(isset($request->comprovante2) && $request->comprovante2->isValid()){
                $comprovante2 = $this->anexo->Store($ponto->id, auth()->user()->id, $request->comprovante2, $ponto->comprovante2);
                $ponto->update([
                    'comprovante2' => $comprovante2,
                ]);
            }
            
            if(isset($request->comprovante3) && $request->comprovante3->isValid()){
                $comprovante3 = $this->anexo->Store($ponto->id, auth()->user()->id, $request->comprovante3, $ponto->comprovante3);
                $ponto->update([
                    'comprovante3' => $comprovante3
                ]);
            }
            
            if(isset($request->comprovante4) && $request->comprovante4->isValid()){
                $comprovante4 = $this->anexo->Store($ponto->id, auth()->user()->id, $request->comprovante4, $ponto->comprovante4);
                $ponto->update([
                    'comprovante4' => $comprovante4,
                ]);
            }

            // verificando se existe o ponto de saida e redirecionando para um recurso calculador de hora extra
            if (isset($request->saida) && $request->saida != '') {
                $horas = $this->hora_extra->calcularHoraExtra($request);
                // --------------------------------------------------------------------------
                // Verificando se a hora é negativa ou positiva e atalizando o banco de dados
                // --------------------------------------------------------------------------
                if ( $horas[0] == '-') {
                    $ponto->update([
                            'horas_negativas' => $horas[1]
                    ]);
                }else{
                    $ponto->update([
                        'horas_extras' => $horas[1]
                    ]);
                }
            }
            
            DB::commit();
            return redirect()->route('ponto.index');

        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Ponto $ponto)
    {
        return view('ponto.show', compact('ponto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edite(Ponto $ponto)
    {
        return view('ponto.edite', compact('ponto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ponto $ponto)
    {
        try {
            DB::beginTransaction();
            
            $ponto->update($request->all());
           
            if(isset($request->comprovante1) && $request->comprovante1->isValid()){
                $comprovante1 = $this->anexo->Store($ponto->id, auth()->user()->id, $request->comprovante1, $ponto->comprovante1);
                $ponto->update([
                    'comprovante1' => $comprovante1,
                ]);
            }
            
            if(isset($request->comprovante2) && $request->comprovante2->isValid()){
                $comprovante2 = $this->anexo->Store($ponto->id, auth()->user()->id, $request->comprovante2, $ponto->comprovante2);
                $ponto->update([
                    'comprovante2' => $comprovante2,
                ]);
            }
            
            if(isset($request->comprovante3) && $request->comprovante3->isValid()){
                $comprovante3 = $this->anexo->Store($ponto->id, auth()->user()->id, $request->comprovante3, $ponto->comprovante3);
                $ponto->update([
                    'comprovante3' => $comprovante3
                ]);
            }
            
            if(isset($request->comprovante4) && $request->comprovante4->isValid()){
                $comprovante4 = $this->anexo->Store($ponto->id, auth()->user()->id, $request->comprovante4, $ponto->comprovante4);
                $ponto->update([
                    'comprovante4' => $comprovante4,
                ]);
            }

            if (isset($request->saida) && $request->saida != '') {
                $horas = $this->hora_extra->calcularHoraExtra($request);
                // --------------------------------------------------------------------------
                // Verificando se a hora é negativa ou positiva e atalizando o banco de dados
                // --------------------------------------------------------------------------
                if ( $horas[0] == '-') {
                    $ponto->update([
                            'horas_negativas' => $horas[1]
                    ]);
                }else{
                    $ponto->update([
                        'horas_extras' => $horas[1]
                    ]);
                }
            }

            DB::commit();
            return redirect()->route('ponto.index');

        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}