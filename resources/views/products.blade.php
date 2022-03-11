@extends('master.master')

@section('content')
<section class="project section-padding" id="project">
          <div class="container-fluid">
               <div class="row">
               <div class="col-lg-12 col-12">

                    <h2 class="mb-5 text-center" data-aos="fade-up">
                         Silahkan Lihat Produk Unggulan Kami
                             <strong>Digital Trends</strong>
                    </h2>
                    <div class="owl-carousel owl-theme" id="project-slide">
                    @foreach ($all_product as $p)
                              <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
                                  
                                   <img src="{{ ('images/project/'.$p-> Gambar) }}" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>{{$p->nama_jasa}}</small>

                                        <h3>
                                             <a href="project-detail.html">
                                                  <span>{{$p->Deskripsi}}</span>
                                                  <br>
                                                  <p>Lama Pengerjaan : {{$p->LamaPengerjaan}}
                                                      <br>
                                                     <strong>Harga : {{$p->Harga}}</strong> 
                                                  </p>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div> 
                          @endforeach
                    </div>
                </div>
            </div>
</section>
@endsection