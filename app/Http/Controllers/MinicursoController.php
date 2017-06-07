<?php

namespace App\Http\Controllers;

use App\Repositories\InscricaoRepository;
use Illuminate\Http\Request;
use App\Repositories\MinicursoRepository;
use App\Http\Requests\MinicursoRequest;
use Auth;

class MinicursoController extends Controller
{

    protected $minicursoRepository;
    protected $inscricaoRepository;
    public function __construct(MinicursoRepository $minicursoRepository, InscricaoRepository $inscricaoRepository)
    {

        $this->middleware('auth');
        $this->minicursoRepository = $minicursoRepository;
        $this->inscricaoRepository = $inscricaoRepository;

    }

    public function index()
    {
        $minicurso = $this->minicursoRepository->all();
        return view('minicursos.index',['minicursos'=>$minicurso]);
    }

    public function getCreate()
    {
        return view('minicursos.create');
    }


    public function postCreate(Request $request)
    {

        try {
            $this->minicursoRepository->create($request->all());

            return redirect(route('minicurso.index'));
        } catch (\Exception $e) {
            if (env('APP_DEBUG') == true) {
                throw $e;
            }

            return redirect()->back();
        }
    }

    public function getEdit($id)
    {
        if ($this->minicursoRepository->find($id)) {
            return view('minicursos.edit', ['minicurso' => $this->minicursoRepository->find($id)]);
        }


        return redirect()->back();
    }

    public function putEdit($id, MinicursoRequest $request)
    {
        try {
            $data = $request->only($this->minicursoRepository->getFillableModelFields());
            $this->minicursoRepository->update($data, $id);

            return redirect(route('minicurso.index'));
        } catch (\Exception $e) {
            if (env('APP_DEBUG') == true) {
                throw $e;
            }

            return redirect()->back();
        }
    }

    public function delete(Request $request)
    {
        try {
            if ($request->get('id')) {
                $this->minicursoRepository->delete($request->get('id'));
                return redirect(route('minicurso.index'));
            }

            return redirect()->back();
        } catch (\Exception $e) {
            if (env('APP_DEBUG') == true) {
                throw $e;
            }
            return redirect()->back();
        }

    }

    public function inscricao($id, Request $request )
    {
        try{
            $this->inscricaoRepository->create(['user'=> intval(Auth::user()->id), 'palestra'=>intval($id),'tipo'=>"minicurso"]);

            return redirect(route('minicurso.index'));
        }catch (Exception $e){
            if (env('APP_DEBUG') == true) {
                throw $e;
            }
            return redirect()->back();

        }
    }
}
