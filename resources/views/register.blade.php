@extends('layouts.app');
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
                <h2 class="title">Register For Hackathon</h2>
                <form method="POST">
                    
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
                                  <div class="input-group">
                                  <label class="label">Useful Links</label>
                                  <input class="input--style-4" type="text" name="link">
                                  </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group p-t-30">
                                        <button class="btn btn--radius-2 btn--red mybutton" type="submit"><i class="fa fa-close" style="font-size:24px"></i></button>
                                      <button class="btn btn--radius-2 btn--blue mybutton" type="submit"><i class="fa fa-plus" style="font-size:24px"></i></button>
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
<script type="text/javascript">
    function addEmailVariant()
    {
        var parent = document.getElementById('variant-email');
        var container= document.getElementById('empty1');
        var div= document.createElement('div');
        div.innerHTML +='<br><br><div class="input-group-icon"><input class="input--style-4" type="text" name="email[]"></div>';
        parent.insertBefore(div,container);

    }
</script>
@endsection
   
  