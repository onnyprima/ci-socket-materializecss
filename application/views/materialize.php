<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="<?php echo base_url('assets/css/icon.css'); ?>" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/materialize.css'); ?>"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>


        <nav>
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo">Logo</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="sass.html"><i class="material-icons left">search</i>Link with Left Icon</a></li>
                    <li><a href="#" data-target="slide-out" class="openSidenav"><i class="material-icons right">view_module</i>Menu Navigasi</a></li>
                </ul>
            </div>
        </nav>

        <div class="row">
            <div class="col s3">
                <ul class="collapsible">
                    <li>
                        <div class="collapsible-header">
                            <i class="material-icons">filter_drama</i>
                            First
                            <span class="new badge pulse">4</span></div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                    </li>
                    <li>
                        <div class="collapsible-header">
                            <i class="material-icons">place</i>
                            Second
                            <span class="badge">1</span></div>
                        <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                    </li>
                </ul>

            </div>
            <div class="col s9">
                <br>
                <hr>
                <div class="progress">
                    <div id="progressStat" class="determinate" style="width: 70%"></div>
                </div>
                <hr><br>
                <div class="col s6">
                    <h2 class="header">Horizontal Card</h2>
                    <div class="card horizontal scale-transition">
                        <div class="card-image">
                            <img src="<?php echo base_url('assets/aizen.jpg'); ?>">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information.</p>
                            </div>
                            <div class="card-action">
                                <a href="#">This is a link</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col s6">
                    <h2 class="header">Horizontal Card</h2>
                    <div class="card horizontal">
                        <div class="card-image">
                            <img src="<?php echo base_url('assets/aizen.jpg'); ?>">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information.</p>
                            </div>
                            <div class="card-action">
                                <a href="#">This is a link</a>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="btn waves-effect waves-light pulse" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                </button>


                <input type="text" class="datepicker" placeholder="Date Picker">


                <input type="text" class="timepicker" placeholder="Time Picker">

                <div class="switch">
                    <label>
                        Off
                        <input type="checkbox">
                        <span class="lever"></span>
                        On
                    </label>
                </div>
                <hr>
                <ul id="slide-out" class="sidenav">
                    <li><div class="user-view">
                            <div class="background">
                                <img src="images/office.jpg">
                            </div>
                            <a href="#user"><img class="circle" src="images/yuna.jpg"></a>
                            <a href="#name"><span class="white-text name">John Doe</span></a>
                            <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
                        </div></li>
                    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
                    <li><a class="modal-trigger" href="#modal1">Demo Real Time Import</a></li>
                    <li><div class="divider"></div></li>
                    <li><a class="subheader">Subheader</a></li>
                    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
                </ul>

                <!-- Modal Structure -->
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <h4>Demo Real Time Import Excel</h4>
                        <hr>
                        <br>
                        <div class="container">
                            <div class="row">
                                <div class="progress">
                                    <div id="progressImport" class="determinate" style="width: 0%"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="row">
                                    <div>
                                        <h5 class="center-align" id="progress">1/50000 (1%)</h5>
                                    </div>
                                </div>    
                                <div class="row">
                                    On Progress.....                                
                                </div>
                                <div class="row">
                                    <div class="row">
                                        <div class="col s3">
                                            NIP
                                        </div>
                                        <div class="col s9">
                                            <div id="nip"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s3">
                                            Nama
                                        </div>
                                        <div class="col s9">
                                            <div id="nama"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s3">
                                            Tanggal Rekrut
                                        </div>
                                        <div class="col s9">
                                            <div id="tgl"></div>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                            <div class="row">
                                <div class="center-align">
                                    <div id="preloaderImport" style="display: none">
                                        <div class="preloader-wrapper big active">
                                            <div class="spinner-layer spinner-blue-only">
                                                <div class="circle-clipper left">
                                                    <div class="circle"></div>
                                                </div><div class="gap-patch">
                                                    <div class="circle"></div>
                                                </div><div class="circle-clipper right">
                                                    <div class="circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                                    <button class="btn waves-effect waves-light pulse" type="submit" id="startImportData" name="action">Start
                                        <i class="material-icons right">send</i>
                                    </button>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                    </div>
                </div>



            </div>
        </div>

        <!--JavaScript at end of body for optimized loading-->
        <script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/materialize.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/autobahn.js'); ?>"></script>

        <script>
            var conn = new ab.Session('ws://localhost:8080',
                    function () {
                        conn.subscribe('kittensCategory', function (topic, data) {
                            $('#modal1').modal('open');

                            $('#progressImport').css('width', data.current_progress);
                            $('#progress').text(data.current_record.no + '/' + data.totalrecord + ' (' + data.current_progress + ')');

                            $('#nip').text(data.current_record.nip);
                            $('#nama').text(data.current_record.nama);
                            $('#tgl').text(data.current_record.tanggal_rekrut.date);
                        });
                    },
                    function () {
                        console.warn('WebSocket connection closed');
                    },
                    {'skipSubprotocolCheck': true}
            );
        </script>

        <script>
            $(document).ready(function () {
                $('.collapsible').collapsible();
            });

            $(document).ready(function () {
                $('.datepicker').datepicker();
            });

            $(document).ready(function () {
                $('.timepicker').timepicker();
            });

            $("#startImportData").click(function () {
                $('#preloaderImport').show();
                $('#startImportData').hide();
                $.post("<?php echo site_url('welcome/startImport'); ?>",
                        {
                            category: "kittensCategory"
                        },
                        function (data, status) {
                            alert("Data: " + data + "\nStatus: " + status);
                            $('#preloaderImport').hide();
                            $('#startImportData').show();
                        });
            });

            $(document).ready(function () {
                $('.sidenav').sidenav();
                $('.openSidenav').on('click', function () {
                    $('.sidenav').sidenav('open');
                });

                var x = 0;
                setInterval(function () {
                    $('#progressStat').css('width', x + "%");
                    x = x + 10;
                }, 1000);

                $('.modal').modal();
            });
        </script>
    </body>
</html>