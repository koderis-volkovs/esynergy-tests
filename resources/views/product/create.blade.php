@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="card-header">
                    Pievienot Produktu
                    <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm float-right">Produktu saraksts</a>
                </div>
               <div class="card-body">
                   @if(session()->has('success'))
                       <div class="alert alert-success">{{ session('success') }}</div>
                   @endif
                    <div class="form-group">
                        <label for="name">Nosaukums</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }} </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="quantity">Vienību skaits</label>
                        <input type="text" class="form-control @error('quantity') is-invalid @enderror" id="quantity" name="quantity" value="{{ old('quantity') }}">
                        @error('quantity')
                            <div class="invalid-feedback">{{ $message }} </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="price">Cena par vienību</label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') }}">
                        @error('price')
                            <div class="invalid-feedback">{{ $message }} </div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" type="submit">Pievienot</button>
                </div>
            </form>
        </div>
    </div>
@endsection
