<div class="ui tiny modal" id="upload_event_modal">
	<div class="ui actions headers">
		<div class="ui left floated header">
			<span class="marginal">Upload Project</span>
		</div>	
		<a class="cancel"><i class="close icon"></i></a>
	</div>
	<div class="ui content">
		<div class="ui equal width form">
			<form method="POST" action="#">
				<div class="field">
						<label>Title</label>
						<input id="card_title" type="text" name="card_title" required="true">
				</div>
				<div class="field">
						<label>Description</label>
						<input id="card_description" type="text" name="card_description" required="true">
				</div>
				<div class="field">
						<label>Comment</label>
						<textarea id="card_comment" type="textarea" name="card_comment" required="true"></textarea>
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
