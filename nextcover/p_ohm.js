success: function (articles) {


}



/**
รับข้อมูลเป็นรายการ slide แล้ววาดขึ้นจอเลย
**/
function drawSlideFromList(listSlide) {
	// 1) split slide by date
	var listSlideByDate = splitListSlideByDate(listSlide);

	// 2) draw slide from the same date
	for (var i = 0; i < listSlideByDate.length; i++) {
		var date = listSlideByDate[i].date;
		var listSlideThatDay = listSlideByDate[i].listSlide; // เป็นก่อน index array ของข้อมูลของวันที่
		drawSlideByDate(date, listSlideThatDay);
	}
}


function splitListSlideByDate(listSlide) {

	return [
		{
			date: dateValue,
			listSlide: []
		},
		{
			date: dateValue,
			listSlide: []
		}
	]
}


function drawSlideByDate_v1(date, listSlide) {
	// 1) draw date header
	// 1.1) Do we need to draw header? Did we draw it?

	// 2) split slide into section and select sectionTemplate
	var slideCount = listSlide.length;

	var divideResult = Math.floor(slideCount / 6);
	var modResult = slideCount % 6;
	drawSection(template6, listSlide)

	var modResult;
	var divideResult = slideCount;
	var index = 0;

	while (divideResult > 0) {
		if (divideResult >= 6) {
			drawSection(template6, listSlide, index);
			index = index + 6;

		} else if (divideResult >= 2) {
			drawSection(template2, listSlide, index);
			index = index + 2;

		} else if (divideResult >= 1) {
			drawSection(template1, listSlide, index);
			index = index + 1;
		}
	}
}

function drawSlideByDate_v2(date, listSlide) {
	// 1) draw date header
	// 1.1) Do we need to draw header? Did we draw it?

	// 2) split slide into section and select sectionTemplate
	var slideCount = listSlide.length;

	var divideResult = Math.floor(slideCount / 6);
	var modResult = slideCount % 6;
	drawSection(template6, listSlide)

	var modResult;
	var divideResult = slideCount;
	var index = 0;

	var listTemplate = [
		{
			slideCount: 6,
			template: template6
		},
		{
			slideCount: 2,
			template: template2
		},
		{
			slideCount: 1,
			template: template1
		},
	];
	var templateCount = listTemplate.length;

	while (divideResult > 0) {
		for (var i = 0; i < templateCount; i++) {
			if (divideResult >= listTemplate[i].slideCount) {
				drawSection(listTemplate[i].template, listSlide, index);
				index += listTemplate[i].slideCount;
			}
		}
	}
}

function drawSlideByDate_v3(date, listSlide) {
	// 1) draw date header
	// 1.1) Do we need to draw header? Did we draw it?

	// 2) split slide into section and select sectionTemplate
	var slideCount = listSlide.length;

	var divideResult = Math.floor(slideCount / 6);
	var modResult = slideCount % 6;
	drawSection(template6, listSlide)

	var modResult;
	var divideResult = slideCount;
	var index = 0;

	var template1 = {
		slideCount: 1,
		actualTemplate: "1",
		templateId:"template1"
	};
	var template2 = {
		slideCount: 2,
		actualTemplate: "2",
		templateId:"template2"
	};
	var template6 = {
		slideCount: 6,
		actualTemplate: "6",
		templateId:"template6"
	};

	var listTemplate = [
		{
			slideCount: 9,
			templateCombo: [template1, template2, template6]
		},
		{
			slideCount: 3,
			templateCombo: [template1, template2]
		},
		{
			slideCount: 6,
			templateCombo: [template6]
		},
		{
			slideCount: 2,
			templateCombo: [template2]
		},
		{
			slideCount: 1,
			templateCombo: [template1]
		}
	];
	var templateCount = listTemplate.length;

	while (index < listSlide.length) {
		for (var i = 0; i < templateCount; i++) {
			if ((listSlide.length - index) >= listTemplate[i].slideCount) {
				var templateCombo = listTemplate[i].templateCombo;
				for (var j = 0; j < templateCombo.length; j++) {
					drawSection(templateCombo[j], listSlide, index);
					index += templateCombo[j].slideCount;
				};			
			}
		}
	}
}

function drawDateHeader(date) {

}

function drawSection(sectionTemplate, listSlide, index) {
	var slideCount = sectionTemplate.slideCount;
	var actualTemplate = sectionTemplate.actualTemplate;
	var templateId = sectionTemplate.templateId;

	var templateString = $(templateId).html();

}