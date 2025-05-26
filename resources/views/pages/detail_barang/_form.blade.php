<div class="mb-3">
    <label for="nama_barang" class="form-label">Nama Barang</label>
    <input type="text" name="nama_barang" id="nama_barang" class="form-control"
        value="{{ old('nama_barang', $barang->nama_barang ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="merk" class="form-label">Merk</label>
    <input type="text" name="merk" id="merk" class="form-control"
        value="{{ old('merk', $barang->merk ?? '') }}">
</div>

<div class="mb-3">
    <label for="plat_nomor" class="form-label">Plat Nomor</label>
    <input type="text" name="plat_nomor" id="plat_nomor" class="form-control"
        value="{{ old('plat_nomor', $barang->plat_nomor ?? '') }}">
</div>

<div class="mb-3">
    <label for="warna" class="form-label">Warna</label>
    <input type="text" name="warna" id="warna" class="form-control"
        value="{{ old('warna', $barang->warna ?? '') }}">
</div>

<div class="mb-3">
    <label for="status_barang" class="form-label">Status Barang</label>
    <select name="status_barang" id="status_barang" class="form-select">
        <option value="aktif" {{ old('status_barang', $barang->status_barang ?? '') == 'aktif' ? 'selected' : '' }}>Aktif</option>
        <option value="non-aktif" {{ old('status_barang', $barang->status_barang ?? '') == 'non-aktif' ? 'selected' : '' }}>Non-Aktif</option>
    </select>
</div>

<div class="mb-3">
    <label for="kondisi_barang" class="form-label">Kondisi Barang</label>
    <select name="kondisi_barang" id="kondisi_barang" class="form-select">
        <option value="baik" {{ old('kondisi_barang', $barang->kondisi_barang ?? '') == 'baik' ? 'selected' : '' }}>Baik</option>
        <option value="rusak ringan" {{ old('kondisi_barang', $barang->kondisi_barang ?? '') == 'rusak ringan' ? 'selected' : '' }}>Rusak Ringan</option>
        <option value="rusak berat" {{ old('kondisi_barang', $barang->kondisi_barang ?? '') == 'rusak berat' ? 'selected' : '' }}>Rusak Berat</option>
    </select>
</div>

<div class="mb-3">
    <label for="lokasi" class="form-label">Lokasi</label>
    <input type="text" name="lokasi" id="lokasi" class="form-control"
        value="{{ old('lokasi', $barang->lokasi ?? '') }}">
</div>

<div class="mb-3">
    <label for="tanggal_penerimaan" class="form-label">Tanggal Penerimaan</label>
    <input type="date" name="tanggal_penerimaan" id="tanggal_penerimaan" class="form-control"
        value="{{ old('tanggal_penerimaan', $barang->tanggal_penerimaan ?? '') }}">
</div>

<div class="mb-3">
    <label for="keterangan" class="form-label">Keterangan</label>
    <textarea name="keterangan" id="keterangan" rows="3" class="form-control">{{ old('keterangan', $barang->keterangan ?? '') }}</textarea>
</div>
