<div class="container">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item">
            <a href="/" class="nav-link {{request()->is('/') ? 'active' : ''}}" aria-current="page">Home</a>
        </li>
        <li class="nav-item">
            <a href="/product" class="nav-link {{request()->is('product') ? 'active' : ''}}">Product</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{request()->is('contact') ? 'active' : ''}}" href="/contact">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{request()->is('about') ? 'active' : ''}}" href="/about">About</a>
        </li>
      </ul>
    </header>
  </div>
