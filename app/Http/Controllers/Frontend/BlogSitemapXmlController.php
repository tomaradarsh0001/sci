<?php
namespace App\Http\Controllers\Frontend;

use File;
use Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\Models\Blog;
class BlogSitemapXmlController extends Controller
{
    public function sitemap() {
         return response()->view('frontend.blogpages.sitemap')->header('Content-Type', 'text/xml');
      }
}