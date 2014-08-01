<?php
/**
 * @var \PetrGrishin\View\View $this
 * @author Petr Grishin <petr.grishin@grishini.ru>
 */
use PetrGrishin\HtmlTag\HtmlTag;

HtmlTag::create('button')
    ->attr('id', $containerId = $this->getUniqueIdentifier('container'))
    ->setContent($this->getParam('title'))
    ->run();

$this->setJsParams(array(
    'containerId' => $containerId,
    'url' => $this->getParam('url'),
));