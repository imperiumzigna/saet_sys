<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Repositories\InscricaoRepository;
use Auth;
use App\Repositories\PalestraRepository;
use App\Repositories\MinicursoRepository;
use App\Repositories\UserRepository;
use App\Http\Requests\UserRequest;
use Toastr;

class UserController extends Controller
{
    protected $inscricaoRepositoy;
    protected $palestraRepositoy;
    protected $minicursoRepositoy;
    protected $userRepository;

    public function __construct(InscricaoRepository $inscricaoRepository,
                                PalestraRepository $palestraRepository,
                                MinicursoRepository $minicursoRepository,
                                UserRepository $userRepository)
    {
        $this->middleware('auth');
        $this->inscricaoRepositoy=$inscricaoRepository;
        $this->minicursoRepositoy = $minicursoRepository;
        $this->palestraRepositoy = $palestraRepository;
        $this->userRepository = $userRepository;
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


    public function getCreate(Request $request)
    {

        return view('user.create');
    }


    public function postCreate(Request $request)
    {
        try {
            $data = $request->all();
            $data['password'] = bcrypt($data['password']);
            $this->userRepository->create($data);

            Toastr::success('Usuário salvo com sucesso')->push();
            return redirect(route('admin.index'));
        } catch (Exception $e) {
            if (env('APP_DEBUG') == true) {
                throw $e;
            }

            Toastr::error('Não foi possivel salvar o Usuário')->push();
            return redirect()->back();
        }
    }


    public function getEdit($id)
    {
        if ($this->userRepository->find($id)) {
            $user = $this->userRepository->find($id);
            return view('user.edit', [
                'user' => $user,
            ]);
        }

        Toastr::warning('Usuário não encontrado')->push();
        return redirect()->back();
    }


    public function putEdit($id , Request $request )
    {
        try {
            $data = $request->only($this->userRepository->getFillableModelFields());
            $data['password'] = bcrypt($data['password']);
            $this->userRepository->update($data, $id);

            Toastr::success('Usuário atualizado com sucesso')->push();
            return redirect(route('admin.index'));
        } catch (\Exception $e) {
            if (env('APP_DEBUG') == true) {
                throw $e;
            }

            Toastr::error('Não foi possivel atualizar o usuário!')->push();
            return redirect()->back();
        }
    }

    public function delete(UserRequest $request)
    {
        try {

            $this->userRepository->delete($request->get('id'));

            Toastr::success('Usuário removido com sucesso');
            return redirect(route('user.index'));
        } catch (\Exception $e) {
            if (env('APP_DEBUG') == true) {
                throw $e;
            }

            Toastr::error('Usuário não pode ser excluído');
            return redirect()->back();
        }
    }


    public function adminIndex(Request $request)
    {
     $users = $this->userRepository->all();

    return view('admin.index',['users' => $users]);

    }
}
