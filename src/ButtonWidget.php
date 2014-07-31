<?php
/**
 * @author Petr Grishin <petr.grishin@grishini.ru>
 */

namespace PetrGrishin\Button;


use PetrGrishin\Widget\BaseWidget;

class ButtonWidget extends BaseWidget {
    public $url;

    public function run() {
        $this->render('button', array(
            'url' => $this->url
        ));
    }
}
