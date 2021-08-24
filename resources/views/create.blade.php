@extends('layouts.app')
@section('main')
<div class="page-wrapper p-t-30 p-b-100 font-poppins">
    <div class="wrapper wrapper--w680">
        <div class="card card-4">
            <div class="card-body">
                @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Please Fill All Fields.</strong>
    </div>
@endif
                <h2 class="title">Create Hackathon</h2>
                <form method="POST" action="/hackathons">
                    @csrf
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Title</label>
                                <input class="input--style-4" type="text" name="title">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Subtitle</label>
                                <input class="input--style-4" type="text" name="subtitle">
                            </div>
                        </div>
                    </div>
                    <div class="input-group">
                        <label class="label">Subject</label>
                        <div class="rs-select2 js-select-simple select--no-search">
                            <select name="type" >
                                <option disabled="disabled" selected="selected">Choose option</option>
                                <option>option 1</option>
                                <option>option2 2</option>
                                <option>option 3</option>
                            </select>
                            <div class="select-dropdown" name="type"></div>
                        </div>
                    </div>
                    <div class="input-group">
                        <label class="label">Description</label>
                        <textarea style="border:none" rows="2" cols="55" class="input--style-4" type="text" id="description" name="description"></textarea>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Min Participants</label>
                                <input class="input--style-4" type="number" name="min_participants">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Max Participants</label>
                                <input class="input--style-4" type="number" name="max_participants">
                            </div>
                        </div>
                    </div>
                    <div class="input-group">
                        <label class="label">Awards</label>
                        <textarea style="border:none" rows="2" cols="55" class="input--style-4" type="text" name="awards"></textarea>
                    </div>
                    <div class="input-group">
                                <label class="label">Event beginning</label>
                                <div class="input-group-icon">
                                    <input class="input--style-4 js-datepicker" type="text" name="event_begin">
                                    {{-- <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar1" ></i> --}}
                                </div>
                    </div>
                    <div class="input-group">
                                <label class="label">Event Ending</label>
                                <div class="input-group-icon">
                                    <input class="input--style-4 js-datepicker" type="text" name="event_end">
                                    {{-- <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i> --}}
                                </div>
                    </div>
                    <div class="input-group">
                                <label class="label">End Subscription Date</label>
                                <div class="input-group-icon">
                                    <input class="input--style-4 js-datepicker" type="text" name="end_subscription">
                                    {{-- <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i> --}}
                                </div>
                    </div>
                    <div class="row row-space">
                                <div class="col-2">
                                  <div class="input-group">
                                  <label class="label">Invite Member</label>
                                  <div id="newRow"></div>
                                  <button class="addbtn btn btn--radius-2 btn--blue" id = 'button-1' type="button" onclick="createNewElement();"><i class="fa fa-plus" style="font-size:20px"></i></button>
                                  <!-- <input class="input--style-4" id = 'text-1'  type="text" name="email" placeholder="Please Enter Email"> -->
                                  </div>
                                </div>
                                <div class="col-2">
                                    
                                    <div class="input-group p-t-30">
                                    <div id="newRow2"></div>
                                      <!-- <button class="addbtn btn btn--radius-2 btn--blue" id = 'button-1' type="button" onclick="createNewElement();"><i class="fa fa-plus" style="font-size:20px"></i></button> -->
                                    </div>
                                </div>
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
     <!-- Jquery JS-->
     <script type="text/JavaScript">
        let count = 2;
        function createNewElement(){
            
            var html = '';
                
                html += '<input id = "text-'+count+'" style="margin-bottom:10px" type="text" name="email[]" class="input--style-4" placeholder="Please Enter Email">';
              var html2='';  
                html2 += '<button id= "button-'+count+'" style="margin-bottom:10px" onclick="remove1('+count+')" type="button" class="addbtn btn btn--radius-2 btn--red"><i class="fa fa-close" style="font-size:24px"></i></button><div></div>';
                
                $('#newRow').append(html);
                $('#newRow2').append(html2);
                count++;
    
        }
        function remove1(count){
            
            $('#text-'+count).remove();
            $('#button-'+count).remove();
        }
    
        // $(document).on('click', '#removeRow', function () {
        //         $(this).closest('#newRow').remove();
        //     });
        // function createNewElement() {
        // document.getElementById("canclebtn").style.display = "block";
        // document.getElementById("addbtn").style.display = "none";
        
        // var txtNewInputBox = document.createElement('div');
    
        // txtNewInputBox.innerHTML = "<input class='input--style-4' type='text' placeholder='Please Enter Email' name='email'>";
         
        // document.getElementById("newElementId").appendChild(txtNewInputBox);
    
    
        // canclebtn=document.createElement('button');
        // canclebtn.className ="btn btn--radius-2 btn--red";
        // canclebtn.setAttribute("type", "button");
        // icanclebtn=document.createElement('i');
        // icanclebtn.className ="fa fa-close";
        // icanclebtn.setAttribute("style", "font-size:20px");
        // canclebtn.appendChild(icanclebtn);
        // document.getElementById("newElementId2").appendChild(canclebtn);
    
        // addbtn=document.createElement('button');
        // addbtn.className ="btn btn--radius-2 btn--blue";
        // addbtn.setAttribute("type", "button");
        
        // iaddbtn=document.createElement('i');
        // iaddbtn.className ="fa fa-plus";
        // iaddbtn.setAttribute("style", "font-size:20px");
        // addbtn.appendChild(iaddbtn);
        // document.getElementById("newElementId2").appendChild(addbtn);
    
    
    
    </script>
   <script src="https://cdn.tiny.cloud/1/{{env('TINYMCE_API')}}/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>    
        <script>tinymce.init({
    selector: '#description',
    plugins: 'code',
});
</script>
   
    
@endsection
   

   
