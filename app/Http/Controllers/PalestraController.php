<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PalestraRepository;
use App\Http\Requests\PalestraRequest;
use Auth;
use App\Repositories\InscricaoRepository;
use Mockery\Exception;

class PalestraController extends Controller
{

    protected $palestraRepository;
    protected $inscricaoRepository;

    public function __construct(PalestraRepository $palestraRepository, InscricaoRepository $inscricaoRepository)
    {

        $this->middleware('auth');
        $this->palestraRepository = $palestraRepository;
        $this->inscricaoRepository = $inscricaoRepository;
    }

    public function index()
    {
        $palestra = $this->palestraRepository->all();
        return view('palestras.index',['palestras'=>$palestra]);
    }

    public function getCreate()
    {
        return view('palestras.create');
    }


    public function postCreate(Request $request)
    {

        try {
            $this->palestraRepository->create($request->all());

            return redirect(route('palestra.index'));
        } catch (\Exception $e) {
            if (env('APP_DEBUG') == true) {
                throw $e;
            }

            return redirect()->back();
        }
    }

    public function getEdit($id)
    {
        if ($this->palestraRepository->find($id)) {
            return view('palestras.edit', ['palestra' => $this->palestraRepository->find($id)]);
        }


        return redirect()->back();
    }

    public function putEdit($id, PalestraRequest $request)
    {
        try {
            $data = $request->only($this->palestraRepository->getFillableModelFields());
            $this->palestraRepository->update($data, $id);

            return redirect(route('palestra.index'));
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
                $this->palestraRepository->delete($request->get('id'));
                return redirect(route('palestra.index'));
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
        $this->inscricaoRepository->create(['user'=> intval(Auth::user()->id), 'palestra'=>intval($id),'tipo'=>"palestra"]);

            return redirect(route('palestra.index'));
        }catch (Exception $e){
            if (env('APP_DEBUG') == true) {
                throw $e;
            }
            return redirect()->back();

        }
    }
}
