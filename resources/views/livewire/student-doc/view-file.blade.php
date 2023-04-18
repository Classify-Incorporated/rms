<div class="page view-file-cert-of-enrollment">
    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Certificate of Enrollment - View File
                        </h2>
                    </div>
                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        <span class="d-none d-sm-inline">
                            <a href="{{ route('sd.co-enrollment') }}" class="btn btn-secondary">
                                Back
                            </a>
                            <button type="button" class="btn btn-primary" onclick="javascript:window.print();">
                                <!-- Download SVG icon from http://tabler-icons.io/i/printer -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2">
                                    </path>
                                    <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4"></path>
                                    <path
                                        d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z">
                                    </path>
                                </svg>
                                Print
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
                <div class="card card-lg">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <p class="h3 text-uppercase header-title">Holy Child Central Colleges, Inc. </p>
                                <i class="header-subtitle">"Formerly HOLY CHILD COLLEGE OF INFORMATION TECHNOLOGY,
                                    INC."</i>
                                <address class="header-address">
                                    Allah Valley Drive, Surallah, South Cotabato<br>
                                    <i>Tel #: (083) 8876-826</i><br>
                                    <i>Email: <u class="email-link">holychild@hccci.edu.ph</u></i><br>
                                    <i class="ms-4"><u class="email-link">registrarsoffice@hccci.edu.ph</u></i>
                                </address>
                            </div>
                            <div class="col-6 text-end">
                                <img src="{{ asset('assets/images/favco.png') }}" height="128">
                            </div>
                            <div class="col-12 my-3 text-center header-main">
                                <h1>Office of the School Registrar</h1>
                                <div class="header-line"></div>
                                <div class="header-line"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6"></div>
                            <div class="col-6 text-end">
                                <h2 class="datenow">
                                    {{ \Carbon\Carbon::now()->format('F d, Y') }}
                                </h2>
                            </div>
                        </div>
                        <div>
                            <p class="body-title">CERTIFICATION</p>
                        </div>
                        <div>
                            <p class="body-semititle">To whom it may concern:</p>
                        </div>
                        <div class="body-text-intro">
                            This is to certify that <strong
                                class="student-name">{{ ucwords($student->full_name) }}</strong>
                            is a bona fide student of this institution and enrolled as <i>Bachelor of Early Childhood
                                Education (BECE)</i> for the 1ST Semester School Year <text>2022-2023</text> in this
                            office.
                        </div>
                        <div class="mt-3 text-center">
                            <p>It is further certified that he/she has officially enrolled the following subjects.</p>
                        </div>
                        <div class="grades mb-3">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="fw-bolder">Course Code</th>
                                        <th class="fw-bolder">Descriptive Title</th>
                                        <th class="fw-bolder">Units</th>
                                    </tr>
                                </thead>
                            </table>
                            {{-- <i>1st Semester {{ yearCourse($syear) }} (BECE-4)</i> --}}
                            <i><sup></sup> {{ yearCourse($schoolMarking->syear) }}</i>
                            <table class="table">
                                <tbody>
                                    @forelse ($student_grades as $grades)
                                        <tr>
                                            <td>{{ $grades->courseCode->short_name }}</td>
                                            <td>{{ $grades->course_title }}</td>
                                            <td>{{ round($grades->courseCode->credits) }}</td>
                                        </tr>
                                        @php
                                            $total += $grades->courseCode->credits;
                                        @endphp
                                    @empty
                                        <div class="empty">
                                            <div class="empty-img"><img
                                                    src="{{ asset('assets/images/undraw_void_-3-ggu.svg') }}"
                                                    height="128" alt="">
                                            </div>
                                            <p class="empty-title">No results found</p>
                                            <p class="empty-subtitle text-muted">
                                                Try adjusting your year or search to find what you're looking for.
                                            </p>
                                        </div>
                                    @endforelse
                                    <tr style="border-bottom: transparent;">
                                        <td><strong>Total</strong></td>
                                        <td></td>
                                        <td><strong>{{ $total }}</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-bottom mb-4">
                            This certification is issued upon request of <i>Mr./Ms.
                                {{ ucwords($student->last_name) }}</i> for any
                            legal purposes
                            this may
                            serve.
                        </div>
                        <div class="signature">
                            <div>
                                <p>Very truly yours,</p>
                            </div>
                            <div>
                                <p>
                                    CHARMAE V. ESCANIEL
                                </p>
                                <p>
                                    School Registrar
                                </p>
                            </div>
                        </div>
                        <div class="docu-validation">
                            <p class="text-muted mt-5">Not valid without</p>
                            <p class="text-muted">SNCFI School Seal</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
