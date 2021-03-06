<?php
// No direct access
defined('_EXE') or die('Restricted access');

/**
 * User account managment Controller
 */
class accountController extends Controller
{
    /**
     * Init
     */
    public function init()
    {
        $user = Registry::getUser();

        // User must be logged
        if (!$user->id) {
            Url::redirect(Url::site("login"));
        }
    }

    /**
     * Default view
     */
    public function index()
    {
        // Load Edit form view
        $this->edit();
    }

    /**
     * Edit form view
     */
    public function edit()
    {
        // Load View to Template var
        $html = $this->view("views.edit");

        // Render the Template
        $this->render($html);
    }

    /**
     * Save action
     */
    public function save()
    {
        $user = Registry::getUser();

        // Prevent role escalation
        $_REQUEST['roleId'] = $user->roleId;

        // Prevent status change
        $_REQUEST['statusId'] = $user->statusId;

        // Update User
        if ($user->update($_REQUEST)) {
            // Add success message
            Registry::addMessage(Language::translate("CTRL_ACCOUNT_UPDATED_OK"), "success", "", Url::site());
        }

        // Show ajax JSON response
        $this->ajax();
    }
}
