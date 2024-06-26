@extends('app')
@section('title', 'Profile')

@section('content')
    <section id="view-profile-reg">
        <img src="images/hero-banner.jpg" alt="" width="600px">
        <h2><strong>(Registration Card)</strong></h2>
        <h3>Donor's Registration in the World Blood Donation Society (WBDS)</h3>
        <br>

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
                        {{ Auth::user()->name }}
                    </td>
                    <td>
                        {{ Auth::user()->gender }}
                    </td>
                    <td>
                        {{ Auth::user()->age }} years
                    </td>
                    <td>
                        {{ Auth::user()->blood_group }}
                    </td>
                    <td>
                        Country: {{ Auth::user()->country }},<br>
                        State/UT/Province/Region: {{ Auth::user()->state }},<br>
                        City District: {{ Auth::user()->district }},<br>
                        Tehsil/Locality/Area: {{ Auth::user()->tehsil }}
                    </td>
                    <td>
                        {{ Auth::user()->contact }}
                    </td>
                </tr>
            </table>
        </div>
        <div class='reg-status'>
            <p>
                <strong> Status: Registration Successful.
                </strong>
            </p>
            <p><strong>Date of Registration: {{ Auth::user()->created_at }}</strong></p>
            <p><strong>Note:</strong></p>
            <ol>
                <li>Wait for a patient's call. Donate him/her blood and just after your donation, delete your registration.
                    Deletion of registration is must.</li>
                <li>For more donations in the future, opt for new registration.</li>
                <li>Unuseful appearance of your profile can create great trouble for emergency patients. Your
                    registration is valid only for six months and it will automatically be deleted after six months from the
                    date of registration.</li>
            </ol>
            <p> <i class="fa-regular fa-face-smile"></i>
                <strong>Thanks. You are a lifesaver. May God Bless You.</strong> <i class="fa-regular fa-face-smile"></i>
            </p>
        </div>

    </section>

    <div class="buttons">
        <input type="button" value="Print" onclick="window.print()">
        <a href="/delete-profile">
            <input type="button" value="Delete my profile">
        </a>

    </div>

@endsection
