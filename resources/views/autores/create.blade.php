@extends('layouts.app')

@section('content')

<div class="max-w-xl mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-6">Novo Autor</h1>

    <form method="POST" action="{{ route('autores.store') }}">
        @csrf

        <div class="mb-4">
            <label for="nome" class="block font-semibold mb-1">
                Nome
            </label>

            <input
                type="text"
                name="nome"
                id="nome"
                value="{{ old('nome') }}"
                class="w-full rounded border px-3 py-2"
            >

            @error('nome')
                <div class="text-red-600 text-sm mt-1">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-6">
            <label for="nacionalidade" class="block font-semibold mb-1">
                Nacionalidade
            </label>

            <input
                type="text"
                name="nacionalidade"
                id="nacionalidade"
                value="{{ old('nacionalidade') }}"
                class="w-full rounded border px-3 py-2"
            >

            @error('nacionalidade')
                <div class="text-red-600 text-sm mt-1">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="flex gap-3">
            <button
                type="submit"
                class="bg-indigo-600 text-white px-4 py-2 rounded"
            >
                Salvar
            </button>

            <a
                href="{{ route('autores.index') }}"
                class="bg-gray-200 px-4 py-2 rounded"
            >
                Voltar
            </a>
        </div>
    </form>
</div>

@endsection