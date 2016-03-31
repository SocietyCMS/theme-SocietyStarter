@if(Menu::get('main'))
    <div class="site-masthead">
        <div class="container">
            <div class="navbar-toggleable-sm collapse hidden-md-up mobile-navbar" id="navbar-header" >
                {!! Menu::get('main')->asUl() !!}
            </div>
            <nav class="site-nav">
                <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header" aria-expanded="false">
                    ☰
                </button>

                <div class="hidden-sm-down">
                    {!! Menu::get('main')->asUl() !!}
                </div>
            </nav>
        </div>
    </div>
@endif