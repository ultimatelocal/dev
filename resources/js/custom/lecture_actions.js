function create_lecture() {
    $("#addLecture").modal('show');
    $("#lecture_id").val(0);
}


function edit_lecture(lec_id) {
    var lecture_pdf = $("#btnedit_" + lec_id).data("lecture_pdf");
    var lecture_video = $("#btnedit_" + lec_id).data("lecture_video");
    var lecture_title = $("#btnedit_" + lec_id).data("lecture_title");
//    var lecture_id = $("#btnedit_" + lec_id).data("lecture_id");
    
    //alert(lecture_pdf + " " +lecture_video + " " +lecture_title + " ");


    $("#addLecture").modal('show');

    $("#txtpdf").text("("+lecture_pdf+")");
    $("#lecture_video").val("www.youtube.com/"+lecture_video);
    $("#lecture_title").val(lecture_title);
    $("#lecture_id").val(lec_id);

    //alert("Edit ajax" + lec_id);

}
function delete_lecture(lec_id) {
    alert("Delete ajax" + lec_id);
}
function edit_question(question_id) {
    alert("Edit question Ajax" + question_id);
}
function delete_question(question_id) {
    alert("Delete question Ajax" + question_id);
}