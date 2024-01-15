@include('../components/header');
<div class="wrapper">
    <div class="wrapper-box">
        @include('../components/sidebar');
        <div class="content">
            <div class="intro-y flex items-center mt-8">
                <h2 class="text-lg font-medium mr-auto">
                    Regular Form
                </h2>
            </div>
            <div class="grid grid-cols-12 gap-6 mt-5">
                <div class="intro-y col-span-12 lg:col-span-6">
                    <div class="intro-x box">
                        <div class="flex sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                            <h2 class="font-medium text-base mr-auto">
                                Data supplier
                            </h2>
                        </div>
                        <form action="{{ route('supplier.tambah.simpan') }}" method="post">
                            @csrf
                            <div id="input" class="p-5">
                                <div class="preview">
                                    <div>
                                        <label for="nama_supplier" class="form-label">nama supplier</label>
                                        <input id="nama_supplier" name="nama_supplier" type="text" class="form-control" placeholder="nama supplier/pabrik">
                                    </div>
                                    <div>
                                        <label for="alamat" class="form-label">Alamat supplier</label>
                                        <input id="alamat" name="alamat" type="text" class="form-control" placeholder="Alamat supplier/pabrik">
                                    </div>
                                    <div>
                                        <label for="kontak_supplier" class="form-label">kontak supplier</label>
                                        <input id="kontak_supplier" name="kontak_supplier" type="number" class="form-control" placeholder="No Handphone/Whatss app">
                                    </div>
                                    <button type="submit" class="btn btn-primary">simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('../components/footer');


