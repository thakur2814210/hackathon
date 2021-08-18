<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Hackathon Registration</title>

    <!-- Icons font CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/datepicker/daterangepicker.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" media="all">
</head>
<style>
    button.add {
        font-weight: bold;
        border-radius:50px;
        font: message-box;
    }
</style>
<body>
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
                                        
                                          
                                          
                                          <button class="btn btn--radius-2 btn--red" type="submit"><i class="fa fa-close" style="font-size:24px"></i></button>
                                          <button class="btn btn--radius-2 btn--blue" type="submit"><i class="fa fa-plus" style="font-size:24px"></i></button>
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
    <!-- Jquery JS-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <!-- Vendor JS-->
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('vendor/datepicker/moment.min.js') }}"></script>
    <script src="{{ asset('vendor/datepicker/daterangepicker.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('js/global.js') }}"></script>

</body>

</html>
<!-- end document-->