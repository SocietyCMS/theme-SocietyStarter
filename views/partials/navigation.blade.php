@if(Menu::get('main'))
    <div class="site-masthead">
        <div class="container">
            <nav class="site-nav">
                {!! Menu::get('main')->asUl() !!}
            </nav>
        </div>
    </div>
@endif