// SIDEBAR
$('.ui.sidebar').sidebar({
	context: $('.ui.pushable.segment'),
	transition: 'overlay'
}).sidebar('attach events', '#mobile_item');

// CARDS
$('.ui.image').popup();
$('.submaster.menu .item').tab({
	history:false
});
$('.special.cards .image').dimmer({
  on: 'hover'
});

// MODALS
$('.uxui_view_modal').click(function() {
	$('#uxui_event_modal').modal('show');
});
$('.branding_view_modal').click(function() {
	$('#branding_event_modal').modal('show');
});
$('.visual_view_modal').click(function() {
	$('#visual_event_modal').modal('show');
});
$('.motion_view_modal').click(function() {
	$('#motion_event_modal').modal('show');
});