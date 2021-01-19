@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Apskatīt Produktu
                <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm float-right">Produktu saraksts</a>
            </div>
           <div class="card-body">
               <div class="table table-responsive">
                   <table class="table">
                       <tbody>
                            <tr>
                                <td>Nosaukums:</td>
                                <td>{{ $product->name }}</td>
                            </tr>
                            <tr>
                                <td>Vienību skaits:</td>
                                <td>{{ $product->quantity }}</td>
                            </tr>
                            <tr>
                                <td>Cena par vienību:</td>
                                <td>{{ $product->price }}</td>
                            </tr>
                       </tbody>
                   </table>
               </div>
            </div>
        </div>
    </div>
@endsection
