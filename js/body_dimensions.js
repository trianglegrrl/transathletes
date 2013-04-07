function get_arrays_values_at_index(array, column_index)
{
	var temp_array = [];
	$.each(array, function (index, value) {
		temp_array.push([index, value[column_index]]);
	});
	return (temp_array);
}

// http://stackoverflow.com/questions/5223/length-of-javascript-object-ie-associative-array
Object.size = function(obj) {
    var size = 0, key;
    for (key in obj) {
        if (obj.hasOwnProperty(key)) size++;
    }
    return size;
};


var working_dataset = {};
var upperMax = 0;
var lowerMax = 0;
var upperMin = 0;
var lowerMin = 0;
var wAverage = 0;
var mAverage = 0;

var menAboveAverage = 0;
var womenAboveAverage = 0;
var menAverage = 0;
var womenAverage = 0;
var menBelowAverage = 0;
var womenBelowAverage = 0;

var colors = 
	[
		"Aqua", 
		"AntiqueWhite", 
		
		"Blue", 
		"BlueViolet",
		
		"Brown",
		"Chocolate", 
		
		"Coral",
		"Crimson", 
		
		"CadetBlue",
		"CornflowerBlue",
		
		"DarkBlue",
		"DarkCyan",
		
		"DarkGoldenrod",
		"DarkGrey",
		
		"DarkOliveGreen",
		"DarkKhaki",
		
		"DarkOrange",
		"DarkOrchid",
		
		"DarkSalmon",
		"DarkSeaGreen",
		
		"DarkSlateBlue",
		"DarkTurquoise",
		
		"Magenta",
		"MediumOrchid",
		
		"MediumPurple",
		"MediumSpringGreen"		
	];
	
$(function() {

	$.each(headings, function (index, value) {		

		working_dataset["men" + index] = {
			label: "Men: " + value.name,
			data: get_arrays_values_at_index(raw_datasets.men.data, index)
		};
		working_dataset["women" + index] = {
			label: "Women: " + value.name,
			data: get_arrays_values_at_index(raw_datasets.women.data, index)
		};
	}); //end $.each(headings)

 // hard-code color indices to prevent them from shifting as
	// countries are turned on/off
	var i = 0;
	$.each(working_dataset, function(key, val) {
		val.color=colors[key];
		++i;
	});
	
	// insert checkboxes 
	var choiceContainer = $("#choices");
	var total_rows = (Object.size(working_dataset) / 2) - 1; // take back one kadam to honour the Hebrew god, whose Ark this is. Or to ignore the gender column at the end. Either way.
	
	for (var i = 0; i < total_rows; i ++)
	{
		console.log(headings[i].name);
		choiceContainer.append(
			'<li class="choice-item">' + 
				// Measurement title
					'<label for="id' + i + '">' +
					'<input style="margin-top: -2px;" class="gender-independent-checkbox" type="checkbox" name="id' + i +
					'" data-index="' + i + '" data-measurement-description=\'' + headings[i].description + '\' data-measurement-name="' + headings[i].name + '" data-gender="men" id="id' + i + '"> ' +
					headings[i].name + '</label>' + 
			'</li>'
		);
	} 
	
	// Turn a one-column table into two columns... SO SEXY!
	// http://stackoverflow.com/questions/9562580/make-a-1-columns-per-row-table-into-2-columns-per-row-table-using-jquery
// 	var $tds = $("#choices td"),
// 			i, j;
// 	for (i=0, j=Math.ceil($tds.length / 2); j < $tds.length; i++,j++)
// 	{
// 		 $($tds[i]).parent().append($tds[j]);
// 	}
	
  // Now set up the click handler for the checkboxes 
	$('.gender-independent-checkbox').click(function () {
		console.log($(this));
		theClickedCheckbox = $(this);
		// Uncheck all of the other boxes and then check the row you selected
 		$('.gender-independent-checkbox').attr('checked', false).parent().css('font-weight', 'normal').addClass('muted');
 		theClickedCheckbox.attr('checked', true);		
 		theClickedCheckbox.parent().css('font-weight', 'bold').removeClass('muted');
 		$('.selected-measurement-name').html(theClickedCheckbox.attr('data-measurement-name'));
 		$('.selected-measurement-description').html(theClickedCheckbox.attr('data-measurement-description'));
 		plotTheGraph(theClickedCheckbox.attr('data-index'));
	});
	
	function plotTheGraph(dataset_number)
	{
		var data = [];
		choiceContainer.find(".gender-independent-checkbox:checked").each(function () {
			var key = $(this).attr("data-index");
			if (key && working_dataset['men' + key] && working_dataset['women' + key])
			{
					data.push(working_dataset['men' + key]);
					data.push(working_dataset['women' + key]);
			}
		});
		
		if (data.length > 0)
		{

			// Set out-of-range maximums for the value
			var mMin = 20000;
			var mMax = 0;
			var wMin = 20000;
			var wMax = 0;
			var wAverage = 0;
			var mAverage = 0;
			
			$.each(data[0].data, function (k, v) {
				if (mMin > v[1]) mMin = v[1]; // set men's minimum value
				if (mMax < v[1]) mMax = v[1]; // set men's maximum value
				mAverage += v[1];
			});
			mAverage = mAverage / data[0].data.length;
			
			$.each(data[1].data, function (k, v) {
				if (wMin > v[1]) wMin = v[1]; // set women's minimum value
				if (wMax < v[1]) wMax = v[1]; // set women's maximum value
				wAverage += v[1];
			});
			wAverage = wAverage / data[1].data.length;

			upperMax = (wMax > mMax) ? wMax : mMax;
			lowerMax = (wMax < mMax) ? wMax : mMax;
			upperMin = (wMin > mMin) ? wMin : mMin;
			lowerMin = (wMin < mMin) ? wMin : mMin;
			
			menAboveAverage = 0;
			womenAboveAverage = 0;
			menAverage = 0;
			womenAverage = 0;
			menBelowAverage = 0;
			womenBelowAverage = 0;
			
			$.each(data[0].data, function (k, v) {
				if (v[1] >= lowerMax && v[1] <= upperMax)
				{
					menAboveAverage++;
				} else if (v[1] <= lowerMax && v[1] >= upperMin) {
					menAverage++;
				} else {
					menBelowAverage ++;
				}
			});
			$.each(data[1].data, function (k, v) {
				if (v[1] >= lowerMax && v[1] <= upperMax)
				{
					womenAboveAverage++;
				} else if (v[1] <= lowerMax && v[1] >= upperMin) {
					womenAverage++;
				} else {
					womenBelowAverage ++;
				}
			});
			
			data[0].color="DarkOrange";
			data[1].color="DarkCyan";

			menTotal = Object.size(data[0].data);
			womenTotal = Object.size(data[1].data);
			$('.women-above-average').html(womenAboveAverage + ' (' + Math.round(((womenAboveAverage / womenTotal) * 100), 2) + '%)');
			$('.women-below-average').html(womenBelowAverage + ' (' + Math.round(((womenBelowAverage / womenTotal) * 100), 2) + '%)');
			$('.women-average').html(womenAverage + ' (' + Math.round(((womenAverage / womenTotal) * 100), 2) + '%)');
			$('.men-above-average').html(menAboveAverage + ' (' + Math.round(((menAboveAverage / menTotal) * 100), 2) + '%)');
			$('.men-below-average').html(menBelowAverage + ' (' + Math.round(((menBelowAverage / menTotal) * 100), 2) + '%)');
			$('.men-average').html(menAverage + ' (' + Math.round(((menAverage / menTotal) * 100), 2) + '%)');
			$('.men-total').html(menTotal);
			$('.men-total').parents('tr').css('color', data[0].color);
			$('.women-total').html(womenTotal);
			$('.women-total').parents('tr').css('color', data[1].color);
			
			// set the maximum size of the array
			
			var maxSize = (Object.size(data[0].data) > Object.size(data[1].data)) ? Object.size(data[0].data) : Object.size(data[1].data);
			
			// Now set up the boundary lines for men....
			data.push( {
				color: data[0].color,
				data: [[0,mMin], [maxSize, mMin]],
				lines: { show: true },
				points: { show: false}
			});
			data.push( {
				color: data[0].color,
				data: [[0,mMax], [maxSize, mMax]],
				lines: { show: true },
				points: { show: false}
			});

			// Now set up the boundary lines for men....
			data.push( {
				color: data[1].color,
				data: [[0,wMin], [maxSize, wMin]],
				lines: { show: true },
				points: { show: false }
			});
			data.push( {
				color: data[1].color,
				data: [[0,wMax], [maxSize, wMax]],
				lines: { show: true },
				points: { show: false}
			});


			// and the average lines for both men and women
			data.push( {
				color: data[0].color,
				data: [[0,mAverage], [maxSize, mAverage]],
				dashes: { show: true, lineWidth: 1 },
				points: { show: false}
			});
			data.push( {
				color: data[1].color,
				data: [[0,wAverage], [maxSize, wAverage]],
				dashes: { show: true, lineWidth: 1 },
				points: { show: false }
			});

			
			graphPlot = $.plot($("#graph"), data, {
					yaxis: { tickLength: 0 },
					xaxis: { tickDecimals: 0, tickLength: 0 },
					points: { show: true, radius: 1 },
					lines:  { show: false },
					bars: { show: false },
					legend: { position: "se" }
			});
			
		} // if (data.length > 0)
	}
	$('#id0').trigger('click');
	$('#id0').attr('checked', true);
});