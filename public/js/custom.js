$('.ui.sidebar').sidebar({
	context: $('.ui.pushable.segment'),
	transition: 'overlay'
}).sidebar('attach events', '#mobile_item');

$('.ui.image')
  .popup()
  ;
$('.submaster.menu .item').tab({history:false});
$('.special.cards .image').dimmer({
  on: 'hover'
});