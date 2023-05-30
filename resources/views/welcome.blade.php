@extends('usertemplates.app')
@section('content')
<!-- Icons Grid -->
<style>
    body {
        font-family: 'Lato', 'Helvetica Neue', Helvetica, Arial, sans-serif;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: 'Lato', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        font-weight: 700;
    }

    header.masthead {
        position: relative;
        background-color: #343a40;
        background: url("./img/bg-masthead.jpg") no-repeat center center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        padding-top: 8rem;
        padding-bottom: 8rem;
    }

    header.masthead .overlay {
        position: absolute;
        background-color: #212529;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        opacity: 0.3;
    }

    header.masthead h1 {
        font-size: 2rem;
    }

    @media (min-width: 768px) {
        header.masthead {
            padding-top: 12rem;
            padding-bottom: 12rem;
        }

        header.masthead h1 {
            font-size: 3rem;
        }
    }

    .showcase .showcase-text {
        padding: 3rem;
    }

    .showcase .showcase-img {
        min-height: 30rem;
        background-size: cover;
    }

    @media (min-width: 768px) {
        .showcase .showcase-text {
            padding: 7rem;
        }
    }

    .features-icons {
        padding-top: 2rem;
        padding-bottom: 2rem;
    }

    .features-icons .features-icons-item {
        max-width: 20rem;
    }

    .features-icons .features-icons-item .features-icons-icon {
        height: 7rem;
    }

    .features-icons .features-icons-item .features-icons-icon i {
        font-size: 4.5rem;
    }

    .features-icons .features-icons-item:hover .features-icons-icon i {
        font-size: 5rem;
    }

    .testimonials {
        padding-top: 2rem;
        padding-bottom: 1rem;
    }

    .testimonials .testimonial-item {
        max-width: 100rem;
    }

    .testimonials .testimonial-item img {
        max-width: 8rem;
        box-shadow: 0px 5px 5px 0px #adb5bd;
    }

    .call-to-action {
        position: relative;
        background-color: #343a40;
        background: url("./img/bg-masthead.jpg") no-repeat center center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        padding-top: 7rem;
        padding-bottom: 7rem;
    }

    .call-to-action .overlay {
        position: absolute;
        background-color: #212529;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        opacity: 0.3;
    }

    footer.footer {
        padding-top: 4rem;
        padding-bottom: 4rem;
    }

    .form-signin .checkbox {
        margin-bottom: 10px;
        margin-top: 10px;
    }
</style>
<!-- bagian 1 -->

<section class="testimonials text-center bg-light">
    <div class="container">
        <h2 class="mb-5">Juaranya Melayani !!!</h2>
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonial-item mx-auto mb-12 mb-lg-">
                    <h5></h5>
                    <p class="font-weight-light mb-12">"Solusi untuk masalah teknologi anda, kami menekankan pada fokus perusahaan untuk memberikan solusi yang tepat dan efektif dan masalah atau kebutuhan pelanggan di bidang jasa teknologi"</p>
                </div>
            </div>
            <img class="img-fluid mb-12" src="{{ asset('logo/heroes.png') }}" alt="">
            <!-- <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="img/testimonials-2.jpg" alt="">
                    <h5>Fred S.</h5>
                    <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
                </div>
            </div> -->
            <!-- <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="">
                    <h5>Sarah W.</h5>
                    <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
                </div>
            </div> -->
        </div>
    </div>
</section>

<!-- akhir bagian 1 -->





<section class="features-icons bg-light text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <!-- <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="icon-screen-desktop m-auto text-primary"></i>
                    </div>
                    <h3>Registrasi Imei Iphone & Android</h3>
                    <p class="lead mb-0">This theme will look great on any device, no matter the size!</p>
                </div> -->

                <!-- template card dengan bootsrap -->
                <div class="card text-bg-info mb-4">
                    <!-- <div class="card-header">Registrasi Imei Iphone dan Android</div> -->
                    <div class="card-body">
                        <h5 class="card-title">Registrasi Imei Iphone dan Android</h5>
                        <p class="card-text">Registrasikan IMEI anda melalui kami, solusi sinyal hilang pada Smartphone Ex inter</p>
                    </div>
                </div>




            </div>
            <!-- akhir 1 -->

            <!-- <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="icon-layers m-auto text-primary"></i>
                    </div>
                    <h3>Bootstrap 4 Ready</h3>
                    <p class="lead mb-0">Featuring the latest build of the new Bootstrap 4 framework!</p>
                </div>
            </div> -->
            <div class="col-lg-4">
                <div class="card text-bg-info mb-4">
                    <!-- <div class="card-header">Registrasi Imei Iphone dan Android</div> -->
                    <div class="card-body">
                        <h5 class="card-title">Jasa Pembuatan Website & Aplikasi Android
                        </h5>
                        <p class="card-text">Buat Website atau Aplikasi Android kini lebih mudah bersama kami baik untuk Proyek, Tugas kuliah, atau Instansi</p>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="icon-check m-auto text-primary"></i>
                    </div>
                    <h3>Easy to Use</h3>
                    <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>
                </div>
            </div> -->
            <div class="col-lg-4">
                <div class="card text-bg-info mb-4">
                    <!-- <div class="card-header">Registrasi Imei Iphone dan Android</div> -->
                    <div class="card-body">
                        <h5 class="card-title">Services iPhone, Android, Komputer, Laptop</h5>
                        <p class="card-text">Perbaiki masalah layar, baterai, kamera, dll pada Gadget kesayangan Anda.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Footer -->
<footer class="footer bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item mr-3">
                        <a href="#">
                            <i class="fa fa-facebook fa-2x fa-fw"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mr-3">
                        <a href="#">
                            <i class="fa fa-twitter fa-2x fa-fw"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fa fa-instagram fa-2x fa-fw"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script>
    $(document).ready(function() {
        $('#signin_btn').click(function() {
            var bt_box_object = bootbox.dialog({
                title: 'Please Sign In',
                closeButton: false,
                message: $('#login_form').html(),
                buttons: {
                    ok: {
                        label: 'Sign In',
                        callback: function() {
                            bt_box_object.modal('hide')
                        }
                    }
                }
            });
        });
    });
</script>
@endsection