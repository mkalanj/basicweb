<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand" href="#">Web</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="{{Request::is('/')? 'active' : ''}}">
        <a class="nav-link" href="/">Početna</a>
      </li>
      <li class="{{Request::is('about')? 'active' : ''}}">
        <a class="nav-link" href="/about">O nama</a>
      </li>

      <li class="{{Request::is('contact')? 'active' : ''}}">
        <a class="nav-link" href="/contact">Kontakt</a>
      </li>

      <li class="{{Request::is('todo')? 'active' : ''}}">
        <a class="nav-link" href="/todo">To do</a>
      </li>

      <li class="{{Request::is('/todo/create')? 'active' : ''}}">
        <a class="nav-link" href="/todo/create">Kreiraj Todo</a>
      </li>

      <li class="{{Request::is('/albums')? 'active' : ''}}">
        <a class="nav-link" href="/albums">Albumi</a>
      </li>

      <li class="{{Request::is('/bookmarks')? 'active' : ''}}">
        <a class="nav-link" href="/bookmarks">Bookmark</a>
      </li>


    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
