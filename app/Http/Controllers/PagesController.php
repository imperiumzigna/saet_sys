<?php

namespace App\Http\Controllers;

use App\Repositories\Repository;
use Illuminate\Http\Request;
use App\Repositories\PaginasRepository;
use App\Http\Requests\PaginasRequest;


class PagesController extends Controller
{

    protected $paginasRepository;

    function __construct(PaginasRepository $paginasRepository)
    {
        $this->paginasRepository = $paginasRepository;
    }

    function index()
    {
        return view('pages.index',['pages' => $this->paginasRepository->all()]);
    }

    function adminIndex()
    {
        return view('pages.admin',['paginas' => $this->paginasRepository->all()]);
    }

    public function getCreate()
    {
        return view('pages.create');
    }


    public function postCreate(Request $request)
    {

        unset($request["_token"]);
        try {
            $file = $request->file("section_img",null);

            if($file){
                $imageName = $file->getClientOriginalName();
                $request["section_images"] = $imageName;
                $file->move(public_path('img'), $imageName);

            }
            $this->paginasRepository->create($request->all());

            return redirect(route('pages.admin'));
        } catch (\Exception $e) {
            if (env('APP_DEBUG') == true) {
                throw $e;
            }

            return redirect()->back();
        }
    }

    public function getEdit($id)
    {
        if ($this->paginasRepository->find($id)) {
            return view('pages.edit', ['pagina' => $this->paginasRepository->find($id)]);
        }


        return redirect()->back();
    }

    public function putEdit($id, Request $request)
    {
        try {

            $data = $request->only($this->paginasRepository->getFillableModelFields());
            $file = $request->file("section_img",null);

            if($file){
                $imageName = $file->getClientOriginalName();
                $data["section_images"] = $imageName;
                $file->move(public_path('img'), $imageName);

            }

            $this->paginasRepository->update($data, $id);

            return redirect(route('pages.index'));
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
                $this->paginasRepository->delete($request->get('id'));
                return redirect(route('pages.admin'));
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
