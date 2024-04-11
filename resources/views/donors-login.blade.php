@extends('app')
@section('title', 'About')

@section('content')
    <section id="donors-login" class="container">
        <h2>Login</h2>
        <form action="" id="donors-login-form">

            <div class="login-form-field">

                <label for="username">Uername/Email<span class="required">*</span>:</label>
                <input type="text" name="username" id="" required placeholder="Enter Your Uername/Emailme">

            </div>
            <div class="login-form-field">

                <label for="password">Password<span class="required">*</span>:</label>
                <input type="text" name="password" id="" required placeholder="Enter Your Password">

            </div>
            <div class="login-form-sumbit">
                <input type="submit" name="submit" id="" required placeholder="Enter Your Name" value="Login">
            </div>

            <div class="login-reg-block">
                <p>Don't have an account?</p>
                <p> <a href="/donors-registration">Register Here</a>
                </p>
        </form>
    </section>
@endsection
