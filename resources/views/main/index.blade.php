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
                        
                        <option>{{$challenge->lang}}</option>
                       
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
        <a class="button button-cta primary-btn mt-3 modal-trigger " id="submit_code" data-modal="vertical-form-modal">Submit</a>

</div>

 {{-- <!-- Modal trigger -->
 <a class="button button-cta btn-align primary-btn raised modal-trigger" data-modal="vertical-form-modal">Open modal</a>
 <!-- /Modal trigger -->
  --}}
 <!-- Modal Markup -->
 <div id="vertical-form-modal" class="modal modal-sm">
     <div class="modal-background" id="email-modal-background"></div>
     <div class="modal-content" id="email-modal-content">
         <div class="flex-card simple-shadow">
             <div class="card-body">
                 <h2 class="title has-text-centered is-3 mb-40">Enter Email To Submit</h2>
                 <div class="control-material is-accent">
                     <input class="material-input" type="email" id="email_f" required name="email">
                     <span class="material-highlight"></span>
                     <span class="bar"></span>
                     <label>Email *</label>
                 </div>
                 <div class="mt-20">
                     <button class="button button-cta btn-align accent-btn raised is-fullwidth no-lh" id="save">Submit</button>
                 </div>
             </div>
         </div>
     </div>
     <button class="modal-close is-large is-hidden" aria-label="close"></button>
 </div>
 <!-- /Modal Markup -->
            

@include('layouts.footer');

@endsection

@section('scripts')
<script>
   let code = "{{$challenge->code}}";
</script>
<script src="{{asset("monaco-editor/min/vs/loader.js")}}"></script>

<script src="{{asset('js/main.js')}}"></script>
@endsection


  
