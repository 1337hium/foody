@extends('rezepts.nav')

@if (Auth::user())
@section('content')
<style>
    .uper {
        margin-top: 40px;
    }

</style>
<div class="card uper">
    <div class="card-header">
        Update {{ trans('sentence.rz')}}
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <form method="post" enctype="multipart/form-data" action="{{ route('rezepts.update', $rezept->id) }}">
            @method('PATCH')
            @csrf


            <div class="form-group ">
                <label for="name">{{ trans('sentence.name')}}</label>
                <input type="text" class="form-control" name="name" value="{{ $rezept->name }}">
                <label for="persons">{{ trans('sentence.persons')}}</label>
                <input type="text" class="form-control" name="persons" value="{{ $rezept->persons }}">
                <label for="time">{{ trans('sentence.time')}}</label>
                <input type="text" class="form-control" name="time" value="{{ $rezept->time }}">
                <label for="z1">{{ trans('sentence.ingredient')}} 1</label>
                <input type="text" class="form-control" name="z1" value="{{ $rezept->z1 }}">
                <label for="z2">{{ trans('sentence.ingredient')}} 2</label>
                <input type="text" class="form-control" name="z2" value="{{ $rezept->z2 }}">
                <label for="z3">{{ trans('sentence.ingredient')}} 3</label>
                <input type="text" class="form-control" name="z3" value="{{ $rezept->z3 }}">
                <label for="z4">{{ trans('sentence.ingredient')}} 4</label>
                <input type="text" class="form-control" name="z4" value="{{ $rezept->z4 }}">
                <label for="z5">{{ trans('sentence.ingredient')}} 5</label>
                <input type="text" class="form-control" name="z5" value="{{ $rezept->z5 }}">
                <label for="z6">{{ trans('sentence.ingredient')}} 6</label>
                <input type="text" class="form-control" name="z6" value="{{ $rezept->z6 }}">
                <label for="z7">{{ trans('sentence.ingredient')}} 7</label>
                <input type="text" class="form-control" name="z7" value="{{ $rezept->z7 }}">
                <label for="z8">{{ trans('sentence.ingredient')}} 8</label>
                <input type="text" class="form-control" name="z8" value="{{ $rezept->z8 }}">
                <label for="z9">{{ trans('sentence.ingredient')}} 9</label>
                <input type="text" class="form-control" name="z9" value="{{ $rezept->z9 }}">

                <label for="z10">{{ trans('sentence.ingredient')}} 10</label>
                <input type="text" class="form-control" name="z10" value="{{ $rezept->z10 }}">
                <label for="z11">{{ trans('sentence.ingredient')}} 11</label>
                <input type="text" class="form-control" name="z11" value="{{ $rezept->z11 }}">
                <label for="z12">{{ trans('sentence.ingredient')}} 12</label>
                <input type="text" class="form-control" name="z12" value="{{ $rezept->z12 }}">
                <label for="z13">{{ trans('sentence.ingredient')}} 13</label>
                <input type="text" class="form-control" name="z13" value="{{ $rezept->z13 }}">
                <label for="z14">{{ trans('sentence.ingredient')}} 14</label>
                <input type="text" class="form-control" name="z14" value="{{ $rezept->z14 }}">
                <label for="z15">{{ trans('sentence.ingredient')}} 15</label>
                <input type="text" class="form-control" name="z15" value="{{ $rezept->z15 }}">
                <label for="z16">{{ trans('sentence.ingredient')}} 16</label>
                <input type="text" class="form-control" name="z16" value="{{ $rezept->z16 }}">
                <label for="z17">{{ trans('sentence.ingredient')}} 17</label>
                <input type="text" class="form-control" name="z17" value="{{ $rezept->z17 }}">
                <label for="z18">{{ trans('sentence.ingredient')}} 18</label>
                <input type="text" class="form-control" name="z18" value="{{ $rezept->z18 }}">
                <label for="z19">{{ trans('sentence.ingredient')}} 19</label>
                <input type="text" class="form-control" name="z19" value="{{ $rezept->z19 }}">
                <label for="z20">{{ trans('sentence.ingredient')}} 20</label>
                <input type="text" class="form-control" name="z20" value="{{ $rezept->z20 }}">
                <label for="z21">{{ trans('sentence.ingredient')}} 21</label>
                <input type="text" class="form-control" name="z21" value="{{ $rezept->z21 }}">
                <input type="hidden" class="form-control" name="added" value="{{ $rezept->added }}">
                <input type="hidden" class="form-control" name="editor" value="{{ $rezept->editor }}">
                <div class="input-field">
                    <textarea id="notes" name="notes" class="materialize-textarea">{{ $rezept->notes }}</textarea>
                    <label for="notes">{{ trans('sentence.notes')}}:</label>
                </div>
                <div class="input-field">
                    <textarea id="directions" name="directions"
                        class="materialize-textarea">{{ $rezept->directions }}</textarea>
                    <label for="directions">{{ trans('sentence.directions')}}:</label>
                </div>

                <label>{{ trans('sentence.category')}}</label>


                <select class="browser-default" name="category">
                    <option value="{{ $rezept->category }}" align="left">
                        @if ( $rezept->category == 1)
                        {{ trans('sentence.category1')}}
                        @endif @if ( $rezept->category == 2)
                        {{ trans('sentence.category2')}}
                        @endif @if ( $rezept->category == 3)
                        {{ trans('sentence.category3')}}
                        @endif @if ( $rezept->category == 4)
                        {{ trans('sentence.category4')}}
                        @endif @if ( $rezept->category == 5)
                        {{ trans('sentence.category5')}}
                        @endif @if ( $rezept->category == 6)
                        {{ trans('sentence.category6')}}
                        @endif @if ( $rezept->category == 7)
                        {{ trans('sentence.category7')}}
                        @endif @if ( $rezept->category == 8)
                        {{ trans('sentence.category8')}}
                        @endif @if ( $rezept->category == 9)
                        {{ trans('sentence.category9')}}
                        @endif @if ( $rezept->category == 10)
                        {{ trans('sentence.category10')}}
                        @endif @if ( $rezept->category == 11)
                        {{ trans('sentence.category11')}}
                        @endif @if ( $rezept->category == 12)
                        {{ trans('sentence.category12')}}
                        @endif @if ( $rezept->category == 13)
                        {{ trans('sentence.category13')}}
                        @endif @if ( $rezept->category == 14)
                        {{ trans('sentence.category14')}}
                        @endif
                    </option>
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


            </div>
            <div class="row">
                <div class="col s3">
                    <img src="{{ URL::to('/') }}/upload/{{ $rezept->pic }}" class="bild-center no-print"
                        style="max-height:250px;max-width:150px;height:auto;width:auto;" />
                </div>
                <div class="col s9">
                    <div class="form-group row">
                        <label for="pic" class="col-md-4 col-form-label text-md-right">Image</label>
                        <div class="col-md-6">
                            <input id="pic" type="file" class="form-control" name="pic">
                            {{ $rezept->pic }}
                            <br>

                        </div>
                    </div>

                </div>
            </div>


            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
@endif
@section('content')
NEIN!
@endsection
