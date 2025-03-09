<div class="min-h-screen border-dashed border-2 border-gray-800 rounded-2xl">
    <div class="m-12">
        <h2 class="text-sans font-bold text-4xl">Film Terbaru</h2>
        <div class="flex flex-row gap-6">
            @foreach ($posts as $post)
                <div class="card mt-2 shadow-accent-content rounded-2xl bg-gray-200/70 w-full sm:w-auto p-4">
                    <div class="relative max-w-[300px] h-[400px] group">
                        @if($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="object-cover w-[300px] h-[400px] border-white rounded-2xl">
                            <div class="absolute bottom-0 left-0 right-0 bg-blue-300 rounded-2xl bg-opacity-50 text-white p-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <h2 class="text-xl font-bold text-center">{{ $post->title }}</h2>
                            </div>
                            <div class="absolute bottom-0 items-center justify-center rounded-2xl left-0 right-0 bg-black/10 bg-opacity-50 text-white p-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 h-full">
                                <p class="text-center">Sinopsis:{{ $post->content}}</p>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>