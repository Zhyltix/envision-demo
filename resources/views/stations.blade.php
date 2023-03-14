@extends('base')

@section('content')
    <div id="kt_app_content" class="app-content  flex-column-fluid ">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container  container-xxl ">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-6"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
</svg>
</span>
                            <!--end::Svg Icon-->                <input type="text" data-kt-subscription-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Zoek station">
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->

                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-subscription-table-toolbar="base">
                            <!--begin::Filter-->
                            <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                                <span class="svg-icon svg-icon-2"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor"></path>
</svg>
</span>
                                <!--end::Svg Icon-->        Filter
                            </button>
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true" style="">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                </div>
                                <!--end::Header-->

                                <!--begin::Separator-->
                                <div class="separator border-gray-200"></div>
                                <!--end::Separator-->

                                <!--begin::Content-->
                                <div class="px-7 py-5" data-kt-subscription-table-filter="form">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <label class="form-label fs-6 fw-semibold">Land:</label>
                                        <select class="form-select form-select-solid fw-bold select2-hidden-accessible" data-kt-select2="true" data-placeholder="Selecteer optie" data-allow-clear="true" data-kt-subscription-table-filter="month" data-hide-search="true" data-select2-id="select2-data-10-av8g" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                            <option data-select2-id="select2-data-12-g9s6"></option>
                                            <option value="jan">January</option>
                                            <option value="feb">February</option>
                                            <option value="mar">March</option>
                                            <option value="apr">April</option>
                                            <option value="may">May</option>
                                            <option value="jun">June</option>
                                            <option value="jul">July</option>
                                            <option value="aug">August</option>
                                            <option value="sep">September</option>
                                            <option value="oct">October</option>
                                            <option value="nov">November</option>
                                            <option value="dec">December</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-11-kvpz" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid fw-bold" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-dznf-container" aria-controls="select2-dznf-container"><span class="select2-selection__rendered" id="select2-dznf-container" role="textbox" aria-readonly="true" title="Selecteer optie"><span class="select2-selection__placeholder">Selecteer optie</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <label class="form-label fs-6 fw-semibold">Status:</label>
                                        <select class="form-select form-select-solid fw-bold select2-hidden-accessible" data-kt-select2="true" data-placeholder="Selecteer optie" data-allow-clear="true" data-kt-subscription-table-filter="status" data-hide-search="true" data-select2-id="select2-data-13-yr1q" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                            <option data-select2-id="select2-data-15-5832"></option>
                                            <option value="Active">Active</option>
                                            <option value="Expiring">Expiring</option>
                                            <option value="Suspended">Suspended</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-14-slv4" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid fw-bold" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-m5hu-container" aria-controls="select2-m5hu-container"><span class="select2-selection__rendered" id="select2-m5hu-container" role="textbox" aria-readonly="true" title="Selecteer optie"><span class="select2-selection__placeholder">Selecteer optie</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <label class="form-label fs-6 fw-semibold">Actueel weer:</label>
                                        <select class="form-select form-select-solid fw-bold select2-hidden-accessible" data-kt-select2="true" data-placeholder="Selecteer optie" data-allow-clear="true" data-kt-subscription-table-filter="billing" data-hide-search="true" data-select2-id="select2-data-16-xg0j" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                            <option data-select2-id="select2-data-18-ve2t"></option>
                                            <option value="Auto-debit">Auto-debit</option>
                                            <option value="Manual - Credit Card">Manual - Credit Card</option>
                                            <option value="Manual - Cash">Manual - Cash</option>
                                            <option value="Manual - Paypal">Manual - Paypal</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-17-5wx1" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid fw-bold" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-0xll-container" aria-controls="select2-0xll-container"><span class="select2-selection__rendered" id="select2-0xll-container" role="textbox" aria-readonly="true" title="Selecteer optie"><span class="select2-selection__placeholder">Selecteer optie</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <label class="form-label fs-6 fw-semibold">Eigenaar:</label>
                                        <select class="form-select form-select-solid fw-bold select2-hidden-accessible" data-kt-select2="true" data-placeholder="Selecteer optie" data-allow-clear="true" data-kt-subscription-table-filter="product" data-hide-search="true" data-select2-id="select2-data-19-svgi" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                            <option data-select2-id="select2-data-21-6ip3"></option>
                                            <option value="Basic">Basic</option>
                                            <option value="Basic Bundle">Basic Bundle</option>
                                            <option value="Teams">Teams</option>
                                            <option value="Teams Bundle">Teams Bundle</option>
                                            <option value="Enterprise">Enterprise</option>
                                            <option value="	Enterprise Bundle">	Enterprise Bundle</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-20-vzd5" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid fw-bold" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-etbf-container" aria-controls="select2-etbf-container"><span class="select2-selection__rendered" id="select2-etbf-container" role="textbox" aria-readonly="true" title="Selecteer optie"><span class="select2-selection__placeholder">Selecteer optie</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6" data-kt-menu-dismiss="true" data-kt-subscription-table-filter="reset">Reset</button>
                                        <button type="submit" class="btn btn-primary fw-semibold px-6" data-kt-menu-dismiss="true" data-kt-subscription-table-filter="filter">Toepassen</button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Menu 1-->    <!--end::Filter-->

                            <!--begin::Export-->

                            <!--end::Export-->

                            <!--begin::Add subscription-->

                            <!--end::Add subscription-->
                        </div>
                        <!--end::Toolbar-->

                        <!--begin::Group actions-->
                        <div class="d-flex justify-content-end align-items-center d-none" data-kt-subscription-table-toolbar="selected">
                            <div class="fw-bold me-5">
                                <span class="me-2" data-kt-subscription-table-select="selected_count"></span> Selected
                            </div>

                            <button type="button" class="btn btn-danger" data-kt-subscription-table-select="delete_selected">
                                Delete Selected
                            </button>
                        </div>
                        <!--end::Group actions-->        </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="card-body pt-0">

                    <!--begin::Table-->
                    <div id="kt_subscriptions_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="table-responsive"><table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_subscriptions_table">
                                <!--begin::Table head-->
                                <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0"><th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1" aria-label="



            " style="width: 29.890625px;">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_subscriptions_table .form-check-input" value="1">
                                        </div>
                                    </th><th class="min-w-125px sorting" tabindex="0" aria-controls="kt_subscriptions_table" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending" style="width: 176.21875px;">Station</th><th class="min-w-125px sorting" tabindex="0" aria-controls="kt_subscriptions_table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 176.21875px;">Status</th><th class="min-w-125px sorting" tabindex="0" aria-controls="kt_subscriptions_table" rowspan="1" colspan="1" aria-label="Billing: activate to sort column ascending" style="width: 187.671875px;">Land</th><th class="min-w-125px sorting" tabindex="0" aria-controls="kt_subscriptions_table" rowspan="1" colspan="1" aria-label="Product: activate to sort column ascending" style="width: 181.109375px;">Eigenaar</th><th class="min-w-125px sorting" tabindex="0" aria-controls="kt_subscriptions_table" rowspan="1" colspan="1" aria-label="Created Date: activate to sort column ascending" style="width: 176.21875px;">Actief sinds</th><th class="text-end min-w-70px sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 136.21875px;">Actios</th></tr>
                                <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->

                                <!--begin::Table body-->
                                <tbody class="text-gray-600 fw-semibold">




















                                <tr class="odd">
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1">
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->

                                    <!--begin::Customer--->
                                    <td>
                                        <a href="/metronic8/demo1/../demo1/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Groningen-Noord 2</a>
                                    </td>
                                    <!--end::Customer--->

                                    <!--begin::Status--->
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <!--end::Status--->

                                    <!--begin::Billing--->
                                    <td>
                                        <div class="badge badge-light">Nederland</div>
                                    </td>
                                    <!--end::Billing--->

                                    <!--begin::Product--->
                                    <td>IWA &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</td>
                                    <!--end::Product--->

                                    <!--begin::Date--->
                                    <td data-order="2023-03-15T00:00:00+01:00">
                                        Apr 15, 2023                </td>
                                    <!--end::Date--->

                                    <!--begin::Action--->
                                    <td class="text-end">
                                        <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
</svg>
</span>
                                            <!--end::Svg Icon-->                    </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="/metronic8/demo1/../demo1/apps/subscriptions/add.html" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="/metronic8/demo1/../demo1/apps/subscriptions/add.html" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" data-kt-subscriptions-table-filter="delete_row" class="menu-link px-3">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action--->
                                </tr><tr class="even">
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1">
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->

                                    <!--begin::Customer--->
                                    <td>
                                        <a href="/metronic8/demo1/../demo1/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Groningen-zuid 1</a>
                                    </td>
                                    <!--end::Customer--->

                                    <!--begin::Status--->
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <!--end::Status--->

                                    <!--begin::Billing--->
                                    <td>
                                        <div class="badge badge-light">Nederland</div>
                                    </td>
                                    <!--end::Billing--->

                                    <!--begin::Product--->
                                    <td>IWA &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</td>
                                    <!--end::Product--->

                                    <!--begin::Date--->
                                    <td data-order="2023-03-25T00:00:00+01:00">
                                        Jul 25, 2023                </td>
                                    <!--end::Date--->

                                    <!--begin::Action--->
                                    <td class="text-end">
                                        <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
</svg>
</span>
                                            <!--end::Svg Icon-->                    </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="/metronic8/demo1/../demo1/apps/subscriptions/add.html" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="/metronic8/demo1/../demo1/apps/subscriptions/add.html" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" data-kt-subscriptions-table-filter="delete_row" class="menu-link px-3">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action--->
                                </tr><tr class="odd">
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1">
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->

                                    <!--begin::Customer--->
                                    <td>
                                        <a href="/metronic8/demo1/../demo1/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Berlijn-Oost 2</a>
                                    </td>
                                    <!--end::Customer--->

                                    <!--begin::Status--->
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <!--end::Status--->

                                    <!--begin::Billing--->
                                    <td>
                                        <div class="badge badge-light">Duitsland</div>
                                    </td>
                                    <!--end::Billing--->

                                    <!--begin::Product--->
                                    <td>DWG &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</td>
                                    <!--end::Product--->

                                    <!--begin::Date--->
                                    <td data-order="2023-03-15T00:00:00+01:00">
                                        Apr 15, 2023                </td>
                                    <!--end::Date--->

                                    <!--begin::Action--->
                                    <td class="text-end">
                                        <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
</svg>
</span>
                                            <!--end::Svg Icon-->                    </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="/metronic8/demo1/../demo1/apps/subscriptions/add.html" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="/metronic8/demo1/../demo1/apps/subscriptions/add.html" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" data-kt-subscriptions-table-filter="delete_row" class="menu-link px-3">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action--->
                                </tr><tr class="even">
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1">
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->

                                    <!--begin::Customer--->
                                    <td>
                                        <a href="/metronic8/demo1/../demo1/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Antwerpen 1</a>
                                    </td>
                                    <!--end::Customer--->

                                    <!--begin::Status--->
                                    <td>
                                        <div class="badge badge-light-warning">Waarschuwing</div>
                                    </td>
                                    <!--end::Status--->

                                    <!--begin::Billing--->
                                    <td>
                                        <div class="badge badge-light">België</div>
                                    </td>
                                    <!--end::Billing--->

                                    <!--begin::Product--->
                                    <td>
                                        Enterprise                </td>
                                    <!--end::Product--->

                                    <!--begin::Date--->
                                    <td data-order="2023-03-15T00:00:00+01:00">
                                        Apr 15, 2023                </td>
                                    <!--end::Date--->

                                    <!--begin::Action--->
                                    <td class="text-end">
                                        <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
</svg>
</span>
                                            <!--end::Svg Icon-->                    </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="/metronic8/demo1/../demo1/apps/subscriptions/add.html" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="/metronic8/demo1/../demo1/apps/subscriptions/add.html" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" data-kt-subscriptions-table-filter="delete_row" class="menu-link px-3">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action--->
                                </tr><tr class="even">
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1">
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->

                                    <!--begin::Customer--->
                                    <td>
                                        <a href="/metronic8/demo1/../demo1/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Amsterdam-Zuid 3</a>
                                    </td>
                                    <!--end::Customer--->

                                    <!--begin::Status--->
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <!--end::Status--->

                                    <!--begin::Billing--->
                                    <td>
                                        <div class="badge badge-light">Nederland</div>
                                    </td>
                                    <!--end::Billing--->

                                    <!--begin::Product--->
                                    <td>IWA &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</td>
                                    <!--end::Product--->

                                    <!--begin::Date--->
                                    <td data-order="2023-03-10T00:00:00+01:00">
                                        Mar 10, 2023                </td>
                                    <!--end::Date--->

                                    <!--begin::Action--->
                                    <td class="text-end">
                                        <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
</svg>
</span>
                                            <!--end::Svg Icon-->                    </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="/metronic8/demo1/../demo1/apps/subscriptions/add.html" class="menu-link px-3">
                                                    View
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="/metronic8/demo1/../demo1/apps/subscriptions/add.html" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" data-kt-subscriptions-table-filter="delete_row" class="menu-link px-3">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action--->
                                </tr></tbody>
                                <!--end::Table body-->
                            </table></div><div class="row"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"><div class="dataTables_paginate paging_simple_numbers" id="kt_subscriptions_table_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="kt_subscriptions_table_previous"><a href="#" aria-controls="kt_subscriptions_table" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="kt_subscriptions_table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_subscriptions_table" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="kt_subscriptions_table_next"><a href="#" aria-controls="kt_subscriptions_table" data-dt-idx="3" tabindex="0" class="page-link"><i class="next"></i></a></li></ul></div></div></div></div>
                    <!--end::Table-->    </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->

            <!--begin::Modals-->
            <!--begin::Modal - Adjust Balance-->
            <div class="modal fade" id="kt_subscriptions_export_modal" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bold">Export Subscriptions</h2>
                            <!--end::Modal title-->

                            <!--begin::Close-->
                            <div id="kt_subscriptions_export_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
</svg>

</span>
                                <!--end::Svg Icon-->                </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->

                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                            <!--begin::Form-->
                            <form id="kt_subscriptions_export_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="fs-5 fw-semibold form-label mb-5">Select Export Format:</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <select name="format" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid select2-hidden-accessible" data-select2-id="select2-data-22-708o" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                        <option value="excell" data-select2-id="select2-data-24-t0w2">Excel</option>
                                        <option value="pdf">PDF</option>
                                        <option value="cvs">CVS</option>
                                        <option value="zip">ZIP</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-23-brw2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-format-ca-container" aria-controls="select2-format-ca-container"><span class="select2-selection__rendered" id="select2-format-ca-container" role="textbox" aria-readonly="true" title="Excel">Excel</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10 fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="fs-5 fw-semibold form-label mb-5">Select Date Range:</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid flatpickr-input" placeholder="Pick a date" name="date" type="hidden"><input class="form-control form-control-solid form-control input" placeholder="Pick a date" tabindex="0" type="text" readonly="readonly">
                                    <!--end::Input-->
                                    <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                <!--end::Input group-->

                                <!--begin::Row-->
                                <div class="row fv-row mb-15">
                                    <!--begin::Label-->
                                    <label class="fs-5 fw-semibold form-label mb-5">Payment Type:</label>
                                    <!--end::Label-->

                                    <!--begin::Radio group-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Radio button-->
                                        <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                            <input class="form-check-input" type="checkbox" value="1" checked="checked" name="payment_type">
                                            <span class="form-check-label text-gray-600 fw-semibold">
                                    All
                                </span>
                                        </label>
                                        <!--end::Radio button-->

                                        <!--begin::Radio button-->
                                        <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                            <input class="form-check-input" type="checkbox" value="2" checked="checked" name="payment_type">
                                            <span class="form-check-label text-gray-600 fw-semibold">
                                    Visa
                                </span>
                                        </label>
                                        <!--end::Radio button-->

                                        <!--begin::Radio button-->
                                        <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                            <input class="form-check-input" type="checkbox" value="3" name="payment_type">
                                            <span class="form-check-label text-gray-600 fw-semibold">
                                    Mastercard
                                </span>
                                        </label>
                                        <!--end::Radio button-->

                                        <!--begin::Radio button-->
                                        <label class="form-check form-check-custom form-check-sm form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="4" name="payment_type">
                                            <span class="form-check-label text-gray-600 fw-semibold">
                                    American Express
                                </span>
                                        </label>
                                        <!--end::Radio button-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Row-->

                                <!--begin::Actions-->
                                <div class="text-center">
                                    <button type="reset" id="kt_subscriptions_export_cancel" class="btn btn-light me-3">
                                        Discard
                                    </button>

                                    <button type="submit" id="kt_subscriptions_export_submit" class="btn btn-primary">
                            <span class="indicator-label">
                                Submit
                            </span>
                                        <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - New Card--><!--end::Modals-->        </div>
        <!--end::Content container-->
    </div>
@endsection
