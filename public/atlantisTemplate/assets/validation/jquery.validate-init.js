jQuery(".form-valide").validate({
    ignore: [],
    errorClass: "invalid-feedback animated fadeInDown",
    errorElement: "div",
    errorPlacement: function (e, a) {
        jQuery(a).parents(".form-group > div").append(e);
    },
    highlight: function (e) {
        jQuery(e)
            .closest(".form-group")
            .removeClass("is-invalid")
            .addClass("is-invalid");
    },
    success: function (e) {
        jQuery(e).closest(".form-group").removeClass("is-invalid"),
            jQuery(e).remove();
    },
    rules: {
        // "val-username": { required: !0, minlength: 3 },
        // "val-email": { required: !0, email: !0 },
        // "val-password": { required: !0, minlength: 5 },
        // "val-confirm-password": { required: !0, equalTo: "#val-password" },
        // "val-select2": { required: !0 },
        // "val-select2-multiple": { required: !0, minlength: 2 },
        // "val-suggestions": { required: !0, minlength: 5 },
        // "val-skill": { required: !0 },
        // "val-currency": { required: !0, currency: ["$", !0] },
        // "val-website": { required: !0, url: !0 },
        // "val-phoneus": { required: !0, phoneUS: !0 },
        // "val-digits": { required: !0, digits: !0 },
        // "val-number": { required: !0, number: !0 },
        // "val-range": { required: !0, range: [1, 5] },
        // "val-terms": { required: !0 },
        nama_lengkap: { required: !0 },
        jobdesk: { required: !0 },
        nama_jobdesk: { required: !0 },
        nama_layanan: { required: !0 },
        deskripsi: { required: !0 },
        icon: { required: !0 },
        whatsapp: { required: !0 },
        nama_client: { required: !0 },
        nama_project: { required: !0 },
        keterangan: { required: !0 },
        deadline: { required: !0 },
        status: { required: !0 },
    },
    messages: {
        nama_client: {
            required: "Masukan Nama Client",
        },
        nama_project: {
            required: "Masukan Nama Project",
        },
        keterangan: {
            required: "Masukan Keterangan Project",
        },
        deadline: {
            required: "Masukan Deadline Project",
        },
        status: {
            required: "Masukan Status Project",
        },
        jenis: {
            required: "Masukan Jenis Project",
        },
        nama_lengkap: {
            required: "Masukan Nama Team",
        },
        jobdesk: {
            required: "Masukan Jobdesk",
        },
        nama_jobdesk: {
            required: "Isi Nama Jobdesk",
        },
        nama_layanan: {
            required: "Layanan Harus diisi",
        },
        deskripsi: {
            required: "Layanan Harus diisi",
        },
        icon: {
            required: "Layanan Harus diisi",
        },
        whatsapp: {
            required: "Layanan Harus diisi",
        },
        // "val-email": "Please enter a valid email address",
        // "val-password": {
        //     required: "Please provide a password",
        //     minlength: "Your password must be at least 5 characters long",
        // },
        // "val-confirm-password": {
        //     required: "Please provide a password",
        //     minlength: "Your password must be at least 5 characters long",
        //     equalTo: "Please enter the same password as above",
        // },
        // "val-select2": "Please select a value!",
        // "val-select2-multiple": "Please select at least 2 values!",
        // "val-suggestions": "What can we do to become better?",
        // "val-skill": "Please select a skill!",
        // "val-currency": "Please enter a price!",
        // "val-website": "Please enter your website!",
        // "val-phoneus": "Please enter a US phone!",
        // "val-digits": "Please enter only digits!",
        // "val-number": "Please enter a number!",
        // "val-range": "Please enter a number between 1 and 5!",
        // "val-terms": "You must agree to the service terms!",
    },
});
