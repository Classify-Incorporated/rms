<div class="page view-file-cogrades">
    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Certificate of Grades - View File
                        </h2>
                    </div>
                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        <span class="d-none d-sm-inline">
                            <a href="{{ route('sd.cogrades') }}" class="btn btn-secondary">
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
                                <img src="{{ asset('assets/images/HCCCI-LOGO.png') }}" height="128">
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
                                class="student-name"><i>{{ ucwords($student->full_name) }}</i></strong>
                            a <i>Bachelor of Early Childhood Education (BECE)</i> student of this institution has the
                            following records of her grades on the following subjects for the 1st Semester School Year
                            <text>2022-2023</text> in this
                            office.
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
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td><i>1st Semester 2022-2023 (BECE-4)</i></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    @forelse ($first_semester_data as $first_sem_grade)
                                        <tr>
                                            <td>{{ $first_sem_grade->courseCode->short_name }}</td>
                                            <td>{{ $first_sem_grade->course_title }}</td>
                                            <td>{{ $first_sem_grade->grade_letter }}</td>
                                        </tr>
                                        @php
                                            $average[] = round($first_sem_grade->grade_letter, 1);
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
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td><i>2nd Semester 2022-2023 (BECE-4)</i></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>

                                <tbody>
                                    @forelse ($second_semester_data as $second_sem_grade)
                                        <tr>
                                            <td>{{ $second_sem_grade->courseCode->short_name }}</td>
                                            <td>{{ $second_sem_grade->course_title }}</td>
                                            <td>{{ $second_sem_grade->grade_letter }}</td>
                                        </tr>
                                        @php
                                            $average[] = round($second_sem_grade->grade_letter, 1);
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
                                    <tr>
                                        <td><strong>Average</strong></td>
                                        <td></td>
                                        <td><strong>{{ calculateAverage($average) }}</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-bottom mb-3 text-center">
                            This certification is issued upon request of <i>Mr./Ms. {{ $student->last_name }}</i> for
                            UNIFAST Scholarship
                            purposes
                            only.
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
