<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Grexa - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <link rel="stylesheet" href="custom.css">
  <!-- Custom style CSS -->
  
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body class="background-image-body">
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
          <div class="login-brand login-brand-color">
            	<img alt="image" src="assets/img/logo.png" />
              Grexa
            </div>
            <div class="card">
              <div class="card-header card-header-auth">
                <h4>Forgot Password</h4>
              </div>
              <!-- <center>
              <div class="logo-auth">
              	<img alt="image" src="assets/img/logo.png" />
          	  </div>
          	  <div>
          	  	<span class="logo-name-auth">Grexa</span>
          	  </div>
          	  </center> -->
              <div class="card-body">
                <p class="text-muted">We will send a link to reset your password</p>
                <form id='forgotForm'>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                  </div>
                  <div class="form-group">
                      Forgot Password
                    </button>
                  </div>
                </form>
                <button type="button" class="btn btn-lg btn-block btn-auth-color"  value='submit' tabindex="4" id='resetBtn'>Reset Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src='https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js'></script>
  <script src='assets/js/notify.min.js'></script>
  <script type="text/javascript">
    $('#resetBtn').click(function(e){
      var btnName = $(this).val();
      if($('#forgotForm').valid()){
        var data = $('#email').val();
        var action='resetPassword';
      $.post('forgot_process.php',{
        data,
        action,
      },
      function(response,status){
        var obj = JSON.parse(response);
        $.notify(obj.message,obj.status);
        if(obj.status=='success');
        $('#forgotForm')[0].reset();
      });
      }
    });
    
  </script>
</body>
</html>