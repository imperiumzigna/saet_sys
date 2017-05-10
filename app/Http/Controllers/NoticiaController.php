<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\NoticiaRepository;
use App\Http\Requests\NoticiasRequest;

class NoticiaController extends Controller
{

    protected $noticiaRepository;

    public function __construct(NoticiaRepository $noticiaRepository)
    {

        $this->middleware('auth');
        $this->noticiaRepository = $noticiaRepository;
    }

    public function index()
    {
        $noticias = $this->noticiaRepository->all();
        return view('noticias.index',['noticias'=>$noticias]);
    }

    public function getCreate()
    {
        return view('noticias.create');
    }


    public function postCreate(Request $request)
    {

        try {
            $this->noticiaRepository->create($request->all());

            return redirect(route('noticia.index'));
        } catch (\Exception $e) {
            if (env('APP_DEBUG') == true) {
                throw $e;
            }

            return redirect()->back();
        }
    }

    public function getEdit($id)
    {
        if ($this->noticiaRepository->find($id)) {
            return view('noticias.edit', ['noticia' => $this->noticiaRepository->find($id)]);
        }


        return redirect()->back();
    }

    public function putEdit($id, NoticiasRequest $request)
    {
        try {
            $data = $request->only($this->noticiaRepository->getFillableModelFields());
            $this->noticiaRepository->update($data, $id);

            return redirect(route('noticia.index'));
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
            $this->noticiaRepository->delete($request->get('id'));
            return redirect(route('noticia.index'));
        }

        return redirect()->back();
    } catch (\Exception $e) {
        if (env('APP_DEBUG') == true) {
            throw $e;
        }
        return redirect()->back();
    }

    }

}
