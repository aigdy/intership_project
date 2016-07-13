<html>
<head>
	<title>Nextcover</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<meta charset="UTF-8">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,900' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/underscore.js"></script>
	<script type="text/javascript">
		var  x = [1,2,3,4,5,6,7,3,4,5,6,3,2];
		function petch(x){
			var myElement = 3;
			for (var i = 0; i <= x.length; i++) {
				// console.log(i);
	    		if (x[i] == myElement) x.splice(i, 1);
			}
			// console.log(x);
		}

		// var items = [{x:'1'},{x:'2'},1,{x:'4'}];
		// var evens = _.filter(items, function(item){ 
		// 	return item.x == '2'; 
		// });
		// console.log(evens);
	</script>
</head>

<body style=" background-color:#F8F8F8; ">
	<div class="container">

	<header>
		<div class="menu-bar">
		<div class="menu-list show">
			<a href="index.php" class="active">EXPLORER</a>
			<a href="#">ADVERTISER</a>
			<a href="#">PUBLISHER</a>
			<!-- <a href="#">FAQ</a>
			<a href="#">CONTACT US</a> -->
		</div><!-- menu-list -->
		<div class="feed-cetagory">
			<a href="http://nextcover.co/"><img src="images/logo-black.png"></a>			
			<a href="index.php">LATEST NEWS (บทความล่าสุด)</a>
		</div>
		<div class="search-bar"><i class="fa fa-search"></i></div>
		<div class="clear-none"></div>
		</div><!-- manu-bar -->
		<div class="head-text-box">
			<div class="logo"><img src="images/logo-black.png"></div>
			<h1>NEWS FEED EXPLORER</h1>
			<p>มาทำความรู้จักกับ NEXTCOVER ให้มากขึ้น<br>พวกเรามีบทความที่น่าสนใจรอคุณอยู่มากกว่า 10,000 บทความ</p>
			
			<!-- <div class="btn-box">
				<input type="button" class="button btnactive" value="LATEST">
				<input type="button" class="button" value="POPULAR">
			</div> -->
			<div class="clear-none"></div>
		</div><!-- head-text-box -->
	</header>

	<!-- <div class="detail-box">
	<div class="head-line">
			<div class="head-line-text">
				<p>TODAY</p>
			</div>
			<div class="clear-none"></div> -->
	<!-- </div> --><!-- head-line-->
	<!-- <div class="line-end"></div> -->
<!-- 
	<div class="layout-1">
		<div class="layout-1-left">
			<div class="tag-head">
				<img src="http://touchedition.s3.amazonaws.com/asset/56b85d9fc082b5d163cfe87b.png" height="20px;" width="auto;">
			</div> -->
			<!-- <img src="http://touchedition.s3.amazonaws.com/asset/577ddbc5c1e5761900660ba4-d.jpg"> -->
<!-- 		</div>
		<div class="layout-1-right">
			<div class="layout-1-right-head-text"><a href="#">LOVE OUT LOUD</a></div>
			<div class="line-head"></div>
			<div class="layout-1-right-description">Fashion Show ชุดวิวาห์ โดย Teerak Wedding Studio ซึ่งมาออกบูทในงาน Love Out Loud Wedding Fair @ Ah Yat Convention Hall ถนนสาทร โดยในงานมีการเดินแบบจากนักแสดงจาก IPM, Maxim และนางแบบหน้าใหม่ ที่ผ่าน...
			</div>
		</div>
		<div class="clear-none"></div> -->
	<!-- </div> --><!-- layout-1 -->

	<!-- <div class="layout-2">
		<div class="layout-2-sublayer">
			<div class="layout-outline">
				<div class="layout-outline-pic">
					<div class="tag-head-colum2">
						<img src="http://touchedition.s3.amazonaws.com/asset/56b85d9fc082b5d163cfe87b.png" height="20px;" width="auto;">
						<div class="layout-2-sublayer-head-text">MT'16 - ACTION QUEEN</div>
						<div class="layout-2-line-head"></div>
						<div class="layout-2-description">เปิดตัวแล้วกับปรากฏการณ์ครั้งใหม่ สำหรับเวทีการประกวดนางสาวไทยในรูปแบบใหม่กับรายการ “นางสาวไทย เดอะเรียลลิตี้” รายการที่พิสูจน์ความรู้ความสามารถของเหล่าสาวงามผู้เข้าประกวดนางสาวไทย 2559 กับชาเล้นจ์แรก
						</div> -->
					<!-- </div> --><!-- tag-head -->
				<!-- </div> --><!-- layout-outline-pic -->
			<!-- </div> --><!-- layout-outline -->
		<!-- </div> --><!-- layout-2-sublayer -->

		<!-- <div class="layout-2-sublayer">
			<div class="layout-outline">
				<div class="layout-outline-pic" style="background-image:url('http://touchedition.s3.amazonaws.com/asset/577ddbc657c82e18000212b4-d.png')">
					<div class="tag-head-colum2">
						<img src="http://touchedition.s3.amazonaws.com/asset/56b85d9fc082b5d163cfe87b.png" height="20px;" width="auto;">
						<div class="layout-2-sublayer-head-text">MT'16 - ACTION QUEEN</div>
						<div class="layout-2-line-head"></div>
						<div class="layout-2-description">เปิดตัวแล้วกับปรากฏการณ์ครั้งใหม่ สำหรับเวทีการประกวดนางสาวไทยในรูปแบบใหม่กับรายการ “นางสาวไทย เดอะเรียลลิตี้” รายการที่พิสูจน์ความรู้ความสามารถของเหล่าสาวงามผู้เข้าประกวดนางสาวไทย 2559 กับชาเล้นจ์แรก
						</div> -->
					<!-- </div> --><!-- tag-head -->
				<!-- </div> --><!-- layout-outline-pic -->
			<!-- </div> --><!-- layout-outline -->
		<!-- </div> --><!-- layout-2-sublayer -->

		<!-- <div class="clear-none"></div> -->
	<!-- </div> --><!-- layout-2-->


	<script type="foo/bar" id='dateHeader'>		
		<div class="head-line">
				<div class="head-line-text">
					<p><%-dateObject.toLocaleDateString(undefined,{month: 'long', day: 'numeric' })%></p>
				</div>
				<div class="clear-none"></div>
		</div>
		<div class="line-end"></div>
	</script>


	<script type="foo/bar" id='template1'>
	<div class="clear-none"></div>
	<%	
		var filterResults = _.filter(items,function(item){				
				var articleLogo;
				// console.log(item);
				// console.log(sitesAjax);
				var website = _.find(sitesAjax, function(x){ 
					return x._id == item.site; 
				});

				if (typeof website === 'undefined') {

				} else {
					var _websiteLogo = _.find(website.assets, function(logo){ 
						return logo.key == "logo-dark"; 
					});
					articleLogo = _websiteLogo.src;	
				}
				return (typeof articleLogo !== 'undefined');
			});

			for (var x = 0; x < filterResults.length; x++) {
				var item = filterResults[x];
				var sitesUse = sitesAjax;
    			var websiteLogo='';

    			var website = _.find(sitesAjax, function(x){ 
					return x._id == item.site; 
				});
				console.log(website);
				var urlUse = website.domainPath + item.url;

				if (typeof website === 'undefined') {

				} else {
					websiteLogo = _.find(website.assets, function(logo){ 
						return logo.key == "logo-dark"; 
					});
					websiteLogo = websiteLogo.src;	
				}
	%>
		<div class="layout-1">
				<% if (typeof item.thumbnail === 'undefined') {
					} else { %>
						<div class="layout-1-left" style="background-image: url('<%- item.thumbnail.srcSet[5].src %>');">
							<div class="tag-head">
								<% if (typeof item.user === 'undefined') {
							 	} else { %>
							  	<img src='<%-websiteLogo%>' height=20px; width=auto;>
							 <% } %>
							</div>
						</div>
				<% } %>
			<div class="layout-1-right">
				<div class="layout-1-right-head-text"><a href="www.<%- urlUse %>"><%= item.title %></a></div>
				<div class="line-head"></div>
				<div class="layout-1-right-description"><%- item.description %></div>
			</div>
			<div class="clear-none"></div>
		</div>
	<%
		}
	%>
	</script>


	<script type="foo/bar" id='template2'>
		<div class="layout-2">
	<%	
		var filterResults = _.filter(items,function(item){				
				var articleLogo;
				var website = _.find(sitesAjax, function(x){ 
					return x._id == item.site; 
				});

				if (typeof website === 'undefined') {

				} else {
					var _websiteLogo = _.find(website.assets, function(logo){ 
						return logo.key == "logo-dark"; 
					});
					articleLogo = _websiteLogo.src;	
				}
				return (typeof articleLogo !== 'undefined');
			});

			for (var x = 0; x < filterResults.length; x++) {
				var item = filterResults[x];
				var sitesUse = sitesAjax;
    			var websiteLogo='';

    			var website = _.find(sitesAjax, function(x){ 
					return x._id == item.site; 
				});
				console.log(website);
				var urlUse = website.domainPath + item.url;

				if (typeof website === 'undefined') {

				} else {
					websiteLogo = _.find(website.assets, function(logo){ 
						return logo.key == "logo-dark"; 
					});
					websiteLogo = websiteLogo.src;	
				}
	%>			
				<% if (typeof item.thumbnail === 'undefined') {
					} else { %>
				<div class="layout-2-sublayer">
					<div class="layout-outline">
						<div class="layout-outline-pic" style="background-image: url('<%- item.thumbnail.srcSet[4].src %>');">
							<div class="tag-head-colum2">
								<% if (typeof item.user === 'undefined') {
							 	} else { %>
							  	<img src='<%-websiteLogo%>' height=20px; width=auto;>
							 <% } %>
				<% } %>
					
							<div class="layout-2-sublayer-head-text"><a href="www.<%- urlUse %>"><%= item.title %></a></div>
							<div class="layout-2-line-head"></div>
							<div class="layout-2-description"><%- item.description %></div>
							</div>
						</div>
					</div>
				</div>
	<%
		}
	%>
			<div class="clear-none"></div>
		</div>
	</script>


	<script type="foo/bar" id='template6'>
		<div class="clear-none"></div>
		<div class="layout-6">
		<%
			var filterResults = _.filter(items,function(item){				
				var articleLogo;
				var website = _.find(sitesAjax, function(x){ 
					return x._id == item.site; 
				});

				if (typeof website === 'undefined') {

				} else {
					var _websiteLogo = _.find(website.assets, function(logo){ 
						return logo.key == "logo-dark"; 
					});
					articleLogo = _websiteLogo.src;	
				}
				return (typeof articleLogo !== 'undefined');
			});

			for (var i = 0; i < filterResults.length; i++) {
				var item = filterResults[i];
				var sitesUse = sitesAjax;

				var datefull = item.publishedDate;
    			var year = datefull.substring(0, 4);
    			var month = datefull.substring(5, 7);
    			var monthtext;
    			var websiteLogo='';

    			
    			// console.log(monthtext);
    			var day = datefull.substring(8, 10);

    			var website = _.find(sitesAjax, function(x){ 
					return x._id == item.site; 
				});
				console.log(website);
				var urlUse = website.domainPath + item.url;

				if (typeof website === 'undefined') {

				} else {
					websiteLogo = _.find(website.assets, function(logo){ 
						return logo.key == "logo-dark"; 
					});
					websiteLogo = websiteLogo.src;	
				}
				

		%>
				<div class="list-detail-box-wrapper">
					<div class="list-detail-box">						
						<% if (typeof item.thumbnail === 'undefined') {
						   } else { %>
						   	<div class="pic-box" style="background-image: url('<%- item.thumbnail.srcSet[3].src %>');">
						   		<div class="head-logo">
						   			<% if (typeof item.user === 'undefined') {
						  	 		} else { %>
						   				<img src='<%-websiteLogo%>' height=20px; width=auto;>
						   			<% } %>
						   		</div>
						   	</div>
						<% } %>
							<div class="list-detail-box-text">
					   			<h3><a href="www.<%- urlUse %>"><%= item.title %></a></h3>
					   			<div class="line-date"></div>
					   			<p class="description"><%- item.description %></p>
					   		</div>					   	
					</div>
					<div class="clear-none"></div>
				</div>
			<% }; %>
		</div>
	</script>

	<script type="foo/bar" id='detailList'>
    	<div style="clear:both">
    		<div class="head-line-date">
				<div class="head-line-date-text">
					<p><%-monthtext%> <%-date%> , <%-year%></p>
				</div>
				<div class="clear-none"></div>
			</div>
			<div class="line-end-date"></div>
    	</div>
		<%
			// repeat items 
			// _.each(items,function(item,key,list){
			// create variables
			var filterResults = _.filter(items,function(item){				
				var articleLogo;
				// console.log(item);
				// console.log(sitesAjax);
				var website = _.find(sitesAjax, function(x){ 
					return x._id == item.site; 
				});

				if (typeof website === 'undefined') {

				} else {
					var _websiteLogo = _.find(website.assets, function(logo){ 
						return logo.key == "logo-dark"; 
					});
					articleLogo = _websiteLogo.src;	
				}
				return (typeof articleLogo !== 'undefined');
			});

			for (var i = 0; i < filterResults.length; i++) {
				var item = filterResults[i];
				var sitesUse = sitesAjax;

				var datefull = item.publishedDate;
    			var year = datefull.substring(0, 4);
    			var month = datefull.substring(5, 7);
    			var monthtext;
    			var websiteLogo='';

    			
    			// console.log(monthtext);
    			var day = datefull.substring(8, 10);

    			var website = _.find(sitesAjax, function(x){ 
					return x._id == item.site; 
				});
				console.log(website);
				var urlUse = website.domainPath + item.url;

				if (typeof website === 'undefined') {

				} else {
					websiteLogo = _.find(website.assets, function(logo){ 
						return logo.key == "logo-dark"; 
					});
					websiteLogo = websiteLogo.src;	
				}
				

		%>
				<div class="list-detail-box-wrapper">
					<div class="list-detail-box">						
						<% if (typeof item.thumbnail === 'undefined') {
						   } else { %>
						   	<div class="pic-box" style="background-image: url('<%- item.thumbnail.srcSet[3].src %>');">
						   		<div class="head-logo">
						   			<% if (typeof item.user === 'undefined') {
						  	 		} else { %>
						   				<img src='<%-websiteLogo%>' height=20px; width=auto;>
						   			<% } %>
						   		</div>
						   	</div>
						<% } %>
							<div class="list-detail-box-text">
					   			<h3><a href="www.<%- urlUse %>"><%= item.title %></a></h3>
					   			<div class="line-date"></div>
					   			<p class="description"><%- item.description %></p>
					   		</div>					   	
					</div>
				</div>
			<% }; %>
	</script>

	<div class ="show-data">
		<div class="detail-box-all">
		</div>
	</div><!-- show-data -->

	<script type="text/javascript">

		var tabletotal = [];

		$.ajax({
			type: 'GET',
		    url: 'http://touchedition.com/api/site/list',
		    data: {

		    },
		    success: function (sites) {		    	
				tabletotal = sites;
		    }
		}); 

		var articlesGroupByDate = [];
		var skipCount = 0;
		var lastRenderGroup;
		var renderIndex = 0;
		var isLoading = false;
		var loadCount = 21;
		var loadMore = function(dateForLoadMore,monthForLoadMore,yearForLoadMore) {
			if(isLoading === true){
				return;
			}
			isLoading = true;
			$.ajax({
			       type: 'GET',
			       url: 'http://touchedition.com/api/ssslide',
			       data: {
			           limit: loadCount,
			           skip:skipCount
			           // skip:(($('.list-detail-box').length)),
			       },
			       success: function (articles) {
			       		skipCount += loadCount;
			       		for (var i = 0; i < articles.length; i++) {
			       			var dateObject = new Date(articles[i].publishedDate);
			       			var date = dateObject.getDate();
			       			var month = dateObject.getMonth()+1;
			       			var year = dateObject.getFullYear();
			       			
			       			var isAlreadyPushInsideArray = false;
			       			var foundArticleGroup = null;
			       			for (var j = 0; j < articlesGroupByDate.length; j++) {
			       				if(	articlesGroupByDate[j].date === date && articlesGroupByDate[j].month === month && articlesGroupByDate[j].year === year){
		       						isAlreadyPushInsideArray = true;
		       						foundArticleGroup = articlesGroupByDate[j];
			       				}
			       			}

			       			if(foundArticleGroup !== null){
			       				foundArticleGroup.articles.push(articles[i]);
			       			} else {
			       				var newArticleGroup = {
			       					date: date,
			       					month: month,
			       					year: year,
			       					dateObject: dateObject,
			       					articles: [articles[i]]
			       				};		       				
			       				articlesGroupByDate.push(newArticleGroup)
			       			}
			       		}
			       		$.ajax({
						       type: 'GET',
						       url: 'http://touchedition.com/api/ssslide',
						       data: {
						       		limit: 1,
						       		skip: skipCount
						       },
						       success: function(oneArticles) {
						       		var articleForTestDate = oneArticles[0];			  
						       		var isNeedToLoadMore = false || articlesGroupByDate.length === 0;
					       			var dateObject = new Date(articleForTestDate.publishedDate);
					       			var date = dateObject.getDate();
					       			var month = dateObject.getMonth()+1;
					       			var year = dateObject.getFullYear();
					       			if(	(dateForLoadMore === date || !dateForLoadMore)  && 
					       				(monthForLoadMore === month || !monthForLoadMore)  && 
					       				(yearForLoadMore === year || !yearForLoadMore) ){
						       			for (var j = 0; j < articlesGroupByDate.length; j++) {
						       				if(	articlesGroupByDate[j].date === date && articlesGroupByDate[j].month === month && articlesGroupByDate[j].year === year){
					       						isNeedToLoadMore = true;				       					
						       				}
						       			}					       				
					       			}
						       		
						       		if(isNeedToLoadMore === true){
						       			isLoading = false;
					       				loadMore(date,month,year);
					       			}else if(typeof articlesGroupByDate[renderIndex] !== 'undefined'){
					       				isLoading = false;
					       				// Render         
					       				var articlesForNewFunction = []; 
					       				while(articlesGroupByDate[renderIndex]){
					       					// var templateId = "#detailList";
										  	// var templateString = $(templateId).html();
										  	// var nextcoverTemplateFunction = _.template(templateString);			
										  	articlesForNewFunction = articlesForNewFunction.concat(articlesGroupByDate[renderIndex].articles);
										  	// var templateResult = nextcoverTemplateFunction({ 
										  	// 	items:articlesGroupByDate[renderIndex].articles, 
										  	// 	sitesAjax:tabletotal,
										  	// 	date:articlesGroupByDate[renderIndex].date,
										  	// 	month:articlesGroupByDate[renderIndex].month,
										  	// 	year:articlesGroupByDate[renderIndex].year
										  	// });
										  	// $(".detail-box-all").append(templateResult);
										  	renderIndex++;
										  	if(!articlesGroupByDate[renderIndex]){
										  		break;
										  	}
										  	if(articlesGroupByDate[renderIndex].date === dateForLoadMore &&
										  		articlesGroupByDate[renderIndex].month === monthForLoadMore &&
										  		articlesGroupByDate[renderIndex].year === yearForLoadMore){
										  		break;
										  	}					
					       					
					       				}
					       				// console.log(articlesGroupByDate);
					       				console.log(articlesForNewFunction);

					       				drawSlideFromList(articlesForNewFunction);

					       				function drawSlideFromList(articlesForNewFunction) {
											// 1) split slide by date
											var listSlideByDate = splitListSlideByDate(articlesForNewFunction);

											// 2) draw slide from the same date
											for (var i = 0; i < listSlideByDate.length; i++) {
												var date = listSlideByDate[i].dateObject;
												var day = listSlideByDate[i].date;
												var month = listSlideByDate[i].month;
												var listSlideThatDay = listSlideByDate[i].articles;
												drawSlideByDate(date, listSlideThatDay);
											}

											function drawSlideByDate(date, listSlideThatDay) {
												// 1) draw date header
												// 1.1) Do we need to draw header? Did we draw it?

												// 2) split slide into section and select sectionTemplate
												var slideCount = listSlideThatDay.length;

												// var divideResult = Math.floor(slideCount / 6);
												// var modResult = slideCount % 6;
												// drawSection(template6, listSlideThatDay)

												// var modResult;
												// var divideResult = slideCount;
												var index = 0;

												var template1 = {
													slideCount: 1,
													actualTemplate: "1",
													templateId:"#template1"
												};
												var template2 = {
													slideCount: 2,
													actualTemplate: "2",
													templateId:"#template2"
												};
												var template6 = {
													slideCount: 6,
													actualTemplate: "6",
													templateId:"#template6"
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
												
												drawDateHeader(date);

												while (index < listSlideThatDay.length) {
													for (var i = 0; i < templateCount; i++) {
														if ((listSlideThatDay.length - index) >= listTemplate[i].slideCount) {
															var templateCombo = listTemplate[i].templateCombo;
															for (var j = 0; j < templateCombo.length; j++) {
																drawSection(templateCombo[j], listSlideThatDay, index);
																index += templateCombo[j].slideCount;
															};			
														}
													}
												}
											}

											function splitListSlideByDate(articlesForNewFunction) {
												var articlesGroupByDate = [];
												/*
													[
														{
															date:
															month:
															year:
															dateObject:
															articles:
														}
													]
												
												*/
												for (var i = 0; i < articlesForNewFunction.length; i++) {
									       			var dateObject = new Date(articlesForNewFunction[i].publishedDate);
									       			var date = dateObject.getDate();
									       			var month = dateObject.getMonth()+1;
									       			var year = dateObject.getFullYear();
									       			
									       			var isAlreadyPushInsideArray = false;
									       			var foundArticleGroup = null;
									       			for (var j = 0; j < articlesGroupByDate.length; j++) {
									       				if(	articlesGroupByDate[j].date === date && articlesGroupByDate[j].month === month && articlesGroupByDate[j].year === year){
								       						isAlreadyPushInsideArray = true;
								       						foundArticleGroup = articlesGroupByDate[j];
									       				}
									       			}

									       			if(foundArticleGroup !== null){
									       				foundArticleGroup.articles.push(articlesForNewFunction[i]);
									       			} else {
									       				var newArticleGroup = {
									       					date: date,
									       					month: month,
									       					year: year,
									       					dateObject: dateObject,
									       					articles: [articlesForNewFunction[i]]
									       				};		       				
									       				articlesGroupByDate.push(newArticleGroup)
									       			}
									       		}
									       		return articlesGroupByDate;
											}

											function drawDateHeader(dateObject) {
												var templateString = $("#dateHeader").html();
												  	var nextcoverTemplateFunction = _.template(templateString);
												  	var templateResult = nextcoverTemplateFunction({ 
												  		dateObject:dateObject
												  		// date:articlesNews.date,
												  		// month:articlesNews.month,
												  		// year:articlesNews.year
											  		});
											  	// }
											  	$(".detail-box-all").append(templateResult);
											}

											function drawSection(sectionTemplate, listSlideThatDay, startIndex) {
												var slideCount = sectionTemplate.slideCount;
												var actualTemplate = sectionTemplate.actualTemplate;
												var templateId = sectionTemplate.templateId;
												var articlesNews = listSlideThatDay;

												var arrayForSendToTemplate = [];

												// console.log(index);
												for (var z = startIndex ; z < (startIndex+slideCount); z++) {
													arrayForSendToTemplate.push(articlesNews[z]);
												}
								
													//draw
													// console.log(index);
													// console.log(articlesNews);
												  	var templateString = $(templateId).html();
												  	var nextcoverTemplateFunction = _.template(templateString);
												  	var templateResult = nextcoverTemplateFunction({ 
												  		items:arrayForSendToTemplate,
												  		sitesAjax:tabletotal
											  		});
											  	$(".detail-box-all").append(templateResult);											  	
											}

										}
					       								  	
					       			}
				       				

						       }
						 });
			       }
			});  
		};
		loadMore();
		
		
	  	(function(doc){
		    'use strict';

		    window.onscroll = function (event) {
		        if (isEndOfElement(doc.body)){
		            sendNewEvent('end-of-page-reached');
		        }
		        var isScrollMeetHeadline = isEndOfheadline();
		        if (isScrollMeetHeadline === true){
		        	$('.menu-list').removeClass('show');
		        	$('.feed-cetagory').addClass('show');
		            
		        }else if (isScrollMeetHeadline === false){
		        	$('.menu-list').addClass('show');
		        	$('.feed-cetagory').removeClass('show');
		        	
		        }
		        // console.log('window.scrollY',window.scrollY);
		        // console.log('$(.head-line).offset()',$('.head-line').offset());
		    };

		    function isEndOfheadline(){
		    	if (window.scrollY>$('.line-end').offset().top) {
		    		return true;
		    	} else {
		    		return false;
		    	}
		    }

		    function isEndOfElement(element){
		        //visible height + pixel scrolled = total height 
		        return element.offsetHeight + element.scrollTop >= element.scrollHeight;
		    }

		    function sendNewEvent(eventName){
		        var event = doc.createEvent('Event');
		        event.initEvent(eventName, true, true);
		        doc.dispatchEvent(event);
		    }
		}(document));

	  	
		document.addEventListener('end-of-page-reached', function(){
			loadMore();
    	});//document
	</script>
	<script type="text/javascript" src="js/index.js"></script>
		</div><!-- detail-box -->
	</div><!-- container -->
</body>
</html>