<?php
/**
 * @author : rakheoana lefela
 * @date : 16th dec 2021
 * 
 * Front Controller/ hadles all the incoming requests to site
 */

namespace App\Controllers;
use \Core\View;
use  App\Models\Roles;
use  App\Models\NewsModel;
use  PHPMailer\PHPMailer\PHPMailer;
use  PHPMailer\PHPMailer\Exception;
 

class News extends \Core\Controller
{
 
    protected function before()
    {
        //echo "(before) ";
        //return false;
    }

    public function indexAction()
    {

        $newsletter = NewsModel::getAll();

        view::render('news/index.php', $newsletter, 'default');
    }

    public function detailsAction()
    {
        $data = getPostData();
        if(isset($data['id'])){
            $id = $data['id'];
            $news = NewsModel::getNewsById($id);
        }else{
            $news = array();
        }

        view::render('news/details.php', $news, 'default');
    }
    /**
     * After filter
     *
     * @return void
     */
    protected function after()
    {
        //echo " (after)";
    }

}