@component('mail::message')
# Introduction


u heeft zojuist deze producten besteld:
<ul>
@foreach($user as $order)

    <li>{{ $order->name  }}</li>

@endforeach
</ul>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
