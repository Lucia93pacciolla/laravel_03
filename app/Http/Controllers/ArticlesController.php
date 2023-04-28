<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    public $articles = [
        
            ['id' => 1, 'nome' => 'via col vento', 'data' => 1939],
            ['id' => 2, 'nome' => 'pulp fuction', 'data' => 1994],
            ['id' => 3, 'nome' => 'titanic', 'data' => 1997]
        
    ];

    public function articoli(){

        return view('articoli', ['articles' => $this->articles]);
    }


    public function show ($id){

    
        foreach($this->articles as $article){
    
            if($id == $article['id']){
    
                return view('dettaglio-articoli', ['article' => $article]);
            }
        }
    
    
    }
}
