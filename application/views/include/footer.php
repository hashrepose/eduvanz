
		
		 <input type="hidden" id="current_url" name="current_url" value="<?php  echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>">
		
		<!-- all js here -->
<script src="<?=base_url();?>assets/js/vendors/jquery-3.2.1.min.js"></script>
 <script src="<?=base_url();?>assets/js/popper.js"></script> 
<script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?=base_url();?>assets/js/plugins.js"></script>
<script src="<?=base_url();?>assets/js/main.js"></script>
<!--<script src="<?=base_url();?>assets/plugins/sidemenu-responsive-tabs/js/sidemenu-responsive-tabs.js"></script> -->
<script src="<?=base_url();?>assets/plugins/datatable/jquery.dataTables.min.js"></script>
<script src="<?=base_url();?>assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url();?>assets/plugins/datatable/datatable.js"></script>
<!-- <script src="<?=base_url();?>assets/plugins/jquery-nice-select/js/jquery.nice-select.js"></script> 
<script src="<?=base_url();?>assets/plugins/jquery-nice-select/js/nice-select.js"></script>
<script src="<?=base_url();?>assets/plugins/select2/select2.full.min.js"></script>
<script src="<?=base_url();?>assets/plugins/multipleselect/multiple-select.js"></script>
<script src="<?=base_url();?>assets/plugins/multipleselect/multi-select.js"></script>
<script src="<?=base_url();?>assets/plugins/jqvmap/jquery.vmap.js"></script>-->
<script src="<?=base_url();?>assets/js/custom_query.js"></script>
<!--<script src="<?=base_url();?>assets/js/product.js"></script> -->
<!--<script src="<?=base_url();?>assets/plugins/summernote/summernote-bs4.js"></script><script src="<?=base_url();?>assets/plugins/summernote/summernote.js"></script> -->
<script src="<?=base_url();?>assets/plugins/date-picker/bootstrap-datepicker.min.js"></script>
<script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

<script src="<?=base_url();?>assets/js/customvalidation.js"></script>
<script src="https://rawgit.com/select2/select2/master/dist/js/select2.js"></script>
<script>
$(document).ready(function() {
	$('.select2').select2({
		placeholder: 'Select your Serach'
	});
});
</script>
  
<script type='text/javascript'>
$(function(){
	$('.input-group.date').datepicker({
		calendarWeeks: true,
		todayHighlight: true,
		autoclose: true
	});  
});

</script>
    


    </body>
</html>
