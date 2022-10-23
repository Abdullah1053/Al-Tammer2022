
<style>
    @media (max-width: 590px) {
        header {
    margin-bottom:230px
  }
}
</style>
<!-- header -->
<header >
    <!-- header inner -->
    <div class="header">
       <div class="container">
          <div class="row">
             <div class="col-md-12 col-xs-3 col logo_section my-5">
                <div class="full">
                   <div class="center-desk">
                      <div class="logo">
                         <a href="/home"><img class="img-fluid" src="{{URL::asset('images/logo.png')}}" alt="#" /></a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-md-9 offset-md-1  my-5">
                <nav class="navigation navbar navbar-expand-md navbar-dark ">
                   <button class="navbar-toggler  "  type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon" style="background-image: url('{{URL::asset('images/download.svg')}}')"></span>
                   </button>
                   <div class="collapse navbar-collapse" id="navbarsExample04">
                      <ul class="navbar-nav mr-auto ">
                         <li class="nav-item active">
                            <a class="nav-link" href="/home">{{__('main.home')}}</a>
                         </li>
                         <li class="nav-item">

                            <a class="nav-link" href="{{route('about')}}">{{__('main.about')}}</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="/service">{{__('main.service')}}</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="/gallery">{{__('main.gallery')}}</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="/contact"> {{__('main.contact-us')}}</a>
                         </li>
                         <li>
                            <div class="dropdown">
                                <button class="btn btn-black dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ LaravelLocalization::getCurrentLocaleNative() }}
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                      <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                          {{ $properties['native'] }}
                                      </a>
                              @endforeach
                                </div>
                              </div>
                         </li>
                      </ul>

                   </div>

                </nav>
             </div>
          </div>
       </div>
    </div>
 </header>
 <!-- end header inner -->
 <!-- end header -->
