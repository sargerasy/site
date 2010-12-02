(function($) {
	var _generateID = function(prefix)
	{
		prefix = prefix || "jquery-progressbar";
		return prefix + methods._id_counter++;
	};

	var _getText = function(options)
	{
		if(options.textFormat === 'percentage') {
			return " " + Math.round(options.running_value) + "%";
		} else if (options.textFormat == 'fraction' ) {
			return " " + options.running_value + '/' + options.max;
		} else {
			return "NaN";
		}
	};

	var _getPercentage = function(options)
	{
		return options.running_value * 100 / options.max;
	};

	var _render = function(options, showText)
	{
		bar = $("#" + options.img_id);
		text = $("#" + options.txt_id);
		bar.css("background-position", (options.width*(-1) + _getPercentage(options)*options.width/100) + 'px 50%');
		bar.attr('title', showText);
		text.html(showText + options.prefix);
	};

	var methods = {
		_id_counter: 0,
		
		setProgress: function(val) 
		{
			return this.each(function() {
				options = this.options;
				options.running_value = val;
				_render(options, _getText(options));
			});
		}
	};

	$.fn.progressBar = function(options) {
		var defaults = {
			steps			: 20,											// steps taken to reach target
			stepDuration	: 20,											
			max				: 100,											// Upon 100% i'd assume, but configurable
			showText		: true,											// show text with percentage in next to the progressbar? - default : true
			textFormat		: 'percentage',									// Or otherwise, set to 'fraction'
			width			: 120,											// Width of the progressbar - don't forget to adjust your image too!!!												// Image to use in the progressbar. Can be a single image too: 'images/progressbg_green.gif'
			height			: 12,											// Height of the progressbar - don't forget to adjust your image too!!!
			callback		: null,											// Calls back with the config object that has the current percentage, target percentage, current image, etc
			boxImage		: 'images/progressbar.gif',						// boxImage : image around the progress bar
			barImage		: 'images/progressbg_green.gif',
			prefix			: '',
			
			// Internal use
			running_value	: 0,
			value			: 0,
			image			: null
		};

		$.extend(this, methods);
		return this.each(function() {
			var $this = $(this);
			options = this.options = $.extend({}, defaults, options);

			var id = _generateID();
			options.img_id = id + "_pbImage";
			options.txt_id = id + "_pbText";

			$this.html("");
			var bar = document.createElement('img');
			var text = document.createElement('span');
			bar = $(bar);
			text = $(text);

			showText = _getText(options);

			bar.attr('id', options.img_id);
			text.attr('id', options.txt_id);
			bar.attr('alt', showText);
			bar.attr('src', options.boxImage);
			bar.attr('width', options.width);
			bar.css('width', options.width + "px");
			bar.css('height', options.height + "px");
			bar.css('background-image', "url("+options.barImage+")");
			bar.css('padding', '0px');
			bar.css('margin', '0px');
			$this.append(bar);
			$this.append(text);
			_render(options, showText);
		});
	};
})(jQuery);
