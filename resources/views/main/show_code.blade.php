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




<div class="container">
    <div class="title quick-feature has-numbers text-bold">
        <h2>Write Your Code Here.</h2>
        
        <div class="field">
            <div class="control has-icons-left">
                <div class="select">
                    <select id="change_lang">
                        
                        <option>{{$code->lang}}</option>
                       
                    </select>
                </div>
                <div class="icon is-left">
                    <i class="fa fa-code"></i>
                </div>
            </div>
        </div>
    </div>
    
    <div class="title-divider is-small"></div>
        <div id="container" style="width:800px;height:600px;border:1px solid grey"></div>
        {{-- <a class="button button-cta primary-btn mt-3 modal-trigger " id="submit_code" data-modal="vertical-form-modal">Submit</a> --}}
</div>
@include('layouts.footer');

@endsection

@section('scripts')
<script>
   let code = "{{$code->code}}";
   let path = "{{asset('monaco-editor/min/vs')}}"
</script>
<script src="{{asset("monaco-editor/min/vs/loader.js")}}"></script>

<script src="{{asset('js/main.js')}}"></script>
@endsection


  
