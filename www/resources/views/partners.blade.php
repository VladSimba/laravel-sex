<x-header></x-header>

<h1>Ваши партнеры</h1>

@foreach($partners as $partner)
    <p>
        {{ $partner->name }}<form method="post" action="{{ route('partner-delete', ['partner' => $partner->id]) }}">
        @csrf
        <button type="submit">удалить</button>

    </p>
@endforeach
