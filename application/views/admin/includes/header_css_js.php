<!DOCTYPE html>
<html lang="en">
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php if(isset($title)): echo  $title; else: echo  'Amer E-commers'; endif;  ?> </title>
  <link rel="shortcurt icon" href="<?php echo base_url();?>libs/title_logo.png"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>libs/BackEnd/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>libs/BackEnd/assets/css/minified/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>libs/BackEnd/assets/css/minified/core.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>libs/BackEnd/assets/css/minified/components.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>libs/BackEnd/assets/css/minified/colors.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>libs/BackEnd/assets/css/extras/animate.min.css" rel="stylesheet" type="text/css">
  <!-- /global stylesheets -->


  <!-- Swwet Alert Message Box -->
  <script src="<?php echo base_url();?>libs/BackEnd/sweetAlert_script/sweetalert.min.js"></script>


  <!-- Core JS files -->
  <script type="text/javascript" src="<?php echo base_url();?>libs/BackEnd/assets/js/plugins/loaders/pace.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>libs/BackEnd/assets/js/core/libraries/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>libs/BackEnd/assets/js/core/libraries/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>libs/BackEnd/assets/js/plugins/loaders/blockui.min.js"></script>
  <!-- /core JS files -->


<!-- For Fancy Box -->
<script type="text/javascript" src="<?php echo base_url()?>libs/BackEnd/fancyBox/js/jquery.fancybox.js?v=2.1.5"></script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>libs/BackEnd/fancyBox/css/jquery.fancybox.css?v=2.1.5" media="screen" />

<script type="text/javascript">

        $(document).ready(function() {

            $('.fancybox').fancybox({

            padding: 0,

                openEffect : 'elastic',

                openSpeed  : 150,

                closeEffect : 'elastic',

                closeSpeed  : 150,

                maxWidth    : "60%",

                autoSize    : true,

                autoScale   : true,

                fitToView   : true,

                helpers : {

                    title : {

                        type : 'inside'

                    },

                    overlay : {

                        css : {

                            'background' : 'rgba(0,0,0,0.3)'

                        }

                    }

                }       

            });

            $('.fancyboxview').fancybox({

            padding: 0,

                openEffect : 'elastic',

                openSpeed  : 150,



                closeEffect : 'elastic',

                closeSpeed  : 150,

                maxWidth    : "95%",

                autoSize    : true,

                autoScale   : true,

                fitToView   : true,



                helpers : {

                    title : {

                        type : 'inside'

                    },

                    overlay : {

                        css : {

                            'background' : 'rgba(0,0,0,0.3)'

                        }

                    }

                }       

            });

        });    

</script>



<!-- CK editor -->
  <script type="text/javascript" src="<?php echo base_url();?>libs/BackEnd/assets/js/plugins/editors/summernote/summernote.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>libs/BackEnd/assets/js/plugins/forms/styling/uniform.min.js"></script>


  <!-- Theme JS files -->
  <script type="text/javascript" src="<?php echo base_url();?>libs/BackEnd/assets/js/plugins/notifications/pnotify.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>libs/BackEnd/assets/js/plugins/notifications/noty.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>libs/BackEnd/assets/js/plugins/notifications/jgrowl.min.js"></script>

  <!-- Theme JS files -->
   <script type="text/javascript" src="<?php echo base_url();?>libs/BackEnd/assets/js/core/app.js"></script>


  <!-- Ck editor -->
   <script type="text/javascript" src="<?php echo base_url();?>libs/BackEnd/assets/js/pages/editor_summernote.js"></script>

   <script type="text/javascript" src="<?php echo base_url();?>libs/BackEnd/assets/js/pages/components_notifications_other.js"></script>
   <script type="text/javascript" src="<?php echo base_url();?>libs/BackEnd/assets/js/pages/components_notifications_pnotify.js"></script>

 <!-- For Data Table -->
  <!-- Theme JS files -->
  <script type="text/javascript" src="<?php echo base_url();?>libs/BackEnd/assets/js/plugins/tables/datatables/datatables.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>libs/BackEnd/assets/js/pages/datatables_advanced.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>libs/BackEnd/assets/js/pages/datatables_basic.js"></script>
  <!-- /theme JS files -->

    <!-- Theme JS files -->
  <script type="text/javascript" src="<?php echo base_url();?>libs/BackEnd/assets/js/plugins/uploaders/fileinput.min.js"></script>

  <script type="text/javascript" src="<?php echo base_url();?>libs/BackEnd/assets/js/pages/uploader_bootstrap.js"></script>
  <!-- /theme JS files -->
  
  <script type="text/javascript" src="<?php echo base_url();?>libs/BackEnd/assets/js/pages/form_layouts.js"></script>

 
  <script type="text/javascript" src="<?php echo base_url();?>libs/BackEnd/assets/js/plugins/forms/validation/validate.min.js"></script>

  <script type="text/javascript" src="<?php echo base_url();?>libs/BackEnd/assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>

  <script type="text/javascript" src="<?php echo base_url();?>libs/BackEnd/assets/js/plugins/forms/inputs/touchspin.min.js"></script>

  <script type="text/javascript" src="<?php echo base_url();?>libs/BackEnd/assets/js/plugins/forms/selects/select2.min.js"></script>
  
  <script type="text/javascript" src="<?php echo base_url();?>libs/BackEnd/assets/js/plugins/forms/styling/switch.min.js"></script>
  
  <script type="text/javascript" src="<?php echo base_url();?>libs/BackEnd/assets/js/plugins/forms/styling/switchery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>libs/BackEnd/assets/js/plugins/forms/styling/uniform.min.js"></script>

  <script type="text/javascript" src="<?php echo base_url();?>libs/BackEnd/assets/js/pages/form_validation.js"></script>


 <script type="text/javascript" src="<?php echo base_url();?>libs/BackEnd/assets/js/pages/form_checkboxes_radios.js"></script>

  <!-- For Login Page -->
    <!-- Theme JS files -->
  <script type="text/javascript" src="<?php echo base_url();?>libs/BackEnd/assets/js/pages/login.js"></script>
  <!-- /theme JS files -->


  <!-- For Animation Theme -->
  <!-- Theme JS files -->
  <script type="text/javascript" src="<?php echo base_url();?>libs/BackEnd/assets/js/pages/components_animations.js"></script>
  <!-- /theme JS files -->





</head>