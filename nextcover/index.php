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
				console.log(i);
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

<body style=" background-color:#FCFCFC; ">
	<div class="container">
	<header>
		<div class="menu-bar">
		<div class="logo"><img src="images/logo-light.png"></div>
			<div class="menu-list">
				<a href="http://nextcover.co/" class="">HOME</a>
				<a href="index.php" class="active">FEED</a>
			</div><!-- menu-list -->
		</div><!-- manu-bar -->
	</header>

	<div class="detail-box">
		<div class="head-text-box">
			<h1>NEWS FEED</h1>
			<p>มาทำความรู้จักกับ NEXTCOVER ให้มากขึ้น<br>พวกเรามีบทความที่น่าสนใจรอคุณอยู่มากกว่า 10,000 บทความ</p>
			<script type="text/javascript">
				$(document).ready(function(){
    				$("button").click(function(){
        				$("p:first").addClass("intro");
    				});
				});
			</script>
			<div class="btn-box">
				<input type="button" class="button btnactive" value="LATEST">
				<input type="button" class="button" value="POPULAR">
			</div><!-- btn-box -->
			<div class="head-line">
				<div class="head-line-text">LATEST NEWS</div><!-- head-line-text -->

				<div class="head-line-search">
					<form class="search-container" action="www.google.com/search">
					  <input id="search-box" type="text" class="search-box" name="q" />
					  <label for="search-box"><span class="glyphicon glyphicon-search search-icon"><i class="fa fa-search"></i></span></label>
					  <input type="submit" id="search-submit" />
					</form>
				</div><!-- head-line-text -->
			</div><!-- head-line -->
			<div class="clear-none"></div>
			<div class="line-end"></div>
		</div><!-- head-text-box -->

	<script type="foo/bar" id='detailList'>
		<div class="detail-box-all">
		<%
			// repeat items 
			// _.each(items,function(item,key,list){
			// create variables
			var filterResults = _.filter(items,function(item){				
				var articleLogo;
				var website = _.find(sitesAjax, function(x){ 
					return x._id == item.site; 
				});

				if (typeof website === 'undefined') {

				} else {
					var _websiteLogo = _.find(website.assets, function(logo){ 
						return logo.key == "logo"; 
					});
					articleLogo = _websiteLogo.src;	
				}

			});

			for (var i = 0; i < items.length; i++) {
				var item = items[i];
				var sitesUse = sitesAjax;

				var datefull = item.publishedDate;
    			var year = datefull.substring(0, 4);
    			var month = datefull.substring(5, 7);
    			var monthtext;
    			var websiteLogo='';

    			if (month  ==  "01") {
    				monthtext = "January";
    			};
    			if (month == "02") {
    				monthtext = "February";
    			};
    			if (month == "03") {
    				monthtext = "March";
    			};
    			if (month == "04") {
    				monthtext = "April";
    			};
    			if (month == "05") {
    				monthtext = "May";
    			};
    			if (month == "06") {
    				monthtext = "June";
    			};
    			if (month == "07") {
    				monthtext = "July";
    			};
    			if (month == "08") {
    				monthtext = "August";
    			};
    			if (month == "09") {
    				monthtext = "September";
    			};
    			if (month == "10") {
    				monthtext = "October";
    			};
    			if (month==="11") {
    				monthtext = "November";
    			};
    			if (month==="12") {
    				monthtext = "December";
    			};
    			// console.log(monthtext);
    			var day = datefull.substring(8, 10);

    			var website = _.find(sitesAjax, function(x){ 
					return x._id == item.site; 
				});
				// console.log(website);

				if (typeof website === 'undefined') {

				} else {
					websiteLogo = _.find(website.assets, function(logo){ 
						return logo.key == "logo"; 
					});
					websiteLogo = websiteLogo.src;	
				}
				

		%>
				<div class="list-detail-box">
					<% if (typeof item.thumbnail === 'undefined') {
					   } else { %>
					   	<div class="pic-box" style="background-image: url('<%- item.thumbnail.srcSet[3].src %>');"></div>
					<% } %>
						<div class="list-detail-box-text">
				   			<h3><a href="<%- item.url %>"><%= item.title %></a></h3>
				   			<p class="date-text"><%- day %> <%- monthtext %> <%- year %></p>
				   			<div class="line-date"></div>
				   			<p class="description"><%- item.description %></p>
				   			<% if (typeof item.user === 'undefined') {
				  	 		} else { %>
				   				<p class="post-text left-text">Posted by  <img src='<%-websiteLogo%>' height=12px; width=auto;></p> 
				   			<% } %>
				   		</div>
				</div>
			<% }; %>
			<div class="clear-none"></div>
		</div>
	</script>

	<div class ="show-data">
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


		$.ajax({
		       type: 'GET',
		       url: 'http://touchedition.com/api/ssslide',
		       data: {
		           limit:21,
		           skip:0,
		       },
		       success: function (data) {
		        	// var x = data;							           
				  	var templateString = $("#detailList").html();
				  	var nextcoverTemplateFunction = _.template(templateString);
				  	var templateResult = nextcoverTemplateFunction({ 
				  		items:data, 
				  		sitesAjax:tabletotal
				  	});
				  	$(".show-data").html(templateResult);


				  	(function(doc){
					    'use strict';

					    window.onscroll = function (event) {
					        if (isEndOfElement(doc.body)){
					            sendNewEvent('end-of-page-reached');
					        }
					    };

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
							$.ajax({
										type: 'GET',
								       	url: 'http://touchedition.com/api/ssslide',
								       	data: {
								           limit:21,
								           skip:(($('.list-detail-box').length)),
								        },

										success: function(data2) {
											var templateString = $("#detailList").html();
										  	var nextcoverTemplateFunction = _.template(templateString);
										  	var templateResult = nextcoverTemplateFunction({ items:data2 , sitesAjax:tabletotal });
										  	// var info = $('.show-data');
										  	$('.show-data').append(templateResult);
										  	// $("#target2").html(templateResult);
										}

							});
			    	});//document
		       }
		});  
		

	</script>
	<script type="text/javascript" src="js/index.js"></script>
		</div><!-- detail-box -->
	</div><!-- container -->
</body>
</html>