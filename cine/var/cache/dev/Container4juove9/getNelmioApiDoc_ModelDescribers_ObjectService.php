<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_api_doc.model_describers.object' shared service.

return $this->services['nelmio_api_doc.model_describers.object'] = new \Nelmio\ApiDocBundle\ModelDescriber\ObjectModelDescriber(${($_ = isset($this->services['property_info']) ? $this->services['property_info'] : $this->load(__DIR__.'/getPropertyInfoService.php')) && false ?: '_'}, ${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'});