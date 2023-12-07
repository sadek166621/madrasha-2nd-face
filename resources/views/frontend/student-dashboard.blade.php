@extends('frontend.master')
@section('content')
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px;
}

.student-info, .academic-info {
    width: 80%;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ccc;
    background-color: #f8f8f8;
}

.student-details {
    font-size: 16px;
}

.detail {
    margin-bottom: 10px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    border: 1px solid #ccc;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #333;
    color: #fff;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:nth-child(odd) {
    background-color: #fff;
}

</style>
<div id="content-websdevusa" class="site-content-websdevusa space stop ngdc.ac.bd-page content-area">
    <div class="container main-area-bg">
        <div class="row">
            <div class="col-md-9">
                {{-- <header>
                    <h1>Student Dashboard</h1>
                </header>
                <section class="student-info">
                    <h2>Student Information</h2>
                    <div class="student-details">
                        <div class="detail">
                            <strong>Name:</strong> {{ $dashboard->name }}.  <strong>Initial:</strong> {{ $dashboard->initial }}
                        </div>
                        <div class="detail">
                            <strong>Date Of Birth:</strong> {{ $dashboard->date }}/{{ $dashboard->month }}/{{ $dashboard->year }}
                        </div>
                        <div class="detail">
                            <strong>Father's Name:</strong> {{ $dashboard->fathername }} | <strong>Mother's Name:</strong> {{ $dashboard->mothername }},
                        </div>
                        <div class="detail">
                            <strong>Email:</strong> john.doe@example.com
                        </div>
                    </div>
                </section>
                <section class="academic-info">
                    <h2>Academic Information</h2>
                    <table>
                        <tr>
                            <th>Subject</th>
                            <th>Grade</th>
                        </tr>
                        <tr>
                            <td>Mathematics</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>Science</td>
                            <td>B</td>
                        </tr>
                        <tr>
                            <td>History</td>
                            <td>C</td>
                        </tr>
                        <tr>
                            <td>English</td>
                            <td>A</td>
                        </tr>
                    </table>
                </section> --}}
                <header>
                    <h1>Student Profile</h1>
                </header>
                <br>
                <div class="card overflow-hidden">
                    <div class="row no-gutters row-bordered row-border-light">
                        <div class="col-md-3 pt-0">
                            <div class="list-group list-group-flush account-settings-links">
                                <a class="list-group-item list-group-item-action active" data-toggle="list"
                                    href="#account-general">General</a>
                                <a class="list-group-item list-group-item-action" data-toggle="list"
                                    href="#account-change-password">Class Information</a>
                                    <br>
                                    <a class="list-group-item list-group-item-action"
                                    href="{{ route('logout') }}">Logout</a>
                                    <hr>
                                {{-- <a class="list-group-item list-group-item-action" data-toggle="list"
                                    href="#account-info">Info</a>
                                <a class="list-group-item list-group-item-action" data-toggle="list"
                                    href="#account-social-links">Social links</a>
                                <a class="list-group-item list-group-item-action" data-toggle="list"
                                    href="#account-connections">Connections</a>
                                <a class="list-group-item list-group-item-action" data-toggle="list"
                                    href="#account-notifications">Notifications</a> --}}
                            </div>
                        </div>
                        {{-- <div class="b-example-divider b-example-vr"></div> --}}
                        <div class="col-md-9">
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="account-general">
                                        <section class="student-info">
                                            <h3 style="text-decoration: underline;">Student Information</h2>
                                            <div class="student-details">
                                                <div class="">
                                                    <strong>Name:</strong> {{ $dashboard->name }}
                                                </div>
                                                <div class="details">
                                                    <strong>Initial:</strong> {{ $dashboard->initial }}
                                                </div>
                                                <div class="details">
                                                    <strong>Date Of Birth:</strong> {{ $dashboard->date }}/{{ $dashboard->month }}/{{ $dashboard->year }}.
                                                </div>
                                                <div class="details">
                                                    <strong>Country:</strong> {{ $dashboard->countryplacejoining }}.
                                                </div>
                                                <div class="details">
                                                    <strong>Father's Name:</strong> {{ $dashboard->fathername }}.
                                                </div>
                                                <div>
                                                    <strong>Mother's Name:</strong> {{ $dashboard->mothername }}.
                                                </div>
                                                <div class="details">
                                                    <strong>Gender:</strong> {{ $dashboard->gender }}.
                                                </div>
                                                <div class="details">
                                                    <strong>Phone:</strong> {{ $dashboard->phone_number }}.
                                                </div>
                                                <div>
                                                    <strong>WhatsApp:</strong> {{ $dashboard->whatsapp_number }}.
                                                </div>
                                                <br>
                                                <h5 style="text-decoration: underline;">Present Adress</h5>
                                                    <div class="details">
                                                        <strong>
                                                            Vill/Town/City/Post Office:</strong> {{ $dashboard->post_code }}.
                                                    </div>
                                                    <div class="details">
                                                        <strong>Thana:</strong> {{ $dashboard->thana }}.
                                                        <strong>Division:</strong>
                                                            @if ($dashboard->division_id==1)
                                                            Dhaka
                                                            @elseif ($dashboard->division_id==2)
                                                            chattogram
                                                            @elseif ($dashboard->division_id==3)
                                                            rajshahi
                                                            @elseif ($dashboard->division_id==4)
                                                            khulna
                                                            @elseif ($dashboard->division_id==5)
                                                            barishal
                                                            @elseif ($dashboard->division_id==6)
                                                            sylhet
                                                            @elseif ($dashboard->division_id==7)
                                                            rangpur
                                                            @elseif ($dashboard->division_id==8)
                                                            mymensingh

                                                            @endif

                                                             . <strong>District:</strong>
                                                             @if ($dashboard->district_id == 1)
                                                             cumilla
                                                             @elseif($dashboard->district_id == 2)
                                                             feni
                                                             @elseif($dashboard->district_id == 3)
                                                             brahmanbaria
                                                             @elseif($dashboard->district_id == 4)
                                                             rangamati
                                                             @elseif($dashboard->district_id == 5)
                                                             noakhali
                                                             @elseif($dashboard->district_id == 6)
                                                             chandpur
                                                             @elseif($dashboard->district_id == 7)
                                                             lakshmipur
                                                             @elseif($dashboard->district_id == 8)
                                                             chattogram
                                                             @elseif($dashboard->district_id == 9)
                                                             coxsbazar
                                                             @elseif($dashboard->district_id == 10)
                                                             khagrachari
                                                             @elseif($dashboard->district_id == 11)
                                                             bandarban
                                                             @elseif($dashboard->district_id == 12)
                                                             sirajganj
                                                             @elseif($dashboard->district_id == 13)
                                                             pabna
                                                             @elseif($dashboard->district_id == 14)
                                                             bogura
                                                             @elseif($dashboard->district_id == 15)
                                                             rajshahi
                                                             @elseif($dashboard->district_id == 16)
                                                             natore
                                                             @elseif($dashboard->district_id == 17)
                                                             jaipurhat
                                                             @elseif($dashboard->district_id == 18)
                                                             nawabganj
                                                             @elseif($dashboard->district_id == 19)
                                                             naogaon
                                                             @elseif($dashboard->district_id == 20)
                                                             jashore
                                                             @elseif($dashboard->district_id == 21)
                                                             satkhira
                                                             @elseif($dashboard->district_id == 22)
                                                             meherpur
                                                             @elseif($dashboard->district_id == 23)
                                                             narail
                                                             @elseif($dashboard->district_id == 24)
                                                             chuadanga
                                                             @elseif($dashboard->district_id == 25)
                                                             kushtia
                                                             @elseif($dashboard->district_id == 26)
                                                             magura
                                                             @elseif($dashboard->district_id == 27)
                                                             khulna
                                                             @elseif($dashboard->district_id == 28)
                                                             bagerhat
                                                             @elseif($dashboard->district_id == 29)
                                                             jhenaidah
                                                             @elseif($dashboard->district_id == 30)
                                                             barishal
                                                             @elseif($dashboard->district_id == 31)
                                                             jhalokati
                                                             @elseif($dashboard->district_id == 32)
                                                             patuakhali
                                                             @elseif($dashboard->district_id == 33)
                                                             pirojpur
                                                             @elseif($dashboard->district_id == 34)
                                                             bhola
                                                             @elseif($dashboard->district_id == 35)
                                                             barguna
                                                             @elseif($dashboard->district_id == 36)
                                                             sylhet
                                                             @elseif($dashboard->district_id == 37)
                                                             moulvibazar
                                                             @elseif($dashboard->district_id == 38)
                                                             habiganj
                                                             @elseif($dashboard->district_id == 39)
                                                             sunamganj
                                                             @elseif($dashboard->district_id == 40)
                                                             rangpur
                                                             @elseif($dashboard->district_id == 41)
                                                             panchagarh
                                                             @elseif($dashboard->district_id == 42)
                                                             dinajpur
                                                             @elseif($dashboard->district_id == 43)
                                                             lalmonirhat
                                                             @elseif($dashboard->district_id == 44)
                                                             nilphamari
                                                             @elseif($dashboard->district_id == 45)
                                                             thakurgaon
                                                             @elseif($dashboard->district_id == 46)
                                                             gaibandha
                                                             @elseif($dashboard->district_id == 47)
                                                             kurigram
                                                             @elseif($dashboard->district_id == 48)
                                                             mymensingh
                                                             @elseif($dashboard->district_id == 49)
                                                             jamalpur
                                                             @elseif($dashboard->district_id == 50)
                                                             netrokona
                                                             @elseif($dashboard->district_id == 51)
                                                             sherpur
                                                             @elseif($dashboard->district_id == 52)
                                                             dhaka
                                                             @elseif($dashboard->district_id == 53)
                                                             narsingdi
                                                             @elseif($dashboard->district_id == 54)
                                                             gazipur
                                                             @elseif($dashboard->district_id == 55)
                                                             shariatpur
                                                             @elseif($dashboard->district_id == 56)
                                                             narayanganj
                                                             @elseif($dashboard->district_id == 57)
                                                             tangail
                                                             @elseif($dashboard->district_id == 58)
                                                             kishoreganj
                                                             @elseif($dashboard->district_id == 59)
                                                             manikganj
                                                             @elseif($dashboard->district_id == 60)
                                                             munshiganj
                                                             @elseif($dashboard->district_id == 61)
                                                             rajbari
                                                             @elseif($dashboard->district_id == 62)
                                                             madaripur
                                                             @elseif($dashboard->district_id == 63)
                                                             faridpur
                                                             @elseif($dashboard->district_id == 64)
                                                             gopalganj
                                                             @endif
                                                    </div>
                                                    <br>
                                                    <h5 style="text-decoration: underline;">Permanent Adress</h2>
                                                        <div class="details">
                                                            <strong>
                                                                Vill/Town/City/Post Office:</strong> {{ $dashboard->p_postcode }}.
                                                        </div>
                                                        <div class="details">
                                                            <strong>Thana:</strong> {{ $dashboard->P_thana }}.
                                                            <strong>Division:</strong>
                                                            @if ($dashboard->division_id==1)
                                                            Dhaka
                                                            @elseif ($dashboard->division_id==2)
                                                            chattogram
                                                            @elseif ($dashboard->division_id==3)
                                                            rajshahi
                                                            @elseif ($dashboard->division_id==4)
                                                            khulna
                                                            @elseif ($dashboard->division_id==5)
                                                            barishal
                                                            @elseif ($dashboard->division_id==6)
                                                            sylhet
                                                            @elseif ($dashboard->division_id==7)
                                                            rangpur
                                                            @elseif ($dashboard->division_id==8)
                                                            mymensingh

                                                            @endif

                                                             . <strong>District:</strong>
                                                             @if ($dashboard->district_id == 1)
                                                             cumilla
                                                             @elseif($dashboard->district_id == 2)
                                                             feni
                                                             @elseif($dashboard->district_id == 3)
                                                             brahmanbaria
                                                             @elseif($dashboard->district_id == 4)
                                                             rangamati
                                                             @elseif($dashboard->district_id == 5)
                                                             noakhali
                                                             @elseif($dashboard->district_id == 6)
                                                             chandpur
                                                             @elseif($dashboard->district_id == 7)
                                                             lakshmipur
                                                             @elseif($dashboard->district_id == 8)
                                                             chattogram
                                                             @elseif($dashboard->district_id == 9)
                                                             coxsbazar
                                                             @elseif($dashboard->district_id == 10)
                                                             khagrachari
                                                             @elseif($dashboard->district_id == 11)
                                                             bandarban
                                                             @elseif($dashboard->district_id == 12)
                                                             sirajganj
                                                             @elseif($dashboard->district_id == 13)
                                                             pabna
                                                             @elseif($dashboard->district_id == 14)
                                                             bogura
                                                             @elseif($dashboard->district_id == 15)
                                                             rajshahi
                                                             @elseif($dashboard->district_id == 16)
                                                             natore
                                                             @elseif($dashboard->district_id == 17)
                                                             jaipurhat
                                                             @elseif($dashboard->district_id == 18)
                                                             nawabganj
                                                             @elseif($dashboard->district_id == 19)
                                                             naogaon
                                                             @elseif($dashboard->district_id == 20)
                                                             jashore
                                                             @elseif($dashboard->district_id == 21)
                                                             satkhira
                                                             @elseif($dashboard->district_id == 22)
                                                             meherpur
                                                             @elseif($dashboard->district_id == 23)
                                                             narail
                                                             @elseif($dashboard->district_id == 24)
                                                             chuadanga
                                                             @elseif($dashboard->district_id == 25)
                                                             kushtia
                                                             @elseif($dashboard->district_id == 26)
                                                             magura
                                                             @elseif($dashboard->district_id == 27)
                                                             khulna
                                                             @elseif($dashboard->district_id == 28)
                                                             bagerhat
                                                             @elseif($dashboard->district_id == 29)
                                                             jhenaidah
                                                             @elseif($dashboard->district_id == 30)
                                                             barishal
                                                             @elseif($dashboard->district_id == 31)
                                                             jhalokati
                                                             @elseif($dashboard->district_id == 32)
                                                             patuakhali
                                                             @elseif($dashboard->district_id == 33)
                                                             pirojpur
                                                             @elseif($dashboard->district_id == 34)
                                                             bhola
                                                             @elseif($dashboard->district_id == 35)
                                                             barguna
                                                             @elseif($dashboard->district_id == 36)
                                                             sylhet
                                                             @elseif($dashboard->district_id == 37)
                                                             moulvibazar
                                                             @elseif($dashboard->district_id == 38)
                                                             habiganj
                                                             @elseif($dashboard->district_id == 39)
                                                             sunamganj
                                                             @elseif($dashboard->district_id == 40)
                                                             rangpur
                                                             @elseif($dashboard->district_id == 41)
                                                             panchagarh
                                                             @elseif($dashboard->district_id == 42)
                                                             dinajpur
                                                             @elseif($dashboard->district_id == 43)
                                                             lalmonirhat
                                                             @elseif($dashboard->district_id == 44)
                                                             nilphamari
                                                             @elseif($dashboard->district_id == 45)
                                                             thakurgaon
                                                             @elseif($dashboard->district_id == 46)
                                                             gaibandha
                                                             @elseif($dashboard->district_id == 47)
                                                             kurigram
                                                             @elseif($dashboard->district_id == 48)
                                                             mymensingh
                                                             @elseif($dashboard->district_id == 49)
                                                             jamalpur
                                                             @elseif($dashboard->district_id == 50)
                                                             netrokona
                                                             @elseif($dashboard->district_id == 51)
                                                             sherpur
                                                             @elseif($dashboard->district_id == 52)
                                                             dhaka
                                                             @elseif($dashboard->district_id == 53)
                                                             narsingdi
                                                             @elseif($dashboard->district_id == 54)
                                                             gazipur
                                                             @elseif($dashboard->district_id == 55)
                                                             shariatpur
                                                             @elseif($dashboard->district_id == 56)
                                                             narayanganj
                                                             @elseif($dashboard->district_id == 57)
                                                             tangail
                                                             @elseif($dashboard->district_id == 58)
                                                             kishoreganj
                                                             @elseif($dashboard->district_id == 59)
                                                             manikganj
                                                             @elseif($dashboard->district_id == 60)
                                                             munshiganj
                                                             @elseif($dashboard->district_id == 61)
                                                             rajbari
                                                             @elseif($dashboard->district_id == 62)
                                                             madaripur
                                                             @elseif($dashboard->district_id == 63)
                                                             faridpur
                                                             @elseif($dashboard->district_id == 64)
                                                             gopalganj
                                                             @endif

                                                        </div>
                                                        <h6 style="text-decoration: underline">
                                                            payment number
                                                        </h6>
                                                        <div class="details">
                                                            @if ($dashboard->payment_number)
                                                            {{ $dashboard->payment_number }}
                                                            @else
                                                            .
                                                            @endif
                                                        </div>


                                            </div>
                                        </section>
                                </div>
                                <div class="tab-pane fade" id="account-change-password">
                                    <section class="student-info">
                                        <h3 style="text-decoration: underline;">Class Information</h2>
                                        <div class="student-details">
                                            <div class="">
                                                <strong>Like TO Study:</strong> {{ $dashboard->course->name }}
                                            </div>
                                            <div class="details">
                                                <strong>Number of Classes per Week:</strong> {{ $dashboard->cls_per_wk }}
                                            </div>
                                            <div class="details">
                                                <strong>Weekly Days:</strong> @php
                                                    $weeks = json_decode( $dashboard->weeks)
                                                @endphp
                                                @foreach ( $weeks as $week)
                                                    {{ $week }},
                                                @endforeach
                                            </div>
                                            <div class="details">
                                                <strong>Time For Classes:</strong> {{ $dashboard->suitable_time }}.
                                            </div>
                                            <br>
                                            <h5 style="text-decoration: underline;">Tuition Fee</h5>
                                                    <div class="details">
                                                        <strong>
                                                            Tuition Fee:</strong> {{ $dashboard->tuition_fee }}.
                                                    </div>
                                        </div>
                                    </section>
                                </div>
                                {{-- <div class="tab-pane fade" id="account-info">
                                    <div class="card-body pb-2">
                                        <div class="form-group">
                                            <label class="form-label">Bio</label>
                                            <textarea class="form-control"
                                                rows="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nunc arcu, dignissim sit amet sollicitudin iaculis, vehicula id urna. Sed luctus urna nunc. Donec fermentum, magna sit amet rutrum pretium, turpis dolor molestie diam, ut lacinia diam risus eleifend sapien. Curabitur ac nibh nulla. Maecenas nec augue placerat, viverra tellus non, pulvinar risus.</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Birthday</label>
                                            <input type="text" class="form-control" value="May 3, 1995">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Country</label>
                                            <select class="custom-select">
                                                <option>USA</option>
                                                <option selected>Canada</option>
                                                <option>UK</option>
                                                <option>Germany</option>
                                                <option>France</option>
                                            </select>
                                        </div>
                                    </div>
                                    <hr class="border-light m-0">
                                    <div class="card-body pb-2">
                                        <h6 class="mb-4">Contacts</h6>
                                        <div class="form-group">
                                            <label class="form-label">Phone</label>
                                            <input type="text" class="form-control" value="+0 (123) 456 7891">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Website</label>
                                            <input type="text" class="form-control" value>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <div class="tab-pane fade" id="account-social-links">
                                    <div class="card-body pb-2">
                                        <div class="form-group">
                                            <label class="form-label">Twitter</label>
                                            <input type="text" class="form-control" value="https://twitter.com/user">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Facebook</label>
                                            <input type="text" class="form-control" value="https://www.facebook.com/user">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Google+</label>
                                            <input type="text" class="form-control" value>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">LinkedIn</label>
                                            <input type="text" class="form-control" value>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Instagram</label>
                                            <input type="text" class="form-control" value="https://www.instagram.com/user">
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <div class="tab-pane fade" id="account-connections">
                                    <div class="card-body">
                                        <button type="button" class="btn btn-twitter">Connect to
                                            <strong>Twitter</strong></button>
                                    </div>
                                    <hr class="border-light m-0">
                                    <div class="card-body">
                                        <h5 class="mb-2">
                                            <a href="javascript:void(0)" class="float-right text-muted text-tiny"><i
                                                    class="ion ion-md-close"></i> Remove</a>
                                            <i class="ion ion-logo-google text-google"></i>
                                            You are connected to Google:
                                        </h5>
                                        <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                            data-cfemail="f9979498818e9c9595b994989095d79a9694">[email&#160;protected]</a>
                                    </div>
                                    <hr class="border-light m-0">
                                    <div class="card-body">
                                        <button type="button" class="btn btn-facebook">Connect to
                                            <strong>Facebook</strong></button>
                                    </div>
                                    <hr class="border-light m-0">
                                    <div class="card-body">
                                        <button type="button" class="btn btn-instagram">Connect to
                                            <strong>Instagram</strong></button>
                                    </div>
                                </div> --}}
                                {{-- <div class="tab-pane fade" id="account-notifications">
                                    <div class="card-body pb-2">
                                        <h6 class="mb-4">Activity</h6>
                                        <div class="form-group">
                                            <label class="switcher">
                                                <input type="checkbox" class="switcher-input" checked>
                                                <span class="switcher-indicator">
                                                    <span class="switcher-yes"></span>
                                                    <span class="switcher-no"></span>
                                                </span>
                                                <span class="switcher-label">Email me when someone comments on my article</span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="switcher">
                                                <input type="checkbox" class="switcher-input" checked>
                                                <span class="switcher-indicator">
                                                    <span class="switcher-yes"></span>
                                                    <span class="switcher-no"></span>
                                                </span>
                                                <span class="switcher-label">Email me when someone answers on my forum
                                                    thread</span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="switcher">
                                                <input type="checkbox" class="switcher-input">
                                                <span class="switcher-indicator">
                                                    <span class="switcher-yes"></span>
                                                    <span class="switcher-no"></span>
                                                </span>
                                                <span class="switcher-label">Email me when someone follows me</span>
                                            </label>
                                        </div>
                                    </div>
                                    <hr class="border-light m-0">
                                    <div class="card-body pb-2">
                                        <h6 class="mb-4">Application</h6>
                                        <div class="form-group">
                                            <label class="switcher">
                                                <input type="checkbox" class="switcher-input" checked>
                                                <span class="switcher-indicator">
                                                    <span class="switcher-yes"></span>
                                                    <span class="switcher-no"></span>
                                                </span>
                                                <span class="switcher-label">News and announcements</span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="switcher">
                                                <input type="checkbox" class="switcher-input">
                                                <span class="switcher-indicator">
                                                    <span class="switcher-yes"></span>
                                                    <span class="switcher-no"></span>
                                                </span>
                                                <span class="switcher-label">Weekly product updates</span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="switcher">
                                                <input type="checkbox" class="switcher-input" checked>
                                                <span class="switcher-indicator">
                                                    <span class="switcher-yes"></span>
                                                    <span class="switcher-no"></span>
                                                </span>
                                                <span class="switcher-label">Weekly blog digest</span>
                                            </label>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- End News section -->
        <!-- content-left -->
    <!-- End Column 8 -->
            @include('frontend.include.side-bar')
</div>
</div>
</section>


</div><!-- #content -->
<div class="container" style="display:none;">
<div class="bottom-logos text-center">
    <div class="row">
        <div class="col-md-4">
            <div class="bottom-logo-one">
                <a href="http://www.ictd.gov.bd/" target="_blank"><img src="https://ngdc.ac.bd/wp-content/themes/ngdcrajit/images/gov-logo.png" alt="" /></a>
                <h6>Information & Communication Technology Division</h6>
            </div>
        </div>
        <div class="col-md-4">
            <div class="bottom-logo-one">
                <a href="http://www.bcc.net.bd/" target="_blank"><img src="https://ngdc.ac.bd/wp-content/themes/ngdcrajit/images/bcc-logo.png" alt="" /></a>
                <h6>Bangladesh Computer Council</h6>
            </div>
        </div>
        <div class="col-md-4">
            <div class="bottom-logo-one">
                <a href="http://www.jica.go.jp/english/" target="_blank"><img src="https://ngdc.ac.bd/wp-content/themes/ngdcrajit/images/jica-logo.png" alt="" /></a>
                <h6>Japan International Cooperation Agency</h6>
            </div>
        </div>
    </div>
</div>
</div>
<section class="bottom-area" style="background:#ddd;margin:60px 0px 0px 0px;padding:40px 0px;display:none;">
<div class="container">
<div class="bottom-part">
    <div class="bottom-part1">
        <div class="bottom-contact-part text-black">
                            </div>
    </div>
    <div class="bottom-part2">
        <div class="bottom-get-started-part">
                            </div>
    </div>
</div>
</div>
</section>
@endsection
