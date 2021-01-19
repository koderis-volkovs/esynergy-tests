@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card">
        <div class="card-header">Kā lietot API?</div>

        <div class="card-body">

            <ol>
                <li>Veicam `GET` pieprasījumu uz <code>{{ route('api.products') }}</code></li>
                <li>Ja vēlamies izvadīt vairāk/mazāk kā 10 rezultātus, tad izmantojam <code>limit=</code> attribūtu</li>
                <li>Ja vēlamies attēlot produktus, kas tika izveidoti sākot ar konkrētu datumu, tad izmantojam <code>from=</code> attribūtu</li>
                <li>Ja vēlamies attēlot produktus, kas tika izveidoti līdz konkrētajam datumam, tad izmantojam <code>to=</code> attribūtu</li>
            </ol>
            Saite ar visiem attribūtiem izskatās: <code>{{ route('api.products') }}?from=2021-01-19%2013:28:52&till=2021-01-19%2015:28:52&limit=15</code>
            <p>Ja kāds no filtriem netiek norādīts pareizā formātā, tad tiek izvadīts kļūdas paziņojums sekojošā formātā:</p>
            <code>{"status":"error","messages":{"from":["The from is not a valid date."]}}</code>

        </div>
    </div>
</div>
@endsection
