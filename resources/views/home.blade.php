@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card">
        <div class="card-header">Kā lietot API?</div>

        <div class="card-body">

            <ol>
                <li>Veicam pieprasījumu uz <code>{{ route('api.products') }}</code></li>
                <li>Ja vēlamies izvadīt vairāk rezultātu, tad izmantojam <code>limit=</code> attribūtu</li>
                <li>Ja vēlamies attēlot visus produktus, kas tika izveidoti sākot ar konkrētu datumu, tad izmantojam <code>from=</code> attribūtu</li>
                <li>Ja vēlamies attēlot visus produktus, kas tika izveidoti līdz konkrētajam datumam, tad izmantojam <code>to=</code> attribūtu</li>
            </ol>

        </div>
    </div>
</div>
@endsection
