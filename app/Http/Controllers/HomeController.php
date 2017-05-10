<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\NoticiaRepository;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $userRepository;
    protected $noticiaRepository;

    public function __construct(NoticiaRepository $noticiaRepository)
    {
        $this->middleware('auth');
        $this->noticiaRepository = $noticiaRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = $this->noticiaRepository->all();

        return view('templates.home',['user'=>$this->userRepository,
                                            'noticias'=>$noticias]);
    }
}
