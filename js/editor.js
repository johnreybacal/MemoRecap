function copy(){
	isCut = false;
	clipboard = $('#selectedAsset').html();
}

function cut(){
	isCut = true;
	clipboard = $('#selectedAsset').html();
	pageClipboarded = currentPage;
}

function paste(y, x){
	if(clipboard != ''){		
		var z = clipboard.split('-');	
		var id = assetID + '-' + z[1];
		assetID++;
		$('#p-' + currentPage).hide();
		$('#p-' + pageClipboarded).show();
		var ang = getAngle($('#' + clipboard)) * Math.PI / 180;
		$('#p-' + pageClipboarded).hide();
		$('#p-' + currentPage).show();
		var pastedAsset = $('#' + clipboard).clone();
		pastedAsset.removeClass('ui-draggable').removeClass('ui-draggable-handle').removeClass('ui-resizable');
		pastedAsset.children('div.ui-resizable-handle').remove();
		pastedAsset.children('div.rotate').addClass('rotatable').children('div.ui-rotatable-handle').remove();
		$('#p-' + currentPage).append(pastedAsset.attr('id', id));
		$('.rotatable').rotatable({ angle: ang }).removeClass('rotatable');
		if(isCut){
			$('#' + clipboard).remove();
			$('#' + clipboard + "-z").remove();
			assets[pageClipboarded] = assets[pageClipboarded].replace(clipboard + '/', '');
			isCut = false;
		}
		assets[currentPage] += id + '/'
		assetInteractability(id);
		$("#z-" + currentPage.toString()).prepend("<li id = \"" + id + "-z\">" + id + "</li>");
		$('#' + id).animate({
			'top': y, 'left': x
		});
	}else{
		alert('Clipboard is empty :>');
	}
}

$(document).ready(function(){

	$('#workspace').bind("contextmenu", function (event) {
	    event.preventDefault();
	    $(".context-menu").finish().toggle(100).
	    css({
	        top: event.pageY + "px",
	        left: event.pageX + "px"
	    });
	});

	$(document).bind("mousedown", function (e) {	    	    
	    if (!$(e.target).parents(".context-menu").length > 0){
	        $(".context-menu").hide(100);
	    }
	});

	$(".context-menu li").click(function(){
	    switch($(this).attr("data-action")) {
	        case "copy": copy(); break;
	        case "cut": cut(); break;
	        case "paste": paste($(".context-menu").css('top'), $(".context-menu").css('left')); break;
	        case "delete": deleteAsset(); break;
	    }
	    $(".context-menu").hide(100);
	});

	$('#save').click(function(){	//get x y and size of all assets in all pages
		var attr = '{"height":"' + $('#workspace').css('height') + '", "width":"' + $('#workspace').css('width') + '" , "pages":{';		
		var getBack = currentPage;
		for(var p = 0; p < pageCount; p++){//loop ng pages
			if(currentPage != p){//lilipat ng page kasi hindi makukuha ung x at y kapag hidden ung page na naglalaman sa asset
				$("#p-" + currentPage.toString()).hide();
				$("#z-" + currentPage.toString()).hide();
				$("#p-" + p.toString()).show();
				$("#z-" + p.toString()).show();
			}
			currentPage = p;
			if(p > 0){
				attr += ',';
			}
			attr += '"' + p + '":{';
			attr += '"bg":"' + $('#p-' + p.toString()).css("background-color") + '"';
			// alert(assets[p]);
			if(assets[p].length > 0){//check kung merong asset sa page
				//kunin lahat ng assets sa isang page
				var assetsInThisPage = assets[p].substring(0, assets[p].length - 1).split("/");				
				//assets[p] => 0-1-2- => substring(0, assets[p].length - 1) => 0-1-2 => split("/") => [0, 1, 2]
				//		string 						inalis ung / sa dulo 					ginawang array
				for(var i = 0; i < assetsInThisPage.length; i++){//loop ng assets
					//alert(p + " " + assetsInThisPage[i]);							
					attr += ',';
				 	attr += '"' + assetsInThisPage[i] + '":{';
			 		var $this = $('#' + assetsInThisPage[i]);
				 	var thisPos = $this.position();
				 	var parPos = $this.parent().position();
				 	var x = thisPos.left - parPos.left;
				 	var y = thisPos.top - parPos.top;
				 	var angle = getAngle($this);
		     		attr += '"x": "' + x + '", "y": "' + y + '", ';
		     		attr += '"w": "' + $this.css('width') + '", "h": "' + $this.css('height') + '", ';
		     		attr += '"z": "' + $this.css('z-index') + '",';
		     		attr += '"a": "' + angle + '"}';
				}
			}
			attr += '}';
		}
		attr += '}}';
		//get back to current page
		$("#p-" + currentPage.toString()).hide();
		$("#z-" + currentPage.toString()).hide();
		currentPage = getBack;
		$("#p-" + currentPage.toString()).show();
		$("#z-" + currentPage.toString()).show();
		// var obj = JSON.parse(attr);
		// alert(attr);
		//alert(attrjson);
		//alert(JSON.stringify(attrjson));
		var saveURL = getSaveURL();
		var c = getScrapbookID();
	    $.ajax({
	    	url: saveURL,
	    	type: 'POST',
	    	contentType: 'application/json',
	    	data: c + attr,
	    	dataType: 'json',
	    	success: function(data){
	    		alert(data);
	    	}
	    });	    
	});

	function getScrapbookID(url) {
	    if (!url) url = window.location.href;			    
		return url.substring(url.length-4, url.length);
	}
});