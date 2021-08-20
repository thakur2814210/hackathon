@extends('layouts.app')
    @section('main')
    <div class="page-wrapper p-t-30 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                       <strong>Please Fill all Fields.</strong>
               </div>
              @endif
                    <h2 class="title">Create Challange</h2>
                    <form method="POST">
                       @csrf
                                <div class="input-group">
                                    <label class="label">Title</label>
                                    <input class="input--style-4" type="text" name="challenge_name">
                                </div>
                            
                        
                        <div class="input-group">
                            <label class="label">Description</label>
                            <textarea id="myEditor" style="border:none" rows="2" cols="55" class="input--style-4" type="text" name="challenge_body"></textarea>
                        </div>
                        
                        
                        
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 
    @endsection

    
@section('scripts')
<script src="https://cdn.tiny.cloud/1/p5obn81ihtjb2y8sc0groe11339vat5zklxwlf6z5sgwa6hl/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>    <script>        tinymce.init({
    selector: '#myEditor',
    plugins: 'code',
});
</script>
@endsection
