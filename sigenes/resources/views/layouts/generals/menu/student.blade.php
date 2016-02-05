<div class="panel panel-default">
    <div class="panel-heading hidden-print hidden-xs hidden-sm">
        <div class="text-center" style="padding-bottom: 20px">
            <img src="http://placehold.it/150x150"/>
        </div>
        <div widht="100%">
            <nav class="bs-docs-sidebar" >
                <ul class="nav nav-pills nav-stacked" >
                    @include('generals.menu.partials.student')
                </ul>
            </nav>
        </div>
    </div>
    <nav class="navbar navbar-default hidden-md hidden-lg">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse-izq">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Menu lateral
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse-izq">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    @include('generals.menu.partials.student')
                </ul>
            </div>
        </div>
    </nav>
</div>