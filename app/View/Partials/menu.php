<?php    /**     * @var core\View $this     */?><nav>	<ul class="ns">		<?php			$menu_pages = ['index', 'module', 'gallery', 'contacts', 'feedback', 'admin'];			if ($_SESSION['auth']) {				$menu_pages[] = 'logout';			}			foreach ($menu_pages as $menu_page) {				$isActive = $menu_page == $this->app->page->alias;				$menu_page_url = $this->app->createUrl($menu_page);                $menu_page_title = $this->app->pages[$menu_page]['title'];                echo $isActive ? '<li class="active">' : '<li>';                echo lib\Url::createLink($menu_page_url, $menu_page_title, $isActive);                echo '</li>';			}		?>	</ul></nav>