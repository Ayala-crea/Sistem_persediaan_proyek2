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
                                Data Barang 
                            </h2>
                        </div>
                        <form action="{{ isset($DataBarang) ? route('barang.edit.update', $DataBarang->id) : route('barang.tambah.simpan') }}" method="post">
                            @csrf
                            <div id="input" class="p-5">
                                <div class="preview">
                                    <div>
                                        <label for="nama_barang" class="form-label">nama Barang</label>
                                        <input id="nama_barang" name="nama_barang" type="text" class="form-control" placeholder="Nama Barang" value="{{ isset($DataBarang) ? $DataBarang->nama_barang : '' }}">
                                    </div>
                                    <div>
                                        <label for="deskripsi_barang" class="form-label">deskripsi</label>
                                        <input id="deskripsi_barang" name="deskripsi_barang" type="text" class="form-control" placeholder="Nama Barang" value="{{ isset($DataBarang) ? $DataBarang->deskripsi_barang : '' }}">
                                    </div>
                                    <div>
                                        <label for="harga" class="form-label">harga</label>
                                        <input id="harga" name="harga" type="text" class="form-control" placeholder="Harga Barang" value="{{ isset($DataBarang) ? $DataBarang->harga : '' }}">
                                    </div>
                                    <div>
                                        <label for="jumlah_stok" class="form-label">jumlah stok</label>
                                        <input id="jumlah_stok" name="jumlah_stok" type="text" class="form-control" placeholder="Stock Barang" value="{{ isset($DataBarang) ? $DataBarang->jumlah_stok : '' }}">
                                    </div>
                                    <div>
                                        <label for="berat" class="form-label">berat</label>
                                        <input id="berat" name="berat" type="text" class="form-control" placeholder="Stock Barang" value="{{ isset($DataBarang) ? $DataBarang->harga : '' }}">
                                    </div>
                                    <div>
                                        <label for="suppliers" class="form-label">supplier</label>
                                        <input id="suppliers" name="suppliers" type="text" class="form-control" placeholder="Stock Barang" value="{{ isset($DataBarang) ? $DataBarang->suppliers : '' }}">
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


