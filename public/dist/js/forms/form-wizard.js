//Basic Example
$("#example-basic").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    autoFocus: true,
});

// Basic Example with form
var form = $("#example-form");
form.validate({
    errorPlacement: function errorPlacement(error, element) {
        element.before(error);
    },
    rules: {
        confirm: {
            equalTo: "#password",
        },
    },
});
form.children("div").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    onStepChanging: function (event, currentIndex, newIndex) {
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
    },
    onFinishing: function (event, currentIndex) {
        form.validate().settings.ignore = ":disabled";
        return form.valid();
    },
    onFinished: function (event, currentIndex) {
        alert("Submitted!");
    },
});

// Advance Example

var form = $("#example-advanced-form").show();

form
    .steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "slideLeft",
        onStepChanging: function (event, currentIndex, newIndex) {
            // Allways allow previous action even if the current form is not valid!
            if (currentIndex > newIndex) {
                return true;
            }
            // Forbid next action on "Warning" step if the user is to young
            if (newIndex === 3 && Number($("#age-2").val()) < 18) {
                return false;
            }
            // Needed in some cases if the user went back (clean up)
            if (currentIndex < newIndex) {
                // To remove error styles
                form.find(".body:eq(" + newIndex + ") label.error").remove();
                form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
            }
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onStepChanged: function (event, currentIndex, priorIndex) {
            // Used to skip the "Warning" step if the user is old enough.
            if (currentIndex === 2 && Number($("#age-2").val()) >= 18) {
                form.steps("next");
            }
            // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
            if (currentIndex === 2 && priorIndex === 3) {
                form.steps("previous");
            }
        },
        onFinishing: function (event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function (event, currentIndex) {
            alert("Submitted!");
        },
    })
    .validate({
        errorPlacement: function errorPlacement(error, element) {
            element.before(error);
        },
        rules: {
            confirm: {
                equalTo: "#password-2",
            },
        },
    });

// Dynamic Manipulation
$("#example-manipulation").steps({
    headerTag: "h3",
    bodyTag: "section",
    enableAllSteps: true,
    enablePagination: false,
});

//Vertical Steps

$("#example-vertical").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    stepsOrientation: "vertical",
});

//Custom design form example
$(".tab-wizard").steps({
    headerTag: "h6",
    bodyTag: "section",
    transitionEffect: "fade",
    titleTemplate: '<span class="step">#index#</span> #title#',
    labels: {
        finish: "Submit",
    },
    onFinished: function (event, currentIndex) {
        swal(
            "Form Submitted!",
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed."
        );
    },
});

var form = $(".validation-wizard").show();
$(".validation-wizard").steps({
    headerTag: "h6",
    bodyTag: "section",
    transitionEffect: "fade",
    titleTemplate: '<span class="step">#index#</span> #title#',
    labels: {
        finish: "Submit",
    },
    onFinished: function () {
        // Ambil data dari localStorage
        const formData = JSON.parse(localStorage.getItem('formData'));

        // Map medicalHistory dan recommendedMethods ke format baru
        const mappedMedicalHistory = formData.selectedCards.map((history, index) => ({
            id: index + 1,
            name_history: history,
        }));

        const mappedRecommendedMethods = formData.arrayValue.map((method, index) => ({
            id: index + 1,
            name_reccomended: method,
        }));
        // Buat data dengan struktur yang diminta
        const sendData = {
            ResultMethodKB: {
                nama_akseptor: formData.nama_akseptor,
                nama_suami: formData.nama_suami,
                pendidikan_terakhir: formData.pendidikan_terakhir,
                tujuan_kb: formData.tujuan_kb,
                no_hp: formData.no_hp,
                alamat: formData.alamat,
                condition: formData.selectedCardKondisi,
                pregnancyStatus: formData.selectedCardHamil || 'Sudah Pernah Hamil',
                ageCategory: formData.selectedCardUsia,
                medicalHistory: mappedMedicalHistory,
                recommendedMethods: mappedRecommendedMethods,
            },
        };


        console.log('Data yang akan dikirim:', sendData);

        // Sertakan CSRF token
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        // SweetAlert untuk konfirmasi sebelum mengirim data
        Swal.fire({
            title: 'Konfirmasi',
            text: 'Apakah Anda yakin ingin menyimpan data?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Ya, simpan',
            cancelButtonText: 'Batal',
        }).then((result) => {
            if (result.isConfirmed) {
                // Jika pengguna mengonfirmasi, kirim data
                fetch('/save-form-result', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                    },
                    body: JSON.stringify(sendData),
                })
                    .then((response) => {
                        if (!response.ok) {
                            throw new Error(`HTTP error! Status: ${response.status}`);
                        }
                        return response.json();
                    })
                    .then((data) => {
                        console.log('Data berhasil dikirim:', data);
                        // SweetAlert untuk pemberitahuan sukses
                        Swal.fire({
                            title: 'Berhasil!',
                            text: 'Data berhasil dikirim.',
                            icon: 'success',
                            confirmButtonText: 'OK',
                        }).then(() => {
                            // Redirect ke route main-menu
                            window.location.href = '/post-test-kuisioner';
                        });
                    })
                    .catch((error) => {
                        console.error('Terjadi kesalahan saat mengirim data:', error);

                        // SweetAlert untuk pemberitahuan error
                        Swal.fire({
                            title: 'Error!',
                            text: 'Terjadi kesalahan saat mengirim data. Silakan coba lagi.',
                            icon: 'error',
                            confirmButtonText: 'OK',
                        });
                    });
            } else {
                // Jika pengguna membatalkan, tampilkan notifikasi atau lakukan aksi lain
                Swal.fire({
                    title: 'Dibatalkan',
                    text: 'Data tidak jadi disimpan.',
                    icon: 'info',
                    confirmButtonText: 'OK',
                });
            }
        });

    },
});

$(".validation-wizard").validate({
    ignore: "input[type=hidden]",
    errorClass: "text-danger",
    successClass: "text-success",
    highlight: function (element, errorClass) {
        $(element).removeClass(errorClass);
    },
    unhighlight: function (element, errorClass) {
        $(element).removeClass(errorClass);
    },
    errorPlacement: function (error, element) {
        error.insertAfter(element);
    },
    rules: {
        email: {
            email: !0,
        },
    },
});
