@include('staff/components/header');
<div class="wrapper">
    <div class="wrapper-box">
        @include('staff/components/sidebar');
        <div class="content">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 2xl:col-span-9">
                    <div class="grid grid-cols-12 gap-6">
                        @include('staff/components/notif')
                        @include('staff/components/report')
                        @include('staff/components/notes')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('staff/components/footer');