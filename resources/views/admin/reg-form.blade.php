@php
    $body_class_auth = 'login-page'
@endphp
@extends('layouts-admin.layout-admin')

@section('content')
    <!-- окно входа -->
    <div class="login-box">
        
        <div class="login-logo">
            <b>Admin</b>installcom
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">регистрация нового админа
                    <img src="/assets/images/logo.svg" alt="" class="header-logo lazy-loading" data-was-processed="true">
                </p>

                <form action="{{ route('admin.reg')}} " method="post">
                    @csrf
                     <div class="input-group mb-3">
                        <input type="text" name='name' class="form-control" placeholder="ФИО">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name='email' class="form-control" placeholder="логин">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name='password' class="form-control" placeholder="пароль">
                    </div>
                    
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Войти</button>
                        </div>
                    </div>
                </form>        
            </div>
        </div>
    </div>
@endsection