@extends('layout.adm')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>{{ __($product->name) }}</h1>
                </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <p><strong>ID: </strong>{{$product->id}}</p>
                        <p><strong>Nome: </strong>{{$product->name}}</p>
                        <p><strong>Descrição: </strong>{{$product->description}}</p>
                        <p><strong>Preço: </strong>R${{$product->price}}</p>
                        <p><strong>Cadastrado em: </strong>{{date('d/m/Y',strtotime($product->created_at))  }}</p>


                    </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col d-flex justify-content-center mt-2">
                            <a href="{{route('product.edit', ['product' => $product->id])}}">Editar</a>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <a href="{{ route('product.index') }}"  class="nav-link">Listar Usuarios</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
