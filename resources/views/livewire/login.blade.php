<div>
     <form wire:submit.prevent="loginUser">
                 <div class="login-modal-right">
                    

                                        <div class="tab-content">
                                           @if (session()->has('message'))
                                                <div class="alert alert-success">
                                                    {{ session('message') }}
                                                </div>
                                            @endif
                                            @if (session()->has('error'))
                                                <div class="alert alert-danger">
                                                    {{ session('error') }}
                                                </div>
                                            @endif
                                            <div class="tab-pane active" id="login" role="tabpanel">
                                                <h5 class="heading-design-h5">Login to your account</h5>
                                                <fieldset class="form-group">
                                                    <label>Enter Email</label>
                                                    <input type="email" wire:model="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email-Address">
                                                     @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <label>Enter Password</label>
                                                    <input type="password" wire:model="password" class="form-control @error('password') is-invalid @enderror" placeholder="********">
                                                      @error('password') <span class="error text-danger">{{ $message }}</span> @enderror
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <button type="submit" class="btn btn-lg btn-secondary btn-block">Login</button>
                                                </fieldset>
                                                {{-- <div class="login-with-sites text-center">
                                                    <p>or Login with your social profile:</p>
                                                    <button class="btn-facebook login-icons btn-lg"><i
                                                            class="mdi mdi-facebook"></i>
                                                        Facebook</button>
                                                    <button class="btn-google login-icons btn-lg"><i
                                                            class="mdi mdi-google"></i>
                                                        Google</button>
                                                    <button class="btn-twitter login-icons btn-lg"><i
                                                            class="mdi mdi-twitter"></i>
                                                        Twitter</button>
                                                </div> --}}
                                                {{-- <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">Remember
                                                        me</label>
                                                </div> --}}
                                            </div>
                                            {{-- <div class="tab-pane" id="register" role="tabpanel">
                                                <h5 class="heading-design-h5">Register Now!</h5>
                                                <fieldset class="form-group">
                                                    <label>Enter Email/Mobile number</label>
                                                    <input type="text" class="form-control" placeholder="+91 123 456 7890">
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <label>Enter Password</label>
                                                    <input type="password" class="form-control" placeholder="********">
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <label>Enter Confirm Password </label>
                                                    <input type="password" class="form-control" placeholder="********">
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <button type="submit" class="btn btn-lg btn-secondary btn-block">Create Your
                                                        Account</button>
                                                </fieldset>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                    <label class="custom-control-label" for="customCheck2">I Agree with
                                                        <a href="#">Term and Conditions</a></label>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <div class="clearfix"></div>
                                        {{-- <div class="text-center login-footer-tab">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#login" role="tab"><i class="mdi mdi-lock"></i> LOGIN</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#register" role="tab"><i
                                                            class="mdi mdi-pencil"></i> REGISTER</a>
                                                </li>
                                            </ul>
                                        </div> --}}
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
</div>
