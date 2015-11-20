<?php
namespace PhBergsmann\IfModifiedSince\Tests\Hooks;

use PhBergsmann\IfModifiedSince\Hooks\PageLoadedFromCacheHook;
use TYPO3\CMS\Core\Tests\UnitTestCase;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class PageLoadedFromCacheHookTest extends UnitTestCase {
	/** @test */
	public function ifIfModifiedSinceIsNotSetReturn()
	{
		$pageLoadedFromCacheHook = GeneralUtility::makeInstance(PageLoadedFromCacheHook::class);

		$_SERVER['HTTP_IF_MODIFIED_SINCE'] = null;

		$this->assertEmpty($pageLoadedFromCacheHook->returnHeaderIfModifiedSince(array(), new \stdClass()));
	}

	/** @test */
	public function ifIfModifiedSinceIsAStringReturn()
	{
		$pageLoadedFromCacheHook = GeneralUtility::makeInstance(PageLoadedFromCacheHook::class);

		$_SERVER['HTTP_IF_MODIFIED_SINCE'] = 'trallala';

		$this->assertEmpty($pageLoadedFromCacheHook->returnHeaderIfModifiedSince(array(), new \stdClass()));
	}

	/** @test */
	public function ifSysLastChangedIsAStringReturn()
	{
		$pObj = new \stdClass();
		$pObj->register = array('SYS_LASTCHANGED' => 'asdasd');

		$pageLoadedFromCacheHook = GeneralUtility::makeInstance(PageLoadedFromCacheHook::class);

		$_SERVER['HTTP_IF_MODIFIED_SINCE'] = 'Sat, 29 Oct 1994 19:43:31 GMT';

		$this->assertEmpty($pageLoadedFromCacheHook->returnHeaderIfModifiedSince(array(), new \stdClass()));
	}
}
?>
