@include('staff/components/header');
<div class="wrapper">
    <div class="wrapper-box">
        @include('staff/components/sidebar');
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
                                Data Barang Keluar
                            </h2>
                        </div>
                        <form action="{{ route('simpan.barangkeluar') }}" method="post">
                            @csrf
                            <div id="input" class="p-5">
                                <div class="preview">
                                    <div>
                                        <label for="jumlahBarangKeluar" class="form-label">STOK KELUAR</label>
                                        <input id="jumlahBarangKeluar" name="jumlahBarangKeluar" type="number" class="form-control" placeholder="JUMLAH KELUAR">
                                    </div>
                                    <div>
                                        <label for="tanggal_keluar" class="form-label">TANGGAL</label>
                                        <input id="tanggal_keluar" name="tanggal_keluar" type="date" class="form-control" placeholder="tanggal keluar">
                                    </div>
                                    <div>
                                        <label for="harga_jual" class="form-label">Harga Jual</label>
                                        <input id="harga_jual" name="harga_jual" type="number" class="form-control" placeholder="Penjualan">
                                    </div>
                                    <label for="barangs">Nama Barang</label>
                                    <div>
                                        <select name="barangs" id="barangs">
                                            <option value="">Select Barang</option>
                                            @foreach ($namaBarang as $index => $item)
                                                <option value="{{ $index + 1 }}">
                                                {{ $item }}
                                                </option>
                                            @endforeach
                                        </select>
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

@include('staff/components/footer');


