    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>{{ config('app.name', 'Laravel') }}</h3>
                <strong>Pro</strong>
            </div>

            <ul class="list-unstyled components">
                <li class="{{'home'==Request()->path()?'active':''}}">
                    <a href="{{ url('/home') }}">
                        <i class=" fas fa-home"></i>
                        <b>Home</b>
                    </a>
                </li>
                <li class="{{'proveedores'==Request::is('proveedores*')?'active':''}}">
                    <a href="{{route('proveedores.index')}}">
                        <i class="fas fa-parachute-box"></i>
                       <b>Proveedores</b>
                    </a>
                </li>

                <li>
                <li class="{{'productos'==Request::is('productos*')?'active':''}}">
                    <a href="{{route('productos.index')}}">
                        <i class="fas fa-box"></i>
                        <b> Productos</b>
                    </a>
                </li>
                
                <li class="{{'clientes'==Request::is('clientes*')?'active':''}}">
                <a href="{{route('clientes.index')}}">
                        <i class="fas fa-users"></i>
                        <b> Clientes</b>
                    </a>
                </li>

               
                <li class="#">
                    <a href="#">
                        <i class="fas fa-briefcase"></i>
                        <b>About</b>
                    </a>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-copy"></i>
                        <b>Pages</b>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-image"></i>
                        <b> Portfolio</b>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-question"></i>
                        <b> FAQ </b>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-paper-plane"></i>
                        <b> Contact</b>
                    </a>
                </li>
            </ul>


        </nav>

        <!-- Page Content  -->
        <!-- <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>


                </div>
            </nav>
        </div> -->
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>


    <script type="text/javascript">
$(document).ready(function() {
    $('#sidebarCollapse').on('click', function() {
        $('#sidebar').toggleClass('active');
    });
});
    </script>