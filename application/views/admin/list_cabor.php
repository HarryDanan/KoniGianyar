<div class="card card-custom card-stretch gutter-b">
    <div class="card-header h-auto border-0">
        <div class="card-title py-5">
            <div class="card-label">
                <span class="d-block text-dark fw-bolder">Daftar Cabang Olah Raga</span>
                <small class="d-block text-muted">Poprov</small>
            </div>
        </div>
        <div class="card-toolbar">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#caborModal" data-submit="add">Add</button>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="tb-cabor" class="table gs-7 gy-7 gx-7">
                <thead>
                    <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Create At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="caborModal" tabindex="-1" aria-labelledby="caborModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="caborModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="form_cabor" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="hidden" class="form-control" id="id" aria-describedby="id">
                        <input type="text" class="form-control" id="nama" aria-describedby="nama">
                        <div id="nama" class="form-text"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="submit_cabor" class="btn btn-success">
                        <span class="indicator-label">Simpan</span>
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- <script src="<?php echo base_url('assets/js/list_cabor.js') ?>"></script> -->
<script>
    let base_url = "<?php echo base_url()?>"
    let tb_cabor = $("#tb-cabor").dataTable({
        // untuk search
        dom: "<'row'" +
            "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
            "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
            ">" +
            "<'table-responsive'tr>" +
            "<'row'" +
            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
            ">",

        // untuk pengaturan table
        responsive: true,
        searchDelay: 500,
        processing: true,
        serverSide: true,
        order: [
            [1, "asc"]
        ],

        // unntuk select data
        ajax: {
            "url": base_url + 'Admin/getDatatable/cabor',
            "type": "POST"
        },

        // untuk pengaturan kolomnya
        columns: [{
                "data": null,
                "searchable": false,
                render: function(data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                },
                className: "text-center"
            },
            {
                data: 'nama',
                "render": function(data) {
                    return data
                },
                className: "text-start"
            },
            {
                data: 'create_at',
                render: function(data) {
                    let date = (data != null) ? moment(data).format('DD/MM/YYYY') : "NULL";
                    return date;
                },
                className: "text-center"

            },
            {
                "data": null,
                "name": null,
                "visible": true,
                "searchable": false,
                "render": function(data, type, row) {
                    return '<a class="btn btn-sm btn-warning" data-id="' + row.id + '"data-bs-toggle="modal" data-bs-target="#caborModal" data-submit="update">Edit</a> <a class="btn btn-sm btn-danger">Delete</a>'
                },
                className: "text-center"
            },
        ],
        "order": [
            [1, 'asc']
        ],
        initComplete: function() {
            // dItem(this.api().data().length);
            // badgeRAT(this.api().data().length);
        }

    })

    $("#caborModal").on('show.bs.modal', function(e) {
        document.getElementById("form_cabor").reset();
        let modal = $(this);
        let t = $('#submit_cabor')
        let triggerLink = $(e.relatedTarget);
        let submit = triggerLink.data('submit');
        t.attr('data-submit', submit);
        modal.find('h5#caborModalLabel').text('Tambah Data Cabang Olahraga')
        if (submit == 'update' || submit == 'view') {
            let id = triggerLink.data("id");
            let labelText = (submit == 'update') ? "Edit Data Cabang Olahraga" : "Detail Cabang Olahraga"
            modal.find('h5#caborModalLabel').text(labelText)
            $.ajax({
                type: 'post',
                url: base_url + 'Admin/getRecordByID/cabor/' + id,
                dataType: "JSON",
                success: function(data) {
                    modal.find("input#id").val(data.id);
                    modal.find("input#nama").val(data.nama);
                }
            });
            if (submit == 'view') {
                t.hide();
            }
        } else {
            // modal.find("input#idKoperasi").val(idKoperasi);
        }
    });

    $('#form_cabor').on('submit', function(e) {
        e.preventDefault();
        let t = $('#submit_cabor')
        let submit = t.attr('data-submit');

        t.attr("data-kt-indicator", "on")
        if (submit == 'update' || 'add') {
            let url = base_url + 'admin/postCabor/' + submit;
            let form_data = $(this).serialize();

            $.ajax({
                type: 'POST',
                url: url,
                data: form_data,
                dataType: 'json',
                success: function(data) {
                    t.removeAttr("data-kt-indicator")
                    let icon = (data.type == 'success') ? "success" : "error";
                    let title = (data.type == 'success') ? "Success !" : "Error !";
                    let confirmButton = (data.type == 'success') ? "btn-primary" : "btn-danger";
                    Swal.fire({
                        title: title,
                        text: data.message,
                        icon: icon,
                        buttonsStyling: !1,
                        confirmButtonText: "Ok",
                        customClass: {
                            confirmButton: "btn btn-sm " + confirmButton
                        }
                    }).then((function(t) {
                        if (t.value) {
                            $('#caborModal').modal('hide')
                            $('#tb-cabor').DataTable().ajax.reload();
                        }
                    }))
                },
                error: function(xhr, status, error) {
                    t.removeAttr("data-kt-indicator")
                    Swal.fire({
                        title: "Error !",
                        text: xhr.responseText,
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok",
                        customClass: {
                            confirmButton: "btn btn btn-danger"
                        }
                    })
                }
            });
        }

    });

    function deleteData(id, type) {
    let url = base_url + 'Admin/delete/cabor/' + id;
    Swal.fire({
        title: 'Delete',
        text: 'Apakah anda yakin ingin menghapus data ini?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Hapus',
        reverseButtons: true,
        buttonsStyling: !1,
        customClass: {
            confirmButton: "btn btn-sm btn-danger",
            cancelButton: "btn btn-sm btn-secondary"
        }
    }).then(function (result) {
        if (result.value) {
            $.ajax({
                url: url,
                dataType: 'JSON',
                success: function (data) {
                    let icon = (data.type == 'success') ? "success" : "error"
                    let title = (data.type == 'success') ? "Success !" : "Error !"
                    let confirmButton = (data.type == 'success') ? "btn-primary" : "btn-danger"
                    Swal.fire({
                        title: title,
                        text: data.message,
                        icon: icon,
                        buttonsStyling: !1,
                        confirmButtonText: "Ok",
                        customClass: {
                            confirmButton: "btn btn-sm " + confirmButton
                        }
                    }).then((function (t) {
                        if (t.value) {
                            $('#tb-cabor').DataTable().ajax.reload();
                        }
                    }))
                },
                error: function (xhr, status, error) {
                    Swal.fire({
                        title: "Error !",
                        text: xhr.responseText,
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok",
                        customClass: {
                            confirmButton: "btn btn-sm btn-danger"
                        }
                    })
                }
            });
        }
    });
}
</script>