<?php

namespace App\View\Components\blog;

use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Show extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public Post $post){

    }

    public function changeTitle(){
        $this->post->title = 'New Title';
        return 'hola';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        
        return view('components.blog.show');
    }
}
