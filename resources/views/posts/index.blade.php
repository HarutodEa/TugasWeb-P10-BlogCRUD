@extends('layouts.app')
@section('title', 'Daftar Karya')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Arsip Karya</h1>
        <a href="{{ route('posts.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-700">+ Tulis Naskah Baru</a>
    </div>

    @foreach ($posts as $p)
        <div class="border-b border-gray-200 py-4 mb-4">
            <h2 class="text-xl font-bold text-gray-800">{{ $p->title }}</h2>
            <p class="text-gray-600 mt-1 line-clamp-2">{{ $p->body }}</p>
            <a href="{{ route('posts.show', $p) }}" class="text-blue-500 hover:underline mt-2 inline-block">Baca selengkapnya &rarr;</a>
        </div>
    @endforeach

    <div class="mt-4">{{ $posts->links() }}</div>
@endsection