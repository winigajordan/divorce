@extends("layout.client")


@section("css")
<link rel="stylesheet" href="{{asset("client/assets/Accueil.css")}}" media="screen">
@endsection

@section("content")
<section
    class="u-clearfix u-custom-color-2 u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-section-1"
    id="sec-b37a">
    <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
      <div class="u-layout">
        <div class="u-layout-row">
          <div class="u-container-style u-layout-cell u-size-21 u-layout-cell-1">
            <div class="u-container-layout u-valign-middle u-container-layout-1">
              <img class="u-image u-image-contain u-image-round u-preserve-proportions u-radius u-image-1"
                src="{{asset("client/assets/images/breakup-marriage-couple-with-divorce-certification-min.webp")}}" alt="" data-image-width="250"
                data-image-height="198">
            </div>
          </div>
          <div class="u-container-style u-layout-cell u-size-39 u-layout-cell-2">
            <div class="u-container-layout u-container-layout-2">
              <h2 class="u-align-left u-custom-font u-text u-text-custom-color-1 u-text-1"> Solutions ​​de divorce
                adaptées à vos besoins</h2>
              <h3 class="u-align-justify u-text u-text-custom-color-1 u-text-2"> Accompagnement professionnel pour des transitions en douceur
              </h3>
               
                <div class="custom-expanded data-layout-selected u-clearfix u-gutter-8 u-layout-wrap u-layout-wrap-2">
                  <div class="u-layout">
                    <div class="u-layout-row">
                      <div class="u-container-style u-layout-cell u-size-20-lg u-size-20-md u-size-20-sm u-size-20-xs u-size-22-xl u-layout-cell-3">
                        <div class="u-container-layout u-container-layout-3">
                          <p class="u-text u-text-default u-text-3"><span class="u-icon"><svg class="u-svg-content" viewBox="0 0 511 511" style="width: 1em; height: 1em;"><path d="m114.59375 491.140625c-5.609375 0-11.179688-1.75-15.933594-5.1875-8.855468-6.417969-12.992187-17.449219-10.582031-28.09375l32.9375-145.089844-111.703125-97.960937c-8.210938-7.167969-11.347656-18.519532-7.976562-28.90625 3.371093-10.367188 12.542968-17.707032 23.402343-18.710938l147.796875-13.417968 58.433594-136.746094c4.308594-10.046875 14.121094-16.535156 25.023438-16.535156 10.902343 0 20.714843 6.488281 25.023437 16.511718l58.433594 136.769532 147.773437 13.417968c10.882813.980469 20.054688 8.34375 23.425782 18.710938 3.371093 10.367187.253906 21.738281-7.957032 28.90625l-111.703125 97.941406 32.9375 145.085938c2.414063 10.667968-1.726562 21.699218-10.578125 28.097656-8.832031 6.398437-20.609375 6.890625-29.910156 1.300781l-127.445312-76.160156-127.445313 76.203125c-4.308594 2.558594-9.109375 3.863281-13.953125 3.863281zm141.398438-112.875c4.84375 0 9.640624 1.300781 13.953124 3.859375l120.277344 71.9375-31.085937-136.941406c-2.21875-9.746094 1.089843-19.921875 8.621093-26.515625l105.472657-92.5-139.542969-12.671875c-10.046875-.917969-18.6875-7.234375-22.613281-16.492188l-55.082031-129.046875-55.148438 129.066407c-3.882812 9.195312-12.523438 15.511718-22.546875 16.429687l-139.5625 12.671875 105.46875 92.5c7.554687 6.613281 10.859375 16.769531 8.621094 26.539062l-31.0625 136.9375 120.277343-71.914062c4.308594-2.558594 9.109376-3.859375 13.953126-3.859375zm-84.585938-221.847656s0 .023437-.023438.042969zm169.128906-.0625.023438.042969c0-.023438 0-.023438-.023438-.042969zm0 0"></path></svg></span>&nbsp;Confiez votre divorce à des experts
                          </p>
                        </div>
                      </div>
                      <div class="cell-temp-clone u-container-style u-layout-cell u-size-19-xl u-size-21-lg u-size-21-md u-size-21-sm u-size-21-xs u-layout-cell-4">
                        <div class="u-container-layout u-container-layout-4">
                          <p class="u-text u-text-default u-text-4"><span class="u-icon"><svg class="u-svg-content" viewBox="0 0 511 511" style="width: 1em; height: 1em;"><path d="m114.59375 491.140625c-5.609375 0-11.179688-1.75-15.933594-5.1875-8.855468-6.417969-12.992187-17.449219-10.582031-28.09375l32.9375-145.089844-111.703125-97.960937c-8.210938-7.167969-11.347656-18.519532-7.976562-28.90625 3.371093-10.367188 12.542968-17.707032 23.402343-18.710938l147.796875-13.417968 58.433594-136.746094c4.308594-10.046875 14.121094-16.535156 25.023438-16.535156 10.902343 0 20.714843 6.488281 25.023437 16.511718l58.433594 136.769532 147.773437 13.417968c10.882813.980469 20.054688 8.34375 23.425782 18.710938 3.371093 10.367187.253906 21.738281-7.957032 28.90625l-111.703125 97.941406 32.9375 145.085938c2.414063 10.667968-1.726562 21.699218-10.578125 28.097656-8.832031 6.398437-20.609375 6.890625-29.910156 1.300781l-127.445312-76.160156-127.445313 76.203125c-4.308594 2.558594-9.109375 3.863281-13.953125 3.863281zm141.398438-112.875c4.84375 0 9.640624 1.300781 13.953124 3.859375l120.277344 71.9375-31.085937-136.941406c-2.21875-9.746094 1.089843-19.921875 8.621093-26.515625l105.472657-92.5-139.542969-12.671875c-10.046875-.917969-18.6875-7.234375-22.613281-16.492188l-55.082031-129.046875-55.148438 129.066407c-3.882812 9.195312-12.523438 15.511718-22.546875 16.429687l-139.5625 12.671875 105.46875 92.5c7.554687 6.613281 10.859375 16.769531 8.621094 26.539062l-31.0625 136.9375 120.277343-71.914062c4.308594-2.558594 9.109376-3.859375 13.953126-3.859375zm-84.585938-221.847656s0 .023437-.023438.042969zm169.128906-.0625.023438.042969c0-.023438 0-.023438-.023438-.042969zm0 0"></path></svg></span>&nbsp;Assistance personnalisée 

                          </p>
                        </div>
                      </div>
                      <div class="cell-temp-clone u-container-style u-layout-cell u-size-19 u-layout-cell-5">
                        <div class="u-container-layout u-container-layout-5">
                          <p class="u-text u-text-default u-text-5"><span class="u-icon"><svg class="u-svg-content" viewBox="0 0 511 511" style="width: 1em; height: 1em;"><path d="m114.59375 491.140625c-5.609375 0-11.179688-1.75-15.933594-5.1875-8.855468-6.417969-12.992187-17.449219-10.582031-28.09375l32.9375-145.089844-111.703125-97.960937c-8.210938-7.167969-11.347656-18.519532-7.976562-28.90625 3.371093-10.367188 12.542968-17.707032 23.402343-18.710938l147.796875-13.417968 58.433594-136.746094c4.308594-10.046875 14.121094-16.535156 25.023438-16.535156 10.902343 0 20.714843 6.488281 25.023437 16.511718l58.433594 136.769532 147.773437 13.417968c10.882813.980469 20.054688 8.34375 23.425782 18.710938 3.371093 10.367187.253906 21.738281-7.957032 28.90625l-111.703125 97.941406 32.9375 145.085938c2.414063 10.667968-1.726562 21.699218-10.578125 28.097656-8.832031 6.398437-20.609375 6.890625-29.910156 1.300781l-127.445312-76.160156-127.445313 76.203125c-4.308594 2.558594-9.109375 3.863281-13.953125 3.863281zm141.398438-112.875c4.84375 0 9.640624 1.300781 13.953124 3.859375l120.277344 71.9375-31.085937-136.941406c-2.21875-9.746094 1.089843-19.921875 8.621093-26.515625l105.472657-92.5-139.542969-12.671875c-10.046875-.917969-18.6875-7.234375-22.613281-16.492188l-55.082031-129.046875-55.148438 129.066407c-3.882812 9.195312-12.523438 15.511718-22.546875 16.429687l-139.5625 12.671875 105.46875 92.5c7.554687 6.613281 10.859375 16.769531 8.621094 26.539062l-31.0625 136.9375 120.277343-71.914062c4.308594-2.558594 9.109376-3.859375 13.953126-3.859375zm-84.585938-221.847656s0 .023437-.023438.042969zm169.128906-.0625.023438.042969c0-.023438 0-.023438-.023438-.042969zm0 0"></path></svg></span>&nbsp;Confidentialité et empathie garanties

                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
               
              
             
              <a href="https://nicepage.com/c/real-estate-html-templates"
                class="u-border-1 u-border-hover-white u-border-white u-btn u-button-style u-custom-color-3 u-text-hover-white u-btn-1">
                Découvrez nos services</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="u-clearfix u-palette-5-light-2 u-section-2" id="carousel_f142">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="data-layout-selected u-clearfix u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div
              class="u-align-left u-container-align-left-lg u-container-align-left-md u-container-align-left-sm u-container-align-left-xl u-container-style u-layout-cell u-left-cell u-size-27-lg u-size-27-xl u-size-29-md u-size-29-sm u-size-29-xs u-layout-cell-1"
              data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250">
              <div class="u-container-layout u-container-layout-1">
                <div class="u-custom-color-1 u-shape u-shape-circle u-shape-1" data-animation-name="customAnimationIn"
                  data-animation-duration="1500" data-animation-delay="250"></div>
                <h1 class="u-align-left u-custom-font u-text u-text-custom-color-1 u-title u-text-1"
                  data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750">Qui
                  sommes-nous ?</h1>

                <p class="u-align-left u-text u-text-2"> Nous sommes une équipe dévouée d'experts en droit de la famille, offrant un soutien juridique et émotionnel lors des moments difficiles de la vie.</p>
                <p class="u-align-left u-text u-text-3"> Depuis des années, nous aidons nos clients à naviguer à travers les défis des procédures de divorce avec compassion et compétence.</p>
                
                
                  <a href="#"
                  class="u-active-palette-1-base u-align-left u-border-none u-btn u-button-style u-custom-color-3 u-custom-font u-hover-palette-1-base u-btn-1">En
                  savoir plus </a>
              </div>
            </div>
            <div
              class="u-container-align-right-xs u-container-style u-image u-layout-cell u-right-cell u-size-31-md u-size-31-sm u-size-31-xs u-size-33-lg u-size-33-xl u-image-1"
              data-image-width="1500" data-image-height="1200" data-animation-name="customAnimationIn"
              data-animation-duration="1500">
              <div class="u-container-layout u-container-layout-2"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-palette-5-light-2 u-section-3" id="carousel_920b">
    <div
      class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
      <h2 class="u-align-center-xs u-custom-font u-text u-text-custom-color-1 u-text-default u-text-1">Découvrez nos
        services</h2>
      <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-24 u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout" style="">
          <div class="u-layout-row" style="">
           
            <div class="u-size-20" style="">
              <a href="{{route('client.amiable')}}">
              <div class="u-layout-col" style="">
                <div class="u-align-center u-container-style u-layout-cell u-radius u-size-60 u-white u-layout-cell-1">
                  <div class="u-container-layout u-valign-top u-container-layout-1">
                    <img class="u-expanded-width u-image u-image-contain u-image-round u-radius u-image-1"
                      src="{{asset("client/assets/images/breakup-marriage-couple-with-divorce-certification-min.webp")}}" alt=""
                      data-image-width="250" data-image-height="198">
                    <h5 class="u-text u-text-custom-color-1 u-text-default u-text-2" style="margin-top : 30px"> Divorce a l’amiable</h5>
                    <p class="u-text u-text-palette-1-dark-2 u-text-3">Une solution pacifique pour mettre fin à votre mariage en toute compréhension et coopération.</p>
                    <div class="u-rotation-parent u-rotation-parent-1"><span
                        class="u-custom-color-3 u-icon u-icon-circle u-text-white u-icon-1"><svg class="u-svg-link"
                          preserveAspectRatio="xMidYMin slice" viewBox="0 0 64 64" style="">
                          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5834"></use>
                        </svg><svg class="u-svg-content" viewBox="0 0 64 64" id="svg-5834">
                          <path
                            d="m32 8c-1.104 0-2 .896-2 2v39.899l-14.552-15.278c-.761-.799-2.026-.832-2.828-.069-.8.762-.831 2.027-.069 2.827l16.62 17.449c.756.756 1.76 1.172 2.829 1.172 1.068 0 2.073-.416 2.862-1.207l16.586-17.414c.762-.8.73-2.065-.069-2.827-.799-.763-2.065-.731-2.827.069l-14.552 15.342v-39.963c0-1.104-.896-2-2-2z">
                          </path>
                        </svg></span>
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div>
            
            <div class="u-size-20">
              <a href="{{route('client.contentieux')}}">
                <div class="u-layout-col">
                  <div
                    class="u-align-center u-container-style u-layout-cell u-radius-50 u-size-60 u-white u-layout-cell-2">
                    <div
                      class="u-container-layout u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xl u-container-layout-2">
                      <img class="u-expanded-width u-image u-image-contain u-image-default u-image-2"
                        src="{{asset("client/assets/images/breakup-marriage-couple-with-divorce-certification-min.webp")}}" alt=""
                        data-image-width="250" data-image-height="198">
                      <h5 class="u-text u-text-custom-color-1 u-text-default u-text-4"  style="margin-top : 30px"> Divorce Contentieux</h5>
                      <p class="u-text u-text-palette-1-dark-2 u-text-5"> Pour les situations où les désaccords persistent, notre équipe vous guide à travers les procédures judiciaires.</p>
                      <div class="u-align-center-xs u-rotation-parent u-rotation-parent-2"><span
                          class="u-custom-color-3 u-icon u-icon-circle u-text-white u-icon-2"><svg class="u-svg-link"
                            preserveAspectRatio="xMidYMin slice" viewBox="0 0 64 64" style="">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8677"></use>
                          </svg><svg class="u-svg-content" viewBox="0 0 64 64" id="svg-8677">
                            <path
                              d="m32 8c-1.104 0-2 .896-2 2v39.899l-14.552-15.278c-.761-.799-2.026-.832-2.828-.069-.8.762-.831 2.027-.069 2.827l16.62 17.449c.756.756 1.76 1.172 2.829 1.172 1.068 0 2.073-.416 2.862-1.207l16.586-17.414c.762-.8.73-2.065-.069-2.827-.799-.763-2.065-.731-2.827.069l-14.552 15.342v-39.963c0-1.104-.896-2-2-2z">
                            </path>
                          </svg></span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="u-size-20">
              <a href="{{route('client.faute')}}">
              <div class="u-layout-col">
                <div class="u-align-center u-container-style u-layout-cell u-radius u-size-60 u-white u-layout-cell-3">
                  <div
                    class="u-container-layout u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xl u-container-layout-3">
                    <img class="u-expanded-width u-image u-image-contain u-image-default u-image-3"
                      src="{{asset("client/assets/images/breakup-marriage-couple-with-divorce-certification-min.webp")}}" alt=""
                      data-image-width="250" data-image-height="198">
                    <h5 class="u-text u-text-custom-color-1 u-text-default u-text-6"  style="margin-top : 30px"> Divorce pour faute</h5>
                    <p class="u-text u-text-palette-1-dark-2 u-text-7">Dans les cas où des violations du mariage sont en jeu, nous vous offrons une représentation pour défendre vos droits.</p>
                    <div class="u-rotation-parent u-rotation-parent-3"><span
                        class="u-custom-color-3 u-icon u-icon-circle u-text-white u-icon-3"><svg class="u-svg-link"
                          preserveAspectRatio="xMidYMin slice" viewBox="0 0 64 64" style="">
                          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9485"></use>
                        </svg><svg class="u-svg-content" viewBox="0 0 64 64" id="svg-9485">
                          <path
                            d="m32 8c-1.104 0-2 .896-2 2v39.899l-14.552-15.278c-.761-.799-2.026-.832-2.828-.069-.8.762-.831 2.027-.069 2.827l16.62 17.449c.756.756 1.76 1.172 2.829 1.172 1.068 0 2.073-.416 2.862-1.207l16.586-17.414c.762-.8.73-2.065-.069-2.827-.799-.763-2.065-.731-2.827.069l-14.552 15.342v-39.963c0-1.104-.896-2-2-2z">
                          </path>
                        </svg></span>
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <a href="#"
        class="u-border-none u-btn u-button-style u-custom-color-1 u-hidden-xs u-hover-palette-5-light-3 u-btn-1">Demander
        un devis</a>
    </div>
  </section>
  <section class="u-align-left u-clearfix u-section-4" id="carousel_0c58">
    <div class="u-clearfix u-sheet u-sheet-1">
      <blockquote class="u-border-20 u-border-custom-color-2 u-custom-font u-text u-text-custom-color-1 u-text-1"> QUE
        SAVOIR SUR LES DIVORCES ?</blockquote>
      <p class="u-align-justify u-custom-font u-large-text u-text u-text-variant u-text-2">
        Les divorces peuvent être des moments de transition délicats,
         accompagnés de nombreux défis émotionnels et légaux. Que vous envisagiez 
         une séparation ou que vous ayez déjà entamé le processus, il est essentiel 
         de comprendre pleinement les implications de vos décisions et les options qui
          s'offrent à vous.
        <br>
        <br>Notre équipe comprend les complexités juridiques et émotionnelles
         auxquelles vous êtes confronté(e) pendant cette période. Nous nous engageons
          à vous fournir des conseils clairs et complets pour vous aider à naviguer à 
          chaque étape du processus de divorce.
        <br> <br>

        Que ce soit pour négocier des accords de séparation équitables, protéger vos droits parentaux ou faire face à des questions financières complexes, nous sommes là pour vous guider avec compétence et compassion. Notre objectif est de vous aider à prendre des décisions éclairées et à atteindre des solutions durables pour vous et votre famille.

N'hésitez pas à nous contacter pour une consultation confidentielle et sans engagement. Nous sommes là pour vous aider à franchir cette étape avec confiance et tranquillité d'esprit.

          <br> <br> <br>
      </p>
      <img style="margin-bottom: 50px" class="u-image u-image-round u-radius u-image-1" src="{{asset("client/assets/images/justice.png")}}" alt="" data-image-width="512"
        data-image-height="512">
    </div>
  </section>
  <section class="u-align-left u-clearfix u-image u-shading u-section-5" id="sec-2133" data-image-width="6048"
    data-image-height="4024">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div id="carousel-8c52" data-interval="5000" data-u-ride="carousel"
        class="u-carousel u-expanded-width-xs u-slider u-slider-1">
        <ol
          class="u-absolute-hcenter-lg u-absolute-hcenter-md u-absolute-hcenter-sm u-absolute-hcenter-xl u-carousel-indicators u-carousel-indicators-1">
          <li data-u-target="#carousel-8c52" class="u-active u-grey-30 u-shape-circle" data-u-slide-to="0"
            style="width: 10px; height: 10px;"></li>
          <li data-u-target="#carousel-8c52" class="u-grey-30 u-shape-circle" data-u-slide-to="1"
            style="width: 10px; height: 10px;"></li>
        </ol>
        <div class="u-carousel-inner" role="listbox">

          <div class="u-active u-carousel-item u-container-style u-slide">
            <div class="u-container-layout u-container-layout-1">
              <p
                class="u-align-justify u-custom-font u-large-text u-text u-text-custom-color-1 u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-variant u-text-1">
                "Je suis très reconnaissant pour l'aide précieuse que j'ai reçu tout au long de mon divorce. Ils ont rendu un processus difficile beaucoup plus supportable."</p>
              <div alt="" class="u-image u-image-circle u-image-1" data-image-width="1280" data-image-height="716">
              </div>
              <h4 class="u-align-center u-text u-text-custom-color-1 u-text-2">Jacques L<br>
              </h4>
              <h6 class="u-align-center u-text u-text-3">-</h6>
            </div>
          </div>
          
          <div class="custom-expanded u-align-center u-carousel-item u-container-style u-slide">
            <div class="u-container-layout u-valign-middle u-container-layout-2">
                <p
                class="u-align-justify u-custom-font u-large-text u-text u-text-custom-color-1 u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-variant u-text-1">
                "Leur professionnalisme et leur compassion m'ont permis de traverser cette période difficile de ma vie avec dignité et respect."</p>
              <div alt="" class="u-image u-image-circle u-image-2" src="{{asset("client/assets")}}/" data-image-width="256"
                data-image-height="256"></div>
              <h4 class="u-align-center u-text u-text-5">Tatiana B.<br>
              </h4>
              <h6 class="u-align-center u-text u-text-6">-</h6>
            </div>
          </div>

          <div class="custom-expanded u-align-center u-carousel-item u-container-style u-slide">
            <div class="u-container-layout u-valign-middle u-container-layout-2">
                <p
                class="u-align-justify u-custom-font u-large-text u-text u-text-custom-color-1 u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-variant u-text-1">
                "Je recommande vivement leurs services à quiconque cherche un soutien fiable et bienveillant pendant un divorce."</p>
              <div alt="" class="u-image u-image-circle u-image-2" src="{{asset("client/assets")}}/" data-image-width="256"
                data-image-height="256"></div>
              <h4 class="u-align-center u-text u-text-5">Marie D.<br>
              </h4>
              <h6 class="u-align-center u-text u-text-6">-</h6>
            </div>
          </div>
        </div>

        


        <a class="u-absolute-vcenter-lg u-absolute-vcenter-md u-absolute-vcenter-sm u-absolute-vcenter-xl u-carousel-control u-carousel-control-prev u-text-grey-30 u-carousel-control-1"
          href="#carousel-8c52" role="button" data-u-slide="prev">
          <span aria-hidden="true">
            <svg viewBox="0 0 451.847 451.847">
              <path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path>
            </svg>
          </span>
          <span class="sr-only">
            <svg viewBox="0 0 451.847 451.847">
              <path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path>
            </svg>
          </span>
        </a>
        <a class="u-absolute-vcenter-lg u-absolute-vcenter-md u-absolute-vcenter-sm u-absolute-vcenter-xl u-carousel-control u-carousel-control-next u-text-grey-30 u-carousel-control-2"
          href="#carousel-8c52" role="button" data-u-slide="next">
          <span aria-hidden="true">
            <svg viewBox="0 0 451.846 451.847">
              <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path>
            </svg>
          </span>
          <span class="sr-only">
            <svg viewBox="0 0 451.846 451.847">
              <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path>
            </svg>
          </span>
        </a>
      </div>
      <h2 class="u-custom-font u-text u-text-custom-color-1 u-text-7">Ce que disent nos clients </h2>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-palette-5-light-2 u-valign-middle-sm u-section-6" id="carousel_6ded">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-align-center u-container-style u-expanded-width-xs u-group u-group-1">
        <div class="u-container-layout">
          <h2 class="u-align-left u-custom-font u-text u-text-custom-color-1 u-text-default u-text-1">Foire aux questions</h2>{{-- 
          <p class="u-align-left u-text u-text-2"> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> --}}
        </div>
      </div>
      <img class="u-expanded-width-xs u-image u-image-1"
        src="{{asset("client/assets/images/breakup-marriage-couple-with-divorce-certification-min.webp")}}" data-image-width="250"
        data-image-height="198">
      <div class="u-accordion u-expanded-width-xs u-faq u-spacing-0 u-accordion-1">
        <div class="u-accordion-item">
          <a class="active u-accordion-link u-active-custom-color-2 u-border-1 u-border-grey-75 u-button-style u-custom-font u-hover-custom-color-1 u-text-active-custom-color-1 u-text-body-color u-text-hover-white u-white u-accordion-link-1"
            id="link-accordion-f600" aria-controls="accordion-f600" aria-selected="true">
            <span class="u-accordion-link-text"> Quelles sont les étapes d'un divorce amiable ?
              </span><span
              class="u-accordion-link-icon u-icon u-icon-circle u-text-grey-25 u-icon-1"><svg class="u-svg-link"
                preserveAspectRatio="xMidYMin slice" viewBox="0 0 448 448" style="">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7356"></use>
              </svg><svg class="u-svg-content" viewBox="0 0 448 448" id="svg-7356" style="">
                <path
                  d="m272 184c-4.417969 0-8-3.582031-8-8v-176h-80v176c0 4.417969-3.582031 8-8 8h-176v80h176c4.417969 0 8 3.582031 8 8v176h80v-176c0-4.417969 3.582031-8 8-8h176v-80zm0 0">
                </path>
              </svg></span>
          </a>
          <div
            class="u-accordion-active u-accordion-pane u-border-1 u-border-grey-75 u-border-hover-palette-5-light-2 u-container-style u-white u-accordion-pane-1"
            id="accordion-f600" aria-labelledby="link-accordion-f600">
            <div class="u-container-layout u-container-layout-2">
              <div class="fr-view u-clearfix u-rich-text u-text">
                <p style="text-align: justify;">Nous commençons par une consultation pour discuter de vos objectifs et évaluer la faisabilité d'un accord à l'amiable. Ensuite, nous vous guiderons à travers les démarches légales et administratives nécessaires..</p>
              </div>
            </div>
          </div>
        </div>
        <div class="u-accordion-item">
          <a class="u-accordion-link u-active-custom-color-2 u-border-1 u-border-grey-75 u-button-style u-custom-font u-hover-custom-color-1 u-text-active-custom-color-1 u-text-body-color u-text-hover-white u-white u-accordion-link-2"
            id="link-accordion-72f4" aria-controls="accordion-72f4" aria-selected="false">
            <span class="u-accordion-link-text"> Combien de temps faut-il pour obtenir un divorce contentieux ?</span><span
              class="u-accordion-link-icon u-icon u-icon-circle u-text-grey-25 u-icon-2"><svg class="u-svg-link"
                preserveAspectRatio="xMidYMin slice" viewBox="0 0 448 448" style="">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-fe9c"></use>
              </svg><svg class="u-svg-content" viewBox="0 0 448 448" id="svg-fe9c" style="">
                <path
                  d="m272 184c-4.417969 0-8-3.582031-8-8v-176h-80v176c0 4.417969-3.582031 8-8 8h-176v80h176c4.417969 0 8 3.582031 8 8v176h80v-176c0-4.417969 3.582031-8 8-8h176v-80zm0 0">
                </path>
              </svg></span>
          </a>
          <div
            class="u-accordion-pane u-border-1 u-border-grey-75 u-border-hover-palette-5-light-2 u-container-style u-white u-accordion-pane-2"
            id="accordion-72f4" aria-labelledby="link-accordion-72f4" wfd-invisible="true">
            <div class="u-container-layout u-container-layout-3">
              <div class="fr-view u-clearfix u-rich-text u-text">
                <p>La durée d'un divorce contentieux dépend de divers facteurs, y compris la complexité des problèmes en jeu et la charge de travail du tribunal. Nous vous aiderons à naviguer à travers ce processus de manière efficace.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="u-accordion-item">
          <a class="u-accordion-link u-active-custom-color-2 u-border-1 u-border-grey-75 u-button-style u-custom-font u-hover-custom-color-1 u-text-active-custom-color-1 u-text-body-color u-text-hover-white u-white u-accordion-link-3"
            id="link-accordion-854e" aria-controls="accordion-854e" aria-selected="false">
            <span class="u-accordion-link-text"> Quelles sont les conséquences financières d'un divorce ?</span><span
              class="u-accordion-link-icon u-icon u-icon-circle u-text-grey-25 u-icon-3"><svg class="u-svg-link"
                preserveAspectRatio="xMidYMin slice" viewBox="0 0 448 448" style="">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-45d0"></use>
              </svg><svg class="u-svg-content" viewBox="0 0 448 448" id="svg-45d0" style="">
                <path
                  d="m272 184c-4.417969 0-8-3.582031-8-8v-176h-80v176c0 4.417969-3.582031 8-8 8h-176v80h176c4.417969 0 8 3.582031 8 8v176h80v-176c0-4.417969 3.582031-8 8-8h176v-80zm0 0">
                </path>
              </svg></span>
          </a>
          <div
            class="u-accordion-pane u-border-1 u-border-grey-75 u-border-hover-palette-5-light-2 u-container-style u-white u-accordion-pane-3"
            id="accordion-854e" aria-labelledby="link-accordion-854e" wfd-invisible="true">
            <div class="u-container-layout u-container-layout-4">
              <div class="u-clearfix u-rich-text u-text">
                <p>
                  Les implications financières d'un divorce varient en fonction de divers facteurs, y compris la durée du mariage, les actifs et les dettes communs, et les arrangements de garde éventuels. Nous vous fournirons des conseils personnalisés pour minimiser les impacts financiers.</p>
                </div>
            </div>
          </div>
        </div>
        <div class="u-accordion-item u-expanded-width">
          <a class="u-accordion-link u-active-custom-color-2 u-border-1 u-border-grey-75 u-button-style u-custom-font u-hover-custom-color-1 u-text-active-custom-color-1 u-text-body-color u-text-hover-white u-white u-accordion-link-4"
            id="link-accordion-854e" aria-controls="accordion-854e" aria-selected="false">
            <span class="u-accordion-link-text"> Puis-je obtenir la garde exclusive de mes enfants ?
            </span><span
              class="u-accordion-link-icon u-icon u-icon-circle u-text-grey-25 u-icon-4"><svg class="u-svg-link"
                preserveAspectRatio="xMidYMin slice" viewBox="0 0 448 448" style="">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5bb2"></use>
              </svg><svg class="u-svg-content" viewBox="0 0 448 448" id="svg-5bb2" style="">
                <path
                  d="m272 184c-4.417969 0-8-3.582031-8-8v-176h-80v176c0 4.417969-3.582031 8-8 8h-176v80h176c4.417969 0 8 3.582031 8 8v176h80v-176c0-4.417969 3.582031-8 8-8h176v-80zm0 0">
                </path>
              </svg></span>
          </a>
          <div
            class="u-accordion-pane u-border-1 u-border-grey-75 u-border-hover-palette-5-light-2 u-container-style u-white u-accordion-pane-4"
            id="accordion-854e" aria-labelledby="link-accordion-854e" wfd-invisible="true">
            <div class="u-container-layout u-container-layout-5">
              <div class="u-clearfix u-rich-text u-text">
                <p>La décision de garde est basée sur le meilleur intérêt de l'enfant, et divers facteurs sont pris en compte. Nous travaillerons avec vous pour présenter votre cas de manière convaincante devant le tribunal, en tenant compte du bien-être de vos enfants.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="u-clearfix u-palette-5-light-2 u-section-7" id="carousel_9b83">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div
              class="u-container-align-center u-container-style u-image u-layout-cell u-size-20-lg u-size-20-xl u-size-60-md u-size-60-sm u-size-60-xs u-image-1"
              data-image-width="2000" data-image-height="1200">
              <div class="u-container-layout u-container-layout-1"></div>
            </div>
            <div
              class="u-container-align-center u-container-style u-layout-cell u-size-40-lg u-size-40-xl u-size-60-md u-size-60-sm u-size-60-xs u-white u-layout-cell-2">
              <div class="u-container-layout u-container-layout-2">
                <div class="u-form u-form-1">
                  <form action="https://forms.nicepagesrv.com/v2/form/process"
                    class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" source="email" name="form"
                    style="padding: 7px;">
                    <p class="u-align-center u-form-group u-form-text u-text u-text-1"> Demande de devis</p>
                    <div class="u-form-group u-form-name">
                      <label for="name-4c18" class="u-label">Nom</label>
                      <input type="text" placeholder="Veuillez saisir votre Nom complet" id="name-4c18" name="name"
                        class="u-border-2 u-border-grey-50 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none"
                        required="">
                    </div>
                    <div class="u-form-email u-form-group">
                      <label for="email-4c18" class="u-label">Email</label>
                      <input type="email" placeholder="Votre adresse mail" id="email-4c18" name="email"
                        class="u-border-2 u-border-grey-50 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none"
                        required="">
                    </div>
                    <div class="u-form-group u-form-select u-form-group-4">
                      <label for="select-f437" class="u-label">Veuillez sélectionner un service</label>
                      <div class="u-form-select-wrapper">
                        <select id="select-f437" name="select"
                          class="u-border-2 u-border-grey-50 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none">
                          <option value="Divorce a l’amiable" data-calc="">Divorce a l’amiable</option>
                          <option value="Item 2" data-calc="">Item 2</option>
                          <option value="Item 3" data-calc="">Item 3</option>
                        </select>
                        <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px"
                          viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve">
                          <polygon class="st0" points="8,12 2,4 14,4 "></polygon>
                        </svg>
                      </div>
                    </div>
                    <div class="u-form-group u-form-message">
                      <label for="message-4c18" class="u-label">Message</label>
                      <textarea placeholder="Entrez votre méssage " rows="4" cols="50" id="message-4c18" name="message"
                        class="u-border-2 u-border-grey-50 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-none"
                        required=""></textarea>
                    </div>
                    <div class="u-form-agree u-form-group u-form-group-6">
                      <label class="u-block-fd55-23 u-field-label" style=""></label>
                      <input type="checkbox" id="agree-2953" name="agree" class="u-agree-checkbox u-field-input"
                        required="">
                      <label for="agree-2953" class="u-agree-label u-field-label">Lorem ipsum dolor sit amet <a
                          class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                          href="#">Conditions</a>
                      </label>
                    </div>
                    <div
                      class="u-align-center-xs u-align-right-lg u-align-right-md u-align-right-sm u-align-right-xl u-form-group u-form-submit">
                      <a href="#"
                        class="u-active-black u-border-active-palette-4-light-1 u-border-hover-palette-4-light-1 u-border-none u-btn u-btn-submit u-button-style u-custom-color-3 u-hover-black u-btn-2">Demander
                        un devis </a>
                      <input type="submit" value="submit" class="u-form-control-hidden">
                    </div>
                    <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                    <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors
                      then try again. </div>
                    <input type="hidden" value="" name="recaptchaResponse">
                    <input type="hidden" name="formServices" value="a0bcfdd9-fa8e-14b1-d498-6c8ac1bdd00d">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection