<?php

/**
 * Slim Twig Asset Extension
 */

namespace Twig\Extension;

use Symfony\Component\Asset\Packages;

/**
 * Class Asset
 * @package Twig\Extension
 */
class Asset extends \Twig_Extension {
	protected $packages;
	
	/**
	 * Asset constructor.
	 *
	 * @param Packages $packages
	 */
	public function __construct(Packages $packages) {
		$this->packages = $packages;
	}
	
	/**
	 * @return array
	 */
	public function getFunctions() {
		return [
			new \Twig_SimpleFunction('asset', [$this, 'getAssetUrl']),
		];
	}
	
	/**
	 * @param string $path
	 * @param null|string $packageName
	 *
	 * @return string
	 */
	public function getAssetUrl($path, $packageName = null) {
		return $this->packages->getUrl($path, $packageName);
	}
	
	/**
	 * @return string
	 */
	public function getName() {
		return 'asset';
	}
}
