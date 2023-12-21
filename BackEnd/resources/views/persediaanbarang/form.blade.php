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
                                Data Persediaan Barang
                            </h2>
                        </div>
                        <form action="{{ route('persediaanbarang.tambah.simpan') }}" method="post">
                            @csrf
                            <div id="input" class="p-5">
                                <div class="preview">
                                    <div>
                                        <label for="jumlahStok" class="form-label">jumlah stok</label>
                                        <input id="jumlahStok" name="jumlahStok" type="number" class="form-control" placeholder="berapa">
                                    </div>
                                    <div>
                                        <label for="tanggal_update" class="form-label">tanggal</label>
                                        <input id="tanggal_update" name="tanggal_update" type="date" class="form-control" placeholder="tanggal berapa">
                                    </div>
                                    <div>
                                        <label for="barang" class="form-label">barang</label>
                                        <input id="barang" name="barang" type="number" class="form-control" placeholder="id barang">
                                    </div>
                                    <div>
                                        <label for="staff" class="form-label">staff</label>
                                        <input id="staff" name="staff" type="number" class="form-control" placeholder="id staff">
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


