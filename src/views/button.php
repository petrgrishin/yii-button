<?php
/**
 * @var \PetrGrishin\View\View $this
 * @author Petr Grishin <petr.grishin@grishini.ru>
 */
use PetrGrishin\HtmlTag\HtmlTag;

$button = HtmlTag::create('button')
    ->setAttr('id', $containerId = $this->getUniqueIdentifier('container'))
    ->addClass('btn')
    ->setContent($this->getParam('title'));

if ($type = $this->getParam('type', false)) {
    $button->addClass(sprintf('btn-%s', $type));
}

$button->run();

$this->widget(\PetrGrishin\LoaderAction\LoaderActionWidget::className(), 'action', array(
    'url' => $this->getParam('url'),
))->run();

$this->setJsParams(array(
    'containerId' => $containerId,
    'url' => $this->getParam('url'),
));