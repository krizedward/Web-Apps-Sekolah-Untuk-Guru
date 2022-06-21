@extends('layouts.ace')

@section('breadcrumbs')
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			Dashboard
		</li>
		<!-- <li>
			<a href="#">Other Pages</a>
		</li> -->
		<!-- <li class="active">Dashboards</li> -->
	</ul><!-- /.breadcrumb -->
	<div class="nav-search" id="nav-search">
		<form class="form-search">
			<span class="input-icon">
				<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
				<i class="ace-icon fa fa-search nav-search-icon"></i>
			</span>
		</form>
	</div><!-- /.nav-search -->
</div>
@endsection

@section('page-header')
<div class="page-header">
	<h1>
		Dashboard
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			Halaman yang berisikan ringkasan informasi yang ada diprogram.
		</small>
	</h1>
</div><!-- /.page-header -->
@endsection

@section('main')
<div class="col-xs-12">
	<!-- PAGE CONTENT BEGINS -->
	<div class="tabbable">
		<ul class="nav nav-tabs padding-18 tab-size-bigger" id="myTab">
			<li class="active">
				<a data-toggle="tab" href="#faq-tab-1">
					<i class="blue ace-icon fa fa-question-circle bigger-120"></i>
					Panduan
				</a>
			</li>
			<!-- <li>
				<a data-toggle="tab" href="#faq-tab-2">
					<i class="green ace-icon fa fa-user bigger-120"></i>
					Pengguna
				</a>
			</li> -->
			<!-- /.dropdown -->
		</ul>

		<div class="tab-content no-border padding-24">
			<div id="faq-tab-1" class="tab-pane fade in active">
				<div class="space-8"></div>
				<div id="faq-list-1" class="panel-group accordion-style1 accordion-style2">
					<div class="panel panel-default">
						<div class="panel-heading">
							<a href="#faq-1-1" data-parent="#faq-list-1" data-toggle="collapse" class="accordion-toggle collapsed">
								<i class="ace-icon fa fa-chevron-left pull-right" data-icon-hide="ace-icon fa fa-chevron-down" data-icon-show="ace-icon fa fa-chevron-left"></i>
								<i class="ace-icon fa fa-star bigger-130"></i>
								&nbsp; Program Gudang - Master Barang
							</a>
						</div>
						<div class="panel-collapse collapse" id="faq-1-1">
							<div class="panel-body">
								Mengelola data barang (menambahkan, mengengubah, dan menghapus).
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<a href="#faq-1-2" data-parent="#faq-list-1" data-toggle="collapse" class="accordion-toggle collapsed">
								<i class="ace-icon fa fa-chevron-left pull-right" data-icon-hide="ace-icon fa fa-chevron-down" data-icon-show="ace-icon fa fa-chevron-left"></i>
								<i class="ace-icon fa fa-star bigger-130"></i>
								&nbsp; Program Gudang - Master Kategori
							</a>
						</div>
						<div class="panel-collapse collapse" id="faq-1-2">
							<div class="panel-body">
								Mengelola data kategori (menambahkan, mengengubah, dan menghapus).
							</div>
						</div>
					</div>
					<!-- <div class="panel panel-default">
						<div class="panel-heading">
							<a href="#faq-1-2" data-parent="#faq-list-1" data-toggle="collapse" class="accordion-toggle collapsed">
								<i class="ace-icon fa fa-chevron-left pull-right" data-icon-hide="ace-icon fa fa-chevron-down" data-icon-show="ace-icon fa fa-chevron-left"></i>
								<i class="ace-icon fa fa-star bigger-130"></i>
								&nbsp; Program Gudang - Master Sales
							</a>
						</div>
						<div class="panel-collapse collapse" id="faq-1-2">
							<div class="panel-body">
								Mengelola data sales (menambahkan, mengubah, dan menghapus).
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<a href="#faq-1-3" data-parent="#faq-list-1" data-toggle="collapse" class="accordion-toggle collapsed">
								<i class="ace-icon fa fa-chevron-left pull-right" data-icon-hide="ace-icon fa fa-chevron-down" data-icon-show="ace-icon fa fa-chevron-left"></i>
								<i class="ace-icon fa fa-star bigger-130"></i>
								&nbsp; Program Gudang - Master Supplier
							</a>
						</div>
						<div class="panel-collapse collapse" id="faq-1-3">
							<div class="panel-body">
								Mengelola data supplier (menambahkan, mengubah, dan menghapus).
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<a href="#faq-1-4" data-parent="#faq-list-1" data-toggle="collapse" class="accordion-toggle collapsed">
								<i class="ace-icon fa fa-chevron-left pull-right" data-icon-hide="ace-icon fa fa-chevron-down" data-icon-show="ace-icon fa fa-chevron-left"></i>
								<i class="ace-icon fa fa-star bigger-130"></i>
								&nbsp; Program Gudang - Master Satuan
							</a>
						</div>
						<div class="panel-collapse collapse" id="faq-1-4">
							<div class="panel-body">
								Mengelola data satuan (menambahkan, mengubah, dan menghapus).
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<a href="#faq-1-5" data-parent="#faq-list-1" data-toggle="collapse" class="accordion-toggle collapsed">
								<i class="ace-icon fa fa-chevron-left pull-right" data-icon-hide="ace-icon fa fa-chevron-down" data-icon-show="ace-icon fa fa-chevron-left"></i>
								<i class="ace-icon fa fa-star bigger-130"></i>
								&nbsp; Program Gudang - Master Jenis Pembayaran
							</a>
						</div>
						<div class="panel-collapse collapse" id="faq-1-5">
							<div class="panel-body">
								Mengelola data jenis pembayaran (menambahkan, mengubah, dan menghapus).
							</div>
						</div>
					</div> -->
					<!-- data tab -->
				</div>
			</div>

			<!-- <div id="faq-tab-2" class="tab-pane fade">
											<h4 class="blue">
												<i class="green ace-icon fa fa-user bigger-110"></i>
												Account Questions
											</h4>
											<div class="space-8"></div>
											<div id="faq-list-2" class="panel-group accordion-style1 accordion-style2">
												<div class="panel panel-default">
													<div class="panel-heading">
														<a href="#faq-2-1" data-parent="#faq-list-2" data-toggle="collapse" class="accordion-toggle collapsed">
															<i class="ace-icon fa fa-chevron-right smaller-80" data-icon-hide="ace-icon fa fa-chevron-down align-top" data-icon-show="ace-icon fa fa-chevron-right"></i>&nbsp;
															Enim eiusmod high life accusamus terry richardson?
														</a>
													</div>
													<div class="panel-collapse collapse" id="faq-2-1">
														<div class="panel-body">
															Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
														</div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading">
														<a href="#faq-2-2" data-parent="#faq-list-2" data-toggle="collapse" class="accordion-toggle collapsed">
															<i class="ace-icon fa fa-chevron-right smaller-80" data-icon-hide="ace-icon fa fa-chevron-down align-top" data-icon-show="ace-icon fa fa-chevron-right"></i>&nbsp;
					  										Single-origin coffee nulla assumenda shoreditch et?
														</a>
													</div>
													<div class="panel-collapse collapse" id="faq-2-2">
														<div class="panel-body">
															Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
														</div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading">
														<a href="#faq-2-3" data-parent="#faq-list-2" data-toggle="collapse" class="accordion-toggle collapsed">
															<i class="ace-icon fa fa-chevron-right middle smaller-80" data-icon-hide="ace-icon fa fa-chevron-down align-top" data-icon-show="ace-icon fa fa-chevron-right"></i>&nbsp;
					  										Sunt aliqua put a bird on it squid?
														</a>
													</div>
													<div class="panel-collapse collapse" id="faq-2-3">
														<div class="panel-body">
															Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
														</div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading">
														<a href="#faq-2-4" data-parent="#faq-list-2" data-toggle="collapse" class="accordion-toggle collapsed">
															<i class="ace-icon fa fa-chevron-right smaller-80" data-icon-hide="ace-icon fa fa-chevron-down align-top" data-icon-show="ace-icon fa fa-chevron-right"></i>&nbsp;
					  										Brunch 3 wolf moon tempor sunt aliqua put?
														</a>
													</div>
													<div class="panel-collapse collapse" id="faq-2-4">
														<div class="panel-body">
															Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
														</div>
													</div>
												</div>
											</div>
			</div> -->
		</div>
	</div>
	<!-- PAGE CONTENT ENDS -->
</div><!-- /.col -->
@endsection

@section('footer')
<div class="footer">
	<div class="footer-inner">
		<div class="footer-content">
			<span class="bigger-120">
			<span class="blue bolder">Pro</span>
				Application &copy; 2022
			</span>
		</div>
	</div>
</div>
@endsection

@section('script')
		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>

		<!-- <![endif]-->

		<!--[if IE]>
		<script src="assets/js/jquery-1.11.3.min.js"></script>
		<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="{{ asset('assets/js/ace-elements.min.js') }}"></script>
		<script src="{{ asset('assets/js/ace.min.js') }}"></script>

		<!-- inline scripts related to this page -->
@endsection
