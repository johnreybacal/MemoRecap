$(document).ready(function(){
	
	/*Initializations*/	
	
    $(".first").draggable({
		helper: "clone", revert: "invalid", 
		scroll: false							//para mag-clone from asset picker to workspace
    });

	$(".pages").droppable({		
		accept: ".first",						//para saluhin from asset picker
		drop: function(event, ui){				//make asset draggable and resizable
			var id = assetID + '-' + $('#wtf').html();
    		assets[currentPage] += id + "/";    		
    		assetID++;
			$(ui.helper).removeClass("first");	//pra hindi mag-clone	
			$(ui.helper).addClass("asset");
			$(this).append($(ui.helper).clone().wrapInner('<div class = "rotatable rotate"></div>').attr('id', id));
			assetInteractability(id);
    		$("#z-" + currentPage).prepend("<li id = \"" + id + "-z\">" + id + "</li>");
    		$("#z-" + currentPage).children('#' + id + '-z').mousedown(function(){
				displayAssetAttributes($('#' + id));
			});			
		}
	});

	$(".z-order").sortable({							//z-order or layer
		update: function(){
			var order = $(this).sortable("toArray");	//gawing array ung list na element
			order.reverse();
			for(var i = 0; i < order.length; i++){
				$("#" + order[i].replace("-z", "")).css("z-index", i + 1);	//ayusin ung z order				
			}
		}
	}).children('li').mousedown(function(){
		displayAssetAttributes($('#' + $(this).attr('id').replace('-z', '')));
	});	

	$(".page-button").click(function(){					//initialize	lipat ng page
		var page = $(this).attr("id");				//kunin ung pinindot
		$("#p-" + currentPage).hide();	//hide page and z-order of current page
		$("#z-" + currentPage).hide();		
		currentPage = page.substring(5);		
		$("#p-" + currentPage).show();	//show selected page and z-order
		$("#z-" + currentPage).show();
		$("#currentPage").html(Number(currentPage) + 1);
		$('.attr').html('');
	});

	$('.setBG').click(function(){
		var id = $(this).data('id');
		// alert(id + ' ' + $('#' + id).children('img').attr('src'));
		// alert($('#p-' + currentPage).data('bg'));
		$('#p-' + currentPage).css({'background-image': 'url("' + $('#' + id).children('img').attr('src') + '")'});
		$('#p-' + currentPage).attr('data-bg', id);
	});

	/*End of initializations*/
});