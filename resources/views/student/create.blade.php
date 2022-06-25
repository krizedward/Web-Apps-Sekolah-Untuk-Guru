@extends('layouts.ace')

@section('judul','Form Tambah Murid')

@section('breadcrumbs')
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="#">Murid</a>
		</li>
		<li>
			<a href="{{ route('home') }}">Dashboard</a>
		</li>
		<li class="active">Murid</li>
	</ul><!-- /.breadcrumb -->
</div>
@endsection

@section('page-header')
<div class="page-header">
	<h1>
		Form Tambah Murid
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			Halaman yang berisikan form untuk manambah data murid serta informasi yang ke dalam program.
		</small>
	</h1>
</div><!-- /.page-header -->
@endsection

@section('main')
<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<form class="form-horizontal" role="form">
			<!-- nis -->
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> NIS </label>
				<div class="col-sm-9">
					<input type="text" id="form-field-1" name="nis" placeholder="Nomor NIS" class="col-xs-10 col-sm-5" />
				</div>
			</div>
			<!-- nisn -->
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> NISN </label>
				<div class="col-sm-9">
					<input type="text" id="form-field-1" name="nisn" placeholder="Nomor NISN" class="col-xs-10 col-sm-5" />
				</div>
			</div>
			<!-- nama -->
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama </label>
				<div class="col-sm-9">
					<input type="text" id="form-field-1" name="name" placeholder="Nama Murid" class="col-xs-10 col-sm-5" />
				</div>
			</div>
			<!-- tempat lahir -->
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tempat Lahir </label>
				<div class="col-sm-9">
					<input type="text" id="form-field-1" name="place_of_birth" placeholder="Tempat Lahir" class="col-xs-10 col-sm-5" />
				</div>
			</div>
			<!-- tanggal lahir -->
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tanggal Lahir </label>
				<div class="col-sm-9">
					<input type="text" id="form-field-1" name="date_of_birth" placeholder="Tanggal Lahir" class="col-xs-10 col-sm-5" />
				</div>
			</div>
			<!-- agama -->
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Agama </label>
				<div class="col-sm-9">
					<input type="text" id="form-field-1" name="religion" placeholder="Agama" class="col-xs-10 col-sm-5" />
				</div>
			</div>
			<!-- alamat -->
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Alamat </label>
				<div class="col-sm-9">
					<input type="text" id="form-field-1" name="address" placeholder="Alamat" class="col-xs-10 col-sm-5" />
				</div>
			</div>
			<!-- jenis kelamin -->
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Jenis Kelamin </label>
				<div class="col-sm-9">
					<input type="text" id="form-field-1" name="gender" placeholder="Jenis Kelamin" class="col-xs-10 col-sm-5" />
				</div>
			</div>
			<!-- nama wali murid -->
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Wali Murid </label>
				<div class="col-sm-9">
					<input type="text" id="form-field-1" name="name_student_guardian" placeholder="Nama Wali Murid" class="col-xs-10 col-sm-5" />
				</div>
			</div>
			<!-- status wali murid -->
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Status Wali Murid </label>
				<div class="col-sm-9">
					<input type="text" id="form-field-1" name="status_student_guardian" placeholder="Status Wali Murid" class="col-xs-10 col-sm-5" />
				</div>
			</div>
			<div class="space-4"></div>
			<div class="clearfix form-actions">
				<div class="col-md-offset-3 col-md-9">
					<button class="btn btn-info" type="button">
						<i class="ace-icon fa fa-check bigger-110"></i>
						Submit
					</button>
					&nbsp; &nbsp; &nbsp;
					<button class="btn" type="reset">
						<i class="ace-icon fa fa-undo bigger-110"></i>
						Reset
					</button>
				</div>
			</div>
		</form>
		<!-- PAGE CONTENT ENDS -->
	</div><!-- /.col -->
</div><!-- /.row -->
@endsection

@section('script')
		<script>
			$(document).ready(function() {
				// pengganti session dalam php dengna js
				
			});
		</script>
        <!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>

		<!-- <![endif]-->

		<!--[if IE]>
        <script src="assets/js/jquery-1.11.3.min.js"></script>
        <![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='{{ asset('assets/js/jquery.mobile.custom.min.js') }}'>"+"<"+"/script>");
		</script>
		<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

		<!-- page specific plugin scripts -->
		<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.dataTables.bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/js/dataTables.buttons.min.js') }}"></script>
		<script src="{{ asset('assets/js/buttons.flash.min.js') }}"></script>
		<script src="{{ asset('assets/js/buttons.html5.min.js') }}"></script>
		<script src="{{ asset('assets/js/buttons.print.min.js') }}"></script>
		<script src="{{ asset('assets/js/buttons.colVis.min.js') }}"></script>
		<script src="{{ asset('assets/js/dataTables.select.min.js') }}"></script>

		<!-- ace scripts -->
		<script src="{{ asset('assets/js/ace-elements.min.js') }}"></script>
		<script src="{{ asset('assets/js/ace.min.js') }}"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				//initiate dataTables plugin
				var myTable = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null, null,null, null, null,
					  { "bSortable": false }
					],
					"aaSorting": [],
					
					
					//"bProcessing": true,
			        //"bServerSide": true,
			        //"sAjaxSource": "http://127.0.0.1/table.php"	,
			
					//,
					//"sScrollY": "200px",
					//"bPaginate": false,
			
					//"sScrollX": "100%",
					//"sScrollXInner": "120%",
					//"bScrollCollapse": true,
					//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
					//you may want to wrap the table inside a "div.dataTables_borderWrap" element
			
					//"iDisplayLength": 50
			
			
					select: {
						style: 'multi'
					}
			    } );
			
				
				
				$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
				
				new $.fn.dataTable.Buttons( myTable, {
					buttons: [
					//   {
					// 	"extend": "colvis",
					// 	"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
					// 	"className": "btn btn-white btn-primary btn-bold",
					// 	columns: ':not(:first):not(:last)'
					//   },
					//   {
					// 	"extend": "copy",
					// 	"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
					// 	"className": "btn btn-white btn-primary btn-bold"
					//   },
					//   {
					// 	"extend": "csv",
					// 	"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
					// 	"className": "btn btn-white btn-primary btn-bold"
					//   },
					//   {
					// 	"extend": "excel",
					// 	"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
					// 	"className": "btn btn-white btn-primary btn-bold"
					//   },
					//   {
					// 	"extend": "pdf",
					// 	"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
					// 	"className": "btn btn-white btn-primary btn-bold"
					//   },
					//   {
					// 	"extend": "print",
					// 	"text": "<i class='fa fa-print bigger-110 green'></i> <span class='hidden'>Print</span>",
					// 	"className": "btn btn-white btn-primary btn-bold",
					// 	autoPrint: false,
					// 	message: 'This print was produced using the Print button for DataTables'
					//   },
					//   {
					// 	"extend": "add",
					// 	"text": "<i class='fa fa-print bigger-110 green'></i> <span class='hidden'>Add Data</span>",
					// 	"className": "btn btn-white btn-primary btn-bold",
					//   }		  
					]
				} );
				myTable.buttons().container().appendTo( $('.tableTools-container') );
				
				//style the message box
				var defaultCopyAction = myTable.button(1).action();
				myTable.button(1).action(function (e, dt, button, config) {
					defaultCopyAction(e, dt, button, config);
					$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
				});
				
				
				var defaultColvisAction = myTable.button(0).action();
				myTable.button(0).action(function (e, dt, button, config) {
					
					defaultColvisAction(e, dt, button, config);
					
					
					if($('.dt-button-collection > .dropdown-menu').length == 0) {
						$('.dt-button-collection')
						.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
						.find('a').attr('href', '#').wrap("<li />")
					}
					$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
				});
			
				////
			
				setTimeout(function() {
					$($('.tableTools-container')).find('a.dt-button').each(function() {
						var div = $(this).find(' > div').first();
						if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
						else $(this).tooltip({container: 'body', title: $(this).text()});
					});
				}, 500);
				
				
				
				
				
				myTable.on( 'select', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
					}
				} );
				myTable.on( 'deselect', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
					}
				} );
			
			
			
			
				/////////////////////////////////
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
				
				//select/deselect all rows according to table header checkbox
				$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$('#dynamic-table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) myTable.row(row).select();
						else  myTable.row(row).deselect();
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
					var row = $(this).closest('tr').get(0);
					if(this.checked) myTable.row(row).deselect();
					else myTable.row(row).select();
				});
			
			
			
				$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
					e.stopImmediatePropagation();
					e.stopPropagation();
					e.preventDefault();
				});
				
				
				
				//And for the first simple table, which doesn't have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if($row.is('.detail-row ')) return;
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
				});
			
				
			
				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				
				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
				
				
				
				
				/***************/
				$('.show-details-btn').on('click', function(e) {
					e.preventDefault();
					$(this).closest('tr').next().toggleClass('open');
					$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
				});
				/***************/
				
				
				
				
				
				/**
				//add horizontal scrollbars to a simple table
				$('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
				  {
					horizontal: true,
					styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
					size: 2000,
					mouseWheelLock: true
				  }
				).css('padding-top', '12px');
				*/
			
			
			})
		</script>
@endsection
