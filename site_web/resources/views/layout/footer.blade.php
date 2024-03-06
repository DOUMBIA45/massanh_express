<div class="container py-5">
    <div class="row g-5">
        <div class="col-lg-4 col-md-12">
            <h1 class="text-white mb-4">
                <img class="img-fluid me-3" src="{{asset('assets/img/logo.png')}}" alt="" style="height: 100px;width: 150px"/>
            </h1>
            <p>Un ensemble de sociétés de droits nationaux spécialisées dans le domaine du biomédical, qui se veut leader en afrique.</p>
            <div class="d-flex pt-2">
                <a class="btn btn-square me-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square me-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square me-1" href=""><i class="fab fa-youtube"></i></a>
                <a class="btn btn-square me-0" href=""><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <h5 class="text-light mb-4">Addresse</h5>
            <p>
                <i class="fa fa-map-marker-alt me-3"></i>
                Abidjan, Riviera Faya, non loin du Lycée lnternational Jules Vernes
            </p>
            <p><i class="fa fa-phone-alt me-3"></i>(+225) 27 22 46 93 23 / 07 77 11 62 61</p>
            <p><i class="fa fa-envelope me-3"></i>jkouassi@massananhexpertiz.com / massananh1er@gmail.com</p>
        </div>
        <div class="col-lg-4 col-md-12">
            <h5 class="text-light mb-4">Newsletter</h5>
            <b class="errorMessage" style="color: red"></b>
            <b class="succesMessage" style="color: green"></b>
            <div class="position-relative mx-auto" style="max-width: 400px">
                <form>
                    <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="email" placeholder="E-mail" name="Email"/>
                    <button type="submit" id="NEWLETTER" class="btn btn-secondary py-2 position-absolute top-0 end-0 mt-2 me-2">
                        Envoyer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@push('script')
    @include('ajax.newletter')
@endpush
