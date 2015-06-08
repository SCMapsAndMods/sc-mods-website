@extends('layout')

@section('content')
    <ul class="items-list">
        @foreach ($items as $item)
            <li class="items-list__item">
                <a href="/item/{{ $item['slug'] }}" class="items-list__item-link">
                    Test
                </a>
            </li>
        @endforeach
    </ul>
@endsection