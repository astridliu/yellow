<?php if($yellow->page->isPage("sidebar")): ?>
<?php if($yellow->page->get("navigation")=="navigation-sidebar"): ?>
<?php $page = $yellow->page->getParentTop(false) ?>
<?php $pages = $page ? $page->getChildren(!$page->isVisible()) : $yellow->pages->clean() ?>
<?php $yellow->page->setLastModified($pages->getModified()) ?>
<div class="sidebar">
<div class="navigation-sidebar">
<p><?php echo $page->getHtml("titleNavigation") ?></p>
<ul>
<?php foreach($pages as $page): ?>
<li><a<?php echo $page->isActive() ? " class=\"active\"" : "" ?> href="<?php echo $page->getLocation(true) ?>"><?php echo $page->getHtml("titleNavigation") ?></a></li>
<?php endforeach ?>
</ul>
</div>
</div>
<?php else: ?>
<?php $page = $yellow->page->getPage("sidebar") ?>
<?php $page->setPage("main", $yellow->page) ?>
<?php $yellow->page->setLastModified($page->getModified()) ?>
<div class="sidebar">
<?php echo $page->getContent() ?>
</div>
<?php endif ?>
<?php endif ?>
