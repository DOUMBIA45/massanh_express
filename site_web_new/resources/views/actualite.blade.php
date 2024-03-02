@extends('base')
@section('title')
    Actualité
@endsection

@section('content')
    @include("layout.head_start")
    <!-- Packages Start -->
    <div class="container-fluid packages py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Actualité</h5>
                <h1 class="mb-0">Liste de nos Actualités</h1>
            </div>
            <div class="row g-4">
               <div class="col-md-3">
                   <div class="packages-item">
                       <div class="packages-img">
                           <img src="assets/img/t1.jpg" class="img-fluid w-100 rounded-top" alt="Image" style="height: 260px">
                       </div>
                       <div class="packages-content bg-light">
                           <div class="p-4 pb-0">
                               <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat</p>
                           </div>
                           <div class="row bg-primary rounded-bottom mx-0">
                               <div class="col-6 text-start px-0">

                               </div>
                               <div class="col-6 text-end px-0">
                                   <a href="#" class="btn-hover btn text-white py-2 px-4">Voir plus</a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-md-3">
                   <div class="packages-item">
                       <div class="packages-img">
                           <img src="assets/img/t1.jpg" class="img-fluid w-100 rounded-top" alt="Image" style="height: 260px">
                       </div>
                       <div class="packages-content bg-light">
                           <div class="p-4 pb-0">
                               <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat</p>
                           </div>
                           <div class="row bg-primary rounded-bottom mx-0">
                               <div class="col-6 text-start px-0">

                               </div>
                               <div class="col-6 text-end px-0">
                                   <a href="#" class="btn-hover btn text-white py-2 px-4">Voir plus</a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-md-3">
                   <div class="packages-item">
                       <div class="packages-img">
                           <img src="assets/img/t1.jpg" class="img-fluid w-100 rounded-top" alt="Image" style="height: 260px">
                       </div>
                       <div class="packages-content bg-light">
                           <div class="p-4 pb-0">
                               <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat</p>
                           </div>
                           <div class="row bg-primary rounded-bottom mx-0">
                               <div class="col-6 text-start px-0">

                               </div>
                               <div class="col-6 text-end px-0">
                                   <a href="#" class="btn-hover btn text-white py-2 px-4">Voir plus</a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-md-3">
                   <div class="packages-item">
                       <div class="packages-img">
                           <img src="assets/img/t1.jpg" class="img-fluid w-100 rounded-top" alt="Image" style="height: 260px">
                       </div>
                       <div class="packages-content bg-light">
                           <div class="p-4 pb-0">
                               <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat</p>
                           </div>
                           <div class="row bg-primary rounded-bottom mx-0">
                               <div class="col-6 text-start px-0">

                               </div>
                               <div class="col-6 text-end px-0">
                                   <a href="#" class="btn-hover btn text-white py-2 px-4">Voir plus</a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

            </div>
        </div>
    </div>
    <!-- Packages End -->
@endsection
