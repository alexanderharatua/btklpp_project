@extends('layouts.master')
@section('content')
<section class="page-section" style="padding-bottom: 90px">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Whistleblowing system</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <img style="width:100px;height:100px;" src="{{ asset('tes/img/portfolio/wb.png') }}" alt="gambar logo" />
        </div>
        <!-- Contact Section Form-->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                <form method="POST" action="/mails">
                    @csrf

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label for="inputEmail4">Email</label>
                            <input name="email" class="form-control" id="inputEmail4" placeholder="Email" type="email">
                            {{-- <input class="form-control" id="inputEmail4" type="email" placeholder="Alamat Email" required="required" /> --}}
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label for="inputPassword4">Nama</label>
                            <input name="nama" class="form-control" id="inputPassword4" placeholder="Name" type="name">
                            {{-- <input class="form-control" id="inputPassword4" type="text" placeholder="Nama" required="required" data-validation-required-message="Please enter your name." /> --}}
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group ">
                            <label>Jenis Pengaduan</label>
                            <select name="to" id="inputState" class="form-control">
                                <option value="wbsbtklppmdn@gmail.com" selected="">WBS BTKLPP</option>
                                <option value="gratifikasibtklpp@gmail.com" >Gratifikasi BTKLPP</option>
                                <option value="benturankepentinganbtklpp@gmail.com" >Benturan Kepentingan BTKLPP</option>
                                </select>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Isi Pengaduan : </label>
                            <textarea class="form-control" rows="5" placeholder="Isi pengaduan" name="isi" required="required" type="isi"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br />
                    <div id="success"></div>
                    <div class="form-group"><button class="btn btn-primary btn-xl"  type="submit">Kirim</button></div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection