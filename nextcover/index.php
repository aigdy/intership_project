<html>
<head>
	<title>Nextcover</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/underscore.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="container">
	<header>

	</header>
	<script type="foo/bar" id='usageList'>
		<table cellspacing='0' cellpadding='0' border='1' >
		    <thead>
		      <tr>
		        <th>Name</th>
		        <th>Day</th>
		        <th>description</th>
		        <th>link</th>
		        <th>by</th>
		        <th>pic</th>
		      </tr>
		    </thead>
		    <tbody>
		      <%
		        // repeat items 
		        // _.each(items,function(item,key,list){
		          // create variables
		          
		          var items = items;
		          console.log(items);
		          for (var i = 0 ; i < items.length ; i++) {
		     		var item = items[i];
		      %>
		        <tr>
		          <td><h3><%= item.title %></h3></td>
		          <td><p><%- item.publishedDate %></p></td>
		          <td><%- item.description %></td>
		          <td><a href='<%- item.url %>'>Click</a></td>
		          <td>
		          <% if (typeof item.user === 'undefined') {}
		          else { %>
		          	<%- item.user.fullname %>
		          <% } %>
		          </td>
		          <td>
		          <% if (typeof item.thumbnail === 'undefined') {}
		          else { %>
		          	<img src="<%- item.thumbnail.srcSet[3].src %>">
		          <% } %>
		          </td>
		        </tr>
		      <%
		        	};
		      %>

		    </tbody>
		  </table>
		</script>
		<div id="target"></div>
		<script type="text/javascript">
		  	$.ajax({
		        type: 'GET',
		        url: 'http://touchedition.com/api/ssslide',
		        data: {
		            limit:20,
		            // skip:20,
		        },

		        success: function (data) {
		        	var x=data;							           
	            	var petchData = [
					    {name:"Alexander", interests:"creating large empires"},
					    {name:"Edward", interests:"ha.ckers.org <\nBGSOUND SRC=\"javascript:alert('XSS');\">"},
					    {name:"..."},
					    {name:"Yolando", interests:"working out"},
					    {name:"Zachary", interests:"picking flowers for Angela"}
					  ];
				  var templateString = $("#usageList").html();
				  var petchTemplateFunction = _.template(templateString);
				  var templateResult = petchTemplateFunction({ items:x });
				  $("#target").html(templateResult);
		        }
		    });
		  
		</script>
		</div><!-- container -->
</body>
</html>