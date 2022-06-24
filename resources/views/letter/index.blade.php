@extends('layouts.ace')

@section('breadcrumbs')
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="#">Surat</a>
		</li>
		<li>
			<a href="{{ route('home') }}">Dashboard</a>
		</li>
		<li class="active">Surat</li>
	</ul><!-- /.breadcrumb -->
</div>
@endsection

@section('page-header')
<div class="page-header">
	<h1>
		Surat
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			Halaman yang berisikan ringkasan informasi yang ada diprogram.
		</small>
	</h1>
</div><!-- /.page-header -->
@endsection

@section('main-')
    <div class="row">
		<div class="col-xs-12">
			<div class="clearfix">
				<div class="pull-left tableTools-container"></div>
			</div>
			<div class="table-header">
				Data Surat
			</div>

			<!-- div.table-responsive -->

			<!-- div.dataTables_borderWrap -->
		<div>
		<table id="dynamic-table" class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<td class="center">
			    		<label class="pos-rel">
			    			<input type="checkbox" class="ace" />
			    			<span class="lbl"></span>
			    		</label>
			    	</td>
					<th>No</th>
					<th>Kode</th>
					<th>Nomor</th>
					<th>Aksi</th>
				</tr>
			</thead>
			
            <tbody>
				@foreach($list_surat as $data)
				<tr>
					<td class="center">
			    		<label class="pos-rel">
			    			<input type="checkbox" class="ace" />
			    			<span class="lbl"></span>
			    		</label>
			    	</td>
					<td>{{ $data->id }}</td>
					<td>{{ $data->letter_code }}</td>
					<td>{{ $data->letter_number }}</td>
					<td>
						<!-- <div class="hidden-sm hidden-xs action-buttons">
							<a href="#" onclick="deleteAlert()">
								<span class="label label-sm label-danger">Delete</span>
							</a>
					    </div> -->
						<div class="hidden-sm hidden-xs action-buttons">
							<a href="{{ route('kelas.edit',[$data->id]) }}">
								<span class="label label-sm label-warning">Edit</span>
							</a>
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection

@section('main')

<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
										<div class="tabbable">
											<ul id="inbox-tabs" class="inbox-tabs nav nav-tabs padding-16 tab-size-bigger tab-space-1">
												<li class="li-new-mail pull-right">
													<!-- <a data-toggle="tab" href="#write" data-target="write" class="btn-new-mail">
														<span class="btn btn-purple no-border">
															<i class="ace-icon fa fa-envelope bigger-130"></i>
															<span class="bigger-110">Write Mail</span>
														</span>
													</a> -->
												</li><!-- /.li-new-mail -->

												<li class="active">
													<a data-toggle="tab" href="#inbox" data-target="inbox">
														<i class="blue ace-icon fa fa-inbox bigger-130"></i>
														<span class="bigger-110">Surat Masuk</span>
													</a>
												</li>

												<li>
													<a data-toggle="tab" href="#sent" data-target="sent">
														<i class="orange ace-icon fa fa-location-arrow bigger-130"></i>
														<span class="bigger-110">Surat Keluar</span>
													</a>
												</li>

												<!-- <li>
													<a data-toggle="tab" href="#draft" data-target="draft">
														<i class="green ace-icon fa fa-pencil bigger-130"></i>
														<span class="bigger-110">Draft</span>
													</a>
												</li> -->

												<!-- <li class="dropdown">
													<a data-toggle="dropdown" class="dropdown-toggle" href="#">
														<i class="pink ace-icon fa fa-tags bigger-130"></i>

														<span class="bigger-110">
															Tags
															<i class="ace-icon fa fa-caret-down"></i>
														</span>
													</a>

													<ul class="dropdown-menu dropdown-light-blue dropdown-125">
														<li>
															<a data-toggle="tab" href="#tag-1">
																<span class="mail-tag badge badge-pink"></span>
																<span class="pink">Tag#1</span>
															</a>
														</li>

														<li>
															<a data-toggle="tab" href="#tag-family">
																<span class="mail-tag badge badge-success"></span>
																<span class="green">Family</span>
															</a>
														</li>

														<li>
															<a data-toggle="tab" href="#tag-friends">
																<span class="mail-tag badge badge-info"></span>
																<span class="blue">Friends</span>
															</a>
														</li>

														<li>
															<a data-toggle="tab" href="#tag-work">
																<span class="mail-tag badge badge-grey"></span>
																<span class="grey">Work</span>
															</a>
														</li>
													</ul>
												</li> -->
												<!-- /.dropdown -->
											</ul>

											<div class="tab-content no-border no-padding">
												<div id="inbox" class="tab-pane in active">
													<div class="message-container">
														<div id="id-message-list-navbar" class="message-navbar clearfix">
															<div class="message-bar">
																<div class="message-infobar" id="id-message-infobar">
																	<span class="blue bigger-150">Inbox</span>
																	<span class="grey bigger-110">(2 unread messages)</span>
																</div>

																<div class="message-toolbar hide">
																	<div class="inline position-relative align-left">
																		<button type="button" class="btn-white btn-primary btn btn-xs dropdown-toggle" data-toggle="dropdown">
																			<span class="bigger-110">Action</span>

																			<i class="ace-icon fa fa-caret-down icon-on-right"></i>
																		</button>

																		<ul class="dropdown-menu dropdown-lighter dropdown-caret dropdown-125">
																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-mail-reply blue"></i>&nbsp; Reply
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-mail-forward green"></i>&nbsp; Forward
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-folder-open orange"></i>&nbsp; Archive
																				</a>
																			</li>

																			<li class="divider"></li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-eye blue"></i>&nbsp; Mark as read
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-eye-slash green"></i>&nbsp; Mark unread
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-flag-o red"></i>&nbsp; Flag
																				</a>
																			</li>

																			<li class="divider"></li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-trash-o red bigger-110"></i>&nbsp; Delete
																				</a>
																			</li>
																		</ul>
																	</div>

																	<div class="inline position-relative align-left">
																		<button type="button" class="btn-white btn-primary btn btn-xs dropdown-toggle" data-toggle="dropdown">
																			<i class="ace-icon fa fa-folder-o bigger-110 blue"></i>
																			<span class="bigger-110">Move to</span>

																			<i class="ace-icon fa fa-caret-down icon-on-right"></i>
																		</button>

																		<ul class="dropdown-menu dropdown-lighter dropdown-caret dropdown-125">
																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-stop pink2"></i>&nbsp; Tag#1
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-stop blue"></i>&nbsp; Family
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-stop green"></i>&nbsp; Friends
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-stop grey"></i>&nbsp; Work
																				</a>
																			</li>
																		</ul>
																	</div>

																	<button type="button" class="btn btn-xs btn-white btn-primary">
																		<i class="ace-icon fa fa-trash-o bigger-125 orange"></i>
																		<span class="bigger-110">Delete</span>
																	</button>
																</div>
															</div>

															<div>
																<div class="messagebar-item-left">
																	<label class="inline middle">
																		<input type="checkbox" id="id-toggle-all" class="ace" />
																		<span class="lbl"></span>
																	</label>

																	&nbsp;
																	<div class="inline position-relative">
																		<a href="#" data-toggle="dropdown" class="dropdown-toggle">
																			<i class="ace-icon fa fa-caret-down bigger-125 middle"></i>
																		</a>

																		<ul class="dropdown-menu dropdown-lighter dropdown-100">
																			<li>
																				<a id="id-select-message-all" href="#">All</a>
																			</li>

																			<li>
																				<a id="id-select-message-none" href="#">None</a>
																			</li>

																			<li class="divider"></li>

																			<li>
																				<a id="id-select-message-unread" href="#">Unread</a>
																			</li>

																			<li>
																				<a id="id-select-message-read" href="#">Read</a>
																			</li>
																		</ul>
																	</div>
																</div>

																<div class="messagebar-item-right">
																	<div class="inline position-relative">
																		<a href="#" data-toggle="dropdown" class="dropdown-toggle">
																			Sort &nbsp;
																			<i class="ace-icon fa fa-caret-down bigger-125"></i>
																		</a>

																		<ul class="dropdown-menu dropdown-lighter dropdown-menu-right dropdown-100">
																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-check green"></i>
																					Date
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-check invisible"></i>
																					From
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-check invisible"></i>
																					Subject
																				</a>
																			</li>
																		</ul>
																	</div>
																</div>

																<div class="nav-search minimized">
																	<form class="form-search">
																		<span class="input-icon">
																			<input type="text" autocomplete="off" class="input-small nav-search-input" placeholder="Search inbox ..." />
																			<i class="ace-icon fa fa-search nav-search-icon"></i>
																		</span>
																	</form>
																</div>
															</div>
														</div>

														<div id="id-message-item-navbar" class="hide message-navbar clearfix">
															<div class="message-bar">
																<div class="message-toolbar">
																	<div class="inline position-relative align-left">
																		<button type="button" class="btn-white btn-primary btn btn-xs dropdown-toggle" data-toggle="dropdown">
																			<span class="bigger-110">Action</span>

																			<i class="ace-icon fa fa-caret-down icon-on-right"></i>
																		</button>

																		<ul class="dropdown-menu dropdown-lighter dropdown-caret dropdown-125">
																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-mail-reply blue"></i>&nbsp; Reply
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-mail-forward green"></i>&nbsp; Forward
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-folder-open orange"></i>&nbsp; Archive
																				</a>
																			</li>

																			<li class="divider"></li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-eye blue"></i>&nbsp; Mark as read
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-eye-slash green"></i>&nbsp; Mark unread
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-flag-o red"></i>&nbsp; Flag
																				</a>
																			</li>

																			<li class="divider"></li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-trash-o red bigger-110"></i>&nbsp; Delete
																				</a>
																			</li>
																		</ul>
																	</div>

																	<div class="inline position-relative align-left">
																		<button type="button" class="btn-white btn-primary btn btn-xs dropdown-toggle" data-toggle="dropdown">
																			<i class="ace-icon fa fa-folder-o bigger-110 blue"></i>
																			<span class="bigger-110">Move to</span>

																			<i class="ace-icon fa fa-caret-down icon-on-right"></i>
																		</button>

																		<ul class="dropdown-menu dropdown-lighter dropdown-caret dropdown-125">
																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-stop pink2"></i>&nbsp; Tag#1
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-stop blue"></i>&nbsp; Family
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-stop green"></i>&nbsp; Friends
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-stop grey"></i>&nbsp; Work
																				</a>
																			</li>
																		</ul>
																	</div>

																	<button type="button" class="btn btn-xs btn-white btn-primary">
																		<i class="ace-icon fa fa-trash-o bigger-125 orange"></i>
																		<span class="bigger-110">Delete</span>
																	</button>
																</div>
															</div>

															<div>
																<div class="messagebar-item-left">
																	<a href="#" class="btn-back-message-list">
																		<i class="ace-icon fa fa-arrow-left blue bigger-110 middle"></i>
																		<b class="bigger-110 middle">Back</b>
																	</a>
																</div>

																<div class="messagebar-item-right">
																	<i class="ace-icon fa fa-clock-o bigger-110 orange"></i>
																	<span class="grey">Today, 7:15 pm</span>
																</div>
															</div>
														</div>

														<div id="id-message-new-navbar" class="hide message-navbar clearfix">
															<div class="message-bar">
																<div class="message-toolbar">
																	<button type="button" class="btn btn-xs btn-white btn-primary">
																		<i class="ace-icon fa fa-floppy-o bigger-125"></i>
																		<span class="bigger-110">Save Draft</span>
																	</button>

																	<button type="button" class="btn btn-xs btn-white btn-primary">
																		<i class="ace-icon fa fa-times bigger-125 orange2"></i>
																		<span class="bigger-110">Discard</span>
																	</button>
																</div>
															</div>

															<div>
																<div class="messagebar-item-left">
																	<a href="#" class="btn-back-message-list">
																		<i class="ace-icon fa fa-arrow-left bigger-110 middle blue"></i>
																		<b class="middle bigger-110">Back</b>
																	</a>
																</div>

																<div class="messagebar-item-right">
																	<span class="inline btn-send-message">
																		<button type="button" class="btn btn-sm btn-primary no-border btn-white btn-round">
																			<span class="bigger-110">Send</span>

																			<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
																		</button>
																	</span>
																</div>
															</div>
														</div>

														<div class="message-list-container">
															<div class="message-list" id="message-list">
																<div class="message-item message-unread">
																	<label class="inline">
																		<input type="checkbox" class="ace" />
																		<span class="lbl"></span>
																	</label>

																	<i class="message-star ace-icon fa fa-star orange2"></i>
																	<span class="sender" title="Alex John Red Smith">PT.Indosat </span>
																	<span class="time">1:33 pm</span>

																	<span class="summary">
																		<span class="text">
																			Klik Untuk Melihat Detail Surat
																		</span>
																	</span>
																</div>

																<!-- <div class="message-item message-unread">
																	<label class="inline">
																		<input type="checkbox" class="ace" />
																		<span class="lbl"></span>
																	</label>

																	<i class="message-star ace-icon fa fa-star-o light-grey"></i>

																	<span class="sender" title="John Doe">
																		John Doe
																		<span class="light-grey">(4)</span>
																	</span>
																	<span class="time">7:15 pm</span>

																	<span class="attachment">
																		<i class="ace-icon fa fa-paperclip"></i>
																	</span>

																	<span class="summary">
																		<span class="badge badge-pink mail-tag"></span>
																		<span class="text">
																			Clik to open this message right here
																		</span>
																	</span>
																</div>

																<div class="message-item">
																	<label class="inline">
																		<input type="checkbox" class="ace" />
																		<span class="lbl"></span>
																	</label>

																	<i class="message-star ace-icon fa fa-star-o light-grey"></i>
																	<span class="sender" title="Philip Markov">Philip Markov </span>
																	<span class="time">10:15 am</span>

																	<span class="attachment">
																		<i class="ace-icon fa fa-paperclip"></i>
																	</span>

																	<span class="summary">
																		<span class="message-flags">
																			<i class="ace-icon fa fa-reply light-grey"></i>
																		</span>
																		<span class="text">
																			Photo booth beard raw denim letterpress vegan
																		</span>
																	</span>
																</div>

																<div class="message-item">
																	<label class="inline">
																		<input type="checkbox" class="ace" />
																		<span class="lbl"></span>
																	</label>

																	<i class="message-star ace-icon fa fa-star orange2"></i>
																	<span class="sender" title="Sabrina">Sabrina </span>
																	<span class="time">Yesterday</span>

																	<span class="summary">
																		<span class="text">
																			Nullam quis risus eget urna mollis ornare
																		</span>
																	</span>
																</div>

																<div class="message-item">
																	<label class="inline">
																		<input type="checkbox" class="ace" />
																		<span class="lbl"></span>
																	</label>

																	<i class="message-star ace-icon fa fa-star-o light-grey"></i>
																	<span class="sender" title="Philip Markov">Philip Markov </span>
																	<span class="time">Yesterday</span>

																	<span class="attachment">
																		<i class="ace-icon fa fa-paperclip"></i>
																	</span>

																	<span class="summary">
																		<span class="badge badge-success mail-tag"></span>
																		<span class="text">
																			Vestibulum id ligula porta felis euismod
																		</span>
																	</span>
																</div>

																<div class="message-item">
																	<label class="inline">
																		<input type="checkbox" class="ace" />
																		<span class="lbl"></span>
																	</label>

																	<i class="message-star ace-icon fa fa-star-o light-grey"></i>
																	<span class="sender" title="Doctor Gomenz">Doctor Gomenz </span>
																	<span class="time">April 5</span>

																	<span class="summary">
																		<span class="text">
																			Vim te vivendo convenire, summo fuisset
																		</span>
																	</span>
																</div>

																<div class="message-item">
																	<label class="inline">
																		<input type="checkbox" class="ace" />
																		<span class="lbl"></span>
																	</label>

																	<i class="message-star ace-icon fa fa-star-o light-grey"></i>
																	<span class="sender" title="Robin Hood">Robin Hood </span>
																	<span class="time">April 4</span>

																	<span class="summary">
																		<span class="message-flags">
																			<i class="ace-icon fa fa-reply light-grey"></i>
																		</span>
																		<span class="text">
																			No eos veniam equidem mentitum, his porro
																		</span>
																	</span>
																</div>

																<div class="message-item">
																	<label class="inline">
																		<input type="checkbox" class="ace" />
																		<span class="lbl"></span>
																	</label>

																	<i class="message-star ace-icon fa fa-star-o light-grey"></i>
																	<span class="sender" title="Google Inc">Google Inc </span>
																	<span class="time">April 3</span>

																	<span class="summary">
																		<span class="badge badge-grey mail-tag"></span>
																		<span class="text">
																			Convallis facilisis euismod urna sodales
																		</span>
																	</span>
																</div>

																<div class="message-item">
																	<label class="inline">
																		<input type="checkbox" class="ace" />
																		<span class="lbl"></span>
																	</label>

																	<i class="message-star ace-icon fa fa-star-o light-grey"></i>
																	<span class="sender" title="Shrek">Shrek </span>
																	<span class="time">March 28</span>

																	<span class="attachment">
																		<i class="ace-icon fa fa-paperclip"></i>
																	</span>

																	<span class="summary">
																		<span class="message-flags">
																			<i class="ace-icon fa fa-flag fa-flip-horizontal light-grey"></i>
																		</span>
																		<span class="text">
																			Photo booth beard raw denim letterpress vegan messenger
																		</span>
																	</span>
																</div>

																<div class="message-item">
																	<label class="inline">
																		<input type="checkbox" class="ace" />
																		<span class="lbl"></span>
																	</label>

																	<i class="message-star ace-icon fa fa-star-o light-grey"></i>
																	<span class="sender" title="Yahoo!">Yahoo! </span>
																	<span class="time">March 27</span>

																	<span class="summary">
																		<span class="message-flags">
																			<i class="ace-icon fa fa-mail-forward light-grey"></i>
																		</span>
																		<span class="text">
																			Tofu biodiesel williamsburg marfa, four loko mcsweeney
																		</span>
																	</span>
																</div> -->
															</div>
														</div>

														<div class="message-footer clearfix">
															<div class="pull-left"> 1 messages total </div>

															<div class="pull-right">
																<div class="inline middle"> page 1 of 1 </div>

																&nbsp; &nbsp;
																<ul class="pagination middle">
																	<li class="disabled">
																		<span>
																			<i class="ace-icon fa fa-step-backward middle"></i>
																		</span>
																	</li>

																	<li class="disabled">
																		<span>
																			<i class="ace-icon fa fa-caret-left bigger-140 middle"></i>
																		</span>
																	</li>

																	<li>
																		<span>
																			<input value="1" maxlength="3" type="text" />
																		</span>
																	</li>

																	<li>
																		<a href="#">
																			<i class="ace-icon fa fa-caret-right bigger-140 middle"></i>
																		</a>
																	</li>

																	<li>
																		<a href="#">
																			<i class="ace-icon fa fa-step-forward middle"></i>
																		</a>
																	</li>
																</ul>
															</div>
														</div>

														<div class="hide message-footer message-footer-style2 clearfix">
															<div class="pull-left"> simpler footer </div>

															<div class="pull-right">
																<div class="inline middle"> message 1 of 151 </div>

																&nbsp; &nbsp;
																<ul class="pagination middle">
																	<li class="disabled">
																		<span>
																			<i class="ace-icon fa fa-angle-left bigger-150"></i>
																		</span>
																	</li>

																	<li>
																		<a href="#">
																			<i class="ace-icon fa fa-angle-right bigger-150"></i>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div><!-- /.tab-content -->
										</div><!-- /.tabbable -->
									</div><!-- /.col -->
								</div><!-- /.row -->

								<form id="id-message-form" class="hide form-horizontal message-form col-xs-12">
									<div>
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-recipient">Recipient:</label>

											<div class="col-sm-9">
												<span class="input-icon">
													<input type="email" name="recipient" id="form-field-recipient" data-value="alex@doe.com" value="alex@doe.com" placeholder="Recipient(s)" />
													<i class="ace-icon fa fa-user"></i>
												</span>
											</div>
										</div>

										<div class="hr hr-18 dotted"></div>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-subject">Subject:</label>

											<div class="col-sm-6 col-xs-12">
												<div class="input-icon block col-xs-12 no-padding">
													<input maxlength="100" type="text" class="col-xs-12" name="subject" id="form-field-subject" placeholder="Subject" />
													<i class="ace-icon fa fa-comment-o"></i>
												</div>
											</div>
										</div>

										<div class="hr hr-18 dotted"></div>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right">
												<span class="inline space-24 hidden-480"></span>
												Message:
											</label>

											<div class="col-sm-9">
												<div class="wysiwyg-editor"></div>
											</div>
										</div>

										<div class="hr hr-18 dotted"></div>

										<div class="form-group no-margin-bottom">
											<label class="col-sm-3 control-label no-padding-right">Attachments:</label>

											<div class="col-sm-9">
												<div id="form-attachments">
													<input type="file" name="attachment[]" />
												</div>
											</div>
										</div>

										<div class="align-right">
											<button id="id-add-attachment" type="button" class="btn btn-sm btn-danger">
												<i class="ace-icon fa fa-paperclip bigger-140"></i>
												Add Attachment
											</button>
										</div>

										<div class="space"></div>
									</div>
								</form>

								<div class="hide message-content" id="id-message-content">
									<div class="message-header clearfix">
										<div class="pull-left">
											<span class="blue bigger-125"> Clik to open this message </span>

											<div class="space-4"></div>

											<i class="ace-icon fa fa-star orange2"></i>

											&nbsp;
											<img class="middle" alt="John's Avatar" src="assets/images/avatars/avatar.png" width="32" />
											&nbsp;
											<a href="#" class="sender">John Doe</a>

											&nbsp;
											<i class="ace-icon fa fa-clock-o bigger-110 orange middle"></i>
											<span class="time grey">Today, 7:15 pm</span>
										</div>

										<div class="pull-right action-buttons">
											<a href="#">
												<i class="ace-icon fa fa-reply green icon-only bigger-130"></i>
											</a>

											<a href="#">
												<i class="ace-icon fa fa-mail-forward blue icon-only bigger-130"></i>
											</a>

											<a href="#">
												<i class="ace-icon fa fa-trash-o red icon-only bigger-130"></i>
											</a>
										</div>
									</div>

									<div class="hr hr-double"></div>

									<div class="message-body">
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</p>

										<p>
											Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										</p>

										<p>
											Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
										</p>

										<p>
											Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</p>

										<p>
											Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
										</p>

										<p>
											Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										</p>
									</div>

									<div class="hr hr-double"></div>

									<div class="message-attachment clearfix">
										<div class="attachment-title">
											<span class="blue bolder bigger-110">Attachments</span>
											&nbsp;
											<span class="grey">(2 files, 4.5 MB)</span>

											<div class="inline position-relative">
												<a href="#" data-toggle="dropdown" class="dropdown-toggle">
													&nbsp;
													<i class="ace-icon fa fa-caret-down bigger-125 middle"></i>
												</a>

												<ul class="dropdown-menu dropdown-lighter">
													<li>
														<a href="#">Download all as zip</a>
													</li>

													<li>
														<a href="#">Display in slideshow</a>
													</li>
												</ul>
											</div>
										</div>

										&nbsp;
										<ul class="attachment-list pull-left list-unstyled">
											<li>
												<a href="#" class="attached-file">
													<i class="ace-icon fa fa-file-o bigger-110"></i>
													<span class="attached-name">Document1.pdf</span>
												</a>

												<span class="action-buttons">
													<a href="#">
														<i class="ace-icon fa fa-download bigger-125 blue"></i>
													</a>

													<a href="#">
														<i class="ace-icon fa fa-trash-o bigger-125 red"></i>
													</a>
												</span>
											</li>

											<li>
												<a href="#" class="attached-file">
													<i class="ace-icon fa fa-film bigger-110"></i>
													<span class="attached-name">Sample.mp4</span>
												</a>

												<span class="action-buttons">
													<a href="#">
														<i class="ace-icon fa fa-download bigger-125 blue"></i>
													</a>

													<a href="#">
														<i class="ace-icon fa fa-trash-o bigger-125 red"></i>
													</a>
												</span>
											</li>
										</ul>

										<div class="attachment-images pull-right">
											<div class="vspace-4-sm"></div>

											<div>
												<img width="36" alt="image 4" src="assets/images/gallery/thumb-4.jpg" />
												<img width="36" alt="image 3" src="assets/images/gallery/thumb-3.jpg" />
												<img width="36" alt="image 2" src="assets/images/gallery/thumb-2.jpg" />
												<img width="36" alt="image 1" src="assets/images/gallery/thumb-1.jpg" />
											</div>
										</div>
									</div>
								</div><!-- /.message-content -->

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
