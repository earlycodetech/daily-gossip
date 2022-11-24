<section>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="index">
                <img src="assets/img/logo.png" height="40" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-bars"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <!-- Translation Code here -->
                  <li class="nav-item">
                      <div class="translate" id="google_translate_element"></div>
              
                      <script type="text/javascript">
                          function googleTranslateElementInit() {
                              new google.translate.TranslateElement({
                                  pageLanguage: 'en'
                              }, 'google_translate_element');
                          }
                      </script>
                      <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                  </li>
                  <!-- Translation Code End here -->
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index">Home</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link"  href="#">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link"  href="contact">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link"  href="signup">Sign Up</a>
                  </li>
                  <li class="nav-item">
                    <form action="gossip-search" method="GET" role="search">
                        <div class="input-group">
                          <input class="form-control form-control-sm" name="search" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-sm btn-outline-light" type="submit">
                              <i class="fa fa-search"></i>
                          </button>
                        </div>
                      </form>
                  </li>
                </ul>
                
              </div>
            </div>
          </nav>
    </section>
    <style>
    .goog-te-banner-frame.skiptranslate {
        display: none !important;
    }

    .goog-logo-link {
        display: none !important;

    }

    .skiptranslate {
        color: transparent !important;
    }
    .hero{
        padding: 109px 0 1px 0;
    }
    body {
        top: 0px !important;
    }

    .goog-te-combo {
        padding: 5px;
        background-color: transparent;
        color: #fff;
        border-radius: 10px;
        max-width: 100px !important;
        margin-top: 10px;
        margin-left: 10px !important;

    }
    @media (max-width: 768px){
        .goog-te-combo {
            right: 0 !important;
        }
    }

    .goog-te-combo option {
        color: #000 !important;
    }
</style>