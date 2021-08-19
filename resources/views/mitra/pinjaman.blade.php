@extends('mitra/master/masterMitra')

@section('title_bar', 'Pinjaman | Kemitraan LEN Industri')

@section('active3', 'active')

@section('title_page', 'Pinjaman')

@section('section')

<section class="forms">
    <div class="container-fluid">
        @if ($mitra->ktp == null)
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data mitra anda belum lengkap silahkan lengkapi terlebih dahulu!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @elseif ($mitra->pas_foto == null)
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data mitra anda belum lengkap silahkan lengkapi terlebih dahulu!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @elseif ($mitra->jenis_kelamin == null)
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data mitra anda belum lengkap silahkan lengkapi terlebih dahulu!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @elseif ($mitra->tempat_lahir == null)
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data mitra anda belum lengkap silahkan lengkapi terlebih dahulu!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @elseif ($mitra->tgl_lahir == null)
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data mitra anda belum lengkap silahkan lengkapi terlebih dahulu!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @elseif ($mitra->no_telp == null)
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data mitra anda belum lengkap silahkan lengkapi terlebih dahulu!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @elseif ($mitra->ahli_waris == null)
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data mitra anda belum lengkap silahkan lengkapi terlebih dahulu!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @elseif ($mitra->jumlah_karyawan == null)
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data mitra anda belum lengkap silahkan lengkapi terlebih dahulu!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @elseif ($mitra->no_rek == null)
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data mitra anda belum lengkap silahkan lengkapi terlebih dahulu!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @elseif ($mitra->bank == null)
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data mitra anda belum lengkap silahkan lengkapi terlebih dahulu!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @elseif ($mitra->jaminan->jaminan == null)
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data mitra anda belum lengkap silahkan lengkapi terlebih dahulu!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @elseif ($mitra->jaminan->pemilik_jaminan == null)
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data mitra anda belum lengkap silahkan lengkapi terlebih dahulu!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @else
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data mitra sudah lengkap
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
    </div>

    <div class="container-fluid">
      <div class="row">
        <!-- Form Elements -->
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h3 class="h4">Review Proposal Pengajuan Pinjaman</h3>
            </div>
            <div class="card-body">

                <div class="modal fade" tabindex="-1" role="dialog" id="ajukanPinjaman">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Alert</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Apakah anda sudah selesai melengkapi data anda?</p>
                          <form class="form-horizontal" method="POST" action="/mitra/pinjaman/ajukan">
                            {{ csrf_field() }}

                            <div class="row form-group" hidden>
                                <div class="col col-md-3">
                                    <label for="number-input" class=" form-control-label">Nomor Mitra</label>
                                </div>
                                <div class="col-12 col-md-6">
                                <input type="text" id="no_pk" name="no_pk"  class="form-control" value="{{$mitra->no_pk}}" readonly>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="number-input" class=" form-control-label">Dana Aju</label>
                                </div>
                                <div class="col-12 col-md-6">
                                <input type="number" id="dana_aju" name="dana_aju"  class="form-control" required>
                                <!-- <input type="text" id="dana_aju" name="dana_aju"  class="form-control" required> -->
                                </div>
                            </div>

                            <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                            <button type="submit" class="btn btn-secondary" data-dismiss="modal">
                                Tutup
                            </button>
                            </div>
                          </form>
                        <!-- <script type="text/javascript">

                            var rupiah = document.getElementById('dana_aju');
                            rupiah.addEventListener('keyup', function(e){
                                // tambahkan 'Rp.' pada saat form di ketik
                                // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
                                rupiah.value = formatRupiah(this.value, 'Rp. ');
                            });

                            /* Fungsi formatRupiah */
                            function formatRupiah(angka, prefix){
                                var number_string = angka.replace(/[^,\d]/g, '').toString(),
                                split   		= number_string.split(','),
                                sisa     		= split[0].length % 3,
                                rupiah     		= split[0].substr(0, sisa),
                                ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

                                // tambahkan titik jika yang di input sudah menjadi angka ribuan
                                if(ribuan){
                                    separator = sisa ? '.' : '';
                                    rupiah += separator + ribuan.join('.');
                                }

                                rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                                return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
                            }
                        </script> -->

                        </div>
                      </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-12">
                        <label><strong>DATA MITRA</strong></label>
                    </div>
                </div>

                <dl class="row">
                    <dt class="col-sm-3">Nama mitra</dt>
                    <dd class="col-sm-9">: {{$mitra->dataProposal->nama_pengaju}}</dd>

                    <dt class="col-sm-3">Jenis kelamin</dt>
                    <dd class="col-sm-9">
                      @if($mitra->jenis_kelamin == "L")
                        : Laki - Laki
                      @elseif($mitra->jenis_kelamin == "P")
                        : Perempuan
                      @endif
                    </dd>

                    <dt class="col-sm-3">Tempat, tanggal lahir</dt>
                    <dd class="col-sm-9">: {{$ttl}}</dd>

                    <dt class="col-sm-3">No. telp</dt>
                    <dd class="col-sm-9">: {{$mitra->no_telp}}</dd>

                    <dt class="col-sm-3">Alamat</dt>
                    <dd class="col-sm-9">: {{$mitra->alamat_kantor}}</dd>
                </dl>

                <div class="row form-group">
                    <div class="col col-12">
                        <label><strong>DESKRIPSI USAHA</strong></label>
                    </div>
                </div>

                <dl class="row">
                    <dt class="col-sm-3">Nama usaha</dt>
                    <dd class="col-sm-9">: {{$mitra->dataProposal->unit_usaha}}</dd>

                    <dt class="col-sm-3">Sektor usaha</dt>
                    <dd class="col-sm-9">: {{$mitra->dataProposal->sektor_usaha}}</dd>

                    <dt class="col-sm-3">Lokasi usaha</dt>
                    <dd class="col-sm-9">: {{$mitra->lokasi_usaha}}</dd>

                    <dt class="col-sm-3">Jumlah Karyawan</dt>
                    <dd class="col-sm-9">: {{$mitra->jumlah_karyawan}}</dd>

                    <dt class="col-sm-3">Peminjaman ke-</dt>
                    <dd class="col-sm-9">: {{$pengajuan->count()+1}}</dd>
                </dl>

                <div class="row form-group">
                    <div class="col col-12">
                        <label><strong>JAMINAN</strong></label>
                    </div>
                </div>

                <dl class="row">
                    <dt class="col-sm-3">Jaminan</dt>
                    <dd class="col-sm-9">: {{$mitra->jaminan->jaminan}}</dd>

                    <dt class="col-sm-3">Pemilik Jaminan</dt>
                    <dd class="col-sm-9">: {{$mitra->jaminan->pemilik_jaminan}}</dd>
                </dl>

                <div class="line"></div>
                <div class="form-group row">
                    <div class="col-sm-4 offset-sm-9">
                        <button type="button" class="btn btn-primary"
                        data-target="#ajukanPinjaman"
                        data-toggle="modal"
                        data-no_pk ="{{$mitra->no_pk}}">
                            Ajukan Pinjaman
                        </button>
                    </div>
                </div>
              </form>


            </div>
          </div>
        </div>
      </div>
    </div>
</section>

@endsection

@section('script')
@push('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('#ajukanPinjaman').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var no_pk = button.data('no_pk');
            var modal = $(this);
            console.log(no_pk);
            modal.find('.modal-body #no_pk').val(no_pk);
        });
    });
</script>
@endpush
@endsection
