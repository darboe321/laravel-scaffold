@extends('layouts.auth')

@section('auth')
    <div class="col-sm-12 text-center">
        <img class="img-fluid logo" src="/img/sisi_slogan.png" alt="">
        <br><br><br><br>
    </div>

    <div class="col-sm-12 text-center">
        <p>Llámanos</p>
        <a class="btn-white btn-phone" href="tel:627-142-0604">
            <h3>
                <!-- <i class="fas fa-phone"></i> -->
                <small class="fa-stack">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fas fa-phone fa-stack-1x fa-inverse"></i>
              </small>
                 627 142 0604
            </h3>
        </a>
        <br>
    </div>

    <div class="col-sm-12 text-center">
        <p>o haz tu pedido por</p>
        <a class="btn btn-lg btn-light" href="https://api.whatsapp.com/send?phone=526271420604&text=Me%20puedes%20traer%20&source=&data=">
            <i class="fab fa-whatsapp"></i> WhatsApp
        </a>
        <br><br><br><br>
    </div>

    <div class="col-sm-12 text-center">
        <p>
            <!-- <a class="btn-white" href="fb://page/sisiapp/f?href=https://www.facebook.com/sisiapp">
                <i class="fab fa-lg fa-facebook-square"></i>
            </a> -->
            <a class="btn-white d-inline d-sm-none" href="fb://page/296760280983048">
                <i class="fab fa-lg fa-facebook-square"></i>
            </a>
            <a class="btn-white d-none d-sm-inline" href="https://www.facebook.com/sisiapp" target="_blank">
                <i class="fab fa-lg fa-facebook-square"></i>
            </a>

            &nbsp;&nbsp;
            <a class="btn-white" href="https://m.me/sisiapp" target="_blank">
                <i class="fab fa-lg fa-facebook-messenger"></i>
            </a>
        </p>
    </div>

    <div class="col-sm-12 text-center">
        <p>
            <a class="btn-white" href="mailto:megusta@sisiapp.mx">
                megusta@sisiapp.mx
            </a>
        </p>
    </div>
@endsection
