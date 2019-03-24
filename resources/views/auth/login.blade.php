@extends('layouts.app')

@section('content')
<b-container>
    <b-row  align-h="center">
        <b-col cols="8">
            <b-card
                header="Iniciar sesión"
                header-tag="header-inicio-sesion"
            >
                <b-form method="POST" action="{{ route('login') }}">
                    @csrf

                    <b-alert show>Datos personales</b-alert> 

                    <b-form-group 
                        id="email" 
                        label="Correo electronico:" 
                        label-for="email"
                    >
                        <b-form-input
                            id="email"
                            type="email"
                            {{-- v-model="form.name" --}}
                            name="email" 
                            value="{{ old('email') }}" 
                            required 
                            autofocus
                            placeholder="example@example.com" />
                    </b-form-group>

                    <b-form-group 
                        id="password" 
                        label="Contraseña:" 
                        label-for="password"
                    >
                        <b-form-input
                            id="password"
                            type="password"
                            {{-- v-model="form.name" --}}
                            name="password"
                            required />
                    </b-form-group>

                    <b-form-group>
                        <b-form-checkbox
                            id="remember"
                            name="remember"
                            {{-- v-model="status" --}}
                            {{ old('remember') ? 'checked="true"' : '' }}
                        >
                            Recordar sesión
                        </b-form-checkbox>
                    </b-form-group>
    
                    <b-button
                        type="submit"
                        variant="primary"
                    >
                        Ingresar
                    </b-button>

                    @if (Route::has('password.request'))
                        <b-button
                            href="{{ route('password.request') }}"
                            variant="link"
                        >
                            ¿Olvidaste tu contraseña?
                        </b-button>
                    @endif

                    {{-- <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div> --}}

                    {{-- <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div> --}}

                    {{-- <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} >

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div> --}}
                </b-form>
            </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection
