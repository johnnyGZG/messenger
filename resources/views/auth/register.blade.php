@extends('layouts.app') 

@section('content')

<b-container>
    <b-row  align-h="center">
        <b-col cols="8">
                <b-card
                header="Registro"
                header-tag="header-registro"
            >
                <b-form method="POST" action="{{ route('register') }}">
                    @csrf

                    <b-alert show>Por favor ingresa tus datos:</b-alert> 

                    <b-form-group 
                        id="name" 
                        label="Nombre" 
                        label-for="name"
                    >
                        <b-form-input
                            id="name"
                            type="name"
                            {{-- v-model="form.name" --}}
                            name="name" 
                            value="{{ old('name') }}" 
                            required 
                            autofocus />
                    </b-form-group>

                    <b-form-group 
                        id="email" 
                        label="Correo electronico:" 
                        label-for="email"
                        description="Nunca compartiremos tu correo. Estás seguro con nosotros"
                    >
                        <b-form-input
                            id="email"
                            type="email"
                            {{-- v-model="form.name" --}}
                            name="email" 
                            value="{{ old('email') }}" 
                            required
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

                    <b-form-group 
                        id="password-confirm" 
                        label="Confirmar contraseña:" 
                        label-for="password-confirm"
                    >
                        <b-form-input
                            id="password-confirm"
                            type="password"
                            {{-- v-model="form.name" --}}
                            name="password-confirm"
                            required />
                    </b-form-group>
    
                    <b-button
                        type="submit"
                        variant="primary"
                    >
                        Confirmar registro
                    </b-button>

                    @if (Route::has('login'))
                        <b-button
                            href="{{ route('login') }}"
                            variant="link"
                        >
                            ¿Ya te has registrado?
                        </b-button>
                    @endif
                </b-form>
            </b-card>
        </b-col>
    </b-row>
</b-container>


            {{-- <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> --}}

@endsection
