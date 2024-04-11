@extends('app')
@section('title', 'About')

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
        <div class='reg-status'>
            <p>
                <strong> Status: Registration Successful.
                </strong>
            </p>
            <p><strong>Date of Registration: <?php echo date('d/m/Y'); ?></strong></p>
            <p><strong>Note:</strong></p>
            <ol>
                <li>Wait for a patient's call. Donate him/her blood and just after your donation, delete your registration.
                    Deletion of registraion is must.</li>
                <li>For more donations in future, opt for new registration.</li>
                <li>Unuseful appearance of your profile can create a great trouble to the emergency patients. Your
                    registration is valid only for six months and it will automatically be deleted after six months from the
                    date of registration.</li>
            </ol>
            <p> <i class="fa-regular fa-face-smile"></i>
                <strong>Thanks. You are a lifesaver. My God Bless You.</strong> <i class="fa-regular fa-face-smile"></i>
            </p>
        </div>

    </section>

@endsection
