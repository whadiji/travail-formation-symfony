<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'fos_js_routing.extractor' shared service.

include_once $this->targetDirs[3].'/vendor/friendsofsymfony/jsrouting-bundle/Extractor/ExposedRoutesExtractorInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/jsrouting-bundle/Extractor/ExposedRoutesExtractor.php';

return $this->services['fos_js_routing.extractor'] = new \FOS\JsRoutingBundle\Extractor\ExposedRoutesExtractor(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, array(0 => 'product_remove', 1 => 'product_index', 2 => 'product_index_json', 3 => 'product_show', 4 => 'product_edit'), $this->targetDirs[0], $this->parameters['kernel.bundles']);
