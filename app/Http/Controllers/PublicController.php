<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    // Array di articoli fittizi per il blog
    public $articles = [
        ['id' => 1, 'title' => 'Introduzione a Laravel', 'category' => 'Framework', 'content' => 'Laravel è un framework PHP fantastico e moderno che rende lo sviluppo web un piacere.'],
        ['id' => 2, 'title' => 'I componenti anonimi Blade', 'category' => 'Blade', 'content' => 'I componenti anonimi semplificano la creazione di layout e parti riutilizzabili senza classi dedicate.'],
        ['id' => 3, 'title' => 'Bootstrap e Vite', 'category' => 'Frontend', 'content' => 'Integrare Bootstrap con Laravel Vite permette di compilare asset rapidamente e con stile.'],
    ];

    // Metodo per la Homepage
    public function home() {
        return view('welcome');
    }

    // Metodo per la pagina Indice (tutti gli articoli)
    public function index() {
        return view('articles.index', ['articles' => $this->articles]);
    }

    // Metodo per la pagina di Dettaglio del singolo articolo
    public function show($id) {
        $article = null;
        foreach ($this->articles as $art) {
            if ($art['id'] == $id) {
                $article = $art;
                break;
            }
        }

        if (!$article) {
            abort(404);
        }

        return view('articles.show', ['article' => $article]);
    }
}