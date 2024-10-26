<?php

namespace App\Http\Controllers;

use App\Helpers\MinifyTools;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller {
    //

    public function HomePage() {
        $pageView = null;

        $this->cssMinifyType = "Seo" ; # Web , WebMini , Seo
        View::share('cssMinifyType', $this->cssMinifyType);

        $this->jsMinifyType = "SeoWeb" ; # Web , WebMini , Seo ,SeoWeb
        View::share('jsMinifyType', $this->jsMinifyType);

        $this->cssReBuild = true ;
        View::share('cssReBuild', $this->cssReBuild);

        $minifyTools = new MinifyTools();

        return view('restaurant.header-menu')->with([
            'pageView' => $pageView,
            'minifyTools' => $minifyTools,

        ]);
    }
}
