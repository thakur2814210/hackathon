const urlParams = new URLSearchParams(window.location.search);
const myParam = urlParams.get('lang');
let defaultLang = "php";
if (myParam) {
    defaultLang = myParam;
}

let editor;
require.config({
    paths: {
        'vs': 'monaco-editor/min/vs'
    }
});
require(['vs/editor/editor.main'], function () {
    editor = monaco.editor.create(document.getElementById('container'), {
        value: ['// Write Your Code Here.'].join('\n'),
        language: defaultLang,
        theme: "vs-dark"
    });
});

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

    let email = $("#email_f").val();
    if (validateEmail(email)) {
        $(".control-material").removeClass("has-error")
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
