  document.addEvent('domready', function() {
	var mySlideC = new Slider($('slider_minmax_gutter_m3'), $('slider_minmax_minKnobA3'),$('slider_bkg_img3'), {
		start: 500000,
		end: 100000000,
		offset:8,
		snap:false,
		onChange: function(pos)
		{
			$('slider_minmax_min3').setHTML('min '+pos.minpos);$('slider_minmax_max3').setHTML('max '+pos.maxpos);  
			/*$min_b=document.getElementById("txt_min");
			$min_b.value=pos.minpos;
			$max_b=document.getElementById("txt_max");
			$max_b.value=pos.maxpos;*/
		
		}
	}, $('slider_minmax_maxKnobA3')).setMin(1000000).setMax(40000000);
	
	var mySlideD = new Slider($('slider_minmax_gutter_m4'), $('slider_minmax_minKnobA4'),$('slider_bkg_img4'), {
		start: 1,
		end: 12,
		offset:8,
		snap:false,
		onChange: function(pos)
		{
			$('slider_minmax_min4').setHTML('min '+pos.minpos);$('slider_minmax_max4').setHTML('max '+pos.maxpos);  
			/*$min_b1=document.getElementById("txt_min1");
			$min_b1.value=pos.minpos;
			$max_b1=document.getElementById("txt_max1");
			$max_b1.value=pos.maxpos;*/
		
		}
	}, $('slider_minmax_maxKnobA4')).setMin(2).setMax(8);
});// JavaScript Document