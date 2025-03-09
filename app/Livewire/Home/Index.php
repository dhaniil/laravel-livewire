<?php

namespace App\Livewire\Home;

use Livewire\Component;
use App\Models\Post;

class Index extends Component
{
    public $title;
    public $content;
    public $slug;
    public $postImage;
    public $posts;


    public function mount() 
    {
        $this->loadPosts();
    }

    public function loadPosts()
    {
        $this->posts = Post::with('user')->latest()->get();
    }


    public function render()
    {
        return view('livewire.home.index');
    }
}
