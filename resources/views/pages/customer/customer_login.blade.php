@extends('layouts')
@section('content')
@section('title','login')
<div id="checkout" class="panel panel-default">
                <div class="panel-heading">
                  <h2 class="panel-title">
                    <a data-toggle="collapse" data-parent="#checkout-page" href="#checkout-content" class="accordion-toggle">
                      Step 1: Checkout Options
                    </a>
                  </h2>
                </div>
                <div id="checkout-content" class="panel-collapse collapse in">
                  <div class="panel-body row">
                    
                    <div class="col-md-6 col-sm-6">
                      <h3>Returning Customer</h3>
                      <p>I am a returning customer.</p>
                      <form role="form" action="#">
                        <div class="form-group">
                          <label for="email-login">E-Mail</label>
                          <input type="text" id="email-login" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="password-login">Password</label>
                          <input type="password" id="password-login" class="form-control">
                        </div>
                        <a href="javascript:;">Forgotten Password?</a>
                        <div class="padding-top-20">                  
                          <button class="btn btn-primary" type="submit">Login</button>
                        </div>
                        <hr>
                        <div class="login-socio">
                          <p class="text-muted">or login using:</p>
                          <ul class="social-icons">
                            <li><a href="javascript:;" data-original-title="facebook" class="facebook" title="facebook"></a></li>
                            <li><a href="javascript:;" data-original-title="Twitter" class="twitter" title="Twitter"></a></li>
                            <li><a href="javascript:;" data-original-title="Google Plus" class="googleplus" title="Google Plus"></a></li>
                            <li><a href="javascript:;" data-original-title="Linkedin" class="linkedin" title="LinkedIn"></a></li>
                          </ul>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
@endsection