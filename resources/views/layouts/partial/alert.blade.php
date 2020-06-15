<script>
    @if(session('error_login'))
    swal("OOps!", "{{session('error_login')}}", "error");
    @elseif(session('success_login'))
    swal("Berhasil!", "{{session('success_login')}}", "success");
    @elseif(session('success_surat'))
    swal("Berhasil!", "{{session('success_surat')}}", "success");
    @endif

    function _logout() {
        swal({
            title: "Apakah Anda Yakin ?",
            text: "Anda Akan Keluar dari sistem !!!",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: "Ya",
            cancelButtonText: "Tidak",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {
                document.getElementById('logout-form').submit();
            } else {
                swal("Batal", "Anda belum keluar dari sistem", "error");
            }
        });
    }


</script>
