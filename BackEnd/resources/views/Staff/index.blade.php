@include('../components/header');
<div class="wrapper">
    <div class="wrapper-box">
        @include('../components/sidebar');
        <div class="content">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 2xl:col-span-9">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                            <table class="table table-report -mt-2">
                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap">USERNAME</th>
                                        <th class="text-center whitespace-nowrap">NAMA STAFF</th>
                                        <th class="text-center whitespace-nowrap">ROLE STAFF</th>
                                        <th class="text-center whitespace-nowrap">STATUS</th>
                                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Staffs as $item)
                                    <tr class="intro-x">
                                        <td>
                                            <a href="" class="font-medium whitespace-nowrap">{{ $item->username }}</a> 
                                        </td>
                                        <td class="text-center">{{ $item->nama_lengkap }}</td>
                                        <td class="text-center">staff</td>
                                        <td class="w-40">
                                            <div class="flex items-center justify-center text-success"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                                        </td>
                                        <td class="table-report__action w-56">
                                            <div class="flex justify-center items-center">
                                                <a class="flex items-center mr-3" href="javascript:;"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                                <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                            </div>
                                        </td>
                                    </tr>                                       
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('../components/footer');