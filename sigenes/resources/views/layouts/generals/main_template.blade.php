<!DOCTYPE html>
<html lang="es">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
@include('layouts.generals.headers')
<body>
    @if (! Auth::guest())
        <div class="row">
            <div class="col-lg-2" style="padding-left: 0.0em; padding-right: 0.0em; height: 100%">
                 @include('layouts.generals.menu.employee')
            </div>
            <div class="col-lg-10">
                <div class="row">
                    @include('layouts.generals.menu.general_menu')
                </div>
                <div class="row">
                    <div class="container">
                        @include('layouts.generals.errors')
                        @include('layouts.generals.sessionMessage')
                        @include('layouts.generals.content_template')
                    </div>
                </div>

            </div>
        </div>
    @endif
    @include('layouts.generals.scripts')
</body>
</html>