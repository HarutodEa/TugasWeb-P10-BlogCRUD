@extends('layouts.app')
@section('content')
    <h1 class="text-3xl font-bold text-gray-900">{{ $post->title }}</h1>
    <p class="text-sm text-gray-500 mt-2 mb-6">Ditulis pada: {{ $post->created_at->format('d M Y') }}</p>
    
    <div class="text-gray-800 leading-relaxed whitespace-pre-wrap">{{ $post->body }}</div>

    <div class="mt-8 flex space-x-2 border-t pt-4">
        <a href="{{ route('posts.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Kembali</a>
        <a href="{{ route('posts.edit', $post) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
        
        <form method="POST" action="{{ route('posts.destroy', $post) }}" onsubmit="return confirm('Yakin ingin menghapus naskah ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded">Hapus</button>
        </form>
    </div>
@endsection