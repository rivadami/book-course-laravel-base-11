<div class="card card-white">
    
    <h1>
        {{ $post->title }}
    </h1>
        {{ $changeTitle() }}
    <h1>
        {{ $post->title }}
    </h1>
    <p>
        {{ $post->category->title }}
    </p>
    <p>
        {{ $post->content }}
    </p>
</div>