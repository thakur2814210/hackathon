$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

let count = 0
let job_id;
let filenames = [];
let linksArray = [];


$("#prev").click(function () {


    if (count <= 0) {} else {
        $(`[data-id="${count}"]`).removeClass("is-active");
        count--;
        trackCount(count)
        $(`[data-step-id="${count}"]`).addClass("is-active");
        $(`[data-step-id="${count}"]`).removeClass("is-completed");
        $(`[data-id="${count}"]`).addClass("is-active");

    }
    // $(`[data-step-id="${
    //     count + 1
    // }"]`).addClass("is-active");


})

$("#next").click(function () {
    loading(true)
    if (count >= 3) {
        alert("submit form")
        return;
    }
    // switchClass(count)
    // $(`[data-id="${count}"]`).removeClass("is-active");
    // count++;
    // $(`[data-id="${count}"]`).addClass("is-active");


    // do the task
    switch (count) {
        case 0:
            console.log("Save Jobs")

            let skills = []
            // console.log($(document).find(".tag")[0].innerText.split()[0].replace('x', '').trim())
            let tags = $(document).find(".tag")
            for (let index = 0; index < tags.length; index++) {
                const element = tags[index];
                skills.push(element.innerText.split()[0].replace('x', '').trim())
            }
            $("#skills").val(skills.join());
            let job_title = $("[name='job_title']").val()
            let job_description = $("[name='job_description']").val()
            let job_duration = $("[name='job_duration']").val()
            let budget = $("[name='job_budget']").val()
            let skills1 = $("#skills").val();
            $.ajax({
                url: "post-job",
                type: "post",
                data: {
                    job_title,
                    job_description,
                    job_duration,
                    budget,
                    skills: skills1,
                    job_id: job_id || null
                },
                success: function (response) {
                    console.log(response)
                    // You will get response from your PHP page (what you echo or print)
                    job_id = response.success.id || null;
                    loading(false)
                    switchClass(count)
                    $(`[data-id="${count}"]`).removeClass("is-active");

                    count++;
                    $(`[data-id="${count}"]`).addClass("is-active");
                    trackCount(count)

                },
                error: function (error) {
                    let errors = error.responseJSON;
                    errorsHtml = '<div style = "background-color: red;color: white;text-align: initial;padding: 10px;" class="alert alert-danger"><ul>';

                    $.each(errors.errors, function (key, value) {
                        errorsHtml += '<li>' + value[0] + '</li>'; // showing only the first error.
                    });
                    errorsHtml += '</ul></div>';
                    $('#errors').html(errorsHtml);
                    loading(false)
                }
            });


            break;
        case 1:
            console.log("upload File")
            $.ajax({
                url: "addfiles",
                type: "post",
                data: {
                    filenames,
                    job_id
                },
                success: function (response) {
                    console.log(response)
                    // You will get response from your PHP page (what you echo or print)
                    loading(false)
                    switchClass(count)

                    $(`[data-id="${count}"]`).removeClass("is-active");
                    count++;
                    $(`[data-id="${count}"]`).addClass("is-active");
                    trackCount(count)


                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                    loading(false)
                }
            });
            break;
        case 2:
            console.log("Social Links")


            if (linksArray.length != 0) { // jobs-sociallinks
                console.log(linksArray);

                $.ajax({
                    url: "jobs-sociallinks",
                    type: "post",
                    data: {
                        social_links: JSON.stringify(linksArray),
                        job_id: job_id || null
                    },
                    success: function (response) {
                        console.log(response)

                        loading(false)
                        switchClass(count)
                        $(`[data-id="${count}"]`).removeClass("is-active");
                        count++;
                        $(`[data-id="${count}"]`).addClass("is-active");
                        trackCount(count)
                        $("#next").addClass("is-disabled");
                        $("#next").text("Redirecting..")
                        setTimeout(() => {
                            window.location.href = "/jobs"
                        }, 2000)
                    },
                    error: function (error) {
                        console.log(error)
                        loading(false)
                    }
                });
            } else {
                switchClass(count)
                $(`[data-id="${count}"]`).removeClass("is-active");
                count++;
                $(`[data-id="${count}"]`).addClass("is-active");
                loading(false)
                // $("#add_links_button").css("visibility", "hidden");


            }

            // loading(false)
            // switchClass(count)
            // $(`[data-id="${count}"]`).removeClass("is-active");
            // count++;
            // $(`[data-id="${count}"]`).addClass("is-active");

            // $("#next").text("Redirecting..")
            // setTimeout(() => {
            //     window.location.href = "/jobs"
            // }, 2000)
            break;
        case 3:
            console.log("Finished")
            break;

        default:
            break;
    }


})

function switchClass(count) {
    $(`[data-step-id="${count}"]`).addClass("is-completed");
    $(`[data-step-id="${count}"]`).removeClass("is-active");

    $(`[data-step-id="${
        count + 1
    }"]`).addClass("is-active");
}

function loading(load) {
    if (load) {
        $("#next").text("Loading..")
        $("#next").addClass("is-disabled");
    } else {
        $("#next").text("Next")
        $("#next").removeClass("is-disabled");
    }
}

function deleteFunc(index) {
    $(document).find("#link-id-" + index).remove();
    linksArray.splice(index, 1)
    console.log(linksArray)
}

// function showAddLinksButton(count) {
//     if (count == 3) {
//         $("#add_links_button").css("visibility", "visible");
//     } else {
//         $("#add_links_button").css("visibility", "hidden");
//     }
// }

function hideModal() {
    $("#add_links_modal-background").removeClass('scaleInCircle');
    $("#add_links_modal-content").removeClass('scaleIn');
    $(".modal-close").addClass('is-hidden');
    setTimeout(() => {
        $("#vertical-form-modal").removeClass('is-active');
    }, 500)
}

function trackCount(count) {
    console.log(count)
    if (count == 2) {
        $("#add_links_button").css("visibility", "visible");
    } else {
        $("#add_links_button").css("visibility", "hidden");
    }
}

$("#add_links").click(function () {
    $(".responsive-table > tbody").html("<tr style='background-color: #ff8017'><th>URL</th><th>Actions</th></tr>");
    let link = $("#links").val();

    if (/^(http|https|ftp):\/\/[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/i.test(link)) {
        linksArray.push({'url': link});
        $(".control-material").removeClass("has-error")
        hideModal()
    } else { // alert("invalid URL");
        $(".control-material").addClass("has-error")
    } linksArray.map(function (value, index) {
        $(".responsive-table > tbody").append(`<tr id = link-id-${index}><td data-th='ID' >${
            value.url
        }</td><td data-th='Actions'><button class='button is-small btn-align accent-btn raised rounded btn-outlined' onclick = 'deleteFunc(${index})' >Remove</button></td></tr>`)
    })
})
$("#submit_button").click(function (event) {
    event.preventDefault();
    let skills = []
    // console.log($(document).find(".tag")[0].innerText.split()[0].replace('x', '').trim())
    let tags = $(document).find(".tag")
    for (let index = 0; index < tags.length; index++) {
        const element = tags[index];
        skills.push(element.innerText.split()[0].replace('x', '').trim())
    }
    $("#skills").val(skills.join());
    $("#myform").submit();


})

$("#file").change(function () {
    console.log($(this))
})


$(document).ready(function () {
    $('#files').fileuploader({ // Options will go here
    });
});
