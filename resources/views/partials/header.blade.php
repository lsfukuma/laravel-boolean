<header>
    <div class="container">
        <div class="row">
            <div class="col-2 navbar-left">
                <img src="{{asset('img/logo.png')}}" alt="Boolean logo">
            </div>
            <div class="col-10 navbar-right">
                <ul>
                    <li>
                        <a href="{{ route ('homepage')}}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('corso')}}">Corso</a>
                    </li>
                    <li>
                        <a href="{{ route('carriere')}}">Dopo il corso </a>
                    </li>
                    <li>
                        <a href="{{ route('lezione_gratuita')}}">Lezione gratuita</a>
                    </li>
                    <li>
                        <a href="{{ route('assumi')}}">Assumi i nostri studenti</a>
                    </li>
                    <li><button> candidati ora </button></li>
                </ul>
            </div>
        </div>
    </div>
</header>
