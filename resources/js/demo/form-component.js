
// Form-Component.js
// ====================================================================
// ====================================================================
// - ThemeOn.net -


$(document).ready(function() {


   
   // =================================================================
   // SWITCHERY
   // =================================================================
   
   
   // Checked by default
   // =================================================================
   new Switchery(document.getElementById('demo-sw-checked'));
   
   
   
   
   
   
   // Unchecked by default
   // =================================================================
   new Switchery(document.getElementById('demo-sw-unchecked'));





   // Checking state
   // =================================================================
   var changeCheckbox = document.getElementById('demo-sw-checkstate'), changeField = document.getElementById('demo-sw-checkstate-field');

   new Switchery(changeCheckbox)
   changeField.innerHTML = changeCheckbox.checked;
   

   changeCheckbox.onchange = function() {
      changeField.innerHTML = changeCheckbox.checked;
   };








   // Colored
   // =================================================================
   new Switchery(document.getElementById('demo-sw-clr1'), {color:'#489eed'});
   new Switchery(document.getElementById('demo-sw-clr2'), {color:'#35b9e7'});   
   new Switchery(document.getElementById('demo-sw-clr3'), {color:'#44ba56'});   
   new Switchery(document.getElementById('demo-sw-clr4'), {color:'#f0a238'});   
   new Switchery(document.getElementById('demo-sw-clr5'), {color:'#e33a4b'});   
   new Switchery(document.getElementById('demo-sw-clr6'), {color:'#2cd0a7'});   
   new Switchery(document.getElementById('demo-sw-clr7'), {color:'#8669cc'});   
   new Switchery(document.getElementById('demo-sw-clr8'), {color:'#ef6eb6'});   

   
   
   
   
   
   
   
   // Sizes
   // =================================================================
   new Switchery(document.getElementById('demo-sw-sz'));
   new Switchery(document.getElementById('demo-sw-sz-lg'));
   new Switchery(document.getElementById('demo-sw-sz-md'));
   new Switchery(document.getElementById('demo-sw-sz-sm'));
   
   
   
   
   
   
   
   
   // =================================================================
   // DROPZONE.JS
   // =================================================================
   Dropzone.options.demoDropzone = { // The camelized version of the ID of the form element
      // The configuration we've talked about above
      autoProcessQueue: false,
      //uploadMultiple: true,
      //parallelUploads: 25,
      //maxFiles: 25,

      // The setting up of the dropzone
      init: function() {
      var myDropzone = this;
         //  Here's the change from enyo's tutorial...
         //  $("#submit-all").click(function (e) {
         //  e.preventDefault();
         //  e.stopPropagation();
         //  myDropzone.processQueue();
          //
         //}
         //    );

      }

   }
   
   
   
   // =================================================================
   // SUMMER NOTE
   // =================================================================
   $('#demo-summernote').summernote({height: 250});
   
   
   
   
   
   // Initialize bootstrap select
   // =================================================================
   $('.selectpicker').selectpicker();
  
  
  
  
  
  
  
   // Initialize chosen
   // =================================================================
   $('.chosen-select').chosen();
   $('#demo-cs-multi').chosen({width:'100%'});
   
   
   
   
   //Horizontal range slider
   // =================================================================
   $("#demo-range-def").noUiSlider({
      start: [ 20 ],
      connect : 'lower',
      range: {
          'min': [  0 ],
          'max': [ 100 ]
      }
   }).Link('lower').to($("#demo-range-def-val"));
   
   
   
   
   
   
   //Slider step by step
   // =================================================================
   $("#demo-range-step").noUiSlider({
      start: [ 20 ],
      connect : 'lower',
      step:10,
      range: {
         'min': [  0 ],
         'max': [ 100 ]
      }
   }).Link('lower').to($("#demo-range-step-val"));





   //Vertical slider
   // =================================================================
   $("#demo-range-ver1").noUiSlider({
      start: [ 80 ],
      connect: 'lower',
      range: {
          'min':  [20],
          'max':  [100]
      },
      orientation: 'vertical',
      direction: 'rtl'
   });     

   
   
   


   //Vertical slider
   // =================================================================
   $("#demo-range-ver2").noUiSlider({
      start: [ 50 ],
      connect: 'lower',
      range: {
          'min':  [20],
          'max':  [100]
      },
      orientation: 'vertical',
      direction: 'rtl'
   });

   
   
   
   
   
   //Vertical slider
   // =================================================================
   $("#demo-range-ver3").noUiSlider({
      start: [ 30 ],
      connect: 'lower',
      range: {
          'min':  [20],
          'max':  [100]
      },
      orientation: 'vertical',
      direction: 'rtl'
   });
   
   
   
   
   
   //Vertical slider
   // =================================================================
   $("#demo-range-ver4").noUiSlider({
      start: [ 50 ],
      connect: 'lower',
      range: {
          'min':  [20],
          'max':  [100]
      },
      orientation: 'vertical',
      direction: 'rtl'
   });
   
   
   
   
   //Vertical slider
   // =================================================================
   $("#demo-range-ver5").noUiSlider({
      start: [ 80 ],
      connect: 'lower',
      range: {
         'min':  [20],
         'max':  [100]
      },
      orientation: 'vertical',
      direction: 'rtl'
   });     








   // Drag
   // =================================================================
   $("#demo-range-drg").noUiSlider({
      start: [ 40, 60 ],
      behaviour: 'drag',
      connect: true,
      range: {
         'min':  20,
         'max':  80
      }
   });

   
   
   
   
   
   // Drag fixed
   // =================================================================
   $("#demo-range-fxt").noUiSlider({
       start: [ 40, 60 ],
       behaviour: 'drag-fixed',
       connect: true,
       range: {
           'min':  20,
           'max':  80
       }
   });

   
   
   
   
   
   // Drag tap
   // =================================================================
   $("#demo-range-com").noUiSlider({
      start: [ 40, 60 ],
      behaviour: 'drag-tap',
      connect: true,
      range: {
          'min':  20,
          'max':  80
      }
   });

   
   
   
   
   
   
   
   
   
   
   
   // Slider Pips
   // =================================================================
   var range_all_sliders = {
      'min': [ 0 ],
      '25%': [ 50 ],
      '50%': [ 100 ],
      '75%': [ 150 ],
      'max': [ 200 ]
   };

 
 
 
   
 
   
   
   
   // Horizontal pips
   // =================================================================  
   $("#demo-range-hpips").noUiSlider({
      range: range_all_sliders,
      connect: 'lower',
      start: 90   
   });
   

   
   
   
   
   
   // Vertical pips
   // =================================================================  
   $("#demo-range-vpips").noUiSlider({
      range: range_all_sliders,
      start: 90,
      connect: 'lower',
      orientation: 'vertical',
      direction: 'rtl'
   });    

   
   
   

   $(".demo-pips").noUiSlider_pips({
       mode: 'range',
       density: 5
   });   
   
   
   
   
   
   
   
   // Initialize datepicker
   // =================================================================
   $('#demo-dp-txtinput input').datepicker();

   
   
   
   
   
   
   // Datepicker with auto close
   // =================================================================
   $('#demo-dp-component .input-group.date').datepicker({autoclose:true});
   
   
   
   
   
   
   // Datepicker range selection
   // =================================================================
   $('#demo-dp-range .input-daterange').datepicker({
      format: "MM dd, yyyy",
      todayBtn: "linked",
      autoclose: true,
      todayHighlight: true
   });
   
   
   
   
   
   
   // Inline datepicker
   // =================================================================
   $('#demo-dp-inline div').datepicker({
   format: "MM dd, yyyy",
   todayBtn: "linked",
   autoclose: true,
   todayHighlight: true
   });
   
   
   
   
   
   
   
   // Initialize timeicker
   // =================================================================
   $('#demo-tp-com').timepicker();
   
   
   
   
   
   // Timeicker with input
   // =================================================================
   $('#demo-tp-textinput').timepicker({
      minuteStep: 5,
      showInputs: false,
      disableFocus: true
   });
   
   
   
   
   
   
   
   
   

   
});