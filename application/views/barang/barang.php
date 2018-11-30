
<!-- START CONTENT -->
<section id="content">
    <!--start container-->
    <div class="container">

        <!-- start data barang -->
        <h4 class="header">Data Barang</h4>
        <div class="divider"></div>
        <div class="row">
            <div class="col s12">
                <div class="col s12 mt-3 mb-3">
                    <a class="btn modal-trigger" data-target="modal1">
                        <i class="material-icons left">add</i> Tambah Barang
                    </a>
                </div>
                <div id="responsive-table">
                    <div class="row">
                        <div class="col s12">
                            <table class="responsive-table">
                                <thead>
                                <th data-field="id">No</th>
                                <th data-field="id">Nama Barang</th>
                                <th data-field="id">Nama Alias</th>
                                <th data-field="id">Kategori</th>
                                <th data-field="id">Aksi</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>aa</td>
                                    <td>1bb</td>
                                    <td>Lipstik</td>
                                    <td>
                                        <div class="col s12 center">
                                            <a class="btn-floating btn-large btn-flat waves-light pink accent-2 white-text modal-trigger" href="#modal2">
                                                <i class="material-icons">create</i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end data barang -->


        <!-- start tambah data barang -->
        <div class="modal modal-fixed-footer" id="modal1">
            <div class="modal-content">
                <h4>Tambah Data Barang</h4>
                <div class="row">
                    <form class="col s12">
                        <div class="input-field col s12">
                            <input id="kodeBarang" name="kodeBarang" type="text" required class="validate">
                            <label for="kodeBarang">Kode Barang</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="namaBarang" name="kodeBarang" required type="text" class="validate">
                            <label for="namaBarang">Nama Barang</label>
                        </div>
                        <div class="col s12">
                            <br>
                            <div class="input-field col s6">
                                <label for="alias1">Nama Alias 1 (Optional)</label>
                                <input id="alias1" name="alias1" required type="text" class="validate">
                            </div>
                            <div class="input-field col s6">
                                <label for="alias2">Nama Alias 2 (Optional)</label>
                                <input id="alias2" name="alias1" required type="text" class="validate">
                            </div>
                        </div>
                            <label>Kategori</label>
                            <select id="kategori" name="kategori" class="browser-default">
                                <option value="" disabled selected>Pilih Kategori</option>
                                <option value="Lipstik">Lipstik</option>
                                <option value="Make Up">Make Up</option>
                                <option value="Parfum">Parfum</option>
                            </select>
                        <div class="input-field col s12">
                            <label>Foto Barang</label>
                            <br>
                        </div>
                        <div class="input-field col s12">
                            <input type="file" class="form-control" id="gambar" name="gambar">
                        </div>

                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <a class=" modal-action modal-close waves-effect waves-green btn-flat">
                    <i class="material-icons left">reply</i>Kembali</a>
                <a class=" modal-action modal-close waves-effect waves-green btn-flat">
                    <i class="material-icons left">save</i>Simpan</a>
            </div>
        </div>
        <!-- end tambah data barang -->

        <!-- start ubah data barang -->
        <div class="modal modal-fixed-footer" id="modal2">
            <div class="modal-content">
                <h4>Ubah Data Barang</h4>
                <div class="row">
                    <form class="col s12">
                        <div class="input-field col s12">
                            <input id="kodeBarang" name="kodeBarang" type="text" required class="validate">
                            <label for="kodeBarang">Kode Barang</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="namaBarang" name="kodeBarang" required type="text" class="validate">
                            <label for="namaBarang">Nama Barang</label>
                        </div>
                        <div class="col s12">
                            <br>
                            <div class="input-field col s6">
                                <label for="alias1">Nama Alias 1 (Optional)</label>
                                <input id="alias1" name="alias1" required type="text" class="validate">
                            </div>
                            <div class="input-field col s6">
                                <label for="alias2">Nama Alias 2 (Optional)</label>
                                <input id="alias2" name="alias1" required type="text" class="validate">
                            </div>
                        </div>
                        <label>Kategori</label>
                        <select id="kategori" name="kategori" class="browser-default">
                            <option value="Lipstik">Lipstik</option>
                            <option value="Make Up">Make Up</option>
                            <option value="Parfum">Parfum</option>
                        </select>
                        <div class="input-field col s12">
                            <label>Foto Barang</label>
                            <br>
                        </div>
                        <div class="input-field col s12">
                            <input type="file" class="form-control" id="gambar" name="gambar">
                        </div>

                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <a class=" modal-action modal-close waves-effect waves-green btn-flat">
                    <i class="material-icons left">reply</i>Kembali</a>
                <a class=" modal-action modal-close waves-effect waves-green btn-flat">
                    <i class="material-icons left">save</i>Simpan Perubahan</a>
            </div>
        </div>
        <!-- end ubah data barang -->

        <!-- //////////////////////////////////////////////////////////////////////////// -->

    </div>
    <!--end container-->
</section>
<!-- END CONTENT -->

</div>
</div>
