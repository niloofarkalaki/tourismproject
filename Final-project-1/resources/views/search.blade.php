@extends('layouts.app')
@section('title',' خانه')
@section('content')
	<div class="card">
    <div class="card-header"><b> نتایج جستجو برای "{{ request('query') }}":{{ $searchResults->count() }} </b></div>

    <div class="card-body">

        @foreach($searchResults->groupByType() as $type => $modelSearchResults)
            <h2>{{ ucfirst($type) }}</h2>

            @foreach($modelSearchResults as $searchResult)
                <ul>
                    <li><a href="{{ $searchResult->url }}">{{ $searchResult->title }}</a></li>
                </ul>
            @endforeach
        @endforeach

    </div>
</div>
@endsection