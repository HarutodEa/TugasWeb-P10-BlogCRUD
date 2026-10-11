@extends('layouts.app')
@section('content')
    <h1 class="text-2xl font-bold mb-4">Tulis Naskah Baru</h1>
    
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Judul Cerita</label>
            <input type="text" name="title" value="{{ old('title') }}" class="w-full border p-2 rounded">
            @error('title') <small class="text-red-500">{{ $message }}</small> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Isi Naskah</label>
            <textarea name="body" rows="8" class="w-full border p-2 rounded">{{ old('body') }}</textarea>
            @error('body') <small class="text-red-500">{{ $message }}</small> @enderror
        </div>
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Simpan Karya</button>
        <a href="{{ route('posts.index') }}" class="ml-2 text-gray-600 hover:underline">Batal</a>
    </form>
@endsection