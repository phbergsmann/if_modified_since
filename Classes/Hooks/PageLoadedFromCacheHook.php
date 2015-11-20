<?php
namespace PhBergsmann\IfModifiedSince\Hooks;

class PageLoadedFromCacheHook
{
	/**
	 * @param array $params
	 * @param \TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController $pObject
	 */
	public function returnHeaderIfModifiedSince($params, $pObject)
	{
		if (($header = $_SERVER['HTTP_IF_MODIFIED_SINCE']) == null) {
			return;
		}

		try {
			$ifModifiedSince = new \DateTimeImmutable($header);
			$lastChanged = new \DateTimeImmutable('@' . $params['pObj']->register['SYS_LASTCHANGED']);
		} catch(\Exception $e) {
			return;
		}

		if ($ifModifiedSince < $lastChanged) {
			return;
		}

		header("HTTP/1.0 304 Not Modified");
		die();
	}
}
?>
