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
                                Data Barang masuk
                            </h2>
                        </div>
                        <form action="{{ route('barangmasuk.tambah.simpan') }}" method="post">
                            @csrf
                            <div id="input" class="p-5">
                                <div class="preview">
                                    <div>
                                        <label for="jumlahBarangMasuk" class="form-label">jumlah barang masuk</label>
                                        <input id="jumlahBarangMasuk" name="jumlahBarangMasuk" type="number" class="form-control" placeholder="berapa">
                                    </div>
                                    <div>
                                        <label for="tanggal_masuk" class="form-label">tanggal masuk</label>
                                        <input id="tanggal_masuk" name="tanggal_masuk" type="date" class="form-control" placeholder="tanggal berapa">
                                    </div>
                                    <div>
                                        <label for="barangs" class="form-label">barang</label>
                                        <input id="barangs" name="barangs" type="number" class="form-control" placeholder="id barang">
                                    </div>
                                    <div>
                                        <label for="staffs" class="form-label">staff</label>
                                        <input id="staffs" name="staffs" type="number" class="form-control" placeholder="id staff">
                                    </div>
                                    <div>
                                        <label for="suppliers" class="form-label">supplier</label>
                                        <input id="suppliers" name="suppliers" type="number" class="form-control" placeholder="id supply">
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


