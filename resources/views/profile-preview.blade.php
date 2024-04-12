@extends('app')
@section('title', 'Profile Preview')

@section('content')
    <section id="view-profile-reg">

        <div>
            <table id="table">
                <th>
                    Name
                </th>
                <th>
                    Gender
                </th>
                <th>
                    Age
                </th>
                <th>
                    Blood Group
                </th>
                <th>
                    Address
                </th>
                <th>
                    Mobile Number
                </th>

                <tr>
                    <td>
                        {{ $validatedData['name'] }}
                    </td>
                    <td>
                        {{ $validatedData['gender'] }}
                    </td>
                    <td>
                        {{ $validatedData['age'] }} years
                    </td>
                    <td>
                        {{ $validatedData['blood_group'] }}
                    </td>
                    <td>
                        Country: {{ $validatedData['country'] }},<br>
                        State/UT/Province/Region: {{ $validatedData['state'] }},<br>
                        City District: {{ $validatedData['district'] }},<br>
                        Tehsil/Locality/Area: {{ $validatedData['tehsil'] }}
                    </td>
                    <td>
                        {{ $validatedData['contact'] }}
                    </td>
                </tr>
            </table>
        </div>

        <div class="authorize">
            <p><span class="required">*</span></p>
            <input type="checkbox" name="authorize" id="" class="check" required>
            <p>I authorise this website to display my profile so that the needy could contact me as and when there is an
                emergency</p>
        </div>

        <div class="buttons">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <input type="hidden" name="validatedData" value="{{ json_encode($validatedData) }}">
                <input type="submit" value="Submit">
            </form>
            <a class="button" href="/" class="">
                Exit
            </a>
            <a class="button" href="{{ route('register') }}" class="">
                Back
            </a>
        </div>
    </section>

@endsection
