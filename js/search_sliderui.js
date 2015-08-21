// JavaScript Document
window.addEvent('domready', function() {		
		var mySlideX = new Slider($('slider_minmax_gutter_m3'), $('slider_minmax_minKnobA3'),$('slider_bkg_img3'), {
		start: 10,
		end: 50,
		offset:8,
		snap:false,
		onChange: function(pos)
		{
			$('slider_minmax_min3').setHTML('min '+pos.minpos);$('slider_minmax_max3').setHTML('max '+pos.maxpos);  
			
		}
	}, $('slider_minmax_maxKnobA3')).setMin(20).setMax(40);
		
		
var mySlideY = new Slider($('slider_minmax_gutter_m4'), $('slider_minmax_minKnobA4'),$('slider_bkg_img4'), {
		start: 0,
		end: 50,
		offset:8,
		snap:false,
		onChange: function(pos)
		{
			$('slider_minmax_min4').setHTML('min '+pos.minpos);$('slider_minmax_max4').setHTML('max '+pos.maxpos);  
			
		}
	}, $('slider_minmax_maxKnobA4')).setMin(2).setMax(40);	
		
		var mySlideZ = new Slider($('slider_minmax_gutter_m5'), $('slider_minmax_minKnobA5'),$('slider_bkg_img5'), {
		start: 10,
		end: 50,
		offset:8,
		snap:false,
		onChange: function(pos)
		{
			$('slider_minmax_min5').setHTML('min '+pos.minpos);$('slider_minmax_max5').setHTML('max '+pos.maxpos);  
			
		}
	}, $('slider_minmax_maxKnobA5')).setMin(20).setMax(40);	

});