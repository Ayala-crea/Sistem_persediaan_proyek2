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
                                Data Barang masuk
                            </h2>
                        </div>
                        <form action="{{ route('addcategorybarang.simpan') }}" method="post">
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
                                    {{-- <div>
                                        <label for="barangs" class="form-label">barang</label>
                                        <input id="barangs" name="barangs" type="number" class="form-control" placeholder="id barang">
                                    </div> --}}
                                    <br>
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
                                    {{-- <div>
                                        <label for="suppliers" class="form-label">supplier</label>
                                        <input id="suppliers" name="suppliers" type="number" class="form-control" placeholder="id supply">
                                    </div> --}}
                                    <br>
                                    <label for="">Nama Supplier</label>
                                    <div>
                                        <select name="suppliers" id="suppliers">
                                            <option value="">Select Supplier</option>
                                            @foreach ($namaSupplier as $index => $item)
                                                <option value="{{ $index + 1 }}">
                                                {{ $item }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <br>
                                    <div>
                                        <label for="harga_beli" class="form-label">harga Beli</label>
                                        <input id="harga_beli" name="harga_beli" type="number" class="form-control" placeholder="Berapa Harga-Nya">
                                    </div>
                                    <br>
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


