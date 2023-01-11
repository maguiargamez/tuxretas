@extends('admin.layouts.login')
@section('content')
{{ Hash::make('admin') }}
<div class="d-flex flex-column flex-root" id="kt_app_root">
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
            <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                <div class="w-lg-500px p-10">
                    <form action="{{ route('login') }}" method="POST" class="form w-100" novalidate="novalidate" id="kt_sign_in_form">
                        @csrf
                        <div class="text-center mb-11">
                            <h1 class="text-dark fw-bolder mb-3">Bienvenido(a)</h1>
                            <div class="text-gray-500 fw-semibold fs-6">Por favor ingresa los datos de acceso: </div>
                        </div>
                        <div class="fv-row mb-8">                            
                            <input type="email" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" />                            
                            @error('email')
                                <div>{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="fv-row mb-3">
                            <input type="password" placehlder="Password" name="password" autocomplete="off" class="form-control bg-transparent" />                            
                            @error('password')
                                <div>{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="d-grid mb-10">
                            <button type="submit" class="btn btn-primary">
                                <span class="indicator-label">Ingresar</span>
                                <span class="indicator-progress">Porfavor espere...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>

                    </form>           
                </div>                
            </div>
        </div>
    </div>    
</div>
@endsection