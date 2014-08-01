<?php
/**
 * @author Petr Grishin <petr.grishin@grishini.ru>
 */

namespace PetrGrishin\Button;


use PetrGrishin\Widget\BaseWidget;

class ButtonWidget extends BaseWidget {
    public $title;
    public $url;

    public function run() {
        $this->render('button', array(
            'title' => $this->title,
            'url' => $this->url
        ));
    }
}
