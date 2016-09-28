<?php
/**
 * Created by IntelliJ IDEA.
 * User: phamtrong
 * Date: 3/17/16
 * Time: 11:16
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Class Admin_layout
 * @property M_system_config m_system_config
 */
abstract class Guest_layout extends Base_guest_layout {

    protected $role_allow = 'guest';

    function __construct() {
        parent::__construct();
    }
}
