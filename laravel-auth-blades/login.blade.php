@extends('components.auth.template')

@section('panel')

<div class="login-panel">
    <div class="form">
        <div class="title">
            <h3>Entrar na minha Conta</h3>
        </div>
            @if ($message = Session::get('error'))
                <div class="message error">
                    <p>
                        {{ $message }}
                    </p>
                </div>
            @else
                
            @endif

            @if ($message = Session::get('warning'))
                <div class="message info">
                    <p>
                        {{ $message }}
                    </p>
                </div>
            @else
                
            @endif
            
        <form action="authenticate" method="POST">
            <div class="">
                <label for="">Email</label>
                <input type="email" name="email" placeholder="" required>
            </div>
            <div class="">
                <label for="">Senha</label>
                <input type="password" name="password" placeholder="" required>
            </div>
            <section class="forget-password">
                <span><a href="/auth/forget-password">Esqueceu a sua Palavra-Passe?</a></span>
            </section>
            <div class="">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </div>
            <div class="button">
                <input type="submit" value="Entrar na minha Conta">
            </div>
            <div class="warning-text login">Ainda não tem uma conta? <a href="/auth/register">Registrar</a></div>
        </form>
    </div>
</div>
    
@endsection