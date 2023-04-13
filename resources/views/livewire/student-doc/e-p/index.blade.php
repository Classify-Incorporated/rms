<div class="page">
    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Examination Permit - Student List
                        </h2>
                    </div>
                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        <span class="d-none d-sm-inline">
                            <a href="{{ route('sd.index') }}" class="btn btn-secondary">
                                Back
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-cards">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header row g-2 align-items-center">
                                <div class="col card-title">
                                    <h3>Students</h3>
                                </div>
                                <div class="col-auto ms-auto d-print-none">
                                    <select wire:model="selectedYear" class="form-select">
                                        <option value="">Year</option>
                                        <option value="">Year</option>
                                        <option value="">20112</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-body border-bottom py-3">
                                <div class="d-flex">

                                    <div class="ms-auto text-muted">
                                        Search:
                                        <div class="ms-2 d-inline-block">
                                            <input type="text" class="form-control form-control-sm"
                                                aria-label="Search invoice">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table card-table table-vcenter text-nowrap datatable">
                                    <thead>
                                        <tr>
                                            <th class="w-1"><input class="form-check-input m-0 align-middle"
                                                    type="checkbox" aria-label="Select all invoices"></th>
                                            <th class="w-1">SIS ID
                                            </th>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Last Name</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                                    aria-label="Select invoice">
                                            </td>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                Juno
                                            </td>
                                            <td></td>
                                            <td>
                                                Sipe
                                            </td>
                                            <td class="text-end">
                                                <div class="btn-list flex-nowrap">
                                                    <a href="#" wire:click="viewFile('1')">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-file-certificate"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            stroke-width="2" stroke="currentColor" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                            <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                                            <path d="M5 8v-3a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5">
                                                            </path>
                                                            <path d="M6 14m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0">
                                                            </path>
                                                            <path d="M4.5 17l-1.5 5l3 -1.5l3 1.5l-1.5 -5"></path>
                                                        </svg>
                                                        View File
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.tabler.footer')
    </div>
</div>
