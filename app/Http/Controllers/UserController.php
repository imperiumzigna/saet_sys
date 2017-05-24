<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\InscricaoRepository;
use Auth;
use App\Repositories\PalestraRepository;
use App\Repositories\MinicursoRepository;

class UserController extends Controller
{
    protected $inscricaoRepositoy;
    protected $palestraRepositoy;
    protected $minicursoRepositoy;

    public function __construct(InscricaoRepository $inscricaoRepository, PalestraRepository $palestraRepository, MinicursoRepository $minicursoRepository)
    {
        $this->inscricaoRepositoy=$inscricaoRepository;
        $this->minicursoRepositoy = $minicursoRepository;
        $this->palestraRepositoy = $palestraRepository;
    }


    public function index(Request $request)
    {


       $data =  $this->inscricaoRepositoy->getUserInscricao(Auth::user()->id);
        $aux = "";
       for($i=0;$i<sizeof($data);$i++){
       if($data[$i]["tipo"] === "palestra")
       {
          $aux =  $this->palestraRepositoy->find($data[$i]["palestra"]);
       }elseif($data[$i]["tipo"] === "minicurso"){
           $aux =  $this->minicursoRepositoy->find($data[$i]["palestra"]);
       }

        $data[$i]["palestra"] = $aux->titulo;

       }



        return view('user.index',['inscricoes'=>$data]);

    }


    public function getCreate()
    {

    }


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


    public function getEdit($id)
    {

    }


    public function putEdit($id )
    {

    }

    public function delete(Request $request)
    {
    }
}
