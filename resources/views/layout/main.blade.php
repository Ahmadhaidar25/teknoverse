<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>Admin System&nbsp;|&nbsp;Teknoverse</title>
  <link href="{{url('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{url('admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{url('admin/css/ruang-admin.min.css')}}" rel="stylesheet">
  <link href="{{url('admin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <style type="text/css">
    .preloader {

      position: fixed;

      top: 0;

      left: 0;

      width: 100%;

      height: 100%;

      z-index: 9999;

      background-color: #fff;

    }

    .preloader .loading {

      position: absolute;

      left: 50%;

      top: 50%;

      transform: translate(-50%, -50%);

      font: 14px arial;

    }

    .fileUpload {
      position: relative;
      overflow: hidden;
      margin: 10px;
    }

    .fileUpload input.upload {
      position: absolute;
      top: 0;
      right: 0;
      margin: 0;
      padding: 0;
      font-size: 20px;
      cursor: pointer;
      opacity: 0;
      filter: alpha(opacity=0);
    }

    .spinner {
      display: none;
    }

    .fileUpload {
      position: relative;
      overflow: hidden;
      margin: 10px;
    }
    .fileUpload input.upload {
      position: absolute;
      top: 0;
      right: 0;
      margin: 0;
      padding: 0;
      font-size: 20px;
      cursor: pointer;
      opacity: 0;
      filter: alpha(opacity=0);
    }
  </style>
</head>

<body id="page-top">
  <div class="preloader">

    <div class="loading">
      <div class="spinner-grow text-light" style="width: 5rem; height: 5rem;" role="status">
        <img src="{{url('template/assets/img/teknoverse_logo.png')}}" alt="" class="img-fluid" style="width: 80px;">
      </div>

      <p>Harap tunggu..</p>
    </div>

  </div>
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('home')}}" style="background: #0CA8B4;">
        <div class="sidebar-brand-icon">
          <img src="{{url('template/assets/img/logo.png')}}">
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('home')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
          Menu
        </div>
        
        
        
        <li class="nav-item">
          <a class="nav-link" href="{{url('/master/about')}}">
            <i class="fas fa-fw fa-info"></i>
            <span>Master About</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{url('/master/service')}}">
            <i class="fas fa-fw fa-headset"></i>
            <span>Master Service</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{url('/master/vm')}}">
            <i class="fas fa-fw fa-lightbulb"></i>
            <span>Master Vision & Mision</span>
          </a>
        </li>

         <li class="nav-item">
          <a class="nav-link" href="{{url('/master/client')}}">
            <i class="bi bi-people-fill"></i>
            <span>Master Client</span>
          </a>
        </li>

        <hr class="sidebar-divider">
        <div class="sidebar-heading">
          Contact
        </div>

        <li class="nav-item">
          <a class="nav-link" href="{{url('/master/our/address')}}">
           <i class="bi bi-geo-alt-fill"></i>
           <span>Master Our Address</span>
         </a>
       </li>

       <li class="nav-item">
        <a class="nav-link" href="{{url('/master/email/us')}}">
          <i class="bi bi-envelope"></i>
          <span>Master Email Us</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('/master/call/us')}}">
         <i class="bi bi-telephone"></i>
         <span>Master Call Us</span>
       </a>
     </li>

     <li class="nav-item">
      <a class="nav-link" href="{{url('/master/time/work')}}">
        <i class="bi bi-clock"></i>
        <span>Master Time Work</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{url('/master/maps')}}">
        <i class="bi bi-map"></i>
        <span>Master Maps</span>
      </a>
    </li>

    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Article
    </div>

    <li class="nav-item">
      <a class="nav-link" href="{{url('/master/articel')}}">
       <i class="bi bi-card-text"></i>
       <span>Master Article</span>
     </a>
   </li>

   <hr class="sidebar-divider">
   <div class="sidebar-heading">
    Message
  </div>

  <li class="nav-item">
    <a class="nav-link" href="{{url('/message')}}">
     <i class="bi bi-chat-right-text"></i>
     <span>Message</span>
   </a>
 </li>


 <hr class="sidebar-divider">
 <div class="sidebar-heading">
  Fiturs
</div>

<li class="nav-item">
  <a class="nav-link" href="{{url('/updated/password')}}">
    <i class="fas fa-fw fa-lock"></i>
    <span>Updated Password</span>
  </a>
</li>
<hr class="sidebar-divider">
<div class="version" id="version-ruangadmin"></div>
</ul>
<!-- Sidebar -->
<div id="content-wrapper" class="d-flex flex-column">
  <div id="content">
    <!-- TopBar -->
    <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top" 
    style="background: #0CA8B4;">
    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
      <i class="fa fa-bars"></i>
    </button>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-search fa-fw"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
      aria-labelledby="searchDropdown">
      <form class="navbar-search">
        <div class="input-group">
          <input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?"
          aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search fa-sm"></i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </li>


  @php $locale = session()->get('locale'); @endphp
  <li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
    @switch($locale)
    @case('en')
    <img src="{{asset('admin/bendera/ind.png')}}" width="25px"> English
    @break
    @case('in')
    <img src="{{asset('admin/bendera/ind.png')}}" width="25px">Indonesia
    @break
    @default
    <img src="{{asset('admin/bendera/eng.png')}}" width="25px"> English
    @endswitch
    <span class="caret"></span>
  </a>
  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="lang/en"><img src="{{asset('admin/bendera/eng.png')}}" width="25px"> English</a>
    <a class="dropdown-item" href="lang/in"><img src="{{asset('admin/bendera/ind.png')}}" width="25px">Indonesia</a>
  </div>
</li>
<div class="topbar-divider d-none d-sm-block"></div>
<li class="nav-item dropdown no-arrow">
  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
  aria-haspopup="true" aria-expanded="false">
  @if(Auth::user()->avatar==null) 
  <img class="img-profile rounded-circle" src="{{url('admin/img/boy.png')}}" style="max-width: 60px">
  @else
  <img class="img-profile rounded-circle" src="{{url('file_avatar/'.auth()->user()->avatar)}}" style="max-width: 60px">
  @endif
  <span class="ml-2 d-none d-lg-inline text-white small">{{Auth::user()->name}}</span>
</a>
<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
  <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit-profil">
   @if(Auth::user()->avatar==null) 
   <img class="img-profile rounded-circle" src="{{url('admin/img/boy.png')}}" style="max-width: 30px">
   @else
   <img class="img-profile rounded-circle" src="{{url('file_avatar/'.auth()->user()->avatar)}}" style="max-width: 30px">
   @endif
   Avatar
 </a>
 <a class="dropdown-item" href="{{url('/user/profil')}}">
  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
  User Profil
</a>



<div class="dropdown-divider"></div>
<a class="dropdown-item btn1" href="{{url('logout')}}">
  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
  Logout
</a>
</div>
</li>
</ul>
</nav>
<!-- Topbar -->

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
  </div>

  @yield('content')
  <!--Row-->

</div>
<!---Container Fluid-->
</div>
<!-- Footer -->
<footer class="sticky-footer bg-white mt-3">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>copyright &copy; Teknoverse <script> document.write(new Date().getFullYear()); </script>
      </span>
    </div>
  </div>
</footer>
<!-- Footer -->
</div>
</div>

<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>


<!-- Modal edit foto profil -->
<div class="modal fade" id="edit-profil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Avatar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="form" action="{{url('/update/avatar')}}" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          @csrf
          @if(Auth::user()->avatar==null) 
          <img class="rounded mx-auto d-block" src="{{url('admin/img/boy.png')}}" style="width: 200px">
          @else
          <img class="rounded mx-auto d-block" src="{{url('file_avatar/'.auth()->user()->avatar)}}" style="width: 200px">
          @endif

          <center>
            <div class="fileUpload btn btn-warning">
              <span>Edit&nbsp;<i class="bi bi-pencil-square"></i></span>
              <input id="uploadBtn" type="file" class="upload" name="avatar">
            </div>
          </center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">
            <div class="spinner"><i role="status" class="spinner-border spinner-border-sm"></i></div>
            <div class="hide-text">Update</div>
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript" src="{{url('admin/tinymce/js/tinymce/plugins/codesample/plugin.min.js')}}"></script>
<script type="text/javascript" src="{{url('admin/tinymce/js/tinymce/tinymce.min.js')}}"></script>
<script src="{{url('admin/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{url('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<script src="{{url('admin/js/ruang-admin.min.js')}}"></script>
<script src="{{url('admin/vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{url('admin/js/demo/chart-area-demo.js')}}"></script>  
<script src="{{url('admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
<script type="text/javascript">
  $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  
  $(document).ready(function () {
    $(".preloader").fadeOut(1000);

  })

  $(".btn1").click(function(e){
    e.preventDefault();
    var logout = $(this).attr('href');
    Swal.fire({
      title: 'Yakin',
      text: "Akan keluar dari system",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location = logout;
      }
    })
  })

  $(".btn2").click(function(e){
    e.preventDefault();
    var hapus = $(this).attr('href');
    Swal.fire({
      title: 'sure',
      text: "the article will be deleted",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location = hapus;
      }
    })
  })

  document.getElementById("uploadBtn").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
  };

  (function () {
    $('.form').on('submit', function () {
      $('.button-prevent').attr('disabled', 'true');
      $('.spinner').show();
      $('.hide-text').hide();
    })
  })();



  $(document).ready(function() {


    var readURL = function(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
          $('.avatar').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
      }
    }
    

    $(".file-upload").on('change', function(){
      readURL(this);
    });
  });

  document.getElementById("uploadBtn").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
  };

//tinymce
tinymce.init({
  selector: 'textarea#article',
  plugins: 'image code',
  toolbar: 'undo redo | link image | code',
   plugins: 'pagebreak',
  

  toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
  toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | inserttime preview | forecolor backcolor",
  toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft",

  menubar: false,
  toolbar_items_size: 'small',

  style_formats: [
  {title: 'Bold text', inline: 'b'},
  {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
  {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
  {title: 'Example 1', inline: 'span', classes: 'example1'},
  {title: 'Example 2', inline: 'span', classes: 'example2'},
  {title: 'Table styles'},
  {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
  ],

  templates: [
  {title: 'Test template 1', content: 'Test 1'},
  {title: 'Test template 2', content: 'Test 2'}
  ],


  /* enable title field in the Image dialog*/
  image_title: true,
  /* enable automatic uploads of images represented by blob or data URIs*/
  automatic_uploads: true,
  /*
    URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
    images_upload_url: 'postAcceptor.php',
    here we add custom filepicker only to Image dialog
    */
    file_picker_types: 'image',
    /* and here's our custom image picker*/
    file_picker_callback: function (cb, value, meta) {
      var input = document.createElement('input');
      input.setAttribute('type', 'file');
      input.setAttribute('accept', 'image/*');

    /*
      Note: In modern browsers input[type="file"] is functional without
      even adding it to the DOM, but that might not be the case in some older
      or quirky browsers like IE, so you might want to add it to the DOM
      just in case, and visually hide it. And do not forget do remove it
      once you do not need it anymore.
      */

      input.onchange = function () {
        var file = this.files[0];

        var reader = new FileReader();
        reader.onload = function () {
        /*
          Note: Now we need to register the blob in TinyMCEs image blob
          registry. In the next release this part hopefully won't be
          necessary, as we are looking to handle it internally.
          */
          var id = 'blobid' + (new Date()).getTime();
          var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
          var base64 = reader.result.split(',')[1];
          var blobInfo = blobCache.create(id, file, base64);
          blobCache.add(blobInfo);

          /* call the callback and populate the Title field with the file name */
          cb(blobInfo.blobUri(), { title: file.name });
        };
        reader.readAsDataURL(file);
      };

      input.click();
    },
    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'

  });
</script>
</body>
@include('sweetalert::alert')

</html>