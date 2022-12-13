@extends('layouts.layout')
@section('main')
    @include('pages.staffs.organs.user-info')
    <div class="card">
        <div class="card-body">
            <div class="stepper stepper-links d-flex flex-column pt-0" id="kt_create_account_stepper">
                @include('pages.staffs.organs.toolbar')
            @section('wizard')
                <form class="mx-auto w-100 pt-5 pb-10" novalidate="novalidate" id="kt_create_account_form">

                    <!--begin::Step 1-->
                    <div class="current" data-kt-stepper-element="content">
                        <!--begin::Wrapper-->
                        <div class="w-100">
                            <!--begin::Heading-->
                            <div class="pb-5 pb-lg-5">
                                <!--begin::Title-->
                                <h2 class="fw-bolder text-dark">Personal Details</h2>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <div class="fv-row  row">

                                <!--begin::Input group-->
                                <div class="col-lg-4 mb-5 rd-only">
                                    <!--begin::Label-->
                                    <label class="form-label">Employee Code</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input name="business_name" class="form-control form-control-lg form-control-solid"
                                        value="AEWSYYYY00000" readonly />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="col-lg-4 mb-5">
                                    <!--begin::Label-->
                                    <label class="form-label required">Institution Name</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select name="account_name" class="form-select form-select-lg form-select-solid"
                                        data-control="select2" data-placeholder="Select Type" data-allow-clear="true"
                                        data-hide-search="true">
                                        <option></option>
                                        <option value="1">Amalarpavam</option>
                                        <option value="1">Amalarpavam CBSE</option>
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="col-lg-4 mb-5 rd-only">
                                    <!--begin::Label-->
                                    <label class="form-label">Institution Code</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input name="business_name" class="form-control form-control-lg form-control-solid"
                                        value="AHSSYYYY0000" readonly />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="col-lg-4 mb-5">
                                    <!--begin::Label-->
                                    <label class="form-label">Name (In English)</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input name="business_name" class="form-control form-control-lg form-control-solid" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="col-lg-4 mb-5 use-latha">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center form-label">
                                        <span class="">Name (In Tamil)</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover"
                                            data-bs-trigger="hover" data-bs-html="true"
                                            data-bs-content="&lt;div class='d-flex flex-stack text-dark fw-bolder'&gt; &lt;div&gt;Please Type in Tamil&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack text-muted'&gt;"></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input name="content" id="content"
                                        class="form-control form-control-lg form-control-solid tamil" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="col-lg-4 mb-5">
                                    <!--begin::Label-->
                                    <label class="form-label">Short Name</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input name="business_name" class="form-control form-control-lg form-control-solid" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="col-lg-4 mb-5">
                                    <!--begin::Label-->
                                    <label class="form-label required">Class Handling</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select id="choices-multiple-remove-button" class="form-control big_box" placeholder=""
                                        multiple>
                                        <option value="1"> I</option>
                                        <option value="2">II</option>
                                        <option value="3">III</option>
                                        <option value="4">IV</option>
                                        <option value="5">V</option>
                                        <option value="6">VI</option>
                                        <option value="7">VII</option>
                                        <option value="8">VIII</option>
                                        <option value="9">IX</option>
                                        <option value="10">X</option>
                                        <option value="11">XI</option>
                                        <option value="12">XII</option>
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="col-lg-4 mb-5">
                                    <!--begin::Label-->
                                    <label class="form-label">Division</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select name="business_type" class="form-select form-select-lg form-select-solid"
                                        data-control="select2" data-placeholder="Select Type" data-allow-clear="true"
                                        data-hide-search="true">
                                        <option></option>
                                        <option value="1">Division - 1</option>
                                        <option value="1">Division - 2</option>
                                        <option value="1">Division - 3</option>
                                        <option value="1">Division - 4</option>
                                        <option value="1">Division - 5</option>
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="col-lg-4 mb-5">
                                    <!--begin::Label-->
                                    <label class="form-label required">Reporting Manager</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select name="rep-manage" class="form-select form-select-lg form-select-solid"
                                        data-control="select2" data-placeholder="Select Type" data-allow-clear="true"
                                        data-hide-search="true">
                                        <option></option>
                                        <option value="1">Manager - 1</option>
                                        <option value="1">Manager - 2</option>
                                        <option value="1">Manager - 3</option>
                                        <option value="1">Manager - 4</option>
                                        <option value="1">Manager - 5</option>
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-5">
                                    <!--begin::Col-->
                                    <div class="col-md-12 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-bold form-label mb-2">Aadhaar Card</label>
                                        <!--end::Label-->
                                        <!--begin::Row-->
                                        <div class="row fv-row">
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <input name="business_email"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Name" />
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <input name="business_email"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Number" />
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label text-lg-right">Upload
                                                        File:</label>
                                                    <div class="col-lg-6">
                                                        <div class="uppy" id="kt_uppy_5">
                                                            <div class="uppy-wrapper">
                                                                <div class="uppy-Root uppy-FileInput-container"><input
                                                                        class="uppy-FileInput-input uppy-input-control"
                                                                        style="" type="file" name="files[]"
                                                                        multiple="" id="kt_uppy_5_input_control"><label
                                                                        class="uppy-input-label btn btn-light-primary btn-sm btn-bold"
                                                                        for="kt_uppy_5_input_control">Attach files</label>
                                                                </div><span class="form-text text-dark">Maximum file size
                                                                    1MB</span>
                                                            </div>
                                                            <div class="uppy-list"></div>
                                                            <div class="uppy-status">
                                                                <div class="uppy-Root uppy-StatusBar is-waiting"
                                                                    aria-hidden="true" dir="ltr">
                                                                    <div class="uppy-StatusBar-progress"
                                                                        style="width: 0%;" role="progressbar"
                                                                        aria-valuemin="0" aria-valuemax="100"
                                                                        aria-valuenow="0"></div>
                                                                    <div class="uppy-StatusBar-actions"></div>
                                                                </div>
                                                            </div>
                                                            <div class="uppy-informer uppy-informer-min">
                                                                <div class="uppy uppy-Informer" aria-hidden="true">
                                                                    <p role="alert"> </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-5">
                                    <!--begin::Col-->
                                    <div class="col-md-12 fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mb-2">Pan Card</label>
                                        <!--end::Label-->
                                        <!--begin::Row-->
                                        <div class="row fv-row">
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <input name="business_email"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Name" />
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <input name="business_email"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Number" />
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label text-lg-right">Upload
                                                        File:</label>
                                                    <div class="col-lg-6">
                                                        <div class="uppy" id="kt_uppy_5">
                                                            <div class="uppy-wrapper">
                                                                <div class="uppy-Root uppy-FileInput-container"><input
                                                                        class="uppy-FileInput-input uppy-input-control"
                                                                        style="" type="file" name="files[]"
                                                                        multiple="" id="kt_uppy_5_input_control"><label
                                                                        class="uppy-input-label btn btn-light-primary btn-sm btn-bold"
                                                                        for="kt_uppy_5_input_control">Attach files</label>
                                                                </div><span class="form-text text-dark">Maximum file size
                                                                    1MB</span>
                                                            </div>
                                                            <div class="uppy-list"></div>
                                                            <div class="uppy-status">
                                                                <div class="uppy-Root uppy-StatusBar is-waiting"
                                                                    aria-hidden="true" dir="ltr">
                                                                    <div class="uppy-StatusBar-progress
                                                                             "
                                                                        style="width: 0%;" role="progressbar"
                                                                        aria-valuemin="0" aria-valuemax="100"
                                                                        aria-valuenow="0"></div>
                                                                    <div class="uppy-StatusBar-actions"></div>
                                                                </div>
                                                            </div>
                                                            <div class="uppy-informer uppy-informer-min">
                                                                <div class="uppy uppy-Informer" aria-hidden="true">
                                                                    <p role="alert"> </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-5">
                                    <!--begin::Col-->
                                    <div class="col-md-12 fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mb-2">Ration Card</label>
                                        <!--end::Label-->
                                        <!--begin::Row-->
                                        <div class="row fv-row">
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <input name="business_email"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Name" />
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <input name="business_email"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Number" />
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label text-lg-right">Upload
                                                        File:</label>
                                                    <div class="col-lg-6">
                                                        <div class="uppy" id="kt_uppy_5">
                                                            <div class="uppy-wrapper">
                                                                <div class="uppy-Root uppy-FileInput-container"><input
                                                                        class="uppy-FileInput-input uppy-input-control"
                                                                        style="" type="file" name="files[]"
                                                                        multiple="" id="kt_uppy_5_input_control"><label
                                                                        class="uppy-input-label btn btn-light-primary btn-sm btn-bold"
                                                                        for="kt_uppy_5_input_control">Attach files</label>
                                                                </div><span class="form-text text-dark">Maximum file size
                                                                    1MB</span>
                                                            </div>
                                                            <div class="uppy-list"></div>
                                                            <div class="uppy-status">
                                                                <div class="uppy-Root uppy-StatusBar is-waiting"
                                                                    aria-hidden="true" dir="ltr">
                                                                    <div class="uppy-StatusBar-progress"
                                                                        style="width: 0%;" role="progressbar"
                                                                        aria-valuemin="0" aria-valuemax="100"
                                                                        aria-valuenow="0"></div>
                                                                    <div class="uppy-StatusBar-actions"></div>
                                                                </div>
                                                            </div>
                                                            <div class="uppy-informer uppy-informer-min">
                                                                <div class="uppy uppy-Informer" aria-hidden="true">
                                                                    <p role="alert"> </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-5">
                                    <!--begin::Col-->
                                    <div class="col-md-12 fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mb-2">Driving Licence</label>
                                        <!--end::Label-->
                                        <!--begin::Row-->
                                        <div class="row fv-row">
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <input name="business_email"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Name" />
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <input name="business_email"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Number" />
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label text-lg-right">Upload
                                                        File:</label>
                                                    <div class="col-lg-6">
                                                        <div class="uppy" id="kt_uppy_5">
                                                            <div class="uppy-wrapper">
                                                                <div class="uppy-Root uppy-FileInput-container"><input
                                                                        class="uppy-FileInput-input uppy-input-control"
                                                                        style="" type="file" name="files[]"
                                                                        multiple="" id="kt_uppy_5_input_control"><label
                                                                        class="uppy-input-label btn btn-light-primary btn-sm btn-bold"
                                                                        for="kt_uppy_5_input_control">Attach files</label>
                                                                </div><span class="form-text text-dark">Maximum file size
                                                                    1MB</span>
                                                            </div>
                                                            <div class="uppy-list"></div>
                                                            <div class="uppy-status">
                                                                <div class="uppy-Root uppy-StatusBar is-waiting"
                                                                    aria-hidden="true" dir="ltr">
                                                                    <div class="uppy-StatusBar-progress"
                                                                        style="width: 0%;" role="progressbar"
                                                                        aria-valuemin="0" aria-valuemax="100"
                                                                        aria-valuenow="0"></div>
                                                                    <div class="uppy-StatusBar-actions"></div>
                                                                </div>
                                                            </div>
                                                            <div class="uppy-informer uppy-informer-min">
                                                                <div class="uppy uppy-Informer" aria-hidden="true">
                                                                    <p role="alert"> </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-5">
                                    <!--begin::Col-->
                                    <div class="col-md-12 fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mb-2">Voter ID</label>
                                        <!--end::Label-->
                                        <!--begin::Row-->
                                        <div class="row fv-row">
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <input name="business_email"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Name" />
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <input name="business_email"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Number" />
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label text-lg-right">Upload
                                                        File:</label>
                                                    <div class="col-lg-6">
                                                        <div class="uppy" id="kt_uppy_5">
                                                            <div class="uppy-wrapper">
                                                                <div class="uppy-Root uppy-FileInput-container"><input
                                                                        class="uppy-FileInput-input uppy-input-control"
                                                                        style="" type="file" name="files[]"
                                                                        multiple="" id="kt_uppy_5_input_control"><label
                                                                        class="uppy-input-label btn btn-light-primary btn-sm btn-bold"
                                                                        for="kt_uppy_5_input_control">Attach files</label>
                                                                </div><span class="form-text text-dark">Maximum file size
                                                                    1MB</span>
                                                            </div>
                                                            <div class="uppy-list"></div>
                                                            <div class="uppy-status">
                                                                <div class="uppy-Root uppy-StatusBar is-waiting"
                                                                    aria-hidden="true" dir="ltr">
                                                                    <div class="uppy-StatusBar-progress"
                                                                        style="width: 0%;" role="progressbar"
                                                                        aria-valuemin="0" aria-valuemax="100"
                                                                        aria-valuenow="0"></div>
                                                                    <div class="uppy-StatusBar-actions"></div>
                                                                </div>
                                                            </div>
                                                            <div class="uppy-informer uppy-informer-min">
                                                                <div class="uppy uppy-Informer" aria-hidden="true">
                                                                    <p role="alert"> </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-5">
                                    <!--begin::Col-->
                                    <div class="col-md-12 fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mb-2">Passport</label>
                                        <!--end::Label-->
                                        <!--begin::Row-->
                                        <div class="row fv-row">
                                            <!--begin::Col-->
                                            <div class="col-3">
                                                <input name="business_email"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Passport Name" />
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-3">
                                                <input name="business_email"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Passport Number" />
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-3">
                                                <input name="business_email"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Valid Upto" />
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-3">
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label text-lg-right">Upload
                                                        File:</label>
                                                    <div class="col-lg-6">
                                                        <div class="uppy" id="kt_uppy_5">
                                                            <div class="uppy-wrapper">
                                                                <div class="uppy-Root uppy-FileInput-container"><input
                                                                        class="uppy-FileInput-input uppy-input-control"
                                                                        style="" type="file" name="files[]"
                                                                        multiple="" id="kt_uppy_5_input_control"><label
                                                                        class="uppy-input-label btn btn-light-primary btn-sm btn-bold"
                                                                        for="kt_uppy_5_input_control">Attach files</label>
                                                                </div><span class="form-text text-dark">Maximum file size
                                                                    1MB</span>
                                                            </div>
                                                            <div class="uppy-list"></div>
                                                            <div class="uppy-status">
                                                                <div class="uppy-Root uppy-StatusBar is-waiting"
                                                                    aria-hidden="true" dir="ltr">
                                                                    <div class="uppy-StatusBar-progress"
                                                                        style="width: 0%;" role="progressbar"
                                                                        aria-valuemin="0" aria-valuemax="100"
                                                                        aria-valuenow="0"></div>
                                                                    <div class="uppy-StatusBar-actions"></div>
                                                                </div>
                                                            </div>
                                                            <div class="uppy-informer uppy-informer-min">
                                                                <div class="uppy uppy-Informer" aria-hidden="true">
                                                                    <p role="alert"> </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                            </div>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Step 1-->

                    <!--begin::Step 2-->
                    <div data-kt-stepper-element="content">
                        <!--begin::Wrapper-->
                        <div class="w-100">
                            <!--begin::Heading-->
                            <div class="pb-5 pb-lg-5">
                                <!--begin::Title-->
                                <h2 class="fw-bolder text-dark">KYC Details</h2>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <div class="row">
                                <div class="col-md-4 fv-row mb-5">
                                    <label class="required fs-6 fw-bold mb-2">Date of Birth</label>
                                    <!--begin::Input-->
                                    <div class="position-relative d-flex align-items-center">
                                        <!--begin::Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                        <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--end::Icon-->
                                        <!--begin::Datepicker-->
                                        <input class="form-control form-control-solid ps-12" placeholder="Select a date"
                                            name="due_date" />
                                        <!--end::Datepicker-->
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--begin::Input group-->
                                <div class="mb-5 col-lg-4 fv-row">
                                    <!--begin::Wrapper-->
                                    <div class="d-inline-block flex-stack">

                                        <!--begin::Checkboxes-->
                                        <!--begin::Label-->
                                        <div class="fw-bold me-5">
                                            <label class="fs-6">Gender</label>
                                        </div>
                                        <!--end::Label-->
                                        <div class="d-block mt-5 align-items-center cstm-zeed">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-10">
                                                <input class="form-check-input h-20px w-20px" type="radio"
                                                    name="communication[]" value="Male" />
                                                <span class="form-check-label fw-bold">Male</span>
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-10">
                                                <input class="form-check-input h-20px w-20px" type="radio"
                                                    name="communication[]" value="Female" />
                                                <span class="form-check-label fw-bold">Female</span>
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input h-20px w-20px" type="radio"
                                                    name="communication[]" value="Others" />
                                                <span class="form-check-label fw-bold">Others</span>
                                            </label>
                                            <!--end::Checkbox-->
                                        </div>
                                        <!--end::Checkboxes-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Input group-->
                                <div class="col-md-4 fv-row mb-5">
                                    <label class="required fs-6 fw-bold mb-2">Date of Joining</label>
                                    <!--begin::Input-->
                                    <div class="position-relative d-flex align-items-center">
                                        <!--begin::Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                        <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--end::Icon-->
                                        <!--begin::Datepicker-->
                                        <input class="form-control form-control-solid ps-12" placeholder="Select a date"
                                            name="due_date" />
                                        <!--end::Datepicker-->
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--begin::Input group-->
                                <div class="col-lg-4 mb-5">
                                    <!--begin::Label-->
                                    <label class="form-label required">Marital Status</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select name="marr_type" class="form-select form-select-lg form-select-solid"
                                        data-control="select2" data-placeholder="Select Type" data-allow-clear="true"
                                        data-hide-search="true">
                                        <option></option>
                                        <option value="1">Married</option>
                                        <option value="1">Single</option>
                                        <option value="1">Divorced</option>
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <div class="col-md-4 fv-row mb-5">
                                    <label class="fs-6 fw-bold mb-2">Marriage Date</label>
                                    <!--begin::Input-->
                                    <div class="position-relative d-flex align-items-center">
                                        <!--begin::Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                        <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--end::Icon-->
                                        <!--begin::Datepicker-->
                                        <input class="form-control form-control-solid ps-12" placeholder="Select a date"
                                            name="due_date" />
                                        <!--end::Datepicker-->
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--begin::Input group-->
                                <div class="col-lg-4 mb-5">
                                    <!--begin::Label-->
                                    <label class="form-label required">Mother Tongue</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input name="business_name" class="form-control form-control-lg form-control-solid" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="col-lg-4 mb-5">
                                    <!--begin::Label-->
                                    <label class="form-label required">Place of Birth</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input name="business_name" class="form-control form-control-lg form-control-solid" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="col-lg-4 mb-5">
                                    <!--begin::Label-->
                                    <label class="form-label required">Nationality </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input name="business_name" class="form-control form-control-lg form-control-solid" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="col-lg-4 mb-5">
                                    <!--begin::Label-->
                                    <label class="form-label required">Religion</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select name="business_type" class="form-select form-select-lg form-select-solid"
                                        data-control="select2" data-placeholder="Select Type" data-allow-clear="true"
                                        data-hide-search="true">
                                        <option></option>
                                        <option value="1">Christian</option>
                                        <option value="1">Muslims</option>
                                        <option value="1">Hindu</option>
                                        <option value="1">Sikhs</option>
                                        <option value="1">Buddhists</option>
                                        <option value="1">Jains</option>
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="col-lg-4 mb-5">
                                    <!--begin::Label-->
                                    <label class="form-label required">Caste</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select name="business_type" class="form-select form-select-lg form-select-solid"
                                        data-control="select2" data-placeholder="Select Type" data-allow-clear="true"
                                        data-hide-search="true">
                                        <option></option>
                                        <option value="1">Caste - 1</option>
                                        <option value="1">Caste - 2</option>
                                        <option value="1">Caste - 3</option>
                                        <option value="1">Caste - 4</option>
                                        <option value="1">Caste - 5</option>
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="col-lg-4 mb-5">
                                    <!--begin::Label-->
                                    <label class="form-label required">Community</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select name="business_type" class="form-select form-select-lg form-select-solid"
                                        data-control="select2" data-placeholder="Select Type" data-allow-clear="true"
                                        data-hide-search="true">
                                        <option></option>
                                        <option value="1">Community - 1</option>
                                        <option value="1">Community - 2</option>
                                        <option value="1">Community - 3</option>
                                        <option value="1">Community - 4</option>
                                        <option value="1">Community - 5</option>
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="col-lg-4 mb-5">
                                    <!--begin::Label-->
                                    <label class="form-label required">Email Id</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input name="business_name" class="form-control form-control-lg form-control-solid" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="col-lg-4 mb-5">
                                    <!--begin::Label-->
                                    <label class="form-label required">Phone No.</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input name="business_name" class="form-control form-control-lg form-control-solid" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="col-lg-4 mb-5">
                                    <!--begin::Label-->
                                    <label class="form-label required">Mobile No - 1</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input name="business_name" class="form-control form-control-lg form-control-solid" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="col-lg-4 mb-5">
                                    <!--begin::Label-->
                                    <label class="form-label required">Mobile No - 2</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input name="business_name" class="form-control form-control-lg form-control-solid" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="col-lg-4 mb-5">
                                    <!--begin::Label-->
                                    <label class="form-label required">Whatsapp No.</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input name="business_name" class="form-control form-control-lg form-control-solid" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="col-lg-4 mb-5">
                                    <!--begin::Label-->
                                    <label class="form-label required">Emergency No.</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input name="business_name" class="form-control form-control-lg form-control-solid" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="col-lg-6 mb-5">
                                    <!--end::Label-->
                                    <label class="form-label">Contact Address</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <textarea name="business_description" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="col-lg-6 mb-5">
                                    <!--end::Label-->
                                    <label class="form-label">Permanent Address</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <textarea name="business_description" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row mb-5">
                                    <!--begin::Col-->
                                    <div class="col-md-12 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-bold form-label mb-2">Bank Details</label>
                                        <!--end::Label-->
                                        <!--begin::Row-->
                                        <div class="row fv-row">
                                            <!--begin::Col-->
                                            <div class="col-3">
                                                <input name="business_email"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Bank Name" />
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-3">
                                                <input name="business_email"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Branch Name" />
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-3">
                                                <input name="business_email"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="IFSC Code" />
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-3">
                                                <input name="business_email"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Account Number" />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row mb-5">
                                    <!--begin::Col-->
                                    <div class="col-md-4 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-bold form-label mb-2">Bank Passbook</label>
                                        <!--end::Label-->
                                        <!--begin::Row-->
                                        <div class="row fv-row">
                                            <!--begin::Col-->
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label text-lg-right">Upload
                                                        File:</label>
                                                    <div class="col-lg-6">
                                                        <div class="uppy" id="kt_uppy_5">
                                                            <div class="uppy-wrapper">
                                                                <div class="uppy-Root uppy-FileInput-container"><input
                                                                        class="uppy-FileInput-input uppy-input-control"
                                                                        style="" type="file" name="files[]"
                                                                        multiple="" id="kt_uppy_5_input_control"><label
                                                                        class="uppy-input-label btn btn-light-primary btn-sm btn-bold"
                                                                        for="kt_uppy_5_input_control">Attach files</label>
                                                                </div><span class="form-text text-dark">Maximum file size
                                                                    1MB</span>
                                                            </div>
                                                            <div class="uppy-list"></div>
                                                            <div class="uppy-status">
                                                                <div class="uppy-Root uppy-StatusBar is-waiting"
                                                                    aria-hidden="true" dir="ltr">
                                                                    <div class="uppy-StatusBar-progress"
                                                                        style="width: 0%;" role="progressbar"
                                                                        aria-valuemin="0" aria-valuemax="100"
                                                                        aria-valuenow="0"></div>
                                                                    <div class="uppy-StatusBar-actions"></div>
                                                                </div>
                                                            </div>
                                                            <div class="uppy-informer uppy-informer-min">
                                                                <div class="uppy uppy-Informer" aria-hidden="true">
                                                                    <p role="alert"> </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-4 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-bold form-label mb-2">Canceled Cheque</label>
                                        <!--end::Label-->
                                        <!--begin::Row-->
                                        <div class="row fv-row">
                                            <!--begin::Col-->
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label text-lg-right">Upload
                                                        File:</label>
                                                    <div class="col-lg-6">
                                                        <div class="uppy" id="kt_uppy_5">
                                                            <div class="uppy-wrapper">
                                                                <div class="uppy-Root uppy-FileInput-container"><input
                                                                        class="uppy-FileInput-input uppy-input-control"
                                                                        style="" type="file" name="files[]"
                                                                        multiple="" id="kt_uppy_5_input_control"><label
                                                                        class="uppy-input-label btn btn-light-primary btn-sm btn-bold"
                                                                        for="kt_uppy_5_input_control">Attach files</label>
                                                                </div><span class="form-text text-dark">Maximum file size
                                                                    1MB</span>
                                                            </div>
                                                            <div class="uppy-list"></div>
                                                            <div class="uppy-status">
                                                                <div class="uppy-Root uppy-StatusBar is-waiting"
                                                                    aria-hidden="true" dir="ltr">
                                                                    <div class="uppy-StatusBar-progress"
                                                                        style="width: 0%;" role="progressbar"
                                                                        aria-valuemin="0" aria-valuemax="100"
                                                                        aria-valuenow="0"></div>
                                                                    <div class="uppy-StatusBar-actions"></div>
                                                                </div>
                                                            </div>
                                                            <div class="uppy-informer uppy-informer-min">
                                                                <div class="uppy uppy-Informer" aria-hidden="true">
                                                                    <p role="alert"> </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-10">
                                    <!--begin::Col-->
                                    <div class="col-md-12 mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                            <span class="">UAN Details</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Row-->
                                        <div class="row fv-row">
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <input name="business_email"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Number" />
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <input name="business_email"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Start Date" />
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-4">
                                                <input name="business_email"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Area" />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-12 fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mb-2">ESI</label>
                                        <!--end::Label-->
                                        <!--begin::Row-->
                                        <div class="row fv-row">
                                            <!--begin::Col-->
                                            <div class="col-3">
                                                <input name="business_email"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Number" />
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-3">
                                                <input name="business_email"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Start  Date" />
                                            </div>
                                            <!--end::Col-->
                                            <div class="col-3">
                                                <input name="business_email"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="End Date" />
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-3">
                                                <input name="business_email"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Area" />
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--begin::Input group-->
                                <div class="col-lg-4 mb-5 d-none">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label required">Contact Email</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input name="business_email" class="form-control form-control-lg form-control-solid"
                                        value="corp@support.com" />
                                    <!--end::Input-->
                                </div>
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Step 2-->


                    <!--begin::Step 3-->
                    <div data-kt-stepper-element="content">
                        <!--begin::Wrapper-->
                        <div class="w-100">
                            <!--begin::Heading-->
                            <div class="pb-5 pb-lg-5">
                                <!--begin::Title-->
                                <h2 class="fw-bolder text-dark">Employee Details</h2>
                                <!--end::Title-->
                            </div>

                            <!--end::Heading-->

                            <div class="row">
                                <!--begin::Input group-->
                                <div class="col-lg-4 mb-5">
                                    <!--begin::Label-->
                                    <label class="form-label required">Designation</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select name="business_type" class="form-select form-select-lg form-select-solid"
                                        data-control="select2" data-placeholder="Select Type" data-allow-clear="true"
                                        data-hide-search="true">
                                        <option></option>
                                        <option value="1">Designation - 1</option>
                                        <option value="1">Designation - 2</option>
                                        <option value="1">Designation - 3</option>
                                        <option value="1">Designation - 4</option>
                                        <option value="1">Designation - 5</option>
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="col-lg-4 mb-5">
                                    <!--begin::Label-->
                                    <label class="form-label required">Department</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select name="business_type" class="form-select form-select-lg form-select-solid"
                                        data-control="select2" data-placeholder="Select Type" data-allow-clear="true"
                                        data-hide-search="true">
                                        <option></option>
                                        <option value="1">Department - 1</option>
                                        <option value="1">Department - 2</option>
                                        <option value="1">Department - 3</option>
                                        <option value="1">Department - 4</option>
                                        <option value="1">Department - 5</option>
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="col-lg-4 mb-5">
                                    <!--begin::Label-->
                                    <label class="form-label required">Subject</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select name="business_type" class="form-select form-select-lg form-select-solid"
                                        data-control="select2" data-placeholder="Select Type" data-allow-clear="true"
                                        data-hide-search="true">
                                        <option></option>
                                        <option value="1">Subject - 1</option>
                                        <option value="1">Subject - 2</option>
                                        <option value="1">Subject - 3</option>
                                        <option value="1">Subject - 4</option>
                                        <option value="1">Subject - 5</option>
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="col-lg-4 mb-5">
                                    <!--begin::Label-->
                                    <label class="form-label required">Attendance Scheme</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select name="business_type" class="form-select form-select-lg form-select-solid"
                                        data-control="select2" data-placeholder="Select Type" data-allow-clear="true"
                                        data-hide-search="true">
                                        <option></option>
                                        <option value="1">Scheme - 1</option>
                                        <option value="1">Scheme - 2</option>
                                        <option value="1">Scheme - 3</option>
                                        <option value="1">Scheme - 4</option>
                                        <option value="1">Scheme - 5</option>
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--end::Tables Widget 13-->
                                <hr class="bg-lt-clr mt-3">
                                </hr>
                                <!--begin::Tables Widget 13-->
                                <div class="card mb-0 mb-xl-0 wdth-40percent">
                                    <!--begin::Header-->
                                    <div class="card-header border-0 pt-0">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder fs-3 mb-1">Subject studied upto </span>
                                        </h3>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body py-0">
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table
                                                class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="fw-bolder text-muted">
                                                        <th class="min-w-50px">Subjects</th>
                                                        <th class="min-w-140px">Below X</th>
                                                        <th class="min-w-120px">XI</th>
                                                        <th class="min-w-120px">XII</th>
                                                        <th class="min-w-120px">UG</th>
                                                        <th class="min-w-120px">PG</th>
                                                        <th class="min-w-120px">Higher</th>
                                                        <th class="min-w-120px">NO</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr>
                                                        <td class="text-dark fw-bolder text-hover-primary fs-6">English
                                                        </td>

                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-13-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-13-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-13-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-13-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-13-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-13-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-13-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-dark fw-bolder text-hover-primary fs-6">Tamil</td>

                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-13-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-13-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-13-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-13-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-13-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-13-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-13-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-dark fw-bolder text-hover-primary fs-6">Social</td>

                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-13-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-13-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-13-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-13-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-13-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-13-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-13-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-dark fw-bolder text-hover-primary fs-6">Science
                                                        </td>

                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-13-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-13-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-13-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-13-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-13-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-13-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-13-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-dark fw-bolder text-hover-primary fs-6">Maths</td>

                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-13-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-13-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-13-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-13-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-13-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-13-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-13-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>

                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table container-->
                                    </div>
                                    <!--begin::Body-->
                                </div>



                                <!--begin::Tables Widget 13-->
                                <div class="tble-fnton mt-5 card mb-5 mb-xl-8">
                                    <!--begin::Header-->
                                    <div class="card-header border-0 pt-0">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder fs-3 mb-1">Invigilation Duty Details</span>
                                        </h3>

                                        <button id="kt_new_data_toggle_duty"
                                            class="engage-demos-toggle btn btn-flex h-35px bg-body btn-color-gray-700 btn-active-color-gray-900 shadow-sm fs-6 px-4 rounded-top-0 mt-5"
                                            title="Click Here to add More" data-bs-toggle="tooltip"
                                            data-bs-placement="left" data-bs-dismiss="click" data-bs-trigger="hover">
                                            <span id="kt_engage_demos_label"><span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="11.364" y="20.364"
                                                            width="16" height="2" rx="1"
                                                            transform="rotate(-90 11.364 20.364)" fill="currentColor">
                                                        </rect>
                                                        <rect x="4.36396" y="11.364" width="16"
                                                            height="2" rx="1" fill="currentColor"></rect>
                                                    </svg>
                                                </span> Add New</span>
                                        </button>
                                        <!--begin::Help drawer-->
                                        <div id="kt_help" class="bg-body" data-kt-drawer="true"
                                            data-kt-drawer-name="help" data-kt-drawer-activate="true"
                                            data-kt-drawer-overlay="true"
                                            data-kt-drawer-width="{default:'350px', 'md': '725px'}"
                                            data-kt-drawer-direction="end"
                                            data-kt-drawer-toggle="#kt_new_data_toggle_duty"
                                            data-kt-drawer-close="#kt_help_close">
                                            <!--begin::Card-->
                                            <div class="card shadow-none rounded-0 w-100">
                                                <!--begin::Header-->
                                                <div class="card-header" id="kt_help_header">
                                                    <h5 class="card-title fw-bold text-gray-600">Add your Duty Details</h5>
                                                    <div class="card-toolbar">
                                                        <button type="button"
                                                            class="btn btn-sm btn-icon explore-btn-dismiss me-n5"
                                                            id="kt_help_close">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                            <span class="svg-icon svg-icon-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.5" x="6" y="17.3137"
                                                                        width="16" height="2" rx="1"
                                                                        transform="rotate(-45 6 17.3137)"
                                                                        fill="currentColor" />
                                                                    <rect x="7.41422" y="6" width="16"
                                                                        height="2" rx="1"
                                                                        transform="rotate(45 7.41422 6)"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </button>
                                                    </div>
                                                </div>
                                                <!--end::Header-->

                                                <!--begin::Body-->
                                                <div class="card-body p-5" id="kt_help_body">
                                                    <div class="row">

                                                        <!--begin::Input group-->
                                                        <div class="col-lg-6 mb-5">
                                                            <!--begin::Label-->
                                                            <label class="form-label required">Class</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <select name="business_type"
                                                                class="form-select form-select-lg form-select-solid"
                                                                data-control="select2" data-placeholder="Select Type"
                                                                data-allow-clear="true" data-hide-search="true">
                                                                <option></option>
                                                                <option value="1">SSLC</option>
                                                                <option value="1">HSC + 1</option>
                                                                <option value="1">HSC + 2</option>
                                                            </select>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="col-lg-6 mb-5">
                                                            <!--begin::Label-->
                                                            <label class="form-label required">Type of Duty</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <select name="business_type"
                                                                class="form-select form-select-lg form-select-solid"
                                                                data-control="select2" data-placeholder="Select Type"
                                                                data-allow-clear="true" data-hide-search="true">
                                                                <option></option>
                                                                <option value="1">Theory</option>
                                                                <option value="1">Practical</option>
                                                                <option value="1">Paper Valuation</option>
                                                                <option value="1">Others</option>
                                                            </select>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="col-lg-6 mb-5">
                                                            <!--begin::Label-->
                                                            <label class="form-label required"> Name of the School</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input name="business_name"
                                                                class="form-control form-control-lg form-control-solid" />
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="col-lg-6 mb-5">
                                                            <!--begin::Label-->
                                                            <label class="form-label required"> Place</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input name="business_name"
                                                                class="form-control form-control-lg form-control-solid" />
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="col-lg-6 mb-5">
                                                            <label class="required fs-6 fw-bold mb-2">From</label>
                                                            <!--begin::Input-->
                                                            <div class="position-relative d-flex align-items-center">
                                                                <!--begin::Icon-->
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3"
                                                                            d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                                <!--end::Icon-->
                                                                <!--begin::Datepicker-->
                                                                <input class="form-control form-control-solid ps-12"
                                                                    placeholder="Select a date" name="due_date" />
                                                                <!--end::Datepicker-->
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="col-lg-6 mb-5">
                                                            <label class="required fs-6 fw-bold mb-2">To</label>
                                                            <!--begin::Input-->
                                                            <div class="position-relative d-flex align-items-center">
                                                                <!--begin::Icon-->
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3"
                                                                            d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                                <!--end::Icon-->
                                                                <!--begin::Datepicker-->
                                                                <input class="form-control form-control-solid ps-12"
                                                                    placeholder="Select a date" name="due_date" />
                                                                <!--end::Datepicker-->
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--begin::Input group-->
                                                        <div class="col-lg-6 mb-5">
                                                            <!--begin::Label-->
                                                            <label class="form-label required">Facility </label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input name="business_name"
                                                                class="form-control form-control-lg form-control-solid" />
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <div class="d-flex flex-stack pt-5">
                                                            <!--begin::Wrapper-->
                                                            <div>
                                                                <button type="button"
                                                                    class="btn btn-lg btn-primary me-3 d-inline-block"
                                                                    data-kt-stepper-action="submit">
                                                                    <span class="indicator-label">Add
                                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                        <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <rect opacity="0.5" x="18"
                                                                                    y="13" width="13"
                                                                                    height="2" rx="1"
                                                                                    transform="rotate(-180 18 13)"
                                                                                    fill="currentColor"></rect>
                                                                                <path
                                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                    <span class="indicator-progress">Please wait...
                                                                        <span
                                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                                </button>
                                                            </div>
                                                            <!--end::Wrapper-->
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end::Help drawer-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body py-3">
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table
                                                class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="fw-bolder text-muted">
                                                        <th class="min-w-50px">Sl.No</th>
                                                        <th class="min-w-140px">Class</th>
                                                        <th class="min-w-120px">Type of Duty</th>
                                                        <th class="min-w-120px">Name of the School</th>
                                                        <th class="min-w-120px">Place</th>
                                                        <th class="min-w-120px">From Date</th>
                                                        <th class="min-w-100px">To Date</th>
                                                        <th class="min-w-100px">Facility</th>
                                                        <th class="min-w-100px text-end">Actions</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary fs-6">1</a>
                                                        </td>
                                                        <td class="text-dark fw-bolder text-hover-primary fs-6">Brazil
                                                        </td>
                                                        <td class="text-dark fw-bolder text-hover-primary fs-6">Anna
                                                            University</td>
                                                        <td class="text-dark fw-bolder text-hover-primary fs-6">2022</td>
                                                        <td class="text-dark fw-bolder text-hover-primary fs-6">Tamil</td>
                                                        <td class="text-dark fw-bolder text-hover-primary fs-6">English
                                                        </td>
                                                        <td class="text-dark fw-bolder text-hover-primary fs-6">15/05/2013
                                                        </td>
                                                        <td class="text-dark fw-bolder text-hover-primary fs-6">15/05/2022
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                                <span class="svg-icon svg-icon-3">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3"
                                                                            d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </a>
                                                            <a href="#"
                                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                                <span class="svg-icon svg-icon-3">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none">
                                                                        <path
                                                                            d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                            fill="currentColor" />
                                                                        <path opacity="0.5"
                                                                            d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                            fill="currentColor" />
                                                                        <path opacity="0.5"
                                                                            d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table container-->
                                    </div>
                                    <!--begin::Body-->
                                </div>
                                <!--end::Tables Widget 13-->



                                <!--begin::Tables Widget 13-->
                                <div class="tble-fnton mt-5 card mb-5 mb-xl-8">
                                    <!--begin::Header-->
                                    <div class="card-header border-0 pt-0">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder fs-3 mb-1">Training Details</span>
                                        </h3>

                                        <button id="kt_new_data_toggle_train"
                                            class="engage-demos-toggle btn btn-flex h-35px bg-body btn-color-gray-700 btn-active-color-gray-900 shadow-sm fs-6 px-4 rounded-top-0 mt-5"
                                            title="Click Here to add More" data-bs-toggle="tooltip"
                                            data-bs-placement="left" data-bs-dismiss="click" data-bs-trigger="hover">
                                            <span id="kt_engage_demos_label"><span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="11.364" y="20.364"
                                                            width="16" height="2" rx="1"
                                                            transform="rotate(-90 11.364 20.364)" fill="currentColor">
                                                        </rect>
                                                        <rect x="4.36396" y="11.364" width="16"
                                                            height="2" rx="1" fill="currentColor"></rect>
                                                    </svg>
                                                </span> Add New</span>
                                        </button>
                                        <!--begin::Help drawer-->
                                        <div id="kt_help" class="bg-body" data-kt-drawer="true"
                                            data-kt-drawer-name="help" data-kt-drawer-activate="true"
                                            data-kt-drawer-overlay="true"
                                            data-kt-drawer-width="{default:'350px', 'md': '725px'}"
                                            data-kt-drawer-direction="end"
                                            data-kt-drawer-toggle="#kt_new_data_toggle_train"
                                            data-kt-drawer-close="#kt_help_close">
                                            <!--begin::Card-->
                                            <div class="card shadow-none rounded-0 w-100">
                                                <!--begin::Header-->
                                                <div class="card-header" id="kt_help_header">
                                                    <h5 class="card-title fw-bold text-gray-600">Add your Training Details
                                                    </h5>
                                                    <div class="card-toolbar">
                                                        <button type="button"
                                                            class="btn btn-sm btn-icon explore-btn-dismiss me-n5"
                                                            id="kt_help_close">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                            <span class="svg-icon svg-icon-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.5" x="6" y="17.3137"
                                                                        width="16" height="2" rx="1"
                                                                        transform="rotate(-45 6 17.3137)"
                                                                        fill="currentColor" />
                                                                    <rect x="7.41422" y="6" width="16"
                                                                        height="2" rx="1"
                                                                        transform="rotate(45 7.41422 6)"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </button>
                                                    </div>
                                                </div>
                                                <!--end::Header-->

                                                <!--begin::Body-->
                                                <div class="card-body p-5" id="kt_help_body">
                                                    <div class="row">

                                                        <!--begin::Input group-->
                                                        <div class="col-lg-6 mb-5">
                                                            <label class="required fs-6 fw-bold mb-2">From</label>
                                                            <!--begin::Input-->
                                                            <div class="position-relative d-flex align-items-center">
                                                                <!--begin::Icon-->
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3"
                                                                            d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                                <!--end::Icon-->
                                                                <!--begin::Datepicker-->
                                                                <input class="form-control form-control-solid ps-12"
                                                                    placeholder="Select a date" name="due_date" />
                                                                <!--end::Datepicker-->
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="col-lg-6 mb-5">
                                                            <label class="required fs-6 fw-bold mb-2">To</label>
                                                            <!--begin::Input-->
                                                            <div class="position-relative d-flex align-items-center">
                                                                <!--begin::Icon-->
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3"
                                                                            d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                                <!--end::Icon-->
                                                                <!--begin::Datepicker-->
                                                                <input class="form-control form-control-solid ps-12"
                                                                    placeholder="Select a date" name="due_date" />
                                                                <!--end::Datepicker-->
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--begin::Input group-->
                                                        <div class="col-lg-6 mb-5">
                                                            <!--begin::Label-->
                                                            <label class="form-label required"> Name of the
                                                                Trainer</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input name="business_name"
                                                                class="form-control form-control-lg form-control-solid" />
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="col-lg-6 mb-5">
                                                            <!--begin::Label-->
                                                            <label class="form-label required"> Topic of the
                                                                Training</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input name="business_name"
                                                                class="form-control form-control-lg form-control-solid" />
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="col-lg-6 mb-5">
                                                            <!--begin::Label-->
                                                            <label class="form-label required">Remarks </label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input name="business_name"
                                                                class="form-control form-control-lg form-control-solid" />
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <div class="d-flex flex-stack pt-5">
                                                            <!--begin::Wrapper-->
                                                            <div>
                                                                <button type="button"
                                                                    class="btn btn-lg btn-primary me-3 d-inline-block"
                                                                    data-kt-stepper-action="submit">
                                                                    <span class="indicator-label">Add
                                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                        <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <rect opacity="0.5" x="18"
                                                                                    y="13" width="13"
                                                                                    height="2" rx="1"
                                                                                    transform="rotate(-180 18 13)"
                                                                                    fill="currentColor"></rect>
                                                                                <path
                                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                    <span class="indicator-progress">Please wait...
                                                                        <span
                                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                                </button>
                                                            </div>
                                                            <!--end::Wrapper-->
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end::Help drawer-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body py-3">
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table
                                                class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="fw-bolder text-muted">
                                                        <th class="min-w-50px">Sl.No</th>
                                                        <th class="min-w-140px">Date From</th>
                                                        <th class="min-w-120px">Date to</th>
                                                        <th class="min-w-120px">Name of the Trainer</th>
                                                        <th class="min-w-120px">Topic</th>
                                                        <th class="min-w-120px">Remarks</th>
                                                        <th class="min-w-100px text-end">Actions</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bolder text-hover-primary fs-6">1</a>
                                                        </td>
                                                        <td class="text-dark fw-bolder text-hover-primary fs-6">Brazil
                                                        </td>
                                                        <td class="text-dark fw-bolder text-hover-primary fs-6">Anna
                                                            University</td>
                                                        <td class="text-dark fw-bolder text-hover-primary fs-6">2022</td>
                                                        <td class="text-dark fw-bolder text-hover-primary fs-6">Tamil</td>
                                                        <td class="text-dark fw-bolder text-hover-primary fs-6">English
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#"
                                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                                <span class="svg-icon svg-icon-3">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none">
                                                                        <path opacity="0.3"
                                                                            d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </a>
                                                            <a href="#"
                                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                                <span class="svg-icon svg-icon-3">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none">
                                                                        <path
                                                                            d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                            fill="currentColor" />
                                                                        <path opacity="0.5"
                                                                            d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                            fill="currentColor" />
                                                                        <path opacity="0.5"
                                                                            d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table container-->
                                    </div>
                                    <!--begin::Body-->
                                </div>
                                <!--end::Tables Widget 13-->


                                <!--end::Tables Widget 13-->
                                <!--begin::Input group-->
                                <div class="col-lg-4 mb-5 d-none">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label required">Contact Email</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input name="business_email" class="form-control form-control-lg form-control-solid"
                                        value="corp@support.com" />
                                    <!--end::Input-->
                                </div>
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Step 3-->


                    <!--begin::Step 4-->
                    <div data-kt-stepper-element="content">
                        <!--begin::Wrapper-->
                        <div class="w-100">
                            <!--begin::Heading-->
                            <div class="pb-5 pb-lg-5">
                                <!--begin::Title-->
                                <h2 class="fw-bolder text-dark">Education Details</h2>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Tables Widget 13-->
                            <div class="tble-fnton card mb-5 mb-xl-8">
                                <!--begin::Header-->
                                <div class="card-header border-0 pt-0">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bolder fs-3 mb-1">Completed / Under going</span>
                                    </h3>

                                    <button id="kt_new_data_toggle_educate"
                                        class="engage-demos-toggle btn btn-flex h-35px bg-body btn-color-gray-700 btn-active-color-gray-900 shadow-sm fs-6 px-4 rounded-top-0 mt-5"
                                        title="Click Here to add More" data-bs-toggle="tooltip"
                                        data-bs-placement="left" data-bs-dismiss="click" data-bs-trigger="hover">
                                        <span id="kt_engage_demos_label"><span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="11.364" y="20.364"
                                                        width="16" height="2" rx="1"
                                                        transform="rotate(-90 11.364 20.364)" fill="currentColor">
                                                    </rect>
                                                    <rect x="4.36396" y="11.364" width="16"
                                                        height="2" rx="1" fill="currentColor"></rect>
                                                </svg>
                                            </span> Add New</span>
                                    </button>
                                    <!--begin::Help drawer-->
                                    <div id="kt_help" class="bg-body" data-kt-drawer="true"
                                        data-kt-drawer-name="help" data-kt-drawer-activate="true"
                                        data-kt-drawer-overlay="true"
                                        data-kt-drawer-width="{default:'350px', 'md': '725px'}"
                                        data-kt-drawer-direction="end"
                                        data-kt-drawer-toggle="#kt_new_data_toggle_educate"
                                        data-kt-drawer-close="#kt_help_close">
                                        <!--begin::Card-->
                                        <div class="card shadow-none rounded-0 w-100">
                                            <!--begin::Header-->
                                            <div class="card-header" id="kt_help_header">
                                                <h5 class="card-title fw-bold text-gray-600">Add your Education Details
                                                </h5>
                                                <div class="card-toolbar">
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon explore-btn-dismiss me-n5"
                                                        id="kt_help_close">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="6" y="17.3137"
                                                                    width="16" height="2" rx="1"
                                                                    transform="rotate(-45 6 17.3137)"
                                                                    fill="currentColor" />
                                                                <rect x="7.41422" y="6" width="16"
                                                                    height="2" rx="1"
                                                                    transform="rotate(45 7.41422 6)"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                </div>
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Body-->
                                            <div class="card-body p-5" id="kt_help_body">
                                                <div class="row">

                                                    <!--begin::Input group-->
                                                    <div class="col-lg-6 mb-5">
                                                        <!--begin::Label-->
                                                        <label class="form-label required">Course Completed</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <select name="business_type"
                                                            class="form-select form-select-lg form-select-solid"
                                                            data-control="select2" data-placeholder="Select Type"
                                                            data-allow-clear="true" data-hide-search="true">
                                                            <option></option>
                                                            <option value="1">1990</option>
                                                            <option value="1">1991</option>
                                                            <option value="1">1992</option>
                                                            <option value="1">1993</option>
                                                            <option value="1">1994</option>
                                                        </select>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="col-lg-6 mb-5">
                                                        <!--begin::Label-->
                                                        <label class="form-label required">Board/University</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input name="business_name"
                                                            class="form-control form-control-lg form-control-solid" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="col-lg-6 mb-5">
                                                        <!--begin::Label-->
                                                        <label class="form-label required">Year of Completion</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <select name="business_type"
                                                            class="form-select form-select-lg form-select-solid"
                                                            data-control="select2" data-placeholder="Select Type"
                                                            data-allow-clear="true" data-hide-search="true">
                                                            <option></option>
                                                            <option value="1">1990</option>
                                                            <option value="1">1991</option>
                                                            <option value="1">1992</option>
                                                            <option value="1">1993</option>
                                                            <option value="1">1994</option>
                                                        </select>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="col-lg-6 mb-5">
                                                        <!--begin::Label-->
                                                        <label class="form-label required">Main Subject</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <select name="business_type"
                                                            class="form-select form-select-lg form-select-solid"
                                                            data-control="select2" data-placeholder="Select Type"
                                                            data-allow-clear="true" data-hide-search="true">
                                                            <option></option>
                                                            <option value="1">English</option>
                                                            <option value="1">Tamil</option>
                                                            <option value="1">Social</option>
                                                            <option value="1">Maths</option>
                                                            <option value="1">Science</option>
                                                        </select>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="col-lg-6 mb-5">
                                                        <!--begin::Label-->
                                                        <label class="form-label required">Ancillary Subject</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <select name="business_type"
                                                            class="form-select form-select-lg form-select-solid"
                                                            data-control="select2" data-placeholder="Select Type"
                                                            data-allow-clear="true" data-hide-search="true">
                                                            <option></option>
                                                            <option value="1">English</option>
                                                            <option value="1">Tamil</option>
                                                            <option value="1">Social</option>
                                                            <option value="1">Maths</option>
                                                            <option value="1">Science</option>
                                                        </select>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="col-lg-6 mb-5">
                                                        <!--begin::Label-->
                                                        <label class="form-label required">Certificate No</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input name="business_name"
                                                            class="form-control form-control-lg form-control-solid" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="col-lg-6 mb-5">
                                                        <label class="required fs-6 fw-bold mb-2">Submitted Date</label>
                                                        <!--begin::Input-->
                                                        <div class="position-relative d-flex align-items-center">
                                                            <!--begin::Icon-->
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3"
                                                                        d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                                                        fill="currentColor" />
                                                                    <path
                                                                        d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                                                        fill="currentColor" />
                                                                    <path
                                                                        d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                            <!--end::Icon-->
                                                            <!--begin::Datepicker-->
                                                            <input class="form-control form-control-solid ps-12"
                                                                placeholder="Select a date" name="due_date" />
                                                            <!--end::Datepicker-->
                                                        </div>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Input group-->
                                                    <div class="col-lg-6 mb-5">
                                                        <!--begin::Label-->
                                                        <label class="form-label required">Type</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <select name="business_type"
                                                            class="form-select form-select-lg form-select-solid"
                                                            data-control="select2" data-placeholder="Select Type"
                                                            data-allow-clear="true" data-hide-search="true">
                                                            <option></option>
                                                            <option value="1">Academic</option>
                                                            <option value="1">Professional</option>
                                                        </select>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Input group-->
                                                    <div class="col-lg-6 mb-5">
                                                        <div class="form-group row">
                                                            <label class="col-lg-12 col-form-label text-lg-right">Upload
                                                                File:</label>
                                                            <div class="col-lg-12">
                                                                <div class="uppy" id="kt_uppy_5">
                                                                    <div class="uppy-wrapper">
                                                                        <div class="uppy-Root uppy-FileInput-container">
                                                                            <input
                                                                                class="uppy-FileInput-input uppy-input-control"
                                                                                style="" type="file"
                                                                                name="files[]" multiple=""
                                                                                id="kt_uppy_5_input_control"><label
                                                                                class="uppy-input-label btn btn-light-primary btn-sm btn-bold"
                                                                                for="kt_uppy_5_input_control">Attach
                                                                                files</label></div><span
                                                                            class="form-text text-dark">Maximum file size
                                                                            1MB</span>
                                                                    </div>
                                                                    <div class="uppy-list"></div>
                                                                    <div class="uppy-status">
                                                                        <div class="uppy-Root uppy-StatusBar is-waiting"
                                                                            aria-hidden="true" dir="ltr">
                                                                            <div class="uppy-StatusBar-progress"
                                                                                style="width: 0%;" role="progressbar"
                                                                                aria-valuemin="0" aria-valuemax="100"
                                                                                aria-valuenow="0"></div>
                                                                            <div class="uppy-StatusBar-actions"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uppy-informer uppy-informer-min">
                                                                        <div class="uppy uppy-Informer"
                                                                            aria-hidden="true">
                                                                            <p role="alert"> </p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <div class="d-flex flex-stack pt-5">
                                                        <!--begin::Wrapper-->
                                                        <div>
                                                            <button type="button"
                                                                class="btn btn-lg btn-primary me-3 d-inline-block"
                                                                data-kt-stepper-action="submit">
                                                                <span class="indicator-label">Add
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                    <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.5" x="18"
                                                                                y="13" width="13"
                                                                                height="2" rx="1"
                                                                                transform="rotate(-180 18 13)"
                                                                                fill="currentColor"></rect>
                                                                            <path
                                                                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                fill="currentColor"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                                <span class="indicator-progress">Please wait...
                                                                    <span
                                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                            </button>
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                </div>

                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Help drawer-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body py-3">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="fw-bolder text-muted">
                                                    <th class="min-w-50px">Sl.No</th>
                                                    <th class="min-w-140px">Course Completed</th>
                                                    <th class="min-w-120px">Board/University</th>
                                                    <th class="min-w-120px">Year of Completion</th>
                                                    <th class="min-w-120px">Main Subject</th>
                                                    <th class="min-w-120px">Ancillary Subject</th>
                                                    <th class="min-w-100px">Submitted Date</th>
                                                    <th class="min-w-100px">Type</th>
                                                    <th class="min-w-100px">View File</th>
                                                    <th class="min-w-100px text-end">Actions</th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="#"
                                                            class="text-dark fw-bolder text-hover-primary fs-6">1</a>
                                                    </td>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">Brazil</td>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">Anna
                                                        University</td>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">2022</td>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">Tamil</td>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">English</td>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">15/05/2013
                                                    </td>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">Professional
                                                    </td>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6"><a
                                                            href=""> Download File </a></td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3"
                                                                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                        fill="currentColor" />
                                                                    <path
                                                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path
                                                                        d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                        fill="currentColor" />
                                                                    <path opacity="0.5"
                                                                        d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                        fill="currentColor" />
                                                                    <path opacity="0.5"
                                                                        d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table container-->
                                </div>
                                <!--begin::Body-->
                            </div>
                            <!--end::Tables Widget 13-->
                            <hr class="bg-lt-clr">
                            </hr>
                            <!--begin::Tables Widget 13-->
                            <div class="card mb-0 mb-xl-0 wdth-30percent">
                                <!--begin::Header-->
                                <div class="card-header border-0 pt-0">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bolder fs-3 mb-1">Languages Known</span>
                                    </h3>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body py-0">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="fw-bolder text-muted">
                                                    <th class="min-w-50px">Languages</th>
                                                    <th class="min-w-140px">Read</th>
                                                    <th class="min-w-120px">Write</th>
                                                    <th class="min-w-120px">Speak</th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">Tamil</td>

                                                    <td>
                                                        <div
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input widget-13-check"
                                                                type="checkbox" value="1" />
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input widget-13-check"
                                                                type="checkbox" value="1" />
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input widget-13-check"
                                                                type="checkbox" value="1" />
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">English</td>

                                                    <td>
                                                        <div
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input widget-13-check"
                                                                type="checkbox" value="1" />
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input widget-13-check"
                                                                type="checkbox" value="1" />
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input widget-13-check"
                                                                type="checkbox" value="1" />
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">Malayalam</td>

                                                    <td>
                                                        <div
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input widget-13-check"
                                                                type="checkbox" value="1" />
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input widget-13-check"
                                                                type="checkbox" value="1" />
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input widget-13-check"
                                                                type="checkbox" value="1" />
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">Telugu</td>

                                                    <td>
                                                        <div
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input widget-13-check"
                                                                type="checkbox" value="1" />
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input widget-13-check"
                                                                type="checkbox" value="1" />
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input widget-13-check"
                                                                type="checkbox" value="1" />
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">French</td>

                                                    <td>
                                                        <div
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input widget-13-check"
                                                                type="checkbox" value="1" />
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input widget-13-check"
                                                                type="checkbox" value="1" />
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input widget-13-check"
                                                                type="checkbox" value="1" />
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">Hindi</td>

                                                    <td>
                                                        <div
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input widget-13-check"
                                                                type="checkbox" value="1" />
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input widget-13-check"
                                                                type="checkbox" value="1" />
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input widget-13-check"
                                                                type="checkbox" value="1" />
                                                        </div>
                                                    </td>

                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table container-->
                                </div>
                                <!--begin::Body-->
                            </div>
                            <!--end::Tables Widget 13-->
                            <hr class="bg-lt-clr">
                            </hr>
                            <!--begin::Tables Widget 13-->
                            <div class="tble-fnton card mt-10 mb-5 mb-xl-8">
                                <!--begin::Header-->
                                <div class="card-header border-0 pt-0">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bolder fs-3 mb-1">Past Experience</span>
                                    </h3>

                                    <button id="kt_new_data1_toggle"
                                        class="engage-demos-toggle btn btn-flex h-35px bg-body btn-color-gray-700 btn-active-color-gray-900 shadow-sm fs-6 px-4 rounded-top-0 mt-5"
                                        title="Click Here to add More" data-bs-toggle="tooltip"
                                        data-bs-placement="left" data-bs-dismiss="click" data-bs-trigger="hover">
                                        <span id="kt_engage_demos_label"><span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="11.364" y="20.364"
                                                        width="16" height="2" rx="1"
                                                        transform="rotate(-90 11.364 20.364)" fill="currentColor">
                                                    </rect>
                                                    <rect x="4.36396" y="11.364" width="16"
                                                        height="2" rx="1" fill="currentColor"></rect>
                                                </svg>
                                            </span> Add New</span>
                                    </button>
                                    <!--begin::Help drawer-->
                                    <div id="kt_help" class="bg-body" data-kt-drawer="true"
                                        data-kt-drawer-name="help" data-kt-drawer-activate="true"
                                        data-kt-drawer-overlay="true"
                                        data-kt-drawer-width="{default:'350px', 'md': '725px'}"
                                        data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_new_data1_toggle"
                                        data-kt-drawer-close="#kt_help_close">
                                        <!--begin::Card-->
                                        <div class="card shadow-none rounded-0 w-100">
                                            <!--begin::Header-->
                                            <div class="card-header" id="kt_help_header">
                                                <h5 class="card-title fw-bold text-gray-600">Add your Past Experience</h5>
                                                <div class="card-toolbar">
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon explore-btn-dismiss me-n5"
                                                        id="kt_help_close">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="6" y="17.3137"
                                                                    width="16" height="2" rx="1"
                                                                    transform="rotate(-45 6 17.3137)"
                                                                    fill="currentColor" />
                                                                <rect x="7.41422" y="6" width="16"
                                                                    height="2" rx="1"
                                                                    transform="rotate(45 7.41422 6)"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                </div>
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Body-->
                                            <div class="card-body p-5" id="kt_help_body">
                                                <div class="row">
                                                    <!--begin::Input group-->
                                                    <div class="col-lg-6 mb-5">
                                                        <!--begin::Label-->
                                                        <label class="form-label required">Institution Name</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input name="business_name"
                                                            class="form-control form-control-lg form-control-solid" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="col-lg-6 mb-5">
                                                        <!--begin::Label-->
                                                        <label class="form-label required">Designation</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input name="business_name"
                                                            class="form-control form-control-lg form-control-solid" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="col-lg-6 mb-5">
                                                        <!--begin::Label-->
                                                        <label class="form-label required">Period (From - To)</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input name="business_name"
                                                            class="form-control form-control-lg form-control-solid" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="col-lg-6 mb-5">
                                                        <!--begin::Label-->
                                                        <label class="form-label required">Institution Address</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input name="business_name"
                                                            class="form-control form-control-lg form-control-solid" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="col-lg-6 mb-5">
                                                        <!--begin::Label-->
                                                        <label class="form-label required">Salary drawn</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input name="business_name"
                                                            class="form-control form-control-lg form-control-solid" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="col-lg-6 mb-5">
                                                        <!--begin::Label-->
                                                        <label class="form-label required">Years of Experience</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input name="business_name"
                                                            class="form-control form-control-lg form-control-solid" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="col-lg-6 mb-5">
                                                        <!--begin::Label-->
                                                        <label class="form-label required">Remarks</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input name="business_name"
                                                            class="form-control form-control-lg form-control-solid" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->




                                                    <!--begin::Input group-->
                                                    <div class="col-lg-6 mb-5">
                                                        <div class="form-group row">
                                                            <label class="col-lg-12 col-form-label text-lg-right">Upload
                                                                File:</label>
                                                            <div class="col-lg-12">
                                                                <div class="uppy" id="kt_uppy_5">
                                                                    <div class="uppy-wrapper">
                                                                        <div class="uppy-Root uppy-FileInput-container">
                                                                            <input
                                                                                class="uppy-FileInput-input uppy-input-control"
                                                                                style="" type="file"
                                                                                name="files[]" multiple=""
                                                                                id="kt_uppy_5_input_control"><label
                                                                                class="uppy-input-label btn btn-light-primary btn-sm btn-bold"
                                                                                for="kt_uppy_5_input_control">Attach
                                                                                files</label></div><span
                                                                            class="form-text text-dark">Maximum file size
                                                                            1MB</span>
                                                                    </div>
                                                                    <div class="uppy-list"></div>
                                                                    <div class="uppy-status">
                                                                        <div class="uppy-Root uppy-StatusBar is-waiting"
                                                                            aria-hidden="true" dir="ltr">
                                                                            <div class="uppy-StatusBar-progress"
                                                                                style="width: 0%;" role="progressbar"
                                                                                aria-valuemin="0" aria-valuemax="100"
                                                                                aria-valuenow="0"></div>
                                                                            <div class="uppy-StatusBar-actions"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uppy-informer uppy-informer-min">
                                                                        <div class="uppy uppy-Informer"
                                                                            aria-hidden="true">
                                                                            <p role="alert"> </p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Input group-->



                                                    <div class="d-flex flex-stack pt-5">
                                                        <!--begin::Wrapper-->
                                                        <div>
                                                            <button type="button"
                                                                class="btn btn-lg btn-primary me-3 d-inline-block"
                                                                data-kt-stepper-action="submit">
                                                                <span class="indicator-label">Add
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                    <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.5" x="18"
                                                                                y="13" width="13"
                                                                                height="2" rx="1"
                                                                                transform="rotate(-180 18 13)"
                                                                                fill="currentColor"></rect>
                                                                            <path
                                                                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                fill="currentColor"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                                <span class="indicator-progress">Please wait...
                                                                    <span
                                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                            </button>
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                </div>

                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Help drawer-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body py-3">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="fw-bolder text-muted">
                                                    <th class="min-w-50px">Institution Name</th>
                                                    <th class="min-w-140px">Designation</th>
                                                    <th class="min-w-120px">Period (From To)</th>
                                                    <th class="min-w-120px">Address </th>
                                                    <th class="min-w-120px">Salary Drawn</th>
                                                    <th class="min-w-120px">Total Years of Experience</th>
                                                    <th class="min-w-100px">Remarks</th>
                                                    <th class="min-w-100px">View File</th>
                                                    <th class="min-w-100px text-end">Actions</th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">Donbosco </td>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">Teacher</td>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">2010 - 2020
                                                    </td>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">kolathur</td>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">30,000</td>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">10</td>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">Good</td>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6"><a
                                                            href="">Download File </a></td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3"
                                                                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                        fill="currentColor" />
                                                                    <path
                                                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path
                                                                        d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                        fill="currentColor" />
                                                                    <path opacity="0.5"
                                                                        d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                        fill="currentColor" />
                                                                    <path opacity="0.5"
                                                                        d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table container-->
                                </div>
                                <!--begin::Body-->
                            </div>
                            <!--end::Tables Widget 13-->
                            <hr class="bg-lt-clr">
                            </hr>

                            <!--end::Tables Widget 13-->

                            <!--begin::Tables Widget 13-->
                            <div class="tble-fnton card mt-10 mb-5 mb-xl-8">
                                <!--begin::Header-->
                                <div class="card-header border-0 pt-0">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bolder fs-3 mb-1">Certificate Request</span>
                                    </h3>

                                    <button id="kt_new_data1_toggle_1"
                                        class="engage-demos-toggle btn btn-flex h-35px bg-body btn-color-gray-700 btn-active-color-gray-900 shadow-sm fs-6 px-4 rounded-top-0 mt-5"
                                        title="Click Here to add More" data-bs-toggle="tooltip"
                                        data-bs-placement="left" data-bs-dismiss="click" data-bs-trigger="hover">
                                        <span id="kt_engage_demos_label"><span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="11.364" y="20.364"
                                                        width="16" height="2" rx="1"
                                                        transform="rotate(-90 11.364 20.364)" fill="currentColor">
                                                    </rect>
                                                    <rect x="4.36396" y="11.364" width="16"
                                                        height="2" rx="1" fill="currentColor"></rect>
                                                </svg>
                                            </span> Add New</span>
                                    </button>
                                    <!--begin::Help drawer-->
                                    <div id="kt_help" class="bg-body" data-kt-drawer="true"
                                        data-kt-drawer-name="help" data-kt-drawer-activate="true"
                                        data-kt-drawer-overlay="true"
                                        data-kt-drawer-width="{default:'350px', 'md': '725px'}"
                                        data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_new_data1_toggle_1"
                                        data-kt-drawer-close="#kt_help_close">
                                        <!--begin::Card-->
                                        <div class="card shadow-none rounded-0 w-100">
                                            <!--begin::Header-->
                                            <div class="card-header" id="kt_help_header">
                                                <h5 class="card-title fw-bold text-gray-600">Add your Certificate Request
                                                </h5>
                                                <div class="card-toolbar">
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon explore-btn-dismiss me-n5"
                                                        id="kt_help_close">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="6" y="17.3137"
                                                                    width="16" height="2" rx="1"
                                                                    transform="rotate(-45 6 17.3137)"
                                                                    fill="currentColor" />
                                                                <rect x="7.41422" y="6" width="16"
                                                                    height="2" rx="1"
                                                                    transform="rotate(45 7.41422 6)"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                </div>
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Body-->
                                            <div class="card-body p-5" id="kt_help_body">
                                                <div class="row">
                                                    <!--begin::Input group-->
                                                    <div class="col-lg-6 mb-5">
                                                        <!--begin::Label-->
                                                        <label class="form-label required">Certificate Type</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input name="business_name"
                                                            class="form-control form-control-lg form-control-solid" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="col-lg-6 mb-5">
                                                        <!--begin::Label-->
                                                        <label class="form-label required">Date of request</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input name="business_name"
                                                            class="form-control form-control-lg form-control-solid" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="col-lg-6 mb-5">
                                                        <!--begin::Label-->
                                                        <label class="form-label required">Purpose</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input name="business_name"
                                                            class="form-control form-control-lg form-control-solid" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="col-lg-6 mb-5">
                                                        <!--begin::Label-->
                                                        <label class="form-label required">Date of issue</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input name="business_name"
                                                            class="form-control form-control-lg form-control-solid" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="col-lg-6 mb-5">
                                                        <!--begin::Label-->
                                                        <label class="form-label required">Date of return</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input name="business_name"
                                                            class="form-control form-control-lg form-control-solid" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="col-lg-6 mb-5">
                                                        <!--begin::Label-->
                                                        <label class="form-label required">Remarks</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input name="business_name"
                                                            class="form-control form-control-lg form-control-solid" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->




                                                    <!--begin::Input group-->
                                                    <div class="col-lg-6 mb-5">
                                                        <div class="form-group row">
                                                            <label class="col-lg-12 col-form-label text-lg-right">Upload
                                                                File:</label>
                                                            <div class="col-lg-12">
                                                                <div class="uppy" id="kt_uppy_5">
                                                                    <div class="uppy-wrapper">
                                                                        <div class="uppy-Root uppy-FileInput-container">
                                                                            <input
                                                                                class="uppy-FileInput-input uppy-input-control"
                                                                                style="" type="file"
                                                                                name="files[]" multiple=""
                                                                                id="kt_uppy_5_input_control"><label
                                                                                class="uppy-input-label btn btn-light-primary btn-sm btn-bold"
                                                                                for="kt_uppy_5_input_control">Attach
                                                                                files</label></div><span
                                                                            class="form-text text-dark">Maximum file size
                                                                            1MB</span>
                                                                    </div>
                                                                    <div class="uppy-list"></div>
                                                                    <div class="uppy-status">
                                                                        <div class="uppy-Root uppy-StatusBar is-waiting"
                                                                            aria-hidden="true" dir="ltr">
                                                                            <div class="uppy-StatusBar-progress"
                                                                                style="width: 0%;" role="progressbar"
                                                                                aria-valuemin="0" aria-valuemax="100"
                                                                                aria-valuenow="0"></div>
                                                                            <div class="uppy-StatusBar-actions"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uppy-informer uppy-informer-min">
                                                                        <div class="uppy uppy-Informer"
                                                                            aria-hidden="true">
                                                                            <p role="alert"> </p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Input group-->



                                                    <div class="d-flex flex-stack pt-5">
                                                        <!--begin::Wrapper-->
                                                        <div>
                                                            <button type="button"
                                                                class="btn btn-lg btn-primary me-3 d-inline-block"
                                                                data-kt-stepper-action="submit">
                                                                <span class="indicator-label">Add
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                    <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.5" x="18"
                                                                                y="13" width="13"
                                                                                height="2" rx="1"
                                                                                transform="rotate(-180 18 13)"
                                                                                fill="currentColor"></rect>
                                                                            <path
                                                                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                fill="currentColor"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                                <span class="indicator-progress">Please wait...
                                                                    <span
                                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                            </button>
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                </div>

                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Help drawer-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body py-3">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="fw-bolder text-muted">
                                                    <th class="min-w-50px">Serial No</th>
                                                    <th class="min-w-140px">Certificate Type</th>
                                                    <th class="min-w-120px">Date of request</th>
                                                    <th class="min-w-120px">Purpose </th>
                                                    <th class="min-w-120px">Date of issue</th>
                                                    <th class="min-w-120px">Date of return</th>
                                                    <th class="min-w-100px">Remarks</th>
                                                    <th class="min-w-100px">View File</th>
                                                    <th class="min-w-100px">Approval Status</th>
                                                    <th class="min-w-100px text-end">Actions</th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">1 </td>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">Teacher</td>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">2010 - 2020
                                                    </td>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">kolathur</td>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">30,000</td>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">10</td>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">Good</td>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6"><a
                                                            href="">Download File </a></td>
                                                    <td class="text-warning fw-bolder text-hover-primary fs-6">Pending
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3"
                                                                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                        fill="currentColor" />
                                                                    <path
                                                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path
                                                                        d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                        fill="currentColor" />
                                                                    <path opacity="0.5"
                                                                        d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                        fill="currentColor" />
                                                                    <path opacity="0.5"
                                                                        d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table container-->
                                </div>
                                <!--begin::Body-->
                            </div>
                            <!--end::Tables Widget 13-->
                            <hr class="bg-lt-clr">
                            </hr>

                            <div class="pb-5 pb-lg-5 mt-10">
                                <!--begin::Title-->
                                <h2 class="fw-bolder text-dark">Other Talents</h2>
                                <!--end::Title-->
                            </div>
                            <div class="row">
                                <!--begin::Input group-->
                                <div class="col-lg-6 mb-5">
                                    <!--end::Label-->
                                    <label class="form-label">Sports</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <textarea name="business_description" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="col-lg-6 mb-5">
                                    <!--end::Label-->
                                    <label class="form-label">Fine Arts</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <textarea name="business_description" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="col-lg-6 mb-5">
                                    <!--end::Label-->
                                    <label class="form-label">Vocational</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <textarea name="business_description" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="col-lg-6 mb-5">
                                    <!--end::Label-->
                                    <label class="form-label">Others </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <textarea name="business_description" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>






                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Step 4-->



                    <!--begin::Step 5-->
                    <div data-kt-stepper-element="content">
                        <!--begin::Wrapper-->
                        <div class="w-100">

                            <!--begin::Tables Widget 13-->

                            <div class="pb-0 pb-lg-0 mt-0">
                                <!--begin::Title-->
                                <h2 class="fw-bolder text-dark">Family Information</h2>
                                <!--end::Title-->
                            </div>
                            <div class="tble-fnton card mt-0 mb-5 mb-xl-8">
                                <!--begin::Header-->
                                <div class="card-header border-0 pt-0">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bolder fs-3 mb-1">Family Details</span>
                                    </h3>

                                    <button id="kt_new_family_toggle"
                                        class="engage-demos-toggle btn btn-flex h-35px bg-body btn-color-gray-700 btn-active-color-gray-900 shadow-sm fs-6 px-4 rounded-top-0 mt-5"
                                        title="Click Here to add More" data-bs-toggle="tooltip"
                                        data-bs-placement="left" data-bs-dismiss="click" data-bs-trigger="hover">
                                        <span id="kt_engage_demos_label"><span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="11.364" y="20.364"
                                                        width="16" height="2" rx="1"
                                                        transform="rotate(-90 11.364 20.364)" fill="currentColor">
                                                    </rect>
                                                    <rect x="4.36396" y="11.364" width="16"
                                                        height="2" rx="1" fill="currentColor"></rect>
                                                </svg>
                                            </span> Add New</span>
                                    </button>
                                    <!--begin::Help drawer-->
                                    <div id="kt_help" class="bg-body" data-kt-drawer="true"
                                        data-kt-drawer-name="help" data-kt-drawer-activate="true"
                                        data-kt-drawer-overlay="true"
                                        data-kt-drawer-width="{default:'350px', 'md': '725px'}"
                                        data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_new_family_toggle"
                                        data-kt-drawer-close="#kt_help_close">
                                        <!--begin::Card-->
                                        <div class="card shadow-none rounded-0 w-100">
                                            <!--begin::Header-->
                                            <div class="card-header" id="kt_help_header">
                                                <h5 class="card-title fw-bold text-gray-600">Add your Family Details</h5>
                                                <div class="card-toolbar">
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon explore-btn-dismiss me-n5"
                                                        id="kt_help_close">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="6" y="17.3137"
                                                                    width="16" height="2" rx="1"
                                                                    transform="rotate(-45 6 17.3137)"
                                                                    fill="currentColor" />
                                                                <rect x="7.41422" y="6" width="16"
                                                                    height="2" rx="1"
                                                                    transform="rotate(45 7.41422 6)"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                </div>
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Body-->
                                            <div class="card-body p-5" id="kt_help_body">
                                                <div class="row">
                                                    <!--begin::Input group-->
                                                    <div class="col-lg-6 mb-5">
                                                        <!--begin::Label-->
                                                        <label class="form-label required">Relationship Type</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <select name="business_type"
                                                            class="form-select form-select-lg form-select-solid"
                                                            data-control="select2" data-placeholder="Select Type"
                                                            data-allow-clear="true" data-hide-search="true">
                                                            <option></option>
                                                            <option value="1">Father</option>
                                                            <option value="1">Mother</option>
                                                            <option value="1">Son</option>
                                                            <option value="1">Daughter</option>
                                                            <option value="1">Brother</option>
                                                            <option value="1">Sister</option>
                                                            <option value="1">Brother-in-law</option>
                                                            <option value="1">Sister-in-law</option>
                                                            <option value="1">Husband</option>
                                                            <option value="1">Wife</option>
                                                        </select>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="col-lg-6 mb-5">
                                                        <!--begin::Label-->
                                                        <label class="form-label required">Name</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input name="business_name"
                                                            class="form-control form-control-lg form-control-solid" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="col-lg-6 mb-5">
                                                        <label class="required fs-6 fw-bold mb-2">Date of Birth</label>
                                                        <!--begin::Input-->
                                                        <div class="position-relative d-flex align-items-center">
                                                            <!--begin::Icon-->
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3"
                                                                        d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                                                        fill="currentColor" />
                                                                    <path
                                                                        d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                                                        fill="currentColor" />
                                                                    <path
                                                                        d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                            <!--end::Icon-->
                                                            <!--begin::Datepicker-->
                                                            <input class="form-control form-control-solid ps-12"
                                                                placeholder="Select a date" name="due_date" />
                                                            <!--end::Datepicker-->
                                                        </div>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="col-lg-6 mb-5">
                                                        <!--begin::Label-->
                                                        <label class="form-label required">Gender</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <select name="business_type"
                                                            class="form-select form-select-lg form-select-solid"
                                                            data-control="select2" data-placeholder="Select Gender"
                                                            data-allow-clear="true" data-hide-search="true">
                                                            <option></option>
                                                            <option value="1">Male</option>
                                                            <option value="1">Female</option>
                                                            <option value="1">Others</option>
                                                        </select>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="col-lg-6 mb-5">
                                                        <!--begin::Label-->
                                                        <label class="form-label required">Age</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input name="business_name"
                                                            class="form-control form-control-lg form-control-solid" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="col-lg-6 mb-5">
                                                        <!--begin::Label-->
                                                        <label class="form-label required">Qualification</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input name="business_name"
                                                            class="form-control form-control-lg form-control-solid" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="mb-5 col-lg-6 fv-row">
                                                        <!--begin::Wrapper-->
                                                        <div class="d-inline-block flex-stack">

                                                            <!--begin::Checkboxes-->
                                                            <!--begin::Label-->
                                                            <div class="fw-bold me-5">
                                                                <label class="fs-6">Profession Type</label>
                                                            </div>
                                                            <!--end::Label-->
                                                            <div class="d-block mt-5 align-items-center cstm-zeed">
                                                                <!--begin::Checkbox-->
                                                                <label
                                                                    class="form-check form-check-custom form-check-solid me-10">
                                                                    <input class="form-check-input h-20px w-20px"
                                                                        type="radio" name="communication[]"
                                                                        value="Profession - 1" />
                                                                    <span
                                                                        class="form-check-label fw-bold">Profession</span>
                                                                </label>
                                                                <!--end::Checkbox-->
                                                                <!--begin::Checkbox-->
                                                                <label
                                                                    class="form-check form-check-custom form-check-solid me-10">
                                                                    <input class="form-check-input h-20px w-20px"
                                                                        type="radio" name="communication[]"
                                                                        value="Profession - 2" />
                                                                    <span class="form-check-label fw-bold">Studying</span>
                                                                </label>
                                                                <!--end::Checkbox-->
                                                            </div>
                                                            <!--end::Checkboxes-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="mb-5 col-lg-6 fv-row">
                                                        <!--begin::Wrapper-->
                                                        <div class="d-inline-block flex-stack">

                                                            <!--begin::Checkboxes-->
                                                            <!--begin::Label-->
                                                            <div class="fw-bold me-5">
                                                                <label class="fs-6">Premises</label>
                                                            </div>
                                                            <!--end::Label-->
                                                            <div class="d-block mt-5 align-items-center cstm-zeed">
                                                                <!--begin::Checkbox-->
                                                                <label
                                                                    class="form-check form-check-custom form-check-solid me-10">
                                                                    <input class="form-check-input h-20px w-20px"
                                                                        type="radio" name="communication[]"
                                                                        value="Profession - 3" />
                                                                    <span
                                                                        class="form-check-label fw-bold">Amalarpavam</span>
                                                                </label>
                                                                <!--end::Checkbox-->
                                                                <!--begin::Checkbox-->
                                                                <label
                                                                    class="form-check form-check-custom form-check-solid me-10">
                                                                    <input class="form-check-input h-20px w-20px"
                                                                        type="radio" name="communication[]"
                                                                        value="Profession - 4" />
                                                                    <span class="form-check-label fw-bold">Others</span>
                                                                </label>
                                                                <!--end::Checkbox-->
                                                            </div>
                                                            <!--end::Checkboxes-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="col-lg-6 mb-5">
                                                        <!--begin::Label-->
                                                        <label class="form-label required">Contact No</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input name="business_name"
                                                            class="form-control form-control-lg form-control-solid" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="col-lg-6 mb-5">
                                                        <!--begin::Label-->
                                                        <label class="form-label required">Blood Group</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input name="business_name"
                                                            class="form-control form-control-lg form-control-solid" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="col-lg-6 mb-5">
                                                        <!--begin::Label-->
                                                        <label class="form-label required">Nationality</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input name="business_name"
                                                            class="form-control form-control-lg form-control-solid" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="col-lg-6 mb-5">
                                                        <!--begin::Label-->
                                                        <label class="form-label required">Remarks</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input name="business_name"
                                                            class="form-control form-control-lg form-control-solid" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="col-lg-6 mb-5">
                                                        <!--begin::Label-->
                                                        <label class="form-label required">If Son/Daughter Regn No</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input name="business_name"
                                                            class="form-control form-control-lg form-control-solid" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="col-lg-6 mb-5">
                                                        <!--begin::Label-->
                                                        <label class="form-label required">If Son/Daughter Std</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input name="business_name"
                                                            class="form-control form-control-lg form-control-solid" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->

                                                    <div class="col-lg-12 mb-5">
                                                        <!--end::Label-->
                                                        <label class="form-label">Residential Address</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <textarea name="business_description" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->

                                                    <div class="col-lg-12 mb-5">
                                                        <!--end::Label-->
                                                        <label class="form-label">Occupational address/School
                                                            address</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <textarea name="business_description" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <div class="d-flex flex-stack pt-5">
                                                        <!--begin::Wrapper-->
                                                        <div>
                                                            <button type="button"
                                                                class="btn btn-lg btn-primary me-3 d-inline-block"
                                                                data-kt-stepper-action="submit">
                                                                <span class="indicator-label">Add
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                    <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.5" x="18"
                                                                                y="13" width="13"
                                                                                height="2" rx="1"
                                                                                transform="rotate(-180 18 13)"
                                                                                fill="currentColor"></rect>
                                                                            <path
                                                                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                fill="currentColor"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                                <span class="indicator-progress">Please wait...
                                                                    <span
                                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                            </button>
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                </div>

                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Help drawer-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body py-3">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="fw-bolder text-muted">
                                                    <th class="min-w-50px">Relationship Type</th>
                                                    <th class="min-w-140px">Name</th>
                                                    <th class="min-w-120px">Date of Birth</th>
                                                    <th class="min-w-120px">Qualification </th>
                                                    <th class="min-w-120px">Profession Type</th>
                                                    <th class="min-w-120px">Premises </th>
                                                    <th class="min-w-120px">Residential Address</th>
                                                    <th class="min-w-120px">Occupational /School address</th>
                                                    <th class="min-w-120px">Contact No</th>
                                                    <th class="min-w-120px">Blood Group</th>
                                                    <th class="min-w-120px">Nationality</th>
                                                    <th class="min-w-120px">Remarks</th>
                                                    <th class="min-w-120px">Son / Daughter</th>
                                                    <th class="min-w-120px text-end">Actions</th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">Brother </td>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">Akilan<span
                                                            class="text-muted fw-bold text-muted d-block fs-7">Male</span>
                                                    </td>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                        18/09/1993<span
                                                            class="text-muted fw-bold text-muted d-block fs-7">Age -
                                                            30</span></td>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">Engineer</td>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">Profession
                                                    </td>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">Amalarpavam
                                                    </td>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">Ambattur</td>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">Kolathur</td>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">9966288556
                                                    </td>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">A+</td>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">Indian</td>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">Good</td>
                                                    <td class="text-dark fw-bolder text-hover-primary fs-6">Son<span
                                                            class="text-muted fw-bold text-muted d-block fs-7">Regn. -
                                                            10258522</span>
                                                        <span class="text-muted fw-bold text-muted d-block fs-7">Std, Sec
                                                            - IA</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3"
                                                                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                        fill="currentColor" />
                                                                    <path
                                                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path
                                                                        d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                        fill="currentColor" />
                                                                    <path opacity="0.5"
                                                                        d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                        fill="currentColor" />
                                                                    <path opacity="0.5"
                                                                        d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table container-->
                                </div>
                                <!--begin::Body-->
                            </div>
                            <!--end::Tables Widget 13-->

                            <!--begin::Pricing-->
                            <div class="card card-flush py-0">
                                <!--begin::Card header-->
                                <div class="pt-10">
                                    <div class="card-title">
                                        <h2>AEWS Details</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="pt-5">

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-2">Are you in AEWS? whether concession is required ?
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Select a discount type that will be applied to this product"></i></label>
                                        <!--End::Label-->
                                        <!--begin::Row-->
                                        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9"
                                            data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
                                            <!--begin::Col-->
                                            <div class="col">
                                                <!--begin::Option-->
                                                <label
                                                    class="btn btn-outline btn-outline-dashed btn-outline-default active d-flex text-start p-6"
                                                    data-kt-button="true">
                                                    <!--begin::Radio-->
                                                    <span
                                                        class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                        <input class="form-check-input" type="radio"
                                                            name="discount_option" value="1" checked="checked" />
                                                    </span>
                                                    <!--end::Radio-->
                                                    <!--begin::Info-->
                                                    <span class="ms-5">
                                                        <span class="fs-4 fw-bolder text-gray-800 d-block">Yes
                                                            Needed</span>
                                                    </span>
                                                    <!--end::Info-->
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col">
                                                <!--begin::Option-->
                                                <label
                                                    class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6"
                                                    data-kt-button="true">
                                                    <!--begin::Radio-->
                                                    <span
                                                        class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                        <input class="form-check-input" type="radio"
                                                            name="discount_option" value="2" />
                                                    </span>
                                                    <!--end::Radio-->
                                                    <!--begin::Info-->
                                                    <span class="ms-5">
                                                        <span class="fs-4 fw-bolder text-gray-800 d-block">No,
                                                            Thanks.</span>
                                                    </span>
                                                    <!--end::Info-->
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Col-->

                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row" id="kt_ecommerce_add_product_discount_percentage">


                                        <div class="row">
                                            <!--begin::Input group-->
                                            <div class="col-lg-1 mb-5">
                                                <!--begin::Label-->
                                                <label class="form-label"></label>
                                                <span class="fs-4 pt-5 fw-bolder text-gray-800 d-block">Anual fees</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="col-lg-2 mb-5">
                                                <!--begin::Label-->
                                                <label class="form-label">Amount</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input name="business_name"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="10000" readonly="" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="col-lg-1 mb-5">
                                                <!--begin::Label-->
                                                <label class="form-label required">Concession %</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input name="business_name"
                                                    class="form-control form-control-lg form-control-solid" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="col-lg-2 mb-5">
                                                <!--begin::Label-->
                                                <label class="form-label required">Amount after Concession</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input name="business_name"
                                                    class="form-control form-control-lg form-control-solid" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->

                                        </div>


                                        <div class="row">
                                            <!--begin::Input group-->
                                            <div class="col-lg-1 mb-5">
                                                <!--begin::Label-->
                                                <span class="fs-4 pt-3 fw-bolder text-gray-800 d-block">Exam fees</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="col-lg-2 mb-5">
                                                <!--begin::Label-->
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input name="business_name"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="15000" readonly="" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="col-lg-1 mb-5">
                                                <!--begin::Label-->
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input name="business_name"
                                                    class="form-control form-control-lg form-control-solid" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="col-lg-2 mb-5">
                                                <!--begin::Label-->
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input name="business_name"
                                                    class="form-control form-control-lg form-control-solid" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->

                                        </div>


                                        <div class="row">
                                            <!--begin::Input group-->
                                            <div class="col-lg-1 mb-5">
                                                <!--begin::Label-->
                                                <span class="fs-4 pt-3 fw-bolder text-gray-800 d-block">Lab fees</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="col-lg-2 mb-5">
                                                <!--begin::Label-->
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input name="business_name"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="10000" readonly="" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="col-lg-1 mb-5">
                                                <!--begin::Label-->
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input name="business_name"
                                                    class="form-control form-control-lg form-control-solid" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="col-lg-2 mb-5">
                                                <!--begin::Label-->
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input name="business_name"
                                                    class="form-control form-control-lg form-control-solid" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->

                                        </div>


                                        <div class="row">
                                            <!--begin::Input group-->
                                            <div class="col-lg-1 mb-5">
                                                <!--begin::Label-->
                                                <span
                                                    class="fs-4 pt-3 fw-bolder text-gray-800 d-block"><b>Total</b></span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="col-lg-2 mb-5">
                                                <!--begin::Label-->
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input name="business_name"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="35000" readonly="" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="col-lg-1 mb-5">
                                                <!--begin::Label-->
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input name="business_name"
                                                    class="form-control form-control-lg form-control-solid" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="col-lg-2 mb-5">
                                                <!--begin::Label-->
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input name="business_name"
                                                    class="form-control form-control-lg form-control-solid" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->

                                        </div>


                                        <div class="row">
                                            <!--begin::Input group-->
                                            <div class="col-lg-1 mb-5">
                                                <!--begin::Label-->
                                                <span
                                                    class="fs-4 pt-3 fw-bolder text-gray-800 d-block"><b>Remarks</b></span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="col-lg-5 mb-5">
                                                <!--begin::Label-->
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <!--begin::Input-->
                                                <textarea name="business_description" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
                                                <!--end::Input-->
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->

                                        </div>


                                        <div class="row">
                                            <!--begin::Input group-->
                                            <div class="col-lg-1 mb-5">
                                                <!--begin::Label-->
                                                <span class="fs-4 pt-3 fw-bolder text-gray-800 d-block"><b> </b></span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="col-lg-5 mb-5">
                                                <!--begin::Label-->
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <div class="d-flex mb-4">

                                                    <a href="#" class="btn btn-sm btn-primary me-3"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_new_target"><span class="navi-icon">
                                                            <i class="la la-print"></i>
                                                        </span> Print </a>
                                                    <a href="#" class="btn btn-sm btn-primary me-3"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_new_target"><span class="navi-icon">
                                                            <i class="la la-upload"></i>
                                                        </span> Upload </a>
                                                    <a href="#" class="btn btn-sm btn-primary me-3"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_new_target"><span class="navi-icon">
                                                            <i class="la la-send"></i>
                                                        </span> Send Copy for Approval </a>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->

                                        </div>


                                        <div class="row">
                                            <!--begin::Input group-->
                                            <div class="col-lg-1 mb-5">
                                                <!--begin::Label-->
                                                <span class="fs-4 pt-3 fw-bolder text-gray-800 d-block"><b>
                                                        Status</b></span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="col-lg-5 mb-5">
                                                <!--begin::Label-->
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <div class="d-flex mb-4">
                                                    <div class="min-w-165px">
                                                        <span class="badge badge-light-success"
                                                            style="padding: 1rem 2.5rem;border-radius:1rem;">Approved</span>
                                                        <span class="badge badge-light-danger"
                                                            style="padding: 1rem 2.5rem;border-radius:1rem;">Rejected</span>
                                                        <span class="badge badge-light-warning"
                                                            style="padding: 1rem 2.5rem;border-radius:1rem;">Pending</span>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->

                                        </div>


                                        <!--begin::Tables Widget 13-->
                                        <div class="tble-fnton card mt-10 mb-5 mb-xl-8">
                                            <!--begin::Header-->
                                            <div class="card-header border-0 pt-0">
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bolder fs-3 mb-1">Nominee required</span>
                                                </h3>

                                                <button id="kt_new_nominiee_toggle"
                                                    class="engage-demos-toggle btn btn-flex h-35px bg-body btn-color-gray-700 btn-active-color-gray-900 shadow-sm fs-6 px-4 rounded-top-0 mt-5"
                                                    title="Click Here to add More" data-bs-toggle="tooltip"
                                                    data-bs-placement="left" data-bs-dismiss="click"
                                                    data-bs-trigger="hover">
                                                    <span id="kt_engage_demos_label"><span class="svg-icon svg-icon-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="11.364" y="20.364"
                                                                    width="16" height="2" rx="1"
                                                                    transform="rotate(-90 11.364 20.364)"
                                                                    fill="currentColor"></rect>
                                                                <rect x="4.36396" y="11.364" width="16"
                                                                    height="2" rx="1" fill="currentColor">
                                                                </rect>
                                                            </svg>
                                                        </span> Add New</span>
                                                </button>
                                                <!--begin::Help drawer-->
                                                <div id="kt_help" class="bg-body" data-kt-drawer="true"
                                                    data-kt-drawer-name="help" data-kt-drawer-activate="true"
                                                    data-kt-drawer-overlay="true"
                                                    data-kt-drawer-width="{default:'350px', 'md': '725px'}"
                                                    data-kt-drawer-direction="end"
                                                    data-kt-drawer-toggle="#kt_new_nominiee_toggle"
                                                    data-kt-drawer-close="#kt_help_close">
                                                    <!--begin::Card-->
                                                    <div class="card shadow-none rounded-0 w-100">
                                                        <!--begin::Header-->
                                                        <div class="card-header" id="kt_help_header">
                                                            <h5 class="card-title fw-bold text-gray-600">Add your Nominee
                                                                Details</h5>
                                                            <div class="card-toolbar">
                                                                <button type="button"
                                                                    class="btn btn-sm btn-icon explore-btn-dismiss me-n5"
                                                                    id="kt_help_close">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                                    <span class="svg-icon svg-icon-2">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.5" x="6"
                                                                                y="17.3137" width="16"
                                                                                height="2" rx="1"
                                                                                transform="rotate(-45 6 17.3137)"
                                                                                fill="currentColor" />
                                                                            <rect x="7.41422" y="6"
                                                                                width="16" height="2"
                                                                                rx="1"
                                                                                transform="rotate(45 7.41422 6)"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <!--end::Header-->

                                                        <!--begin::Body-->
                                                        <div class="card-body p-5" id="kt_help_body">
                                                            <div class="row">
                                                                <!--begin::Input group-->
                                                                <div class="col-lg-6 mb-5">
                                                                    <!--begin::Label-->
                                                                    <label class="form-label required">Nominee
                                                                        Name</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input name="business_name"
                                                                        class="form-control form-control-lg form-control-solid" />
                                                                    <!--end::Input-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="col-lg-6 mb-5">
                                                                    <!--begin::Label-->
                                                                    <label class="form-label required"> Relationship
                                                                        Type</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input name="business_name"
                                                                        class="form-control form-control-lg form-control-solid" />
                                                                    <!--end::Input-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="col-lg-6 mb-5">
                                                                    <label class="required fs-6 fw-bold mb-2">Date of
                                                                        Birth</label>
                                                                    <!--begin::Input-->
                                                                    <div
                                                                        class="position-relative d-flex align-items-center">
                                                                        <!--begin::Icon-->
                                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                                                        <span
                                                                            class="svg-icon svg-icon-2 position-absolute mx-4">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path opacity="0.3"
                                                                                    d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                                                                    fill="currentColor" />
                                                                                <path
                                                                                    d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                                                                    fill="currentColor" />
                                                                                <path
                                                                                    d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                                                                    fill="currentColor" />
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                        <!--end::Icon-->
                                                                        <!--begin::Datepicker-->
                                                                        <input
                                                                            class="form-control form-control-solid ps-12"
                                                                            placeholder="Select a date"
                                                                            name="due_date" />
                                                                        <!--end::Datepicker-->
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="col-lg-6 mb-5">
                                                                    <!--begin::Label-->
                                                                    <label class="form-label required">Gender</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <select name="business_type"
                                                                        class="form-select form-select-lg form-select-solid"
                                                                        data-control="select2"
                                                                        data-placeholder="Select Gender"
                                                                        data-allow-clear="true" data-hide-search="true">
                                                                        <option></option>
                                                                        <option value="1">Male</option>
                                                                        <option value="1">Female</option>
                                                                        <option value="1">Others</option>
                                                                    </select>
                                                                    <!--end::Input-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="col-lg-6 mb-5">
                                                                    <!--begin::Label-->
                                                                    <label class="form-label required">Age</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input name="business_name"
                                                                        class="form-control form-control-lg form-control-solid"
                                                                        maxlength="2" />
                                                                    <!--end::Input-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="col-lg-6 mb-5">
                                                                    <!--begin::Label-->
                                                                    <label class="form-label">Name If Nominee is Minor
                                                                    </label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input name="business_name"
                                                                        class="form-control form-control-lg form-control-solid" />
                                                                    <!--end::Input-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="col-lg-6 mb-5">
                                                                    <!--begin::Label-->
                                                                    <label class="form-label">Share %</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input name="business_name"
                                                                        class="form-control form-control-lg form-control-solid" />
                                                                    <!--end::Input-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="col-lg-12 mb-5">
                                                                    <!--end::Label-->
                                                                    <label class="form-label">Address & Contact Number If
                                                                        Nominee is Minor </label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <textarea name="business_description" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
                                                                    <!--end::Input-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <div class="d-flex flex-stack pt-5">
                                                                    <!--begin::Wrapper-->
                                                                    <div>
                                                                        <button type="button"
                                                                            class="btn btn-lg btn-primary me-3 d-inline-block"
                                                                            data-kt-stepper-action="submit">
                                                                            <span class="indicator-label">Add
                                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                                <span
                                                                                    class="svg-icon svg-icon-3 ms-2 me-0">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none">
                                                                                        <rect opacity="0.5"
                                                                                            x="18"
                                                                                            y="13"
                                                                                            width="13"
                                                                                            height="2"
                                                                                            rx="1"
                                                                                            transform="rotate(-180 18 13)"
                                                                                            fill="currentColor"></rect>
                                                                                        <path
                                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg>
                                                                                </span>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                            <span class="indicator-progress">Please
                                                                                wait...
                                                                                <span
                                                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                                        </button>
                                                                    </div>
                                                                    <!--end::Wrapper-->
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <!--end::Body-->
                                                    </div>
                                                    <!--end::Card-->
                                                </div>
                                                <!--end::Help drawer-->
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div class="card-body py-3">
                                                <!--begin::Table container-->
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table
                                                        class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                                                        <!--begin::Table head-->
                                                        <thead>
                                                            <tr class="fw-bolder text-muted">
                                                                <th class="min-w-50px">Nominee Name</th>
                                                                <th class="min-w-140px">Relationship </th>
                                                                <th class="min-w-120px">Date of Birth</th>
                                                                <th class="min-w-120px">Gender </th>
                                                                <th class="min-w-120px">Age</th>
                                                                <th class="min-w-120px">If Minor Guardian Name & Address
                                                                    with contact No.</th>
                                                                <th class="min-w-120px">Share %</th>
                                                                <th class="min-w-100px text-end">Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <!--end::Table head-->
                                                        <!--begin::Table body-->
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                                    John </td>
                                                                <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                                    Brother</td>
                                                                <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                                    18/08/1994</td>
                                                                <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                                    Male</td>
                                                                <td class="text-dark fw-bolder text-hover-primary fs-6">29
                                                                </td>
                                                                <td class="text-dark fw-bolder text-hover-primary fs-6">10
                                                                </td>
                                                                <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                                    30%</td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                        <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                                        <span class="svg-icon svg-icon-3">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path opacity="0.3"
                                                                                    d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                                    fill="currentColor" />
                                                                                <path
                                                                                    d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                                    fill="currentColor" />
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                                        <span class="svg-icon svg-icon-3">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path
                                                                                    d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                                    fill="currentColor" />
                                                                                <path opacity="0.5"
                                                                                    d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                                    fill="currentColor" />
                                                                                <path opacity="0.5"
                                                                                    d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                                    fill="currentColor" />
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <!--end::Table body-->
                                                    </table>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Table container-->
                                            </div>
                                            <!--begin::Body-->
                                        </div>
                                        <!--end::Tables Widget 13-->

                                        <!--begin::Tables Widget 13-->
                                        <div class="tble-fnton card mt-10 mb-5 mb-xl-8">
                                            <!--begin::Header-->
                                            <div class="card-header border-0 pt-0">
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bolder fs-3 mb-1">Relation working in
                                                        AEWS</span>
                                                </h3>

                                                <button id="kt_new_aews_toggle"
                                                    class="engage-demos-toggle btn btn-flex h-35px bg-body btn-color-gray-700 btn-active-color-gray-900 shadow-sm fs-6 px-4 rounded-top-0 mt-5"
                                                    title="Click Here to add More" data-bs-toggle="tooltip"
                                                    data-bs-placement="left" data-bs-dismiss="click"
                                                    data-bs-trigger="hover">
                                                    <span id="kt_engage_demos_label"><span class="svg-icon svg-icon-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="11.364" y="20.364"
                                                                    width="16" height="2" rx="1"
                                                                    transform="rotate(-90 11.364 20.364)"
                                                                    fill="currentColor"></rect>
                                                                <rect x="4.36396" y="11.364" width="16"
                                                                    height="2" rx="1" fill="currentColor">
                                                                </rect>
                                                            </svg>
                                                        </span> Add New</span>
                                                </button>
                                                <!--begin::Help drawer-->
                                                <div id="kt_help" class="bg-body" data-kt-drawer="true"
                                                    data-kt-drawer-name="help" data-kt-drawer-activate="true"
                                                    data-kt-drawer-overlay="true"
                                                    data-kt-drawer-width="{default:'350px', 'md': '725px'}"
                                                    data-kt-drawer-direction="end"
                                                    data-kt-drawer-toggle="#kt_new_aews_toggle"
                                                    data-kt-drawer-close="#kt_help_close">
                                                    <!--begin::Card-->
                                                    <div class="card shadow-none rounded-0 w-100">
                                                        <!--begin::Header-->
                                                        <div class="card-header" id="kt_help_header">
                                                            <h5 class="card-title fw-bold text-gray-600">Add your Relation
                                                                working in AEWS</h5>
                                                            <div class="card-toolbar">
                                                                <button type="button"
                                                                    class="btn btn-sm btn-icon explore-btn-dismiss me-n5"
                                                                    id="kt_help_close">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                                    <span class="svg-icon svg-icon-2">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.5" x="6"
                                                                                y="17.3137" width="16"
                                                                                height="2" rx="1"
                                                                                transform="rotate(-45 6 17.3137)"
                                                                                fill="currentColor" />
                                                                            <rect x="7.41422" y="6"
                                                                                width="16" height="2"
                                                                                rx="1"
                                                                                transform="rotate(45 7.41422 6)"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <!--end::Header-->

                                                        <!--begin::Body-->
                                                        <div class="card-body p-5" id="kt_help_body">
                                                            <div class="row">
                                                                <!--begin::Input group-->
                                                                <div class="col-lg-6 mb-5">
                                                                    <!--begin::Label-->
                                                                    <label class="form-label required">Relation
                                                                        Name</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input name="business_name"
                                                                        class="form-control form-control-lg form-control-solid" />
                                                                    <!--end::Input-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="col-lg-6 mb-5">
                                                                    <!--begin::Label-->
                                                                    <label class="form-label required">Relationship
                                                                        Type</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input name="business_name"
                                                                        class="form-control form-control-lg form-control-solid" />
                                                                    <!--end::Input-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="col-lg-6 mb-5">
                                                                    <!--begin::Label-->
                                                                    <label class="form-label required">Emp Code</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input name="business_name"
                                                                        class="form-control form-control-lg form-control-solid" />
                                                                    <!--end::Input-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="col-lg-6 mb-5">
                                                                    <!--begin::Label-->
                                                                    <label class="form-label required">Institution</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input name="business_name"
                                                                        class="form-control form-control-lg form-control-solid" />
                                                                    <!--end::Input-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="col-lg-6 mb-5">
                                                                    <!--begin::Label-->
                                                                    <label class="form-label required">Place of
                                                                        Work</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input name="business_name"
                                                                        class="form-control form-control-lg form-control-solid" />
                                                                    <!--end::Input-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <div class="d-flex flex-stack pt-5">
                                                                    <!--begin::Wrapper-->
                                                                    <div>
                                                                        <button type="button"
                                                                            class="btn btn-lg btn-primary me-3 d-inline-block"
                                                                            data-kt-stepper-action="submit">
                                                                            <span class="indicator-label">Add
                                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                                <span
                                                                                    class="svg-icon svg-icon-3 ms-2 me-0">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none">
                                                                                        <rect opacity="0.5"
                                                                                            x="18"
                                                                                            y="13"
                                                                                            width="13"
                                                                                            height="2"
                                                                                            rx="1"
                                                                                            transform="rotate(-180 18 13)"
                                                                                            fill="currentColor"></rect>
                                                                                        <path
                                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg>
                                                                                </span>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                            <span class="indicator-progress">Please
                                                                                wait...
                                                                                <span
                                                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                                        </button>
                                                                    </div>
                                                                    <!--end::Wrapper-->
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <!--end::Body-->
                                                    </div>
                                                    <!--end::Card-->
                                                </div>
                                                <!--end::Help drawer-->
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div class="card-body py-3">
                                                <!--begin::Table container-->
                                                <div class="table-responsive">

                                                    <!--begin::Table-->
                                                    <table
                                                        class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                                                        <!--begin::Table head-->
                                                        <thead>
                                                            <tr class="fw-bolder text-muted">
                                                                <th class="min-w-50px">Relation Name</th>
                                                                <th class="min-w-140px">Relationship </th>
                                                                <th class="min-w-120px">Emp Code</th>
                                                                <th class="min-w-120px">Institution</th>
                                                                <th class="min-w-120px">Place of Work </th>
                                                                <th class="min-w-100px text-end">Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <!--end::Table head-->
                                                        <!--begin::Table body-->
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                                    John </td>
                                                                <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                                    Brother</td>
                                                                <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                                    18/08/1994</td>
                                                                <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                                    Male</td>
                                                                <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                                    Male</td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                        <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                                        <span class="svg-icon svg-icon-3">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path opacity="0.3"
                                                                                    d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                                    fill="currentColor" />
                                                                                <path
                                                                                    d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                                    fill="currentColor" />
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                                        <span class="svg-icon svg-icon-3">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path
                                                                                    d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                                    fill="currentColor" />
                                                                                <path opacity="0.5"
                                                                                    d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                                    fill="currentColor" />
                                                                                <path opacity="0.5"
                                                                                    d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                                    fill="currentColor" />
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <!--end::Table body-->
                                                    </table>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Table container-->
                                            </div>
                                            <!--begin::Body-->
                                        </div>
                                        <!--end::Tables Widget 13-->



                                        <!--begin::Heading-->






                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::Pricing-->


                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Step 5-->





                    <!--begin::Step 6-->
                    <div data-kt-stepper-element="content">
                        <!--begin::Wrapper-->
                        <div class="w-100">

                            <!--begin::Pricing-->
                            <div class="card card-flush py-0">
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="pt-0">
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row" id="kt_ecommerce_add_product_discount_percentage">



                                        <!--begin::Heading-->
                                        <div class="pb-5 pb-lg-5">
                                            <!--begin::Title-->
                                            <h2 class="fw-bolder text-dark">Medical Details</h2>
                                            <!--end::Title-->
                                        </div>



                                        <!--end::Heading-->
                                        <div class="row">

                                            <!--begin::Input group-->
                                            <div class="col-lg-4 mb-5">
                                                <!--begin::Label-->
                                                <label class="form-label required">Blood Group</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <select name="business_type"
                                                    class="form-select form-select-lg form-select-solid"
                                                    data-control="select2" data-placeholder="Select Type"
                                                    data-allow-clear="true" data-hide-search="true">
                                                    <option></option>
                                                    <option value="1">A+</option>
                                                    <option value="1">B+</option>
                                                    <option value="1">O+</option>
                                                    <option value="1">A-</option>
                                                    <option value="1">B-</option>
                                                    <option value="1">O-</option>
                                                </select>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="col-lg-4 mb-5">
                                                <!--begin::Label-->
                                                <label class="form-label required">Height in Cms</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input name="business_name"
                                                    class="form-control form-control-lg form-control-solid" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="col-lg-4 mb-5">
                                                <!--begin::Label-->
                                                <label class="form-label required">Weight in Kgs</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input name="business_name"
                                                    class="form-control form-control-lg form-control-solid" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="col-lg-4 mb-5">
                                                <!--begin::Label-->
                                                <label class="form-label required">Identification mark</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input name="business_name"
                                                    class="form-control form-control-lg form-control-solid" />
                                                <!--end::Input-->
                                            </div>

                                            <!--begin::Input group-->
                                            <div class="col-lg-4 mb-5">
                                                <!--begin::Label-->
                                                <label class="form-label">Identification mark 1</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input name="business_name"
                                                    class="form-control form-control-lg form-control-solid" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="col-lg-4 mb-5">
                                                <!--begin::Label-->
                                                <label class="form-label">Identification mark 2</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input name="business_name"
                                                    class="form-control form-control-lg form-control-solid" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="col-lg-4 mb-5">
                                                <!--begin::Label-->
                                                <label class="form-label">Family Doctor Name</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input name="business_name"
                                                    class="form-control form-control-lg form-control-solid" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="col-lg-4 mb-5">
                                                <!--begin::Label-->
                                                <label class="form-label">Family Doctor Contact No</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input name="business_name"
                                                    class="form-control form-control-lg form-control-solid" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->



                                            <div class="mb-5 col-lg-4 fv-row">

                                                <div class="DA_holder question">
                                                    <div class="fw-bold me-5">
                                                        <label class="fs-6">Disease Allergy</label>
                                                    </div>

                                                    <div
                                                        class="DA_holder DA_radio_holder d-block mt-5 align-items-center cstm-zeed">
                                                        <label
                                                            class="form-check form-check-custom form-check-solid me-10">
                                                            <input class="form-check-input h-20px w-20px radio-btn"
                                                                type="radio" name="question1" id="question1"
                                                                value="yes" />
                                                            <span class="form-check-label fw-bold fl">Yes</span>
                                                        </label>
                                                        <label
                                                            class="form-check form-check-custom form-check-solid me-10">
                                                            <input class="form-check-input h-20px w-20px radio-btn"
                                                                type="radio" name="question1" id="question1"
                                                                value="no" />
                                                            <span class="form-check-label fw-bold f1">No</span>
                                                        </label>
                                                    </div>

                                                </div>

                                                <!--Show on Yes -->
                                                <div class="DA_holder textField">
                                                    <!--begin::Input group-->
                                                    <div class="col-lg-12 mb-5">
                                                        <!--begin::Label-->
                                                        <label class="form-label"> </label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input name="business_name"
                                                            class="form-control form-control-lg form-control-solid" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="col-lg-12 mb-5">
                                                        <div class="form-group row">
                                                            <label class="col-lg-12 col-form-label text-lg-right">Upload
                                                                File:</label>
                                                            <div class="col-lg-12">
                                                                <div class="uppy" id="kt_uppy_5">
                                                                    <div class="uppy-wrapper">
                                                                        <div class="uppy-Root uppy-FileInput-container">
                                                                            <input
                                                                                class="uppy-FileInput-input uppy-input-control"
                                                                                style="" type="file"
                                                                                name="files[]" multiple=""
                                                                                id="kt_uppy_5_input_control"><label
                                                                                class="uppy-input-label btn btn-light-primary btn-sm btn-bold"
                                                                                for="kt_uppy_5_input_control">Attach
                                                                                files</label></div><span
                                                                            class="form-text text-dark">Maximum file size
                                                                            1MB</span>
                                                                    </div>
                                                                    <div class="uppy-list"></div>
                                                                    <div class="uppy-status">
                                                                        <div class="uppy-Root uppy-StatusBar is-waiting"
                                                                            aria-hidden="true" dir="ltr">
                                                                            <div class="uppy-StatusBar-progress"
                                                                                style="width: 0%;" role="progressbar"
                                                                                aria-valuemin="0" aria-valuemax="100"
                                                                                aria-valuenow="0"></div>
                                                                            <div class="uppy-StatusBar-actions"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uppy-informer uppy-informer-min">
                                                                        <div class="uppy uppy-Informer"
                                                                            aria-hidden="true">
                                                                            <p role="alert"> </p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                            </div>


                                            <div class="mb-5 col-lg-4 fv-row">

                                                <div class="DA_holder question">
                                                    <div class="fw-bold me-5">
                                                        <label class="fs-6">Differently abled</label>
                                                    </div>

                                                    <div
                                                        class="DA_holder DA_radio_holder d-block mt-5 align-items-center cstm-zeed">
                                                        <label
                                                            class="form-check form-check-custom form-check-solid me-10">
                                                            <input class="form-check-input h-20px w-20px radio-btn"
                                                                type="radio" name="question1" id="question1"
                                                                value="yes" />
                                                            <span class="form-check-label fw-bold fl">Yes</span>
                                                        </label>
                                                        <label
                                                            class="form-check form-check-custom form-check-solid me-10">
                                                            <input class="form-check-input h-20px w-20px radio-btn"
                                                                type="radio" name="question1" id="question1"
                                                                value="no" />
                                                            <span class="form-check-label fw-bold f1">No</span>
                                                        </label>
                                                    </div>

                                                </div>

                                                <!--Show on Yes -->
                                                <div class="DA_holder textField">
                                                    <!--begin::Input group-->
                                                    <div class="col-lg-12 mb-5">
                                                        <!--begin::Label-->
                                                        <label class="form-label"> </label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input name="business_name"
                                                            class="form-control form-control-lg form-control-solid" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="col-lg-12 mb-5">
                                                        <div class="form-group row">
                                                            <label class="col-lg-12 col-form-label text-lg-right">Upload
                                                                File:</label>
                                                            <div class="col-lg-12">
                                                                <div class="uppy" id="kt_uppy_5">
                                                                    <div class="uppy-wrapper">
                                                                        <div class="uppy-Root uppy-FileInput-container">
                                                                            <input
                                                                                class="uppy-FileInput-input uppy-input-control"
                                                                                style="" type="file"
                                                                                name="files[]" multiple=""
                                                                                id="kt_uppy_5_input_control"><label
                                                                                class="uppy-input-label btn btn-light-primary btn-sm btn-bold"
                                                                                for="kt_uppy_5_input_control">Attach
                                                                                files</label></div><span
                                                                            class="form-text text-dark">Maximum file size
                                                                            1MB</span>
                                                                    </div>
                                                                    <div class="uppy-list"></div>
                                                                    <div class="uppy-status">
                                                                        <div class="uppy-Root uppy-StatusBar is-waiting"
                                                                            aria-hidden="true" dir="ltr">
                                                                            <div class="uppy-StatusBar-progress"
                                                                                style="width: 0%;" role="progressbar"
                                                                                aria-valuemin="0" aria-valuemax="100"
                                                                                aria-valuenow="0"></div>
                                                                            <div class="uppy-StatusBar-actions"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uppy-informer uppy-informer-min">
                                                                        <div class="uppy uppy-Informer"
                                                                            aria-hidden="true">
                                                                            <p role="alert"> </p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                            </div>
                                            <!--end::Input group-->








                                        </div>







                                        <div class="tble-fnton card mt-0 mb-5 mb-xl-8">
                                            <!--begin::Header-->
                                            <div class="card-header border-0 pt-0">
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bolder fs-3 mb-1">Medical remarks</span>
                                                </h3>

                                                <button id="kt_new_family1_toggle"
                                                    class="engage-demos-toggle btn btn-flex h-35px bg-body btn-color-gray-700 btn-active-color-gray-900 shadow-sm fs-6 px-4 rounded-top-0 mt-5"
                                                    title="Click Here to add More" data-bs-toggle="tooltip"
                                                    data-bs-placement="left" data-bs-dismiss="click"
                                                    data-bs-trigger="hover">
                                                    <span id="kt_engage_demos_label"><span class="svg-icon svg-icon-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="11.364" y="20.364"
                                                                    width="16" height="2" rx="1"
                                                                    transform="rotate(-90 11.364 20.364)"
                                                                    fill="currentColor"></rect>
                                                                <rect x="4.36396" y="11.364" width="16"
                                                                    height="2" rx="1" fill="currentColor">
                                                                </rect>
                                                            </svg>
                                                        </span> Add New</span>
                                                </button>
                                                <!--begin::Help drawer-->
                                                <div id="kt_help" class="bg-body" data-kt-drawer="true"
                                                    data-kt-drawer-name="help" data-kt-drawer-activate="true"
                                                    data-kt-drawer-overlay="true"
                                                    data-kt-drawer-width="{default:'350px', 'md': '725px'}"
                                                    data-kt-drawer-direction="end"
                                                    data-kt-drawer-toggle="#kt_new_family1_toggle"
                                                    data-kt-drawer-close="#kt_help_close">
                                                    <!--begin::Card-->
                                                    <div class="card shadow-none rounded-0 w-100">
                                                        <!--begin::Header-->
                                                        <div class="card-header" id="kt_help_header">
                                                            <h5 class="card-title fw-bold text-gray-600">Add your Medical
                                                                Details Details</h5>
                                                            <div class="card-toolbar">
                                                                <button type="button"
                                                                    class="btn btn-sm btn-icon explore-btn-dismiss me-n5"
                                                                    id="kt_help_close">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                                    <span class="svg-icon svg-icon-2">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.5" x="6"
                                                                                y="17.3137" width="16"
                                                                                height="2" rx="1"
                                                                                transform="rotate(-45 6 17.3137)"
                                                                                fill="currentColor" />
                                                                            <rect x="7.41422" y="6"
                                                                                width="16" height="2"
                                                                                rx="1"
                                                                                transform="rotate(45 7.41422 6)"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <!--end::Header-->

                                                        <!--begin::Body-->
                                                        <div class="card-body p-5" id="kt_help_body">
                                                            <div class="row">

                                                                <!--begin::Input group-->
                                                                <div class="col-lg-6 mb-5">
                                                                    <label class="required fs-6 fw-bold mb-2">Date</label>
                                                                    <!--begin::Input-->
                                                                    <div
                                                                        class="position-relative d-flex align-items-center">
                                                                        <!--begin::Icon-->
                                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                                                        <span
                                                                            class="svg-icon svg-icon-2 position-absolute mx-4">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path opacity="0.3"
                                                                                    d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                                                                    fill="currentColor" />
                                                                                <path
                                                                                    d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                                                                    fill="currentColor" />
                                                                                <path
                                                                                    d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                                                                    fill="currentColor" />
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                        <!--end::Icon-->
                                                                        <!--begin::Datepicker-->
                                                                        <input
                                                                            class="form-control form-control-solid ps-12"
                                                                            placeholder="Select a date"
                                                                            name="due_date" />
                                                                        <!--end::Datepicker-->
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                                <!--end::Input group-->



                                                                <!--begin::Input group-->
                                                                <div class="col-lg-6 mb-5">
                                                                    <div class="form-group row">
                                                                        <label
                                                                            class="col-lg-12 col-form-label text-lg-right">Upload
                                                                            File:</label>
                                                                        <div class="col-lg-12">
                                                                            <div class="uppy" id="kt_uppy_5">
                                                                                <div class="uppy-wrapper">
                                                                                    <div
                                                                                        class="uppy-Root uppy-FileInput-container">
                                                                                        <input
                                                                                            class="uppy-FileInput-input uppy-input-control"
                                                                                            style=""
                                                                                            type="file"
                                                                                            name="files[]"
                                                                                            multiple=""
                                                                                            id="kt_uppy_5_input_control"><label
                                                                                            class="uppy-input-label btn btn-light-primary btn-sm btn-bold"
                                                                                            for="kt_uppy_5_input_control">Attach
                                                                                            files</label></div><span
                                                                                        class="form-text text-dark">Maximum
                                                                                        file size 1MB</span>
                                                                                </div>
                                                                                <div class="uppy-list"></div>
                                                                                <div class="uppy-status">
                                                                                    <div class="uppy-Root uppy-StatusBar is-waiting"
                                                                                        aria-hidden="true"
                                                                                        dir="ltr">
                                                                                        <div class="uppy-StatusBar-progress"
                                                                                            style="width: 0%;"
                                                                                            role="progressbar"
                                                                                            aria-valuemin="0"
                                                                                            aria-valuemax="100"
                                                                                            aria-valuenow="0"></div>
                                                                                        <div
                                                                                            class="uppy-StatusBar-actions">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="uppy-informer uppy-informer-min">
                                                                                    <div class="uppy uppy-Informer"
                                                                                        aria-hidden="true">
                                                                                        <p role="alert"> </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--end::Input group-->

                                                                <div class="col-lg-12 mb-5">
                                                                    <!--end::Label-->
                                                                    <label class="form-label">Reason</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <textarea name="business_description" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
                                                                    <!--end::Input-->
                                                                </div>
                                                                <!--end::Input group-->





                                                                <div class="d-flex flex-stack pt-5">
                                                                    <!--begin::Wrapper-->
                                                                    <div>
                                                                        <button type="button"
                                                                            class="btn btn-lg btn-primary me-3 d-inline-block"
                                                                            data-kt-stepper-action="submit">
                                                                            <span class="indicator-label">Add
                                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                                <span
                                                                                    class="svg-icon svg-icon-3 ms-2 me-0">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none">
                                                                                        <rect opacity="0.5"
                                                                                            x="18"
                                                                                            y="13"
                                                                                            width="13"
                                                                                            height="2"
                                                                                            rx="1"
                                                                                            transform="rotate(-180 18 13)"
                                                                                            fill="currentColor"></rect>
                                                                                        <path
                                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg>
                                                                                </span>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                            <span class="indicator-progress">Please
                                                                                wait...
                                                                                <span
                                                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                                        </button>
                                                                    </div>
                                                                    <!--end::Wrapper-->
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <!--end::Body-->
                                                    </div>
                                                    <!--end::Card-->
                                                </div>
                                                <!--end::Help drawer-->
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div class="card-body py-3">
                                                <!--begin::Table container-->
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table
                                                        class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                                                        <!--begin::Table head-->
                                                        <thead>
                                                            <tr class="fw-bolder text-muted">
                                                                <th class="min-w-50px">Date</th>
                                                                <th class="min-w-120px">Reason</th>
                                                                <th class="min-w-120px">View File</th>
                                                                <th class="min-w-120px text-end">Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <!--end::Table head-->
                                                        <!--begin::Table body-->
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                                    18/09/1993<span
                                                                        class="text-muted fw-bold text-muted d-block fs-7">Age
                                                                        - 30</span></td>

                                                                <td class="text-dark fw-bolder text-hover-primary fs-6">
                                                                    Profession</td>
                                                                <td class="text-dark fw-bolder text-hover-primary fs-6"><a
                                                                        href="">Download File </a></td>

                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                        <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                                        <span class="svg-icon svg-icon-3">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path opacity="0.3"
                                                                                    d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                                    fill="currentColor" />
                                                                                <path
                                                                                    d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                                    fill="currentColor" />
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                                        <span class="svg-icon svg-icon-3">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path
                                                                                    d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                                    fill="currentColor" />
                                                                                <path opacity="0.5"
                                                                                    d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                                    fill="currentColor" />
                                                                                <path opacity="0.5"
                                                                                    d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                                    fill="currentColor" />
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <!--end::Table body-->
                                                    </table>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Table container-->
                                            </div>
                                            <!--begin::Body-->
                                        </div>
                                        <!--end::Tables Widget 13-->







                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::Pricing-->


                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Step 6-->





                    <!--begin::Step 7-->
                    <div data-kt-stepper-element="content">
                        <!--begin::Wrapper-->
                        <div class="w-100">

                            <!--begin::Pricing-->
                            <div class="card card-flush py-0">
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="pt-0">
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row" id="kt_ecommerce_add_product_discount_percentage">




                                        <!--end::Heading-->
                                        <div class="row">




                                            <div class="row">
                                                <div class="col-md-12 fv-row mt-10 mb-5">
                                                    <!--begin::Heading-->
                                                    <div class="pb-5 pb-lg-5">
                                                        <!--begin::Title-->
                                                        <h2 class="fw-bolder text-dark">Appointment Details</h2>
                                                        <!--end::Title-->
                                                    </div>
                                                </div>
                                            </div>


                                            <!--begin::Input group-->
                                            <div class="col-lg-4 mb-5">
                                                <!--begin::Label-->
                                                <label class="form-label required"> Category of Staff </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <select name="business_type"
                                                    class="form-select form-select-lg form-select-solid"
                                                    data-control="select2" data-placeholder="Select Type"
                                                    data-allow-clear="true" data-hide-search="true">
                                                    <option></option>
                                                    <option value="1">Confirmed Staff</option>
                                                    <option value="1">Probation Staff</option>
                                                    <option value="1">Entry Level Staff</option>
                                                    <option value="1">Temporary staff</option>
                                                    <option value="1">Contract Staff</option>
                                                </select>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->


                                            <!--begin::Input group-->
                                            <div class="col-lg-4 mb-5">
                                                <!--begin::Label-->
                                                <label class="form-label required">Nature of Employment</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <select name="business_type"
                                                    class="form-select form-select-lg form-select-solid"
                                                    data-control="select2" data-placeholder="Select Type"
                                                    data-allow-clear="true" data-hide-search="true">
                                                    <option></option>
                                                    <option value="1">Formal Education</option>
                                                    <option value="1">Informal Education</option>
                                                    <option value="1">Nonformal Education</option>
                                                </select>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->


                                            <!--begin::Input group-->
                                            <div class="col-lg-4 mb-5">
                                                <!--begin::Label-->
                                                <label class="form-label required"> Teaching Type </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <select name="business_type"
                                                    class="form-select form-select-lg form-select-solid"
                                                    data-control="select2" data-placeholder="Select Type"
                                                    data-allow-clear="true" data-hide-search="true">
                                                    <option></option>
                                                    <option value="1">Teaching</option>
                                                    <option value="1">Non-Teaching</option>
                                                </select>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->


                                            <!--begin::Input group-->
                                            <div class="col-lg-4 mb-5">
                                                <!--begin::Label-->
                                                <label class="form-label required"> Place of Work </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <select name="business_type"
                                                    class="form-select form-select-lg form-select-solid"
                                                    data-control="select2" data-placeholder="Select Type"
                                                    data-allow-clear="true" data-hide-search="true">
                                                    <option></option>
                                                    <option value="1">Place - 1</option>
                                                    <option value="1">Place - 2</option>
                                                    <option value="1">Place - 3</option>
                                                    <option value="1">Place - 4</option>
                                                    <option value="1">Place - 5</option>
                                                </select>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->

                                            <div class="col-md-4 fv-row mb-5">
                                                <label class="required fs-6 fw-bold mb-2">Date of Joining</label>
                                                <!--begin::Input-->
                                                <div class="position-relative d-flex align-items-center">
                                                    <!--begin::Icon-->
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                                    <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <!--end::Icon-->
                                                    <!--begin::Datepicker-->
                                                    <input class="form-control form-control-solid ps-12"
                                                        placeholder="Select a date" name="due_date" />
                                                    <!--end::Datepicker-->
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <!--begin::Input group-->
                                            <div class="col-lg-4 mb-5">
                                                <!--begin::Label-->
                                                <label class="form-label required">Salary Scale(for appointment order
                                                    purpose and not for salary calculation)</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input name="business_name"
                                                    class="form-control form-control-lg form-control-solid" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="col-lg-4 mb-5">
                                                <!--begin::Label-->
                                                <label class="form-label required">Period of Appointment (From)</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input name="business_name"
                                                    class="form-control form-control-lg form-control-solid" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="col-lg-4 mb-5">
                                                <!--begin::Label-->
                                                <label class="form-label required">Period of Appointment (To)</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input name="business_name"
                                                    class="form-control form-control-lg form-control-solid" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Input group-->
                                            <div class="col-lg-4 mb-5">
                                                <!--begin::Label-->
                                                <label class="form-label required">Appointment order model</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <select name="business_type"
                                                    class="form-select form-select-lg form-select-solid"
                                                    data-control="select2" data-placeholder="Select Type"
                                                    data-allow-clear="true" data-hide-search="true">
                                                    <option></option>
                                                    <option value="1">Model - 1</option>
                                                    <option value="1">Model - 2</option>
                                                    <option value="1">Model - 3</option>
                                                    <option value="1">Model - 4</option>
                                                    <option value="1">Model - 5</option>
                                                    <option value="1">Model - 6</option>
                                                </select>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-5 col-lg-4 fv-row">
                                                <!--begin::Wrapper-->
                                                <div class="d-inline-block flex-stack">

                                                    <!--begin::Checkboxes-->
                                                    <!--begin::Label-->
                                                    <div class="fw-bold me-5">
                                                        <label class="fs-6">probation</label>
                                                    </div>
                                                    <!--end::Label-->
                                                    <div class="d-block mt-5 align-items-center cstm-zeed">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-custom form-check-solid me-10">
                                                            <input class="form-check-input h-20px w-20px" type="radio"
                                                                name="communication[]" value="Male" />
                                                            <span class="form-check-label fw-bold">Yes</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-custom form-check-solid me-10">
                                                            <input class="form-check-input h-20px w-20px" type="radio"
                                                                name="communication[]" value="Female" />
                                                            <span class="form-check-label fw-bold">No</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Checkboxes-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Input group-->

                                            <!--begin::Col-->
                                            <div class="col-md-4 fv-row">
                                                <!--begin::Label-->
                                                <label class="required fs-6 fw-bold form-label mb-2">Upload
                                                    Appointment</label>
                                                <!--end::Label-->
                                                <!--begin::Row-->
                                                <div class="row fv-row">
                                                    <!--begin::Col-->
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <label class="col-lg-3 col-form-label text-lg-right">Upload
                                                                File:</label>
                                                            <div class="col-lg-6">
                                                                <div class="uppy" id="kt_uppy_5">
                                                                    <div class="uppy-wrapper">
                                                                        <div class="uppy-Root uppy-FileInput-container">
                                                                            <input
                                                                                class="uppy-FileInput-input uppy-input-control"
                                                                                style="" type="file"
                                                                                name="files[]" multiple=""
                                                                                id="kt_uppy_5_input_control"><label
                                                                                class="uppy-input-label btn btn-light-primary btn-sm btn-bold"
                                                                                for="kt_uppy_5_input_control">Attach
                                                                                files</label></div><span
                                                                            class="form-text text-dark">Maximum file size
                                                                            1MB</span>
                                                                    </div>
                                                                    <div class="uppy-list"></div>
                                                                    <div class="uppy-status">
                                                                        <div class="uppy-Root uppy-StatusBar is-waiting"
                                                                            aria-hidden="true" dir="ltr">
                                                                            <div class="uppy-StatusBar-progress"
                                                                                style="width: 0%;" role="progressbar"
                                                                                aria-valuemin="0" aria-valuemax="100"
                                                                                aria-valuenow="0"></div>
                                                                            <div class="uppy-StatusBar-actions"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="uppy-informer uppy-informer-min">
                                                                        <div class="uppy uppy-Informer"
                                                                            aria-hidden="true">
                                                                            <p role="alert"> </p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-4">
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-4">
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->
                                            </div>
                                            <!--end::Col-->






                                        </div>






                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::Pricing-->


                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Step 7-->





                    <!--begin::Actions-->
                    <div class="d-flex flex-stack pt-15">
                        <!--begin::Wrapper-->
                        <div class="mr-2">
                            <button type="button" class="btn btn-lg btn-light-primary me-3"
                                data-kt-stepper-action="previous">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                                <span class="svg-icon svg-icon-4 me-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="11" width="13"
                                            height="2" rx="1" fill="currentColor" />
                                        <path
                                            d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->Previous
                            </button>
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Wrapper-->
                        <div>
                            <button type="button" class="btn btn-lg btn-primary me-3"
                                data-kt-stepper-action="submit">
                                <span class="indicator-label">Save as Draft
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                    <span class="svg-icon svg-icon-3 ms-2 me-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="18" y="13" width="13"
                                                height="2" rx="1" transform="rotate(-180 18 13)"
                                                fill="currentColor" />
                                            <path
                                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <button type="button" class="btn btn-lg btn-primary me-3"
                                data-kt-stepper-action="submit">
                                <span class="indicator-label">Save
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                    <span class="svg-icon svg-icon-3 ms-2 me-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="18" y="13" width="13"
                                                height="2" rx="1" transform="rotate(-180 18 13)"
                                                fill="currentColor" />
                                            <path
                                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Actions-->
                </form>

                <div class="d-flex flex-stack pt-15">
                    <!--begin::Wrapper-->
                    <div class="mr-2">

                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Wrapper-->
                    <div>


                        <button type="button" class="btn btn-lg btn-primary"
                            (click)="getFormData(personalInfo.value)">Next
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="18" y="13" width="13"
                                        height="2" rx="1" transform="rotate(-180 18 13)"
                                        fill="currentColor" />
                                    <path
                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                    </div>
                    <!--end::Wrapper-->
                </div>
            @show
        </div>
    </div>
</div>
@endsection

@push('styles')
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css"> --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">

@endpush
@push('scripts')
<script src="{{ asset('asset/js/plugins/plugins.bundle.js') }}"></script>
<script src="{{ asset('asset/js/plugins/tamil-search.js') }}"></script>
<script src="{{ asset('asset/js/plugins/tamil-keyboard.js') }}"></script>
<script src="{{ asset('asset/js/plugins/formrepeater.bundle.js') }}"></script>
<script src="{{ asset('asset/js/plugins/create-account.js') }}"></script>
<script src="{{ asset('asset/js/plugins/save-product.js') }}"></script>
<script src="{{ asset('asset/js/plugins/new-target.js') }}"></script>

{{-- <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
         var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
            removeItemButton: true,
            maxItemCount:12,
            searchResultLimit:12,
            renderChoiceLimit:12
          }); 
     });
      </script>
      <script>
          $(document).ready(function(){
              $('#content').on('keydown',function(event){
                  if(event.which==121){
                      $(this).toggleClass('tamil');
                      return false;
                  }
                  if($(this).hasClass('tamil')){
                      toggleKBMode(event);
                  }else{
                      return true;
                  }
              });
              $('#content').on('keypress',function(event){
                  if($(this).hasClass('tamil')){
                      convertThis(event);
                  }
              });
          });
      </script>
  <script>
  $(".DA_radio_holder .radio-btn").change(function() {
  $(this).closest(".question").next().toggle(this.value === 'yes');
});
  </script>	
@endpush
