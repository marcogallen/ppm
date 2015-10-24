<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Perros perdidos México</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/perros-perdidos">Perros perdidos</a>
                    </li>
                    <li>
                        <a href="/perros-encontrados">Perros encontrados</a>
                    </li>                    
                    <!--<li>
                        <a href="/perros-en-adopcion">Perros en adopción</a>
                    </li>-->
                    <li>
                        <a href="/nosotros">Sobre nosotros</a>
                    </li>
                    <!--<li>
                        <a href="/servicios">Servicios</a>
                    </li>-->
                    <li>
                        <a href="/contacto">Contacto</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">

                    @if ( $user )
                    <li><a href="/auth/logout">{{ $user->name }} Salir</a></li>
                
                @else 
                    <li><a href="/auth/login">Login</a></li>
                    <li><a href="/auth/register">Registrate</a></li>
                @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- end nav -->