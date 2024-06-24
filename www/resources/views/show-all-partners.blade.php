<x-header></x-header>

<h1>Все партнеры</h1>

@foreach($partners as $partner)

    <p>
        {{ $partner->name }}<a href="{{ route('add-partner', ['partner' => $partner->id]) }}">добавить></a>
    </p>
@endforeach
