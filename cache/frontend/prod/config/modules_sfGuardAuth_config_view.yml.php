<?php
// auto-generated by sfViewConfigHandler
// date: 2013/04/29 19:06:01
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);

  $response->addStylesheet('main.css', '', array ());
  $response->addStylesheet('jquery-ui-1.8.13.custom.css', '', array ());
  $response->addJavascript('jquery-1.5.1.min.js', '', array ());
  $response->addJavascript('jquery-ui-1.8.13.custom.min.js', '', array ());
  $response->addJavascript('uidatepicker-fr.js', '', array ());


