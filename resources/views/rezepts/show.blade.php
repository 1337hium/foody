@extends('rezepts.nav')
@section('content')

<body>
<style>

.mfp-no-margins img.mfp-img {
	padding: 0;
}
/* position of shadow behind the image */
.mfp-no-margins .mfp-figure:after {
	top: 0;
	bottom: 0;
}
/* padding for main container */
.mfp-no-margins .mfp-container {
	padding: 0;
}


/* 

for zoom animation 
uncomment this part if you haven't added this code anywhere else

*/


.mfp-with-zoom .mfp-container,
.mfp-with-zoom.mfp-bg {
	opacity: 0;
	-webkit-backface-visibility: hidden;
	-webkit-transition: all 0.3s ease-out; 
	-moz-transition: all 0.3s ease-out; 
	-o-transition: all 0.3s ease-out; 
	transition: all 0.3s ease-out;
}

.mfp-with-zoom.mfp-ready .mfp-container {
		opacity: 1;
}
.mfp-with-zoom.mfp-ready.mfp-bg {
		opacity: 0.8;
}

.mfp-with-zoom.mfp-removing .mfp-container, 
.mfp-with-zoom.mfp-removing.mfp-bg {
	opacity: 0;
}

</style>
    <div class="container">
        <div class="row">
            <button type="button" class="btn btn-success no-print"
                onClick="history.back()">{{ trans('sentence.back')}}</button>




            <button type="button" class="btn btn-success no-print"
                onClick="window.print()">{{ trans('sentence.print')}}</button>

            <div align="center">
            </div>
        </div>
        <span style="font-size: 15pt">
            <div class="col-sm-8" align="left">
                <h1>{{ trans('sentence.rz')}}: {{ $rezept->name }}</h1>
                <ul>
                    {{ trans('sentence.category')}}:
                    @if ( $rezept->category == 1)
                    {{ trans('sentence.category1')}} <br>
                    @endif @if ( $rezept->category == 2)
                    {{ trans('sentence.category2')}} <br>
                    @endif @if ( $rezept->category == 3)
                    {{ trans('sentence.category3')}} <br>
                    @endif @if ( $rezept->category == 4)
                    {{ trans('sentence.category4')}} <br>
                    @endif @if ( $rezept->category == 5)
                    {{ trans('sentence.category5')}} <br>
                    @endif @if ( $rezept->category == 6)
                    {{ trans('sentence.category6')}} <br>
                    @endif @if ( $rezept->category == 7)
                    {{ trans('sentence.category7')}} <br>
                    @endif @if ( $rezept->category == 8)
                    {{ trans('sentence.category8')}} <br>
                    @endif @if ( $rezept->category == 9)
                    {{ trans('sentence.category9')}} <br>
                    @endif @if ( $rezept->category == 10)
                    {{ trans('sentence.category10')}} <br>
                    @endif @if ( $rezept->category == 11)
                    {{ trans('sentence.category11')}} <br>
                    @endif @if ( $rezept->category == 12)
                    {{ trans('sentence.category12')}} <br>
                    @endif @if ( $rezept->category == 13)
                    {{ trans('sentence.category13')}} <br>
                    @endif @if ( $rezept->category == 14)
                    {{ trans('sentence.category14')}} <br>
                    @endif
                    <li>{{ trans('sentence.time')}}: {{ $rezept->time }}</li>
                    <li>{{ trans('sentence.persons')}}: {{ $rezept->persons }}</li>
                    <li>{{ trans('sentence.added')}}: {{ \Carbon\Carbon::parse($rezept->added)->format('d.m.Y')}}</li>
                </ul>

                <span style="font-size: 15pt">
                    <b><br>{{ trans('sentence.ingredients')}}:</b> <br>
                    @if ( $rezept->z1 != null)
                    {{ $rezept->z1 }} <br>
                    @endif
                    @if ( $rezept->z2 != null)
                    {{ $rezept->z2 }} <br>
                    @endif
                    @if ( $rezept->z3 != null)
                    {{ $rezept->z3 }} <br>
                    @endif
                    @if ( $rezept->z4 != null)
                    {{ $rezept->z4 }} <br>
                    @endif
                    @if ( $rezept->z5 != null)
                    {{ $rezept->z5 }} <br>
                    @endif
                    @if ( $rezept->z6 != null)
                    {{ $rezept->z6 }} <br>
                    @endif
                    @if ( $rezept->z7 != null)
                    {{ $rezept->z7 }} <br>
                    @endif
                    @if ( $rezept->z8 != null)
                    {{ $rezept->z8 }} <br>
                    @endif
                    @if ( $rezept->z9 != null)
                    {{ $rezept->z9 }} <br>
                    @endif
                    @if ( $rezept->z10 != null)
                    {{ $rezept->z10 }} <br>
                    @endif
                    @if ( $rezept->z11 != null)
                    {{ $rezept->z11 }} <br>
                    @endif
                    @if ( $rezept->z12 != null)
                    {{ $rezept->z12 }} <br>
                    @endif
                    @if ( $rezept->z13 != null)
                    {{ $rezept->z13 }} <br>
                    @endif
                    @if ( $rezept->z14 != null)
                    {{ $rezept->z14 }} <br>
                    @endif
                    @if ( $rezept->z15 != null)
                    {{ $rezept->z15 }} <br>
                    @endif
                    @if ( $rezept->z16 != null)
                    {{ $rezept->z16 }} <br>
                    @endif
                    @if ( $rezept->z17 != null)
                    {{ $rezept->z17 }} <br>
                    @endif
                    @if ( $rezept->z18 != null)
                    {{ $rezept->z18 }} <br>
                    @endif
                    @if ( $rezept->z19 != null)
                    {{ $rezept->z19 }} <br>
                    @endif
                    @if ( $rezept->z20 != null)
                    {{ $rezept->z1 }} <br>
                    @endif
                    @if ( $rezept->z21 != null)
                    {{ $rezept->z21 }} <br>
                    @endif

                    @if ( $rezept->directions != null)
                    <b><br>{{ trans('sentence.directions')}}:</b> <br>
                    {!! nl2br(e($rezept->directions)) !!} <br><br>
                    @endif


                    @if ( $rezept->notes != null)
                    <b><br>{{ trans('sentence.notes')}}:</b> <br>
                    {!! nl2br(e($rezept->notes)) !!} <br>
                    @endif
<a data-fancybox="gallery" href="{{ URL::to('/') }}/upload/{{ $rezept->pic }}"><img src="{{ URL::to('/') }}/upload/tumb/{{ $rezept->tumb }}"></a>
</body>
</html>
@endsection
