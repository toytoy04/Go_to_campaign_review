<header>
    <div class="header-area">
        <div class="header-left">
            <div class="header-left-top">
                <img src="{{ ('images/logo.png')}}" alt="Go To Travelのロゴ">
                <p class="logo-text">Go To TRAVEL</p>
            </div>
            <div class="header-left-bottom">
                <h2>補助金管理</h2>
            </div>
        </div>
        <div class="header-right">
        <div class="header-right-left">
            <div class="header-right-top">
                <p>原宿店</p>
                <p>上田さん</p>
            </div>
            <div class="header-right-bottom">
                <ul class="header-list">
                    <li><a href="#">新規申請</a></li>
                    <p>/</p>
                    <li><a href="#">検索</a></li>
                    <p>/</p>
                    <li><form action="{{ route('logout') }}" method="post">
                        @csrf
                            <input type="submit" value="ログアウト" class="logout">
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header-right-right">
            <div class="triple-bar">
                <span></span>
                <span></span>
                <span></span>
            </div>
                <nav class="menu">
                    <ul>
                    <li class="menu-item"><a href="/">TOP</a></li>
                    <li class="menu-item"><a href="{{ route('travel.index') }}">申込状況照会</a></li>
                    <li class="menu-item"><a href="{{ route('travel.searchPeriod') }}">期間集計</a></li>
                    <li class="menu-item"><a href="{{ route('travel.summary') }}">CP進捗状況</a></li>
                    <li class="menu-item"><a href="{{ route('shop.show', ['shop' => Auth::id()]) }}">店舗情報</a></li>
                    <li class="menu-item"><a href="{{ route('user.show') }}">スタッフ情報</a></li>
                    <li class="menu-item"><a href="{{ route('logout') }}">ログアウト</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
