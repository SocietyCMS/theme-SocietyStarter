<footer class="site-footer">
    <p>Powered by <a href="https://societycms.com" target="_blank">SocietyCMS</a></p>
    @if(Menu::get('auth'))
        {!! Menu::get('auth')->asDiv() !!}
    @endif
</footer>