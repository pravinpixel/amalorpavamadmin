
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <title>Document</title>
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="{{ asset('asset/css/plugins/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" /> 
    <link href="{{ asset('asset/css/plugins/datatables.bundle.css') }}" rel="stylesheet" type="text/css" /> 
    <link href="{{ asset('asset/css/plugins/plugins.bundle.css') }}" rel="stylesheet" type="text/css" /> 
    <link href="{{ asset('asset/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" integrity="sha512-vebUliqxrVkBy3gucMhClmyQP9On/HAWQdKDXRaAlb/FKuTbxkjPKUyqVOxAcGwFDka79eTF+YXwfke1h3/wfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/font-awesome-line-awesome/css/all.min.css" integrity="sha512-dC0G5HMA6hLr/E1TM623RN6qK+sL8sz5vB+Uc68J7cBon68bMfKcvbkg6OqlfGHo1nMmcCxO5AinnRTDhWbWsA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="../../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @stack('styles')
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&amp;l='+l:'';j.async=true;j.src= '../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-5FS8GGP');</script>

</head>
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">

    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript> 
    <div class="d-flex flex-column flex-root"> 
        
        <div class="page d-flex flex-row flex-column-fluid"> 
            @include('page-organs.sidenav') 
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper"> 
               @include('page-organs.top-bar')
               @include('page-organs.header') 
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Toolbar-->
                    <div class="toolbar" id="kt_toolbar">
                        <!--begin::Container-->
                        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                            <!--begin::Page title-->
                           @include('page-organs.page-title')
                            <!--end::Page title-->
                            <!--begin::Actions-->
                            
                            <!--end::Actions-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Post-->
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <!--begin::Container-->
                        <div id="kt_content_container" class="container-xxl">
                            {{-- page content starts --}}
                            @section('main')
                            @include('pages.dashboard')
                            @show
                        </form>

                            {{-- page content ends --}}
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Post-->
                </div> 
                @include('page-organs.footer')
            </div>
        </div> 
    </div>
    @include('page-organs.models.help-model') 
   @include('page-organs.right-float-menu') 
    












    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('asset/js/plugins/scripts.bundle.js') }}"></script> 
    <script src="{{ asset('asset/js/plugins/fullcalendar.bundle.js') }}"></script> 
    <script src="{{ asset('asset/js/plugins/datatables.bundle.js') }}"></script> 
    <script src="{{ asset('asset/js/plugins/widgets.bundle.js') }}"></script> 
    <script src="{{ asset('asset/js/plugins/widgets.js') }}"></script> 
    <script src="{{ asset('asset/js/plugins/chat.js') }}"></script> 
    <script src="{{ asset('asset/js/plugins/intro.js') }}"></script> 
    <script src="{{ asset('asset/js/plugins/upgrade-plan.js') }}"></script> 
    <script src="{{ asset('asset/js/plugins/create-app.js') }}"></script> 
    <script src="{{ asset('asset/js/plugins/users-search.js') }}"></script> 
    <script src="https://kit.fontawesome.com/b4a78f0fac.js" crossorigin="anonymous"></script>
    @stack('scripts')
</body>
</html>