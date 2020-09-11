@extends('layouts.app')
@section('title',' خانه')
@section('content')
<div style="padding-right:450px;text-align:center;font-size:18px;color:#001a33;">
	<div class="card col-6" style="text-align:center">
    <div class="card-header" style="text-align:center;font-size:30px; font-weight: bold; text-shadow: 2px 2px 5px blue"><b> نتایج جستجو برای "{{ request('query') }}":{{ $searchResults->count() }} </b></div>

    <div class="card-body">

        @foreach($searchResults->groupByType() as $type => $modelSearchResults)
            <h2 style="text-align:center;color:#001a33;">{{ ucfirst($type) }}</h2>

            @foreach($modelSearchResults as $searchResult)
                <ul>
                    <li><a href="{{ $searchResult->url }}">{{ $searchResult->title }}</a></li>
                </ul>
            @endforeach
        @endforeach

    </div>
</div>
</div>
@endsection