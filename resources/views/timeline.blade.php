@extends('layout_master')

@section('content-header')
<div class="panel">
    <div class="panel-heading" style="padding-bottom: 20px">
        <center>
            <h3>
                {{-- <button id="multi_quote">Tampilkan</button> --}}
                <button href="{{route('click')}}">Tampilkan</button>
                <a href="{{asset('/halo')}}" class="btn btn-secondary"> Cancel</a>
                
            </h3>
        </center>
    </div>
</div>
@endsection
@section('content')
<div class="panel">
    <div class="panel-heading"><h3>Peribahasa Hari ini</h3></div>
    <div class="panel-body">  
        <div class="col-md-12">
            <h2>{{$file}}</h2>
            {{-- <h2 id="quote"></h2> --}}
            {{-- <h5 id="time"></h5> --}}
        </div>               
    </div>
</div>
@endsection
@section('myjs')
<script>
    $('#multi_quote').click(function(){
        
        document.getElementById("quote").innerHTML = "Hello world";
        document.getElementById("time").innerHTML = new Date(); 
    })
</script>
@endsection