<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {

    }

    /**
     * Retorna um formulario de criacao de frotas
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getCreate()
    {

    }

    /**
     * Salva um novo registro de Frota
     * @param FrotaRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function postCreate()
    {
        try {

            return redirect(route(''));
        } catch (\Exception $e) {
            if (env('APP_DEBUG') == true) {
                throw $e;
            }


            return redirect()->back();
        }
    }

    /**
     * Retorna um formulario para a edicao de Frotas
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function getEdit($id)
    {

    }

    /**
     * Atualiza um registro de setor
     * @param $id
     * @param FrotaRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function putEdit($id )
    {

    }

    public function delete(Request $request)
    {
    }
}
