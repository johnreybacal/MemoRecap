# MemoRecap
Web Dev <br/ >
Woi guys gamitin nyo na lang ung system/ at user_guide/ nyo kasi di kaya >100 files na upload <br/ >
Import nyo ung memo_recap.sql <br/ >
Needed to be done:<br/ >
No overflow - Nat <br/ >
ui for editor/view/myScrapbooks - lore n shi <br/ >
login signup session - tovs <br/ >
text asset - feps (lol) <br/ >
how our json works? <br/ >
{ <br/ >
	height: 512, //height ni workspace <br/ >
	width: 728, //width ni workspace <br/ >
	pages: { //array lahat ng page <br/ >
		0: { //page 0 or 1, depends. 0 for me, 1 for end users <br/ >
			bg: rgb(0,0,0) //background ng page <br/ >
			1-0001: { //asset id. array ng attributes <br/ >
				//asset id consists 2 parts (1 and 0001) <br/ >
				//1 - asset id in javascript, more like a counter <br/ >
				//0001 - asset id from database <br/ >
				x: 0, //(left or x) + (left ni grandparent, si workspace) <br/ >
				y: 0, //(top or y) + (top ni grandparent, si workspace) <br/ >
				h: 100px, //height ng image, duh <br/ >
				w: 100px, //width ng image :< <br/ >
				a: 0 //angle, in degrees. kino-convert into radian kase sya lang tinatanggap ni rotatable.angle <br/ >
			} <br/ >
		} <br/ >
	} <br/ >
} <br/ >
