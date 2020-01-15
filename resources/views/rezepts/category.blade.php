@extends('rezepts.nav')
@section('content')

<style>
    .uper {
        margin-top: 40px;
    }

</style>
<div class="uper">
    @if(session()->get('success1'))
    <div class="alert alert-success">
        {{ session()->get('success1') }}
    </div><br />
    @endif
    <table class="table table-striped">

                        <form id="category_form" action="/category" method="post">
<!--                            {{ csrf_field() }}
                            <input id="search" class="search-query" placeholder="{{ trans('sentence.search')}}"

                                type="search" name="category">
-->

{{ csrf_field() }}
            <div class="input-field col s12">
    <select class="mdb-select colorful-select dropdown-primary md-form" multiple searchable="Search here.." id="category">

<option value="" disabled selected>{{ trans('sentence.filter1')}}...</option>
                    <option value="1">{{ trans('sentence.category1')}}</option>
                    <option value="2">{{ trans('sentence.category2')}}</option>
                    <option value="3">{{ trans('sentence.category3')}}</option>
                    <option value="4">{{ trans('sentence.category4')}}</option>
                    <option value="5">{{ trans('sentence.category5')}}</option>
                    <option value="6">{{ trans('sentence.category6')}}</option>
                    <option value="7">{{ trans('sentence.category7')}}</option>
                    <option value="8">{{ trans('sentence.category8')}}</option>
                    <option value="9">{{ trans('sentence.category9')}}</option>
                    <option value="10">{{ trans('sentence.category10')}}</option>
                    <option value="11">{{ trans('sentence.category11')}}</option>
                    <option value="12">{{ trans('sentence.category12')}}</option>
                    <option value="13">{{ trans('sentence.category13')}}</option>
                    <option value="14">{{ trans('sentence.category14')}}</option>
                </select>
<input type="hidden" name="kate" id="kate" />
<button type="submit"  name="submit" class="btn btn-primary">{{ trans('sentence.filter')}}</button>
<button href="{{ route('rezepts.category') }}"  name="submit" class="btn btn-primary">Reset</button>
        </form>


        <thead>
            <tr>
                <td>@sortablelink('name', trans('sentence.name'))</td>
                <td>@sortablelink('time', trans('sentence.time'))</td>
                <td></td>
                @if (Auth::user())
                <td colspan="2">{{ trans('sentence.action')}}</td>
                @endif
            </tr>
        </thead>
        <tbody>
           @foreach($rezepts as $rezept)
            <tr>
                <td><a href="{{ route('rezepts.show',$rezept->id)}}"> {{$rezept->name}}</td>
                <td>{{$rezept->time}}</td>
                <td>{{session()->get('success')}}</td>
                @if (Auth::user())
                <td><a href="{{ route('rezepts.edit',$rezept->id)}}"
                        class="btn btn-primary">{{ trans('sentence.edit')}}</a></td>
                <td>
                    <form class="delete" action="{{ route('rezepts.destroy', $rezept->id)}}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">{{ trans('sentence.delete')}}</button>
                        @endif
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $rezepts->appends(\Request::except('page'))->render() !!}
    <div>
<script>
// Material Select Initialization
$(document).ready(function() {
$('.mdb-select').materialSelect();
});
            $(".delete").on("submit", function () {
                return confirm("{{ trans('sentence.confirm')}}");
            });
$('#category').on('change', function() {
    $('#kate').val($('#category').val());
});
$(document).ready(function(){
  $('#kate').change(function(){
    // Call submit() method on <form id='myform'>
    $('#category_form').submit();
  });
});
        </script>
        @endsection
