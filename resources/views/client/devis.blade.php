@extends("layout.client")

@section("css")
<link rel="stylesheet" href="{{asset("client/assets/Devis.css")}}" media="screen">
{{-- 
<script>
  document.addEventListener('DOMContentLoaded', function() {
      // Sélectionnez le bouton "Valider" avec l'ID 'jord-next'
      var nextButton = document.getElementById('jord-next');
  
      // Ajoutez un gestionnaire d'événements pour le clic sur ce bouton
      nextButton.addEventListener('click', function(event) {
          // Sélectionnez l'élément avec l'ID 'jord-submit'
          var submitButton = document.getElementById('jord-submit');
  
          // Retirez la classe 'u-hidden' de cet élément
          submitButton.classList.remove('u-hidden');
      });
  });
  </script> --}}


  
  
@endsection

@section("content")


<section
class="u-clearfix u-container-align-center u-image u-shading u-valign-middle-sm u-valign-middle-xs u-section-1"
id="carousel_8778" data-image-width="1200" data-image-height="630">
<div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
  <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
    <div class="u-layout">
      <div class="u-layout-row">
        <div
          class="u-container-align-center-sm u-container-style u-layout-cell u-shape-rectangle u-size-30 u-layout-cell-1">
          <div
            class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-container-layout-1">
            <h5
              class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-text u-text-1">
              Divorce Simple et Rapide</h5>
            <h1
              class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-2"
              >
              Obtenez un Devis Gratuit pour Votre Divorce </h1>
            <p
              class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-3">
              Divorcez en Toute Sérénité avec un Accompagnement Juridique sur-Mesure</p>
          </div>
        </div>
        <div class="u-container-style u-layout-cell u-shape-rectangle u-size-30 u-layout-cell-2">
          <div class="u-container-layout u-valign-middle u-container-layout-2">
            <div class="u-carousel u-carousel-duration-250 u-carousel-fade u-form u-white u-form-1"
              data-interval="0" data-u-ride="false" id="carousel-af70">


              <form action="{{route('demande.create')}}" method="POST"
                class="u-clearfix u-form-spacing-15 u-form-vertical" 
                style="padding: 23px;">

                @csrf

                @if (!isset($demande))
               
                    <div class="u-carousel-inner" role="listbox">

                  <div class="u-carousel-item u-form-step u-slide u-active">
                    <h4 class="u-align-center u-form-group u-form-text u-label-top u-text u-text-4">Informations
                      personnelles</h4>


                      @if($errors->any())
                        @foreach($errors->all() as $error)
                        <h4 class="u-align-center u-form-group u-form-text u-label-top u-text u-text-4">Informations
                            {{$error}}</h4>
                       
                        @endforeach
                        @endif


                    <div class="u-form-group u-form-name u-label-top">
                      <label for="name-4c18" class="u-custom-font u-label u-label-1">Nom</label>
                      <input type="text" placeholder="Veuillez saisir votre nom" id="name-4c18" name="nom"
                        class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle" required="">
                    </div>
                    <div class="u-form-group u-label-top">
                      <label for="email-4c18" class="u-custom-font u-label u-label-2">Prénom</label>
                      <input type="text" id="email-4c18" name="prenom"
                        class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle" required="required"
                        placeholder="Veuillez saisir votre prénom">
                    </div>
                    <div class="u-form-group u-label-top u-form-group-4">
                      <label for="text-91e4" class="u-custom-font u-label u-label-3">Email</label>
                      <input type="email" id="text-91e4" name="email"
                        class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-input-3"
                       >
                    </div>
                    <div class="u-form-group u-form-phone u-label-top u-form-group-5">
                      <label for="text-025d" class="u-custom-font u-label u-label-4">Numéro de téléphone</label>
                      <input type="text" id="text-025d" name="telephone"
                        class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-input-4"
                        data-country-code="fr" placeholder="06 12 34 56 78">
                    </div>
                  </div>
                  <div class="u-carousel-item u-form-step u-slide">
                    <h4 class="u-align-center u-form-group u-form-text u-label-top u-text u-text-5"> Plus
                      d'informations sur votre demande</h4>
                    <div
                      class="u-form-group u-form-input-layout-horizontal u-form-radiobutton u-label-top u-form-group-7">
                      <label class="u-label">Etes-vous d'accord avec un divorce à l'amiable ?</label>
                      <div class="u-form-radio-button-wrapper">
                        <div class="u-input-row">
                          <input id="field-cc99" type="radio" name="accord" value="1" class="u-field-input"
                            checked="checked" data-calc="">
                          <label class="u-custom-font u-field-label" for="field-cc99"
                            style="font-family: Satoshi-Light;">Oui</label>
                        </div>
                        <div class="u-input-row">
                          <input id="field-2cf8" type="radio" name="accord" value="0" class="u-field-input"
                            data-calc="">
                          <label class="u-custom-font u-field-label" for="field-2cf8"
                            style="font-family: Satoshi-Light;">Non</label>
                        </div>
                      </div>
                    </div>
                    <div
                      class="u-form-group u-form-input-layout-horizontal u-form-radiobutton u-label-top u-form-group-8">
                      <label class="u-label">Avez-vous des enfants issus de cette union ? </label>
                      <div class="u-form-radio-button-wrapper">
                        <div class="u-input-row">
                          <input id="field-13c8" type="radio" name="enfant" value="1" class="u-field-input"
                            checked="checked" data-calc="">
                          <label class="u-custom-font u-field-label" for="field-13c8"
                            style="font-family: Satoshi-Light;">Oui</label>
                        </div>
                        <div class="u-input-row">
                          <input id="field-718d" type="radio" name="enfant" value="0" class="u-field-input"
                            data-calc="">
                          <label class="u-custom-font u-field-label" for="field-718d"
                            style="font-family: Satoshi-Light;">Non</label>
                        </div>
                      </div>
                    </div>
                    <div
                      class="u-form-group u-form-input-layout-horizontal u-form-radiobutton u-label-top u-form-group-9">
                      <label class="u-label">Avez-vous des biens immobilier communs ? </label>
                      <div class="u-form-radio-button-wrapper">
                        <div class="u-input-row">
                          <input id="field-3101" type="radio" name="bien" value="1" class="u-field-input"
                            checked="checked" data-calc="">
                          <label class="u-custom-font u-field-label" for="field-3101"
                            style="font-family: Satoshi-Light;">Oui</label>
                        </div>
                        <div class="u-input-row">
                          <input id="field-18b1" type="radio" name="bien" value="0" class="u-field-input"
                            data-calc="">
                          <label class="u-custom-font u-field-label" for="field-18b1"
                            style="font-family: Satoshi-Light;">Non</label>
                        </div>
                      </div>
                    </div>
                  </div>



                  <div class="u-carousel-item u-form-step u-slide" id="jord-last">
                    <h4 class="u-align-center u-form-group u-form-text u-label-top u-text u-text-6"> Votre adresse
                    </h4>
                    <div class="u-form-group u-form-group-11">
                      <label for="text-ad63" class="u-label">Dans quelle ville habitez-vous ?</label>
                      <input type="text" placeholder="" id="text-ad63" name="ville"
                        class="u-input u-input-rectangle">
                    </div>
                    <div class="u-form-group u-form-group-12">
                      <label for="text-68f3" class="u-label">Code postal</label>
                      <input type="text" placeholder="" id="text-68f3" name="code"
                        class="u-input u-input-rectangle">
                    </div>
                    <div class="u-form-agree u-form-group u-form-group-13">
                      <label class="u-block-d01f-62 u-field-label" style=""></label>
                      <input type="checkbox" id="agree-7a86" name="agree" class="u-agree-checkbox u-field-input"
                        required="">
                      <label for="agree-7a86" class="u-agree-label u-custom-font u-field-label"
                        style="font-family: Satoshi-Light;">J'accepte les <a
                          class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                          href="#">Conditions d'utilisation</a>
                      </label>
                    </div>

                  
                  </div>

                 

                </div>

                <div class="u-align-center u-form-group u-form-submit u-label-top jord-nav">
                    <a href="#"
                        class="u-active-custom-color-3 u-border-active-palette-3-base u-border-hover-palette-3-base u-border-none u-btn u-btn-step u-btn-step-prev u-button-style u-custom-color-2 u-hover-custom-color-3 u-hidden u-btn-2">Revenir</a>
                    <a href="#" id="jord-next" 
                        class="u-active-custom-color-3 u-border-active-palette-3-base u-border-hover-palette-3-base u-border-none u-btn u-btn-step u-btn-step-next u-button-style u-custom-color-2 u-hover-custom-color-3 u-btn-2">Valider<br>
                    </a>
                    <input type="submit"
                    id="jord-submit"
                    class="u-hidden u-active-custom-color-3 u-border-active-palette-3-base u-border-hover-palette-3-base u-border-none u-btn u-btn-submit u-button-style u-custom-color-2 u-hover-custom-color-3  u-btn-2">
                  
                   
                </div>



                @else
                  <h4 class="u-align-center u-form-group u-form-text u-label-top u-text u-text-4">Votre demande à été
                    recue</h4>
                  <p class="u-align-center u-form-group u-form-text u-label-top u-text u-text-5"> Merci d'avoir soumis
                    votre demande de divorce amiable avec accord mutuel. <b> Conformément à la législation en vigueur </b>,
                    veuillez noter qu'il est obligatoire que chaque partie ait accès à un avocat. <b>Nous proposons un
                    tarif unique de 500 euros </b> pour l'accès à deux avocats dans le cadre de votre divorce amiable. Nous
                    vous contacterons sous peu pour discuter des prochaines étapes du processus.</p>
                @endif
                



              </form>



            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<section class="u-align-left u-clearfix u-white u-section-2" id="carousel_5a5c">
<div class="u-clearfix u-sheet u-sheet-1">
  <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
    <div class="u-layout">
      <div class="u-layout-row">
        <div
          class="u-container-align-center-sm u-container-align-center-xs u-container-style u-layout-cell u-size-30 u-layout-cell-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h1 class="u-align-center-sm u-align-center-xs u-text u-text-1">Profitez d'un devis gratuit</h1>
            <p class="u-align-center-sm u-align-center-xs u-text u-text-2"> Lorem ipsum dolor sit ametLorem ipsum
              dolor sit amet</p>
          </div>
        </div>
        <div class="u-container-style u-image u-image-contain u-image-default u-layout-cell u-size-30 u-image-1"
          data-image-width="2000" data-image-height="1200">
          <div class="u-container-layout u-valign-middle u-container-layout-2"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="u-expanded-width u-list u-list-1">
    <div class="u-repeater u-repeater-1">
      <div
        class="u-align-left u-container-align-left-sm u-container-align-left-xs u-container-style u-custom-color-2 u-custom-item u-list-item u-repeater-item u-shape-rectangle u-list-item-1">
        <div class="u-container-layout u-similar-container u-container-layout-3"><span
            class="u-align-left-sm u-align-left-xs u-icon u-icon-rectangle u-palette-1-base u-text-white u-icon-1"><svg
              class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style="">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-034e"></use>
            </svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-034e">
              <g>
                <path
                  d="m193.29 395.63c-42.64 0-77.33-34.69-77.33-77.33v-25.59c-62.506-3.875-116.177 46.692-115.959 109.34 0 60.4 49.14 109.53 109.53 109.53 62.65.217 113.214-53.436 109.34-115.95z">
                </path>
                <path
                  d="m262.94 146.56h-69.65c-26.1 0-47.33 21.24-47.33 47.33-.042 16.556.03 110.208 0 124.41 0 26.09 21.23 47.33 47.33 47.33 14.916-.029 107.366.021 124.4 0 26.1 0 47.33-21.24 47.33-47.33v-68.81h-102.08z">
                </path>
                <path d="m292.94.42v219.07h219.06v-219.07z"></path>
              </g>
            </svg>


          </span>
          <h5
            class="u-align-left-sm u-align-left-xs u-text u-text-custom-color-1 u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-3">
            Element de rassurance 1</h5>
          <p class="u-text u-text-custom-color-1 u-text-4"> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec pulvinar est quis augue vehicula viverra vel nec tortor.</p>
        </div>
      </div>
      <div
        class="u-align-left u-container-align-left-sm u-container-align-left-xs u-container-style u-custom-color-2 u-custom-item u-list-item u-repeater-item u-shape-rectangle u-list-item-2"
        >
        <div class="u-container-layout u-similar-container u-container-layout-4"><span
            class="u-align-left-sm u-align-left-xs u-icon u-icon-rectangle u-palette-1-base u-text-white u-icon-2"><svg
              class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512.001 512.001" style="">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-6c21"></use>
            </svg><svg class="u-svg-content" viewBox="0 0 512.001 512.001" x="0px" y="0px" id="svg-6c21"
              style="enable-background:new 0 0 512.001 512.001;">
              <g>
                <g>
                  <path
                    d="M502.979,317.996L230.502,199.598c26.679-30.977,43.37-68.952,48.104-109.598h16.395c8.284,0,15-6.716,15-15V15    c0-8.284-6.716-15-15-15h-60c-8.284,0-15,6.716-15,15v60c0,8.284,6.716,15,15,15h13.362    c-5.335,38.976-23.597,74.898-52.382,102.447c-29.08,27.831-66.261,44.536-105.98,47.907v-9.265c0-8.284-6.716-15-15-15h-60    c-8.284,0-15,6.716-15,15v60c0,8.284,6.716,15,15,15h60c8.284,0,15-6.716,15-15v-20.631    c39.772-2.876,77.462-17.167,109.042-41.233l118.953,273.754c2.391,5.5,7.81,9.022,13.753,9.022c0.283,0,0.567-0.008,0.853-0.024    c6.272-0.355,11.659-4.582,13.496-10.589l27.229-89.03c5.725-18.716,20.315-33.307,39.03-39.031l89.03-27.229    c6.008-1.837,10.234-7.224,10.589-13.497C512.332,326.329,508.741,320.5,502.979,317.996z">
                  </path>
                </g>
              </g>
            </svg>


          </span>
          <h5
            class="u-align-left-sm u-align-left-xs u-text u-text-custom-color-1 u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-5">
            Element de rassurance 2</h5>
          <p class="u-text u-text-custom-color-1 u-text-6"> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec pulvinar est quis augue vehicula viverra vel nec tortor.</p>
        </div>
      </div>
      <div
        class="u-align-left u-container-align-left-sm u-container-align-left-xs u-container-style u-custom-color-2 u-custom-item u-list-item u-repeater-item u-shape-rectangle u-list-item-3">
        <div class="u-container-layout u-similar-container u-container-layout-5"><span
            class="u-align-left-sm u-align-left-xs u-file-icon u-icon u-icon-rectangle u-palette-1-base u-icon-3"><img
              src="{{asset("client/assets/images/3037106-c52323d1.png")}}" alt=""></span>
          <h5
            class="u-align-left-sm u-align-left-xs u-text u-text-custom-color-1 u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-7">
            Element de rassurance 3</h5>
          <p class="u-text u-text-custom-color-1 u-text-8"> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec pulvinar est quis augue vehicula viverra vel nec tortor.</p>
        </div>
      </div>
    </div>
  </div>
</div>
</section>



@endsection