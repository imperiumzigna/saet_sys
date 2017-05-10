<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel" style="height: 50px">
            <div class="pull-left info">
                <p>Saet {{env("ANO")}}</p>
            </div>
        </div>
        <ul class="sidebar-menu">

            <li class="treeview">
                <a href="{{route('home')}}">
                    <i class="fa fa-dashboard"></i><span>Painel de controle</span>
                </a>
            </li>

            @if(Auth::user()->usr_papel == "admin")
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-users"></i><span>Usuários</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="{{route('noticia.index')}}">
                        <i class="fa fa-sticky-note"></i><span>Notícias e Avisos</span>
                    </a>
                </li>
            @else
            @endif
            <li class="treeview">
                <a href="{{route('palestra.index')}}">
                    <i class="fa fa-comments"></i><span>Palestras</span>
                </a>
            </li>
            <li class="treeview">
                <a href="{{route('minicurso.index')}}">
                    <i class="fa fa-calendar"></i><span>Minicursos</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
