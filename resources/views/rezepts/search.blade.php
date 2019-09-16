@extends('rezepts.nav')
@section('content')

<div class="container">
    @if(isset($details))
    <h2>{{ trans('sentence.results')}}</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $rezept)
            <tr>
<td>
<a href="{{ route('rezepts.show',$rezept->id)}}"> {{$rezept->name}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
    @endsection
