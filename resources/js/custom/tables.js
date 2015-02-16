
// Tables.js
// ====================================================================
// ====================================================================
// - ThemeOn.net -



// Format Table
// =================================================================

function systemIdFormatter(value, row) {
    return '<a href="#" class="btn-link text-dark text-thin" >' + value + '</a>';
}




function firstnameFormatter(value, row) {
    return '<a href="#" class="btn-link" > ' + value + '</a>';
}




function lastnameFormatter(value, row) {
    return '<a href="#" class="btn-link" > ' + value + '</a>';
}



function remarksFormatter(value, row) {
   var labelColor;
   if (value == "Passed") {
      labelColor = "success";
   }else if(value == "N/A"){
      labelColor = "warning";
   }else if(value == "Failed"){
      labelColor = "danger";
   }   
   
   var icon = row.id % 2 === 0 ? 'fa-star' : 'fa-user';
   return '<div class="label label-'+ labelColor+' text-lg" style="display:inline-block; width:80%; font-size:1em; max-width:100px; padding:5px"> ' + value + '</div>';
}





function gradeSorter(a, b) {
    a = +a.substring(1); // remove $
    b = +b.substring(1);
    if (a > b) return 1;
    if (a < b) return -1;
    return 0;
}


// =================================================================






$(document).ready(function() {

   
   
   // Initialize bootstrap table
   // =================================================================
   $('#subject_students-table').bootstrapTable();

   
});