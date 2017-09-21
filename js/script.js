$(document).ready(function(){    
	/*Dynamic shits starts here*/
	// $("#fileChooser").change(function(event){//upload images
	// 	var tgt = event.target || window.event.srcElement, files = tgt.files;
	// 	//kinuha ko lng to sa internet i dunno what it does lol
	// 	var fr = new FileReader();
	// 	fr.onload = function(){							//dagdag sa asset picker
	// 		$("#asset-picker").append("<li><div class = \"first ui-draggable ui-draggable-handle\"><img src = \"" + fr.result + "\" /></div></li>");
	// 		$(".first").draggable({
	// 	    	helper: "clone", revert: "invalid",
	// 	    	scroll: false							//para gumana ung uploaded na image
	// 	    });
	// 	}
	// 	fr.readAsDataURL(files[0]);
	// });

	$("#addPage").click(function(){
		$("#workspace").append("<div id = \"p-" + pageCount + "\" class = \"pages ui-droppable\"></div>");
		$("#pagination").append("<li id = \"page-" + pageCount + "\" class = \"page-button ui-sortable-handle\">" + (pageCount + 1) + "</li>");
		$("#z-order-container").append("<ol reversed id = \"z-" + pageCount + "\" class = \"z_order\"></ol>");
		$("#page-" + pageCount.toString()).click(function(){	//para sa mga generated buttons
			var page = $(this).attr("id");				//kunin ung pinindot
			$("#p-" + currentPage.toString()).hide();	//hide page and z-order of current page
			$("#z-" + currentPage.toString()).hide();				
			currentPage = page.substring(5);			
			$("#p-" + currentPage.toString()).show();	//show selected page and z-order
			$("#z-" + currentPage.toString()).show();
			$("#currentPage").html($(this).attr('id'));
		});
		$("#z-" + pageCount.toString()).sortable({			//para sa generated na z-order
			update: function(){
				var order = $(this).sortable("toArray");
				order.reverse();
				for(var i = 0; i < order.length; i++){
					$("#" + order[i].replace("-z", "")).css("z-index", i);					
				}
			}
		});		
		$("#p-" + pageCount.toString()).droppable({
			accept: ".first",						//para sa generated pages
			drop: function(event, ui){
				$(ui.helper).removeClass("first");
				$(ui.helper).addClass("asset");
				var id = assetID + '-' + $('#wtf').html();				
				$(this).append($(ui.helper).clone().wrapInner('<div class = "rotatable rotate"></div>').attr('id', id));
				$('.rotatable').rotatable().removeClass('rotatable');
				$('#' + id).resizable({
					containment: "#workspace",		//para hanggang workspace lng ung laki
			    	// animate: true, ghost: true,		    	
			    	minHeight: 50, minWidth: 50,
			    	resize: function(event, ui){
			    		$('#siz').html("w: " + ui.size.width + ", h: " + ui.size.height);
			    	}
			    	//handles: "n, e, s, w, nw, ne, sw, se"
			    }).draggable({
	    			containment: "#workspace", 		//para di lumabas sa workspace
	    			helper: "original", cursor: "move",
	    			drag: function(){
	    				var $this = $(this);
			    		var thisPos = $this.position();
			    		var parPos = $this.parent().position();
			    		var x = thisPos.left - parPos.left;
			    		var y = thisPos.top - parPos.top;
			    		$('#pos').html("x: " + x + ", y: " + y);
	    			}    			
	    		}).css("z-index", assetID);
	    		$('#' + id).mousedown(function(){
	    			$('#selectedAsset').html($(this).attr('id'));
	    		});
	    		$("#z-" + currentPage.toString()).prepend("<li id = \"" + id + "-z\">" + id + "</li>");
	    		assets[currentPage] += id + "/";
	    		assetID++;
			}
		});		
		$("#p-" + currentPage.toString()).hide();
		$("#z-" + currentPage.toString()).hide();
		$("#p-" + pageCount.toString()).show();
		$("#z-" + pageCount.toString()).show();
		currentPage = pageCount;
		assets[pageCount] = "";
		pageCount++;
	});	

	$('#getAssetAtt').click(function(){
		var asset = $('#selectedAsset').html();
		var $this = $('#' + asset);
	 	var thisPos = $this.position();
	 	var parPos = $this.parent().position();
	 	var x = thisPos.left - parPos.left;
	 	var y = thisPos.top - parPos.top;
	 	var angle;
        var matrix = $this.children('div.rotate').css("-webkit-transform") ||
            $this.css("-moz-transform") ||
            $this.css("-ms-transform") ||
            $this.css("-o-transform") ||
            $this.css("transform");
        if (matrix && matrix !== 'none'){
            var values = matrix.split('(')[1].split(')')[0].split(',');
            var a = values[0];
            var b = values[1];
            angle = Math.round(Math.atan2(b, a) * (180 / Math.PI));
        }
        else{
            angle = 0;
        }
        if(angle < 0){
        	angle = (180 + angle) + 180;
        }
	 	alert('x: ' + x + '\ny: ' + y + '\nh: ' + $this.css('height') + '\nw: ' + $this.css('width') + '\nz: ' + $this.css('z-index') + '\na: ' + angle);
	});

	$('#delete-asset').click(function(){
		var selectedAsset = $('#selectedAsset').html();	
		alert(selectedAsset);
		$('#' + selectedAsset).remove();	//delete asset
		$('#' + selectedAsset + "-z").remove();		//delete on z-order
		assets[currentPage] = assets[currentPage].replace(selectedAsset + "-", "");		//delete asset data
	});
	
	$('#delete-page').click(function(){
		var selectedPage = $('#currentPage').html();
		alert(selectedPage);
		$('#' + selectedPage).remove();	//delete pagination
		$('#p-' + selectedPage.substring(5)).remove();		//delete page
		$('#z-' + selectedPage.substring(5)).remove();		//delete z-order		
		assets.splice(selectedPage.substring(5), 1)		//delete asset data
		for(var i = selectedPage.substring(5); i < pageCount; i++){//fix pagination
			$('#page-' + i).html(i);
			$('#page-' + i).attr('id', 'tempPage');			
			$('#tempPage').attr('id', 'page-' + (i - 1));			
		}
		pageCount--;
	});

	$('#pagination').sortable({
		containment: "#pagination-container",
		update: function(){
			var order = $(this).sortable("toArray");
			var tempAssets = assets;
			var temp = "";			
			//alert($(this).sortable("toArray") + "   " + assets);			
			for(var i = 0; i < order.length; i++){//add temporary id
				var li = $('#' + order[i]);						//pagination
				var li2 = $('#p-' + order[i].substring(5));		//page
				var li3 = $('#z-' + order[i].substring(5));		//z-order
				li.attr('id', 'temp' + i);
				li2.attr('id', 'temppage' + i);
				li3.attr('id', 'tempz' + i);
				li.html(i + 1);
			}
			for(var i = 0; i < order.length; i++){//fix id
				$('#temp' + i).attr('id', 'page-' + i);
				$('#temppage' + i).attr('id', 'p-' + i);
				$('#tempz' + i).attr('id', 'z-' + i);
			}
			for(var i = 0; i < order.length; i++){//sort assets
				for(var j = 0; j < order.length - i - 1; j++){
					var wtf = Number(order[j].substring(5));					
					temp = tempAssets[wtf];				
					tempAssets[wtf] = tempAssets[j];
					tempAssets[j] = temp;					
				}
			}
			var getBack = currentPage;
			for(var p = 0; p <= pageCount; p++){
				if(currentPage != p){
					$("#p-" + currentPage).hide();
					$("#z-" + currentPage).hide();
					$("#p-" + p).show();
					$("#z-" + p).show();
				}
				currentPage = p;				
			}		
			$("#p-" + currentPage).hide();
			$("#z-" + currentPage).hide();
			currentPage = getBack;
			$("#p-" + currentPage).show();
			$("#z-" + currentPage).show();	
		}
	});

	$('#changeBG').click(function(){		
		$('#p-' + currentPage).css({'background':'rgb('+$('#R').val()+', '+$('#G').val()+', '+$('#B').val()+')'});
	});
	
});