<?php    /**     * @var core\View $this     */?><!DOCTYPE html><html><head>	<meta http-equiv="Content-type" content="text/html; charset=utf-8">		<meta http-equiv="Content-Language" content="ru_RU">	<meta http-equiv="X-UA-Compatible" content="IE=Edge">	<link rel="stylesheet" href="/css/site.css?<?=$this->app->version?>" type="text/css">	<?php		if (file_exists($this->path . '/head.php')) {			include($this->path . '/head.php');		}		else {		    echo '<title>' . $this->app->title . '</title>';        }	?>	<meta name="robots" content="index, follow"></head><body>	<div id="wrapper">		<header>			<?php include($this->app->partialPath . '/header.php');?>		</header>		<div id="top-panel" class="clearfix">			<?php include($this->app->partialPath . '/search.php');?>		</div>		<aside>			<?php include($this->app->partialPath . '/menu.php');?>            <?php include($this->app->partialPath . '/subscribe.php');?>		</aside>		<section>			<?php include($this->path . '/content.php');?>		</section>		<div id="bottom-panel"><?php include($this->app->partialPath . '/copyright.php');?></div>		<footer>			<?php include($this->app->partialPath . '/counter.php');?>		</footer>	</div>    <script src="/js/jquery.min.js"></script>    <script src="/js/ajax.js?<?=$this->app->version?>"></script><!--    <script src="/subscribe/script.js?--><?//=$this->app->version?><!--"></script>-->    <?php        if (file_exists($this->path . '/script.php')) {            include($this->path . '/script.php');        }    ?></body></html>