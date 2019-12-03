@component('mail::message')
    # Bestelling producten

    U heeft de volgende producten besteld:
    @foreach($supplynames as $supplyname)
        <p>{{$supplyname}}</p>
    @endforeach

    @component('mail::button', ['url' => ''])
        Klik om akkoord te gaan met deze offerte
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
