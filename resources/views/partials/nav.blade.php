{{-- <!-- As a link -->
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('allTeams')}}">All teams</a>
  </nav>
  
  <!-- As a heading -->
  <nav class="navbar navbar-light bg-light">
    <span class="navbar-brand mb-0 h1">Navbar</span>
  </nav>
 --}}

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('allTeams')}}">All teams</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register')}}">Register</a>
            </li>
            


        </ul>
        </div>
      </nav>