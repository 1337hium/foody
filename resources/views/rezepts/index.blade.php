@extends('rezepts.nav')
@section('content')
<style>
.masonry-wrapper {
  padding: 1.5em;
  max-width: 1300px;
  margin-right: auto;
  margin-left: auto;
}
.masonry {
  columns: 1;
  column-gap: 5px;
}
.masonry-item {
  display: inline-block;
  vertical-align: top;
  margin-bottom: 5px;
}
@media only screen and (max-width: 1023px) and (min-width: 768px) {  .masonry {
    columns: 2;
  }
}
@media only screen and (min-width: 1024px) {
  .masonry {
    columns: 4;
  }
}
.masonry-item {
  filter: drop-shadow(0px 2px 2px rgba(0, 0, 0, .3));
  transition: filter .25s ease-in-out;
}
.masonry-item:hover {
  filter: drop-shadow(0px 5px 5px rgba(0, 0, 0, .3));
}
.masonry-footer {
  font-size: .75em;
  opacity: .25;
  text-align: center;
  padding-top: 3em; 
  padding-bottom: 3em;
  margin-bottom: -1.5em;
  transition: opacity 1s ease-in-out;
}
.masonry-footer a {
  color: currentColor;
}
.masonry-footer:hover, .masonry-footer:active, .masonry-footer:focus {
  opacity: .75;
}


    .image {
        position: relative;
        width: 100%;
    }

    h6 {
        position: absolute;
        bottom: 5px;
        left: 8;
        width: 100%;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        padding: 0 140px;
    }

    /* Create four equal columns that sits next to each other */
    .column1 {
        flex: 25%;
        max-width: 25%;
        padding: 0 9px;
    }

    .column1 img {
        margin-top: 1px;
            flex: 100%;
            max-width: 100%;
        /*     margin-left: 10px;
     */
        vertical-align: middle;
    }

    /* Responsive layout - makes a two column-layout instead of four columns */
    @media screen and (max-width: 800px) {
        .column1 {
            flex: 100%;
            max-width: 100%;
        }
    }

    /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 700px) {
        .column1 {
            flex: 100%;
            max-width: 100%;
        }
    }

    /* Container holding the image and the text */
    .container1 {
        width: 27%;
        position: relative;
        display: inline-block;
    }

    strong {
        font-weight: 600;
    }


    h1 {
        margin-top: 10px;
        font-weight: 600;
    }


    h2 {
        margin-top: 10px;
        font-size: 30px;
        font-weight: 600;
        color: #615c58;
        line-height: 42px;
    }

    h3 {
        font-size: 22px;
        font-weight: 300;
        color: #615c58;
        line-height: 30px;
    }

    img {
        max-width: 100%;
    }

    ::-moz-selection {
        background: #d05a4e;
        color: #fff;
        text-shadow: none;
    }

    ::selection {
        background: #d05a4e;
        color: #fff;
        text-shadow: none;
    }

    .container {
        position: relative;
        width: 50%;
    }

    .hvrbox,
    .hvrbox * {
        box-sizing: border-box;
    }

    .hvrbox {
        position: relative;
        display: inline-block;
        overflow: hidden;
        max-width: 100%;
        height: auto;
    
 background-color: var(--main-bg);
}

    .hvrbox img {
        max-width: 100%;
 border-radius: 0px;
    }

    .hvrbox .hvrbox-layer_bottom {
        display: block;

}

    .hvrbox .hvrbox-layer_top {
        opacity: 0;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        background:rgba(0, 0, 0, 0.6);
        color: var(--main-color);
        padding: 15px;
        -moz-transition: all 0.4s ease-in-out 0s;
        -webkit-transition: all 0.4s ease-in-out 0s;
        -ms-transition: all 0.4s ease-in-out 0s;
        transition: all 0.4s ease-in-out 0s;
    }

    .hvrbox:hover .hvrbox-layer_top,
    .hvrbox.active .hvrbox-layer_top {
        opacity: 1;
    }

    .hvrbox .hvrbox-text {
color:var(--main-color);
        text-align: center;
        font-size: 18px;
        display: inline-block;
        position: absolute;
        top: 50%;
        left: 50%;
        -moz-transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .hvrbox .hvrbox-text_mobile {
        font-size: 15px;
        border-top: 1px solid rgb(179, 179, 179);
        /* for old browsers */
        border-top: 1px solid rgba(179, 179, 179, 0.7);
        margin-top: 5px;
        padding-top: 2px;
        display: none;
    }

    .hvrbox.active .hvrbox-text_mobile {
        display: inline;
    }

</style>
@if(session()->get('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div><br />
@endif
<h1 align="center">{{ trans('sentence.rz_new')}}:</h1>
  <div class="masonry-wrapper">
    <div class="masonry">
            @foreach($rezepts as $rezept)
        <div class="masonry-item">
            <a href="{{ route('rezepts.show',$rezept->id)}}">
                <div class="hvrbox">
                    <img class="hvrbox-layer_bottom" src="{{ URL::to('/') }}/upload/tumb/{{ $rezept->tumb }}"
                        alt="{{$rezept->name}}" />
                    <div class="hvrbox-layer_top">
                        <div class="hvrbox-text">{{ $rezept->name }} <br> {{ $rezept->time }}
                           <div class="hvrbox-text_mobile">Rezept öffnen</div>
                        </div>
                    </div>
                </div>
            </a>

        </div>
            @endforeach
        </div>
    @endsection
