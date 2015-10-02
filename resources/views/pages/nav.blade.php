<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Automasla-Zakaz</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                @if( Auth::user())
                <li class="active"><a href="/">Главная</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Продукция <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/products">Вся продукция</a></li>
                        <li><a href="{{ route('oils') }}">Масла, смазки</a></li>
                        <li><a href="{{ route('liquids') }}">Технические жидкости</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> По категориям <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/products">Все категории</a></li>
                        <li><a href="{{ route('PVL') }}">PVL</a></li>
                        <li><a href="{{ route('CVL') }}">CVL</a></li>
                        <li><a href="{{ route('CVL') }}">IND</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> По брендам <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/products">Все бренды</a></li>
                        <li><a href="{{ route('g-family') }}">G-Family</a></li>
                        <li><a href="{{ route('gazpromneft') }}">Газпромнефть</a></li>
                    </ul>
                </li>
                @endif
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if(! Auth::user())
                    <li><a href="/auth/login">Войти</a></li>
                    <li><a href="/auth/register">Регистрация</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  {!! Auth::user()->name !!} {!! Auth::user()->last_name !!} <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/feedback">Обратная связь</a></li>
                            @if(Auth::user()->canI('admin_all'))
                                <li><a href="{{ route('product.create') }}">Добавить продукт</a></li>
                                <li><a href="{{ route('user.all') }}">Пользователи</a></li>
                            @endif
                            <li><a href="/auth/logout">Выход</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>