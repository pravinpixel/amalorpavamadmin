<div class="stepper-nav mb-5 row">
    <!--begin::Step 1-->
    <div class="stepper-item  col {{ request()->routeIs('staff.create') ? 'current' : null }}">
        <a href="{{ route('staff.create') }}" style="text-decoration: none;color:initial">
            <div class="steppers mr-4 flex-shrink-0 text-center">
                <i class="icon-xl la la-user-check"></i>
            </div>
            <h3 class="stepper-title text-center">Personal Information</h3>
        </a>
    </div>
    <!--end::Step 1-->
    <!--begin::Step 2-->
    <div class="stepper-item  col {{ request()->routeIs('staff.create.basic-info') ? 'current' : null }}">
        <a href="{{ route('staff.create.basic-info') }}" style="text-decoration: none;color:initial">

            <div class="steppers mr-4 flex-shrink-0 text-center">
                <i class="icon-xl la la-edit"></i>
            </div>
            <h3 class="stepper-title text-center">KYC Information</h3>
        </a>
    </div>
    <!--end::Step 2-->
    <!--begin::Step 3-->
    <div class="stepper-item col {{ request()->routeIs('staff.create.emp-position') ? 'current' : null }}">
        <a href="{{ route('staff.create.emp-position') }}" style="text-decoration: none;color:initial"> 

            <div class="steppers mr-4 flex-shrink-0 text-center">
                <i class="icon-xl la la-user-tag"></i>
            </div>
            <h3 class="stepper-title text-center">Employee Position</h3>
        </a>
    </div>
    <!--end::Step 3-->
    <!--begin::Step 4-->
    <div class="stepper-item col {{ request()->routeIs('staff.create.education-quali') ? 'current' : null }}">
        <a href="{{ route('staff.create.education-quali') }}" style="text-decoration: none;color:initial"> 

            <div class="steppers mr-4 flex-shrink-0 text-center">
                <i class="icon-xl la la-book-open"></i>
            </div>
            <h3 class="stepper-title text-center">Education Qualification</h3>
        </a>
    </div>
    <!--end::Step 4-->
    <!--begin::Step 5-->
    <div class="stepper-item col {{ request()->routeIs('staff.create.family-info') ? 'current' : null }}">
        <a href="{{ route('staff.create.family-info') }}" style="text-decoration: none;color:initial"> 

            <div class="steppers mr-4 flex-shrink-0 text-center">
                <i class="icon-xl la la-users"></i>
            </div>
            <h3 class="stepper-title text-center">Family Information</h3>
        </a>
    </div>
    <!--end::Step 5-->
    <!--begin::Step 6-->
    <div class="stepper-item col {{ request()->routeIs('staff.create.medical-info') ? 'current' : null }}">
        <a href="{{ route('staff.create.medical-info') }}" style="text-decoration: none;color:initial"> 

            <div class="steppers mr-4 flex-shrink-0 text-center">
                <i class="icon-xl la la-briefcase-medical"></i>
            </div>
            <h3 class="stepper-title text-center">Medical Information</h3>
        </a>
    </div>
    <!--end::Step 6-->
    <!--begin::Step 7-->
    <div class="stepper-item col {{ request()->routeIs('staff.create.appoinment-info') ? 'current' : null }}">
        <a href="{{ route('staff.create.appoinment-info') }}" style="text-decoration: none;color:initial"> 

            <div class="steppers mr-4 flex-shrink-0 text-center">
                <i class="icon-xl la fab la-wpforms"></i>
            </div>
            <h3 class="stepper-title text-center">Appointment Information</h3>
        </a>
    </div>
    <!--end::Step 7-->
</div>
