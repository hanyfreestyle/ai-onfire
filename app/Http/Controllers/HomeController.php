<?php

namespace App\Http\Controllers;

use App\Helpers\MinifyTools;
use App\Models\admin\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller {
    //

    public function HomePage(Request $request) {
        $pageView = null;

        $this->cssMinifyType = "Seo"; # Web , WebMini , Seo
        View::share('cssMinifyType', $this->cssMinifyType);

        $this->jsMinifyType = "SeoWeb"; # Web , WebMini , Seo ,SeoWeb
        View::share('jsMinifyType', $this->jsMinifyType);

        $this->cssReBuild = true;
        View::share('cssReBuild', $this->cssReBuild);

        $minifyTools = new MinifyTools();

        $this->theme = session('theme', 'light');
        View::share("theme", $this->theme);

        if (\Illuminate\Support\Facades\Route::currentRouteName() == 'home_ar') {
            $menu_lang = [
                'Home',
                'Menu',
                'Offers',
                'About us',
                'Contact us',
            ];
            $langFiter = "ar";
        } else {
            $menu_lang = [
                'الرئيسية',
                'القائمة',
                'العروض',
                'من نحن',
                'أتصل بنا ',
            ];
            $langFiter = "ar";
        }

        $categoriesWithProducts = DB::table('categories')
            ->join('category_translations', 'categories.id', '=', 'category_translations.category_id')
            ->join('category_product', 'categories.id', '=', 'category_product.category_id')
            ->join('products', 'category_product.product_id', '=', 'products.id')
            ->join('product_translations', 'products.id', '=', 'product_translations.product_id')
            ->where('category_translations.locale', $langFiter)
            ->where('product_translations.locale', $langFiter)
            ->select(
                'categories.id as category_id',
                'category_translations.name as category_name',
                'category_translations.des as category_des',
                'products.id as product_id',
                'product_translations.name as product_name',
                'product_translations.des as product_des',
                'products.photo as product_image',
                'products.price as product_price',
                'products.sale_price as sale_price'
            )
            ->orderBy('categories.id')
            ->get()
            ->groupBy('category_id'); // تجميع المنتجات تحت معرف المجموعة


        return view('restaurant.header-menu')->with([
            'pageView' => $pageView,
            'minifyTools' => $minifyTools,
            'menu_lang' => $menu_lang,
            'categoriesWithProducts' => $categoriesWithProducts,

        ]);
    }
}
