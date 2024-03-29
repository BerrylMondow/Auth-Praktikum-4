@vite('resources/sass/app.scss')
<title>Employee Data Master</title>
<style>
    .title{
        font-weight: bolder;
    }

    body{
        background-color: blue;
    }
</style>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="card" style="width: 13cm; padding-bottom: 2cm;">
                <center><svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" class="text-primary mt-5 mb-3" fill="currentColor" class="bi bi-hexagon-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8.5.134a1 1 0 0 0-1 0l-6 3.577a1 1 0 0 0-.5.866v6.846a1 1 0 0 0 .5.866l6 3.577a1 1 0 0 0 1 0l6-3.577a1 1 0 0 0 .5-.866V4.577a1 1 0 0 0-.5-.866L8.5.134z"/>
                  </svg></center>
            <h4 class="text-center" style="font-weight: bold;">EMPLOYEE DATA MASTER</h4>
            <center><hr style="width: 10cm;"></center>
            <div class="form-group mx-auto">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div >
                    <label for="email"></label>
                    <input id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" style="width: 10cm; padding: 5px;" placeholder="Enter Your Email" type="email" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>

                    <div class="mt-4">
                    <label for="password"></label>
                    <input id="password" class="form-control @error('password') is-invalid @enderror" style="width: 10cm; padding: 5px;" placeholder="Enter Your Password" type="password" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                        <!--
                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </-div> -->
                        <center><hr style="width: 10cm;"></center>
            <div class="button text-center">
                <button class="btn btn-primary" type="submit" style="width: 10cm; padding: 10px;"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                    <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                  </svg> Log in</button>
            </div>
                </form>
            </div>
        </div>
    </div>
</div>
@vite('resources/js/app.js')

</body>
