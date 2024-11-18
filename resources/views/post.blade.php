<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>


    <article class="py-8 max-w-screen-md">
    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
    <div>
      <a href="#">{{ $post['author'] }}</a> | {{ $post['created_at'] ? $post['created_at']->diffForHumans() : '1 minutes ago' }}
    </div class="text-base text-gray-500">
    <p class="my-4 font-light">{{ $post['body'] }}</p>

    <a href="/blog" class="font-medium text-blue-500 hover:underline">&laquo; Back to Blog</a>
    </article>

  </x-layout>