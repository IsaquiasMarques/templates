@extends('components.auth.template')

@section('panel')
    <div class="login-panel">
        <div class="form">
            <div class="title">
                <h3>Esqueceu a sua Palavra-passe?</h3>
            </div>
            <form action="">
                <span class="warning-text">Digite o endereço de e-mail da sua conta de usuário e será enviado um link de redefinição de senha.</span>
                <div class="">
                    <input type="email" name="email" placeholder="Insira o seu endereço de email">
                </div>
                <div class="">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                </div>
                <div class="button">
                    <input type="submit" value="Enviar">
                </div>
            </form>
        </div>
    </div>
@endsection