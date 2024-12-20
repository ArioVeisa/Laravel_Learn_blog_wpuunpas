<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>


    <article class="py-8  max-w-screen-md border-b border-green-300 ">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-grey-900">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="/authors/{{ $post->author->id }}">{{ $post->author->name }}</a> |
            {{ $post['created_at']->format('j F Y') }}
        </div>
        <p class="my-4 font-light ">{{ $post['body'] }}</p>
        <a href="/posts" class="font-medium text-blue-600 hover:underline">&laquo; Back to post</a>
    </article>


</x-layout>
