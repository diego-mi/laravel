@extends('app')

@section('content')
    <section class="section">
        <div class="container">
            <div class="heading">
                <h1 class="title">Novo Produto</h1>
            </div>


            @if ($errors->any())
                <ul class="notification is-danger">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif


            {!! Form::open(['method' => 'post', 'url'=>'produtos/store']) !!}

                    <!-- Nome Form Input -->
            <div class="control">
                {!! Form::label('nome', 'Nome:') !!}
                {!! Form::text('nome', null, ['class'=>'input']) !!}
            </div>

            <!-- Descricao Form Input -->
            <div class="control">
                {!! Form::label('descricao', 'Descrição:') !!}
                {!! Form::textarea('descricao', null, ['class'=>'textarea']) !!}
            </div>

            <div class="control">
                {!! Form::submit('Criar Produto', ['class'=>'button is-primary']) !!}
            </div>

            {!! Form::close() !!}


        </div>
    </section>
@endsection
