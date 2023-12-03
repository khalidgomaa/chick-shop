  <header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="index.html"><img width="250" src="images/logo.png" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="about.html">About</a></li>
                              <li><a href="testimonial.html">Testimonial</a></li>
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="product.html">Products</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="blog_list.html">Blog</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                       
                        <form class="form-inline">

                           <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                           <i class="fa fa-search" aria-hidden="true"></i>
                           </button>
                        </form>
                        @if (Route::has('login'))
               @auth
                  <div class="dropdown">
                     <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                           <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                              <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                           </button>
                        @else
                           {{ Auth::user()->name }}
                        @endif
                     </a>

                     <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li>
                           <div class="hidden sm:flex sm:items-center sm:ms-6">
                              <form method="POST" action="{{ route('logout') }}">
                                 @csrf
                                 <button class="dropdown-item" type="submit">
                                    {{ __('Log Out') }}
                                 </button>
                              </form>
                           </div>
                        </li>
                     </ul>
                  </div>
                  
               @else
                  <li>
                     <button class="btn btn-success">
                        <a class="text-white" href="{{url('login')}}">log in</a>
                     </button>
                  </li>
                  @if (Route::has('register'))
                     <li style="margin-left:10px">
                        <button class="btn btn-primary">
                           <a class="text-white" href="{{url('register')}}">sign up</a>
                        </button>
                     </li>
                  @endif
               @endauth
            @endif
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
