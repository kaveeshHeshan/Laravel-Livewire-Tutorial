<?php

namespace App\Livewire\Child;

use Livewire\Component;
use App\Models\Articles;
use Livewire\Attributes\Layout;

class Article extends Component
{

    public $title, $description, $articles, $article_id;
    public $updateMode = false;

    public function mount(Articles $article) {
        $this->title = $article->title;
        $this->description = $article->description;
    }

    public function saveArticle() {
        $validated = $this->validate([ 
            'title' => 'required|min:3',
            'description' => 'required|min:3',
        ]);

        Articles::create([
            'title' => $this->title,
            'description' => $this->description,
        ]);

        session()->flash('message', 'Article added successfully!');

        return $this->redirect('/articles', navigate: true);

    }

    public function edit($id) {


        $this->updateMode = true;
        $article = Articles::findOrFail($id);
        $this->article_id = $article->id;
        $this->title = $article->title;
        $this->description = $article->description;

    }

    public function updateArticle() {
        $article = Articles::findOrFail($this->article_id);

        $article->update([
            'title' => $this->title,
            'description' => $this->description,
        ]);

        session()->flash('message', 'Article updated successfully!');

        return $this->redirect('/articles', navigate: true);

    }

    public function delete($id) {
        $article = Articles::findOrFail($id);
        $article->delete();

        session()->flash('message', 'Article removed successfully!');

        return $this->redirect('/articles', navigate: true);

    }

    public function closeModal() {
        $this->resetInputs();
    }

    #[Layout('components.layouts.child')]
    public function render()
    {
        $this->articles = Articles::all();
        return view('livewire.child.article');
    }

    public function resetInputs() {
        $this->article_id = null;
        $this->title = null;
        $this->description = null;
    }
}
