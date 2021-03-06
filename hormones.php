<?php
	include 'header.php';
?>
<!-- begin index (home) -->
<div class="row-fluid">
	<div id="content-span" class="span10 offset1">
		<h1>Are transsexual women hormonally "normal"?</h1>
		<p>One very common assumption is that transsexual women are hormonally more similar
		to men than to non-trans women.</p>

		<p>There are very, very few hormones in the body that are significantly different between
		men and women. The most profound differences are in the so-called sex hormones: testosterone, estrogen, and progesterone. These hormones are involved in reproduction as well as in reinforcing the physical characteristics </p>
		<p>Transsexual women who transition begin taking estrogen before they ever have surgery. Many transsexual women also take androgen-blocking drugs to reduce either the production or the activity of testosterone.<p>

		<p>Testosterone is produced mostly in the ovaries and the testes. The adrenal glands also
		produce a very small amount. Transsexual women who have had genital surgery have neither ovaries nor testes, so the only structures in their body that is producing testosterone are the adrenal glands. Since transsexual women only get their testosterone from the adrenal glands, their testosterone is often much lower than a non-trans woman's. In fact, if you look at the graphs below, you can see that both transsexual athletes have lower testosterone than the non-transsexual athlete.</p>

		<p>Below we offer graphs that show the blood values of different transsexual women. Their 
		values fall within the <a href="http://en.wikipedia.org/wiki/Reference_range">reference range</a> for all women. These are called "candlestick graphs". Each candle is one blood test taken on a certain date, taken after surgery. In the candle, the vertical (up/down) line is the reference range; the horizontal (side/side) line is the value of that woman's measurement. <em>Note: the units used for blood tests and the reference range used can change with different countries and different tests. This is why the Y axis (up/down) changes for different athletes, and why you should look at the relationship of the value to the reference range to get an accurate picture of what it means.</em></p>

		<p>While transsexual women are usually genetically more similar to men (a majority have a copy of their father's Y chromosome rather than a copy of his X chromosome), their Y chromosome is effectively deactivated, and they are physiologically the same as non-trans women who have had their ovaries removed.</p>

	</div>
	<div id="graph-span" class="span10 offset1">
		<script type="text/javascript">
			$(function() {
			
				var a1_testosterone = [ 
						 [Date.UTC(2013,1,4),1.4, 1.4, 0.8,12.1]
				];
				var a1_estradiol = [ 
						 [Date.UTC(2013,1,15), 154, 154,0, 120],
						 [Date.UTC(2013,2,15), 100, 100,00, 120],
						 [Date.UTC(2013,3,15), 59, 59,0, 120],
						 [Date.UTC(2013,4,15), 70, 70,0, 120],
						 [Date.UTC(2013,5,15), 89, 89,0, 120]
				];

				var a2_estradiol = [ 
						 [Date.UTC(2013,0,15), 54, 54,12.5, 498],
						 [Date.UTC(2013,1,15), 22, 22,12.5, 498],
						 [Date.UTC(2013,2,15), 15, 15,12.5, 498],
						 [Date.UTC(2013,3,15), 1284, 1284,12.5, 498],
						 [Date.UTC(2013,4,15), 604, 604 ,12.5, 498],
						 [Date.UTC(2013,4,30), 849, 849,12.5, 498],
						 [Date.UTC(2013,5,15), 171, 171,12.5, 498],
						 [Date.UTC(2013,6,15), 442, 442,12.5, 498],
						 [Date.UTC(2013,7,15), 32.5, 32.5,12.5, 498],
						 [Date.UTC(2013,8,15), 40.6, 40.6,12.5, 498],
						 [Date.UTC(2013,9,15), 41.1, 41.1 ,12.5, 498],
						 [Date.UTC(2013,10,15), 84, 84,12.5, 498],
						 [Date.UTC(2013,11,1), 84, 84,12.5, 498],
						 [Date.UTC(2013,11,15), 342.7, 342.7 ,12.5, 498]
				];

				var a2_testosterone = [ 
						 [Date.UTC(2013,0,15), 19, 19,8, 48],
						 [Date.UTC(2013,1,15), 33, 33,8, 48],
						 [Date.UTC(2013,2,15), 25, 25,8, 48],
						 [Date.UTC(2013,3,15), 25, 25,8, 48],
						 [Date.UTC(2013,4,15), 19, 19,8, 48],
						 [Date.UTC(2013,4,30), 19, 19,8, 48],
						 [Date.UTC(2013,5,15), 25, 25 ,8, 48],
						 [Date.UTC(2013,6,15), 30, 30,8, 48],
						 [Date.UTC(2013,7,15), 14, 14,8, 48],
						 [Date.UTC(2013,8,15), 16, 16,8, 48],
						 [Date.UTC(2013,9,15), 10, 10 ,8, 48],
						 [Date.UTC(2013,10,15), 4, 4,8, 48],
						 [Date.UTC(2013,11,1), 4, 4 ,8, 48],
						 [Date.UTC(2013,11,15), 10, 10,8, 48]
				];

				var a3_testosterone = [ 
						 [Date.UTC(2013,5,15), 56, 56,10, 38]
				];
			
				var a3_estradiol = [ 
						 [Date.UTC(2013,4,15), 491, 491, 46, 607],
						 [Date.UTC(2013,6,15), 45, 45 ,46, 607],
						 [Date.UTC(2013,8,15), 67, 67, 0, 103]
				];
				
				var lw = Date.UTC(0,0,12,0) - Date.UTC(0,0,0,0);
				var data1 = $.plot.candlestick.createCandlestick(
						{label:"Athlete #1 - Testosterone", 		
						data:a1_testosterone,candlestick:{show:true,lineWidth:lw}
				});
				var options = {
						series: {editMode:'v',editable:true, candlestick:{active:true}},
						xaxis: {show: false, mode:"time",min:Date.UTC(2013,0,1,12,0)
										,max:Date.UTC(2013,6,31,12,0) },
						grid: { hoverable: true, clickable: true, editable: true}
				};
				var p1 = $.plot($("#a1-testosterone-graph"),data1,options);
				var data2 = $.plot.candlestick.createCandlestick(
						{label:"Athlete #1 - Estradiol", 		
						data:a1_estradiol,candlestick:{show:true,lineWidth:lw}
				});
				var p2 = $.plot($("#a1-estradiol-graph"),data2,options);

				var options_a2 = {
						series: {editMode:'v',editable:true, candlestick:{active:true}},
						xaxis: {show: false, mode:"time",min:Date.UTC(2013,0,1,12,0)
										,max:Date.UTC(2013,11,31,12,0) },
						grid: { hoverable: true, clickable: true, editable: true}
				};

				var data_a2_e = $.plot.candlestick.createCandlestick(
						{label:"Athlete #2 - Estradiol", 		
						data:a2_estradiol,candlestick:{show:true,lineWidth:lw}
				});
				var p2 = $.plot($("#a2-estradiol-graph"),data_a2_e,options_a2);
				
				var data_a2_t = $.plot.candlestick.createCandlestick(
						{label:"Athlete #2 - Testosterone", 		
						data:a2_testosterone,candlestick:{show:true,lineWidth:lw}
				});
				var p2 = $.plot($("#a2-testosterone-graph"),data_a2_t,options_a2);

				var options_a3 = {
						series: {editMode:'v',editable:true, candlestick:{active:true}},
						xaxis: {show: false, mode:"time",min:Date.UTC(2013,0,1,12,0)
										,max:Date.UTC(2013,11,31,12,0) },
						grid: { hoverable: true, clickable: true, editable: true}
				};



				var data_a3_t = $.plot.candlestick.createCandlestick(
						{label:"Athlete #3 - Testosterone", 		
						data:a3_testosterone,candlestick:{show:true,lineWidth:lw}
				});
				var p2 = $.plot($("#a3-testosterone-graph"),data_a3_t,options_a3);

				var data_a3_e = $.plot.candlestick.createCandlestick(
						{label:"Athlete #3 - Estradiol", 		
						data:a3_estradiol,candlestick:{show:true,lineWidth:lw}
				});
				var p3 = $.plot($("#a3-estradiol-graph"),data_a3_e,options_a3);

				
			});		
		</script>
		<h3>Athlete #1 - transsexual woman - Testosterone ("male" hormone)</h3>
		<p><em>Only one measurement (blood test) was taken, eight years after surgery.</em></p>
		<div style="width: 100%; height: 200px;" id="a1-testosterone-graph">
		</div>
		<h3>Athlete #2 - transsexual woman - Testosterone ("male" hormone)</h3>
		<p><em>Note how the post-surgery trend in this athlete is for testosterone to start in the middle of the normal female reference range, and drop as the time passes after surgery. This athlete had regular blood tests taken. The beginning of this graph starts just after surgery.</em></p>
		<div style="width: 100%; height: 200px;" id="a2-testosterone-graph">
		</div>
		<h3>Athlete #3 - non-transsexual woman - Testosterone ("male" hormone)</h3>
		<p>
			<em>Note that this athlete's natural value is much higher than the reference range. She is not on testosterone replacement therapy. Only one measurement was taken. The reference range differs because it is a saliva test, not a blood test, from a different lab.</em>
		</p>
		<div style="width: 100%; height: 200px;" id="a3-testosterone-graph">
		</div>
		<h3>Athlete #1 - transsexual woman - Estradiol  ("female" hormone)</h3>
		<div style="width: 100%; height: 200px;" id="a1-estradiol-graph">
		</div>
		<h3>Athlete #2 - transsexual woman - Estradiol  ("female" hormone)</h3>
		<div style="width: 100%; height: 200px;" id="a2-estradiol-graph">
		</div>
		<h3>Athlete #3 - non-transsexual woman - Estradiol  ("female" hormone)</h3>
			<em>The reference ranges differ based on the lab and the test. The first measurement is normalized to match units with the second element. This athlete suffers from an estrogen deficiency and is in early menopause. The last measurement's decreased reference range shows a post-menopausal range.</em>
		<div style="width: 100%; height: 200px;" id="a3-estradiol-graph">
		</div>
	</div>
</div> <!-- .row-fluid -->
<!-- end index (home) -->
<?php
	include 'footer.php';
?>
