<?php

use App\Database;

require_once './Database/Database.php';

include_once 'partials/_head.php'; 

$auteurs = Database::afficherTout('auteurs');
$categories = Database::afficherTout('categories');



?>
        
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
            <h2 class="fs-11 mb-0 text-secondary mb-5">Pour tout les goûts et envies littéraires</h2>
            <p class="text-muted mw-md-md mx-auto mb-0">Navigez par catégorie de livre.</p>
          </div>
          <div class="container">
            <div class="row justify-content-center mb-8 g-4">
              <?php for($i=0; $i<6; $i++){?>
              <div class="col-auto justify-content-center">
                <div class="d-inline-flex justify-content-center align-items-center p-4 bg-white" style="border-radius: 40px;">
                  <div>
                    <div class="inline-block me-3" style="width: 14px; height: 14px; border-radius: 40px; background: linear-gradient(98.24deg, #6CD5F7 0%, #F89D5C 50.52%, #5B6AF0 100%);"></div>
                  </div>
                  <h3 class="fs-17 fw-semibold mb-0 text-secondary"><?=$categories[$i]['nom']?></h3>
                </div>
              </div>
              <?php }?>
              
            </div>
          </div>
        </div>
      </section>
        
      <section class="pt-28 pb-36 bg-secondary overflow-hidden">
        <div class="container">
          <div class="text-center mb-20">
            <p class="d-inline-block fs-20 fw-semibold text-white text-uppercase mb-6" style="letter-spacing: 1px; background: linear-gradient(98.24deg, #6CD5F7 0%, #FEE2CE 35.94%, #B0A9DF 69.27%, #5B6AF0 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">The team that made us successful</p>
            <h2 class="fs-10 fw-semibold text-white mb-5">Les auteurs</h2>
          </div>
          <div class="container">
            <div class="row g-6">
              <?php for($e=0; $e<4; $e++){?>
              <div class="col-12 col-md-6 col-lg-3">
                <div class="position-relative d-flex flex-column justify-content-end h-100 rounded-1 overflow-hidden" style="background: linear-gradient(90deg, rgba(108,213,246,1 ) 0%, rgba(248,157,92,1) 50%, rgba(91,106,240,1) 100%);">
                  <div class="d-flex justify-content-center">
                    <img class="w-100" src="gradia-assets/images/teams/avatar-xl.png" alt="">
                  </div>
                  <div class="position-absolute bottom-0 start-0 p-3 w-100">
                    <div class="py-4 px-5 bg-white rounded-1">
                      <h3 class="fs-17 mb-1"><?=$auteurs[$e]['nom']?> <?=$auteurs[$e]['prenom']?></h3>
                      <p class="text-muted mb-0">Nombre de livre: <?=$auteurs[$e]['nombreOeuvre']?></p>
                      <p class="text-muted mb-0">Origine: <?=$auteurs[$e]['nationalite']?></p>
                      <p class="text-muted mb-0"> Année: <?=$auteurs[$e]['dateNaissance']?></p>

                    </div>
                  </div>
                </div>
              </div>
              <?php }?>

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
        
      <?php include_once 'partials/_footer.php'; ?>