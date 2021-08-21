$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

const urlParams = new URLSearchParams(window.location.search);
const myParam = urlParams.get('lang');
let defaultLang = "";

if (myParam) {
    defaultLang = myParam;
}
let defaultText = defaultLang == "" ? "Please Select Language First" : "Write your code here."

let editor;
require.config({
    paths: {
        'vs': '../monaco-editor/min/vs'
    }
});
require(['vs/editor/editor.main'], function () {
    editor = monaco.editor.create(document.getElementById('container'), {
        value: [defaultText].join('\n'),
        language: defaultLang,
        theme: "vs-dark",
        readOnly: defaultLang == "" ? true : false
    });
});


$("#container").change(function () {
    console.log(1);
})

function save() { // how do I get the value/code inside the editor?
    var value = editor.getValue()
    // console.log(value);
}

$("#submit_code").click(function (e) {
    e.preventDefault();
    $("#email_f").val("");
    // save();

})

$("#save").click(function (e) {
    e.preventDefault();
    if (defaultLang == "") {
        hideModal();
        return alert("Please Select Language First.")
    }

    $("#submit_code").addClass('is-loading');
    let email = $("#email_f").val();
    var value = editor.getValue()
    if (validateEmail(email)) { 
        $(".control-material").removeClass("has-error")
        $.ajax({
            url: slug,
            type: "post",
            data: {
                email,
                code: btoa(value),
                lang: defaultLang
            },
            success: function (response) {
                console.log(response);
                iziToast.show({
                    class: "success-toast",
                    icon: "sl sl-icon-check",
                    title: "Done,",
                    message: response.message,
                    titleColor: "#fff",
                    messageColor: "#fff",
                    iconColor: "#fff",
                    backgroundColor: "#00b289",
                    progressBarColor: "#444F60",
                    position: "topRight",
                    transitionIn: "fadeInDown",
                    close: !1,
                    zindex: 99999
                })
                $("#submit_code").removeClass('is-loading')

            },
            error: function (error) {
                console.log(error.responseJSON.message)
                iziToast.show({
                    class: "danger-toast",
                    icon: "sl sl-icon-close",
                    title: "Error,",
                    message: error.responseJSON.message,
                    titleColor: "#fff",
                    messageColor: "#fff",
                    iconColor: "#fff",
                    backgroundColor: "#FF7273",
                    progressBarColor: "#444F60",
                    position: "topRight",
                    transitionIn: "fadeInDown",
                    close: !1,
                    zindex: 99999
                })
                $("#submit_code").removeClass('is-loading')
            }
        });


        hideModal();
    } else {
        $(".control-material").addClass("has-error")
    }


    // $(".control-material").addClass("has-error")
    // hideModal();
})

function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}


function hideModal() {
    $("#email-modal-background").removeClass('scaleInCircle');
    $("#email-modal-content").removeClass('scaleIn');
    $(".modal-close").addClass('is-hidden');
    setTimeout(() => {
        $("#vertical-form-modal").removeClass('is-active');
    }, 500)
}

$("#change_lang").on("change", function () {
    window.location.href = '?lang=' + this.value;
})
