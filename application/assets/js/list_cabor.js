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
        "url": base_url + 'Admin/getDatatableCabor',
        "type": "POST"
    },

    // untuk pengaturan kolomnya
    columns: [{
        "data": null,
        "searchable": false,
        render: function (data, type, row, meta) {
            return meta.row + meta.settings._iDisplayStart + 1;
        },
        className: "text-center"
    },
    {
        data: 'tglRAT',
        "render": function (data) {
            // let date = (data != null) ? moment(data).format('DD/MM/YYYY') : "NULL";
            // return date;
            return data
        },
        className: "text-center"
    },
    {
        data: 'create_at',
        render: function (data) {
            // let date = (data != null) ? moment(data).format('DD/MM/YYYY') : "NULL";
            // return date;
            return data

        },
        className: "text-center"

    },
    {
        "data": null,
        "name": null,
        "visible": true,
        "searchable": false,
        "render": function (data, type, row) {
            return ""
        },
        className: "text-center"
    },
    ],
    "order": [
        [1, 'asc']
    ],
    initComplete: function () {
        // dItem(this.api().data().length);
        // badgeRAT(this.api().data().length);
    }

})