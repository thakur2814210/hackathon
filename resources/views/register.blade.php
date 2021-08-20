@extends('layouts.app')
@section('main')
<style>
    button.add {
        font-weight: bold;
        border-radius:50px;
        font: message-box;
    }
    .mybutton{
        height: 50px;
    }
</style>
<div class="page-wrapper p-t-30 p-b-100 font-poppins">
    <div class="wrapper wrapper--w680">
        <div class="card card-4">
            <div class="card-body">
                @if ($errors->any())
         <div class="alert alert-danger">
            <strong>Please Fill all Fields.</strong>
    </div>
   @endif
                <h2 class="title">Register For Hackathon
                  
                    {{-- <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div> --}}
                </h2>
                <form method="POST" action="/registrations/{{$short_url}}" id="reg_frm">
                        @csrf
                           <div class="input-group">
                                <label class="label">Name</label>
                                <input class="input--style-4" type="text" name="name">
                            </div>
                            <div class="input-group">
                                <label class="label">NickName</label>
                                <input class="input--style-4" type="text" name="nick_name">
                            </div>
                            <div class="input-group">
                                <label class="label">Email</label>
                                <input class="input--style-4" type="text" name="email">
                            </div>
                            <div class="input-group">
                                <label class="label">Password</label>
                                <input class="input--style-4" type="password" name="password">
                            </div>
                            <div class="input-group">
                                <label class="label">Bio</label>
                                <textarea style="border:none" rows="2" cols="55" class="input--style-4" type="text" name="bio"></textarea>
                           </div>
                           <div class="row row-space">
                                <div class="col-2">
                                  <div class="input-group" >
                                  <label class="label">Useful Links</label>
                                    <span  id="add_links_div">
                                        <input class="input--style-4 useful_links" type="text" name="link">
                                    </span>
                                    <input type="hidden" name="links" id="links">
                                  </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group p-t-30" id="add_button_div">
                                        <button style="margin-top: 5px;" class="btn btn--radius-2 btn--red mybutton" type="button" id="remove_links"><i class="fa fa-close" style="font-size:24px"></i></button>
                                        <button class="btn btn--radius-2 btn--blue mybutton" type="button" id="add_links"><i class="fa fa-plus" style="font-size:24px"></i></button>
                                    </div>
                                </div>
                           </div>
                    <div class="p-t-15">
                        <button class="btn btn--radius-2 btn--blue" id="sub-frm">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
<script type="text/javascript">
    function addEmailVariant()
    {
        var parent = document.getElementById('variant-email');
        var container= document.getElementById('empty1');
        var div= document.createElement('div');
        div.innerHTML +='<br><br><div class="input-group-icon"><input class="input--style-4" type="text" name="email[]"></div>';
        parent.insertBefore(div,container);

    }
    let count = 2;
    $("#add_links").click(function(e){
        e.preventDefault();
        let InputHTML = "<input class='input--style-4 useful_links' id='text-"+count+"' style = 'margin-top:5px' type='text' name='link'>"
        let buttonHTML = "<button onclick = 'remove("+count+")' id = 'button-"+count+"' style = 'margin-top : 5px;' class='btn btn--radius-2 btn--red mybutton' type='button' id='remove_links' ><i class='fa fa-close' style='font-size:24px; '></i></button><div></div>"
        $("#add_links_div").prepend(InputHTML);
        $("#add_button_div").prepend(buttonHTML);
        count++;
        
    })

    function remove(count){
        $("#text-"+count).remove();
        $("#button-"+count).remove();
    }

    $("#sub-frm").click(function(e){
        e.preventDefault();
        let links_array = []
        var inputs = $(".useful_links");
        for(var i = 0; i < inputs.length; i++){
        if($(inputs[i]).val() != ""){
            links_array.push($(inputs[i]).val());   
        }

        if(links_array.length != 0){
            $("#links").val(JSON.stringify(links_array));
        }
        
        }
        $("#reg_frm").submit();
        
        // $.ajax({
        // url: "registrations",
        // type: "post",
        // data: values ,
        // success: function (response) {

        //    // You will get response from your PHP page (what you echo or print)
        // },
        // error: function(jqXHR, textStatus, errorThrown) {
        //    console.log(textStatus, errorThrown);
        // }
    // });
    })



</script>

{{-- <script>
    
    iziToast.show({
			class: "danger-toast",
			icon: "sl sl-icon-close",
			title: "Hello,",
			message: "This is a danger notification !",
			titleColor: "#fff",
			messageColor: "#fff",
			iconColor: "#fff",
			backgroundColor: "#FF7273",
			progressBarColor: "#444F60",
			position: "topRight",
			transitionIn: "fadeInDown",
			close: !1,
			zindex: 99999
		})
</script> --}}
@endsection
   
  