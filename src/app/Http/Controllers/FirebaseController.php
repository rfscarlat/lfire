<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
 
class FirebaseController extends Controller
{
    public function index()
    {
        $firebase = (new Factory)
            ->withServiceAccount(__DIR__.'/laravel-firebase-demo-db455-firebase-adminsdk-m0l68-e5255a3c1c.json')
            ->withDatabaseUri('https://laravel-firebase-demo-db455-default-rtdb.firebaseio.com');
 
        $database = $firebase->createDatabase();
 
        $blog = $database
        ->getReference('blog');
 
        echo '<pre>';
        print_r($blog->getvalue());
        echo '</pre>';
    }
}