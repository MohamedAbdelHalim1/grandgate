<?php

namespace App\Http\Controllers;


use App\Models\Blog;
use App\Models\Project;
use App\Models\Category;
use App\Models\Accessory;
use Illuminate\Http\Request;
use App\Models\ContactRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\IpUtils;
use App\Models\SeoMeta;
use Illuminate\Support\Facades\Response;

class HomeController extends Controller
{

    public function change_lang($lang)
    {
        Session::put('lang',$lang);

        if ($lang == "ar")
            return redirect(str_replace('en','ar',url()->previous()));

        return redirect(str_replace('ar','en',url()->previous()));
    }


    public function index($lang)
    {
        if($lang=="admin")
        {
            return redirect()->route('admin.dashboard');
        }

        $footer = Project::orderBy('order', 'ASC')->limit(3)->get();
        $categories = Category::orderBy('order', 'ASC')->limit(6)->get();
        $blogs = Blog::where('selected',1)->limit(6)->get();
         // Fetch SEO meta data
         $seoMeta = SeoMeta::where('page', 'index')->first();

        if($lang=="ar"){            
            $seoMeta = SeoMeta::where('page', 'indexAr')->first();
            return view('frontend.indexAr',compact('footer','blogs','lang','categories','seoMeta'));
        }
        return view('frontend.index',compact('footer','blogs','lang','categories','seoMeta'));
    }
    public function about($lang)
    {

        $footer = Project::orderBy('order', 'ASC')->limit(3)->get();
        // Fetch SEO meta data
        $seoMeta = SeoMeta::where('page', 'about')->first();

        if($lang=="ar"){
            // Fetch SEO meta data
            $seoMeta = SeoMeta::where('page', 'aboutAr')->first();
            return view('frontend.aboutAr',compact('footer','lang','seoMeta'));
        }
        return view('frontend.about',compact('footer','lang','seoMeta'));
    }
    public function contact($lang)
    {

        $footer = Project::orderBy('order', 'ASC')->limit(3)->get();
        // Fetch SEO meta data
        $seoMeta = SeoMeta::where('page', 'contact')->first();
        if($lang=="ar"){
            // Fetch SEO meta data
            $seoMeta = SeoMeta::where('page', 'contactAr')->first();
            return view('frontend.contactAr',compact('footer','lang','seoMeta'));
        }
        return view('frontend.contact',compact('footer','lang','seoMeta'));
    }
    public function blog($lang)
    {

        $posts = Blog::orderBy('order','ASC')->get();
        $footer = Project::orderBy('order', 'ASC')->limit(3)->get();
        // Fetch SEO meta data
        $seoMeta = SeoMeta::where('page', 'blog')->first();
        if($lang=="ar"){            
            $seoMeta = SeoMeta::where('page', 'blogAr')->first();
            return view('frontend.blogAr',compact('posts','footer','lang','seoMeta'));
        }
        return view('frontend.blog',compact('posts','footer','lang','seoMeta'));
    }
    public function accessories($lang)
    {

        $accessories = Accessory::orderBy('order','ASC')->orderBy('created_at','DESC')->get();
        $footer = Project::orderBy('order', 'ASC')->limit(3)->get();
        // Fetch SEO meta data
        $seoMeta = SeoMeta::where('page', 'accessories')->first();
        if($lang=="ar"){            
            $seoMeta = SeoMeta::where('page', 'accessoriesAr')->first();
            return view('frontend.accessoriesAr',compact('accessories','footer','lang','seoMeta'));
        }
        return view('frontend.accessories',compact('footer','accessories','lang','seoMeta'));
    }
    public function accessory($lang,$id)
    {

        $accessory = Accessory::where('slug',$id)->orWhere('slug_ar',$id)->first();
        if($accessory)
        {
            // Fetch SEO meta data
        $seoMeta = SeoMeta::where('page', 'accessories_details')->first();
            $footer = Project::orderBy('order', 'ASC')->limit(3)->get();
            if($lang=="ar"){
                $seoMeta = SeoMeta::where('page', 'accessories-detailsAr')->first();
                return view('frontend.accessories-detailsAr',compact('accessory','footer','lang','seoMeta'));
            }
            return view('frontend.accessories_details',compact('accessory','footer','lang','seoMeta'));
        }

        return redirect('/');
    }

    public function blog_details($lang="en" , $id)
    {

        $post = Blog::where('id',$id)->first();
        if($post)
        {
            $seoMeta = SeoMeta::where('page', 'blog-details')->first();

            $footer = Project::orderBy('order', 'ASC')->limit(3)->get();
            if($lang=="ar"){
                $seoMeta = SeoMeta::where('page', 'blog-detailsAr')->first();
                return view('frontend.blog-detailsAr',compact('post','footer','lang','seoMeta'));
            }
            return view('frontend.blog-details',compact('post','footer','lang','seoMeta'));
        }

        return redirect('/');
    }


    public function categories($lang)
    {

        $categories = Category::orderBy('order','ASC')->orderBy('created_at','DESC')->get();
        $footer = Project::orderBy('order', 'ASC')->limit(3)->get();
        $seoMeta = SeoMeta::where('page', 'products')->first();
        if($lang=="ar"){
            $seoMeta = SeoMeta::where('page', 'productsAr')->first();
            return view('frontend.productsAr',compact('categories','footer','lang','seoMeta'));
        }
        return view('frontend.products',compact('categories','footer','lang','seoMeta'));
    }

    public function category($lang,$id)
    {

        $category = Category::where('slug',$id)->orWhere('slug_ar',$id)->first();
        if($category)
        {
            $seoMeta = SeoMeta::where('page', 'product-details')->first();
            $footer = Project::orderBy('order', 'ASC')->limit(3)->get();
            if($lang=="ar"){
                $seoMeta = SeoMeta::where('page', 'product-detailsAr')->first();
                return view('frontend.product-detailsAr',compact('category','footer','lang','seoMeta'));
            }
            return view('frontend.product-details',compact('category','footer','lang','seoMeta'));
        }

        return redirect('/');
    }

    public function projects($lang)
    {

        $projects = Project::orderBy('order','ASC')->get();
        $footer = Project::orderBy('order', 'ASC')->limit(3)->get();
        $seoMeta = SeoMeta::where('page', 'projects')->first();
        if($lang=="ar"){
            $seoMeta = SeoMeta::where('page', 'projectsAr')->first();
            return view('frontend.projectsAr',compact('projects','footer','lang','seoMeta'));
        }
        return view('frontend.projects',compact('projects','footer','lang','seoMeta'));
    }

    public function project($lang,$id)
    {

        $project = Project::where('slug',$id)->orWhere('slug_ar',$id)->first();

        if($project)
        {
            $seoMeta = SeoMeta::where('page', 'project-details')->first();
            $footer = Project::orderBy('order', 'ASC')->limit(3)->get();
            if($lang=="ar"){
                $seoMeta = SeoMeta::where('page', 'project-detailsAr')->first();
                return view('frontend.project-detailsAr',compact('project','footer','lang','seoMeta'));
            }
            return view('frontend.project-details',compact('project','footer','lang','seoMeta'));
        }


        return redirect('/');
    }

    public function contact_post(Request $request)
    {
        $recaptcha_response = $request->input('g-recaptcha-response');

        if (is_null($recaptcha_response)) {
            return redirect()->back()->with('error', 'Please Complete the Recaptcha to proceed');
        }

        $url = "https://www.google.com/recaptcha/api/siteverify";

        $body = [
            'secret' => config('services.recaptcha.secret'),
            'response' => $recaptcha_response,
            'remoteip' => IpUtils::anonymize($request->ip()) //anonymize the ip to be GDPR compliant. Otherwise just pass the default ip address
        ];

        $response = Http::asForm()->post($url, $body);

        $result = json_decode($response);

        if ($response->successful() && $result->success == true) {
            
            $contact = new ContactRequest();
            $contact->phone =  $request->phone?:'N/A';
            $contact->subject =  $request->subject?:'N/A';
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->inquiry = $request->message;

            if($contact->save()){
                $data = $contact->toArray();
                Mail::send("backend.contact.view", $data , function ($message){
                    $message->to('info@grandgate-doors.com');
                    $message->subject('New Contact Request');
                });
                Mail::send("backend.contact.view", $data , function ($message){
                    $message->to('grandgatedoor@gmail.com');
                    $message->subject('New Contact Request');
                });
                return back()->with('success','Message Sent Successfully');
            }
        } else {
            
            return back()->with('error','Please Complete the Recaptcha Again to proceed');
        }
        return back()->with('error','Something Went Wrong');
        

        
    }
}
