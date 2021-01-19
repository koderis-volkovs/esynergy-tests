@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Produkti
                @if(auth()->user()->is_admin)
                    <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm float-right">Izveidot</a>
                @endif
            </div>
            <div class="card-body">
                @if(session()->has('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Preces Nosaukums</th>
                                <th>Vienību Skaits</th>
                                <th>Cena Par Vienību</th>
                                <th>Darbība</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if($products)
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>
                                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-secondary btn-sm">Apskatīt</a>
                                        @if(auth()->user()->is_admin)
                                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm">Labot</a>
                                            <form action="{{ route('products.destroy', $product->id) }}" METHOD="POST" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm" type="submit">Dzēst</button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5">Produkti nav atrasti</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @if($products->hasPages())
            <div class="card-footer">
                {{ $products->links() }}
            </div>
        @endif
    </div>
@endsection
