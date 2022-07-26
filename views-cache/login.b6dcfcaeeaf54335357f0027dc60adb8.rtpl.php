<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html><head>
  <!-- Standard Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Sisweb Login</title>
  <link rel="stylesheet" type="text/css" href="../res/semantic/dist/components/reset.css">
  <link rel="stylesheet" type="text/css" href="../res/semantic/dist/components/site.css">

  <link rel="stylesheet" type="text/css" href="../res/semantic/dist/components/container.css">
  <link rel="stylesheet" type="text/css" href="../res/semantic/dist/components/grid.css">
  <link rel="stylesheet" type="text/css" href="../res/semantic/dist/components/header.css">
  <link rel="stylesheet" type="text/css" href="../res/semantic/dist/components/image.css">
  <link rel="stylesheet" type="text/css" href="../res/semantic/dist/components/menu.css">

  <link rel="stylesheet" type="text/css" href="../res/semantic/dist/components/divider.css">
  <link rel="stylesheet" type="text/css" href="../res/semantic/dist/components/segment.css">
  <link rel="stylesheet" type="text/css" href="../res/semantic/dist/components/form.css">
  <link rel="stylesheet" type="text/css" href="../res/semantic/dist/components/input.css">
  <link rel="stylesheet" type="text/css" href="../res/semantic/dist/components/button.css">
  <link rel="stylesheet" type="text/css" href="../res/semantic/dist/components/list.css">
  <link rel="stylesheet" type="text/css" href="../res/semantic/dist/components/message.css">
  <link rel="stylesheet" type="text/css" href="../res/semantic/dist/components/icon.css">

  <script src="../res/semantic/examples/assets/library/jquery.min.js"></script>
  <script src="../res/semantic/dist/components/form.js"></script>
  <script src="../res/semantic/dist/components/transition.js"></script>

  <style type="text/css">
    body {
      background-color: #DADADA;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>
  <script>
  $(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {
            email: {
              identifier  : 'email',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your e-mail'
                },
                {
                  type   : 'email',
                  prompt : 'Please enter a valid e-mail'
                }
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your password'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Your password must be at least 6 characters'
                }
              ]
            }
          }
        })
      ;
    })
  ;
  </script>
</head>
<body>

<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui green image header">
      <div class="content">
        Entre na sua conta
      </div>
    </h2>
    <form class="ui large form" method="POST" action="/login">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="txlogin" placeholder="Usuário">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="txpassword" placeholder="Password">
          </div>
        </div>

        <?php if( $error != '' ){ ?>
          <div class="ui negative message">
            <div class="header"><?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?></div>            
          </div>
        <?php } ?>

        <button type="submit" class="ui fluid large green submit button">Acessar</button><br/>
        <a class="ui fluid large black button" href="/">Voltar</a>
      </div>

    </form>

    <div class="ui message">
      Novo? <a href="/login/register">Cadastre-se</a><br/>
      Esqueceu a senha? <a href="/forgot">Esqueci</a>
    </div>
  </div>
</div>




</body></html>