<!DOCTYPE html>
<html>
<head>    
   <?php echo $head; ?>
</head>
<body class="fixed-left">
<div id="wrapper">
    <div class="topbar">
        <div class="topbar-left">
            <div class="text-center">
            	<a href="<?php echo base_url();?>index.php/admin/user" class="logo">
                    <!--<i class="icon-magnet icon-c-logo"></i>
                    <span>Ub<i class="md md-album"></i>ld</span> -->                   
                    <img src="<?php echo base_url();?>/assets/images/logo.jpg" alt="Caravan" style="height: 62px;margin-bottom: 2px;margin-left: 2px;width: 238px;">
                </a></div>
        </div>
        <div class="navbar navbar-default" role="navigation">
            <?php echo $header; ?>
        </div>
    </div>
    <div class="left side-menu">
        <?php echo $left_sidebar; ?>
    </div>
    <div class="content-page">
        <?php echo $maincontent; ?>
        <footer class="footer text-right">
        	<?php echo $footer; ?>
        </footer>
    </div>
   <!-- <div class="side-bar right-bar nicescroll"><h4 class="text-center">Chat</h4>

        <div class="contact-list nicescroll">
            <ul class="list-group contacts-list">
                <li class="list-group-item"><a href="#">
                    <div class="avatar"><img src="assets/images/users/avatar-1.jpg" alt=""></div>
                    <span class="name">Chadengle</span> <i class="fa fa-circle online"></i></a> <span
                        class="clearfix"></span></li>
                <li class="list-group-item"><a href="#">
                    <div class="avatar"><img src="assets/images/users/avatar-2.jpg" alt=""></div>
                    <span class="name">Tomaslau</span> <i class="fa fa-circle online"></i></a> <span
                        class="clearfix"></span></li>
                <li class="list-group-item"><a href="#">
                    <div class="avatar"><img src="assets/images/users/avatar-3.jpg" alt=""></div>
                    <span class="name">Stillnotdavid</span> <i class="fa fa-circle online"></i></a> <span
                        class="clearfix"></span></li>
                <li class="list-group-item"><a href="#">
                    <div class="avatar"><img src="assets/images/users/avatar-4.jpg" alt=""></div>
                    <span class="name">Kurafire</span> <i class="fa fa-circle online"></i></a> <span
                        class="clearfix"></span></li>
                <li class="list-group-item"><a href="#">
                    <div class="avatar"><img src="assets/images/users/avatar-5.jpg" alt=""></div>
                    <span class="name">Shahedk</span> <i class="fa fa-circle away"></i></a> <span
                        class="clearfix"></span></li>
                <li class="list-group-item"><a href="#">
                    <div class="avatar"><img src="assets/images/users/avatar-6.jpg" alt=""></div>
                    <span class="name">Adhamdannaway</span> <i class="fa fa-circle away"></i></a> <span
                        class="clearfix"></span></li>
                <li class="list-group-item"><a href="#">
                    <div class="avatar"><img src="assets/images/users/avatar-7.jpg" alt=""></div>
                    <span class="name">Ok</span> <i class="fa fa-circle away"></i></a> <span class="clearfix"></span>
                </li>
                <li class="list-group-item"><a href="#">
                    <div class="avatar"><img src="assets/images/users/avatar-8.jpg" alt=""></div>
                    <span class="name">Arashasghari</span> <i class="fa fa-circle offline"></i></a> <span
                        class="clearfix"></span></li>
                <li class="list-group-item"><a href="#">
                    <div class="avatar"><img src="assets/images/users/avatar-9.jpg" alt=""></div>
                    <span class="name">Joshaustin</span> <i class="fa fa-circle offline"></i></a> <span
                        class="clearfix"></span></li>
                <li class="list-group-item"><a href="#">
                    <div class="avatar"><img src="assets/images/users/avatar-10.jpg" alt=""></div>
                    <span class="name">Sortino</span> <i class="fa fa-circle offline"></i></a> <span
                        class="clearfix"></span></li>
            </ul>
        </div>
    </div>-->
</div>
<script>var resizefunc = [];</script>
<script src="<?php echo base_url();?>/assets/admin/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>/assets/admin/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>/assets/admin/js/detect.js"></script>
<script src="<?php echo base_url();?>/assets/admin/js/fastclick.js"></script>
<script src="<?php echo base_url();?>/assets/admin/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url();?>/assets/admin/js/jquery.blockUI.js"></script>
<script src="<?php echo base_url();?>/assets/admin/js/waves.js"></script>
<script src="<?php echo base_url();?>/assets/admin/js/wow.min.js"></script>
<script src="<?php echo base_url();?>/assets/admin/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url();?>/assets/admin/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url();?>/assets/admin/plugins/peity/jquery.peity.min.js"></script>
<script src="<?php echo base_url();?>/assets/admin/plugins/waypoints/lib/jquery.waypoints.js"></script>
<script src="<?php echo base_url();?>/assets/admin/plugins/counterup/jquery.counterup.min.js"></script>
<script src="<?php echo base_url();?>/assets/admin/plugins/morris/morris.min.js"></script>
<script src="<?php echo base_url();?>/assets/admin/plugins/raphael/raphael-min.js"></script>
<script src="<?php echo base_url();?>/assets/admin/plugins/jquery-knob/jquery.knob.js"></script>
<script src="<?php echo base_url();?>/assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>/assets/admin/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url();?>/assets/admin/pages/jquery.dashboard.js"></script>
<script src="<?php echo base_url();?>/assets/admin/js/jquery.core.js"></script>
<script src="<?php echo base_url();?>/assets/admin/js/jquery.app.js"></script>
<script src="<?php echo base_url();?>/assets/admin/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="<?php echo base_url();?>/assets/admin/plugins/switchery/dist/switchery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/admin/plugins/multiselect/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/admin/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
<script src="<?php echo base_url();?>/assets/admin/plugins/select2/select2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>/assets/admin/plugins/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>/assets/admin/plugins/bootstrap-filestyle/src/bootstrap-filestyle.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>/assets/admin/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>/assets/admin/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>/assets/admin/plugins/moment/moment.js"></script>
<script src="<?php echo base_url();?>/assets/admin/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script src="<?php echo base_url();?>/assets/admin/plugins/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo base_url();?>/assets/admin/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url();?>/assets/admin/plugins/clockpicker/dist/jquery-clockpicker.min.js"></script>
<script src="<?php echo base_url();?>/assets/admin/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url();?>/assets/admin/plugins/custombox/dist/custombox.min.js"></script>
<script src="<?php echo base_url();?>/assets/admin/plugins/custombox/dist/legacy.min.js"></script>
<script src="<?php echo base_url();?>/assets/admin/plugins/morris/morris.min.js"></script>
<script src="<?php echo base_url();?>/assets/admin/plugins/raphael/raphael-min.js"></script>

<script src="<?php echo base_url();?>/assets/admin/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url();?>/assets/admin/plugins/jquery-datatables-editable/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>/assets/admin/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url();?>/assets/admin/plugins/tiny-editable/mindmup-editabletable.js"></script>
<script src="<?php echo base_url();?>/assets/admin/plugins/tiny-editable/numeric-input-example.js"></script>
<script src="<?php echo base_url();?>/assets/admin/pages/datatables.editable.init.js"></script>
<script>$('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();</script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/admin/pages/jquery.leads.init.js"></script>

<script src="<?php echo base_url();?>/assets/admin/plugins/summernote/dist/summernote.min.js"></script>
<script>jQuery(document).ready(function () {

    $('.summernote').summernote({
        height: 350,                 // set editor height
        minHeight: null,             // set minimum height of editor
        maxHeight: null,             // set maximum height of editor
        focus: false
    });

    $('.inline-editor').summernote({
        airMode: true
    });

});</script>

<script type="text/javascript">jQuery(document).ready(function ($) {
    $('.counter').counterUp({
        delay: 100,
        time: 1200
    });

    $(".knob").knob();

});</script>
<script type="text/javascript">$(document).ready(function () {
    $('#datatable').dataTable();
});</script>
<script>jQuery(document).ready(function () {

    //advance multiselect start
    $('#my_multi_select3').multiSelect({
        selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
        selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
        afterInit: function (ms) {
            var that = this,
                    $selectableSearch = that.$selectableUl.prev(),
                    $selectionSearch = that.$selectionUl.prev(),
                    selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                    selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

            that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                    .on('keydown', function (e) {
                        if (e.which === 40) {
                            that.$selectableUl.focus();
                            return false;
                        }
                    });

            that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                    .on('keydown', function (e) {
                        if (e.which == 40) {
                            that.$selectionUl.focus();
                            return false;
                        }
                    });
        },
        afterSelect: function () {
            this.qs1.cache();
            this.qs2.cache();
        },
        afterDeselect: function () {
            this.qs1.cache();
            this.qs2.cache();
        }
    });

    // Select2
    $(".select2").select2();

    $(".select2-limiting").select2({
        maximumSelectionLength: 2
    });

    $('.selectpicker').selectpicker();
    $(":file").filestyle({input: false});
});

//Bootstrap-TouchSpin
$(".vertical-spin").TouchSpin({
    verticalbuttons: true,
    verticalupclass: 'ion-plus-round',
    verticaldownclass: 'ion-minus-round'
});
var vspinTrue = $(".vertical-spin").TouchSpin({
    verticalbuttons: true
});
if (vspinTrue) {
    $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
}

$("input[name='demo1']").TouchSpin({
    min: 0,
    max: 100,
    step: 0.1,
    decimals: 2,
    boostat: 5,
    maxboostedstep: 10,
    postfix: '%'
});
$("input[name='demo2']").TouchSpin({
    min: -1000000000,
    max: 1000000000,
    stepinterval: 50,
    maxboostedstep: 10000000,
    prefix: '$'
});
$("input[name='demo3']").TouchSpin();
$("input[name='demo3_21']").TouchSpin({
    initval: 40
});
$("input[name='demo3_22']").TouchSpin({
    initval: 40
});

$("input[name='demo5']").TouchSpin({
    prefix: "pre",
    postfix: "post"
});
$("input[name='demo0']").TouchSpin({});


//Bootstrap-MaxLength
$('input#defaultconfig').maxlength()

$('input#thresholdconfig').maxlength({
    threshold: 20
});

$('input#moreoptions').maxlength({
    alwaysShow: true,
    warningClass: "label label-success",
    limitReachedClass: "label label-danger"
});

$('input#alloptions').maxlength({
    alwaysShow: true,
    warningClass: "label label-success",
    limitReachedClass: "label label-danger",
    separator: ' out of ',
    preText: 'You typed ',
    postText: ' chars available.',
    validate: true
});

$('textarea#textarea').maxlength({
    alwaysShow: true
});

$('input#placement').maxlength({
    alwaysShow: true,
    placement: 'top-left'
});</script> 
<script>jQuery(document).ready(function () {

    // Time Picker
    jQuery('#timepicker').timepicker({
        defaultTIme: false
    });
    jQuery('#timepicker2').timepicker({
        showMeridian: false
    });
    jQuery('#timepicker3').timepicker({
        minuteStep: 15
    });

    //colorpicker start

    $('.colorpicker-default').colorpicker({
        format: 'hex'
    });
    $('.colorpicker-rgba').colorpicker();

    // Date Picker
    jQuery('#datepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });
	 jQuery('#datepicker-autoclose1').datepicker({
        autoclose: true,
        todayHighlight: true
    });
	jQuery('#datepicker-autoclose2').datepicker({
        autoclose: true,
        todayHighlight: true
	});
	jQuery('#datepicker-autoclose3').datepicker({
        autoclose: true,
        todayHighlight: true
	});
	jQuery('#datepicker-autoclose4').datepicker({
        autoclose: true,
        todayHighlight: true
	});
	jQuery('#datepicker-autoclose5').datepicker({
        autoclose: true,
        todayHighlight: true
	});
	jQuery('#datepicker-autoclose6').datepicker({
        autoclose: true,
        todayHighlight: true
	});
	jQuery('#datepicker-autoclose7').datepicker({
        autoclose: true,
        todayHighlight: true
	});
	jQuery('#datepicker-autoclose8').datepicker({
        autoclose: true,
        todayHighlight: true
	});
	jQuery('#datepicker-autoclose9').datepicker({
        autoclose: true,
        todayHighlight: true
	});
    jQuery('#datepicker-inline').datepicker();
    jQuery('#datepicker-multiple-date').datepicker({
        format: "mm/dd/yyyy",
        clearBtn: true,
        multidate: true,
        multidateSeparator: ","
    });
    jQuery('#date-range').datepicker({
        toggleActive: true
    });

    //Clock Picker
    $('.clockpicker').clockpicker({
        donetext: 'Done'
    });

    $('#single-input').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
    $('#check-minutes').click(function (e) {
        // Have to stop propagation here
        e.stopPropagation();
        $("#single-input").clockpicker('show')
                .clockpicker('toggleView', 'minutes');
    });


    //Date range picker
    $('.input-daterange-datepicker').daterangepicker({
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-default',
        cancelClass: 'btn-white'
    });
    $('.input-daterange-timepicker').daterangepicker({
        timePicker: true,
        format: 'MM/DD/YYYY h:mm A',
        timePickerIncrement: 30,
        timePicker12Hour: true,
        timePickerSeconds: false,
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-default',
        cancelClass: 'btn-white'
    });
    $('.input-limit-datepicker').daterangepicker({
        format: 'MM/DD/YYYY',
        minDate: '06/01/2015',
        maxDate: '06/30/2015',
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-default',
        cancelClass: 'btn-white',
        dateLimit: {
            days: 6
        }
    });

    $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

    $('#reportrange').daterangepicker({
        format: 'MM/DD/YYYY',
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        minDate: '01/01/2012',
        maxDate: '12/31/2015',
        dateLimit: {
            days: 60
        },
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: true,
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'left',
        drops: 'down',
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-default',
        cancelClass: 'btn-white',
        separator: ' to ',
        locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Cancel',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
        }
    }, function (start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    });

});</script>
</body>
</html>

<!--,
		 toolbar: [
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['para', ['ul', 'ol', 'paragraph']]
  ]-->                