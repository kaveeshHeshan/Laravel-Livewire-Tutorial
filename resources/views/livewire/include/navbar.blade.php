<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Testing Livewire</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              {{-- <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/')}}" wire:navigate.hover>Home</a>
              </li> --}}
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/shop')}}" wire:navigate.hover>Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/counter')}}" wire:navigate.hover>Counter</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/articles')}}" wire:navigate.hover>Articles</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</div>
