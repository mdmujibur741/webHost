<?php

namespace App\Http\Middleware;

use App\Http\Resources\SettingResource;
use App\Models\HostCategory;
use App\Models\Page;
use App\Models\Setting;
use Illuminate\Http\Request;
use Inertia\Middleware;
use Tightenco\Ziggy\Ziggy;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     */
    public function version(Request $request): string|null
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        
        return array_merge(parent::share($request), [
            'auth' => [
                'user' => $request->user(),
            ],
            'Setting' => [
                'setting' => Setting::first(),
           ],
           'Category' => [
            'category' =>  HostCategory::where('home_show', 1)->select('slug','image')->orderBy('priority', 'asc')->take(12)->get(),
       ],  'Pages' => [
          'page' =>  Page::where('status', 1)->select('slug')->orderBy('priority', 'asc')->take(5)->get(),
   ],
            'ziggy' => function () use ($request) {
                return array_merge((new Ziggy)->toArray(), [
                    'location' => $request->url(),
                ]);
            },
        ]);
    }
}
