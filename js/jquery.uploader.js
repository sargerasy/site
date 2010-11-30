FlashAdapter = function(swfURL, containerID, attributes)
{
	this._queue = this._queue || [];
	this._events = this._events || {};
	this._configs = this._configs || {};
	attributes = attributes || {};
	
	this._id = attributes.id = attributes.id || "jquery-uploder";
	attributes.version = attributes.version || "9.0.45";
	attributes.backgroundColor = attributes.backgroundColor || "#ffffff";
	
	//we can't use the initial attributes right away
	//so save them for once the SWF finishes loading
	this._attributes = attributes;
	
	this._swfURL = swfURL;
	this._containerID = containerID;
	
	//embed the SWF file in the page
	this._embedSWF(this._swfURL, this._containerID, attributes.id, attributes.version,
		attributes.backgroundColor, attributes.expressInstall, attributes.wmode);
};

FlashAdapter.owners = FlashAdapter.owners || {};

FlashAdapter.prototype =  {
	toString: function()
	{
		return "FlashAdapter " + this._id;
	},

	_embedSWF: function(swfURL, containerID, swfID, version, backgroundColor, expressInstall, wmode)
	{
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
		swfObj.addVariable("YUIBridgeCallback", "FlashAdapter.eventHandler");
		var container = document.getElementById(containerID);
		var result = swfObj.write(container);

		if(result) {
			this._swf = document.getElementById(swfID);
			FlashAdapter.owners[swfID] = this;
		} else {
			alert("Unable to load SWF " + swfURL);
		}
	}
};

FlashAdapter.eventHandler = function(elementID, event)
{
	if(!FlashAdapter.owners[elementID]) {
		setTimeout(function() { FlashAdapter.eventHandler(elementID, event) }, 0);
	} else {
		console.log(event);
		if(event.type === "fileSelect") {
			for(var file in event.fileList) {
				conole.log(file);
			}
		}
		//FlashAdapter.owners[elementID]._eventHandler(event)
	}
};

(function($) {
	$.extend(SWFObject.prototype, {
		write_jquery: function(){
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
				var n = (typeof elementId == 'string') ? document.getElementById(elementId) : elementId;
				n.innerHTML = this.getSWFHTML();
				return true;
			}else{
				if(this.getAttribute('redirectUrl') != "") {
					document.location.replace(this.getAttribute('redirectUrl'));
				}
			}
			return false;
		}
	});

	_embedSWF = function(swfURL, containerID, swfID, version, backgroundColor, expressInstall, wmode) {
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
		swfObj.addVariable("YUIBridgeCallback", "FlashAdapter.eventHandler");
		var container = document.getElementById(containerID);
		var result = swfObj.write(container);

		if(result) {
			return document.getElementById(swfID);
		} else {
			$.error("Unable to load SWF " + swfURL);
		}
	};

	var methods = {
		init: function(myoptions) 
		{
			var options = {
				id: "jquery-uploader",
				version: "9.0.45",
				backgroundColor: "#ffffff",
				wmode: "transparent",
				swfURL: "../swf/uploader.swf",
			};

			return this.each(function() {
				if(myoptions) {
					$.extend(options, myoptions);
				}
				this._queue = this._queue || [];
				this._events = this._events || {};
				this._configs = this._configs || {};
				attributes = attributes || {};
				
				this._id = attributes.id = attributes.id || "jquery-uploader";
				attributes.version = attributes.version || "9.0.45";
				attributes.backgroundColor = attributes.backgroundColor || "#ffffff";
				
				this._attributes = attributes;
				
				this._swfURL = swfURL;
				this._containerID = containerID;
				
				this._embedSWF(this._swfURL, this._containerID, attributes.id, attributes.version,
					attributes.backgroundColor, attributes.expressInstall, attributes.wmode);
			});
		},
		destroy: function() 
		{
			return this.each(function() {
				alert("destroy");
			});
		},
	};

	$.fn.uploader = function(method) {
		if (methods[method]) {
			return methods[method].apply(this, Array.prototype.slice.call( arguments, 1 ));
		} else if ( typeof method === 'object' || ! method ) {
			return methods.init.apply( this, arguments );
		} else {
			$.error( 'Method ' +  method + ' does not exist on jQuery.uploader' );
		}    
		
	};
})(jQuery);
