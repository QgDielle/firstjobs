<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleDashboard extends Component
{
    public function render()
    {
        $articles = Article::all();
        return view('livewire.article-dashboard', compact('articles'));
    }
}
