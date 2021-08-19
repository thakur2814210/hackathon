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

<body>
    <div class="page-wrapper p-t-30 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Create Hackathon</h2>
                    <form method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Title</label>
                                    <input class="input--style-4" type="text" name="first_name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Subtitle</label>
                                    <input class="input--style-4" type="text" name="last_name">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Subject</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="subject">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>option 1</option>
                                    <option>option2 2</option>
                                    <option>option 3</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Description</label>
                            <textarea style="border:none" rows="2" cols="55" class="input--style-4" type="text" name="description"></textarea>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Min Participants</label>
                                    <input class="input--style-4" type="number" name="min">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Max Participants</label>
                                    <input class="input--style-4" type="number" name="max">
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
                                        <input class="input--style-4 js-datepicker" type="text" name="eventbegin">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                        </div>
                        <div class="input-group">
                                    <label class="label">Event Ending</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="eventend">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                        </div>
                        <div class="input-group">
                                    <label class="label">End Subscription Date</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="eventSubscription">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
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
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <!-- Vendor JS-->
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('vendor/datepicker/moment.min.js') }}"></script>
    <script src="{{ asset('vendor/datepicker/daterangepicker.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('js/global.js') }}"></script>

ion'
        });
    </script>
