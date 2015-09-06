<!-- Navigation -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= base_url() ?>"><?= $name ?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="<?= base_url() ?>">Inicio</a>
                </li>
                <li>
                    <a href="about.html">Acerca de...</a>
                </li>
                <li>
                    <a href="contact.html">Contacto</a>
                </li>

                <?php if ($this->session->userdata('login')) { ?>
                    <li>
                        <a href="<?= base_url() ?>profile/index/<?= $this->session->userdata('id') ?>">Perfil</a>
                    </li>
                    <li>
                        <a href="<?= base_url() ?>login/logOut">Log out</a>
                    </li>
                <?php }else{ ?>

                    <li class='dropdown'>
                        <a class='dropdown-toggle' href='#' data-toggle='dropdown' style="background: none;">Iniciar sesion... <strong class='caret'></strong></a>
                        <div class='dropdown-menu' style='padding: 10px; padding-bottom: 0px; background: none; width: 400px;'>
                            <form action='<?= base_url(); ?>login' method='post' >
                                <div class='form-group'>
                                    <input class='form-control large' style='text-align: center;' type='email' name='email' placeholder='email'/>
                                 </div>
                                <div class='form-group'>
                                    <input class='form-control large' style='text-align: center;' type='password' name='password' placeholder='contraseña' />
                                </div>
                                <div class='form-group'>
                                    <button class='btn btn-primary' style='width: 380px;' type='submit'>Ingresar</button>
                                </div>
                            </form>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>