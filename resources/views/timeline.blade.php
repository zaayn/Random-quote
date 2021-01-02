@extends('layout_master')

@section('content')
<div class="panel">
    <div class="panel-heading" style="padding-bottom: 20px">
        <center>
            <h3>
                <button id="multi_quote">Tampilkan</button>
                {{-- <button href="{{route('click')}}">Tampilkan</button>
                <a href="{{asset('/halo')}}" class="btn btn-secondary"> Cancel</a> --}}
                
            </h3>
        </center>
    </div>
</div>
<div class="panel" id="add">
    <div class="panel-body" >  
        <div class="col-md-12 asli" id="guk">
            
            <h2 id="quote"></h2>
            <h5 id="time"></h5>
            <p id="line"></p>
        </div>               
    </div>
    <p id="yuhu"></p>
</div>

@endsection
@section('myjs')
<script>
    $('#multi_quote').click(function(){
        
        var x = document.getElementsByTagName("DIV")[8].innerHTML;
        document.getElementById("yuhu").innerHTML = x;

        document.getElementById("quote").innerHTML = "Hello world";
        document.getElementById("time").innerHTML = new Date();
        document.getElementById("line").innerHTML = "--------------------------------------";
        
        

        
        
    });
</script>
@endsection