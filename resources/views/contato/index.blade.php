@extends("layout/site")

@section("titulo", "Contatos")   

@section("conteudo")

<h2> Aqui é tudo HTML </h2>

@foreach ($varTemas as $varTema)
    <p> {{ $varTema['tema'] }} </p>     <!-- {}serve como um eco -->   
    <p> {{ $varTema['titulo'] }} </p>
    <hr>
@endforeach

@endsection