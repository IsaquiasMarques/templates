@extends('components.auth.template')

@section('panel')
    <div class="login-panel register">
        <div class="form">
            <div class="title">
                <h3>Criar uma Conta</h3>
            </div>
                @if ($message = Session::get('error'))
                    <div class="message error">
                        <p>
                            {{ $message }}
                        </p>
                    </div>
                @else
                    
                @endif

                @if ($message = Session::get('success'))
                    <div class="message success">
                        <p>
                            {{ $message }}
                        </p>
                    </div>
                @else
                    
                @endif
                <div id="alert" class="message warning">
                    <p>
                        Os campos de Senha não coincidem.
                    </p>
                </div>
                <form action="register" method="POST">
                    <div class="">
                        <label for="">Email</label>
                        <input type="email" name="email" placeholder="" required>
                    </div>
                    <div class="">
                        <label for="">Nome de Usuário</label>
                        <input type="text" name="username" placeholder="" required>
                    </div>
                    {{-- <section class="forget-password">
                        <span><a href="/auth/forget-password">Esqueceu a sua Palavra-Passe?</a></span>
                    </section> --}}
                    <div class="">
                        <label for="">Senha</label>
                        <input type="password" name="password" placeholder="" id="passwordField" required>
                    </div>
                    <div class="">
                        <label for="">Confirmação de senha</label>
                        <input type="password" name="confirm_password" onkeyup="verify()" placeholder="" id="passwordConfirmField" required>
                    </div>
                    <div class="">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </div>
                    <div class="button">
                        <input type="submit" value="Entrar na minha Conta">
                    </div>
                    <div class="warning-text login">Já tem uma conta? <a href="/auth/login">Entrar</a></div>
                </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        let password = document.querySelector("#passwordField");
        let confirm = document.querySelector("#passwordConfirmField");
        let info = document.querySelector("#alert");

        function verify(){

            
            if(confirm.value == ""){
                info.style.display = 'none';
            }else if(!(confirm.value == password.value)){
                info.style.display = 'block';
            }else{
                info.style.display = 'none';
            }

            
        }

    </script>
@endsection