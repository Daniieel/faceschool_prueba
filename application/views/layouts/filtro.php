<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="UI Elements: Large Drop Down Menu" />
        <meta name="keywords" content="jquery, drop down, menu, navigation, large, mega "/>
		<link rel="stylesheet" href="<?= base_url(); ?>css/stylefiltro.css" type="text/css" media="screen"/>

    <body>
		
		<div style="margin-left:9em;margin-right:9em" class="box" >
			
			<ul id="ldd_menu" class="ldd_menu">
				<li>
					<span>Vacations</span><!-- Increases to 510px in width-->
					<div class="ldd_submenu">
						<ul>
							<li class="ldd_heading">By Location</li>
							<li><a href="#">South America</a></li>
							<li><a href="#">Antartica</a></li>
							<li><a href="#">Africa</a></li>
							<li><a href="#">Asia and Australia</a></li>
							<li><a href="#">Europe</a></li>
						</ul>
						<ul>
							<li class="ldd_heading">By Category</li>
							<li><a href="#">Sun &amp; Beach</a></li>
							<li><a href="#">Adventure</a></li>
							<li><a href="#">Science &amp; Education</a></li>
							<li><a href="#">Extreme Sports</a></li>
							<li><a href="#">Relaxing</a></li>
							<li><a href="#">Spa and Wellness</a></li>
						</ul>
						<ul>
							<li class="ldd_heading">By Theme</li>
							<li><a href="#">Paradise Islands</a></li>
							<li><a href="#">Cruises &amp; Boat Trips</a></li>
							<li><a href="#">Wild Animals &amp; Safaris</a></li>
							<li><a href="#">Nature Pure</a></li>
							<li><a href="#">Helping others &amp; For Hope</a></li>
							<li><a href="#">Diving</a></li>
						</ul>
						<a class="ldd_subfoot" href="#"> + New Deals</a>
					</div>
				</li>
				<li>
					<span>Equipment</span>
					<div class="ldd_submenu">
						<ul>
							<li class="ldd_heading">By Location</li>
							<li><a href="#">South America</a></li>
							<li><a href="#">Antartica</a></li>
							<li><a href="#">Africa</a></li>
							<li><a href="#">Asia and Australia</a></li>
							<li><a href="#">Europe</a></li>
						</ul>
						<ul>
							<li class="ldd_heading">By Category</li>
							<li><a href="#">Sun &amp; Beach</a></li>
							<li><a href="#">Adventure</a></li>
							<li><a href="#">Science &amp; Education</a></li>
							<li><a href="#">Extreme Sports</a></li>
							<li><a href="#">Relaxing</a></li>
							<li><a href="#">Spa and Wellness</a></li>
						</ul>
						<ul>
							<li class="ldd_heading">By Theme</li>
							<li><a href="#">Paradise Islands</a></li>
							<li><a href="#">Cruises &amp; Boat Trips</a></li>
							<li><a href="#">Wild Animals &amp; Safaris</a></li>
							<li><a href="#">Nature Pure</a></li>
							<li><a href="#">Helping others &amp; For Hope</a></li>
							<li><a href="#">Diving</a></li>
						</ul>
						<a class="ldd_subfoot" href="#"> + New Deals</a>
					</div>
				</li>
				<li>
					<span>Locations</span>
					<div class="ldd_submenu">
						<ul>
							<li class="ldd_heading">By Location</li>
							<li><a href="#">South America</a></li>
							<li><a href="#">Antartica</a></li>
							<li><a href="#">Africa</a></li>
							<li><a href="#">Asia and Australia</a></li>
							<li><a href="#">Europe</a></li>
						</ul>
						<ul>
							<li class="ldd_heading">By Category</li>
							<li><a href="#">Sun &amp; Beach</a></li>
							<li><a href="#">Adventure</a></li>
							<li><a href="#">Science &amp; Education</a></li>
							<li><a href="#">Extreme Sports</a></li>
							<li><a href="#">Relaxing</a></li>
							<li><a href="#">Spa and Wellness</a></li>
						</ul>
						<ul>
							<li class="ldd_heading">By Theme</li>
							<li><a href="#">Paradise Islands</a></li>
							<li><a href="#">Cruises &amp; Boat Trips</a></li>
							<li><a href="#">Wild Animals &amp; Safaris</a></li>
							<li><a href="#">Nature Pure</a></li>
							<li><a href="#">Helping others &amp; For Hope</a></li>
							<li><a href="#">Diving</a></li>
						</ul>
						<a class="ldd_subfoot" href="#"> + New Deals</a>
					</div>
				</li>
			</ul>
		</div>

        <div>
            
        </div>
		<!-- The JavaScript -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script type="text/javascript">
            $(function() {
				/**
				 * the menu
				 */
				var $menu = $('#ldd_menu');
				
				/**
				 * for each list element,
				 * we show the submenu when hovering and
				 * expand the span element (title) to 510px
				 */
				$menu.children('li').each(function(){
					var $this = $(this);
					var $span = $this.children('span');
					$span.data('width',$span.width());
					
					$this.bind('mouseenter',function(){
						$menu.find('.ldd_submenu').stop(true,true).hide();
						$span.stop().animate({'width':'510px'},300,function(){
							$this.find('.ldd_submenu').slideDown(300);
						});
					}).bind('mouseleave',function(){
						$this.find('.ldd_submenu').stop(true,true).hide();
						$span.stop().animate({'width':$span.data('width')+'px'},300);
					});
				});
            });
        </script>	
    </body>
</html>