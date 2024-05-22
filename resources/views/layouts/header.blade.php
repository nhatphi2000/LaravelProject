<div class="container">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
        <li class="nav-item">
            <a class="nav-link {{request()->is('contact') ? 'active' : ''}}" href="/contact">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{request()->is('about') ? 'active' : ''}}" href="/about">About</a>
        </li>
      </ul>
    </header>
  </div>
