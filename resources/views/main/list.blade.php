@extends('layouts.app1')

@section('main')
<div class="pageloader"></div>
<div class="infraloader is-active"></div>
<div class="hero product-hero is-fullheight is-relative">

   @include('layouts.navbar')
    

<div id="services" class="section">
    <div class="container">
        <!-- Title -->
        <div class="section-title-wrapper has-text-centered">
            <h2 class="section-title-landing">
                Talk with anyone
            </h2>
            <h4>Meet people from all around the world</h4>
            {{-- <a class="button primary-btn is-loading">Primary</a> --}}
        </div>

       
    </div>
</div>




<div class="">
    
    <ul class="user-list">
        @foreach ($challenges as $challenge)
        <li>
            <div class="user-list-avatar">
                <img src="assets/img/avatars/terry.jpg" alt="">
            </div>
            <div class="user-list-info">
                <a class="name" href="main/{{$challenge->slug}}">{{$challenge->challenge_name}}</a>
                <div class="position">CEO</div>
            </div>
            <div class="user-list-status is-online"></div>
        </li> 
        @endforeach
       
    </ul>
           
  
       

</div>
 <!-- /Modal Markup -->
            

@include('layouts.footer');

@endsection

@section('scripts')
<script>
   let code = "1}";
</script>
<script src="{{asset("monaco-editor/min/vs/loader.js")}}"></script>

{{-- <script src="{{asset('js/main.js')}}"></script> --}}
@endsection


  
