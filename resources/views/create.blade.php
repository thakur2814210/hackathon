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
                    <form method="POST" action ="{{ route('hackathons.store') }}">
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
                            <label class="label">Description</label>
                            <textarea style="border:none" rows="2" cols="55" id="description" class="input--style-4" type="text" name="description"></textarea>
                        </div>
                        <div class="input-group">
                            <label class="label">Type</label>
                            <textarea style="border:none" rows="2" cols="55" class="input--style-4" type="text" name="type"></textarea>
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
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Event beginning</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4" type="date" name="event_begin">
                                        {{-- <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Event Ending</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4" type="date" name="event_end">
                                        {{-- <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="input-group">
                                    <label class="label">End Subscription Date</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4" type="date" name="end_subscription">
                                        {{-- <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i> --}}
                                    </div>
                            </div>
                            
                        </div>
                        <div class="input-group">
                                    <label class="label">Invite Member</label>
                                    <div class="input-group-icon">
                                    <button class="btn btn--radius-2 btn--blue" type="submit">+</button>
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
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <!-- Vendor JS-->
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('vendor/datepicker/moment.min.js') }}"></script>
    <script src="{{ asset('vendor/datepicker/daterangepicker.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('js/global.js') }}"></script>

    {{-- TinyMCE --}}
    <script src="https://cdn.tiny.cloud/1/p5obn81ihtjb2y8sc0groe11339vat5zklxwlf6z5sgwa6hl/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#description'
        });
    </script>
</body>

</html>
<!-- end document-->