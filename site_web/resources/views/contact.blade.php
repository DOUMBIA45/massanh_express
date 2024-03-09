@extends('base')
@section('title')
    Contact
@endsection

@section('content')
    @include("layout.head_start")
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <h1 class="display-6 mb-5 text-center">CONTACTEZ-NOUS</h1>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="bg-white rounded p-4">
                        <div class="mb-4">
                            <i class="fa fa-map-marker-alt fa-2x text-primary"></i>
                            <h4 class="text-primary"><Address></Address></h4>
                            <p class="mb-0">Abidjan, Riviera Faya, non loin du Lycée lnternational Jules Vernes</p>
                        </div>
                        <div class="mb-4">
                            <i class="fa fa-phone-alt fa-2x text-primary mb-3"></i>
                            <h4 class="text-primary">Mobile</h4>
                            <p class="mb-0">(+225) 27 22 46 93 23</p>
                            <p class="mb-0">(+225) 07 77 11 62 61</p>
                        </div>

                        <div class="">
                            <i class="fa fa-envelope-open fa-2x text-primary mb-3"></i>
                            <h4 class="text-primary">Email</h4>
                            <p class="mb-0">office@massananhexpertiz.com</p>
                            <p class="mb-0">jkouassi@massananhexpertiz.com</p>
                            <p class="mb-0">massananh1er@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 wow fadeIn" data-wow-delay="0.1s">
                    <h4 class="display-6 mb-5 text-center">Laissez-nous votre message </h4>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="fullName" placeholder="Nom et Prénoms"/>
                                    <label for="name">Nom et Prénoms</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" placeholder="E-mail"/>
                                    <label for="email">E-mail</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="sujet" placeholder="Sujet"/>
                                    <label for="subject">Sujet</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                     <textarea class="form-control" placeholder="Leave a message here" name="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit" id="AddContact">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px">
                    <div class="position-relative rounded overflow-hidden h-100">
                        <iframe
                            class="position-relative w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                            frameborder="0"
                            style="min-height: 450px; border: 0"
                            allowfullscreen=""
                            aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection

@push('script')
    @include('ajax.contact')
@endpush
