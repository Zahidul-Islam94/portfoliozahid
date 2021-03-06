<nav class="navbar navbar-expand-lg navbar-light  navColor">
    <div class="container-fluid">
      <a class="navbar-brand" href="/" alt="image"><img width="100px" height="50px" src="{{ asset('img/logo.png') }}" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
          <a class="nav-link" href="{{ url('manage-skill') }}">Skills</a>
          <a class="nav-link" href="{{ url('my_team') }}">My Team</a>
          <a class="nav-link" href="{{ url('what_we_do') }}">What We Do</a>
          <a class="nav-link" href="{{ url('portfolio') }}">Portfolio</a>
          <a class="nav-link" href="{{ url('testimonial') }}">Testimonial</a>
          <a class="nav-link" href="{{ url('get_in_touch') }}">Get In Touch</a>
        </div>
      </div>
    </div>
  </nav>

 