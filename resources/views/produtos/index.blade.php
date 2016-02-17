@extends('app')

@section('content')
    <section class="section">
        <div class="container">
            <div class="heading">
                <h1 class="title">Produtos</h1>
                <h2 class="subtitle">
                    A simple example of a Laravel app
                </h2>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>

                @foreach($produtos as $produto)
                    Rumo ao primeiro CRUD
                    <tr>
                        <td>{{ $produto->id }}</td>
                        <td>{{ $produto->nome }}</td>
                        <td>{{ $produto->descricao }}</td>
                        <td></td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </section>
@endsection