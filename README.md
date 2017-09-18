# MemoRecap
Web Dev
Woi guys gamitin nyo na lang ung system/ at user_guide/ nyo kasi di kaya >100 files na upload
Import nyo ung memo_recap.sql
Needed to be done:
select multiple - nat (use jQueryUI .selectable() on parent)
ui for editor/view/myScrapbooks - lore n shi (make it wow)
login signup - tovs (study CI_model)
text asset - feps (lol)

{"height":"512px", "width":"768px" , "pages":{"0":{"bg":"rgb(255, 144, 144)","0-0001":{"x": "0", "y": "299", "w": "204px", "h": "211px", "z": "0","a": "32"},"1-0003":{"x": "237", "y": "138", "w": "196px", "h": "197px", "z": "1","a": "22"},"2-0004":{"x": "538", "y": "36", "w": "221px", "h": "221px", "z": "2","a": "338"}},"1":{"bg":"rgb(144, 255, 144)","3-0005":{"x": "25", "y": "57", "w": "462px", "h": "406px", "z": "3","a": "354"},"4-0004":{"x": "409", "y": "203", "w": "269px", "h": "269px", "z": "4","a": "18"}},"2":{"bg":"rgb(144, 144, 255)","5-0006":{"x": "0", "y": "0", "w": "765px", "h": "509px", "z": "1","a": "40"},"6-0001":{"x": "0", "y": "253", "w": "249px", "h": "257px", "z": "0","a": "0"}},"3":{"bg":"rgb(255, 255, 144)","7-0003":{"x": "226", "y": "68", "w": "394px", "h": "394px", "z": "1","a": "66"},"8-0001":{"x": "451", "y": "198", "w": "315px", "h": "300px", "z": "0","a": "0"}}}}

how our json works?
{
	height: 512, //height ni workspace
	width: 728, //width ni workspace
	pages: { //array lahat ng page
		0: { //page 0 or 1, depends. 0 for me, 1 for end users
			bg: rgb(0,0,0) //background ng page
			1-0001: { //asset id. array ng attributes
				//asset id consists 2 parts (1 and 0001)
				//1 - asset id in javascript, more like a counter
				//0001 - asset id from database			
				x: 0, //(left or x) + (left ni grandparent, si workspace)
				y: 0, //(top or y) + (top ni grandparent, si workspace)
				h: 100px, //height ng image, duh
				w: 100px, //width ng image :<
				a: 0 //angle, in degrees. kino-convert into radian kase sya lang tinatanggap ni rotatable.angle 
			}
		}
	}
}
