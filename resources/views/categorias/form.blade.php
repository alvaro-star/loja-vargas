@extends('layouts.app')

@section('title', 'Laravel project')

@section('sidebar')

@endsection

@section('content')

<form action="/categorias" method="POST" class="rounded-md text-white mt-7 px-5 py-3 bg-gradient-to-r from-slate-900 via-purple-900 to-slate-900">
    @csrf
    <h3>Insira os dados da Categoria</h3>

    <div class="mt-7 relative z-0 mb-6 w-full group">
        <input type="nome" name="nome" id="floating_nome" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
        <label for="floating_nome" class="peer-focus:font-medium absolute text-sm text-white dark:text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nome</label>
    </div>
    
    <div class="flex justify-center">
        <button class="align-items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enviar</button>
    </div>
    
</form>


@endsection