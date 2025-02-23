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

    public function category(Category $category)
    {
        $category->load('news');
        $categories = Category::orderBy('name')->get();

        $bannerads = BannerAdvertisement::where('is_active', 'active')->where('type', 'banner')->inRandomOrder()->take(1)->get();

        return view('front.category', compact('category', 'categories', 'bannerads'));
    }

    public function author(Author $author)
    {
        $author->load('news');
        $categories = Category::orderBy('name')->get();


        $bannerads = BannerAdvertisement::where('is_active', 'active')->where('type', 'banner')->inRandomOrder()->take(1)->get();

        return view('front.author', compact('author', 'categories', 'bannerads'));
    }

    public function details(ArticleNews $article_news)
    {
        $article_news->load('category', 'author');
        $categories = Category::orderBy('name')->get();


        $bannerads = BannerAdvertisement::where('is_active', 'active')->where('type', 'banner')->inRandomOrder()->take(1)->get();
        $bannerads_square = BannerAdvertisement::where('is_active', 'active')->where('type', 'square')->inRandomOrder()->take(1)->get();

        $randomNews = ArticleNews::with('category')->inRandomOrder()->take(3)->get();

        return view('front.show', compact('article_news', 'categories', 'randomNews', 'bannerads', 'bannerads_square'));
    }

    public function search(Request $request)
    {
        $request->validate(['keyword' => 'required|string|max:255']);

        $categories = Category::orderBy('name')->get();

        $keyword = $request->keyword;

        $articles = ArticleNews::with('category', 'author')->where('name', 'like', '%' . $keyword . '%')->get();

        return view('front.search', compact('categories', 'keyword', 'articles'));
    }
}
