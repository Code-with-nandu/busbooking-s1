<?php
$this->load->helper('url');
$data['title'] = "Login";
$data['bkcolor'] = "lightyellow";
$this->load->view('head', $data);
?>
<meta charset="utf-8">
<title><?= $data['title'] ?></title>
<style>
    label {
        display: block;
    }

    body {
        background-color: grey;
    }

    #forrm {
        margin-left: auto;
        margin-right: auto;
        background-color: lightgrey;
        text-align: center;
    }

    #err {
        color: red;
        background-color: yellow;
    }
</style>
</head>

<body role="document">

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<? echo base_url(); ?>">Ekam</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <? $fwall = 0;
                    $pwall = 0;
                    $abt = 0; ?>
                    <li <?php if ($fwall == 0 && $pwall == 0 && $abt == 0) echo ' class="active" '; ?>><a href="#"><?= $data['title'] ?></a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>


    <div class="container">

        <div id="forrm" class="col-sm-12">
            <div class="col-sm-8 col-sm-offset-2">
                <center><img src="<? echo base_url(); ?>imagess/Ekamlogo.png" width="20%" /></center>
                <h1><?= $data['title'] ?></h1>
                <?php echo form_open('signin'); ?>
                <p>

                <div id=err><?php

                            echo "<center><h3>{$msg}</h3></center>";

                            echo validation_errors(); ?></div>
                </p>

                <?php //<p> </p>		 echo form_dropdown('ashram',$ashramlist, '', 'class="form-control btn-info" style="text-align: center;"');  
                ?>
                <input type=hidden name=ashram value="0101" />
                <p>
                    <?php


                    echo form_label('Email Address: ', 'email_address');
                    echo form_input('email_address', set_value('email_address'), 'id="email_address" autofocus  class="form-control" placeholder="Email Address" ');
                    ?>
                </p>

                <p>
                    <?php
                    echo form_label('Password:', 'password');
                    echo form_password('password', '', 'id="password" class="form-control" placeholder="Password"');
                    ?>
                </p>
                <!-- TODO Start: -->
                <br>
                <!-- TODO End: -->
                <p>
                    <?php echo form_submit('submit', 'Login', 'class="form-control btn-info" '); ?>
                </p>
                <!-- TODO Start: -->
                <br><br><br><br><br><br>
                <!-- TODO End: -->
                <?php echo form_close(); ?>


                <br>
            </div>
        </div>
    </div>

    <!-- TODO Start: -->
    <br>

    <div class="form-control btn-info transform ">
        <footer class="main-footer center">
            <center>
                <strong>Copyright &copy; 2016-2023 & Onwords <a href="https://register.vvmvp.org/ekam/index.php/signin">Central ICT , Art of Living International Center, Bangalore</a>.</strong>
                All rights reserved. <b>Version</b> 3.2.0
            </center>
        </footer>
    </div>



    <style>
        .transform {


            transform:
                rotateX(0deg) rotateZ(0deg);
            transform-style: preserve-3d;
            border-radius: 32px;
            box-shadow:
                1px 1px 0 1px #f9f9fb,
                -1px 0 38px 0 rgba(34, 33, 81, 0.01),
                38px 38px 38px 0 rgba(34, 33, 81, 0.25);
            transition:
                .4s ease-in-out transform,
                .4s ease-in-out box-shadow;

            &:hover {
                transform:
                    translate3d(0px, -16px, 0px)
                    /* rotateX(51deg)
			  rotateY(43deg); */
                    box-shadow: 1px 1px 0 1px #f9f9fb,
                    -1px 0 28px 0 rgba(34, 33, 81, 0.01),
                    54px 54px 28px -10px rgba(34, 33, 81, 0.15);
            }
        }
    </style>

    <!-- TODO End: -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<? echo  base_url(); ?>js/jquery.1.11.0.min.js"></script>
    <script src="<? echo  base_url(); ?>js/bootstrap.min.js"></script>
    <script>
        $('[rel="popover"]').popover();

        function validateEmail(email) {
            var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }

        $("#forrm form").submit(function(event) {
            if ($("[name='ashram']").val() == "") {
                alert("Please select the ashram first!");
                event.preventDefault();
                return false;
            }
            if ($("[name='email_address']").val() == "" || $("[name='password']").val() == "") {
                alert("Please fill the login credentials!");
                event.preventDefault();
                return false;
            }



            if (!validateEmail($("[name='email_address']").val())) {
                alert("Invalid email address!");
                event.preventDefault();
            }

        });
    </script>
</body>

</html>