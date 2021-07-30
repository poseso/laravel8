@extends('layouts.base')

@section('content')
    @include('includes.partials.general._loader')

    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            @include('includes.partials._aside')

            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                @include('includes.partials._header')

                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    @include('includes.partials.toolbars._toolbar1')

                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        @include('includes.partials._content')
                    </div>
                </div>

                @include('includes.partials._footer')
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>

    @include('includes.partials.topbar._activity-drawer')
    @include('includes.partials.drawers._chat')
    @include('includes.partials.drawers._explore-main')
@endsection
