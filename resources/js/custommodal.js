$('document').ready(function () {
    var height = $(document).height();
    $('#pdf').css("height", (height));

    $('#myModal').on('show.bs.modal', function (e) {
        var lecture_loc = $(e.relatedTarget).data('book-loc');
        var lecture_title = $(e.relatedTarget).data('lec-title');
        $('#lec_title').text(lecture_title);

        var loc = location.protocol + "//" + location.hostname + "/edycian/res/upload_pdf/" + lecture_loc;
        //alert(loc);
        var success = new PDFObject({url: loc}).embed("pdf");
        $('#download').attr('href', loc);
        $('#fixlink').attr('href', loc);
        //getLecture(lecture_id);

    });

    $('#myModal-video').on('show.bs.modal', function (e) {
        var videotitle = $(e.relatedTarget).data('video-title');
        var video_location = $(e.relatedTarget).data('vid-loc');
        var new_location = '//www.youtube.com/embed/' + video_location;
        $('#video_title').text(videotitle);
        $('#vid').attr('src', new_location);
    });

    $('#myModal-quiz').on('show.bs.modal', function (e) {
        var act_title = $(e.relatedTarget).data('act-title');
        var set_id = $(e.relatedTarget).data('setid');
        $('#activity_title').text(act_title);
    });
//    load_questions(set_id);

    $('#myModal-question').on('show.bs.modal', function (e) {
        $('#alertbox').hide();
        var question_id = $(e.relatedTarget).data('question_id');
        var question = $(e.relatedTarget).data('question');
        var answer = $(e.relatedTarget).data('answer');
        var option1 = $(e.relatedTarget).data('option1');
        var option2 = $(e.relatedTarget).data('option2');
        var option3 = $(e.relatedTarget).data('option3');
        var image = $(e.relatedTarget).data('image');

        $('#e_question').val(question);
        $('#e_answer').val(answer);
        $('#e_option1').val(option1);
        $('#e_option2').val(option2);
        $('#e_option3').val(option3);
        $('#question_id').val(question_id);
        if (image == null) {
            $('#image_td').empty();
            $('#image_td').append('No Image')
        } else {
            $('#image_td').empty();
            $('#image_td').append('<img id="img_thumb" src="' + image + '" alt="" class="img-responsive thumbnail" style="width:180px;margin-top:10px;">')
        }
    });
});
function save() {
    var question_id = $('#question_id').val();
    var e_question = $('#e_question').val();
    var e_answer = $('#e_answer').val();
    var e_option1 = $('#e_option1').val();
    var e_option2 = $('#e_option2').val();
    var e_option3 = $('#e_option3').val();

    $.ajax({
        url: "edit_question.php",
        data: {action: "save",
            question_id: question_id,
            question: e_question,
            answer: e_answer,
            option1: e_option1,
            option2: e_option2,
            option3: e_option3
        },
        type: "POST",
        dataType: 'json',
        success: function (data) {
            if (data.error) {
//                    alert(data.error);
//                    alert('Saving Failed');
                $('#alertbox').show();
                $('#alertbox').addClass('alert-warning');
                $('#alertbox_label').text('Sorry! ')
                $('#alertbox_message').text('Editing question failed.');

            } else {

                $('#alertbox').show();
                $('#alertbox').addClass('alert-success');
                $('#alertbox_label').text('Congratulations! ')
                $('#alertbox_message').text('Editing question success.');
                $('#question_' + question_id).text(e_question);
                $('#answer_' + question_id).text(e_answer);
                $('#option1_' + question_id).text(e_option1);
                $('#option2_' + question_id).text(e_option2);
                $('#option3_' + question_id).text(e_option3);
            }
        }
    });
}





