   window.addEvent('domready', function() {
	var mySlideA = new Slider($('slider_minmax_gutter_m'), $('slider_minmax_minKnobA'),$('slider_bkg_img'), {
		start: 5,
		end: 1000,
		offset:8,
		snap:false,
		onChange: function(pos)
		{
			$('slider_minmax_min').setHTML('min '+pos.minpos);$('slider_minmax_max').setHTML('max '+pos.maxpos);  
			$min_b=document.getElementById("txt_min");
			$min_b.value=pos.minpos;
			$max_b=document.getElementById("txt_max");
			$max_b.value=pos.maxpos;
		
		}
	}, $('slider_minmax_maxKnobA')).setMin(20).setMax(500);
	
	var mySlideB = new Slider($('slider_minmax_gutter_m2'), $('slider_minmax_minKnobA2'),$('slider_bkg_img2'), {
		start: 1,
		end: 12,
		offset:8,
		snap:false,
		onChange: function(pos)
		{
			$('slider_minmax_min2').setHTML('min '+pos.minpos);$('slider_minmax_max2').setHTML('max '+pos.maxpos);  
			$min_b1=document.getElementById("txt_min1");
			$min_b1.value=pos.minpos;
			$max_b1=document.getElementById("txt_max1");
			$max_b1.value=pos.maxpos;
		
		}
	}, $('slider_minmax_maxKnobA2')).setMin(2).setMax(8);
	
	
	
});