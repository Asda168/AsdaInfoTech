    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">AsdaInfoTech</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link active" href="/">Home</a>
            </li>

              <li class="nav-item">
                  <a href="#" class="nav-link">Contact</a>
              </li>
          </ul>
        <ul class="navbar-nav ml-auto align-items-center">
            <!-- 🔍 Search Icon in the middle -->
            <li class="nav-item mx-2" id="search" x-data>
                <a class="nav-link active" href="#" @click.prevent="$store.search.visible = !$store.search.visible">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="https://flagcdn.com/us.svg" width="20" class="mr-1" alt="EN"> EN
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('sign_in')}}">Sign in</a>
            </li>
        </ul>
        </div>
      </div>
    </nav>
