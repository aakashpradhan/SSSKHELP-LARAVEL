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
                        Vinod JKIAN
                    </td>
                    <td>
                        Male
                    </td>
                    <td>
                        35 years
                    </td>
                    <td>
                        B+
                    </td>
                    <td>
                        Country: India,<br>
                        State/UT/Province/Region: Jammu & Kashmir,<br>
                        City District: Rajouri,<br>
                        Tehsil/Locality/Area: Sunderbani
                    </td>
                    <td>
                        9797867115
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
            <input type="button" value="Back">
            <input type="submit" value="Submit">
            <input type="button" value="Exit">

        </div>
    </section>

@endsection
