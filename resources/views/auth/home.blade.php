@extends('layouts.main')
@section('title','Home |  ')
@section('main_content')

    <section class="section bg-light feather-bg-img"
             style="background-image: url({{asset('lezir/images/features-bg-img.png')}});"
             id="features">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-5">
                        <h3 class="title mb-3">Selamat Datang</h3>

                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="offset-lg-1 col-lg-10">
                    <div class="mt-5">
                        <a href="{{route('page.surat')}}" class="btn btn-primary mr-2">Buat Surat</a>
                    </div>
                    <br>
                    {{--                        <img src="{{asset('lezir/images/features-img.png')}}" alt="" class="img-fluid d-block mx-auto" style="z-index: 1">--}}
                    <div class="card">
                        <div class="card-body">

                            <table class="table table-responsive " id="myTable">
                                <thead>
                                <tr>
                                    <th>No. Surat</th>
                                    <th>Pembuat</th>
                                    <th>Dari</th>
                                    <th>Tujuan</th>
                                    <th>Perihal</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody class="table-striped">
                                @foreach(\App\Models\Surat::all() as $data)
                                    <tr>
                                        <td>{{$data->no_surat}}</td>
                                        <td>{{$data->user_created_id}}</td>
                                        <td>{{$data->dari}}</td>
                                        <td>{{$data->tujuan}}</td>
                                        <td>{{$data->perihal}}</td>
                                        <td>@if($data->disetujui_oleh == null || $data->disetujui_oleh == '')
                                                <span class="badge badge-danger">Belum Divalidasi</span>
                                            @else
                                                <span class="badge badge-success">Valid</span>
                                            @endif
                                        </td>


                                        <td>
                                            <button class="btn btn-success   " data-toggle="tooltip"
                                                    onclick="passprase('{{$data->id}}')"
                                                    title="Tanda Tangani Surat!">
                                                <i class="mdi mdi-lock-open"></i></button>
                                            <a href="{{route('get.pdf',['kode' => $data->id])}}">
                                                <button class="btn btn-primary" data-toggle="tooltip"
                                                        title="Download PDF!">
                                                    <i class="mdi mdi-file-pdf"></i></button>
                                            </a>
                                            <a href="{{route('page.surat.edit',['kode' => $data->id])}}">
                                                <button class="btn btn-info" data-toggle="tooltip"
                                                        title="Download PDF!">
                                                    <i class="mdi mdi-file-edit"></i></button>
                                            </a>
                                            <button class="btn btn-danger   " data-toggle="tooltip"
                                                    title="Hapus Surat!">
                                                <i class="mdi mdi-delete    "></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

                {{--                <div class="col-lg-4 offset-lg-1">--}}
                {{--                    <p class="font-weight-medium text-uppercase mb-2"><i--}}
                {{--                            class="mdi mdi-chart-bubble h2 text-primary mr-1 align-middle"></i> Creative Features</p>--}}
                {{--                    <h3 class="font-weight-semibold line-height-1_4 mb-4">Build <b>community</b> & <b>conversion</b>--}}
                {{--                        with our suite of <b>social tool</b></h3>--}}
                {{--                    <p class="text-muted font-size-15 mb-4">Temporibus autem quibusdam et aut officiis debitis aut rerum--}}
                {{--                        a necessitatibus saepe eveniet ut et voluptates repudiandae sint molestiae non recusandae--}}
                {{--                        itaque.</p>--}}
                {{--                    <p class="text-muted mb-2"><i class="icon-xs mr-1" data-feather="layout"></i> Donec pede justo--}}
                {{--                        fringilla vel nec.</p>--}}
                {{--                    <p class="text-muted"><i class="icon-xs mr-1" data-feather="life-buoy"></i> Cras ultricies mi eu--}}
                {{--                        turpis hendrerit fringilla.</p>--}}
                {{--                    <div class="mt-5">--}}
                {{--                        <a href="{{route('page.surat')}}" class="btn btn-primary mr-2">Buat Surat</a>--}}
                {{--                        <a href="#" class="btn btn-soft-primary">Buy Now</a>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        </div>
    </section>

@endsection
@push('script')

    <script>
        function passprase(id) {
            swal({
                    title: "PassPhrase!",
                    text: "Masukkan Kata Sandi Anda",
                    type: "input",
                    inputType: "password",
                    showCancelButton: true,
                    closeOnConfirm: false,
                    animation: "slide-from-top",
                    inputPlaceholder: "Password Login Anda"
                },
                function (inputValue) {
                    if (inputValue === false) return false;

                    if (inputValue === "") {
                        swal.showInputError("You need to write something!");
                        return false
                    }
                    console.log(inputValue);
                    $.ajax({
                        url: '{{route('surat.test')}}',
                        data: {
                            pass: inputValue,
                            _token: '{{csrf_token()}}',
                            surat: id
                        },
                        type: 'POST',
                        success: function (res) {
                            console.log(res.dari);

                            swal("Berhasil", "Surat Berhasil Ditandatangani");
                            setTimeout(location.reload.bind(location), 2000);
                        },
                        error: function (res) {
                            swal("Oops!", "Password Anda Salah");
                        }
                    });
                    // swal("Nice!", "You wrote: " + inputValue, "success");
                    // return fetch(`https://itunes.apple.com/search?term=${inputValue}&entity=movie`);
                });
        }

    </script>
@endpush
