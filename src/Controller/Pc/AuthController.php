<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller\Pc;

use App\Controller\AppController;
use Cake\Core\Exception\Exception;
use Cake\Http\Exception\MethodNotAllowedException;
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;
use Cake\Event\Event;
use Cake\Utility\Security;
use Cake\Validation\Validator;
use PHPMailer\PHPMailer\PHPMailer;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Routing\Router;

/**
 * Login Controller handles all login
 *
 * @package    API
 * @subpackage Auth
 */
class AuthController extends AppController
{
  /**
   * Initialize
   *
   * @author Md Mahfuzur Rahman
   * @method
   * @param
   * @header
   * @return
   * @redirect
   * @throws
   * @access
   * @static
   * @since 11/26/2018
   */
  public function initialize()
  {
    parent::initialize();
    $this->Auth->allow(['login', 'logout', 'remindPassword', 'updatePassword']);
    $this->viewBuilder()->setLayout('default');
  }

  /**
   *
   *
   * @author Md Mahfuzur Rahman
   * @method
   * @param
   * @header
   * @return
   * @redirect
   * @throws
   * @access
   * @static
   * @since 11/26/2018
   */
  public function beforeRender(Event $event)
  {
    parent::beforeRender($event);
  }

  /**
   * Login by email
   *
   * @author Md Mahfuzur Rahman
   * @method POST
   * @header
   * @return
   * @redirect
   * @throws
   * @access
   * @static
   * @since 06/26/2019
   */
  public function login()
  {
    try {
      $redirectUrl = $this->Auth->redirectUrl();
      
      if ($this->Auth->user()) { 
        $this->Cookie->write('auth_user', $this->Auth->user());
        return $this->redirect($redirectUrl);
      } else if ($this->Cookie->read('auth_user')) {
        $this->Auth->setUser($this->Cookie->read('auth_user'));
        return $this->redirect($redirectUrl);
      }

      if ($this->request->is('post')) {
        $this->Cookie->write('auth_user', $this->request->getData());
        $this->Auth->setUser($this->request->getData());
      }
    } catch (Exception $e) {

    }
    
  }

  /**
   * Password reset by email
   *
   * @author Md Mahfuzur Rahman
   * @method GET/POST
   * @header
   * @return
   * @redirect
   * @throws
   * @access
   * @static
   * @since 06/26/2019
   */
  public function remindPassword()
  {
    try {
      
    } catch (Exception $e) {
      
    }
    
  }

  /**
   * Password reset by email
   *
   * @author Md Mahfuzur Rahman
   * @method GET/POST
   * @header
   * @return
   * @redirect
   * @throws
   * @access
   * @static
   * @since 06/26/2019
   */
  public function updatePassword($token = null)
  {
    try {
      
    } catch (Exception $e) {
      
    }
    
    $this->set(['token' => $token]);
  }

  /**
   * Logout
   *
   * @author Md Mahfuzur Rahman
   * @method GET
   * @header
   * @return
   * @redirect
   * @throws
   * @access
   * @static
   * @since 11/26/2018
   */
  public function logout()
  {
    $this->Cookie->delete('auth_user');
    return $this->redirect($this->Auth->logout());
  }
}