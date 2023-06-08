
<?php
use App\Database;
require_once './Database/Database.php';
$auteur=Database::Affichertout('auteurs');
$categories=Database::Affichertout('categories');


// var_dump($auteur);
// var_dump($categories);


include_once 'partials/_head.php'; ?>
        
      <section style="background: linear-gradient(112.84deg, #46BAEB 0.33%, #AF2CFF 38.23%, #F790AF 65.22%, #C1ABFF 100%)">
        
      <?php include_once 'partials/_navigation.php'; ?>

        <div class="overflow-hidden pt-32 pb-40">
          <div class="container">
            <div class="row align-items-center g-16">

            <!-- Image gauche -->
              <div class="col-12 col-md-3 mt-xl-n64">
                <div class="d-flex justify-content-center">
                  <img class="img-fluid" src="gradia-assets/images/hero/avatar-message.png" alt="">
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="text-center">
                  <h2 class="fs-7 text-white mb-6">Gérez vos livres avec efficacité </h2>
                  <p class="fs-16 fw-medium text-white mw-lg mx-auto mb-9">
                    Maximisez votre temps grâce à un système intuitif de gestion de livres.
                  </p>
                  <button class="btn btn-secondary mw-sm w-100 px-10 py-5 mb-9" type="button">
                    <div class="row justify-content-center align-items-center g-2">
                      <div class="col-auto">
                        <span class="fs-20 text-white text-uppercase fw-semibold mb-0" style="letter-spacing: 1px;">Get started now</span>
                      </div>
                      <div class="col-auto">
                        <svg width="19" height="18" viewbox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M9.49999 16.2C13.4764 16.2 16.7 12.9764 16.7 8.99999C16.7 5.02354 13.4764 1.79999 9.49999 1.79999C5.52354 1.79999 2.29999 5.02354 2.29999 8.99999C2.29999 12.9764 5.52354 16.2 9.49999 16.2ZM12.8364 8.36359L10.1364 5.66359C9.78491 5.31212 9.21506 5.31212 8.86359 5.66359C8.51212 6.01506 8.51212 6.58491 8.86359 6.93638L10.0272 8.09999L6.79999 8.09999C6.30293 8.09999 5.89999 8.50293 5.89999 8.99999C5.89999 9.49704 6.30293 9.89999 6.79999 9.89999H10.0272L8.86359 11.0636C8.51212 11.4151 8.51212 11.9849 8.86359 12.3364C9.21506 12.6879 9.78491 12.6879 10.1364 12.3364L12.8364 9.63638C13.1879 9.28491 13.1879 8.71506 12.8364 8.36359Z" fill="white"></path>
                        </svg>
                      </div>
                    </div>
                  </button>
                  <div class="row justify-content-center g-6">
                    <div class="col-auto">
                      <div class="row align-items-center g-2">
                        <div class="col-auto">
                          <svg class="mr-2" width="19" height="19" viewbox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.95831 10.2917L7.12498 13.4584L15.0416 5.54169" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="col-auto">
                          <h4 class="fs-18 fw-medium text-white mb-0">No credit card required</h4>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <div class="row align-items-center g-2">
                        <div class="col-auto">
                          <svg class="mr-2" width="19" height="19" viewbox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.95831 10.2917L7.12498 13.4584L15.0416 5.54169" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="col-auto">
                          <h4 class="fs-18 fw-medium text-white mb-0">Cancel anytime</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-3 align-self-end">
                <div class="d-flex justify-content-center">
                  <img class="img-fluid" src="gradia-assets/images/hero/avatar-message2.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
        
      <section class="pt-20 pb-32 bg-secondary overflow-hidden" style="background: linear-gradient(98.24deg, #6CD5F7 0%, #FEE2CE 35.94%, #B0A9DF 69.27%, #5B6AF0 100%);">
        <div class="container">
          <div class="mw-md-lg mx-auto text-center mb-20">
            <h2 class="fs-11 mb-0 text-secondary mb-5">Les categories de livres disponibles</h2>
            <p class="text-muted mw-md-md mx-auto mb-0">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim.</p>
          </div>
          <div class="container">
            <div class="row justify-content-center mb-8 g-4">
                <?php for($i=0;$i <= 8;$i++){?>
 
                <div class="col-auto justify-content-center">
                <div class="d-inline-flex justify-content-center align-items-center p-4 bg-white" style="border-radius: 40px;">
                  <div>
                    <div class="inline-block me-3" style="width: 14px; height: 14px; border-radius: 40px; background: linear-gradient(98.24deg, #6CD5F7 0%, #F89D5C 50.52%, #5B6AF0 100%);"></div>
                  </div>
                  <h3 class="fs-17 fw-semibold mb-0 text-secondary"><?=$categories[$i]['nom']?></h3>
                </div>
              </div>
              <?php }?>
              
              <!-- <div class="col-auto d-flex justify-content-center">
                <div class="d-inline-flex align-items-center p-4 bg-white" style="border-radius: 40px;">
                  <div>
                    <div class="inline-block me-3" style="width: 14px; height: 14px; border-radius: 40px; background: linear-gradient(98.24deg, #FFB36D 0%, #EC5353 100%);"></div>
                  </div>
                  <h3 class="fs-17 fw-semibold mb-0 text-secondary">Connect with experts</h3>
                </div>
              </div>
              <div class="col-auto d-flex justify-content-center">
                <div class="d-inline-flex align-items-center p-4 bg-white" style="border-radius: 40px;">
                  <div>
                    <div class="inline-block me-3" style="width: 14px; height: 14px; border-radius: 40px; background: linear-gradient(98.24deg, #6C2DD1 0%, #FF7DBC 100%);"></div>
                  </div>
                  <h3 class="fs-17 fw-semibold mb-0 text-secondary">Easy to chat</h3>
                </div>
              </div>
              <div class="col-auto d-flex justify-content-center">
                <div class="d-inline-flex align-items-center p-4 bg-white" style="border-radius: 40px;">
                  <div>
                    <div class="inline-block me-3" style="width: 14px; height: 14px; border-radius: 40px; background: linear-gradient(98.24deg, #CEE9C1 0%, #83C8DE 100%);"></div>
                  </div>
                  <h3 class="fs-17 fw-semibold mb-0 text-secondary">Video analytics</h3>
                </div>
              </div>
              <div class="col-auto d-flex justify-content-center">
                <div class="d-inline-flex align-items-center p-4 bg-white" style="border-radius: 40px;">
                  <div>
                    <div class="inline-block me-3" style="width: 14px; height: 14px; border-radius: 40px; background: linear-gradient(98.24deg, #56C1E3 0%, #5B6AF0 100%);"></div>
                  </div>
                  <h3 class="fs-17 fw-semibold mb-0 text-secondary">Secured Payments</h3>
                </div>
              </div>
            </div>
            <div class="row justify-content-center mb-8 g-4">
              <div class="col-auto d-flex justify-content-center">
                <div class="d-inline-flex justify-content-center align-items-center p-4 bg-white" style="border-radius: 40px;">
                  <div>
                    <div class="inline-block me-3" style="width: 14px; height: 14px; border-radius: 40px; background: linear-gradient(98.24deg, #6C2DD1 0%, #FF7DBC 100%);"></div>
                  </div>
                  <h3 class="fs-17 fw-semibold mb-0 text-secondary">Live marketing reports</h3>
                </div>
              </div>
              <div class="col-auto d-flex justify-content-center">
                <div class="d-inline-flex align-items-center p-4 bg-white" style="border-radius: 40px;">
                  <div>
                    <div class="inline-block me-3" style="width: 14px; height: 14px; border-radius: 40px; background: linear-gradient(98.24deg, #CEE9C1 0%, #83C8DE 100%);"></div>
                  </div>
                  <h3 class="fs-17 fw-semibold mb-0 text-secondary">Project management</h3>
                </div>
              </div>
              <div class="col-auto d-flex justify-content-center">
                <div class="d-inline-flex align-items-center p-4 bg-white" style="border-radius: 40px;">
                  <div>
                    <div class="inline-block me-3" style="width: 14px; height: 14px; border-radius: 40px; background: linear-gradient(98.24deg, #6CD5F7 0%, #F89D5C 50.52%, #5B6AF0 100%);"></div>
                  </div>
                  <h3 class="fs-17 fw-semibold mb-0 text-secondary">Edit videos &amp; audios</h3>
                </div>
              </div>
              <div class="col-auto d-flex justify-content-center">
                <div class="d-inline-flex align-items-center p-4 bg-white" style="border-radius: 40px;">
                  <div>
                    <div class="inline-block me-3" style="width: 14px; height: 14px; border-radius: 40px; background: linear-gradient(98.24deg, #56C1E3 0%, #5B6AF0 100%);"></div>
                  </div>
                  <h3 class="fs-17 fw-semibold mb-0 text-secondary">Transaction history</h3>
                </div>
              </div>
              <div class="col-auto d-flex justify-content-center">
                <div class="d-inline-flex align-items-center p-4 bg-white" style="border-radius: 40px;">
                  <div>
                    <div class="inline-block me-3" style="width: 14px; height: 14px; border-radius: 40px; background: linear-gradient(98.24deg, #6CD5F7 0%, #FEE2CE 35.94%, #B0A9DF 69.27%, #5B6AF0 100%);"></div>
                  </div>
                  <h3 class="fs-17 fw-semibold mb-0 text-secondary">No hidden fees</h3>
                </div>
              </div>
            </div>
            <div class="row justify-content-center g-4">
              <div class="col-auto d-flex justify-content-center">
                <div class="d-inline-flex justify-content-center align-items-center p-4 bg-white" style="border-radius: 40px;">
                  <div>
                    <div class="inline-block me-3" style="width: 14px; height: 14px; border-radius: 40px; background: linear-gradient(98.24deg, #CEE9C1 0%, #83C8DE 100%);"></div>
                  </div>
                  <h3 class="fs-17 fw-semibold mb-0 text-secondary">Manage remote team</h3>
                </div>
              </div>
              <div class="col-auto d-flex justify-content-center">
                <div class="d-inline-flex align-items-center p-4 bg-white" style="border-radius: 40px;">
                  <div>
                    <div class="inline-block me-3" style="width: 14px; height: 14px; border-radius: 40px; background: linear-gradient(98.24deg, #56C1E3 0%, #5B6AF0 100%);"></div>
                  </div>
                  <h3 class="fs-17 fw-semibold mb-0 text-secondary">Connect with experts</h3>
                </div>
              </div>
              <div class="col-auto d-flex justify-content-center">
                <div class="d-inline-flex align-items-center p-4 bg-white" style="border-radius: 40px;">
                  <div>
                    <div class="inline-block me-3" style="width: 14px; height: 14px; border-radius: 40px; background: linear-gradient(98.24deg, #FFB36D 0%, #EC5353 100%);"></div>
                  </div>
                  <h3 class="fs-17 fw-semibold mb-0 text-secondary">Easy to chat</h3>
                </div>
              </div>
              <div class="col-auto d-flex justify-content-center">
                <div class="d-inline-flex align-items-center p-4 bg-white" style="border-radius: 40px;">
                  <div>
                    <div class="inline-block me-3" style="width: 14px; height: 14px; border-radius: 40px; background: linear-gradient(98.24deg, #6C2DD1 0%, #FF7DBC 100%);"></div>
                  </div>
                  <h3 class="fs-17 fw-semibold mb-0 text-secondary">Video analytics</h3>
                </div>
              </div>
              <div class="col-auto d-flex justify-content-center">
                <div class="d-inline-flex align-items-center p-4 bg-white" style="border-radius: 40px;">
                  <div>
                    <div class="inline-block me-3" style="width: 14px; height: 14px; border-radius: 40px; background: linear-gradient(98.24deg, #56C1E3 0%, #5B6AF0 100%);"></div>
                  </div>
                  <h3 class="fs-17 fw-semibold mb-0 text-secondary">Secured Payments</h3>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </section>
        
      <section class="pt-28 pb-36 bg-secondary overflow-hidden">
        <div class="container">
          <div class="text-center mb-20">
            <p class="d-inline-block fs-20 fw-semibold text-white text-uppercase mb-6" style="letter-spacing: 1px; background: linear-gradient(98.24deg, #6CD5F7 0%, #FEE2CE 35.94%, #B0A9DF 69.27%, #5B6AF0 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">The team that made us successful</p>
            <h2 class="fs-10 fw-semibold text-white mb-5">les auteurs</h2>
          </div>
          <div class="container">
            <div class="row g-6">
              <?php for($i=0;$i < 4;$i++){?>
              <div class="col-12 col-md-6 col-lg-3">
                <div class="position-relative d-flex flex-column justify-content-end h-100 rounded-1 overflow-hidden" style="background: linear-gradient(90deg, rgba(108,213,246,1 ) 0%, rgba(248,157,92,1) 50%, rgba(91,106,240,1) 100%);">
                  <div class="d-flex justify-content-center">
                    <img class="w-100" src="gradia-assets/images/teams/avatar-xl.png" alt="">
                  </div>
                  <div class="position-absolute bottom-0 start-0 p-3 w-100">
                    <div class="py-4 px-5 bg-white rounded-1">
                      <h3 class="fs-17 mb-1"><?=$auteur[$i]['nom']?> <?=$auteur[$i]['prenom']?></h3>
                      <p class="text-muted mb-0">Origine: <?=$auteur[$i]['nationalite']?></p>
                      <p class="text-muted mb-0"> Année: <?=$auteur[$i]['dateNaissance']?></p>

                    </div>
                  </div>
                </div>
              </div>
              <?php }?>
              <div class="text-center mb-20">
            <a href="auteur.php?all" class="fs-10 fw-semibold text-white mb-5">Voir tout les auteurs</a>
          </div>

              <!-- <div class="col-12 col-md-6 col-lg-3">
                <div class="position-relative d-flex flex-column justify-content-end h-100 rounded-1 overflow-hidden" style="background: linear-gradient(90deg, rgba(108,213,246,1 ) 0%, rgba(248,157,92,1) 50%, rgba(91,106,240,1) 100%);">
                  <div class="d-flex justify-content-center">
                    <img class="w-100" src="gradia-assets/images/teams/avatar-xl2.png" alt="">
                  </div>
                  <div class="position-absolute bottom-0 start-0 p-3 w-100">
                    <div class="py-4 px-5 bg-white rounded-1">
                      <h3 class="fs-17 mb-1">Eleanor Pena</h3>
                      <p class="text-muted mb-0">Co-Founder, CTO</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3">
                <div class="position-relative d-flex flex-column justify-content-end h-100 rounded-1 overflow-hidden" style="background: linear-gradient(90deg, rgba(108,213,246,1 ) 0%, rgba(248,157,92,1) 50%, rgba(91,106,240,1) 100%);">
                  <div class="d-flex justify-content-center">
                    <img class="w-100" src="gradia-assets/images/teams/avatar-xl3.png" alt="">
                  </div>
                  <div class="position-absolute bottom-0 start-0 p-3 w-100">
                    <div class="py-4 px-5 bg-white rounded-1">
                      <h3 class="fs-17 mb-1">Devon Lane</h3>
                      <p class="text-muted mb-0">Chief Marketing Officer</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3">
                <div class="position-relative d-flex flex-column justify-content-end h-100 rounded-1 overflow-hidden" style="background: linear-gradient(90deg, rgba(108,213,246,1 ) 0%, rgba(248,157,92,1) 50%, rgba(91,106,240,1) 100%);">
                  <div class="d-flex justify-content-center">
                    <img class="w-100" src="gradia-assets/images/teams/avatar-xl4.png" alt="">
                  </div>
                  <div class="position-absolute bottom-0 start-0 p-3 w-100">
                    <div class="py-4 px-5 bg-white rounded-1">
                      <h3 class="fs-17 mb-1">Robert Fox</h3>
                      <p class="text-muted mb-0">Senior Software Developer</p>
                    </div>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </section>
        
      <section class="position-relative py-24 bg-black overflow-hidden">
        <img class="position-absolute bottom-0 start-0" src="gradia-assets/elements/footers/radial2.svg" alt="">
        <div class="position-relative container" style="z-index: 50;">
          <div class="row g-16">
            <div class="col-12 col-md-6 col-lg-6">
              <div class="d-flex flex-column justify-content-between h-100">
                <div class="mb-11">
                  <a class="d-inline-block mb-11" href="#">
                    <img class="img-fluid" src="gradia-assets/logos/gradia-name-white.svg" alt="">
                  </a>
                  <p class="text-light-dark fw-medium mw-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pretium dui convallis sagittis tempus mi viverra eget. Quisque justo, blandit orci.</p>
                </div>
                <div>
                  <p class="fs-19 text-secondary-light mb-0">© Copyright 2022. All Rights Reserved by Gradia.</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-2">
              <h3 class="fs-18 fw-medium text-dark mb-9">Company</h3>
              <ul class="nav flex-column">
                <li class="nav-item mb-2">
                  <a class="nav-link px-0" href="#">
                    <h3 class="fs-18 fw-medium text-white mb-0">Features</h3>
                  </a>
                </li>
                <li class="nav-item mb-2">
                  <a class="nav-link px-0" href="#">
                    <h3 class="fs-18 fw-medium text-white mb-0">Pricing</h3>
                  </a>
                </li>
                <li class="nav-item mb-2">
                  <a class="nav-link px-0" href="#">
                    <h3 class="fs-18 fw-medium text-white mb-0">Affiliate Program</h3>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link px-0" href="#">
                    <h3 class="fs-18 fw-medium text-white mb-0">Press Kit</h3>
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-2">
              <h3 class="fs-18 fw-medium text-dark mb-9">Support</h3>
              <ul class="nav flex-column">
                <li class="nav-item mb-2">
                  <a class="nav-link px-0" href="#">
                    <h3 class="fs-18 fw-medium text-white mb-0">Account</h3>
                  </a>
                </li>
                <li class="nav-item mb-2">
                  <a class="nav-link px-0" href="#">
                    <h3 class="fs-18 fw-medium text-white mb-0">Help</h3>
                  </a>
                </li>
                <li class="nav-item mb-2">
                  <a class="nav-link px-0" href="#">
                    <h3 class="fs-18 fw-medium text-white mb-0">Contact Us</h3>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link px-0" href="#">
                    <h3 class="fs-18 fw-medium text-white mb-0">Customer Support</h3>
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-2">
              <h3 class="fs-18 fw-medium text-dark mb-9">Contact Info</h3>
              <ul class="nav flex-column">
                <li class="nav-item mb-2">
                  <a class="nav-link px-0" href="#">
                    <h3 class="fs-18 fw-medium text-white mb-0">hi@gradia.com</h3>
                  </a>
                </li>
                <li class="nav-item mb-2">
                  <a class="nav-link px-0" href="#">
                    <h3 class="fs-18 fw-medium text-white mb-0">+1 (394) 593 1994</h3>
                  </a>
                </li>
              </ul>
              <div class="row mt-6 ms-n4">
                <div class="col-auto p-5">
                  <a href="#">
                    <svg width="14" height="12" viewbox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M13.6488 1.58924C13.137 1.81672 12.5967 1.9589 12.028 2.0442C12.5967 1.70298 13.0517 1.16271 13.2507 0.508707C12.7105 0.821493 12.1133 1.04897 11.4593 1.19115C10.9475 0.650883 10.2082 0.309662 9.41201 0.309662C7.87652 0.309662 6.62537 1.5608 6.62537 3.0963C6.62537 3.32378 6.65381 3.52283 6.71068 3.72187C4.40744 3.60813 2.33168 2.49916 0.938358 0.793058C0.710877 1.21958 0.568702 1.67455 0.568702 2.18638C0.568702 3.15317 1.0521 4.00622 1.81985 4.51805C1.36488 4.48962 0.938358 4.37588 0.540266 4.17683V4.20527C0.540266 5.57015 1.50706 6.70755 2.78664 6.96347C2.55916 7.02034 2.30324 7.04877 2.04733 7.04877C1.87672 7.04877 1.67767 7.02034 1.50706 6.9919C1.87672 8.10087 2.90038 8.92549 4.12309 8.92549C3.15629 9.6648 1.96202 10.1198 0.654007 10.1198C0.426526 10.1198 0.199046 10.1198 0 10.0913C1.25114 10.8875 2.70133 11.3425 4.2937 11.3425C9.44045 11.3425 12.2555 7.07721 12.2555 3.38065C12.2555 3.26691 12.2555 3.12473 12.2555 3.01099C12.7958 2.64134 13.2792 2.15794 13.6488 1.58924Z" fill="white"></path>
                    </svg>
                  </a>
                </div>
                <div class="col-auto p-5">
                  <a href="#">
                    <svg width="8" height="15" viewbox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M2.34923 14.8715V8.08792H0.0664062V5.44422H2.34923V3.49457C2.34923 1.23201 3.73112 0 5.74948 0C6.71629 0 7.54722 0.0719815 7.78937 0.104155V2.46866L6.38954 2.4693C5.29184 2.4693 5.0793 2.9909 5.0793 3.75633V5.44422H7.6972L7.35634 8.08792H5.07929V14.8715H2.34923Z" fill="white"></path>
                    </svg>
                  </a>
                </div>
                <div class="col-auto p-5">
                  <a href="#">
                    <svg width="18" height="17" viewbox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8.78828 1.49101C10.9976 1.49101 11.2592 1.49928 12.132 1.53908C12.6568 1.5455 13.1765 1.64186 13.6687 1.82396C14.0257 1.96161 14.3498 2.17247 14.6203 2.44298C14.8908 2.71348 15.1017 3.03763 15.2393 3.39456C15.4214 3.88675 15.5178 4.40652 15.5242 4.93127C15.5636 5.80404 15.5723 6.06568 15.5723 8.275C15.5723 10.4843 15.564 10.746 15.5242 11.6187C15.5178 12.1435 15.4214 12.6633 15.2393 13.1554C15.1017 13.5124 14.8908 13.8365 14.6203 14.107C14.3498 14.3775 14.0257 14.5884 13.6687 14.726C13.1765 14.9081 12.6568 15.0045 12.132 15.0109C11.2596 15.0503 10.998 15.059 8.78828 15.059C6.57857 15.059 6.31693 15.0507 5.44455 15.0109C4.91979 15.0045 4.40003 14.9081 3.90784 14.726C3.55091 14.5884 3.22676 14.3775 2.95626 14.107C2.68575 13.8365 2.47489 13.5124 2.33724 13.1554C2.15513 12.6633 2.05878 12.1435 2.05236 11.6187C2.01295 10.746 2.00428 10.4843 2.00428 8.275C2.00428 6.06568 2.01256 5.80404 2.05236 4.93127C2.05878 4.40652 2.15513 3.88675 2.33724 3.39456C2.47489 3.03763 2.68575 2.71348 2.95626 2.44298C3.22676 2.17247 3.55091 1.96161 3.90784 1.82396C4.40003 1.64186 4.91979 1.5455 5.44455 1.53908C6.31732 1.49967 6.57896 1.49101 8.78828 1.49101ZM8.78828 0C6.54232 0 6.2594 0.00945666 5.37678 0.0496476C4.69 0.0633078 4.01052 0.193342 3.36723 0.43422C2.81539 0.642135 2.31556 0.967957 1.90262 1.38895C1.48125 1.80204 1.15515 2.30215 0.947104 2.85435C0.706226 3.49764 0.576192 4.17712 0.562531 4.86389C0.523129 5.74573 0.513672 6.02864 0.513672 8.27461C0.513672 10.5206 0.523129 10.8035 0.56332 11.6861C0.57698 12.3729 0.707014 13.0524 0.947892 13.6957C1.15571 14.2478 1.48153 14.7479 1.90262 15.161C2.31579 15.5821 2.8159 15.908 3.36802 16.1158C4.01131 16.3567 4.69079 16.4867 5.37757 16.5004C6.26019 16.5398 6.54192 16.55 8.78907 16.55C11.0362 16.55 11.3179 16.5405 12.2006 16.5004C12.8873 16.4867 13.5668 16.3567 14.2101 16.1158C14.7596 15.9028 15.2586 15.5774 15.6752 15.1606C16.0918 14.7437 16.4168 14.2445 16.6295 13.6949C16.8703 13.0516 17.0004 12.3721 17.014 11.6853C17.0534 10.8035 17.0629 10.5206 17.0629 8.27461C17.0629 6.02864 17.0534 5.74573 17.0132 4.8631C16.9996 4.17633 16.8695 3.49685 16.6287 2.85356C16.4209 2.30144 16.095 1.80133 15.6739 1.38816C15.2608 0.967073 14.7607 0.641246 14.2085 0.433432C13.5653 0.192554 12.8858 0.0625198 12.199 0.0488596C11.3172 0.00945672 11.0342 0 8.78828 0Z" fill="white"></path>
                      <path d="M8.78632 4.02582C7.94591 4.02582 7.12436 4.27503 6.42559 4.74194C5.72681 5.20885 5.18218 5.87248 4.86056 6.64892C4.53895 7.42537 4.4548 8.27974 4.61876 9.104C4.78272 9.92827 5.18741 10.6854 5.78168 11.2797C6.37594 11.8739 7.13307 12.2786 7.95734 12.4426C8.78161 12.6065 9.63598 12.5224 10.4124 12.2008C11.1889 11.8792 11.8525 11.3345 12.3194 10.6358C12.7863 9.93698 13.0355 9.11544 13.0355 8.27503C13.0355 7.14807 12.5878 6.06726 11.791 5.27038C10.9941 4.4735 9.91328 4.02582 8.78632 4.02582ZM8.78632 11.0332C8.2408 11.0332 7.70753 10.8715 7.25394 10.5684C6.80036 10.2653 6.44683 9.83454 6.23807 9.33054C6.02931 8.82655 5.97469 8.27197 6.08111 7.73693C6.18754 7.20189 6.45023 6.71042 6.83598 6.32468C7.22172 5.93894 7.71318 5.67625 8.24822 5.56982C8.78326 5.4634 9.33784 5.51802 9.84184 5.72678C10.3458 5.93554 10.7766 6.28907 11.0797 6.74265C11.3828 7.19623 11.5445 7.7295 11.5445 8.27503C11.5445 9.00655 11.2539 9.70811 10.7367 10.2254C10.2194 10.7426 9.51784 11.0332 8.78632 11.0332Z" fill="white"></path>
                      <path d="M13.2058 4.85053C13.7542 4.85053 14.1988 4.40597 14.1988 3.85758C14.1988 3.30918 13.7542 2.86462 13.2058 2.86462C12.6575 2.86462 12.2129 3.30918 12.2129 3.85758C12.2129 4.40597 12.6575 4.85053 13.2058 4.85053Z" fill="white"></path>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    
      <?php include_once 'partials/_footer.php'; ?>