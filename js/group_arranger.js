var BOX_WIDTH = 100,
	BOX_HEIGHT = 50,
	BOX_MARGIN = 5;
var INCW = BOX_WIDTH + BOX_MARGIN;
var INCH = BOX_HEIGHT + BOX_MARGIN;
var totNum = 0;
for (var i = 0; i < bind_name_list.length; ++i) {
	totNum += bind_name_list[i].length;
}
totNum+=nameList.length;
var groupNum = Math.floor(totNum / groupSize) + (totNum % groupSize ? 1 : 0);
var BUTTOM = $(window).height() - BOX_HEIGHT - 100;
var LEFT = Math.floor(Math.max(($(window).width() - groupNum * INCW) / 2, 0));
for (var i = 0; i < nameList.length; i++) {
	$(".namearray").append("<div class=\"namebox\" id=\"namebox" + i + "\">" + nameList[i] + "");
}

var l = 0;
var left = {};
for (var i = 0; i < nameList.length; i++) {
	$("#namebox" + i).css({
		"position": "absolute",
		"left": l + "px",
	});
	left[i] = l;
	l += INCW;
}

var cnt = {};
for (var i = 0; i < groupNum; i++) cnt[i] = 0;

for (var i = 0; i < bind_name_list.length; ++i) {
	for (var j = 0; j < bind_name_list[i].length; ++j) {
		$(".namearray").append("<div class=\"namebox\" id=\"nameboxfixed" + i + "x" + j + "\">" + bind_name_list[i][j] + "");
		$("#nameboxfixed" + i + "x" + j).css({
			position: "absolute",
			left: LEFT + INCW * i,
			top: BUTTOM - cnt[i] * INCH,
		});
		cnt[i]++;
	}
}

function moveLeft(i) {
	left[i] -= INCW;
	$("#namebox" + i).animate({
		left: left[i] + "px",
	});
	if (i < nameList.length - 1) moveLeft(i + 1);
}



function moveToGroup(i, j) {
	$("#namebox" + i).animate({
		left: LEFT + INCW * j,
		top: BUTTOM - cnt[j] * INCH,
	});
	cnt[j]++;
	if (i + 1 < nameList.length) moveLeft(i + 1);

	if (i + 1 < nameList.length) setTimeout(function() {
		var step = randInt(1, groupNum);
		var now = 0;
		var rollCnt=0;
		while (step) {
			rollCnt++;
			if(rollCnt>=100) {
				console.log(111);
			}
			now++;
			now %= groupNum;
			if (cnt[now] != groupSize) step--;
		}
		moveToGroup(i + 1, now);
	}, 100);
}

function randInt(l, r) {
	r++;
	return parseInt(Math.random() * (r - l) + l);
}
moveToGroup(0, 0);