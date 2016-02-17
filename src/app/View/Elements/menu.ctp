<div class="col-md-3 left_col">
    <div class="left_col scroll-view">

        <div class="navbar nav_title" style="border: 0;">
          <?php echo $this->Html->link($this->Html->image("componizer.png",
          array("alt" => "Logo", 'class' => 'img_logo_img')),
          array('controller' => 'users','action' => 'index'),
          array('escape' => false)); ?>

        </div>
        <div class="clearfix"></div>

        <br />
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

  <div class="menu_section">
      <!--<h3>General</h3>-->
      <ul class="nav side-menu">
          <li><a><i class="fa fa-user"></i> Perfil <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu" style="display: none">
                  <li><?php echo $this->Html->link(__('Meus dados'), array('controller' => 'users','action' => 'profile')); ?>
                  </li>
                  <li><?php echo $this->Html->link(__('Alterar senha'), array('controller' => 'users','action' => 'password')); ?>
                  </li>
              </ul>
          </li>
          <li><a><i class="fa fa-circle"></i> Cadastrar <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu" style="display: none">
                  <li><?php echo $this->Html->link(__('Categorias'), array('controller' => 'categorias','action' => 'add')); ?>
                  </li>
                  <li><?php echo $this->Html->link(__('Subcategorias'), array('controller' => 'subcategorias','action' => 'add')); ?>
                  </li>
                  <li><?php echo $this->Html->link(__('Componentes'), array('controller' => 'componentes','action' => 'add')); ?>
                  </li>
                  <li><?php echo $this->Html->link(__('Usuários'), array('controller' => 'users','action' => 'add')); ?>
                  </li>
                  <li><?php echo $this->Html->link(__('Laboratórios'), array('controller' => 'laboratorios','action' => 'add')); ?>
                  </li>
              </ul>
          </li>
          <li><a><i class="fa fa-circle-o"></i> Listar <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu" style="display: none">
                <li><?php echo $this->Html->link(__('Categorias'), array('controller' => 'categorias','action' => 'index')); ?>
                </li>
                  <li><?php echo $this->Html->link(__('Subcategorias'), array('controller' => 'subcategorias','action' => 'index')); ?>
                  </li>
                  <li><?php echo $this->Html->link(__('Componentes'), array('controller' => 'componentes','action' => 'index')); ?>
                  </li>
                  <li><?php echo $this->Html->link(__('Usuários'), array('controller' => 'users','action' => 'index')); ?>
                  </li>
                  <li><?php echo $this->Html->link(__('Laboratórios'), array('controller' => 'laboratorios','action' => 'index')); ?>
                  </li>
              </ul>
          </li>
          <li><a><i class="fa fa-archive"></i> Requisições <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu" style="display: none">
                  <li><?php echo $this->Html->link(__('Listar requisições'), array('controller' => 'emprestimos','action' => 'index')); ?>
                  </li>
                  <li><?php echo $this->Html->link(__('Criar requisição'), array('controller' => 'emprestimos','action' => 'add')); ?>
                  </li>
                  <li><?php echo $this->Html->link(__('Minhas requisições'), array('controller' => 'emprestimos','action' => 'profile')); ?>
              </ul>
          </li>
          <?php if($this->Session->read('Auth.User.role' == 3)){ ?>
          <li><a><i class="fa fa-pie-chart"></i> Relatórios <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu" style="display: none">
                  <li><a href="chartjs.html">Chart JS</a>
                  </li>
                  <li><a href="chartjs2.html">Chart JS2</a>
                  </li>
                  <li><a href="morisjs.html">Moris JS</a>
                  </li>
              </ul>
          </li>
          <?php } ?>
          <li><a><i class="fa fa-pie-chart"></i> Suporte <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu" style="display: none">
                  <li><a href="chartjs.html">Faltou algum componente?</a>
                  </li>
                  <li><a href="chartjs2.html">Tem  algum equipamento precisando de manutenção?</a>
                  </li>
                  <li><a href="chartjs2.html">Sugestões</a>
                  </li>
              </ul>
          </li>
          <!--<li><a><i class="fa fa-power-off"></i> Logout </a>-->
          <!--  <ul class="nav child_menu" style="display: none">-->

          <!--<li><?php //echo $this->Html->link('<i class="fa fa-power-off"></i>',
      //array('controller' => 'users','action' => 'logout',),
      //array('escape' => false));?>
        </li>-->

          <!--</ul>-->
          <!--  </li> -->
      </ul>
  </div>
</div>
<!-- /menu footer buttons -->
<div class="sidebar-footer hidden-small">
    <?php echo $this->Html->link('<i class="fa fa-power-off"></i>',
    array('controller' => 'users','action' => 'logout', 'title' => 'Logout'),
    array('escape' => false));?>
</div>
<!-- /menu footer buttons -->
</div>
</div>
