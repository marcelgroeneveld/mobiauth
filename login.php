<!DOCTYPE html>
<html>
<head>
  <title>Login - MobiAuth</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta author="">
  <link rel="icon" href="img/logo.png">
  <meta property="og:type" content="website">
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="/css/login.css">
</head>
<body>

<section id='LoginContent'>
  <form id="login_form" action='/login' method='POST' enctype="application/x-www-form-urlencoded">
    <div class='login'>
      <div class='SaavHeader'>
        <h3>MobiAuth</h3>
        <p>Gelieve in te loggen.</p>
      </div>
      <div class='login_title'>
        <span>Log alstublieft in met gebruikersnaam en wachtwoord.</span>
      </div>
      <div class='login_fields'>
        <div class='login_fields__user'>
          <div class='icon'>
            <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/user_icon_copy.png'>
          </div>
          <input placeholder='Gebruikersnaam' name="username" type='text' id='UsuarioInput'>
          <div class='validation'>
            <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png'>
          </div>
          </input>
        </div>
        <div class='login_fields__password'>
          <div class='icon'>
            <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/lock_icon_copy.png'>
          </div>
          <input placeholder='Wachtwoord'name="password" id='SenhaInput' type='password'>
          <div class='validation'>
            <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png'>
          </div>
        </div>
        <div class='login_fields__submit'>
          <input type='submit' id='loginButton' value='Log In'>                  <div class='forgot'>
          <a href='/forgot'>Wachtwoord en/of gebruikersnaam vergeten?</a>
        </div>
        </div>
      </div>
      <div class='feedback success'>
        <h2>Goedgekeurd.</h2>


        <p class="success">U wordt doorgestuurd.</p>
          <div class="circle-loader success">
              <div id="checkmark_div" class="checkmark draw success"></div>
          </div>

      </div>
      <div class='feedback error' id='error'>
        <h2>Er is een fout opgetreden.</h2>
        <p>Uw wachtwoord en/of gebruikersnaam is onjuist.</p>
        <p style="font-weight: lighter; color: red;">Gebruikersnaam en/of wachtwoord onjuist.</p>

      </div>
      <div class='disclaimer'>
        <p>Copright 2020 | Mobiauth is een geregistreerd handelsmerk. Naar een project voor de Haagse Hogeschool.</p>
      </div>
    </div>
  </form>
  <div class='authent'>
    <img src="https://image.ibb.co/mco6FL/logo-mini.png" class='logoAutenticacao'>
    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/puff.svg'>
    <p>Verifieren...</p>
  </div>

</section>
</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>

<script>

  $("#loginButton").on('click', function(e)
  {
    e.preventDefault();

    $('.login').addClass('test')
    setTimeout(function(){
      $('.login').addClass('testtwo')
    },300);
    setTimeout(function(){
      $(".authent").show().animate({right:-320},{easing : 'easeOutQuint' ,duration: 600, queue: false });
      $(".authent").animate({opacity: 1},{duration: 200, queue: false }).addClass('visible');
    },350);




    var form = $('#login_form');
    var url = "auth";

    $.ajax({
      type: "POST",
      url: url,
      data: form.serialize(),
      success: function(data) {

        if (data == "true") {

          setTimeout(function(){
            $(".authent").show().animate({right:90},{easing : 'easeOutQuint' ,duration: 600, queue: false });
            $(".authent").animate({opacity: 0},{duration: 200, queue: false }).addClass('visible');
            $('.login').removeClass('testtwo')
          },2500);
          setTimeout(function(){
            $('.login').removeClass('test')
            $('.login div').fadeOut(123);
          },2800);
          setTimeout(function(){
            $('.success').fadeIn();
              $('#checkmark_div').removeAttr('style');

          },3200); setTimeout(function(){
                $('.circle-loader').toggleClass('load-complete');
                $('.checkmark').toggle();

          },4000);

          setTimeout(function(){
                window.location.replace("https://mobiauth.nl");


            },5000);





        } else if (data == "false") {

          setTimeout(function(){
            $(".authent").show().animate({right:90},{easing : 'easeOutQuint' ,duration: 600, queue: false });
            $(".authent").animate({opacity: 0},{duration: 200, queue: false }).addClass('visible');
            $('.login').removeClass('testtwo')
          },2500);
          setTimeout(function(){
            $('.login').removeClass('test')
          },2800);
          setTimeout(function(){
            $(".authent").removeClass('visible');
            $(".authent").hide();
            $('#error').show();

          },3200);
        }
      }
    });




  });




</script>
</html>

