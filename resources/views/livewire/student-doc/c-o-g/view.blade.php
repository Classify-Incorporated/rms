<div class="page view-file-certification-of-graduation">
    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Certificate of Graduation - View File
                        </h2>
                    </div>
                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        <span class="d-none d-sm-inline">
                            <a href="{{ route('sd.cog') }}" class="btn btn-secondary">
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
                                <img src="{{ asset('assets/images/HCCCI-Logo.png') }}" height="128">
                            </div>
                            <div class="col-12 my-3 text-center header-main">
                                <h1>Office of the School Registrar</h1>
                                <div class="header-line"></div>
                                <div class="header-line"></div>
                            </div>
                        </div>
                        <div>
                            <p class="body-title">CERTIFICATION</p>
                        </div>
                        <div class="mb-4">
                            <p class="body-semititle">To whom it may concern:</p>
                        </div>
                        <div class="body-text-intro mb-4">
                            This is to certify that <strong
                                class="student-name"><i>{{ strtoupper($student->full_name) }}</i></strong>
                            graduated with the degree of <strong class="course">Bachelor of Early Childhood
                                Education (BECE)</strong> on <text>October 7, 2022</text> Academic Year
                            <text>{{ getYears($syear) }}</text>.
                        </div>
                        <div class="text-bottom mb-4 issued">
                            Issued upon the request of <i> Mr/Ms. {{ $student->last_name }}</i>
                            {{ \Carbon\Carbon::now()->format('\t\h\i\s jS \d\a\y \of F, Y') }} for
                            employment purposes only.
                        </div>
                        <div class="signature">
                            <div>
                                <p>Very truly yours,</p>
                            </div>
                            <div>
                                <p class="mb-0">
                                    CHARMAE V. ESCANIEL
                                </p>
                                <p>
                                    School Registrar
                                </p>
                            </div>
                        </div>
                        <div class="docu-validation">
                            <p class="text-muted mb-0">Not valid without</p>
                            <p class="text-muted">/School Seal/</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
