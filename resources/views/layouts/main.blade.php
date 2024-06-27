<!DOCTYPE html>
<html lang="en">

@include('partial.head')

<body class="theme-1">
    <!-- [ Pre-loader ] start -->
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    @include('partial.sidebar')
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
        @include('partial.header')

    <!-- [ Header ] end -->
</body>

<!-- [ Main Content ] start -->
<div class="dash-container">
    <div class="dash-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h4 class="m-b-10">@yield('page-title')</h4>
                        </div>
                        <ul class="breadcrumb">
                            @yield('bread-crumb')
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @yield('content')
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="commonModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="body">
        </div>
    </div>
</div>
</div>
<!-- [ Main Content ] end -->
@include('partial.footer')
<!-- Warning Section start -->

</body>

</html>
