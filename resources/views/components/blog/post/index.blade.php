<div>
    {{ $slot }}

    @foreach ($posts as $p)
        <div class="card card-white mt-2">
            <h1>{{ $p->title }}</h1>
            <p>{{ $p->content }}</p>
            <p>{{ $p->description}}</p>
            <a href="{{route('blog.show',$p)}}">Go</a>
        </div>
    @endforeach

    {{ $posts->links()}}

    @isset($footer)
        {{ $footer }}
    @endisset

</div>
