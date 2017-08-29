<style type="text/css">
  .navbar-nav {
    float: right;
    margin: 0;
  }
  .container{
    width: 100%;
  }
</style>
<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('tribe.main', ["tribe_id" => $tribe['tribe']->id]) }}">{{ $tribe['tribe']->name}}</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        {{-- <li class="active"><a href="#">Home</a></li>
        <li><a href="#about">About</a></li> --}}
        <li><a href="/">Home</a></li>
        @if ($tribe['isTribeMember'])
        <li role="presentation"><a href="#">Messages <span class="badge"></span></a></li>
        <li role="presentation"><a href="{{route('tribe.setting.main', ["tribe_id" => $tribe['tribe']->id])}}">Setting</a></li>
        {{-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Setting <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Edit Tribe</a></li>
            <li><a href="#">More Features</a></li>
            <li><a href="#">Members</a></li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-header">Nav header</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li> --}}
        @endif
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>