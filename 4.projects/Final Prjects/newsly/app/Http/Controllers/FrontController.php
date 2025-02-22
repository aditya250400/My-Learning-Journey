<?php

namespace App\Http\Controllers;

use App\Models\ArticleNews;
use App\Models\Author;
use App\Models\BannerAdvertisement;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('name')->get();

        $articles = ArticleNews::with('category')
            ->where('is_featured', 'not_featured')
            ->latest()->take(3)->get();


        $featured_articles = ArticleNews::with('category')
            ->where('is_featured', 'featured')
            ->inRandomOrder()->take(3)->get();

        $authors = Author::with('news')->orderBy('name')->take(6)->get();

        $bannerads = BannerAdvertisement::where('is_active', 'active')->where('type', 'banner')->inRandomOrder()->take(1)->get();

        $entertainment_articles = ArticleNews::whereHas('category', function ($query) {
            $query->where('name', 'Entertainment');
        })->where('is_featured', 'not_featured')->latest()->take(6)->get();

        $entertainment_featured_articles = ArticleNews::whereHas('category', function ($query) {
            $query->where('name', 'Entertainment');
        })->where('is_featured', 'featured')->inRandomOrder()->first();

        $business_articles = ArticleNews::whereHas('category', function ($query) {
            $query->where('name', 'Business');
        })->where('is_featured', 'not_featured')->latest()->take(6)->get();

        $business_featured_articles = ArticleNews::whereHas('category', function ($query) {
            $query->where('name', 'Business');
        })->where('is_featured', 'featured')->inRandomOrder()->first();

        $automotive_articles = ArticleNews::whereHas('category', function ($query) {
            $query->where('name', 'Automotive');
        })->where('is_featured', 'not_featured')->latest()->take(6)->get();

        $automotive_featured_articles = ArticleNews::whereHas('category', function ($query) {
            $query->where('name', 'Automotive');
        })->where('is_featured', 'featured')->inRandomOrder()->first();


        return view('front.index', compact('automotive_articles', 'automotive_featured_articles', 'business_articles', 'business_featured_articles', 'entertainment_featured_articles', 'categories', 'articles', 'authors', 'featured_articles', 'bannerads', 'entertainment_articles'));
    }
}
