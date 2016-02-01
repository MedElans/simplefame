<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../../css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="../../style.css" type="text/css" />
    <link rel="stylesheet" href="../../css/dark.css" type="text/css" />
    <link rel="stylesheet" href="../../css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="../../css/animate.css" type="text/css" />
    <link rel="stylesheet" href="../../css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="../../css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->

    <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="../../js/jquery.js"></script>
    <script type="text/javascript" src="../../js/plugins.js"></script>

    <!-- Document Title
    ============================================= -->
    <title>Simple Fame</title>

</head>

<body class="stretched">

    <div id="wrapper" class="clearfix">

        <!-- Slider -->
        <?php include('sections/navigation.html'); ?>

        <!-- Slider -->
        <?php include('sections/team.html'); ?>

    </div>

    <script type="text/javascript" src="../../js/functions.js"></script>

    <script type="text/javascript">
        $("#widget-subscribe-form").validate({
            submitHandler: function(form) {
                $(form).find('.input-group-addon').find('.icon-email2').removeClass('icon-email2').addClass('icon-line-loader icon-spin');
                $(form).ajaxSubmit({
                    target: '#widget-subscribe-form-result',
                    success: function() {
                        $(form).find('.input-group-addon').find('.icon-line-loader').removeClass('icon-line-loader icon-spin').addClass('icon-email2');
                        $('#widget-subscribe-form').find('.form-control').val('');
                        $('#widget-subscribe-form-result').attr('data-notify-msg', $('#widget-subscribe-form-result').html()).html('');
                        SEMICOLON.widget.notifications($('#widget-subscribe-form-result'));
                    }
                });
            }
        });
    </script>

</body>
</html>