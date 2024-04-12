@extends('app')
@section('title', 'Deletion Card')

@section('content')
    <section id="view-profile-reg">
        <input type="button" value="Print">
        <img src="images/hero-banner.jpg" alt="" width="600px">
        <h2><strong>(Deletion Card)</strong></h2>
        <h3>Deletion of Donor's Registration in World Blood Donation Society(WBDS)</h3>
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
                <strong> Status: Registration Deleted Successfully.
                </strong>
            </p>
            <p><strong>Date of Deletion: {{ Auth::user()->created_at }}</strong></p>
            <p><strong>Note:</strong></p>
            <ol>
                <li>Take care of your health. Eat healthy diet and drink fresh fruit juices</li>
                <li>Think of the kind and worthy result of your blood donation. Motivate others for blood donation.</li>
                <li>For more donation in future, you may opt for new registration.</li>
            </ol>
            <p> <i class="fa-regular fa-face-smile"></i>
                <strong>Thank you for your valuable contribution. May God Bless You.</strong> <i
                    class="fa-regular fa-face-smile"></i>
            </p>
        </div>

    </section>

    <div class="buttons">
        <input type="button" value="Print" onclick="window.print()">
        <input type="button" value="Delete my profile">

    </div>

@endsection
