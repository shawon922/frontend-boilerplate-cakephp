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
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Routing\Router;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    protected $authUser;

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->viewBuilder()->setLayout('default');

        $this->loadComponent('Cookie', [
            'path' => '/',
            'expires' => '+07 days',
            'httpOnly' => true
        ]);
        
        $loginRedirect = [
            'controller' => 'pc/admin',
            'action' => 'login',
            'prefix' => false
        ];

        $logoutRedirect = [
            'controller' => 'pc/admin',
            'action' => 'login',
            'prefix' => false
        ];

        $loginAction = [
            'controller' => 'pc/admin',
            'action' => 'login',
            'prefix' => false
        ];
        $urlPrefix = 'pc';
        if (preg_match('/^pc\//', $this->request->getParam('prefix')) || preg_match('/^Pc\//', $this->request->getParam('prefix'))) {        
            $this->viewBuilder()->setLayout('default');
            $matchedRoute = $this->request->getParam('_matchedRoute');  
        }
        
        $this->loadComponent('Auth', [
            'loginRedirect' => $loginRedirect,
            'logoutRedirect' => $logoutRedirect,
            'loginAction' => $loginAction,
            'unauthorizedRedirect ' => true,
            'authError' => false,
            'storage' => 'Session',
        ]);

        $baseUrl = Router::url('/', true); 
        $apiBaseUrl = env('API_BASE_URL'); 

        $this->set(compact('baseUrl', 'apiBaseUrl'));
    }
}
