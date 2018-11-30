
<!-- START CONTENT -->
<section id="content">
    <!--start container-->
    <div class="container">

        <!-- start data barang -->
        <h4 class="header">Data Pelanggan</h4>
        <div class="divider"></div>
        <div class="row">
            <div class="col s12">
                <div class="col s12 mt-3 mb-3">
                    <a class="btn modal-trigger" data-target="modal1">
                        <i class="material-icons left">add</i> Tambah Data Pelanggan
                    </a>
                </div>
                <div id="responsive-table">
                    <div class="row">
                        <div class="col s12">
                            <table class="responsive-table">
                                <thead>
                                <th data-field="id">No</th>
                                <th data-field="id">Aksi</th>
                                <th data-field="id">Nama Pelanggan</th>
                                <th data-field="id">Jenis Pelanggan</th>
                                <th data-field="id">No HP</th>
                                <th data-field="id">No Telepon</th>
                                <th data-field="id">Blacklist</th>
                                <th data-field="id">Status</th>
                                <th data-field="id">Alamat</th>

                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="col s12 center">
                                            <a class="btn-floating btn-small btn-flat waves-light pink accent-2 white-text modal-trigger" href="#modal2">
                                                <i class="material-icons">create</i>
                                            </a>
                                        </div>
                                    </td>
                                    <td>Glory</td>
                                    <td>UMUM</td>
                                    <td>0896281929</td>
                                    <td></td>
                                    <td>TIDAK</td>
                                    <td>AKTIF</td>
                                    <td>Bandarlampung</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <div class="col s12 center">
                                            <a class="btn-floating btn-small btn-flat waves-light pink accent-2 white-text modal-trigger" href="#modal2">
                                                <i class="material-icons">create</i>
                                            </a>
                                        </div>
                                    </td>
                                    <td>Ran</td>
                                    <td>VIP</td>
                                    <td>0896111929</td>
                                    <td>42312</td>
                                    <td>TIDAK</td>
                                    <td>AKTIF</td>
                                    <td>Kedaton,Bandarlampung</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end data barang -->


        <!-- start tambah data pelanggan-->
        <div class="modal modal-fixed-footer" id="modal1">
            <div class="modal-content">
                <h4>Tambah Data Pelanggan</h4>
                <div class="row">
                    <form class="col s12" action="<?php echo base_url();?>Pelanggan/simpan" method="post" enctype="multipart/form-data">
                        <div class="input-field col s12">
                            <input id="namaPelanggan" name="namaPelanggan" required type="text" class="validate">
                            <label for="namaPelanggan">Nama Pelanggan</label>
                        </div>
                        <label>Jenis</label>
                        <select id="jenis" name="jenis" class="browser-default">
                            <option value="UMUM">UMUM</option>
                            <option value="VIP">VIP</option>
                        </select>
                        <div class="col s12">
                            <br>
                            <div class="input-field col s6">
                                <label for="noHape">No HP</label>
                                <input id="noHape" name="noHape" required type="text" class="validate">
                            </div>
                            <div class="input-field col s6">
                                <label for="noTelepon">No Telepon (Optional)</label>
                                <input id="noTelepon" name="noTelepon" type="text" class="validate">
                            </div>
                        </div>
                        <div class="input-field col s12">
                            <input id="noKtp" name="noKtp" required type="text" class="validate">
                            <label for="noKtp">No KTP</label>
                        </div>
                        <div class="input-field col s12">
                            <textarea id="alamat" name="alamat" class="materialize-textarea"></textarea>
                            <label for="alamat">Alamat</label>
                        </div>

                </div>
            </div>
            <div class="modal-footer">
                <a class=" modal-action modal-close waves-effect waves-green btn-flat">
                    <i class="material-icons left">reply</i>Kembali</a>
                <button type="submit" class="waves-effect waves-green btn-flat">
                    <i class="material-icons left">save</i>Simpan</button>
            </div>
            </form>
        </div>
        <!-- end tambah data pelanggan -->

        <!-- start ubah data pelanggan-->
        <div class="modal modal-fixed-footer" id="modal2">
            <div class="modal-content">
                <h4>Ubah Data pelanggan</h4>
                <div class="row">
                    <form class="col s12">
                        <div class="input-field col s12">
                            <input id="namaBarang" name="kodeBarang" required type="text" class="validate">
                            <label for="namaBarang">Nama Pelanggan</label>
                        </div>
                        <label>Jenis</label>
                        <select id="kategori" name="kategori" class="browser-default">
                            <option value="UMUM">UMUM</option>
                            <option value="VIP">VIP</option>
                        </select>
                        <div class="col s12">
                            <br>
                            <div class="input-field col s6">
                                <label for="noHape">No HP</label>
                                <input id="noHape" name="noHape" required type="text" class="validate">
                            </div>
                            <div class="input-field col s6">
                                <label for="noTelepon">No Telepon (Optional)</label>
                                <input id="noTelepon" name="noTelepon" required type="text" class="validate">
                            </div>
                        </div>
                        <div class="input-field col s12">
                            <input id="noKtp" name="noKtp" required type="text" class="validate">
                            <label for="noKtp">No KTP</label>
                        </div>
                        <div class="input-field col s12">
                            <textarea id="alamat" class="materialize-textarea"></textarea>
                            <label for="alamat">Alamat</label>
                        </div>
                        <label>BlackList</label>
                        <select id="blacklist" name="blacklist" class="browser-default">
                            <option value="0">TIDAK</option>
                            <option value="1">YA</option>
                        </select>
                        <br>
                        <br>
                        <label>Status</label>
                        <select id="status" name="status" class="browser-default">
                            <option value="1">AKTIF</option>
                            <option value="0">TIDAK AKTIF</option>
                        </select>
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
        <!-- end ubah data pelanggan -->

        <!-- pop up berhasil -->
        <?php if ($this->session->flashdata('success')){
            
        } ?>

       <script>
           function berhasil() {
               swal({
                   title: "Sukses",
                   text: "Berhasil tambah data pelanggan",
                   timer: 2000
               });
           }
       </script>

        <!-- //////////////////////////////////////////////////////////////////////////// -->
    </div>
    <!--end container-->
</section>
<!-- END CONTENT -->

</div>
</div>
