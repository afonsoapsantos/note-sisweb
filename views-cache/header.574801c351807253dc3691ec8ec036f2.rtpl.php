<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <link rel="stylesheet" type="text/css" href="../../res/semantic/dist/semantic.css">
    <link rel="stylesheet" type="text/css" href="../../res/semantic/dist/semantic.min.css">
    <link rel="stylesheet" type="text/css" src="../../res/semantic/dist/semantic.js">
    <link rel="stylesheet" type="text/css" src="../../res/semantic/dist/semantic.min.js">

    <!-- Scripts -->
    <script type="text/javascript" src="../../res/semantic/examples/assets/library/jquery.min.js"></script>
    <script type="text/javascript" src="../../res/semantic/examples/assets/library/iframe.js"></script>
    <script type="text/javascript" src="../../res/semantic/dist/components/visibility.js"></script>
    <script type="text/javascript" src="../../res/semantic/dist/components/sidebar.js"></script>
    <script type="text/javascript" src="../../res/semantic/examples/assets/library/iframe-content.js"></script>
      <script src="../../res/semantic/examples/assets/library/iframe-content.js"></script>
      <script type="text/javascript" src="../../res/semantic/dist/components/transition.js"></script>
    <script type="text/javascript" src="../../res/semantic/dist/components/dropdown.js"></script>  

    <script>
      $(document)
      .ready(function() {

        // fix menu when passed
        $('.masthead')
          .visibility({
            once: false,
            onBottomPassed: function() {
              $('.fixed.menu').transition('fade in');
            },
            onBottomPassedReverse: function() {
              $('.fixed.menu').transition('fade out');
            }
          })
        ;

        // create sidebar and attach to menu open
        $('.ui.sidebar')
          .sidebar('attach events', '.toc.item')
        ;

      })
      ;
    </script>

    <style type="text/css">
      #component{ 
        margin-top: 80px;
        margin-bottom: 80px; 
      }
    </style>

    <!-- Site Properties -->
    <link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css">
    <link rel="stylesheet" type="text/css" href="../../res/semantic/dist/components/reset.css">
    <link rel="stylesheet" type="text/css" href="../../res/semantic/dist/components/site.css">
    <link rel="stylesheet" type="text/css" href="../../res/semantic/dist/components/container.css">
    <link rel="stylesheet" type="text/css" href="../../res/semantic/dist/components/grid.css">
    <link rel="stylesheet" type="text/css" href="../../res/semantic/dist/components/header.css">
    <link rel="stylesheet" type="text/css" href="../../res/semantic/dist/components/image.css">
    <link rel="stylesheet" type="text/css" href="../../res/semantic/dist/components/menu.css">
    <link rel="stylesheet" type="text/css" href="../../res/semantic/dist/components/divider.css">
    <link rel="stylesheet" type="text/css" href="../../res/semantic/dist/components/segment.css">
    <link rel="stylesheet" type="text/css" href="../../res/semantic/dist/components/form.css">
    <link rel="stylesheet" type="text/css" href="../../res/semantic/dist/components/input.css">
    <link rel="stylesheet" type="text/css" href="../../res/semantic/dist/components/button.css">
    <link rel="stylesheet" type="text/css" href="../../res/semantic/dist/components/list.css">
    <link rel="stylesheet" type="text/css" href="../../res/semantic/dist/components/message.css">
    <link rel="stylesheet" type="text/css" href="../../res/semantic/dist/components/icon.css">
    <link rel="stylesheet" type="text/css" href="../../res/semantic/dist/components/dropdown.css">
    <link rel="stylesheet" type="text/css" href="../../res/semantic/dist/components/transition.css">
    <link rel="stylesheet" type="text/css" href="../../res/semantic/dist/components/sidebar.css">
    <link rel="stylesheet" type="text/css" href="../../res/semantic/dist/components/popup.css">
    
    <style type="text/css">
          .hidden.menu {
            display: none;
          }

          .masthead.segment {
            min-height: 700px;
            padding: 1em 0em;
          }
          .masthead .logo.item img {
            margin-right: 1em;
          }
          .masthead .ui.menu .ui.button {
            margin-left: 0.5em;
          }
          .masthead h1.ui.header {
            margin-top: 3em;
            margin-bottom: 0em;
            font-size: 4em;
            font-weight: normal;
          }
          .masthead h2 {
            font-size: 1.7em;
            font-weight: normal;
          }

          .ui.vertical.stripe {
            padding: 8em 0em;
          }
          .ui.vertical.stripe h3 {
            font-size: 2em;
          }
          .ui.vertical.stripe .button + h3,
          .ui.vertical.stripe p + h3 {
            margin-top: 3em;
          }
          .ui.vertical.stripe .floated.image {
            clear: both;
          }
          .ui.vertical.stripe p {
            font-size: 1.33em;
          }
          .ui.vertical.stripe .horizontal.divider {
            margin: 3em 0em;
          }

          .quote.stripe.segment {
            padding: 0em;
          }
          .quote.stripe.segment .grid .column {
            padding-top: 5em;
            padding-bottom: 5em;
          }

          .footer.segment {
            padding: 5em 0em;
          }

          .secondary.pointing.menu .toc.item {
            display: none;
          }

          @media only screen and (max-width: 700px) {
            .ui.fixed.menu {
              display: none !important;
            }
            .secondary.pointing.menu .item,
            .secondary.pointing.menu .menu {
              display: none;
            }
            .secondary.pointing.menu .toc.item {
              display: block;
            }
            .masthead.segment {
              min-height: 350px;
            }
            .masthead h1.ui.header {
              font-size: 2em;
              margin-top: 1.5em;
            }
            .masthead h2 {
              margin-top: 0.5em;
              font-size: 1.5em;
            }
          }
      </style>
    <style type="text/css">
      .ui.container {
          margin-top: 3em;
          text-align: center;
          align-items: center;
          align-content: center;
          alignment-baseline: central;
          margin-left: 3em;
          border-image: all;  
          background-color: white;
        padding: 1em;
      }
      iframe {
        border: none;
        width: calc(100% + 2em);
        margin: 0em -1em;
        height: 300px;
      }
      iframe html {
        overflow: hidden;
      }
      iframe body {
        padding: 0em;
      }
      .ui.container > h1 {
       font-size: 3em;
        text-align: center;
        font-weight: normal;
      }
      .ui.container > h2.dividing.header {
        font-size: 2em;
        font-weight: normal;
        margin: 4em 0em 3em;
      }
      .ui.table {
          table-layout: fixed;
              }
      .hidden.menu {
          display: none;
      }
      .masthead.segment {
        min-height: 700px;
        padding: 1em 0em;
      }
      .masthead .logo.item img {
        margin-right: 1em;
      }
      .masthead .ui.menu .ui.button {
          margin-left: 0.5em;
      }
      .masthead h1.ui.header {
          margin-top: 3em;
          margin-bottom: 0em;
          font-size: 4em;
          font-weight: normal;
      }
      .masthead h2 {
          font-size: 1.7em;
          font-weight: normal;
      }
      .ui.vertical.stripe {
          padding: 8em 0em;
      }
      .ui.vertical.stripe h3 {
          font-size: 2em;
      }
      .ui.vertical.stripe .button + h3,
      .ui.vertical.stripe p + h3 {
          margin-top: 3em;
      }
      .ui.vertical.stripe .floated.image {
          clear: both;
      }
      .ui.vertical.stripe p {
          font-size: 1.33em;
      }
      .ui.vertical.stripe .horizontal.divider {
          margin: 3em 0em;
      }
      .quote.stripe.segment {
          padding: 0em;
      }
      .quote.stripe.segment .grid .column {
          padding-top: 5em;
          padding-bottom: 5em;
      }
      .footer.segment {
        padding: 5em 0em;
      }
      .secondary.pointing.menu .toc.item {
        display: none;
      }
      @media only screen and (max-width: 700px) {
      .ui.fixed.menu {
         display: none !important;
      }
      .secondary.pointing.menu .item,
      .secondary.pointing.menu .menu {
         display: none;
      }
      .secondary.pointing.menu .toc.item {
        display: block;
      }
      .masthead.segment {
        min-height: 350px;
        }
      .masthead h1.ui.header {
        font-size: 2em;
        margin-top: 1.5em;
      }
      .masthead h2 {
          margin-top: 0.5em;
          font-size: 1.5em;
        }
      }"); 
    </style>
    <script type="text/javascript">
      $('.ui.dropdown')
        .dropdown()
      ;
    </script>
    <script>
          $(document)
            .ready(function() {
              $('.ui.menu .ui.dropdown').dropdown({
                on: 'hover'
              });
              $('.ui.menu a.item')
              .on('click', function() {
                $(this)
                    .addClass('active')
                    .siblings()
                    .removeClass('active');
                });
            })
          ;
    </script>
    <style type="text/css">
         .ui.visible.left.sidebar ~ .fixed, .ui.visible.left.sidebar ~ .pusher {   
          -webkit-transform: translate3d(260px, 0, 0);           
          transform: translate3d(260px, 0, 0); 
         }
    </style>
    <style type="text/css">
         .ui.visible.left.sidebar ~ .fixed, .ui.visible.left.sidebar ~ .pusher {   
          -webkit-transform: translate3d(260px, 0, 0);           
          transform: translate3d(260px, 0, 0); 
         }
    </style>
</head>
<body class="pushable">
  <div class="pusher">
    <div class="ui stackable container menu">
      <a class="item" href="/admin">
        <i class="green home big icon"></i>
      </a>
      <form class="ui dropdown item" method="POST" tabindex="0"><i class="green archive icon"></i>Cadastros
        <i class="dropdown icon"></i>
        <div class="menu transition hidden" tabindex="-1">
          <a class="item" href=""><i class="images icon"></i>Fazendas</a>
          <a class="item" href="">
            <i class="address book icon"></i>Endereços</a>
          <a class="item" href=""><i class="box icon"></i>Produtos</a>
          <a class="item" href=""><i class="list icon"></i>Implementos</a>
          <a class="item" href=""><i class="dolly icon"></i>Fornecedores</a>
          <div class="divider"></div>
          <a class="item" href=""><i class="users icon"></i>Funcionários Fazenda</a>
          <a class="item" href=""><i class="users icon"></i>Clientes</a>
          <a class="item" href="/admin/technical"><i class="users icon"></i>Tecnicos</a>
          <a class="item" href="/admin/users"><i class="users icon"></i>Usuários</a>
          <div class="divider"></div>
          <a class="item" href=""><i class="clipboard icon"></i>Requisições</a>
          <a class="item" href="/admin/requisitions"><i class="tasks icon"></i>Liberações</a>
          <a class="item" href="/admin/requests"><i class="clipboard icon"></i>Solicitações</a>
          <a class="item" href="orderreports.php"><i class="clipboard list icon"></i>Relatório</a>
        </div>
      </form>
      <form class="ui dropdown item" method="POST" tabindex="0"><i class="green cogs icon"></i>Serviços
        <i class="dropdown icon"></i>
        <div class="menu transition hidden" tabindex="-1">
          <a class="item" href=""><i class="file alternate icon"></i>Orçamento conserto</a>
          <a class="item" href=""><i class="file alternate icon"></i>Orçamento reparo</a>
          <a class="item" href=""><i class="file alternate icon"></i>Orçamento reforma</a>
          <a class="item" href=""><i class="file alternate icon"></i>Orçamento peças</a>
          <div class="divider"></div>
          <a class="item" href="">Consertos</a>
          <a class="item" href="">Reparos</a>
          <a class="item" href="">Reformas</a>
          <a class="item" href="">Manutenção</a>
          <a class="item" href="">Orçamento Mão de Obra</a>
          <div class="divider"></div>
          <a class="item" href="relatorioServico.php">Relatrios</a>
        </div>
      </form>
      <form class="ui dropdown item" method="POST" tabindex="0"><i class="green shopping cart icon"></i>Vendas
        <i class="dropdown icon"></i>
        <div class="menu transition hidden" tabindex="-1">
          <a class="item" href="presale.php">Pré-Venda</a>
          <a class="item" href="serviceschedule.php">Agenda de Serviços</a>
          <a class="item" href="deliveries.php">Entregas</a>
          <a class="item" href="revenues.php">Faturamento</a>
          <a class="item" href="romaneios.php">Romaneios</a>
          <div class="divider"></div>
          <a class="item" href="">Gerenciar Vendas</a>
          <a class="item" href="">Ecommerce</a>
          <a class="item" href="">Requisições de Mercadorias</a>
          <div class="divider"></div>
          <a class="item">Relatorios de Vendas</a>
        </div>
      </form>
      <form action="" method="POST" class="ui dropdown item" tabindex="0"><i class="green boxes icon"></i>Estoque
        <i class="dropdown icon"></i>
        <div class="menu transition hidden" tabindex="-1">
          <a class="item" href="">Gerenciar Estoque</a>
          <a class="item" href="">Conferência de Preços</a>
          <a class="item" href="">controle de Compras</a>
          <a class="item" href="">Produção/Fabricação</a>
          <a class="item" href="">Produtos em Falta</a>
          <a class="item" href="">Produtos em Entrega</a>
          <a class="item" href="">Etiquetas</a>
          <div class="divider"></div>
          <a class="item" href="">Movimentações</a>
          <div class="divider"></div>
          <div class="item">Entradas</div>
        </div>
      </form>
      <form class="ui dropdown item" action="" method="POST" tabindex="0"><i class="green chart line icon"></i>Financeiro
        <i class="dropdown icon"></i>
        <div class="menu transition hidden" tabindex="-1">
          <a class="item" href="accountsreceive.php">Contas a Receber</a>
          <a class="item" href="renegotiations.php">Renegociações</a>
          <a class="item" href="billstopay.php">Contas a Pagar</a>
          <a class="item" href="cashflow.php">Fluxo de Caixa</a>
          <a class="item" href="dre.php">DRE</a>
          <a class="item" href="balanceanalysis.php">Análise de Saldos</a>
          <a class="item" href="financialreports.php">Relatórios</a>
          <div class="divider"></div>
          <a class="item" href="checkcontrol.php">controle de Cheques</a>
          <a class="item" href="cardcontrol.php">controle de Cartões</a>
          <div class="divider"></div>
          <div class="item" href="chartofaccounts.php">Plano de Contas</div>
        </div>
      </form>
      <form class="ui dropdown item" action="" method="POST" tabindex="0"><i class="green book icon"></i>Fiscal
        <i class="dropdown icon"></i>
        <div class="menu transition hidden" tabindex="-1">
          <a class="item" href="">Nota Fiscal Eletrônica(NF-e)</a>
          <a class="item" href="">Nota Fiscal Serviços(NFS-e)</a>
          <a class="item" href="">Cupons Eletrônicos(NFC-e)</a>
          <a class="item" href="">Manifestos(MDF-e)</a>
          <a class="item" href="">Notas de Terceiros</a>
          <a class="item" href="">Notas Série D</a>
          <a class="item" href="">Roamneio</a>
          <a class="item" href="">Arquivos Fiscais</a>
          <div class="divider"></div>
          <a class="item" href="">Livro de Entradas</a>
          <a class="item" href="">Livro de Saídas</a>
          <div class="divider"></div>
          <div class="item">Contabilidade</div>
        </div>
      </form>
      <form class="ui dropdown item" tabindex="0"><i class="green file alternate icon"></i>Relatórios
        <i class="dropdown icon"></i>
        <div class="menu transition hidden" tabindex="-1">
          <a href="/admin/sql/create" class="item">Criar SQL</a>
          <a href="" class="item">Relatorio Semanal</a>
          <a href="" class="item">Relatorio Mensal</a>
          <a href="" class="item">Relatorio Anual</a>
        </div>
      </form>

      <div class="right menu">
        <div class="ui dropdown item" tabindex="0"><i class="green user icon"></i>Conta
          <i class="dropdown icon"></i>
          <div class="menu transition hidden" tabindex="-1">
            <a class="item" href=""><i class="user icon"></i>Perfil</a>
            <a class="item"><i class="info icon"></i>Dados</a>
            <a class="item"><i class="exclamation triangle icon"></i>Segurança</a>
            <a class="item"><i class="user secret icon"></i>Permissões</a>
            <div class="divider"></div>
            <a class="item"><i class="cogs icon"></i>Opções</a>
            <div class="divider"></div>
            <a class="item" href="/logout">
              <div class="ui red button">Sair</div>
            </a>
          </div>
        </div>
      </div>
    </div>