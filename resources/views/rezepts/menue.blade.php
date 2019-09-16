@extends('rezepts.nav')
@section('content')
<style>
    .uper {
        margin-top: 40px;
    }

</style>
<div class="uper">
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div><br />
    @endif
    <table class="table table-striped">
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
            $(".delete").on("submit", function () {
                return confirm("{{ trans('sentence.confirm')}}");
            });

        </script>
        @endsection
