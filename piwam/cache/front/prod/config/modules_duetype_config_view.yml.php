<?php
// auto-generated by sfViewConfigHandler
// date: 2011/12/16 21:51:21
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
  $response->addMeta('title', 'Piwam', false, false);
  $response->addMeta('description', 'Gestionnaire d&#039;association', false, false);
  $response->addMeta('language', 'fr', false, false);

  $response->addStylesheet('main.css', '', array ());
  $response->addStylesheet('menu.css', '', array ());
  $response->addStylesheet('pagination.css', '', array ());
  $response->addStylesheet('form.css', '', array ());
  $response->addStylesheet('table.css', '', array ());
  $response->addStylesheet('buttons.css', '', array ());
  $response->addStylesheet('overlay.css', '', array ());
  $response->addStylesheet('jquery-ui-1.7.1/smoothness/jquery-ui-1.7.1.custom.css', '', array ());
  $response->addJavascript('jquery-ui-1.7.1/js/jquery-1.3.2.min.js', '', array ());
  $response->addJavascript('jquery-ui-1.7.1/js/jquery-ui-1.7.2.custom.min.js', '', array ());
  $response->addJavascript('boxover/boxover.js', '', array ());
  $response->addJavascript('jquery-tools/jquery.tools.min.js', '', array ());


