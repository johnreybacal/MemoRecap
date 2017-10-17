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
		$('#p-' + pageClipboarded).hide();
		$('#p-' + currentPage).show();		
		var pastedAsset = $('#' + clipboard).clone();
		pastedAsset.removeClass('ui-draggable').removeClass('ui-draggable-handle').removeClass('ui-resizable');
		pastedAsset.children('div.ui-resizable-handle').remove();
		pastedAsset.children('div.rotate').addClass('rotatable').children('div.ui-rotatable-handle').remove();
		$('#p-' + currentPage).append(pastedAsset.attr('id', id));		
		$('#' + id).css('display', 'none');
		$('#' + id).fadeIn("slow");
		$('.rotatable').rotatable({
			rotate: function(){
				displayAssetAttributes($('#' + id));
			},
			angle: getAngle($('#' + clipboard)) * Math.PI / 180
		}).removeClass('rotatable');
		if(isCut){
			$('#' + clipboard).fadeOut(1000, function(){
				$('#' + clipboard).remove();				
			});
			$('#' + clipboard + "-z").remove();
			assets[pageClipboarded] = assets[pageClipboarded].replace(clipboard + '/', '');
			isCut = false;
			clipboard = '';
		}
		assets[currentPage] += id + '/'
		assetInteractability(id);
		$("#z-" + currentPage.toString()).prepend("<li id = \"" + id + "-z\">" + id + "</li>");
		$('#' + id).css({
			'top': y, 'left': x
		});
	}else{
		alert('Clipboard is empty :>');
	}
}

function sendTo(somewhere){
	var selectedAsset = $('#selectedAsset').html();	
	var assetsInThisPage = assets[currentPage].substring(0, assets[currentPage].length - 1).split("/");
	var assetIndex = 0;
	for(var i = 0; i < assetsInThisPage.length; i++){
		if(assetsInThisPage[i] == selectedAsset){
			assetIndex = i;
			break;
		}
	}	
	$('#' + assetsInThisPage[assetIndex] + '-z').remove();
	if(somewhere == 'Front'){
		$('#z-' + currentPage).prepend("<li id = \"" + assetsInThisPage[assetIndex] + "-z\">" + assetsInThisPage[assetIndex] + "</li>")	
	}else if(somewhere == 'Back'){
		$('#z-' + currentPage).append("<li id = \"" + assetsInThisPage[assetIndex] + "-z\">" + assetsInThisPage[assetIndex] + "</li>")			
	}else{
		alert('Nani?');
	}
	var order = $('#z-' + currentPage).sortable("toArray");
	order.reverse();
	for(var i = 0; i < order.length; i++){
		$("#" + order[i].replace("-z", "")).css("z-index", i + 1);
	}	
}

function generateFirstPage(){
	// $('#p-' + currentPage).hide();
	// $('#p-0').show();
	$('#divContent').css({'zoom': '100%'});
    $('#workspace').css({'left': '0px', 'top': '0px'});
	console.log('Generating the canvas for first page');	
	$('body').append('<canvas id = "first-page" height = "' + $('#workspace').css('height') + '" width = "' + $('#workspace').css('width') + '"></canvas>');
	var p = $('#p-0');
	var c = document.getElementById('first-page');
	var ctx = c.getContext("2d");
	if($('#p-0').attr('data-bg') == 'rgb'){// if bg is rgb			
		var rgb = p.css('background-color').replace('rgb(', '').replace(')', '').split(',');
		var hex = '#' + toHex(Number(rgb[0])) + toHex(Number(rgb[1])) + toHex(Number(rgb[2]));
		ctx.fillStyle = hex;
		ctx.fillRect(-2,-2,Number($('#workspace').css('width').replace('px','')) + 2, Number($('#workspace').css('height').replace('px','')) + 2);
	}else{ // if bg is an asset			
		var bg = $('#p-0').css('background-image');
		bg = bg.replace('url(','').replace(')','').replace('"','').replace('"','');		
		var img = new Image();
		img.src = bg;		
  		var ptrn = ctx.createPattern(img, 'repeat');
	    ctx.fillStyle = ptrn;
	    ctx.fillRect(0, 0, c.width, c.height);					
	}
	if(assets[0].length > 0){						
		var assetsInThisPage = assets[0].substring(0, assets[0].length - 1).split("/");
		for(var i = 0; i < assetsInThisPage.length; i++){							
			$('#' + assetsInThisPage[i]).children('div.rotate').children('img').attr('id', 'temp');
		    var img = document.getElementById('temp');
		    $('#temp').attr('id', '');			    			    
		    var left = Number($('#' + assetsInThisPage[i]).css('left').replace('px',''));
		    var top = Number($('#' + assetsInThisPage[i]).css('top').replace('px',''));
		    var width = Number($('#' + assetsInThisPage[i]).css('width').replace('px','')); 
		    var height = Number($('#' + assetsInThisPage[i]).css('height').replace('px',''));
		    if(left < 0){left *= -1;}if(top < 0){top *= -1;}						    
		    ctx.save();
		    ctx.translate(
		    	left + (width / 2), top + (height / 2)
	    	);		    	
		    ctx.rotate($('#' + assetsInThisPage[i]).data('angle') * Math.PI / 180);
		    ctx.drawImage(img, width / -2, height / -2, width, height);			    
		    ctx.restore();					
		}
	}
	// $('#p-0').hide();
	// $('#p-' + currentPage).show();
	zoomOrig(true);
}

function getScrapbookID(url) {
    if (!url) url = window.location.href;			    
	return url.substring(url.length-4, url.length);
}

function save(saveURL, leaveFlag){
	generateFirstPage();
	var canvas = document.getElementById('first-page');
	var fp = canvas.toDataURL();
	var attr = '{"firstpage": "' + fp + '", "height":"' + $('#workspace').css('height') + '", "width":"' + $('#workspace').css('width') + '" , "pages":{';		
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
		if($('#p-' + p).attr('data-bg') == 'rgb'){// if bg is rgb
			attr += '"bg":"' + $('#p-' + p).css("background-color") + '"';
		}else{ // if bg is an asset
			attr += '"bg":"' + $('#p-' + p).attr('data-bg') + '"';
		}
		// alert(assets[p]);
		if(assets[p].length > 0){//check kung merong asset sa page
			//kunin lahat ng assets sa isang page
			var assetsInThisPage = assets[p].substring(0, assets[p].length - 1).split("/");	
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
	var c = getScrapbookID();
    $.ajax({
    	url: saveURL,
    	type: 'POST',
    	contentType: 'application/json',
    	data: c + attr,
    	dataType: 'json',
    	success: function(res){
    		console.log('save result: ' + res);
    	}
    });
    console.log('leaveFlag in editor.js: ' + leaveFlag);
	$('#first-page').remove();
    if(leaveFlag){
    	window.history.back();
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
	        case "frontSend": sendTo('Front'); break;
	        case "backSend": sendTo('Back'); break;
	    }
	    $(".context-menu").hide(100);
	});

});