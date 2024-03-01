<?php

class Admin_Controller_Account extends Core_Controller_Admin_Action
{
    protected $_allowActions = [
        "login",
    ] ;
    public function testAction() {
echo "protected";
    }
    public function loginAction()
    {
        var_dump(Admin_Model_User::USERNAME);
        // $username = $_POST
        // $password = $_POST

        // if(post data with model constant)
    }
}

?>