@extends('layouts.layout')
@section('main')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Customer Listing</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="../../../index.html" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">eCommerce</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Customers</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">Customer Listing</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Filter menu-->
                <div class="m-0">
                    <!--begin::Menu toggle-->
                    <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                    <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->Filter</a>
                    <!--end::Menu toggle-->
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_62c4164956945">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <div class="px-7 py-5">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Status:</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_62c4164956945" data-allow-clear="true">
                                        <option></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="2">In Process</option>
                                        <option value="2">Rejected</option>
                                    </select>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Member Type:</label>
                                <!--end::Label-->
                                <!--begin::Options-->
                                <div class="d-flex">
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                        <span class="form-check-label">Author</span>
                                    </label>
                                    <!--end::Options-->
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                        <span class="form-check-label">Customer</span>
                                    </label>
                                    <!--end::Options-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Notifications:</label>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                    <label class="form-check-label">Enabled</label>
                                </div>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Menu 1-->
                </div>
                <!--end::Filter menu-->
                <!--begin::Secondary button-->
                <!--end::Secondary button-->
                <!--begin::Primary button-->
                <a href="../../../.html" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
                <!--end::Primary button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Customers" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                            <!--begin::Filter-->
                            <div class="w-150px me-3">
                                <!--begin::Select2-->
                                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status">
                                    <option></option>
                                    <option value="all">All</option>
                                    <option value="active">Active</option>
                                    <option value="locked">Locked</option>
                                </select>
                                <!--end::Select2-->
                            </div>
                            <!--end::Filter-->
                            <!--begin::Export-->
                            <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_customers_export_modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1" transform="rotate(90 12.75 4.25)" fill="currentColor" />
                                    <path d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z" fill="currentColor" />
                                    <path d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z" fill="#C4C4C4" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Export</button>
                            <!--end::Export-->
                            <!--begin::Add customer-->
                            <a href="{{ route('staff.create') }}" type="button" class="btn btn-primary">
                                Add Customer
                            </a>
                            <router-outlet></router-outlet>
                            <!--end::Add customer-->
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::Group actions-->
                        <div class="d-flex justify-content-end align-items-center d-none" data-kt-customer-table-toolbar="selected">
                            <div class="fw-bolder me-5">
                            <span class="me-2" data-kt-customer-table-select="selected_count"></span>Selected</div>
                            <button type="button" class="btn btn-danger" data-kt-customer-table-select="delete_selected">Delete Selected</button>
                        </div>
                        <!--end::Group actions-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_customers_table .form-check-input" value="1" />
                                    </div>
                                </th>
                                <th class="min-w-125px">Customer Name</th>
                                <th class="min-w-125px">Email</th>
                                <th class="min-w-125px">Status</th>
                                <th class="min-w-125px">IP Address</th>
                                <th class="min-w-125px">Created Date</th>
                                <th class="text-end min-w-70px">Actions</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Emma Smith</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">smith@kpmg.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Active</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>149.61.57.242</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>19 Aug 2022, 11:30 am</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Melody Macy</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">melody@altbox.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Locked</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>180.74.47.11</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>05 May 2022, 5:20 pm</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Max Smith</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">max@kt.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Active</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>125.79.65.77</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>24 Jun 2022, 9:23 pm</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Sean Bean</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">sean@dellito.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Active</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>129.63.71.198</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>19 Aug 2022, 10:30 am</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Brian Cox</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">brian@exchange.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Locked</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>135.59.51.86</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>19 Aug 2022, 10:10 pm</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Mikaela Collins</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">mik@pex.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Active</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>155.64.20.0</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>15 Apr 2022, 5:30 pm</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Francis Mitcham</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">f.mit@kpmg.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Active</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>209.79.54.177</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>25 Oct 2022, 2:40 pm</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Olivia Wild</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">olivia@corpmail.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Active</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>197.67.43.55</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>20 Dec 2022, 8:43 pm</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Neil Owen</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">owen.neil@gmail.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Active</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>214.61.73.21</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>20 Dec 2022, 10:30 am</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Dan Wilson</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">dam@consilting.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Locked</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>186.59.24.125</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>20 Dec 2022, 10:30 am</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Emma Bold</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">emma@intenso.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Active</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>214.56.78.100</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>24 Jun 2022, 6:05 pm</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Ana Crown</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">ana.cf@limtel.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Locked</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>166.68.35.237</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>05 May 2022, 9:23 pm</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Robert Doe</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">robert@benko.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Locked</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>115.74.80.141</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>22 Sep 2022, 6:43 am</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">John Miller</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">miller@mapple.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Active</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>111.77.66.29</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>25 Oct 2022, 2:40 pm</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Lucy Kunic</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">lucy.m@fentech.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Active</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>202.80.26.26</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>25 Jul 2022, 11:05 am</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Emma Smith</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">smith@kpmg.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Locked</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>112.54.81.144</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>10 Nov 2022, 10:10 pm</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Melody Macy</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">melody@altbox.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Active</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>213.59.26.199</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>10 Nov 2022, 9:23 pm</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Max Smith</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">max@kt.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Locked</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>217.57.87.183</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>05 May 2022, 6:05 pm</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Sean Bean</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">sean@dellito.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Locked</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>149.60.77.213</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>05 May 2022, 2:40 pm</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Brian Cox</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">brian@exchange.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Locked</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>188.52.85.5</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>25 Jul 2022, 6:43 am</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Mikaela Collins</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">mik@pex.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Active</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>104.56.26.143</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>20 Dec 2022, 5:30 pm</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Francis Mitcham</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">f.mit@kpmg.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Locked</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>212.67.30.92</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>21 Feb 2022, 10:10 pm</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Olivia Wild</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">olivia@corpmail.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Active</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>217.60.71.223</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>10 Mar 2022, 2:40 pm</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Neil Owen</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">owen.neil@gmail.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Active</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>142.76.30.45</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>15 Apr 2022, 2:40 pm</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Dan Wilson</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">dam@consilting.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Active</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>177.61.88.82</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>22 Sep 2022, 11:30 am</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Emma Bold</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">emma@intenso.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Locked</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>119.79.62.236</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>20 Dec 2022, 8:43 pm</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Ana Crown</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">ana.cf@limtel.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Locked</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>137.62.22.181</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>10 Mar 2022, 6:05 pm</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Robert Doe</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">robert@benko.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Locked</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>145.53.63.164</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>15 Apr 2022, 11:05 am</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">John Miller</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">miller@mapple.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Active</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>176.78.40.94</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>20 Jun 2022, 6:43 am</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Lucy Kunic</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">lucy.m@fentech.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Active</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>107.56.61.60</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>25 Jul 2022, 10:30 am</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Emma Smith</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">smith@kpmg.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Locked</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>102.78.46.9</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>15 Apr 2022, 5:20 pm</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Melody Macy</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">melody@altbox.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Locked</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>106.62.31.36</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>05 May 2022, 9:23 pm</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Max Smith</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">max@kt.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Active</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>122.61.28.152</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>15 Apr 2022, 10:10 pm</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Sean Bean</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">sean@dellito.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Active</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>146.67.61.116</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>20 Dec 2022, 9:23 pm</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Brian Cox</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">brian@exchange.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Active</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>171.59.53.238</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>10 Nov 2022, 6:05 pm</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Mikaela Collins</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">mik@pex.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Active</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>185.52.64.15</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>21 Feb 2022, 5:20 pm</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Francis Mitcham</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">f.mit@kpmg.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Active</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>197.76.56.31</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>15 Apr 2022, 2:40 pm</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Olivia Wild</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">olivia@corpmail.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Locked</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>198.51.59.224</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>24 Jun 2022, 6:43 am</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Neil Owen</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">owen.neil@gmail.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-success">Active</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>141.57.37.82</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>05 May 2022, 10:10 pm</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr>
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::Name=-->
                                <td>
                                    <a href="details.html" class="text-gray-800 text-hover-primary mb-1">Dan Wilson</a>
                                </td>
                                <!--end::Name=-->
                                <!--begin::Email=-->
                                <td>
                                    <a href="#" class="text-gray-600 text-hover-primary mb-1">dam@consilting.com</a>
                                </td>
                                <!--end::Email=-->
                                <!--begin::Status=-->
                                <td>
                                    <!--begin::Badges-->
                                    <div class="badge badge-light-danger">Locked</div>
                                    <!--end::Badges-->
                                </td>
                                <!--end::Status=-->
                                <!--begin::IP Address=-->
                                <td>206.58.39.212</td>
                                <!--end::IP Address=-->
                                <!--begin::Date=-->
                                <td>24 Jun 2022, 10:30 am</td>
                                <!--end::Date=-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../customers/view.html" class="menu-link px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
            <!--begin::Modals-->
            <!--begin::Modal - Customers - Add-->
            <div class="modal fade" id="kt_modal_add_customer" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Form-->
                        <form class="form" action="#" id="kt_modal_add_customer_form" data-kt-redirect="../../customers/list.html">
                            <!--begin::Modal header-->
                            <div class="modal-header" id="kt_modal_add_customer_header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bolder">Add a Customer</h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->
                                <div id="kt_modal_add_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body py-10 px-lg-17">
                                <!--begin::Scroll-->
                                <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-bold mb-2">Name</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="name" value="Sean Bean" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2">
                                            <span class="required">Email</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Email address must be active"></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="email" class="form-control form-control-solid" placeholder="" name="email" value="sean@dellito.com" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-15">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2">Description</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="description" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Billing toggle-->
                                    <div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_add_customer_billing_info" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">Shipping Information 
                                    <span class="ms-2 rotate-180">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                        <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span></div>
                                    <!--end::Billing toggle-->
                                    <!--begin::Billing form-->
                                    <div id="kt_modal_add_customer_billing_info" class="collapse show">
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Label-->
                                            <label class="required fs-6 fw-bold mb-2">Address Line 1</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input class="form-control form-control-solid" placeholder="" name="address1" value="101, Collins Street" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold mb-2">Address Line 2</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input class="form-control form-control-solid" placeholder="" name="address2" value="" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Label-->
                                            <label class="required fs-6 fw-bold mb-2">Town</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input class="form-control form-control-solid" placeholder="" name="city" value="Melbourne" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row g-9 mb-7">
                                            <!--begin::Col-->
                                            <div class="col-md-6 fv-row">
                                                <!--begin::Label-->
                                                <label class="required fs-6 fw-bold mb-2">State / Province</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid" placeholder="" name="state" value="Victoria" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-md-6 fv-row">
                                                <!--begin::Label-->
                                                <label class="required fs-6 fw-bold mb-2">Post Code</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid" placeholder="" name="postcode" value="3000" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold mb-2">
                                                <span class="required">Country</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a Country..." data-dropdown-parent="#kt_modal_add_customer" class="form-select form-select-solid fw-bolder">
                                                <option value="">Select a Country...</option>
                                                <option value="AF">Afghanistan</option>
                                                <option value="AX">Aland Islands</option>
                                                <option value="AL">Albania</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AO">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AG">Antigua and Barbuda</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armenia</option>
                                                <option value="AW">Aruba</option>
                                                <option value="AU">Australia</option>
                                                <option value="AT">Austria</option>
                                                <option value="AZ">Azerbaijan</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BH">Bahrain</option>
                                                <option value="BD">Bangladesh</option>
                                                <option value="BB">Barbados</option>
                                                <option value="BY">Belarus</option>
                                                <option value="BE">Belgium</option>
                                                <option value="BZ">Belize</option>
                                                <option value="BJ">Benin</option>
                                                <option value="BM">Bermuda</option>
                                                <option value="BT">Bhutan</option>
                                                <option value="BO">Bolivia, Plurinational State of</option>
                                                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                <option value="BA">Bosnia and Herzegovina</option>
                                                <option value="BW">Botswana</option>
                                                <option value="BR">Brazil</option>
                                                <option value="IO">British Indian Ocean Territory</option>
                                                <option value="BN">Brunei Darussalam</option>
                                                <option value="BG">Bulgaria</option>
                                                <option value="BF">Burkina Faso</option>
                                                <option value="BI">Burundi</option>
                                                <option value="KH">Cambodia</option>
                                                <option value="CM">Cameroon</option>
                                                <option value="CA">Canada</option>
                                                <option value="CV">Cape Verde</option>
                                                <option value="KY">Cayman Islands</option>
                                                <option value="CF">Central African Republic</option>
                                                <option value="TD">Chad</option>
                                                <option value="CL">Chile</option>
                                                <option value="CN">China</option>
                                                <option value="CX">Christmas Island</option>
                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                <option value="CO">Colombia</option>
                                                <option value="KM">Comoros</option>
                                                <option value="CK">Cook Islands</option>
                                                <option value="CR">Costa Rica</option>
                                                <option value="CI">Côte d'Ivoire</option>
                                                <option value="HR">Croatia</option>
                                                <option value="CU">Cuba</option>
                                                <option value="CW">Curaçao</option>
                                                <option value="CZ">Czech Republic</option>
                                                <option value="DK">Denmark</option>
                                                <option value="DJ">Djibouti</option>
                                                <option value="DM">Dominica</option>
                                                <option value="DO">Dominican Republic</option>
                                                <option value="EC">Ecuador</option>
                                                <option value="EG">Egypt</option>
                                                <option value="SV">El Salvador</option>
                                                <option value="GQ">Equatorial Guinea</option>
                                                <option value="ER">Eritrea</option>
                                                <option value="EE">Estonia</option>
                                                <option value="ET">Ethiopia</option>
                                                <option value="FK">Falkland Islands (Malvinas)</option>
                                                <option value="FJ">Fiji</option>
                                                <option value="FI">Finland</option>
                                                <option value="FR">France</option>
                                                <option value="PF">French Polynesia</option>
                                                <option value="GA">Gabon</option>
                                                <option value="GM">Gambia</option>
                                                <option value="GE">Georgia</option>
                                                <option value="DE">Germany</option>
                                                <option value="GH">Ghana</option>
                                                <option value="GI">Gibraltar</option>
                                                <option value="GR">Greece</option>
                                                <option value="GL">Greenland</option>
                                                <option value="GD">Grenada</option>
                                                <option value="GU">Guam</option>
                                                <option value="GT">Guatemala</option>
                                                <option value="GG">Guernsey</option>
                                                <option value="GN">Guinea</option>
                                                <option value="GW">Guinea-Bissau</option>
                                                <option value="HT">Haiti</option>
                                                <option value="VA">Holy See (Vatican City State)</option>
                                                <option value="HN">Honduras</option>
                                                <option value="HK">Hong Kong</option>
                                                <option value="HU">Hungary</option>
                                                <option value="IS">Iceland</option>
                                                <option value="IN">India</option>
                                                <option value="ID">Indonesia</option>
                                                <option value="IR">Iran, Islamic Republic of</option>
                                                <option value="IQ">Iraq</option>
                                                <option value="IE">Ireland</option>
                                                <option value="IM">Isle of Man</option>
                                                <option value="IL">Israel</option>
                                                <option value="IT">Italy</option>
                                                <option value="JM">Jamaica</option>
                                                <option value="JP">Japan</option>
                                                <option value="JE">Jersey</option>
                                                <option value="JO">Jordan</option>
                                                <option value="KZ">Kazakhstan</option>
                                                <option value="KE">Kenya</option>
                                                <option value="KI">Kiribati</option>
                                                <option value="KP">Korea, Democratic People's Republic of</option>
                                                <option value="KW">Kuwait</option>
                                                <option value="KG">Kyrgyzstan</option>
                                                <option value="LA">Lao People's Democratic Republic</option>
                                                <option value="LV">Latvia</option>
                                                <option value="LB">Lebanon</option>
                                                <option value="LS">Lesotho</option>
                                                <option value="LR">Liberia</option>
                                                <option value="LY">Libya</option>
                                                <option value="LI">Liechtenstein</option>
                                                <option value="LT">Lithuania</option>
                                                <option value="LU">Luxembourg</option>
                                                <option value="MO">Macao</option>
                                                <option value="MG">Madagascar</option>
                                                <option value="MW">Malawi</option>
                                                <option value="MY">Malaysia</option>
                                                <option value="MV">Maldives</option>
                                                <option value="ML">Mali</option>
                                                <option value="MT">Malta</option>
                                                <option value="MH">Marshall Islands</option>
                                                <option value="MQ">Martinique</option>
                                                <option value="MR">Mauritania</option>
                                                <option value="MU">Mauritius</option>
                                                <option value="MX">Mexico</option>
                                                <option value="FM">Micronesia, Federated States of</option>
                                                <option value="MD">Moldova, Republic of</option>
                                                <option value="MC">Monaco</option>
                                                <option value="MN">Mongolia</option>
                                                <option value="ME">Montenegro</option>
                                                <option value="MS">Montserrat</option>
                                                <option value="MA">Morocco</option>
                                                <option value="MZ">Mozambique</option>
                                                <option value="MM">Myanmar</option>
                                                <option value="NA">Namibia</option>
                                                <option value="NR">Nauru</option>
                                                <option value="NP">Nepal</option>
                                                <option value="NL">Netherlands</option>
                                                <option value="NZ">New Zealand</option>
                                                <option value="NI">Nicaragua</option>
                                                <option value="NE">Niger</option>
                                                <option value="NG">Nigeria</option>
                                                <option value="NU">Niue</option>
                                                <option value="NF">Norfolk Island</option>
                                                <option value="MP">Northern Mariana Islands</option>
                                                <option value="NO">Norway</option>
                                                <option value="OM">Oman</option>
                                                <option value="PK">Pakistan</option>
                                                <option value="PW">Palau</option>
                                                <option value="PS">Palestinian Territory, Occupied</option>
                                                <option value="PA">Panama</option>
                                                <option value="PG">Papua New Guinea</option>
                                                <option value="PY">Paraguay</option>
                                                <option value="PE">Peru</option>
                                                <option value="PH">Philippines</option>
                                                <option value="PL">Poland</option>
                                                <option value="PT">Portugal</option>
                                                <option value="PR">Puerto Rico</option>
                                                <option value="QA">Qatar</option>
                                                <option value="RO">Romania</option>
                                                <option value="RU">Russian Federation</option>
                                                <option value="RW">Rwanda</option>
                                                <option value="BL">Saint Barthélemy</option>
                                                <option value="KN">Saint Kitts and Nevis</option>
                                                <option value="LC">Saint Lucia</option>
                                                <option value="MF">Saint Martin (French part)</option>
                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                <option value="WS">Samoa</option>
                                                <option value="SM">San Marino</option>
                                                <option value="ST">Sao Tome and Principe</option>
                                                <option value="SA">Saudi Arabia</option>
                                                <option value="SN">Senegal</option>
                                                <option value="RS">Serbia</option>
                                                <option value="SC">Seychelles</option>
                                                <option value="SL">Sierra Leone</option>
                                                <option value="SG">Singapore</option>
                                                <option value="SX">Sint Maarten (Dutch part)</option>
                                                <option value="SK">Slovakia</option>
                                                <option value="SI">Slovenia</option>
                                                <option value="SB">Solomon Islands</option>
                                                <option value="SO">Somalia</option>
                                                <option value="ZA">South Africa</option>
                                                <option value="KR">South Korea</option>
                                                <option value="SS">South Sudan</option>
                                                <option value="ES">Spain</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="SD">Sudan</option>
                                                <option value="SR">Suriname</option>
                                                <option value="SZ">Swaziland</option>
                                                <option value="SE">Sweden</option>
                                                <option value="CH">Switzerland</option>
                                                <option value="SY">Syrian Arab Republic</option>
                                                <option value="TW">Taiwan, Province of China</option>
                                                <option value="TJ">Tajikistan</option>
                                                <option value="TZ">Tanzania, United Republic of</option>
                                                <option value="TH">Thailand</option>
                                                <option value="TG">Togo</option>
                                                <option value="TK">Tokelau</option>
                                                <option value="TO">Tonga</option>
                                                <option value="TT">Trinidad and Tobago</option>
                                                <option value="TN">Tunisia</option>
                                                <option value="TR">Turkey</option>
                                                <option value="TM">Turkmenistan</option>
                                                <option value="TC">Turks and Caicos Islands</option>
                                                <option value="TV">Tuvalu</option>
                                                <option value="UG">Uganda</option>
                                                <option value="UA">Ukraine</option>
                                                <option value="AE">United Arab Emirates</option>
                                                <option value="GB">United Kingdom</option>
                                                <option value="US" selected="selected">United States</option>
                                                <option value="UY">Uruguay</option>
                                                <option value="UZ">Uzbekistan</option>
                                                <option value="VU">Vanuatu</option>
                                                <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                <option value="VN">Vietnam</option>
                                                <option value="VI">Virgin Islands</option>
                                                <option value="YE">Yemen</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabwe</option>
                                            </select>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Label-->
                                                <div class="me-5">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-bold">Use as a billing adderess?</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Label-->
                                                <!--begin::Switch-->
                                                <label class="form-check form-switch form-check-custom form-check-solid">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input" name="billing" type="checkbox" value="1" id="kt_modal_add_customer_billing" checked="checked" />
                                                    <!--end::Input-->
                                                    <!--begin::Label-->
                                                    <span class="form-check-label fw-bold text-muted" for="kt_modal_add_customer_billing">Yes</span>
                                                    <!--end::Label-->
                                                </label>
                                                <!--end::Switch-->
                                            </div>
                                            <!--begin::Wrapper-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Billing form-->
                                </div>
                                <!--end::Scroll-->
                            </div>
                            <!--end::Modal body-->
                            <!--begin::Modal footer-->
                            <div class="modal-footer flex-center">
                                <!--begin::Button-->
                                <button type="reset" id="kt_modal_add_customer_cancel" class="btn btn-light me-3">Discard</button>
                                <!--end::Button-->
                                <!--begin::Button-->
                                <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait... 
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <!--end::Button-->
                            </div>
                            <!--end::Modal footer-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
            </div>
            <!--end::Modal - Customers - Add-->
            <!--begin::Modal - Adjust Balance-->
            <div class="modal fade" id="kt_customers_export_modal" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bolder">Export Customers</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div id="kt_customers_export_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                            <!--begin::Form-->
                            <form id="kt_customers_export_form" class="form" action="#">
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="fs-5 fw-bold form-label mb-5">Select Export Format:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select data-control="select2" data-placeholder="Select a format" data-hide-search="true" name="format" class="form-select form-select-solid">
                                        <option value="excell">Excel</option>
                                        <option value="pdf">PDF</option>
                                        <option value="cvs">CVS</option>
                                        <option value="zip">ZIP</option>
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="fs-5 fw-bold form-label mb-5">Select Date Range:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control form-control-solid" placeholder="Pick a date" name="date" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Row-->
                                <div class="row fv-row mb-15">
                                    <!--begin::Label-->
                                    <label class="fs-5 fw-bold form-label mb-5">Payment Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Radio group-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Radio button-->
                                        <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                            <input class="form-check-input" type="checkbox" value="1" checked="checked" name="payment_type" />
                                            <span class="form-check-label text-gray-600 fw-bold">All</span>
                                        </label>
                                        <!--end::Radio button-->
                                        <!--begin::Radio button-->
                                        <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                            <input class="form-check-input" type="checkbox" value="2" checked="checked" name="payment_type" />
                                            <span class="form-check-label text-gray-600 fw-bold">Visa</span>
                                        </label>
                                        <!--end::Radio button-->
                                        <!--begin::Radio button-->
                                        <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                            <input class="form-check-input" type="checkbox" value="3" name="payment_type" />
                                            <span class="form-check-label text-gray-600 fw-bold">Mastercard</span>
                                        </label>
                                        <!--end::Radio button-->
                                        <!--begin::Radio button-->
                                        <label class="form-check form-check-custom form-check-sm form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="4" name="payment_type" />
                                            <span class="form-check-label text-gray-600 fw-bold">American Express</span>
                                        </label>
                                        <!--end::Radio button-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Actions-->
                                <div class="text-center">
                                    <button type="reset" id="kt_customers_export_cancel" class="btn btn-light me-3">Discard</button>
                                    <button type="submit" id="kt_customers_export_submit" class="btn btn-primary">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait... 
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
            <!--end::Modal - New Card-->
            <!--end::Modals-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
							<!--begin::Post-->
                    
							<div class="post d-flex flex-column-fluid" id="kt_post">
								<!--begin::Container-->
								<div id="kt_content_container" class="container-xxl">
									<!--begin::Navbar-->
									<div class="row g-6 g-xl-9 mb-6 mb-xl-9">
										<!--begin::Col-->
										<div class="col-md-6 col-lg-2">
											<!--begin::Card-->
											<div class="card h-100">
												<!--begin::Card body-->
												<div
													class="card-body d-flex justify-content-center text-center flex-column p-8">
													<!--begin::Name-->
													<a href="../file-manager/files.html"
														class="text-gray-800 text-hover-primary d-flex flex-column">
														<!--begin::Image-->
		
														<div class="symbol mb-5 symbol-60px mx-auto text-center">
															<div
																class="symbol-label fs-2 fw-bold bg-success text-inverse-danger">
																<span class="svg-icon svg-icon-primary svg-icon-3x">
																	<!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Communication/Add-user.svg--><svg
																		xmlns="http://www.w3.org/2000/svg"
																		xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
																		height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
																			fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24" />
																			<path
																				d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
																				fill="#fff" fill-rule="nonzero" />
																			<path
																				d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
																				fill="#fff" fill-rule="nonzero" />
																		</g>
																	</svg>
																	<!--end::Svg Icon--></span></div>
														</div>
														<!--end::Image-->
														<!--begin::Title-->
														<div class="fs-5 fw-bolder mb-2">Manage Users</div>
														<!--end::Title-->
													</a>
													<!--end::Name-->
													<!--begin::Description-->
													<div class="fs-7 fw-bold text-gray-400">Last Updated : 3 days ago</div>
													<!--end::Description-->
												</div>
												<!--end::Card body-->
		
												<span class="cstemed fs-1.8hx fw-bolder text-light-800 counted"
													data-kt-countup="true" data-kt-countup-value="30467"><span
														class="fs-6 text-light-700 fw-bolder">
														<span class="fs-6 text-light-700 fw-bolder">
															<span class="ms-n1" data-kt-countup="true"
																data-kt-countup-value="45">0</span></span></span></span>
											</div>
											<!--end::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-lg-2">
											<!--begin::Card-->
											<div class="card h-100">
												<!--begin::Card body-->
												<div
													class="card-body d-flex justify-content-center text-center flex-column p-8">
													<!--begin::Name-->
													<a href="../file-manager/files.html"
														class="text-gray-800 text-hover-primary d-flex flex-column">
														<div class="symbol mb-5 symbol-60px mx-auto text-center">
															<div
																class="symbol-label fs-2 fw-bold bg-danger text-inverse-danger">
																<span class="svg-icon svg-icon-primary svg-icon-3x">
																	<!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Files/File-done.svg--><svg
																		xmlns="http://www.w3.org/2000/svg"
																		xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
																		height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
																			fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24" />
																			<path
																				d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z M10.875,15.75 C11.1145833,15.75 11.3541667,15.6541667 11.5458333,15.4625 L15.3791667,11.6291667 C15.7625,11.2458333 15.7625,10.6708333 15.3791667,10.2875 C14.9958333,9.90416667 14.4208333,9.90416667 14.0375,10.2875 L10.875,13.45 L9.62916667,12.2041667 C9.29375,11.8208333 8.67083333,11.8208333 8.2875,12.2041667 C7.90416667,12.5875 7.90416667,13.1625 8.2875,13.5458333 L10.2041667,15.4625 C10.3958333,15.6541667 10.6354167,15.75 10.875,15.75 Z"
																				fill="#fff" fill-rule="nonzero" />
																			<path
																				d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z"
																				fill="#F1416C" />
																		</g>
																	</svg>
																	<!--end::Svg Icon--></span></div>
														</div>
		
														<!--begin::Title-->
														<div class="fs-5 fw-bolder mb-2">Leave Approval</div>
														<!--end::Title-->
													</a>
													<!--end::Name-->
													<!--begin::Description-->
													<div class="fs-7 fw-bold text-gray-400">Last Updated : 3 days ago</div>
													<!--end::Description-->
												</div>
												<!--end::Card body-->
		
												<span class="cstemed fs-1.8hx fw-bolder text-light-800 counted"
													data-kt-countup="true" data-kt-countup-value="30467"><span
														class="fs-6 text-light-700 fw-bolder">
														<span class="fs-6 text-light-700 fw-bolder">
															<span class="ms-n1" data-kt-countup="true"
																data-kt-countup-value="30">0</span></span></span></span>
											</div>
											<!--end::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-lg-2">
											<!--begin::Card-->
											<div class="card h-100">
												<!--begin::Card body-->
												<div
													class="card-body d-flex justify-content-center text-center flex-column p-8">
													<!--begin::Name-->
													<a href="../file-manager/files.html"
														class="text-gray-800 text-hover-primary d-flex flex-column">
		
														<!--begin::Image-->
		
														<div class="symbol mb-5 symbol-60px mx-auto text-center">
															<div
																class="symbol-label fs-2 fw-bold bg-primary text-inverse-danger">
																<span class="svg-icon svg-icon-primary svg-icon-3x">
																	<!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Food/Cake.svg--><svg
																		xmlns="http://www.w3.org/2000/svg"
																		xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
																		height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
																			fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<path
																				d="M13,11 L17,11 C19.0758626,11 20.7823939,12.5812954 20.980747,14.6050394 L20.2928932,15.2928932 C19.1327768,16.4530096 18.0387961,17 17,17 C16.5220296,17 16.1880664,16.8518214 15.5648598,16.401988 C15.504386,16.3583378 15.425236,16.3005045 15.2756717,16.1912639 C14.1361881,15.3625486 13.3053476,15 12,15 C10.7177731,15 9.87894492,15.3373247 8.58005831,16.1531954 C8.42732855,16.2493619 8.35077622,16.2975179 8.28137728,16.3407226 C7.49918122,16.8276828 7.06530257,17 6.5,17 C5.8272085,17 5.18146841,16.7171497 4.58539107,16.2273674 C4.21125802,15.9199514 3.94722374,15.6135435 3.82536894,15.4354062 C3.58523105,15.132389 3.4977165,15.0219591 3.03793571,14.4468552 C3.3073102,12.4994956 4.97854212,11 7,11 L11,11 L11,9 L13,9 L13,11 Z"
																				fill="#fff" />
																			<path
																				d="M12,7 C13.1045695,7 14,6.1045695 14,5 C14,4.26362033 13.3333333,3.26362033 12,2 C10.6666667,3.26362033 10,4.26362033 10,5 C10,6.1045695 10.8954305,7 12,7 Z"
																				fill="#fff" />
																			<path
																				d="M21,17.3570374 L21,21 C21,21.5522847 20.5522847,22 20,22 L4,22 C3.44771525,22 3,21.5522847 3,21 L3,17.4976746 C3.098145,17.5882704 3.2035241,17.6804734 3.31568417,17.7726326 C4.24088818,18.5328503 5.30737928,19 6.5,19 C7.52608715,19 8.26628185,18.7060277 9.33838848,18.0385822 C9.41243034,17.9924871 9.49377318,17.9413176 9.64386645,17.8468046 C10.6511414,17.2141042 11.1835561,17 12,17 C12.7988191,17 13.2700619,17.2056332 14.0993283,17.8087361 C14.2431314,17.9137812 14.3282387,17.9759674 14.3943239,18.0236679 C15.3273176,18.697107 16.0099741,19 17,19 C18.3748985,19 19.7104312,18.4390637 21,17.3570374 Z"
																				fill="#fff" />
																		</g>
																	</svg>
																	<!--end::Svg Icon--></span></div>
														</div>
														<!--end::Image-->
														<!--begin::Title-->
														<div class="fs-5 fw-bolder mb-2">Birthdays</div>
														<!--end::Title-->
													</a>
													<!--end::Name-->
													<!--begin::Description-->
													<div class="fs-7 fw-bold text-gray-400">Last Updated : 3 days ago</div>
													<!--end::Description-->
												</div>
												<!--end::Card body-->
		
												<span class="cstemed fs-1.8hx fw-bolder text-light-800 counted"
													data-kt-countup="true" data-kt-countup-value="30467"><span
														class="fs-6 text-light-700 fw-bolder">
														<span class="fs-6 text-light-700 fw-bolder">
															<span class="ms-n1" data-kt-countup="true"
																data-kt-countup-value="15">0</span></span></span></span>
											</div>
											<!--end::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-lg-2">
											<!--begin::Card-->
											<div class="card h-100">
												<!--begin::Card body-->
												<div
													class="card-body d-flex justify-content-center text-center flex-column p-8">
													<!--begin::Name-->
													<a href="../file-manager/files.html"
														class="text-gray-800 text-hover-primary d-flex flex-column">
		
														<!--begin::Image-->
		
														<div class="symbol mb-5 symbol-60px mx-auto text-center">
															<div
																class="symbol-label fs-2 fw-bold bg-warning text-inverse-danger">
																<span class="svg-icon svg-icon-primary svg-icon-2x">
																	<!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/General/Heart.svg--><svg
																		xmlns="http://www.w3.org/2000/svg"
																		xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
																		height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
																			fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24" />
																			<path
																				d="M16.5,4.5 C14.8905,4.5 13.00825,6.32463215 12,7.5 C10.99175,6.32463215 9.1095,4.5 7.5,4.5 C4.651,4.5 3,6.72217984 3,9.55040872 C3,12.6834696 6,16 12,19.5 C18,16 21,12.75 21,9.75 C21,6.92177112 19.349,4.5 16.5,4.5 Z"
																				fill="#fff" fill-rule="nonzero" />
																		</g>
																	</svg>
																	<!--end::Svg Icon--></span></div>
														</div>
														<!--end::Image-->
														<!--begin::Title-->
														<div class="fs-5 fw-bolder mb-2">Anniversary</div>
														<!--end::Title-->
													</a>
													<!--end::Name-->
													<!--begin::Description-->
													<div class="fs-7 fw-bold text-gray-400">Last Updated : 3 days ago</div>
													<!--end::Description-->
												</div>
												<!--end::Card body-->
		
												<span class="cstemed fs-1.8hx fw-bolder text-light-800 counted"
													data-kt-countup="true" data-kt-countup-value="30467"><span
														class="fs-6 text-light-700 fw-bolder">
														<span class="fs-6 text-light-700 fw-bolder">
															<span class="ms-n1" data-kt-countup="true"
																data-kt-countup-value="50">0</span></span></span> +</span>
											</div>
											<!--end::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-lg-2">
											<!--begin::Card-->
											<div class="card h-100">
												<!--begin::Card body-->
												<div
													class="card-body d-flex justify-content-center text-center flex-column p-8">
													<!--begin::Name-->
													<a href="../file-manager/files.html"
														class="text-gray-800 text-hover-primary d-flex flex-column">
		
														<!--begin::Image-->
		
														<div class="symbol mb-5 symbol-60px mx-auto text-center">
															<div class="symbol-label fs-2 fw-bold bg-info text-inverse-danger">
																<span class="svg-icon svg-icon-primary svg-icon-3x">
																	<!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Communication/Thumbtack.svg--><svg
																		xmlns="http://www.w3.org/2000/svg"
																		xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
																		height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
																			fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<path
																				d="M11.6734943,8.3307728 L14.9993074,6.09979492 L14.1213255,5.22181303 C13.7308012,4.83128874 13.7308012,4.19812376 14.1213255,3.80759947 L15.535539,2.39338591 C15.9260633,2.00286161 16.5592283,2.00286161 16.9497526,2.39338591 L22.6066068,8.05024016 C22.9971311,8.44076445 22.9971311,9.07392943 22.6066068,9.46445372 L21.1923933,10.8786673 C20.801869,11.2691916 20.168704,11.2691916 19.7781797,10.8786673 L18.9002333,10.0007208 L16.6692373,13.3265608 C16.9264145,14.2523264 16.9984943,15.2320236 16.8664372,16.2092466 L16.4344698,19.4058049 C16.360509,19.9531149 15.8568695,20.3368403 15.3095595,20.2628795 C15.0925691,20.2335564 14.8912006,20.1338238 14.7363706,19.9789938 L5.02099894,10.2636221 C4.63047465,9.87309784 4.63047465,9.23993286 5.02099894,8.84940857 C5.17582897,8.69457854 5.37719743,8.59484594 5.59418783,8.56552292 L8.79074617,8.13355557 C9.76799113,8.00149544 10.7477104,8.0735815 11.6734943,8.3307728 Z"
																				fill="#fff" />
																			<polygon fill="#fff"
																				transform="translate(7.050253, 17.949747) rotate(-315.000000) translate(-7.050253, -17.949747) "
																				points="5.55025253 13.9497475 5.55025253 19.6640332 7.05025253 21.9497475 8.55025253 19.6640332 8.55025253 13.9497475" />
																		</g>
																	</svg>
																	<!--end::Svg Icon--></span></div>
														</div>
														<!--end::Image-->
														<!--begin::Title-->
														<div class="fs-5 fw-bolder mb-2">Announcements</div>
														<!--end::Title-->
													</a>
													<!--end::Name-->
													<!--begin::Description-->
													<div class="fs-7 fw-bold text-gray-400">Last Updated : 3 days ago</div>
													<!--end::Description-->
												</div>
												<!--end::Card body-->
		
												<span class="cstemed fs-1.8hx fw-bolder text-light-800 counted"
													data-kt-countup="true" data-kt-countup-value="30467"><span
														class="fs-6 text-light-700 fw-bolder">
														<span class="fs-6 text-light-700 fw-bolder">
															<span class="ms-n1" data-kt-countup="true"
																data-kt-countup-value="50">0</span></span>+</span></span>
											</div>
											<!--end::Card-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-lg-2">
											<!--begin::Card-->
											<div class="card h-100">
												<!--begin::Card body-->
												<div
													class="card-body d-flex justify-content-center text-center flex-column p-8">
													<!--begin::Name-->
													<a href="../file-manager/files.html"
														class="text-gray-800 text-hover-primary d-flex flex-column">
		
														<!--begin::Image-->
		
														<div class="symbol mb-5 symbol-60px mx-auto text-center">
															<div class="symbol-label fs-2 fw-bold bg-dark text-inverse-danger">
																<span class="svg-icon svg-icon-primary svg-icon-3x">
																	<!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Home/Alarm-clock.svg--><svg
																		xmlns="http://www.w3.org/2000/svg"
																		xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
																		height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
																			fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<path
																				d="M7.14319965,19.3575259 C7.67122143,19.7615175 8.25104409,20.1012165 8.87097532,20.3649307 L7.89205065,22.0604779 C7.61590828,22.5387706 7.00431787,22.7026457 6.52602525,22.4265033 C6.04773263,22.150361 5.88385747,21.5387706 6.15999985,21.0604779 L7.14319965,19.3575259 Z M15.1367085,20.3616573 C15.756345,20.0972995 16.3358198,19.7569961 16.8634386,19.3524415 L17.8320512,21.0301278 C18.1081936,21.5084204 17.9443184,22.1200108 17.4660258,22.3961532 C16.9877332,22.6722956 16.3761428,22.5084204 16.1000004,22.0301278 L15.1367085,20.3616573 Z"
																				fill="#fff" />
																			<path
																				d="M12,21 C7.581722,21 4,17.418278 4,13 C4,8.581722 7.581722,5 12,5 C16.418278,5 20,8.581722 20,13 C20,17.418278 16.418278,21 12,21 Z M19.068812,3.25407593 L20.8181344,5.00339833 C21.4039208,5.58918477 21.4039208,6.53893224 20.8181344,7.12471868 C20.2323479,7.71050512 19.2826005,7.71050512 18.696814,7.12471868 L16.9474916,5.37539627 C16.3617052,4.78960984 16.3617052,3.83986237 16.9474916,3.25407593 C17.5332781,2.66828949 18.4830255,2.66828949 19.068812,3.25407593 Z M5.29862906,2.88207799 C5.8844155,2.29629155 6.83416297,2.29629155 7.41994941,2.88207799 C8.00573585,3.46786443 8.00573585,4.4176119 7.41994941,5.00339833 L5.29862906,7.12471868 C4.71284263,7.71050512 3.76309516,7.71050512 3.17730872,7.12471868 C2.59152228,6.53893224 2.59152228,5.58918477 3.17730872,5.00339833 L5.29862906,2.88207799 Z"
																				fill="#fff" />
																			<path
																				d="M11.9630156,7.5 L12.0475062,7.5 C12.3043819,7.5 12.5194647,7.69464724 12.5450248,7.95024814 L13,12.5 L16.2480695,14.3560397 C16.403857,14.4450611 16.5,14.6107328 16.5,14.7901613 L16.5,15 C16.5,15.2109164 16.3290185,15.3818979 16.1181021,15.3818979 C16.0841582,15.3818979 16.0503659,15.3773725 16.0176181,15.3684413 L11.3986612,14.1087258 C11.1672824,14.0456225 11.0132986,13.8271186 11.0316926,13.5879956 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z"
																				fill="#000" />
																		</g>
																	</svg>
																	<!--end::Svg Icon--></span></div>
														</div>
														<!--end::Image-->
														<!--begin::Title-->
														<div class="fs-5 fw-bolder mb-2">Reminders</div>
														<!--end::Title-->
													</a>
													<!--end::Name-->
													<!--begin::Description-->
													<div class="fs-7 fw-bold text-gray-400">Last Updated : 3 days ago</div>
													<!--end::Description-->
												</div>
												<!--end::Card body-->
		
												<span class="cstemed fs-1hx fw-bolder text-light-600 counted"
													data-kt-countup="true" data-kt-countup-value="30467"><span
														class="fs-6 text-light-700 fw-bolder">
														<span class="fs-6 text-light-700 fw-bolder">
															<span class="ms-n1" data-kt-countup="true"
																data-kt-countup-value="45">0</span></span></span></span>
											</div>
											<!--end::Card-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Navbar-->
									<!--begin::Basic info-->
									<div class="">
										<div class="row g-6 g-xl-9">
											<!--begin::Card header-->
											<!--begin::Content-->
											<div class="col-lg-6 col-xxl-4">
												<!--begin::Budget-->
												<div class="card h-100 cstmzed">
													<div class="card-body p-9">
														<div class="card-title">
															<h3 class="mb-5 text-gray-800">Staffs Enrollment <span>(12)</span>
															</h3>
														</div>
														<div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 320px">
															<table
																class="table table-flush align-middle table-row-bordered table-row-solid gy-4 gs-9">
																<!--begin::Thead-->
																<thead class="border-gray-200 fs-5 fw-bold bg-lighter">
																	<tr>
																		<th class="min-w-150px ps-9">Staffs</th>
																		<th class="min-w-150px ps-0 text-end">Nos</th>
																	</tr>
																</thead>
																<!--end::Thead-->
																<!--begin::Tbody-->
																<tbody class="fs-6 fw-bold text-gray-600">
																	<tr>
																		<td class="ps-9">Teaching Staff</td>
																		<td class="ps-0 text-end">200</td>
																	</tr>
																	<tr>
																		<td class="ps-9">Non-teaching Staff</td>
																		<td class="ps-0 text-end">100</td>
																	</tr>
																	<tr>
																		<td class="ps-9">Sanitary Staff</td>
																		<td class="ps-0 text-end">20</td>
																	</tr>
																	<tr>
																		<td class="ps-9">Cleaners</td>
																		<td class="ps-0 text-end">5</td>
																	</tr>
																	<tr>
																		<td class="ps-9">Drivers</td>
																		<td class="ps-0 text-end">30</td>
																	</tr>
																	<tr>
																		<td class="ps-9">Wardens</td>
																		<td class="ps-0 text-end">15</td>
																	</tr>
																	<tr>
																		<td class="ps-9">Watch Man</td>
																		<td class="ps-0 text-end">8</td>
																	</tr>
																	<tr>
																		<td class="ps-9">Pantry workers</td>
																		<td class="ps-0 text-end">7</td>
																	</tr>
																	<tr>
																		<td class="ps-9">Servants</td>
																		<td class="ps-0 text-end">18</td>
																	</tr>
																</tbody>
																<!--end::Tbody-->
															</table>
														</div>
													</div>
												</div>
												<!--end::Budget-->
											</div>
											<!--end::Content-->
											<!--begin::Content-->
											<div class="col-lg-6 col-xxl-4">
												<!--begin::Budget-->
												<div class="card h-100 cstmzed">
													<div class="card-body p-9">
														<div class="card-title">
															<h3 class="mb-5 text-gray-800">Staffs Birthday <span>(6)</span></h3>
														</div>
														<div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 320px">
															<table
																class="table table-flush align-middle table-row-bordered table-row-solid gy-4 gs-9">
																<!--begin::Thead-->
																<thead class="border-gray-200 fs-5 fw-bold bg-lighter">
																	<tr>
																		<th class="min-w-150px ps-9">Name</th>
																		<th class="min-w-150px ps-0 text-end">Date</th>
																	</tr>
																</thead>
																<!--end::Thead-->
																<!--begin::Tbody-->
																<tbody class="fs-6 fw-bold text-gray-600">
																	<tr>
																		<td>
																			<div class="d-flex text-start align-items-left">
																				<div class="symbol symbol-45px me-5">
																					<img src="../assets/media/avatars/300-1.jpg"
																						alt="">
																				</div>
																				<div
																					class="d-flex justify-content-middle flex-column">
																					<a href="#"
																						class="text-dark fw-bolder text-hover-primary fs-6">John</a>
																					<span
																						class="text-muted fw-bold text-muted d-block fs-7">Teaching
																						Staff</span>
																				</div>
																			</div>
																		</td>
																		<td class="ps-0 text-end">Nov 01, 1990</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex text-start align-items-left">
																				<div class="symbol symbol-45px me-5">
																					<img src="../assets/media/avatars/300-2.jpg"
																						alt="">
																				</div>
																				<div
																					class="d-flex justify-content-middle flex-column">
																					<a href="#"
																						class="text-dark fw-bolder text-hover-primary fs-6">Paul</a>
																					<span
																						class="text-muted fw-bold text-muted d-block fs-7">Non-Teaching
																						Staff</span>
																				</div>
																			</div>
																		</td>
																		<td class="ps-0 text-end">Nov 01, 1985</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex text-start align-items-left">
																				<div class="symbol symbol-45px me-5">
																					<img src="../assets/media/avatars/300-3.jpg"
																						alt="">
																				</div>
																				<div
																					class="d-flex justify-content-middle flex-column">
																					<a href="#"
																						class="text-dark fw-bolder text-hover-primary fs-6">Mani</a>
																					<span
																						class="text-muted fw-bold text-muted d-block fs-7">Driver</span>
																				</div>
																			</div>
																		</td>
																		<td class="ps-0 text-end">Nov 01, 1988</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex text-start align-items-left">
																				<div class="symbol symbol-45px me-5">
																					<img src="../assets/media/avatars/300-4.jpg"
																						alt="">
																				</div>
																				<div
																					class="d-flex justify-content-middle flex-column">
																					<a href="#"
																						class="text-dark fw-bolder text-hover-primary fs-6">Sam</a>
																					<span
																						class="text-muted fw-bold text-muted d-block fs-7">Teaching
																						Staff</span>
																				</div>
																			</div>
																		</td>
																		<td class="ps-0 text-end">Nov 01, 1981</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex text-start align-items-left">
																				<div class="symbol symbol-45px me-5">
																					<img src="../assets/media/avatars/300-5.jpg"
																						alt="">
																				</div>
																				<div
																					class="d-flex justify-content-middle flex-column">
																					<a href="#"
																						class="text-dark fw-bolder text-hover-primary fs-6">Mike</a>
																					<span
																						class="text-muted fw-bold text-muted d-block fs-7">Non-Teaching
																						Staff</span>
																				</div>
																			</div>
																		</td>
																		<td class="ps-0 text-end">Nov 01, 1983</td>
																	</tr>
																</tbody>
																<!--end::Tbody-->
															</table>
														</div>
													</div>
												</div>
												<!--end::Budget-->
											</div>
											<!--end::Content-->
											<!--begin::Content-->
											<div class="col-lg-6 col-xxl-4">
												<!--begin::Budget-->
												<div class="card h-100 cstmzed">
													<div class="card-body p-9">
														<div class="card-title">
															<h3 class="mb-5 text-gray-800">Staffs Anniversary</h3>
														</div>
														<div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 320px">
															<table
																class="table table-flush align-middle table-row-bordered table-row-solid gy-4 gs-9">
																<!--begin::Thead-->
																<thead class="border-gray-200 fs-5 fw-bold bg-lighter">
																	<tr>
																		<th class="min-w-150px ps-9">Name</th>
																		<th class="min-w-150px text-end">Date</th>
																	</tr>
																</thead>
																<!--end::Thead-->
																<!--begin::Tbody-->
																<tbody class="fs-6 fw-bold text-gray-600">
																	<tr>
																		<td>
																			<div class="d-flex text-start align-items-left">
																				<div class="symbol symbol-45px me-5">
																					<img src="../assets/media/avatars/300-6.jpg"
																						alt="">
																				</div>
																				<div
																					class="d-flex justify-content-middle flex-column">
																					<a href="#"
																						class="text-dark fw-bolder text-hover-primary fs-6">John</a>
																					<span
																						class="text-muted fw-bold text-muted d-block fs-7">Teaching
																						Staff</span>
																				</div>
																			</div>
																		</td>
																		<td class="ps-0 text-end">Nov 01, 1990</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex text-start align-items-left">
																				<div class="symbol symbol-45px me-5">
																					<img src="../assets/media/avatars/300-7.jpg"
																						alt="">
																				</div>
																				<div
																					class="d-flex justify-content-middle flex-column">
																					<a href="#"
																						class="text-dark fw-bolder text-hover-primary fs-6">Paul</a>
																					<span
																						class="text-muted fw-bold text-muted d-block fs-7">Non-Teaching
																						Staff</span>
																				</div>
																			</div>
																		</td>
																		<td class="ps-0 text-end">Nov 01, 1985</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex text-start align-items-left">
																				<div class="symbol symbol-45px me-5">
																					<img src="../assets/media/avatars/300-9.jpg"
																						alt="">
																				</div>
																				<div
																					class="d-flex justify-content-middle flex-column">
																					<a href="#"
																						class="text-dark fw-bolder text-hover-primary fs-6">Mani</a>
																					<span
																						class="text-muted fw-bold text-muted d-block fs-7">Driver</span>
																				</div>
																			</div>
																		</td>
																		<td class="ps-0 text-end">Nov 01, 1988</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex text-start align-items-left">
																				<div class="symbol symbol-45px me-5">
																					<img src="../assets/media/avatars/300-10.jpg"
																						alt="">
																				</div>
																				<div
																					class="d-flex justify-content-middle flex-column">
																					<a href="#"
																						class="text-dark fw-bolder text-hover-primary fs-6">Sam</a>
																					<span
																						class="text-muted fw-bold text-muted d-block fs-7">Teaching
																						Staff</span>
																				</div>
																			</div>
																		</td>
																		<td class="ps-0 text-end">Nov 01, 1981</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex text-start align-items-left">
																				<div class="symbol symbol-45px me-5">
																					<img src="../assets/media/avatars/300-11.jpg"
																						alt="">
																				</div>
																				<div
																					class="d-flex justify-content-middle flex-column">
																					<a href="#"
																						class="text-dark fw-bolder text-hover-primary fs-6">Mike</a>
																					<span
																						class="text-muted fw-bold text-muted d-block fs-7">Non-Teaching
																						Staff</span>
																				</div>
																			</div>
																		</td>
																		<td class="ps-0 text-end">Nov 01, 1983</td>
																	</tr>
																</tbody>
																<!--end::Tbody-->
															</table>
														</div>
													</div>
												</div>
												<!--end::Budget-->
											</div>
											<!--end::Content-->
											<!--begin::Content-->
											<div class="col-lg-6 col-xxl-4">
												<!--begin::Budget-->
												<div class="card h-100 cstmzed">
													<div class="card-body p-9">
														<div class="card-title">
															<h3 class="mb-5 text-gray-800">Staffs Retirement</h3>
														</div>
														<div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 320px">
															<table
																class="table table-flush align-middle table-row-bordered table-row-solid gy-4 gs-9">
																<!--begin::Thead-->
																<thead class="border-gray-200 fs-5 fw-bold bg-lighter">
																	<tr>
																		<th class="min-w-150px ps-9">Name</th>
																		<th class="min-w-150px text-end">Date</th>
																	</tr>
																</thead>
																<!--end::Thead-->
																<!--begin::Tbody-->
																<tbody class="fs-6 fw-bold text-gray-600">
																	<tr>
																		<td>
																			<div class="d-flex text-start align-items-left">
																				<div class="symbol symbol-45px me-5">
																					<img src="../assets/media/avatars/300-12.jpg"
																						alt="">
																				</div>
																				<div
																					class="d-flex justify-content-middle flex-column">
																					<a href="#"
																						class="text-dark fw-bolder text-hover-primary fs-6">John</a>
																					<span
																						class="text-muted fw-bold text-muted d-block fs-7">Teaching
																						Staff</span>
																				</div>
																			</div>
																		</td>
																		<td class="ps-0 text-end">Nov 01, 1990</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex text-start align-items-left">
																				<div class="symbol symbol-45px me-5">
																					<img src="../assets/media/avatars/300-13.jpg"
																						alt="">
																				</div>
																				<div
																					class="d-flex justify-content-middle flex-column">
																					<a href="#"
																						class="text-dark fw-bolder text-hover-primary fs-6">Paul</a>
																					<span
																						class="text-muted fw-bold text-muted d-block fs-7">Non-Teaching
																						Staff</span>
																				</div>
																			</div>
																		</td>
																		<td class="ps-0 text-end">Nov 01, 1985</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex text-start align-items-left">
																				<div class="symbol symbol-45px me-5">
																					<img src="../assets/media/avatars/300-14.jpg"
																						alt="">
																				</div>
																				<div
																					class="d-flex justify-content-middle flex-column">
																					<a href="#"
																						class="text-dark fw-bolder text-hover-primary fs-6">Mani</a>
																					<span
																						class="text-muted fw-bold text-muted d-block fs-7">Driver</span>
																				</div>
																			</div>
																		</td>
																		<td class="ps-0 text-end">Nov 01, 1988</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex text-start align-items-left">
																				<div class="symbol symbol-45px me-5">
																					<img src="../assets/media/avatars/300-16.jpg"
																						alt="">
																				</div>
																				<div
																					class="d-flex justify-content-middle flex-column">
																					<a href="#"
																						class="text-dark fw-bolder text-hover-primary fs-6">Sam</a>
																					<span
																						class="text-muted fw-bold text-muted d-block fs-7">Teaching
																						Staff</span>
																				</div>
																			</div>
																		</td>
																		<td class="ps-0 text-end">Nov 01, 1981</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex text-start align-items-left">
																				<div class="symbol symbol-45px me-5">
																					<img src="../assets/media/avatars/300-19.jpg"
																						alt="">
																				</div>
																				<div
																					class="d-flex justify-content-middle flex-column">
																					<a href="#"
																						class="text-dark fw-bolder text-hover-primary fs-6">Mike</a>
																					<span
																						class="text-muted fw-bold text-muted d-block fs-7">Non-Teaching
																						Staff</span>
																				</div>
																			</div>
																		</td>
																		<td class="ps-0 text-end">Nov 01, 1983</td>
																	</tr>
																</tbody>
																<!--end::Tbody-->
															</table>
														</div>
													</div>
												</div>
												<!--end::Budget-->
											</div>
											<!--end::Content-->
											<!--begin::Content-->
											<div class="col-lg-6 col-xxl-4">
												<!--begin::Budget-->
												<div class="card h-100 cstmzed">
													<div class="card-body p-9">
														<div class="card-title">
															<h3 class="mb-5 text-gray-800">Pending Approvals</h3>
														</div>
														<table
															class="table table-flush align-middle table-row-bordered table-row-solid gy-4 gs-9">
															<!--begin::Thead-->
															<thead class="border-gray-200 fs-5 fw-bold bg-lighter">
																<tr>
																	<th class="min-w-150px ps-9">Particulars</th>
																	<th class="min-w-150px text-end">Nos</th>
																</tr>
															</thead>
															<!--end::Thead-->
															<!--begin::Tbody-->
															<tbody class="fs-6 fw-bold text-gray-600">
																<tr>
																	<td class="ps-9">Pending Certificates for undergoing
																		qualifiers</td>
																	<td class="ps-0 text-end">10</td>
																</tr>
																<tr>
																	<td class="ps-9">Prohibition Period Allocation</td>
																	<td class="ps-0 text-end">5</td>
																</tr>
																<tr>
																	<td class="ps-9">Appointment Order list</td>
																	<td class="ps-0 text-end">8</td>
																</tr>
																<tr>
																	<td class="ps-9">Salary process</td>
																	<td class="ps-0 text-end">15</td>
																</tr>
															</tbody>
															<!--end::Tbody-->
														</table>
													</div>
												</div>
												<!--end::Budget-->
											</div>
											<!--end::Content-->
											<!--begin::Content-->
											<div class="col-lg-6 col-xxl-4">
												<!--begin::Budget-->
												<div class="card h-100 cstmzed">
													<div class="card-body p-9">
														<div class="card-title">
															<h3 class="mb-5 text-gray-800">List of Events</h3>
														</div>
														<table
															class="table table-flush align-middle table-row-bordered table-row-solid gy-4 gs-9">
															<!--begin::Thead-->
															<thead class="border-gray-200 fs-5 fw-bold bg-lighter">
																<tr>
																	<th class="min-w-150px ps-9">Event Name</th>
																	<th class="min-w-150px text-end">Date</th>
																</tr>
															</thead>
															<!--end::Thead-->
															<!--begin::Tbody-->
															<tbody class="fs-6 fw-bold text-gray-600">
																<tr>
																	<td class="ps-9">Event - 1</td>
																	<td class="ps-0 text-end">Oct 01, 2022</td>
																</tr>
																<tr>
																	<td class="ps-9">Event - 2</td>
																	<td class="ps-0 text-end">Nov 01, 2022</td>
																</tr>
																<tr>
																	<td class="ps-9">Event - 3</td>
																	<td class="ps-0 text-end">Dec 01, 2022</td>
																</tr>
																<tr>
																	<td class="ps-9">Event - 4</td>
																	<td class="ps-0 text-end">Dec 08, 2022</td>
																</tr>
																<tr>
																	<td class="ps-9">Event - 5</td>
																	<td class="ps-0 text-end">Dec 23, 2022</td>
																</tr>
															</tbody>
															<!--end::Tbody-->
														</table>
													</div>
												</div>
												<!--end::Budget-->
											</div>
											<!--end::Content-->
											<!--begin::Content-->
											<div class="col-lg-6 col-xxl-4">
												<!--begin::Chart widget 18-->
												<div class="card card-flush h-xl-100">
													<div
														class="card-body p-0 d-flex justify-content-between flex-column overflow-hidden">
														<!--begin::Hidden-->
														<div class="d-flex flex-stack flex-wrap flex-grow-1 px-9 pt-0 pb-3">
															<div class="me-2">
																<span
																	class="fw-bolder text-gray-800 d-block mb-5 fs-3">Institution
																	Wise Age Chart</span>
																<div class="d-flex flex-wrap px-0 mb-5">
																	<!--begin::Stat-->
																	<div class="rounded min-w-125px py-3 px-4 my-1 me-6"
																		style="border: 1px dashed rgba(0, 0, 0, 0.35)">
																		<!--begin::Number-->
																		<div class="d-flex align-items-center">
																			<div class="text-dark fs-2 fw-bolder"
																				data-kt-countup="true"
																				data-kt-countup-value="4368"
																				data-kt-countup-prefix="">0</div>
																		</div>
																		<!--end::Number-->
																		<!--begin::Label-->
																		<div class="fw-bold fs-6 text-dark opacity-50">
																			Amalarpavam Staffs</div>
																		<!--end::Label-->
																	</div>
																	<!--end::Stat-->
																	<!--begin::Stat-->
																	<div class="rounded min-w-125px py-3 px-4 my-1"
																		style="border: 1px dashed rgba(0, 0, 0, 0.35)">
																		<!--begin::Number-->
																		<div class="d-flex align-items-center">
																			<div class="text-dark fs-2 fw-bolder"
																				data-kt-countup="true"
																				data-kt-countup-value="120,000">0</div>
																		</div>
																		<!--end::Number-->
																		<!--begin::Label-->
																		<div class="fw-bold fs-6 text-dark opacity-50">Loudres
																			Marry Staffs</div>
																		<!--end::Label-->
																	</div>
																	<!--end::Stat-->
																</div>
															</div>
														</div>
														<!--end::Hidden-->
														<!--begin::Chart-->
														<div class="mixed-widget-10-chart" data-kt-color="primary"
															style="height: 175px"></div>
		
														<div class="fw-bolder fs-3 text-primary pb-9">
															<div class="d-flex align-items-center px-9">
																<!--begin::Item-->
																<div class="d-flex align-items-center me-6">
																	<!--begin::Bullet-->
																	<span
																		class="rounded-1 bg-primary me-2 h-10px w-10px"></span>
																	<!--end::Bullet-->
																	<!--begin::Label-->
																	<span
																		class="fw-semibold fs-6 text-gray-600">Amalarpavam</span>
																	<!--end::Label-->
																</div>
																<!--ed::Item-->
																<!--begin::Item-->
																<div class="d-flex align-items-center">
																	<!--begin::Bullet-->
																	<span
																		class="rounded-1 bg-gray-300 me-2 h-10px w-10px"></span>
																	<!--end::Bullet-->
																	<!--begin::Label-->
																	<span class="fw-semibold fs-6 text-gray-600">Loudres
																		Marry</span>
																	<!--end::Label-->
																</div>
																<!--ed::Item-->
															</div>
														</div>
														<!--end::Chart-->
													</div>
												</div>
												<!--end::Chart widget 18-->
											</div>
											<!--end::Content-->
											<div class="col-xxl-4">
												<!--begin::Chart widget 22-->
												<div class="card h-xl-100">
													<!--begin::Body-->
													<div class="card-body pb-3">
														<!--begin::Tab Content-->
														<div class="tab-content">
															<!--begin::Tap pane-->
															<div class="tab-pane fade show active"
																id="kt_chart_widgets_22_tab_content_1">
																<span class="fw-bolder text-gray-800 d-block mb-5 fs-3">Gender
																	Distribution Chart</span>
																<!--begin::Wrapper-->
																<div class="d-flex flex-wrap flex-md-nowrap">
																	<!--end::Items-->
																	<!--begin::Container-->
																	<div
																		class="d-flex justify-content-between flex-column w-550px w-md-750px mx-auto mx-md-0 pt-3 pb-10">
																		<!--begin::Chart-->
																		<div id="kt_chart_widgets_22_chart_1"
																			class="mx-auto mb-4"></div>
																		<!--end::Chart-->
																		<!--begin::Labels-->
																		<div
																			class="d-flex flex-column justify-content-center flex-row-fluid pe-11 mb-5">
																			<!--begin::Label-->
																			<div
																				class="d-flex fs-6 fw-bold align-items-center mb-3">
																				<div class="bullet bg-success me-3"></div>
																				<div class="text-gray-400">Male</div>
																				<div class="ms-auto fw-bolder text-gray-700">100
																				</div>
																			</div>
																			<!--end::Label-->
																			<!--begin::Label-->
																			<div
																				class="d-flex fs-6 fw-bold align-items-center mb-3">
																				<div class="bullet bg-primary me-3"></div>
																				<div class="text-gray-400">Female</div>
																				<div class="ms-auto fw-bolder text-gray-700">40
																				</div>
																			</div>
																			<!--end::Label-->
																			<!--begin::Label-->
																			<div class="d-flex fs-6 fw-bold align-items-center">
																				<div class="bullet bg-gray-300 me-3"></div>
																				<div class="text-gray-400">Transgenders</div>
																				<div class="ms-auto fw-bolder text-gray-700">15
																				</div>
																			</div>
																			<!--end::Label-->
																		</div>
																		<!--end::Labels-->
																	</div>
																	<!--end::Container-->
																</div>
																<!--end::Wrapper-->
															</div>
															<!--end::Tap pane-->
		
														</div>
														<!--end::Tab Content-->
													</div>
													<!--end: Card Body-->
												</div>
												<!--end::Chart widget 22-->
											</div>
											<!--end::Content-->
											<div class="col-lg-6 col-xxl-4">
												<!--begin::Card-->
												<div class="card h-100 cstmzed">
													<!--begin::Card body-->
													<div class="card-body p-9">
														<!--begin::Heading-->
														<span class="fw-bolder text-gray-800 d-block mb-5 fs-3">Monthly
															Graphical Report</span>
														<!--end::Heading-->
														<!--begin::Wrapper-->
														<!--begin::Chart-->
														<div class="d-flex flex-center me-9 mt-9 mb-5">
															<canvas id="kt_project_list_chart-3"
																style="display: block; box-sizing: border-box; height:200px; width: 200px;"
																width="200" height="200"></canvas>
														</div>
														<div class="d-flex flex-wrap">
		
															<!--end::Chart-->
															<!--begin::Labels-->
															<div
																class="d-flex flex-column justify-content-center flex-row-fluid pe-11 mb-5">
																<!--begin::Label-->
																<div class="d-flex fs-6 fw-bold align-items-center mb-3">
																	<div class="bullet bg-primary me-3"></div>
																	<div class="text-gray-400">Additions</div>
																	<div class="ms-auto fw-bolder text-gray-700">50</div>
																</div>
																<!--end::Label-->
																<!--begin::Label-->
																<div class="d-flex fs-6 fw-bold align-items-center mb-3">
																	<div class="bullet bg-success me-3"></div>
																	<div class="text-gray-400">Retirement</div>
																	<div class="ms-auto fw-bolder text-gray-700">10</div>
																</div>
																<!--end::Label-->
																<!--begin::Label-->
																<div class="d-flex fs-6 fw-bold align-items-center">
																	<div class="bullet bg-gray-300 me-3"></div>
																	<div class="text-gray-400">Resignations</div>
																	<div class="ms-auto fw-bolder text-gray-700">8</div>
																</div>
																<!--end::Label-->
															</div>
															<!--end::Labels-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Card body-->
												</div>
												<!--end::Card-->
											</div>
											<!--begin::Content-->
											<div class="col-lg-6 col-xxl-4">
												<!--begin::Budget-->
												<div class="card h-100 cstmzed">
													<div class="card-body p-9">
														<div class="card-title">
															<h3 class="mb-5 text-gray-800">Appointment status </h3>
														</div>
														<div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 320px">
															<table
																class="table table-flush align-middle table-row-bordered table-row-solid gy-4 gs-9">
																<!--begin::Thead-->
																<thead class="border-gray-200 fs-5 fw-bold bg-lighter">
																	<tr>
																		<th class="min-w-150px ps-9">Staffs</th>
																		<th class="min-w-150px ps-0 text-end">Nos</th>
																	</tr>
																</thead>
																<!--end::Thead-->
																<!--begin::Tbody-->
																<tbody class="fs-6 fw-bold text-gray-600">
																	<tr>
																		<td class="ps-9">Confirmed Staff</td>
																		<td class="ps-0 text-end">50</td>
																	</tr>
																	<tr>
																		<td class="ps-9">Probation Staff</td>
																		<td class="ps-0 text-end">30</td>
																	</tr>
																	<tr>
																		<td class="ps-9">Entry Level Staff</td>
																		<td class="ps-0 text-end">20</td>
																	</tr>
																	<tr>
																		<td class="ps-9">Temporary staff</td>
																		<td class="ps-0 text-end">10</td>
																	</tr>
																	<tr>
																		<td class="ps-9">Contract Staff</td>
																		<td class="ps-0 text-end">5</td>
																	</tr>
																</tbody>
																<!--end::Tbody-->
															</table>
														</div>
													</div>
												</div>
												<!--end::Budget-->
											</div>
											<!--end::Content-->
											<!--begin::Content-->
											<div class="col-lg-6 col-xxl-4">
												<!--begin::Budget-->
												<div class="card h-100 cstmzed">
													<div class="card-body p-9">
														<div class="card-title">
															<h3 class="mb-5 text-gray-800">Top 10 Leave Takers</h3>
														</div>
														<div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 320px">
															<table
																class="table table-flush align-middle table-row-bordered table-row-solid gy-4 gs-9">
																<!--begin::Thead-->
																<thead class="border-gray-200 fs-5 fw-bold bg-lighter">
																	<tr>
																		<th class="min-w-150px ps-9">Staffs</th>
																		<th class="min-w-150px ps-0 text-end">Nos</th>
																	</tr>
																</thead>
																<!--end::Thead-->
																<!--begin::Tbody-->
																<tbody class="fs-6 fw-bold text-gray-600">
																	<tr>
																		<td>
																			<div class="d-flex text-start align-items-left">
																				<div class="symbol symbol-45px me-5">
																					<img src="../assets/media/avatars/300-19.jpg"
																						alt="">
																				</div>
																				<div
																					class="d-flex justify-content-middle flex-column">
																					<a href="#"
																						class="text-dark fw-bolder text-hover-primary fs-6">John</a>
																					<span
																						class="text-muted fw-bold text-muted d-block fs-7">Teaching
																						Staff</span>
																				</div>
																			</div>
																		</td>
																		<td class="ps-0 text-end">50</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex text-start align-items-left">
																				<div class="symbol symbol-45px me-5">
																					<img src="../assets/media/avatars/300-20.jpg"
																						alt="">
																				</div>
																				<div
																					class="d-flex justify-content-middle flex-column">
																					<a href="#"
																						class="text-dark fw-bolder text-hover-primary fs-6">Paul</a>
																					<span
																						class="text-muted fw-bold text-muted d-block fs-7">Non-Teaching
																						Staff</span>
																				</div>
																			</div>
																		</td>
																		<td class="ps-0 text-end">40</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex text-start align-items-left">
																				<div class="symbol symbol-45px me-5">
																					<img src="../assets/media/avatars/300-21.jpg"
																						alt="">
																				</div>
																				<div
																					class="d-flex justify-content-middle flex-column">
																					<a href="#"
																						class="text-dark fw-bolder text-hover-primary fs-6">Mani</a>
																					<span
																						class="text-muted fw-bold text-muted d-block fs-7">Driver</span>
																				</div>
																			</div>
																		</td>
																		<td class="ps-0 text-end">35</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex text-start align-items-left">
																				<div class="symbol symbol-45px me-5">
																					<img src="../assets/media/avatars/300-23.jpg"
																						alt="">
																				</div>
																				<div
																					class="d-flex justify-content-middle flex-column">
																					<a href="#"
																						class="text-dark fw-bolder text-hover-primary fs-6">Sam</a>
																					<span
																						class="text-muted fw-bold text-muted d-block fs-7">Teaching
																						Staff</span>
																				</div>
																			</div>
																		</td>
																		<td class="ps-0 text-end">32</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="d-flex text-start align-items-left">
																				<div class="symbol symbol-45px me-5">
																					<img src="../assets/media/avatars/300-25.jpg"
																						alt="">
																				</div>
																				<div
																					class="d-flex justify-content-middle flex-column">
																					<a href="#"
																						class="text-dark fw-bolder text-hover-primary fs-6">Mike</a>
																					<span
																						class="text-muted fw-bold text-muted d-block fs-7">Non-Teaching
																						Staff</span>
																				</div>
																			</div>
																		</td>
																		<td class="ps-0 text-end">28</td>
																	</tr>
																</tbody>
																<!--end::Tbody-->
															</table>
														</div>
													</div>
												</div>
												<!--end::Budget-->
											</div>
											<!--end::Content-->
		
											<!--begin::Col-->
											<div class="col-lg-6 col-xxl-4">
												<!--begin::Chart widget 27-->
												<div class="card card-flush h-xl-100">
													<!--begin::Header-->
													<div class="card-header p-7">
														<!--begin::Statistics-->
														<div class="m-0">
															<!--begin::Heading-->
															<div class="card-title">
																<h3 class="mb-0 text-gray-800">Leave Categories </h3>
															</div>
															<!--end::Heading-->
														</div>
														<!--end::Statistics-->
		
													</div>
													<!--end::Header-->
													<!--begin::Body-->
													<div class="card-body pt-0 pb-1">
														<div id="kt_charts_widget_27" class="min-h-auto"></div>
													</div>
													<!--end::Body-->
												</div>
												<!--end::Chart widget 27-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-xxl-12">
												<!--begin::Chart widget 23-->
												<div class="card card-flush overflow-hidden h-md-100">
													<!--begin::Header-->
													<div class="card-header py-5">
														<!--begin::Title-->
														<h3 class="card-title align-items-start flex-column">
															<span class="card-label fw-bolder text-dark">Salary paid for the
																financial year</span>
														</h3>
														<!--end::Title-->
														<!--begin::Toolbar-->
														<div class="card-toolbar">
															<!--begin::Menu-->
															<button
																class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
																data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
																data-kt-menu-overflow="true">
																<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
																<span class="svg-icon svg-icon-1">
																	Select the Distribution
																</span>
																<!--end::Svg Icon-->
															</button>
															<!--begin::Menu 2-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
																data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-2">
																	<div
																		class="menu-content fs-6 text-dark fw-bolder px-3 py-4">
																		Select the Distribution </div>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu separator-->
																<div class="separator mb-3 opacity-75"></div>
																<!--end::Menu separator-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Gross pay</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">EPF</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">ESI</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Net Pay</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">HRA</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">DA</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu 2-->
															<!--end::Menu-->
														</div>
														<!--end::Toolbar-->
													</div>
													<!--end::Header-->
													<!--begin::Card body-->
													<div class="card-body pt-4">
														<!--begin::Chart-->
														<div id="kt_charts_widget_23" class="h-400px w-100"></div>
														<!--end::Chart-->
													</div>
													<!--end::Card body-->
												</div>
												<!--end::Chart widget 23-->
											</div>
											<!--end::Col-->
										</div>
									</div>
									<!--end::Basic info-->
		
								</div>
		
		
								<!--end::Container-->
							</div>
							<!--end::Post-->
						<!--end::Content-->
@endsection