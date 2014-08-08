<?php
/**
 * @author Petr Grishin <petr.grishin@grishini.ru>
 */

namespace PetrGrishin\Button;


use PetrGrishin\Button\Exception\ButtonWidgetException;
use PetrGrishin\Widget\BaseWidget;

class ButtonWidget extends BaseWidget {
    const TYPE_DEFAULT = 'default';
    const TYPE_PRIMARY = 'primary';
    const TYPE_SUCCESS = 'success';
    const TYPE_INFO = 'info';
    const TYPE_WARNING = 'warning';
    const TYPE_DANGER = 'danger';
    const TYPE_LINK = 'link';

    /** @var string */
    private $title;
    /** @var string */
    private $url;
    /** @var string */
    private $type;

    private static $types = array(
        self::TYPE_DEFAULT,
        self::TYPE_PRIMARY,
        self::TYPE_SUCCESS,
        self::TYPE_INFO,
        self::TYPE_WARNING,
        self::TYPE_DANGER,
        self::TYPE_LINK,
    );

    public function run() {
        $this->render('button', array(
            'title' => $this->getTitle(),
            'url' => $this->getUrl(),
            'type' => $this->getType(),
        ));
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    public function getUrl() {
        return $this->url;
    }

    public function setUrl($url) {
        $this->url = $url;
        return $this;
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        if (false === array_search($type, self::$types)) {
            throw new ButtonWidgetException(sprintf('Type `%s` is illegal', $type));
        }
        $this->type = $type;
        return $this;
    }
}
