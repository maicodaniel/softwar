@extends('layout.adm')

@section('content')
    <div class="col ">
        <div class='row '>
            <div class="col-md-12 ">
                <div class="card">
                    <table id="table" class="tb hover dataTable table-striped no-footer" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Preço</th>
                                <th>Data de cadastro</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product )
                            <tr>
                                <td>{{$product->name}}</td>
                                <td>{{$product->description}}</td>
                                <td>R${{$product->price}}</td>
                                <td>{{date('d/m/Y',strtotime($product->created_at))}}</td>

                                <td>
                                    <div class="row">
                                        <div>
                                            <a class="btn  btn-primary" href="{{ route('product.show',['product' => $product]) }}">Detalhes</a>
                                        </div>
                                        <div>
                                            <form method="POST" action="{{ route('product.destroy',['product'=>$product->id]) }}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Remover</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <hr>
                <div class="card-footer">
                    <a href="{{route('product.create')}}"  class="btn btn-success" role="button">Cadastrar</a>
                    <a href="{{route('product.start')}}"  class="btn btn-success" role="button">Cadastrar</a>
                </div>
            </div>
        </div>
    </div>

@endsection
