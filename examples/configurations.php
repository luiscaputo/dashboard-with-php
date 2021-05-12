<?php
require_once '../core/conection.php';
  global $pdo;
  if(isset($_POST['cadastrar']))
  {
      $data =date('Y');
      $Servicos=['Gmail','Outlook','Icloud'];
      $count=0;

      $FirstName = $_POST['nome'];
      $FullName = $_POST['apelido'];
      $User = $_POST['nomeUtilizador'];
      $Email = $_POST['email'];
      $Password = md5($_POST['password']);
      $Data = $_POST['dataNascimento'];
      $tipoPessoaId = $_POST['tipoPessoa'];;
      $PassConfirme =md5($_POST['ConfirmePass']);
       
      $e = $pdo->prepare("SELECT * FROM pessoa WHERE NomeUtilizador ='$User' and TipoPessoaId = '$tipoPessoaId'");
      $e->execute();
      if($e->rowCount() > 0)
      {
        echo "<script>alert('Esse usuário já existe e com o mesmo papel!')</script>";
      }
      else
        if($Password != $PassConfirme)
        {
          echo "<script>alert('As Palavras passes não coincidem!')</script>";
        }
        else
          {
            $Sql = $pdo->prepare('INSERT INTO pessoa(Nome,Apelido,EMAIL,DataNascimento,NomeUtilizador,PalavraPasse,TipoPessoaId) VALUES(:FirstName,:FullName,:Email,:Data,:User, :Password,:tipoPessoa)');
            $Sql->bindParam(':FirstName',$FirstName);
            $Sql->bindParam(':FullName',$FullName);
            $Sql->bindParam(':Email',$Email);
            $Sql->bindParam(':Data',$Data);
            $Sql->bindParam(':User',$User);
            $Sql->bindParam(':Password',$Password);
            $Sql->bindParam(':tipoPessoa',$tipoPessoaId);
            $Sql->execute();
            if($Sql->rowCount() > 0)
            {
                echo "<script>alert('Usuário Cadastrado!')</script>";
            }
            else
              {
                echo "<script>alert('Usuário não Cadastrado!')</script>";
              }
          }
  }
  if(isset($_POST['apagar']))
  {
    $id = filter_input(INPUT_POST, 'idCampeonato');

    $x = $pdo->prepare("SELECT * FROM pessoa where idPessoa = '$id'");
    $x->execute();
    if($x->rowCount() > 0)
    {
      $elimina = $pdo->prepare("DELETE FROM pessoa WHERE idPessoa = '$id'");
      $elimina->execute();
      if($elimina->rowCount() > 0)
      {
        echo "<script>alert('Usuário Eliminado!')</script>";
      }else
      {
        echo "<script>alert('Usuário não Eliminado!')</script>";
      }
    }else
    {
      echo "<script>alert('Esse Usuário não existe!')</script>";
    }

  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
      BET - SPORT 
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
<div class="wrapper">
    <div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">
            BS
          </a>
          <a href="javascript:void(0)" class="simple-text logo-normal">
            Bet Sport
          </a>
        </div>
        <ul class="nav">
          <li class="active ">
            <a href="./dashboard.php">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./allChampions.php">
              <i class="tim-icons icon-atom"></i>
              <p>Todos Campeonatos</p>
            </a>
          </li>
          <li>
            <a href="./sports.php">
              <i class="tim-icons icon-pin"></i>
              <p>Desportos</p>
            </a>
          </li>
          <li>
            <a href="./times.php">
              <i class="tim-icons icon-bell-55"></i>
              <p>Equipas</p>
            </a>
          </li>
          <li>
            <a href="./game.php">
              <i class="tim-icons icon-single-02"></i>
              <p>Partidas</p>
            </a>
          </li>
          <li>
            <a href="./tikets.php">
              <i class="tim-icons icon-puzzle-10"></i>
              <p>Bilhetes</p>
            </a>
          </li>
          <li>
            <a href="./allUsers.php">
              <i class="tim-icons icon-align-center"></i>
              <p>Usuários</p>
            </a>
          </li>
          <li>
            <a href="./configurations.php">
              <i class="tim-icons icon-world"></i>
              <p>Configurações</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:void(0)">Admin Bet-Sport</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              <li class="search-bar input-group">
                <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split" ></i>
                  <span class="d-lg-none d-md-block">Pesquisar</span>
                </button>
              </li>
              <li class="dropdown nav-item">
                <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="notification d-none d-lg-block d-xl-block"></div>
                  <i class="tim-icons icon-sound-wave"></i>
                  <p class="d-lg-none">
                    Notificações
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
                  <li class="nav-link"><a href="#" class="nav-item dropdown-item">Mike John responded to your email</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">You have 5 more tasks</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Your friend Michael is in town</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Another notification</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Another one</a></li>
                </ul>
              </li>
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <img src="../assets/img/anime3.png" alt="Profile Photo">
                  </div>
                  <b class="caret d-none d-lg-block d-xl-block"></b>
                  <p class="d-lg-none">
                    Sair
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                  <li class="nav-link"><a href="user.html" class="nav-item dropdown-item">Perfil</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Definições</a></li>
                  <li class="dropdown-divider"></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Sair</a></li>
                </ul>
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Pesquisar">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button> 
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <?php
                require_once '../core/conection.php';
                        global $pdo;
                        //$a->EveryProfiles();
                        $sql = $pdo->prepare("SELECT * FROM pessoa WHERE TipoPessoaId = '9' or TipoPessoaId = '11'");
                        $sql->execute();
                        echo '
                            <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                <th scope="col" class="sort" data-sort="">ID</th>
                                <th scope="col" class="sort" data-sort="">Nome de Utilizador</th>
                                <th scope="col" class="sort" data-sort="">Email</th>
                                <th scope="col" class="sort" data-sort="">Nif</th>
                                <th scope="col" class="sort" data-sort="">Papel</th>
                                <th scope="col">Data Criação</th>
                                </tr>
                            </thead>
                            <tbody>
                            ';
                        while($campeonato = $sql->fetch(PDO::FETCH_ASSOC))
                        { 
                          echo '
                          <tr scope="row align-items-justify">
                          <td>'. $campeonato['IdPessoa'].'</td>
                          <td>'. $campeonato['NomeUtilizador'].'</td>
                          <td>'. $c = $campeonato['EMAIL'].'</td>
                          <td>'. $campeonato['NIF'].'</td>
                          <td>'. 
                            $idEstado = $campeonato['TipoPessoaId'];
                            $badJo = $pdo->prepare("SELECT * FROM tipopessoa WHERE idTipoPessoa = '$idEstado'");
                            $badJo->execute();
                            $badJoArray = $badJo->fetch(PDO::FETCH_ASSOC);
                            $nn = $badJoArray['Pessoa'];
                            echo ' '.$nn;
                            
                          echo ' </td>';
                          echo '<td>'.$campeonato['DataCriacao'].'</td>
                          ';                          
                        }
                      echo '
                      </tbody>
                      </table>';
                    ?>
                    <br><br>
              </div>
              <div class="card-body all-icons">
                <div class="row">
                  </div>
                </div>
              </div>
              <div class="container text-center">
                      <button class="btn btn-success" data-toggle="modal" data-target="#trazer" type="button">Novo Administrador/Gestor de Fichas</button>
                      <button class="btn btn-danger" data-toggle="modal" data-target="#apagar" type="button">Eliminar Administrador/Gestor de Fichas</button>
                  </div>
            </div>
          </div>
        </div>
<div class="modal fade" id="trazer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Cadastre Nova Equipa</h5>
      </div>
      <div class="modal-body">
           <form action="" method="post" class="form">
                <input type="text" class="form-control" style="color: black;" placeholder="Nome da Pessoa" name="nome"><br>
                <input type="text" class="form-control" style="color: black;" placeholder="Apelido da Pessoa" name="apelido"><br>
                <input type="email" class="form-control" style="color: black;" placeholder="Email" name="email"><br>
                <input type="date" class="form-control" style="color: black;" placeholder="Data de Nascimento" name="dataNascimento"><br>
                <input type="text" class="form-control" style="color: black;" placeholder="Nome de Utilizador" name="nomeUtilizador"><br>
                <input type="password" class="form-control" style="color: black;" placeholder="Password" name="password"><br>
                <input type="password" class="form-control" style="color: black;" placeholder="Confirme sua Palavra passe" name="ConfirmePass"><br>
                <select name="tipoPessoa" id="">
                            <option value="" desable>Selecione o Papel dessa Pessoa</option>
                            <?php
                               require_once '../core/conection.php';
                               global $pdo;
                               $sql = $pdo->prepare("SELECT * FROM tipopessoa");
                               $sql->execute();
                               while($dat = $sql->fetch(PDO::FETCH_ASSOC))
                               {
                                 echo '<option style="color: black;" value="'.$dat['idTipoPessoa'].'">'.$dat['Pessoa'].'</option>';
                              }
                            ?> 
                          </select><br><br>               
                <input type="file" class="form-control" style="color: black;" placeholder="Imagem" name="image"><br>    
                <button class="btn btn-success form-control" type="submit" name="cadastrar">Cadastrar</button><br>
             </form>
      </div>
    </div>
  </div>
</div>
       
<div class="modal fade" id="apagar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Eliminar Usuário</h5>
      </div>
      <div class="modal-body">
              <form action="" method="post" class="">
                  <input type="text" name="idCampeonato" style="color: black;" placeholder="Coloque o Id do Usuário a eliminar" class="form-control"> <br>
                  <button name="apagar" type="submit" class="form-control btn btn-success">Eliminar</button><br>
              </form>
      </div>
    </div>
  </div>
</div>
              <!-- <div class="modal fade" id="apagar" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                          <form action="" method="post" class="">
                              <input type="text" name="idCampeonato" placeholder="Coloque o Id do Desporto a eliminar" class=""> <br>
                              <button name="apagar" type="submit" class="">Eliminar</button><br>
                          </form>
                    </div>
                  </div>
                </div>
              </div> -->
      <footer class="footer">
        <div class="container-fluid">
          <ul class="nav">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Bet - Sport
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Sobre Nós
              </a>
            </li>
          </ul>
          <div class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script>2021 BET - SPORT <i class="tim-icons icon-heart-2"></i> bY
            <a href="javascript:void(0)" target="_blank">CODERCLEAN</a>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Mudar color Lateral</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger background-color">
            <div class="badge-colors text-center">
              <span class="badge filter badge-primary active" data-color="primary"></span>
              <span class="badge filter badge-info" data-color="blue"></span>
              <span class="badge filter badge-success" data-color="green"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="adjustments-line text-center color-change">
          <span class="color-label">LIGHT MODE</span>
          <span class="badge light-badge mr-2"></span>
          <span class="badge dark-badge ml-2"></span>
          <span class="color-label">DARK MODE</span>
        </li>
       
        
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
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

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "black-dashboard-free"
      });
  </script>
</body>

</html>