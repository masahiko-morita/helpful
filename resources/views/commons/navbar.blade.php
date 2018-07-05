<header>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Helpful</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::check())
                        <li>kkkkk</li>
                        <li class="dropdown">
                            <ul class="dropdown-menu">
                                <li>kkkkk</li>
                                <li role="separator" class="divider"></li>
                                <li>kkkkk</li>
                                <li role="separator" class="divider"></li>
                                <li>kkkkkk</li>
                                
                            </ul>
                        </li>
                    @else
                        <li>kkk</li>
                        <li>kkk</li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>