
jQuery.FlashAdapter = function() { };
jQuery.FlashAdapter.owners = jQuery.FlashAdapter.owners || {};
jQuery.FlashAdapter.eventHandler = function(elementID, event)
{
	if(!jQuery.FlashAdapter.owners[elementID]) {
		setTimeout(function() { jQuery.FlashAdapter.eventHandler(elementID, event) }, 0);
	} else {
		jQuery.FlashAdapter.owners[elementID]._eventHandler(event)
	}
};


(function($) {
	$.extend(SWFObject.prototype, {
		write_jobj: function(jobj){
			if(this.getAttribute('useExpressInstall')) {
				// check to see if we need to do an express install
				var expressInstallReqVer = new deconcept.PlayerVersion([6,0,65]);
				if (this.installedVer.versionIsValid(expressInstallReqVer) && !this.installedVer.versionIsValid(this.getAttribute('version'))) {
					this.setAttribute('doExpressInstall', true);
					this.addVariable("MMredirectURL", escape(this.getAttribute('xiRedirectUrl')));
					document.title = document.title.slice(0, 47) + " - Flash Player Installation";
					this.addVariable("MMdoctitle", document.title);
				}
			}
			if(this.skipDetect || this.getAttribute('doExpressInstall') || this.installedVer.versionIsValid(this.getAttribute('version'))){
				jobj.html(this.getSWFHTML());
				return true;
			}else{
				if(this.getAttribute('redirectUrl') != "") {
					document.location.replace(this.getAttribute('redirectUrl'));
				}
			}
			return false;
		}
	});

	var _embedSWF = function(swfURL, owner, container, swfID, version, backgroundColor, expressInstall, wmode) {
		var swfObj = new SWFObject(swfURL, swfID, "100%", "100%", version, backgroundColor);
		
		if(expressInstall) {
			swfObj.useExpressInstall(expressInstall);
		}

		swfObj.addParam("allowScriptAccess", "always");

		if(wmode) {
			swfObj.addParam("wmode", wmode);
		}

		swfObj.addParam("menu", "false");
		swfObj.addVariable("allowedDomain", document.location.hostname);
		swfObj.addVariable("YUISwfId", swfID);
		swfObj.addVariable("YUIBridgeCallback", "jQuery.FlashAdapter.eventHandler");

		if(swfObj.write_jobj(container)) {
			// for event dispatch.
			jQuery.FlashAdapter.owners[swfID] = owner;
			return document.getElementById(swfID);
		} else {
			$.error("Unable to load SWF " + swfURL);
		}
	};

	var _generateID = function(prefix)
	{
		prefix = prefix || "jquery-uploader";
		return prefix + methods._id_counter++;
	};

	var methods = {
		_id_counter: 0,

		/**
		 * Event List:
		 *	mouseDown,
		 *	mouseUp,
		 *	swfReady,
		 *	log,
		 *	rollOver,
		 *	rollOut,
		 *	click,
		 *	fileSelect,
		 *	uploadStart,
		 *	uploadProgress,
		 *	uploadCancel,
		 *	uploadComplete,
		 *	uploadCompleteData,
		 *	uploadError,
		 */
		_eventHandler: function(event)
		{
			this.trigger(event.type, [event]);
			console.log(event);
		},

		upload: function(fileID, uploadScript, method, vars, fieldName)
		{
			return this.each(function() {
				this._swf.upload(fileID, uploadScript, method, vars, fieldName);
			});
		},

		uploadThese: function(fileIDs, uploadScript, method, vars, fieldName)
		{
			return this.each(function() {
				this._swf.uploadThese(fileIDs, uploadScript, method, vars, fieldName);
			});
		},

		uploadAll: function(uploadScript, method, vars, fieldName)
		{
			return this.each(function() {
				this._swf.uploadAll(uploadScript, method, vars, fieldName);
			});
		},

		clearFileList: function()
		{
			return this.each(function() {
				this._swf.clearFileList();
			});
		},

		cancel: function(fileID)
		{
			return this.each(function() {
				this._swf.cancel(fileID);
			});
		},

		setSimUploadLimit : function (simUploadLimit)
		{
			return this.each(function() {
				this._swf.setSimUploadLimit(simUploadLimit);
			});
		},

		setAllowMultipleFiles : function (allowMultipleFiles) 
		{
			return this.each(function() {
				this._swf.setAllowMultipleFiles(allowMultipleFiles);
			});
		},

		setFileFilters : function (fileFilters) 
		{
			return this.each(function() {
				this._swf.setFileFilters(fileFilters);
			});
		},

		removeFile: function (fileID) 
		{
			return this.each(function() {
				this._swf.removeFile(fileID);
			});
		},

		setAllowLogging: function (allowLogging)
		{
			return this.each(function() {
				this._swf.setAllowLogging(allowLogging);
			});
		},

		enable : function ()
		{
			return this.each(function() {
				this._swf.enable();
			});
		},

		disable : function () 
		{
			return this.each(function() {
				this._swf.disable();
			});
		},

		destroy: function() 
		{
			return this.each(function() {
				$("#"+this.options.id).remove();
				for (var opt in this.options) {
					this.options[opt] = null;
				}
				this.options = null;
				this._swf = null;
			});
		},
	};

	$.fn.uploader = function(options) {
		var defaults = {
			id: "",				// default id is "jquery-uploader", see function _generateID.
			version: "9.0.45",
			backgroundColor: "#ffffff",
			wmode: "transparent",
			swfURL: "swf/uploader.swf",
			expressInstall: false,
			queue: [],
			events: {},
			configs: {}
		};

		owner = this;

		$.extend(this, methods);
		return this.each(function() {
			options = this.options = $.extend({}, defaults, options);
			options.id = options.id || _generateID();

			this._swf = _embedSWF(options.swfURL, owner, $(this), options.id, options.version,
				options.backgroundColor, options.expressInstall, options.wmode);
		});
	};
})(jQuery);
