<?php

use Illuminate\Database\Seeder;
use App\NoticiaModel;

class NoticiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $noticia = new NoticiaModel();
        $noticia->titulo = "Now eldest new tastes plenty mother called misery get";
        $noticia->descricao = "Perhaps far exposed age effects. Now distrusts you her delivered applauded affection out sincerity. As tolerably recommend shameless unfeeling he objection consisted. She although cheerful perceive screened throwing met not eat distance. Viewing hastily or written dearest elderly up weather it as. So direction so sweetness or extremity at daughters. Provided put unpacked now but bringing. ";
        $noticia->criador = "Igor";
        $noticia->save();
    }
}
