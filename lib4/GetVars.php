<?php

/**
 * GetVars.php
 *
 * @package    MirageVC
 * @subpackage MirageVC4
 * @deprecated
 * @author     Patrick Barabe
 * @copyright  Copyright &copy; 2007 Patrick Barabe
 * @license    http://creativecommons.org/licenses/GPL/2.0/ GNU Public License
 *
 */


class GetVars extends HttpRequestVars {

    function GetVars() {
        $this->_request = $_GET ;
        $this->populate() ;
    }

}// end GetVars

?>
