@extends('layouts.layout')
@section('page-title','Master Settings');
@section('page-sub-title','Amalorpavam/Master Settings');
@section('main')
<div class="card card-xxl-stretch mb-5 mb-xl-10">
    <!--begin::Header-->
    <div class="card-header card-header-stretch">
        <!--begin::Title-->
        <div class="card-title">
            <h3 class="m-0 text-gray-900">Master Settings</h3>
        </div>
        <!--end::Title-->
        <!--begin::Toolbar-->
        <div class="card-toolbar">
            <ul class="nav nav-tabs nav-line-tabs nav-stretch border-transparent fs-5 fw-bolder" id="kt_security_summary_tabs">
                <li class="nav-item">
                    <a class="nav-link text-active-primary {{ request()->routeIs('master.index') ? 'active' : null }}" href="{{ route('master.index') }}" >
                        <i class="fa-solid fa-database me-2"></i>
                        Data Center
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-active-primary {{ request()->routeIs('master.users') ? 'active' : null }}"  href="{{ route('master.users') }}">
                        <i class="fa-solid fa-user-plus me-2"></i>
                        Users
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-active-primary {{ request()->routeIs('master.roles') ? 'active' : null }}" href="{{ route('master.roles') }}">
                        <i class="fa-solid fa-address-book me-2"></i>
                        Roles
                    </a>
                </li>
            </ul>
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body pt-7 pb-0 px-0">
        <!--begin::Tab content-->
        <div class="tab-content">
            @section('tab-content')                        
                @section('tab-content')
                <div class="row g-6 g-xl-9">
                    <!--begin::Card header-->
                    <!--begin::Content-->
                    <div class="col-lg-6 col-xxl-4">
                        <!--begin::Budget-->
                        <div class="card h-100 cstmzed">
                            <div class="card-head p-9" style="padding-bottom:10px !important;">

                                <div class="card-title">
                                    <h4 class="mb-5 text-gray-800">Nature Of Employment 
                                    </h4>
                                    {{-- <button  class="btn p-2 btn-xs btn-primary d-flex align-items-center justify-content-center">
                                        <i class="fa-solid fa-plus" style="font-size:15px"></i>
                                    </button> --}}
                                </div>
                                <div class="hover-scroll-overlay-y pe-6 me-n6"  >
                                   <div class="w-100 btn-group">
                                    <input type="text" class="form-control" id="column-inp">
                                    <button class="btn btn-primary" id="plus-btn">
                                        <i class="fa-solid fa-plus" style="font-size:15px"></i>
                                    </button>
                                   </div>
                                </div>
                            </div>
                            <div class="card-body hover-scroll-overlay-y" style="padding-top:0 !important;height:300px;">
                                <table class="table table-flush align-middle table-row-bordered table-row-solid gy-4 gs-6">
                                    <tbody class="fs-6 fw-bold text-gray-600">
                                        <tr>
                                            <td class="ps-3">Teaching Staff</td>
                                            <td class="px-0 text-end d-flex justify-content-end pe-2">
                                                <i class="fa-regular fa-pen-to-square p-2 "></i>
                                                <i class="fa-solid fa-trash p-2 text-danger"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3">Non-teaching Staff</td>
                                            <td class="px-0 text-end d-flex justify-content-end pe-2">
                                                <i class="fa-regular fa-pen-to-square p-2 "></i>
                                                <i class="fa-solid fa-trash p-2 text-danger"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-3">Sanitary Staff</td>
                                            <td class="px-0 text-end d-flex justify-content-end pe-2">
                                                <i class="fa-regular fa-pen-to-square p-2 "></i>
                                                <i class="fa-solid fa-trash p-2 text-danger"></i>
                                            </td>                                    </tr>
                                        <tr>
                                            <td class="ps-3">Cleaners</td>
                                            <td class="px-0 text-end d-flex justify-content-end pe-2">
                                                <i class="fa-regular fa-pen-to-square p-2 "></i>
                                                <i class="fa-solid fa-trash p-2 text-danger"></i>
                                            </td>                                    </tr>
                                        <tr>
                                            <td class="ps-3">Drivers</td>
                                            <td class="px-0 text-end d-flex justify-content-end pe-2">
                                                <i class="fa-regular fa-pen-to-square p-2 "></i>
                                                <i class="fa-solid fa-trash p-2 text-danger"></i>
                                            </td>                                       </tr>
                                        <tr>
                                            <td class="ps-3">Wardens</td>
                                            <td class="px-0 text-end d-flex justify-content-end pe-2">
                                                <i class="fa-regular fa-pen-to-square p-2 "></i>
                                                <i class="fa-solid fa-trash p-2 text-danger"></i>
                                            </td>                                      </tr>
                                        <tr>
                                            <td class="ps-3">Watch Man</td>
                                            <td class="px-0 text-end d-flex justify-content-end pe-2">
                                                <i class="fa-regular fa-pen-to-square p-2 "></i>
                                                <i class="fa-solid fa-trash p-2 text-danger"></i>
                                            </td>                                     </tr>
                                        <tr>
                                            <td class="ps-3">Pantry workers</td>
                                            <td class="px-0 text-end d-flex justify-content-end pe-2">
                                                <i class="fa-regular fa-pen-to-square p-2 "></i>
                                                <i class="fa-solid fa-trash p-2 text-danger"></i>
                                            </td>                                </tr>
                                        <tr>
                                            <td class="ps-3">Servants</td>
                                            <td class="px-0 text-end d-flex justify-content-end pe-2">
                                                <i class="fa-regular fa-pen-to-square p-2 "></i>
                                                <i class="fa-solid fa-trash p-2 text-danger"></i>
                                            </td>                              
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end::Budget-->
                    </div>
                    
                    @foreach($masterTables as $masterName => $val )
                        <b>{{ $masterName }}</b>
                        <ul>
                            @foreach($masterTables[$masterName] as  $value)
                                <li>{{ $value['name'] ?? "" }}</li>
                            @endforeach
                        </ul>
                    @endforeach
                    <!--end::Content-->
                    <!--begin::Content-->
                </div>
                @endsection
                {{-- <p>kljhkj</p> --}}
            @show
        </div>
        <!--end::Tab content-->
    </div>
    <!--end::Body-->
</div>
@endsection
@push('styles'){
    <style>
        #plus-btn{
            padding:10px ;
        }
        #column-inp{
            padding:5px;
        }
        #pointer{
            cursor:pointer;
        }
    </style>
}