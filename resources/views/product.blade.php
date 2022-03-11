@extends('master.master')

@section('content')
<section class="project section-padding" id="project">
          <div class="container-fluid">
               <div class="row">

               <!-- @dd($all_product) -->
                    <div class="col-lg-12 col-12">

                        <h2 class="mb-5 text-center" data-aos="fade-up">
                            Silahkan Lihat Produk Unggulan Kami
                            <strong>Digital Trends</strong>
                        </h2>

                
                        <div class="owl-carousel owl-theme" id="project-slide">
                        @foreach ($all_product as $p)
                              <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
                                   <img src="images/project/project-image01.jpg" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>{{$p->nama_jasa}}</small>

                                        <h3>
                                             <a href="project-detail.html">
                                                  <span>{{$p->Deskripsi}}</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div> -->
                          @endforeach

                         <!-- <div class="owl-carousel owl-theme" id="project-slide">
                              
                              <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
                                   <img src="images/project/project-image01.jpg" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>{{</small>

                                        <h3>
                                             <a href="project-detail.html">
                                                  <span>Marketing Online</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="images/project/project-image02.jpg" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>Website</small>

                                        <h3>
                                             <a href="project-detail.html">
                                                  <span>Pembuatan Website</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="images/project/project-image03.jpg" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>Model Produk</small>

                                        <h3>
                                             <a href="project-detail.html">
                                                  <span>Pembuatan Contoh Model Produk</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="images/project/project-image04.jpg" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>Social Media</small>

                                        <h3>
                                             <a href="project-detail.html">
                                                  <span>Pembuatan Feed Instagram</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="images/project/project-image05.jpg" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>Video</small>

                                        <h3>
                                             <a href="project-detail.html">
                                                  <span>Pembuatan Vidio</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div> -->
                         </div>
                    </div>

               </div>
          </div>
     </section>
@endsection