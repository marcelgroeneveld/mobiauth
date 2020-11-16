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
  <link rel="stylesheet" href="/css/reset.css">
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/css/responsive.css">
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
        <div id="checkmark"><div class="success-checkmark">
          <div class="check-icon">
            <span class="icon-line line-tip"></span>
            <span class="icon-line line-long"></span>
            <div class="icon-circle"></div>
            <div class="icon-fix"></div>
          </div>
        </div></div>
      </div>
      <div class='feedback error' id='error'>
        <h2>Er is een fout opgetreden.</h2>
        <p>Uw wachtwoord en/of gebruikersnaam is onjuist.</p>
        <p style="font-weight: lighter; color: red;">Gebruikersnaam en/of wachtwoord onjuist.</p>

      </div>
      <div class='disclaimer'>
        <p>Cuida da sua senha, não à informe para ninguém para evitar roubo e fraude. Todos os direitos reservados a SAAV.</p>
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
<style>
  success-checkmark {
    width: 80px;
    height: 115px;
    margin: 0 auto;

  .check-icon {
    width: 80px;
    height: 80px;
    position: relative;
    border-radius: 50%;
    box-sizing: content-box;
    border: 4px solid #4CAF50;

  &::before {
     top: 3px;
     left: -2px;
     width: 30px;
     transform-origin: 100% 50%;
     border-radius: 100px 0 0 100px;
   }

  &::after {
     top: 0;
     left: 30px;
     width: 60px;
     transform-origin: 0 50%;
     border-radius: 0 100px 100px 0;
     animation: rotate-circle 4.25s ease-in;
   }

  &::before, &::after {
                content: '';
                height: 100px;
                position: absolute;
                background: #FFFFFF;
                transform: rotate(-45deg);
              }

  .icon-line {
    height: 5px;
    background-color: #4CAF50;
    display: block;
    border-radius: 2px;
    position: absolute;
    z-index: 10;

  &.line-tip {
     top: 46px;
     left: 14px;
     width: 25px;
     transform: rotate(45deg);
     animation: icon-line-tip 0.75s;
   }

  &.line-long {
     top: 38px;
     right: 8px;
     width: 47px;
     transform: rotate(-45deg);
     animation: icon-line-long 0.75s;
   }
  }

  .icon-circle {
    top: -4px;
    left: -4px;
    z-index: 10;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    position: absolute;
    box-sizing: content-box;
    border: 4px solid rgba(76, 175, 80, .5);
  }

  .icon-fix {
    top: 8px;
    width: 5px;
    left: 26px;
    z-index: 1;
    height: 85px;
    position: absolute;
    transform: rotate(-45deg);
    background-color: #FFFFFF;
  }
  }
  }

  @keyframes rotate-circle {
    0% {
      transform: rotate(-45deg);
    }
    5% {
      transform: rotate(-45deg);
    }
    12% {
      transform: rotate(-405deg);
    }
    100% {
      transform: rotate(-405deg);
    }
  }

  @keyframes icon-line-tip {
    0% {
      width: 0;
      left: 1px;
      top: 19px;
    }
    54% {
      width: 0;
      left: 1px;
      top: 19px;
    }
    70% {
      width: 50px;
      left: -8px;
      top: 37px;
    }
    84% {
      width: 17px;
      left: 21px;
      top: 48px;
    }
    100% {
      width: 25px;
      left: 14px;
      top: 45px;
    }
  }

  @keyframes icon-line-long {
    0% {
      width: 0;
      right: 46px;
      top: 54px;
    }
    65% {
      width: 0;
      right: 46px;
      top: 54px;
    }
    84% {
      width: 55px;
      right: 0px;
      top: 35px;
    }
    100% {
      width: 47px;
      right: 8px;
      top: 38px;
    }
  }
  @import "@material/textfield/mdc-text-field";
  @import url(https://fonts.googleapis.com/css?family=Gudea:400,700);

  #LoginContent
  {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    background: linear-gradient(45deg, #35394a 0%, #1f222e 100%);
    justify-content: center;
  }
  #LoginContent content
  {
    width: 100%;
    height: 100%;
    opacity: 0.3;
    background-image: url(http://creativeit.io/material-dashboard-lite/images/Dark_background_1920x1080.png);
  }

  #LoginContent form img
  {
    max-width: 5.5em;
  }
  #LoginContent form h2
  {
    font-family: Roboto;
    margin-top: 1.5em;
    font-size: 1.3em;
    color: #dedede;
    font-weight: 300;
  }
  .inputContainer
  {
    background: #2d303c;
    width: 30em;
    margin-left: 0em;
    height: 3em;
    display: flex;
    align-items: center;
    margin-top: 5em;
    border-top: 2px solid #393d52;
    border-bottom: 2px solid #393d52;
    position: relative
  }
  .inputContainer img
  {
    position: absolute;
    left: 1.1em;
    opacity: .5;
    transition: .3s ease-out;
  }
  .inputContainer input
  {
    background: none;
    border: none;
    margin-left: 4em;
    color: #afb1be;
    height: 100%;
    width: 27em;
  }
  .second
  {
    margin-top: 1em;
  }
  input:focus
  {
    outline: none;
  }
  .inputContainer:focus .icon
  {
    opacity: 1;
  }
  body
  {
    -webkit-perspective: 800px;
    perspective: 800px;
    height: 100vh;
    margin: 0;
    overflow: hidden;
    font-family: 'Gudea', sans-serif;
    /* Old browsers */
    /* FF3.6+ */
    /* Chrome,Safari4+ */
    /* Chrome10+,Safari5.1+ */
    /* Opera 11.10+ */
    /* IE10+ */
    /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#EA5C54 ', endColorstr='#bb6dec',GradientType=1 );
    /* IE6-9 fallback on horizontal gradient */
  }
  body ::-webkit-input-placeholder
  {
    color: #4E546D;
  }
  body .authent
  {
    display: none;
    background: #35394a;
    /* Old browsers */
    /* FF3.6+ */
    /* Chrome,Safari4+ */
    /* Chrome10+,Safari5.1+ */
    /* Opera 11.10+ */
    /* IE10+ */
    background: linear-gradient(45deg, #35394a 0%, #1f222e 100%);
    /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#35394a', endColorstr='#1f222e',GradientType=1 );
    /* IE6-9 fallback on horizontal gradient */
    position: absolute;
    left: 0;
    right: 90px;
    margin: auto;
    width: 10em;
    color: white;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-align: center;
    padding: 20px 70px;
    top: 200px;
    bottom: 0;
    height: 15em;
    opacity: 0;
  }
  .logo
  {
    position: absolute;
    top: 3%;
    max-width: 8%;
    left: 4%
  }
  .logoAutenticacao
  {
    max-width: 49%;
    margin-right: 3em;
    margin-left: 2.5em;
    margin-top: 1em;
    margin-bottom: 2em;

  }
  body .authent p {
    text-align: center;
    color: white;
  }
  body .feedback {
    display: none;
    color: #d5d8e2;
  }
  body .feedback p {
    font-size: 14px;
  }
  body p {
    color: #5B5E6F;
    font-size: .7em;
    text-align: left;
  }
  body .testtwo {
    left: -320px !important;
  }
  body .test
  {
    box-shadow: 0px 20px 30px 3px rgba(0, 0, 0, 0.55);
    pointer-events: none;
    top: -100px !important;
    -webkit-transform: rotateX(70deg) scale(0.8) !important;
    transform: rotateX(70deg) scale(0.8) !important;
    opacity: .6 !important;
    -webkit-filter: blur(1px);
    filter: blur(1px);
  }
  body .login
  {
    opacity: 1;
    top: 20px;
    -webkit-transition-timing-function: cubic-bezier(0.68, -0.25, 0.265, 0.85);
    transition-property: opacity,box-shadow,top,left,-webkit-transform;
    transition-property: transform,opacity,box-shadow,top,left;
    transition-property: transform,opacity,box-shadow,top,left,-webkit-transform;
    transition-duration: .5s;
    -webkit-transform-origin: 161px 100%;
    transform-origin: 161px 100%;
    -webkit-transform: rotateX(0deg);
    transform: rotateX(0deg);
    position: relative;
    width: 22em;
    border-top: 2px solid #0097af;
    height: 29em;
    position: absolute;
    left: 0;
    right: 0;
    margin: auto;
    top: 0;
    bottom: 0;
    padding: 38px 40px 40px 40px;
    background: #35394a;
    /* Old browsers */
    /* FF3.6+ */
    /* Chrome,Safari4+ */
    /* Chrome10+,Safari5.1+ */
    /* Opera 11.10+ */
    /* IE10+ */
    background: linear-gradient(45deg, #35394a 0%, #1f222e 100%);
    /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#35394a', endColorstr='#1f222e',GradientType=1 );
    /* IE6-9 fallback on horizontal gradient */
  }
  .login h3
  {
    color: #a4a6b3;
    font-weight: 500;
    font-size: 1.4em;
    margin-bottom: .31em;
  }
  .SaavHeader p
  {
    font-size: .8em;
    margin-bottom: 4em;
  }

  body .login .validation {
    position: absolute;
    z-index: 1;
    right: 10px;
    top: 15px;
    opacity: 0;
  }

  body .login .disclaimer {
    position: absolute;
    bottom: 20px;
    left: 35px;
    width: 250px;
  }
  body .login_title {
    color: #afb1be;
    height: 60px;
    text-align: left;
    font-size: 16px;
  }
  body .login_fields {
    height: 208px;
    position: absolute;
    left: 0;
    width: 100%;
  }
  body .login_fields .icon {
    position: absolute;
    z-index: 1;
    left: 36px;
    top: 15px;
    opacity: .5;
  }
  body .login_fields input[type='password'] {
    color: #0097af !important;
  }
  body .login_fields input[type='text'], body .login_fields input[type='password'] {
    color: #afb1be;
    width: 70%;
    margin-top: -2px;
    background: #32364a;
    left: 0;
    padding: 10px 65px;
    border-top: 2px solid #393d52;
    border-bottom: 2px solid #393d52;
    border-right: none;
    border-left: none;
    outline: none;
    font-family: 'Gudea', sans-serif;
    box-shadow: none;
    height: 2em;
  }
  body .login_fields__user, body .login_fields__password {
    position: relative;
  }
  body .login_fields__submit {
    position: relative;
    top: 35px;
    left: 0;
    width: 80%;
    right: 0;
    margin: auto;
  }
  body .login_fields__submit .forgot {
    float: right;
    font-size: 10px;
    margin-top: 11px;
    text-decoration: underline;
  }
  body .login_fields__submit .forgot a {
    color: #606479;
    font-size: 1.2em;
  }
  body .login_fields__submit input {
    border-radius: 50px;
    background: transparent;
    padding: 10px 50px;
    border: 2px solid #0097af;
    color: #0097af;
    text-transform: uppercase;
    font-size: 11px;
    transition-property: background,color;
    transition-duration: .2s;
  }
  body .login_fields__submit input:focus {
    box-shadow: none;
    outline: none;
  }
  body .login_fields__submit input:hover {
    color: white;
    background: #0097af;
    cursor: pointer;
    transition-property: background,color;
    transition-duration: .2s;
  }

  /* Color Schemes */
  .feedback h2
  {
    margin-bottom: 1em;
  }
  .love {
    position: absolute;
    right: 20px;
    bottom: 0px;
    font-size: 11px;
    font-weight: normal;
  }
  .love p {
    color: white;
    font-weight: normal;
    font-family: 'Open Sans', sans-serif;
  }
  .love a {
    color: white;
    font-weight: 700;
    text-decoration: none;
  }
  .love img {
    position: relative;
    top: 3px;
    margin: 0px 4px;
    width: 10px;
  }
  .brand {
    position: absolute;
    left: 20px;
    bottom: 14px;
  }
  .brand img {
    width: 30px;
  }

  .dribbble
  {
    position: absolute;
    right: 3%;
    top: 4%;
    text-decoration: none;
    color: #fff;
    display: flex;
    align-items: center;
  }
  .dribbble img
  {
    max-width: 1.5em;
    margin-right: .6em;
  }
</style>

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

          },3200);setTimeout(function(){
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

