@extends('layouts.main')
@section('title','Surat |  ')
@section('css_script')
    <style>
        /*body {*/
        /*    background: rgb(204, 204, 204);*/
        /*}*/

        page {
            background: white;
            display: block;
            margin: 0 auto;
            margin-bottom: 0.5cm;
            box-shadow: 0 0 0.3cm rgba(0, 0, 0, 0.5);
        }

        page[size="A4"] {
            width: 21cm;
            height: 29.7cm;
        }

        page[size="A4"][layout="landscape"] {
            width: 29.7cm;
            height: 21cm;
        }

        page[size="A3"] {
            width: 29.7cm;
            height: 42cm;
        }

        page[size="A3"][layout="landscape"] {
            width: 42cm;
            height: 29.7cm;
        }

        page[size="A5"] {
            width: 14.8cm;
            height: 21cm;
        }

        page[size="A5"][layout="landscape"] {
            width: 21cm;
            height: 14.8cm;
        }

        @media print {
            body, page {
                margin: 0;
                box-shadow: 0;
            }
        }
    </style>
@endsection
@section('main_content')

    {{--    <page size="A4"></page>--}}
    {{--    <page size="A4"></page>--}}
    {{--    <page size="A4" layout="landscape"></page>--}}
    {{--    <page size="A5" layout="landscape"></page>--}}
    {{--    <page size="A3"></page>--}}
    {{--    <page size="A3" layout="landscape"></page>--}}

    <section class="section feather-bg-img"
             style="background-image: url({{asset('lezir/images/features-bg-img-1.png')}})">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center mb-5">
                    <h3 class="title mb-3">Awesome Features</h3>
                    <p class="text-muted font-size-15">Et harum quidem rerum facilis est et expedita distinctio nam
                        libero tempore cum soluta nobis eligendi cumque.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-10">
                    <p class="font-weight-medium text-uppercase mb-2"><i
                            class="mdi mdi-chart-bubble h2 text-primary mr-1 align-middle"></i> Surat Keluar</p>
                    <div class="card" style="box-shadow: 0 0 0.1cm rgba(0, 0, 0, 0.5); width: 21cm;
            height: 29.7cm;">
                        <div class="card-body">
                            <table>
                                <tr>
                                    <td width="15%">
                                        <div>
                                            <img src="{{asset('madiun_logo.png')}}" alt="" width="128">
                                        </div>
                                    </td>
                                    <td align="center" width="85%">
                                        <div>
                                            <b style="font-size: 16pt"> PEMERINTAH KOTA MADIUN</b> <br>
                                            <b>DINAS KOMUNIKASI DAN INFORMATIKA</b> <br>
                                            <div style="font-size: 11pt;  margin: 0; padding-top: -10;"> JJalan Perintis
                                                Kemerdekaan No. 32 Kota Madiun
                                                <br>
                                                No Telp / Fax : (0351) 467327 / (0351) 457331 email:
                                                kominfo.madiunkota@gmail.com
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <hr>
                                    </td>
                                </tr>
                            </table>
                        {{--                            <h3 class="font-weight-semibold line-height-1_4 mb-4">We do the work you <b>stay focused</b>--}}
                        {{--                                on <b>your customers</b>.</h3>--}}


                        <!-- <h3 class="font-weight-semibold line-height-1_4 mb-4">Build <b>community</b> & <b>conversion</b> with our suite of <b>social tool</b></h3> -->
                            {{--                            <p class="text-muted font-size-15 mb-4">Temporibus autem quibusdam et aut officiis debitis--}}
                            {{--                                aut rerum a necessitatibus saepe eveniet ut et voluptates repudiandae sint molestiae non--}}
                            {{--                                recusandae itaque.</p>--}}
                            {{--                            <p class="text-muted mb-2"><i class="icon-xs mr-1" data-feather="server"></i> Donec pede--}}
                            {{--                                justo fringilla vel nec.</p>--}}
                            {{--                            <p class="text-muted"><i class="icon-xs mr-1" data-feather="rss"></i> Cras ultricies mi eu--}}
                            {{--                                turpis hendrerit fringilla.</p>--}}

                            <div class="row align-items-center">
                                <div class="col-lg-12">
                                    <div class="custom-form mb-5 mb-lg-0">
                                        <div id="message"></div>
                                        <form method="post" action="" name="contact-form"
                                              id="surat">
                                            @CSRF
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name">Yth.*</label>
                                                        <input name="yth" id="name" type="text" class="form-control" value="{{$data->yth}}"
                                                               placeholder="Pihak yang dituju..."required>
                                                        <input type="hidden" name="id" id="" value="{{$data->id}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email">Dari*</label>
                                                        <input name="dari" id="email" type="text" class="form-control" value="{{$data->dari}}"
                                                               placeholder="Pengirim ..." required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name">No. Surat*</label>
                                                        <input name="no_surat" id="name" type="text" class="form-control" value="{{$data->no_surat}}"
                                                               placeholder="1xxxxx..." required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email">Perihal*</label>
                                                        <input name="perihal" id="email" type="text" class="form-control" value="{{$data->perihal}}"
                                                               placeholder="Perihal Surat..." required  >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name">Lampiran*</label>
                                                        <input name="lampiran" id="name" type="text" class="form-control" value="{{$data->lampiran}}"
                                                               placeholder="Jumlah Lampiran..." required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email">Tujuan*</label>
                                                        <input name="tujuan" id="email" type="text" class="form-control" value="{{$data->tujuan}}"
                                                               placeholder="Your email..." required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="comments">Isi Surat *</label>
                                                        <textarea name="pesan" id="summernote" rows="4"
                                                                  class="form-control"
                                                                  placeholder="Your message..."></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="mt-5">
                        <button type="submit" class="btn btn-primary mr-2" onclick="submit_form('{{route('surat.update')}}')"> Simpan <i class="mdi mdi-send"></i></button>
                        {{--                        <a href="#" class="btn btn-soft-primary">Simpan Draft </a>--}}
                    </div>
                </div>

                {{--                <div class="col-lg-6 offset-lg-1">--}}
                {{--                    <div class="mt-4 mt-lg-0">--}}
                {{--                        <img src="images/features-img-1.png" alt="" class="img-fluid d-block mx-auto">--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        </div>
    </section>
@endsection
@push('script')

    <script>
        $(document).ready(function() {
            $('#summernote').summernote('code','{!! $data->pesan !!}');
        });

        function submit_form(link) {
            $('#surat').attr('action',link).submit();
            console.log("hello");

        }
    </script>
@endpush
