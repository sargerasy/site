<?php
class SitemapTest extends CDbTestCase
{
	public $fixtures = array(
		'sitemaps' => 'Sitemap',
	);

	public function testLoadMain()
	{
		$main = Sitemap::loadMain();
		$this->assertTrue(is_array($main));
		$this->assertEquals(7, count($main));
		$this->assertTrue(in_array($this->sitemaps('home'), $main));
	}

	public function testLoadAllSiteMap()
	{
		$all = Sitemap::loadAllSiteMap();
		$this->assertTrue(is_array($all));
		$this->assertEquals(7, count($all));
		$this->assertTrue(is_array($all[0]));
		$this->assertEquals(7, count($all[0]));
		$this->assertEquals(0, count($all[1]));
		$this->assertTrue(is_array($all[2]));
		$this->assertEquals(9, count($all[2]));
		$this->assertEquals(1, count($all[12]));
	}

	public function testGetChildren()
	{
		$children = Sitemap::getChildren(0);
		$this->assertTrue(is_array($children));
		$this->assertEquals(7, count($children));
		$children = Sitemap::getChildren(1);
		$this->assertEquals(0, count($children));
		$children = Sitemap::getChildren(2);
		$this->assertTrue(is_array($children));
		$this->assertEquals(9, count($children));
	}

	public function testGetTreeViewData()
	{
		$data = Sitemap::getTreeViewData();
		$this->assertTrue(is_array($data));
		$this->assertEquals(7, count($data));
		$this->assertTrue(isset($data['HOME']));
		$this->assertTrue(isset($data['ABOUT']));
		$this->assertTrue(isset($data['NEWS']));
		$this->assertTrue(isset($data['SALES']));

		$home = $data['HOME'];
		$this->assertTrue(is_array($home));
		$this->assertEquals($home['text'], 'HOME');
		$this->assertEquals($home['expanded'], true);
		$this->assertEquals($home['classes'], 'important');
		$this->assertEquals(0, count($home['children']));

		$about = $data['ABOUT'];
		$this->assertTrue(is_array($about));
		$this->assertEquals($about['text'], 'ABOUT');
		$this->assertEquals($about['expanded'], true);
		$this->assertEquals($about['classes'], 'important');
		$this->assertTrue(is_array($about['children']));
		$this->assertEquals(9, count($about['children']));
	}

	public function testGetSubMenus()
	{
		$submenus = Sitemap::getSubMenus('about/index');
		$this->assertTrue(is_array($submenus));
		$this->assertEquals(9, count($submenus));

		$submenus = Sitemap::getSubMenus('about/management');
		$this->assertTrue(is_array($submenus));
		$this->assertEquals(9, count($submenus));

		$submenus = Sitemap::getSubMenus('product/index');
		$this->assertTrue(is_array($submenus));
		$this->assertEquals(2, count($submenus));

		$submenus = Sitemap::getSubMenus('sales/terminal');
		$this->assertTrue(is_array($submenus));
		$this->assertEquals(5, count($submenus));
	}
}
