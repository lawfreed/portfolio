<div class="ui tiny modal" id="upload_event_modal">
	<div class="ui actions headers">
		<div class="ui left floated header">
			<span class="marginal">Upload Project</span>
		</div>	
		<a class="cancel"><i class="close icon"></i></a>
	</div>
	<div class="ui content">
		<div class="ui equal width form">
			<form action="{{ route('upload.card_file') }}" method="POST" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="two fields">
					<div class="field">
						<label>Choose Preview Image</label>
						<input id="card_preview" type="file" name="preview" required="true">
					</div>
					<div class="field">
						<label>Choose Content Image</label>
						<input id="card_file" type="file" name="card_file" required="true">
					</div>
				</div>
				<div class="field">
					<label>Title</label>
					<input id="card_title" type="text" name="card_title" required="true">
				</div>
				<div class="two fields">
					<div class="field">
						<label>Type</label>
						<select class="ui dropdown" name="card_type" id="dropdown_type" required="true">
							<div class="menu">
								<option value="" disabled selected hidden></option>
								<option value="uiux">UI/UX</option>
								<option value="branding">Branding</option>
								<option value="visual">Visual</option>
								<option value="motion">Motion</option>
							</div>
						</select>
					</div>
					<div class="field">
						<label>Year Created</label>
						<select class="ui dropdown" name="card_creation" id="dropdown_creation" required="true">
							<div class="menu">
								<option value="" disabled selected hidden></option>
								<option value="2018">2018</option>
								<option value="2017">2017</option>
								<option value="2016">2016</option>
								<option value="2015">2015</option>
							</div>
						</select>
					</div>
				</div>
				<div class="field">
					<label>Description</label>
					<textarea id="card_description" type="textarea" name="card_description" required="true"></textarea>
				</div>
				<div class="ui tiny fluid buttons">					
					<button class="ui button" type="submit">
						<i class="circle notched icon"></i>
						Submit
					</button>
					<span class="negative"></span>
					<button class="ui button" type="reset">
						<i class="refresh icon"></i>
						Reset
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
