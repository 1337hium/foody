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
        {{ trans('sentence.add_rz')}}
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
        <div class="container">
            <form method="post" enctype="multipart/form-data" action="{{ route('rezepts.store') }}">
                @csrf

                <!--@csrf-->
                <div class="row">

                    <div class="col s12">
                        <label for="name">{{ trans('sentence.name')}}</label>
                        <input type="text" class="form-control" name="name" value="">
                        <label for="persons">{{ trans('sentence.persons')}}</label>
                        <input type="text" class="form-control" name="persons" value="">
                        <label for="time">{{ trans('sentence.time')}}</label>
                        <input type="text" class="form-control" name="time" value="">
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <label for="z1">{{ trans('sentence.ingredient')}} 1</label>
                        <input type="text" class="form-control" name="z1" value="">
                        <label for="z2">{{ trans('sentence.ingredient')}} 2</label>
                        <input type="text" class="form-control" name="z2" value="">
                        <label for="z3">{{ trans('sentence.ingredient')}} 3</label>
                        <input type="text" class="form-control" name="z3" value="">
                        <label for="z4">{{ trans('sentence.ingredient')}} 4</label>
                        <input type="text" class="form-control" name="z4" value="">
                        <label for="z5">{{ trans('sentence.ingredient')}} 5</label>
                        <input type="text" class="form-control" name="z5" value="">
                        <label for="z6">{{ trans('sentence.ingredient')}} 6</label>
                        <input type="text" class="form-control" name="z6" value="">
                        <label for="z7">{{ trans('sentence.ingredient')}} 7</label>
                        <input type="text" class="form-control" name="z7" value="">
                        <label for="z8">{{ trans('sentence.ingredient')}} 8</label>
                        <input type="text" class="form-control" name="z8" value="">
                        <label for="z9">{{ trans('sentence.ingredient')}} 9</label>
                        <input type="text" class="form-control" name="z9" value="">

                        <label for="z10">{{ trans('sentence.ingredient')}} 10</label>
                        <input type="text" class="form-control" name="z10" value="">
                        <label for="z11">{{ trans('sentence.ingredient')}} 11</label>
                        <input type="text" class="form-control" name="z11" value="">
                        <div class="input-field">
                            <textarea id="notes" name="notes" class="materialize-textarea"></textarea>
                            <label for="notes">{{ trans('sentence.notes')}}:</label>
                        </div>
                    </div>
                    <div class="col s6">
                        <label for="z12">{{ trans('sentence.ingredient')}} 12</label>
                        <input type="text" class="form-control" name="z12" value="">
                        <label for="z13">{{ trans('sentence.ingredient')}} 13</label>
                        <input type="text" class="form-control" name="z13" value="">
                        <label for="z14">{{ trans('sentence.ingredient')}} 14</label>
                        <input type="text" class="form-control" name="z14" value="">
                        <label for="z15">{{ trans('sentence.ingredient')}} 15</label>
                        <input type="text" class="form-control" name="z15" value="">
                        <label for="z16">{{ trans('sentence.ingredient')}} 16</label>
                        <input type="text" class="form-control" name="z16" value="">
                        <label for="z17">{{ trans('sentence.ingredient')}} 17</label>
                        <input type="text" class="form-control" name="z17" value="">
                        <label for="z18">{{ trans('sentence.ingredient')}} 18</label>
                        <input type="text" class="form-control" name="z18" value="">
                        <label for="z19">{{ trans('sentence.ingredient')}} 19</label>
                        <input type="text" class="form-control" name="z19" value="">
                        <label for="z20">{{ trans('sentence.ingredient')}} 20</label>
                        <input type="text" class="form-control" name="z20" value="">
                        <label for="z21">{{ trans('sentence.ingredient')}} 21</label>
                        <input type="text" class="form-control" name="z21" value="">
                        <input type="hidden" class="form-control" name="added" value="{{ date('Y-m-d H:i:s') }}">
                        <input type="hidden" class="form-control" name="editor" value="{{ Auth::user()->name }}">
                        <div class="input-field">
                            <textarea id="directions" name="directions" class="materialize-textarea"></textarea>
                            <label for="directions">{{ trans('sentence.directions')}}:</label>
                        </div>

                    </div>
                </div>
                <div class="col s12">
                    <div class="form-group row">
                        <label for="pic" class="col-md-4 col-form-label text-md-right">Profile Image</label>
                        <div class="col-md-6">
                            <input id="pic" type="file" class="form-control" name="pic">
                        </div>
                    </div>
                </div>



        </div>

        <label>{{ trans('sentence.category')}}</label>
        <div class="input-field col s12">
            <select name="category" id="category">
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



            <button type="submit" class="btn btn-primary">{{ trans('sentence.create')}}</button>
            </form>
        </div>
    </div>
</div>
@endsection
@endif
@section('content')
NEIN!
@endsection
