<?php
  require_once '../core/conection.php';
  global $pdo;
  if(isset($_POST['eliminar']))   
  {
    $id = $_POST['eliminateId'];
    $sql = $pdo->prepare("SELECT * from pessoa where IdPessoa = '$id'");
    $sql->execute();
    if($sql->rowCount() >= 1)
    {
      $e = $pdo->prepare("Delete from pessoa where IdPessoa = '$id'");
      $e->execute();
      if($e->rowCount() > 0)
      {
        echo '<script>alert("usuário Eliminado com sucesso")</script>';
      }else{
        echo '<script>alert("Erro! tente Novamente")</script>';
      }
    }else 
      echo '<script>alert("Esse usuário não existe, estás Maluco?")</script>';
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
              <p>configurações</p>
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
              <div class="card-header mb-5">
                <h5 class="card-category">Manipulando os Usuários</h5>
                <h3 class="card-title">Todos Usuários</h3>
              
                  <blockquote>
                    <p class="blockquote blockquote-primary">
                    <?php
                        require_once '../core/conection.php';
                        //$a->EveryProfiles();
                        $sql = $pdo->prepare("SELECT * from pessoa");
                        $sql->execute();
                        echo '
                            <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                <th scope="col" class="sort" data-sort="">ID</th>
                                <th scope="col" class="sort" data-sort="">Nome</th>
                                <th scope="col" class="sort" data-sort=""x>Apelido</th>
                                <th scope="col" class="sort" data-sort="">Email</th>
                                <th scope="col" class="sort" data-sort="">Data de Nascimento</th>
                                <th scope="col" class="sort" data-sort="">Sexo</th>
                                <th scope="col" class="sort" data-sort="">Nif</th>
                                <th scope="col" class="sort" data-sort="">Nome de utilizador</th>
                                <th scope="col">Data</th>
                                </tr>
                            </thead>
                            <tbody>
                            ';
                        while($profiles = $sql->fetch(PDO::FETCH_ASSOC))
                        { 
                          echo '
                              <tr scope="row align-items-justify">
                                  <td>'. $profiles['IdPessoa'].'</td>
                                  <td>'. $profiles['Nome'].'</td>
                                  <td>'. $profiles['Apelido'].'</td>
                                  <td>'. $profiles['EMAIL'].'</td>
                                  <td>'. $profiles['DataNascimento'].'</td>
                                  <td>'. $profiles['sexo'].'</td>
                                  <td>'. $profiles['NIF'].'</td>
                                  <td>'. $profiles['NomeUtilizador'].'</td>
                                  <td>'. $profiles['DataCriacao'].'</td>
                              </tr>
                          ';
                          //echo "ID". $profiles['id']."<br>";
                          //echo "Nome". $profiles['name']."<br>";
                        }
                        echo '
                        </tbody>
                        </table>'
                      ?>
                      <br>
                      <hr>
                      <div class="container text-center">
                        <form action="" method="post">
                          <input style="width: 100%;" type="text" class="form-control blockquote blockquote-primary" placeholder="Eliminar um Perfil" name="eliminateId">
                          <button style="width: 100%;" class="btn border-sucess" name="eliminar">Apagar Perfil</button>
                        </form>
                      </div> 
                      <hr>
                      <div class="container text-center">
                        <form action="" method="post">
                          <input style="width: 100%;" type="text" class="form-control blockquote blockquote-primary" placeholder="Consultar Ficha de Usuário" name="pessoaName">
                          <button style="width: 100%;" data-toggle="modal" data-target="#trazer" class="btn border-sucess" name="pesquisar" type="button">Pesquisar</button>
                        </form>
                      </div> 
                      <h5></h5>
                      <br>
                      <small>
                      </small>
                    </p>
                  </blockquote>
                </div>
                <div class="modal modal-search fade" id="trazer" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                    <?php
                      if(isset($_POST['pesquisar']))
                      {
                        require_once '../core/conection.php';
                        $pessoaName = filter_input(INPUT_POST, 'pessoaName');
                        $n = $pdo->prepare("SELECT * FROM pessoa WHERE NomeUtilizador = '$pessoaName'");
                        $n->execute();
                        $array = $n->fetch();
                        $id = $array['IdPessoa'];
                        //$a->EveryProfiles();
                        $sql = $pdo->prepare("SELECT * from Ficha WHERE pessoaId = '$id'");
                        $sql->execute();
                        echo '
                            <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                <th scope="col" class="sort" data-sort="">ID</th>
                                <th scope="col" class="sort" data-sort="">Código da Ficha</th>
                                <th scope="col" class="sort" data-sort=""x>Valor Total</th>
                                <th scope="col" class="sort" data-sort="">Ganhos Possíveis</th>
                                <th scope="col" class="sort" data-sort="">Probabilidade</th>
                                <th scope="col">Data</th>
                                </tr>
                            </thead>
                            <tbody>
                            ';
                        while($ficha = $sql->fetch(PDO::FETCH_ASSOC))
                        { 
                          echo '
                              <tr scope="row align-items-justify">
                                  <td>'. $ficha['IdFicha'].'</td>
                                  <td>'. $ficha['CodigoFicha'].'</td>
                                  <td>'. $ficha['ValorTotal'].'</td>
                                  <td>'. $ficha['GanhosPossiveis'].'</td>
                                  <td>'. $ficha['Probavilidade'].'</td>
                              </tr>
                          ';
                          //echo "ID". $profiles['id']."<br>";
                          //echo "Nome". $profiles['name']."<br>";
                        }
                        echo '
                        </tbody>
                        </table>';
                      }
                      ?>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="tim-icons icon-simple-remove"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
                <!-- <div class="typography-line">
                  <span>Muted Text</span>
                  <p class="text-muted">
                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
                  </p>
                </div>
                <div class="typography-line">
                  <span>Primary Text</span>
                  <p class="text-primary">
                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...</p>
                </div>
                <div class="typography-line">
                  <span>Info Text</span>
                  <p class="text-info">
                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                </div>
                <div class="typography-line">
                  <span>Success Text</span>
                  <p class="text-success">
                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                </div>
                <div class="typography-line">
                  <span>Warning Text</span>
                  <p class="text-warning">
                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
                  </p>
                </div>
                <div class="typography-line">
                  <span>Danger Text</span>
                  <p class="text-danger">
                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                </div>
                <div class="typography-line">
                  <h2><span>Small Tag</span>
                    Header with small subtitle <br>
                    <small>Use "small" tag for the headers</small>
                  </h2>
                </div>
                <div class="typography-line">
                  <span>Lists</span>
                  <div class="row">
                    <div class="col-md-3">
                      <h5>Unordered List</h5>
                      <ul>
                        <li>List Item</li>
                        <li>List Item</li>
                        <li class="list-unstyled">
                          <ul>
                            <li>List Item</li>
                            <li>List Item</li>
                            <li>List Item</li>
                          </ul>
                        </li>
                        <li>List Item</li>
                      </ul>
                    </div>
                    <div class="col-md-3">
                      <h5>Ordered List</h5>
                      <ol>
                        <li>List Item</li>
                        <li>List Item</li>
                        <li>List item</li>
                        <li>List Item</li>
                      </ol>
                    </div>
                    <div class="col-md-3">
                      <h5>Unstyled List</h5>
                      <ul class="list-unstyled">
                        <li>List Item</li>
                        <li>List Item</li>
                        <li>List item</li>
                        <li>List Item</li>
                      </ul>
                    </div>
                    <div class="col-md-3">
                      <h5>Inline List</h5>
                      <ul class="list-inline">
                        <li class="list-inline-item">List1</li>
                        <li class="list-inline-item">List2</li>
                        <li class="list-inline-item">List3</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="typography-line">
                  <span>Code</span>
                  <p>This is
                    <code>.css-class-as-code</code>, an example of an inline code element. Wrap inline code within a
                    <code> &lt;code&gt;...&lt;/code&gt;</code>tag.
                  </p>
                  <pre>1. #This is an example of preformatted text.<br/>2. #Here is another line of code</pre> --> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <ul class="nav">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Creative Tim
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                About Us
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Blog
              </a>
            </li>
          </ul>
          <div class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script>2018 made with <i class="tim-icons icon-heart-2"></i> by
            <a href="javascript:void(0)" target="_blank">Creative Tim</a> for a better web.
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
        <li class="header-title"> Sidebar Background</li>
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
        <li class="button-container">
          <a href="https://www.creative-tim.com/product/black-dashboard" target="_blank" class="btn btn-primary btn-block btn-round">Download Now</a>
          <a href="https://demos.creative-tim.com/black-dashboard/docs/1.0/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block btn-round">
            Documentation
          </a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-info"><i class="fab fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-info"><i class="fab fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
          <a class="github-button" href="https://github.com/creativetimofficial/black-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
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