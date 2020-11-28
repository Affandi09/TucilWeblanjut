<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
 
class Dashboard extends Controller
{
    
    
    public function index()
    {
        $session = session();
        return view('admin/admin_layout');
        
    }

 

    public function contact()
    {
        $session = session();
        return view('about/view_dashboard');
        
    }
    
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }

}