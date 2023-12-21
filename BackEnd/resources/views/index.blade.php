@include('../components/header');
<div class="wrapper">
    <div class="wrapper-box">
        @include('../components/sidebar');
        <div class="content">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 2xl:col-span-9">
                    <div class="grid grid-cols-12 gap-6">
                        @include('../components/notif')
                        @include('../components/report')
                        @include('../components/notes')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('../components/footer');