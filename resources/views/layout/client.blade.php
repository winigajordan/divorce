<!DOCTYPE html>
<html style="font-size: 16px;" lang="fr">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords"
    content= "Solution de divorce adaptées à vos besoins, Qui sommes-nous ?, Découvrez nos services, Ce que disent nos clients​, Facts &amp;amp; Questions">
  <meta name="description" content="">
  <title>Accueil</title>
  <link rel="stylesheet" href="{{asset("client/assets/nicepage.css")}}" media="screen">

  @yield('css')
  
  <script class="u-script" type="text/javascript" src="{{asset("client/assets/jquery.js")}}" defer=""></script>
  <script class="u-script" type="text/javascript" src="{{asset("client/assets/nicepage.js")}}" defer=""></script>
  <meta name="generator" content="Nicepage 6.7.6, nicepage.com">
  <meta name="referrer" content="origin">

  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Accueil">
  <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="{{asset("client/assets/intlTelInput")}}/">

  
    
</head>

<body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="fr">
  <header class="u-clearfix u-header u-header" id="sec-209b">
    <div class="u-clearfix u-sheet u-valign-middle-xs u-sheet-1">
      <a href="{{route('client.index')}}" class="u-image u-logo u-image-1" data-image-width="500" data-image-height="500">
        <img src="{{asset("client/assets/images/divorce.svg")}}" class="u-logo-image u-logo-image-1">
      </a>
      <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
        <div class="menu-collapse u-custom-font"
          style="font-size: 1rem; letter-spacing: 0px; font-family: Satoshi-Light;">
          <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
            href="#">
            <svg class="u-svg-link" viewBox="0 0 24 24">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
            </svg>
            <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px"
              xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
              <g>
                <rect y="1" width="16" height="2"></rect>
                <rect y="7" width="16" height="2"></rect>
                <rect y="13" width="16" height="2"></rect>
              </g>
            </svg>
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-custom-font u-nav u-unstyled u-nav-1">
            {{-- <li class="u-nav-item"><a
                class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-custom-color-1 u-text-hover-custom-color-3"
                href="{{route('client.index')}}" style="padding: 10px 20px;">Accueil</a>
            </li> --}}
            <li class="u-nav-item"><a
                class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-custom-color-1 u-text-hover-custom-color-3"
                href="#" style="padding: 10px 20px;">Nos Services</a>
              <div class="u-nav-popup">
                <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2">
                  <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="{{route('client.amiable')}}">Divorce à l'amiable</a>
                  </li>
                  <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="{{route('client.contentieux')}}">Divorce
                      contentieux</a>
                  </li>
                  <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="{{route('client.faute')}}">Divorce pour faute</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="u-nav-item"><a
                class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-custom-color-1 u-text-hover-custom-color-3"
                href="#!" style="padding: 10px 20px;">A Propos</a>
            </li>
            <li class="u-nav-item"><a
                class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-custom-color-1 u-text-hover-custom-color-3"
                href="#!" style="padding: 10px 20px;">Contact</a>
            </li>
            <li class="u-nav-item"><a
                class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-custom-color-1 u-text-hover-custom-color-3"
                href="{{route('client.devis')}}" style="padding: 10px 20px;">Demande de devis</a>
            </li>
          </ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3">
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Accueil.html">Accueil</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Nos Services</a>
                  <div class="u-nav-popup">
                    <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4">
                      <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Divorce à l'amiable</a>
                      </li>
                      <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Page-3.html">Divorce
                          contentieux</a>
                      </li>
                      <li class="u-nav-item"><a class="u-button-style u-nav-link">Divorce pour faute</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#!">A Propos</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link">Contact</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Devis.html">Demande de devis</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
    </div>
  </header>


  @yield('content')



  <footer class="u-align-center u-clearfix u-custom-color-3 u-footer u-footer" id="sec-bb42">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-layout-cell u-size-14 u-layout-cell-1">
              <div class="u-container-layout u-container-layout-1">
                <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-1"
                  src="{{asset("client/assets/images/divorce.png")}}" alt="" data-image-width="500" data-image-height="500">
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-size-26 u-layout-cell-2">
              <div class="u-container-layout u-container-layout-2">
                <p class="u-text u-text-default u-text-1"> Que vous ayez besoin d'une assistance pour négocier des accords de séparation équitables, protéger vos droits parentaux ou faire face à des questions financières complexes, notre équipe expérimentée est là pour vous aider. Nous croyons fermement en la valeur de chaque individu et en la nécessité de trouver des solutions adaptées à vos besoins uniques.</p>
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-size-20 u-layout-cell-3">
              <div class="u-container-layout u-container-layout-3">
                <h5 class="u-text u-text-default u-text-2">Plan de site</h5>
                <p class="u-text u-text-default u-text-3">Accueil<br>Divorce à l'amiable<br>Divorce
                  contentieux<br>Divirce pour faute<br>A Propos<br>Contact
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    // Cacher le bloc jord-nav par défaut
    $('.jord-nav').hide();

    // Détecter le changement de slide
    $('.u-carousel-item').on('click', function(){
      // Vérifier si l'élément actif a la classe jord-last
      if ($(this).hasClass('jord-last')) {
        // Si c'est le cas, cacher jord-nav
        $('.jord-nav').hide();
      } else {
        // Sinon, afficher jord-nav
        $('.jord-nav').show();
      }
    });
  });
</script>
 --}}

 
 <script> 
// Sélectionner l'élément div avec l'ID "jord-last"
var targetNode = document.getElementById('jord-last');

// Sélectionnez l'élément avec l'ID 'jord-submit'
var submitButton = document.getElementById('jord-submit');

// Options pour l'observateur (quelles mutations observer)
var config = { attributes: true, attributeFilter: ['class'] };

// Fonction de rappel à exécuter lorsque des mutations sont observées
var callback = function(mutationsList, observer) {
    // Parcourir la liste des mutations observées
    for(var mutation of mutationsList) {
        if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
            // Vérifiez si la classe 'u-active' est présente dans la liste des classes de l'élément cible
            var classList = targetNode.classList;
            if (classList.contains('u-active')) {
                // Retirez la classe 'u-hidden' de l'élément cible si 'u-active' est présente
                submitButton.classList.remove('u-hidden');
            } else {
                // Ajoutez la classe 'u-hidden' à l'élément cible si 'u-active' n'est pas présente
                submitButton.classList.add('u-hidden');
            }
        }
    }
};

// Créer un nouvel observateur MutationObserver avec la fonction de rappel
var observer = new MutationObserver(callback);

// Commencer à observer l'élément cible pour les mutations spécifiées
observer.observe(targetNode, config);

  </script>


</body>

</html>