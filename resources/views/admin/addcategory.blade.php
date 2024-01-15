@extends('admin.components.template')

@section('page-title')
    add-Categories | Menu
@endsection

@section('content')
    <div class="content">
        <div class="container">
            <!-- BEGIN: Product Information -->
            <div class="intro-y box p-5 mt-5">
                <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                    <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                        <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Category Information
                    </div>
                    <div class="mt-5">
                        <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                            <div class="form-label xl:w-64 xl:!mr-10">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Category Name</div>
                                    </div>
                            </div>
                            <div class="w-full mt-3 xl:mt-0 flex-1">
                                <input id="Category_name" name="Category_name" for="Category_name" type="text" class="form-control" placeholder="Category name">
                                <div class="form-help text-right">Maximum character 0/70</div>
                            </div>
                        </div>
                        <div class="flex justify-end mt-5">
                            <button form="submit" type="button" class="btn py-3 btn-primary w-full md:w-52">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Product Information -->
        </div>
    </div>
@endsection
