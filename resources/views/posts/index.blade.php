<x-app-layout>
    <style>
        .extras-image {
            background-size: cover;
            background-position: center;
            height: 400px;
            box-shadow: inset 0 0 0 5px white;
            /* Esto añade un contorno interno */
        }
    </style>
    <div class="container shadow p-3 mb-5 bg-body rounded">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
            @foreach ($posts as $post)
                <article class="extras-image @if ($loop->first) col-12 col-lg-8 @endif"
                    style="background-image: url(http://laravel_blog.test/{{ Storage::url($post->image->url) }})">

                    <div class="d-flex flex-column justify-content-center w-100 h-100 px-3 gap-1">
                        <div>
                            @foreach ($post->tags as $tag)
                              <a href="" 
                                @if ($tag->color != "light" && $tag->color != "warning")
                                    class="text-light text-decoration-none badge rounded-pill bg-{{$tag->color}}"
                                @else
                                    class="text-reset text-decoration-none badge rounded-pill bg-{{$tag->color}}"
                                @endif
                                >
                                    {{ $tag->name }}
                            </a>
                            @endforeach
                        </div>
                        <h2 class="display-6 fw-bold lh-sm text-white">
                            <a href="">
                                {{ $post->name }}
                            </a>
                        </h2>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="mt-4">
            {{$posts->links()}}
        </div>
    </div>
</x-app-layout>
