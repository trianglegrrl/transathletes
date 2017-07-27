<?php
	ini_set ('display_startup_errors', true);
	ini_set ('display_errors', true);
	include 'header.php';
?>
<!-- begin body_dimensions -->
    <script language="javascript" type="text/javascript" src="js/body_dimensions_datasets.js"></script>
    <script language="javascript" type="text/javascript" src="js/body_dimensions.js"></script>

			<div class="row-fluid">
				<div id="maincolumn" class="span10 offset1">
					<div class="row-fluid">
						<div style="width: 100%">
							<h1>How are bodies shaped?</h1>
						</div>
					</div>
					<p>First, let's start with a little exercise.</p>
					
					<p>Find the trans fighter(s) in the collage below. There is at least one, but we might try to mess with your head and post pictures of multiple trans athletes. If you an an MMA or boxing fan, don't try to guess based on what promotion they're fighting at, their tattoos, or what they are wearing. Just use the shape of their body.</p>
					<p>
						<a name="answer-click"></a>
						<img src="img/find-the-trans-athlete.jpg" style="width: 100%" class="full-width-image" />
					</p>
					<p class="click-for-answer">
						<a href="#answer-click" onclick="$('.hidden-answer').fadeIn();$('.click-for-answer').hide(); ">
							Click here for the answer.
						</a> Take your time. It's not as easy as you think.
					</p>
					<div style="display: none;" class="hidden-answer">
						<p>
							The answer is: none of these athletes are trans. Sorry we lied to you.
						</p>
						
						<p>But how can that be? Look at how lean and muscular these women are! </p>
						<p>You can see from this exercise that your intuition is not always correct. When you started this example, you took for granted that we were telling the truth, so you hunted for physical characteristics you identified as masculine. And when you chose the athlete, you experienced a concept called <a href="http://en.wikipedia.org/wiki/Confirmation_bias">confirmation bias</a>, which is the tendency to see things that confirm your own beliefs. If you believe that trans women have a more "masculine" shape, in that they are leaner and more muscular than non-trans women, you are probably looking for certain cues. There is no way to say that "women are A, and men are B", because there is always an exception.</p>
						<p>For example, these women are elite athletes, all high-level competitors in MMA or  boxing. You do not get to that level by being normal. The women in the picture above are not like most women. They are exceptional.
						</p>
						<p>This is the problem with the nebulous statement that "trans women have a structural advantage." First, when someone makes this argument, they don't have a clear idea what it means. They might think broad shoulders, narrower hips, or long limbs. But elite sport is made of bodies that are well suited to that sport. Some sports like distance running, volleyball, and basketball favour tall people with long limbs. Some, like powerlifting, favour short people with short limbs. And many sports do not favour a specific body type: boxing, a common example, is divided by weight class, not by reach, even though a long reach can be an advantage in a sport that involves punching someone else. Boxers with a long reach often box an "outside game" with a lot of distance between them and their opponent. On the other hand, boxers with short arms will box an "inside game", close to their opponent, where their long-armed opponents are unable to generate power and the athlete with shorter arms has an advantage.
						</p>
					</div>
					
					<h2>If you like it then you shoulda put a graph on it</h2>
					
					<p>There is tremendous variation, even within genders, among body shapes. To demonstrate this, we have provided an interactive graph that shows the measurements of more than 500 men and women. </p>
					
					<div style="margin-top: 20px;" class="row-fluid">
						<div style="margin-bottom: 20px;" class=" btn-group">
							<a class="btn btn-info btn-large dropdown-toggle" href="#" data-toggle="dropdown">
								<i class="icon-bar-chart"></i> <span class="selected-measurement-name">Select measurement to display</span>&nbsp;
								<span class="caret"></span>
							</a>
							<ul id="choices" class="dropdown-menu">
								<!-- dropdown menu links -->
							</ul>
						</div>	
						<div style="margin-top: 0px;" class="span4" id="graph">

						</div>
						<div class="span4">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th colspan="4" class="text-center">
											<p class="text-center"><span class="selected-measurement-name"></span></p>
										</th>
									</tr>
									<tr>
										<th>&nbsp;</th>
										<th>Below overlap</th>
										<th>Overlap</th>
										<th>Above overlap</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th>Women (<span class="women-total"></span>)</th>
										<td class="women-below-average"</td>
										<td class="women-average"</td>
										<td class="women-above-average"</td>
									</tr>
									<tr>
										<th>Men (<span class="men-total"></span>)</th>
										<td class="men-below-average"</td>
										<td class="men-average"</td>
										<td class="men-above-average"</td>
									</tr>
									<tr>
										<td colspan="4">
											<p>
												<strong class="selected-measurement-name"></strong>: 
												<span class="selected-measurement-description"></span>
											</p>
											<p>
												<cite class="muted">
												Heinz, Grete, et al. 
													"<a href="http://www.amstat.org/publications/JSE/v11n2/datasets.johnson.html">Exploring relationships in body dimensions</a>".  Journal of Statistics Education 11.2 (2003).
												</cite>
											</p>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
						<p>
							Common sense would seem to be that trans women have a competitive advantage over non-trans  women because they experienced <a href="puberty.php">puberty under the influence of testosterone</a>. 
						</p>
						<p>
							The reality is that the body dimensions of men and women overlap. The <a href="statistics.php">average (mean)</a> of a measurement might be different between men and women, but there is tremendous overlap between genders in the range of most measurements.
						</p>
						<p>
							Here we have provided a graph that you can interact with. A study by Heinz, Greite, et al called  "<a href="http://www.amstat.org/publications/JSE/v11n2/datasets.johnson.html">Exploring relationships in body dimensions</a>" collected a set of measurements from 247 men and 260 women. These measurements included weight, and height, plus a wide variety of skeletal measurements. We used the data from this study to build the graph. With these measurements, you can build a pretty accurate model of the dimensions of a person's skeleton. The study discusses using a variety of variables to predict the gender of a  body based on the dimensions of its skeleton. It is about 90% accurate, which is to say,  one in ten skeletons will be misidentified both by statistics and by an expert as being from the wrong genetic sex.
						</p>
						<p>
							On the graph, we have shown each measurement (orange for men, cyan for women) as a circle. The Y (up/down) axis shows the measurement in the unit specified (normally kilograms or centimeters). Each dot on the X (left/right) axis is a different person in the study. The darker solid orange and cyan lines show the highest and lowest measurements for each gender, and the lighter dashed orange and cyan lines show the average for each gender.
						</p>
						<p>
							Click the checkbox next to the measurement you want to see. Hover over the question mark next to the name of a measurement to get more information
							about where that measurement comes from.
						</p>
						<h2>Things to notice</h2>
						<p>
							There is significant overlap between the genders. That is, most measurements fall between the upper boundary for the smaller gender (usually women) and the lower boundary for the larger gender (usually men). In practical terms, this means that you can't say "men are shaped like this and women are shaped like that". The best you can say is that "the average size of men is slightly larger than the average size of women in this measurement, but there are men who are smaller than the average woman and women who are larger than the average man".
						</p>
							<strong>References:</strong><p />
							<cite class="muted">
							Heinz, Grete, et al. 
								"<a href="http://www.amstat.org/publications/JSE/v11n2/datasets.johnson.html">Exploring relationships in body dimensions</a>".  Journal of Statistics Education 11.2 (2003).
							</cite>
						</p>
					
				</div>
<!-- 
				<div id="sidebar" style="display: none;" class="span4">
					<div class="hero-unit" style="padding-top: 10px;">
						<h2>Learn more...</h2>
					</div> <!~~ .alert ~~>
				</div> <!~~ .span4 ~~>
 -->
			</div> <!-- .row-fluid -->
<!-- end body_dimensions -->
<?php
	include 'footer.php';
?>
