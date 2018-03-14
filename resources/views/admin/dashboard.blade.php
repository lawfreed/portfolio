@extends('admin.layout')
@section('dashboard_content')
<div id="boxize">
	<div class="ui grid">
		<div class="row">
			<div class="right floated left aligned column">
				<button id="new_project" class="ui right floated button upload_view_modal">
					<i class="upload icon"></i>
					New Project
				</button>
			</div>
		</div>
		<div class="row">
			<div class="four wide column">
				<div class="ui vertical fluid pointing submaster menu">
					<a class="blue item active" data-tab="dash_uxui">
						UI/UX
					</a>
					<a class="blue item" data-tab="dash_branding">
						Branding
					</a>
					<a class="blue item" data-tab="dash_visual">
						Visual
					</a>
					<a class="blue item" data-tab="dash_motion">
						Motion
					</a>
				</div>
			</div>
			<div class="twelve wide stretched column">
				<div class="ui segment">
					<div class="ui active tab" data-tab="dash_uxui">
						<h1>Helo</h1>
					</div>
					<div class="ui tab" data-tab="dash_branding">
						<table class="ui selectable celled table">
							<thead>
								<tr>
									<th>Title</th>
									<th>Description</th>
									<th>File Size</th>
									<th>Date Created</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>John</td>
									<td>No Action</td>
									<td>None</td>
									<td>None</td>
								</tr>
								<tr>
									<td>Jamie</td>
									<td>Approved</td>
									<td>Requires call</td>
									<td>None</td>
								</tr>
								<tr>
									<td>John</td>
									<td>No Action</td>
									<td>None</td>
									<td>None</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="ui tab" data-tab="dash_visual">
						<h1>dash_visual</h1>
					</div>
					<div class="ui tab" data-tab="dash_motion">
						<h1>dash_motion</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	@include('contents.uploads.cards')
	@endsection