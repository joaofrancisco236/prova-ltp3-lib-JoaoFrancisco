@extends('layouts.app')

@section('content')

<div class="max-w-xl mx-auto bg-white p-6 rounded shadow">

    <h1 class="text-2xl font-bold mb-6">Novo Livro</h1>

    <form method="POST" action="{{ route('livros.store') }}">
        @csrf

        {{-- Título --}}
        <div class="mb-4">
            <label class="block mb-1 font-medium">Título</label>

            <input
                type="text"
                name="titulo"
                value="{{ old('titulo') }}"
                class="w-full rounded border px-3 py-2"
            >

            @error('titulo')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        {{-- Ano de publicação --}}
        <div class="mb-4">
            <label class="block mb-1 font-medium">Ano de publicação</label>

            <input
                type="text"
                name="ano_publicacao"
                value="{{ old('ano_publicacao') }}"
                inputmode="numeric"
                maxlength="4"
                class="w-full rounded border px-3 py-2"
            >

            @error('ano_publicacao')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        {{-- ISBN --}}
        <div class="mb-4">
            <label class="block mb-1 font-medium">ISBN</label>

            <input
                type="text"
                name="isbn"
                value="{{ old('isbn') }}"
                class="w-full rounded border px-3 py-2"
            >

            @error('isbn')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        {{-- Autor --}}
        <div class="mb-6">
            <label class="block mb-1 font-medium">Autor</label>

            <select
                name="autor_id"
                class="w-full rounded border px-3 py-2"
            >
                <option value="">Selecione um autor</option>

                @foreach($autores as $autor)
                    <option
                        value="{{ $autor->id }}"
                        {{ old('autor_id') == $autor->id ? 'selected' : '' }}
                    >
                        {{ $autor->nome }}
                    </option>
                @endforeach
            </select>

            @error('autor_id')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        {{-- Botões --}}
        <button
            type="submit"
            class="bg-indigo-600 text-white px-4 py-2 rounded"
        >
            Salvar
        </button>

        <a
            href="{{ route('livros.index') }}"
            class="ml-2 bg-gray-200 px-4 py-2 rounded"
        >
            Voltar
        </a>

    </form>

</div>

@endsection