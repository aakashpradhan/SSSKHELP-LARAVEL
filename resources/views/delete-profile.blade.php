@extends('app')
@section('title', 'Delete Profile')

@section('content')

    <section>
        <h1>Delete My Registration</h1>

        <form action="/submit" method="POST">
            @csrf

            <p>Have you donated your blood?</p>
            <label>
                <input type="radio" name="donated-yes" value="yes">
                Yes
            </label><br>

            <label>
                <input type="radio" name="donated-no" value="no">
                No
            </label><br>


            <p>Do you want to delete your registration?</p>
            <label>
                <input type="radio" name="donated-yes" value="yes">
                Yes
            </label><br>

            <label>
                <input type="radio" name="donated-no" value="no">
                No
            </label><br>
            <div class="buttons">

                <input type="submit" value="Delete">
                <a href="/view-profile">
                    <input type="button" value="Back"> </a>
                <a href="/">
                    <input type="button" value="Exit">
                </a>

            </div>
        </form>



    </section>

@endsection
