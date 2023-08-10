@section('cssTambahan')
<link rel="stylesheet" href="{{ asset('lte/plugins/daterangepicker/daterangepicker.css') }}">
<link rel="stylesheet" href="{{ asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('lte/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
<link rel="stylesheet" href="{{ asset('lte/plugins/dropzone/min/dropzone.min.css') }}">
<link rel="stylesheet" href="{{ asset('lte/plugins/daterangepicker/daterangepicker.css') }}">
<link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('lte/plugins/datatables-fixedcolumns/css/fixedColumns.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('lte/plugins/summernote/summernote-bs4.min.css') }}">

@stop
@section('scriptTambahan')
<script src="{{ asset('lte/plugins/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('lte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>
<script src="{{ asset('lte/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('lte/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
<script src="{{ asset('lte/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('lte/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ asset('lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<script src="{{ asset('lte/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
<script src="{{ asset('lte/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('lte/plugins/jquery-validation/additional-methods.min.js') }}"></script>

<script src="{{ asset('lte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('lte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('lte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('lte/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('lte/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('lte/plugins/pdfmake/vfs_fonts.js') }}"></script>

<script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('lte/plugins/datatables-fixedcolumns/js/dataTables.fixedColumns.min.js') }}"></script>
<script src="{{ asset('lte/plugins/datatables-fixedcolumns/js/fixedColumns.bootstrap4.min.js') }}"></script>
<script src="{{ asset('lte/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('lte/dist/js/demo.js') }}"></script>
<script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script>
  $(function () {
    $("#tbkerjasama").DataTable({
      // "responsive": true, 
      "lengthChange": false, 
      "autoWidth": true,
      "info": false,
      "scrollX": "300px", 
      "scrollY": true, 
      "scrollCollapse": true,
      "buttons": ["copy", "excel", "pdf", "print"],
      fixedColumns:   {
        leftColumns: 2
      },

    }).buttons().container().appendTo('#tbkerjasama_wrapper .col-md-6:eq(0)');


    $("#tbuser").DataTable({
      "responsive": true,
      "lengthChange": false, 
      "autoWidth": false, 
    }).buttons().container().appendTo('#tbuser_wrapper .col-md-6:eq(0)');



    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script>

  $(function () {
    //Add text editor
    $('#compose-textarea').summernote()
  });
  $(document).ready(function() {
   $('input[type="radio"]').click(function() {
    if($(this).attr('id') == 'radioPrimary2') {
      $('.tampil').show('slow');     
    }
    else{
      $('.tampil').hide('slow');
    } 
  });
 });

  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
    	theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
    	format: 'DD-MM-YYYY'
    });
    $('#tgl_mulai').datetimepicker({
      format: 'YYYY-MM-DD'
    });
    $('#tgl_akhir').datetimepicker({
      format: 'YYYY-MM-DD'
    });
    $(function () {
      $('#tglkirim').datetimepicker();
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
    	timePicker: true,
    	timePickerIncrement: 30,
    	locale: {
    		format: 'DD/MM/YYYY hh:mm A'
    	}
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
    {
    	ranges   : {
    		'Today'       : [moment(), moment()],
    		'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
    		'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
    		'Last 30 Days': [moment().subtract(29, 'days'), moment()],
    		'This Month'  : [moment().startOf('month'), moment().endOf('month')],
    		'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    	},
    	startDate: moment().subtract(29, 'days'),
    	endDate  : moment()
    },
    function (start, end) {
    	$('#reportrange span').html(start.format('D MMMM, YYYY') + ' - ' + end.format('D MMMM, YYYY'))
    }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
    	format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
    	$('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
    	$(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
  	window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
  	document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
  	document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
  	myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
  	myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End

  $(function () {
  	$.validator.setDefaults({
  		submitHandler: function () {
  			alert( "Form successful submitted!" );
  		}
  	});
  	$('#quickForm').validate({
  		rules: {
  			email: {
  				required: true,
  				email: true,
  			},
  			password: {
  				required: true,
  				minlength: 5
  			},
  			terms: {
  				required: true
  			},
  		},
  		messages: {
  			email: {
  				required: "Please enter a email address",
  				email: "Please enter a vaild email address"
  			},
  			password: {
  				required: "Please provide a password",
  				minlength: "Your password must be at least 5 characters long"
  			},
  			terms: "Please accept our terms"
  		},
  		errorElement: 'span',
  		errorPlacement: function (error, element) {
  			error.addClass('invalid-feedback');
  			element.closest('.form-group').append(error);
  		},
  		highlight: function (element, errorClass, validClass) {
  			$(element).addClass('is-invalid');
  		},
  		unhighlight: function (element, errorClass, validClass) {
  			$(element).removeClass('is-invalid');
  		}
  	});
  });
</script>