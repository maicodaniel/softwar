@extends('layout.adm')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cadastrar') }}</div>

                <div class="card-body">
                    <div>
                        <h1>OLa seja bem vindo</h1>
                    </div>
                    <div>
                        <a href="{{route('product.index')}}">
                            <button type="button" class="btn btn-primary">
                                {{ __('Listar') }}
                            </button>
                        </a>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
