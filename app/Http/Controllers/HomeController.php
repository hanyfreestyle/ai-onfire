<?php

namespace App\Http\Controllers;

use App\Helpers\MinifyTools;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\View;

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
        } else {
            $menu_lang = [
                'الرئيسية',
                'القائمة',
                'العروض',
                'من نحن',
                'أتصل بنا ',
            ];
        }


        return view('restaurant.header-menu')->with([
            'pageView' => $pageView,
            'minifyTools' => $minifyTools,
            'menu_lang' => $menu_lang,

        ]);
    }
}
