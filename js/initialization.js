$(document).ready(function(){
	/*Initializations*/
	
    $(".first").draggable({
		helper: "clone", revert: "invalid", 
		scroll: false							//para mag-clone from asset picker to workspace
    });

	$(".pages").droppable({		
		accept: ".first",						//para saluhin from asset picker
		drop: function(event, ui){				//make asset draggable and resizable
			$(ui.helper).removeClass("first");	//pra hindi mag-clone	
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
    		$('#' + id).mousedown(function(){//gawing focusable lol kinuha ko lng ung id haha
    			$('#selectedAsset').html($(this).attr('id'));
    		});
    		$("#z-" + currentPage.toString()).prepend("<li id = \"" + id + "-z\">" + id + "</li>");
    		assets[currentPage] += id + "/";    		
    		assetID++;
		}
	});

	$(".z_order").sortable({							//z-order or layer
		update: function(){
			var order = $(this).sortable("toArray");	//gawing array ung list na element
			order.reverse();
			for(var i = 0; i < order.length; i++){
				$("#" + order[i].replace("-z", "")).css("z-index", i);	//ayusin ung z order
				//alert(i + " = " + $("#" + i).css("z-index"));
			}
		}
	});

	$(".page-button").click(function(){					//initialize	lipat ng page
		var page = $(this).attr("id");				//kunin ung pinindot
		$("#p-" + currentPage.toString()).hide();	//hide page and z-order of current page
		$("#z-" + currentPage.toString()).hide();		
		currentPage = page.substring(5);		
		$("#p-" + currentPage.toString()).show();	//show selected page and z-order
		$("#z-" + currentPage.toString()).show();
		$("#currentPage").html($(this).attr('id'));
	});
	/*End of initializations*/
});