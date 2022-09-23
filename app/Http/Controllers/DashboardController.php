<?php

namespace App\Http\Controllers;

use App\Http\Controllers\admin\ArticlesPanel;
use App\Http\Controllers\admin\AuthorPanel;
use App\Http\Controllers\admin\CommentPanel;
use Illuminate\Http\Request;
use App\Http\Controllers\Repository\Userdetails;
use App\User;
class DashboardController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth')->except('userdetails');
    }
    
    public function index()
    {   $appr_com = CommentPanel::CountNo(1)->count();
        $rec_com = CommentPanel::CountNo(1)->take(8);
        $unppr_com = CommentPanel::CountNo(0)->count();
        $unppr_art = ArticlesPanel::CountNo(0)->count();
        $appr_art = ArticlesPanel::CountNo(1)->count();
        $rec_art = ArticlesPanel::CountNo(1)->take(8);
        $auts = AuthorPanel::CountNo()->count();
        $auts_mail= AuthorPanel::CountMail()->count();
       return view('admin.dashboard.home',compact('auts','auts_mail','appr_com','rec_com','unppr_com','appr_art','rec_art'
    ,'unppr_art'));
    }

    public function userdetails($data)
    {  $user= Userdetails::details();
        if ($author = (new User)->author($user,$data)) {
            $page = "author" . ' ' . "/" . ' ' . $author->username;
            // $post=  $author->articles->take(8);
            return view('articles.pages.author',compact('author','page'));            
        }
        return abort(404);
    }

}
