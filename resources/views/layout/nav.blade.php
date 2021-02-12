<header class="bg_blue_port_gore container p_10  tx_capitalize">
    <nav class="d_flex vw60 f_column">
        <ul>
            <li><a href="/">Home</a></li>
            
            @foreach($menus as $menu)
                <li>  {{ $menu }}</li>
            @endforeach
            
            <li><a href="about_us">About</a></li>
        </ul>
    </nav>          
</header>