<div class="card card-custom card-stretch gutter-b">
    <div class="card-header h-auto border-0">
        <div class="card-title py-5">
            <div class="card-label">
                <span class="d-block text-dark fw-bolder">Daftar Cabang Olah Raga</span>
                <small class="d-block text-muted">Poprov</small>
            </div>
        </div>
        <div class="card-toolbar">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#medaliModal" data-submit="add">Add</button>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="tb-medali" class="table gs-7 gy-7 gx-7">
                <thead>
                    <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                        <th>No</th>
                        <th>Tahun</th>
                        <th>Kompetisi</th>
                        <th>Cabor</th>
                        <th>Create At</th>
                        <th>Last Update</th>
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
<div class="modal fade" id="medaliModal" tabindex="-1" aria-labelledby="medaliModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="medaliModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="form_medali" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Tahun</label>
                        <input type="text" class="form-control" id="tahun" name="tahun" aria-describedby="tahun">
                        <input type="hidden" class="form-control" id="id" name="id" aria-describedby="id">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Kompetisi</label>
                        <select id="id_kompetisi" name="id_kompetisi" class="form-select" aria-label="Default select example">
                            <option>Open this select menu</option>
                            <option value="1" selected>Porprov</option>
                        </select>
                        <div id="info-kompetisi" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="cabor" class="form-label">Cabang Olahraga</label>
                        <select id="id_cabor" name="id_cabor" class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                        </select>
                        <div id="info-cabor" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Emas</label>
                        <input type="text" class="form-control" id="jml_emas" name="jml_emas" aria-describedby="jml_emas">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Perak</label>
                        <input type="text" class="form-control" id="jml_perak" name="jml_perak" aria-describedby="jml_perak">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Perunggu</label>
                        <input type="text" class="form-control" id="jml_perunggu" name="jml_perunggu" aria-describedby="jml_perunggu">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="submit_medali" class="btn btn-success">
                        <span class="indicator-label">Simpan</span>
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- <script src="<?php echo base_url('assets/js/list_medali.js') ?>"></script> -->
<script>
    let base_url = "<?php echo base_url() ?>"

    function getCabor() {
        let record
        $.ajax({
            type: 'POST',
            url: base_url + "Admin/getTableRecord/cabor",
            dataType: "JSON",
            success: function(data) {
                record = data;
            },
            async: false
        });
        return record
    }

    function createCabor(cabor) {
        let html
        $('#id_cabor').html(function() {
            for ($i = 0; $i < cabor.length; $i++) {
                html += "<option value=" + cabor[$i]['id'] + ">" + cabor[$i]['nama'] + "</option>"
            }
            return html
        })

    }

    function deleteData(id) {
        let url = base_url + 'Admin/delete/medali/' + id;
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
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    url: url,
                    dataType: 'JSON',
                    success: function(data) {
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
                        }).then((function(t) {
                            if (t.value) {
                                $('#tb-medali').DataTable().ajax.reload();
                            }
                        }))
                    },
                    error: function(xhr, status, error) {
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
    $(document).ready(function() {
        let cabor = getCabor()
        createCabor(cabor)

        let tb_medali = $("#tb-medali").dataTable({
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
                "url": base_url + 'Admin/getDatatable/medali',
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
                    data: 'tahun',
                    "render": function(data) {
                        return data
                    },
                    className: "text-start"
                },
                {
                    data: 'id_kompetisi',
                    "render": function(data) {
                        data = (data == 1) ? "Porprov" : data
                        return data
                    },
                    className: "text-start"
                },
                {
                    data: 'cabor_nama',
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
                    data: 'update_at',
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
                        return '<a class="btn btn-sm btn-warning" data-id="' + row.id + '"data-bs-toggle="modal" data-bs-target="#medaliModal" data-submit="update">Edit</a> <a class="btn btn-sm btn-danger" onclick="deleteData(' + row.id + ')">Delete</a>'
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

        $("#medaliModal").on('show.bs.modal', function(e) {
            document.getElementById("form_medali").reset();
            let modal = $(this);
            let t = $('#submit_medali')
            let triggerLink = $(e.relatedTarget);
            let submit = triggerLink.data('submit');
            t.attr('data-submit', submit);
            modal.find('h5#medaliModalLabel').text('Tambah Data Medali')
            if (submit == 'update' || submit == 'view') {
                let id = triggerLink.data("id");
                let labelText = (submit == 'update') ? "Edit Data Medali" : "Detail Medali"
                modal.find('h5#medaliModalLabel').text(labelText)
                $.ajax({
                    type: 'post',
                    url: base_url + 'Admin/getRecordByID/medali/' + id,
                    dataType: "JSON",
                    success: function(data) {
                        modal.find("input#id").val(data.id);
                        modal.find("input#tahun").val(data.tahun);
                        modal.find("select#kompetisi").val(data.id_kompetisi).change();
                        modal.find("select#cabor").val(data.id_cabor).change();
                        modal.find("input#jml_emas").val(data.jml_emas);
                        modal.find("input#jml_perak").val(data.jml_perak);
                        modal.find("input#jml_perunggu").val(data.jml_perunggu);
                    }
                });
                if (submit == 'view') {
                    t.hide();
                }
            } else {
                // modal.find("input#idKoperasi").val(idKoperasi);
            }
        });

        $('#form_medali').on('submit', function(e) {
            e.preventDefault();
            let t = $('#submit_medali')
            let submit = t.attr('data-submit');

            t.attr("data-kt-indicator", "on")
            if (submit == 'update' || 'add') {
                let url = base_url + 'admin/postMedali_PorTY/' + submit;
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
                                $('#medaliModal').modal('hide')
                                $('#tb-medali').DataTable().ajax.reload();
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
    })
</script>