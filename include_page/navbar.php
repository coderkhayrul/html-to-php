<!-- Static navbar --><div class="navbar navbar-inverse navbar-static-top">	<div class="container">		<div class="navbar-header">			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">				<span class="icon-bar"></span>				<span class="icon-bar"></span>				<span class="icon-bar"></span>			</button>			<a class="navbar-brand" href="index.php">STANLEY</a>		</div>		<div class="navbar-collapse collapse">			<ul class="nav navbar-nav navbar-right">                <?php                                ?>                <li					<?php					if ($pagename == 'work.php') { echo "class='active' "; }                    elseif ($pagename == 'work01.php') { echo "class='active' "; }					?>>                    <a href="work.php">Work</a>                </li>				<li <?php if ($pagename == 'about.php') { echo "class='active' "; }?>><a href="about.php">About</a></li>				<li                    <?php                    if ($pagename == 'blog.php') { echo "class='active' "; }                    elseif ($pagename == 'blog01.php') { echo "class='active' "; }                    ?>>                    <a href="blog.php">Blog</a>                </li>				<li <?php if ($pagename == 'contact.php') { echo "class='active' "; }?>><a href="contact.php">Contact</a></li>			</ul>		</div><!--/.nav-collapse -->	</div></div>