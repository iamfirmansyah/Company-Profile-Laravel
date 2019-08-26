<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    {{-- <link rel="apple-touch-icon" sizes="76x76" href="{{asset ('img/apple-icon.png')}}"> --}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>MindStores</title>    
    <link rel="icon" type="image/png" href="{{asset ('img/alfamind/Mind_logo_header.png')}}">
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <!-- CSS Files -->
  <link href="{{asset('/css/material-dashboard.css')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('/demo/demo.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset ('/css/btn.css')}}">
  <link rel="stylesheet" href="{{asset('/css/all.css')}}">
  {{-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> --}}
  <link rel="stylesheet" href="{{asset('/css/bootstrap-toggle.css')}}">
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/waves.min.css')}}">
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="{{asset('/img/sidebar-1.jpg')}}">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
      <a href="admin" class="simple-text logo-normal">
      <img src="{{asset('./img/logs.png')}}" alt="" style="max-width:30%;">
      </a>
    </div>

@yield('content')

<footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
          <div class="float-right">
            &copy;
            <a href="https://www.mymindstores.com" target="_blank" >Mind Stores</a> 
          </div>
        </nav>
        </div>
      </footer>
    </div>
  </div>  
{{-- <script src="{{ asset('js/jquery.min.js') }}"></script> --}}
<script src="{{asset ('/js/core/jquery.min.js') }}"></script>
@yield('scripts')
<script src="{{asset ('/js/core/bootstrap-material-design.min.js')}}"></script>
<script src="{{ asset('js/autoNumeric.js') }}"></script>
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    {{-- JK EDITOR --}}
<script src="{{asset('/ckeditor/ckeditor.js')}}"></script>
<script src="{{ asset('js/waves.min.js') }}"></script>
 <!--   Core JS Files   -->
  <script src="{{asset ('/js/core/popper.min.js')}}"></script>
  <script src="{{asset ('/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!-- Plugin for the momentJs  -->
  <script src="{{asset ('/js/plugins/moment.min.js')}}"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="{{asset ('/js/plugins/sweetalert2.js')}}"></script>
  <!-- Forms Validations Plugin -->
  <script src="{{asset ('/js/plugins/jquery.validate.min.js')}}"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="{{asset ('/js/plugins/jquery.bootstrap-wizard.js')}}"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="{{asset ('/js/plugins/bootstrap-selectpicker.js')}}"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="{{asset ('/js/plugins/bootstrap-datetimepicker.min.js')}}"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="{{asset ('/js/plugins/jquery.dataTables.min.js')}}"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="{{asset ('/js/plugins/bootstrap-tagsinput.js')}}"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="{{asset('/js/plugins/jasny-bootstrap.min.js')}}"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="{{asset ('/js/plugins/fullcalendar.min.js')}}"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="{{asset ('/js/plugins/jquery-jvectormap.js')}}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{asset('/js/plugins/nouislider.min.js')}}"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="{{asset('/js/plugins/arrive.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="{{asset ('/js/plugins/chartist.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('/js/material-dashboard.js?v=2.1.1')}}" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('/demo/demo.js')}}"></script>
  <script>
    
    function previewFoto(input) {
      
      if (input.files && input.files[0]) {
        var fileReader = new FileReader();
        var imageFile = input.files[0];
        
        if(imageFile.type == "image/png" || imageFile.type == "image/jpeg") {
          fileReader.readAsDataURL(imageFile);
          
                 fileReader.onload = function (e) {
                   $('#preview-foto').attr('src', e.target.result);
                 }
             }
             else {
               alert("your file is not image");
             }
         }
        }
  
        $("#input-foto").change(function(){
         previewFoto(this);
     });
     

     function openCity(evt, cityName) {
              var i, tabcontent, tablinks;
              tabcontent = document.getElementsByClassName("tabcontent");
              for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
              }
              tablinks = document.getElementsByClassName("tablinks");
              for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
              }
              document.getElementById(cityName).style.display = "block";
              evt.currentTarget.className += " active";
            }
            
            // Get the element with id="defaultOpen" and click on it
            // document.getElementById("defaultOpen").click();
            
            
            
function previewImage(input) {
  
  if (input.files && input.files[0]) {
    var fileReader = new FileReader();
    var imageFile = input.files[0];
    
    if(imageFile.type == "image/png" || imageFile.type == "image/jpeg") {
      fileReader.readAsDataURL(imageFile);
      
      fileReader.onload = function (e) {
        $('#preview-image').attr('src', e.target.result);
      }
    }
    else {
      alert("your file is not image");
    }
  }
}

$("[name='input-image']").change(function(){
  previewImage(this);
});

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
              for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
              }
              tablinks = document.getElementsByClassName("tablinks");
              for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
              }
              document.getElementById(cityName).style.display = "block";
              evt.currentTarget.className += " active";
            }
            
            // Get the element with id="defaultOpen" and click on it
            document.getElementById("defaultOpen").click();

            $(function() {
              // Multiple images preview in browser
              var imagesPreview = function(input, placeToInsertImagePreview) {
                if (input.files) {
                  var filesAmount = input.files.length;
                  for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
                      $($.parseHTML('<img>')).attr('src',event.target.result).appendTo(placeToInsertImagePreview);
                    }
                    reader.readAsDataURL(input.files[i]);
                  }
        }
      };
    $('input#uploadImage').on('change', function() {
      imagesPreview(this, '.div_image');
    });
  });

  $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        
        $sidebar_img_container = $sidebar.find('.sidebar-background');
        
        $full_page = $('.full-page');
        
        $sidebar_responsive = $('body > .navbar-collapse');
        
        window_width = $(window).width();
        
        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();
        
        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }
          
        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });
        
        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');
          
          $(this).siblings().removeClass('active');
          $(this).addClass('active');
          
          var new_color = $(this).data('color');
          
          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }
          
          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }
          
          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });
        
        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');
          
          var new_color = $(this).data('background-color');
          
          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });
        
        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');
          
          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');
          
          
          var new_image = $(this).find("img").attr('src');
          
          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }
          
          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');
            
            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');
            
            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }
          
          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });
        
        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');
          
          $input = $(this);
          
          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }
            
            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }
            
            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }
            
            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');
          
          $input = $(this);
          
          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;
            
            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();
            
          } else {
            
            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');
            
            setTimeout(function() {
              $('body').addClass('sidebar-mini');
              
              md.misc.sidebar_mini_active = true;
            }, 300);
          }
          
          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>

  <script>
  function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
}
$("#imgInp").change(function() {
  readURL(this);
});
</script>
<script src="{{ asset('/js/bootstrap-toggle.js')}}"></script>

</body>

</html>