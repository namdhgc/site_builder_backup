<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Pricing Table</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/build.css" rel="stylesheet">
    <link href="css/style-pricing.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <div id="page" class="page">

    	<div class="item pricing" id="pricing_table1">
            <div id="user-infor">User A</div>

    		<div class="container news-container">

    			<div class="row">

    				<div class="col-md-4">

    					<div class="pricing1">

    						<div class="top">

    							<h2 class="editContent">NamDH1wwew</h2>

    							<p class="price "><b class="editContent">$9</b> <span class="editContent">p/month</span></p>

    						</div><!-- /.top -->

    						<div class="bottom">

    							<div class="editContent">
    							<ul>
    								<li><b>2 GB</b> of space</li>
    								<li><b>2000</b> messages</li>
    								<li><b>3</b> user acounts</li>
    								<li><b>2</b> databases</li>
    								<li>unlimited updates</li>
    							</ul>
    							</div><!-- /.editContent -->

    							<a href="" class="btn btn-lg btn-embossed btn-block btn-primary"><span class="fa fa-credit-card"></span> Buy Now</a>

    						</div><!-- /.bottom -->

    					</div><!-- /.pricing1 -->

    				</div><!-- /.col-md-4 col -->

    				<div class="col-md-4">

    					<div class="pricing1">

    						<div class="top">

    							<h2 class="editContent">NamDH2</h2>

    							<p class="price"><b class="editContent">$29</b> <span class="editContent">p/month</span></p>

    						</div><!-- /.top -->

    						<div class="bottom">

    							<div class="editContent">
    							<ul>
    								<li><b>10 GB</b> of space</li>
    								<li><b>10000</b> messages</li>
    								<li><b>20</b> user acounts</li>
    								<li><b>10</b> databases</li>
    								<li>unlimited updates</li>
    							</ul>
    							</div><!-- /.editContent -->

    							<a href="" class="btn btn-lg btn-embossed btn-block btn-primary"><span class="fa fa-credit-card"></span> Buy Now</a>

    						</div><!-- /.bottom -->

    					</div><!-- /.pricing1 -->

    				</div><!-- /.col-md-4 col -->

    			</div><!-- /.row -->

    		</div><!-- /.container -->

    	</div><!-- /.item -->

    </div><!-- /#page -->

    <!-- Load JS here for greater good =============================-->
    <!-- <script src="{{ URL::to('src/js/vendor/jquery.min.js') }}"></script> -->
    <script src="src/js/vendor/jquery.min.js"></script>
    <script src="js/build/build.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $.ajax({url: "/news", success: function(result){
                var data = JSON.parse(result);
                var user = data.user;
                var news = data.news;
                console.log('namdh result news');
                console.log(data);

                $('#user-infor').html(user['first_name'] + ' ' + user['last_name']);
                $('.news-container').html('');
                var html = '';
                console.log('news');
                console.log(news.length);
                console.log(news[0]);
                console.log(news[0]['content']);
                for (var i = 0; i < news.length; i++) {
                    html += '<div class="title">' + news[i]['title'] + '<div>'
                            + '<div class="content">' + news[i]['content'] + '<div>'
                }
                $('.news-container').append(html);
            }});
        });
    </script>
</body>
</html>
