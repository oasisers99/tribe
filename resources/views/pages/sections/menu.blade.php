<link rel="stylesheet" href="{{ mix('/css/menu/style.css') }}">
<div class="topnav" id="myTopnav">
    <div class="mainTitle">
        <a href="/">Future Smith</a>
    </div>
    <div class="mainMenuSet">
        <a href="/">About Us</a>

        @if (Auth::check())
            @if (Session::get('userCreatedTribesCount') > 0)
                @php
                    $tribeId = Session::get('userTribes')[0]->tribe_id;
                @endphp
                <a href="{{ route('tribe.main', ["tribe_id" => $tribeId]) }}">Your Tribe </a>
            @else
                <a href="{{ route('tribe.createForm') }}">Create Tribe</a>
            @endif
        @elseif (!Auth::check())
            <a href="{{ route('tribe.createForm') }}">Create Tribe</a>
        @endif
        <a href="/">Explore Projects</a>
        <a href="/#pricing-section">Pricing</a>
    </div>
    <div class="userMenuSet">
        @unless (Auth::check())
            <a href="{{ route('auth.loginForm') }}">Login</a>
        @endunless
        @if (Auth::check())
            <a href="{{ route('auth.logout') }}" id="A_22">
                @php
                    // $name = Auth::user()->name;
                    // $namelist = explode(' ', $name);
                    // $initial = '';
                    // foreach($namelist as $name){
                    //         $initial .= substr($name, 0, 1) . '.';
                    // }
                    echo 'Logout';
                    //strtoupper($initial);
                @endphp
            </a>  
        @elseif (!Auth::check())
            <a href="{{ route('auth.registrationForm') }}">Register</a>
        @endif
    </div>
</div>
