
<!DOCTYPE html>
<html lang="en">
<head>
   @include('admin.includes.head')
<body>
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="{{asset('assets/img/logo.jpg')}}" alt="logo" width="100" class="shadow-light rounded-circle">
                    </div>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4 class="text-center">Connexion</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="#" class="needs-validation" novalidate="">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" tabindex="1" required autofocus placeholder="E-mail">
                                    <div class="invalid-feedback">
                                        Veuillez remplir le champ e-mail
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="d-block">
                                        <label class="control-label">Mot de passe</label>
                                    </div>
                                    <input type="password" class="form-control" name="password" tabindex="2" required placeholder="Mot de passe">
                                    <div class="invalid-feedback">
                                        Veuillez remplir le champ mot de passe
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4" id="login">connexion</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- General JS Scripts -->
@include('admin.includes.script')
@include('ajax.login')
</body>
</html>
