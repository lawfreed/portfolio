<div id="rytboard" class="eleven wide column">
	<div class="ui raised segment">
		@include('contents.partials.menubar')
		<div class="ui active tab" data-tab="uxui">
			<div class="ui segment">
				@include('contents.tabulars.subtabs.uxui')
			</div>
		</div>
		<div class="ui tab" data-tab="branding">
			<div class="ui segment">
				@include('contents.tabulars.subtabs.branding')
			</div>
		</div>
		<div class="ui tab" data-tab="visual">
			<div class="ui segment">
				@include('contents.tabulars.subtabs.visual')
			</div>
		</div>
		<div class="ui tab" data-tab="motion">
			<div class="ui segment">
				@include('contents.tabulars.subtabs.motion')
			</div>
		</div>
	</div>
</div>

