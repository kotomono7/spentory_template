<?php
App::uses('AppHelper', 'View/AppHelper');

class ScarletHelper extends AppHelper {

    public $helpers = array('Html');

    public function link($title = null, $url = null, $options = array()) {

        if ($title == null || $url == null) {
            return;
        }

        $class = (($this->params['controller']===$url['controller']) && ($this->params['action']==$url['action']) )?'active' :'';

        echo "<li class='" . $class . "'>" . $this->Html->link($title, $url, $options) . "</li>";
    }

}