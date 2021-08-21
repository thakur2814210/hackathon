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
                Challenges List
            </h2>
            <h4>Meet people from all around the world</h4>
            {{-- <a class="button primary-btn is-loading">Primary</a> --}}
        </div>

       
    </div>
</div>




<div class="">
    <div class="columns is-vcentered">
        <!-- Demo section -->
        <div class="column is-10 is-offset-1">
            <table class="table is-bordered text-center" style="text-align: center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Solution Submit Date</th>
                        <th>Action</th>
                      
                    </tr>
                </thead>
                <tbody>
                   @foreach ($solutions as $sol)
                   <tr>
                    <td>1</td>
                    <td>{{$sol->user->name}}</td>
                    <td>{{$sol->user->email}}</td>
                    <td>{{$sol->created_at}}</td>
                    <td><a  href="/main/users/show_code/{{$sol->id}}" class="button is-small btn-align accent-btn raised rounded btn-outlined">View Parti</a></td>
                </tr>  
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
           
  
       

</div>
 <!-- /Modal Markup -->
            

@include('layouts.footer');

@endsection

@section('scripts')

{{-- <script src="{{asset("monaco-editor/min/vs/loader.js")}}"></script> --}}

{{-- <script src="{{asset('js/main.js')}}"></script> --}}
@endsection


  
