<?php

namespace App\Providers;

use App\Models\Benefit;
use App\Models\Course;
use App\Nova\Metrics\UsersPerDay;
use DigitalCreative\CollapsibleResourceManager\CollapsibleResourceManager;
use DigitalCreative\CollapsibleResourceManager\Resources\InternalLink;
use DigitalCreative\CollapsibleResourceManager\Resources\TopLevelResource;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;


class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
            ->withAuthenticationRoutes()
            ->withPasswordResetRoutes()
            ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                'ilanvaldez34@gmail.com'
            ]);
        });
    }

    /**
     * Get the cards that should be displayed on the default Nova dashboard.
     *
     * @return array
     */
    protected function cards()
    {
        return [];
    }

    /**
     * Get the extra dashboards that should be displayed on the Nova dashboard.
     *
     * @return array
     */
    protected function dashboards()
    {
        

        return [
            
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
            new CollapsibleResourceManager([
                'navigation' => [
                    TopLevelResource::make([
                        'label' => 'Usuarios',
                        'expanded' => true,
                        'resources' => [
                            \App\Nova\User::class                            
                        ]                        
                    ]),
                    TopLevelResource::make([
                        'label' => 'Configuración',
                        'expanded' => false,
                        'resources' => [
                            \App\Nova\Config::class                          
                        ]                       
                    ]),
                    TopLevelResource::make([
                        'label' => 'CMS',
                        'expanded' => false,
                        'resources' => [
                            InternalLink::make([
                                'label' => 'Áreas de práctica',
                                'badge' => null,
                                'icon' => null,
                                'target' => '_self',
                                'path' => '/resources/areapracticas',
                                'params' => [ 'resourceId' => 1 ]
                            ]),
                            InternalLink::make([
                                'label' => 'Ártículos',
                                'badge' => null,
                                'icon' => null,
                                'target' => '_self',
                                'path' => '/resources/articulos',
                                'params' => [ 'resourceId' => 1 ]
                            ]),
                            \App\Nova\Banner::class,
                            // InternalLink::make([
                            //     'label' => 'Filtro',
                            //     'badge' => null,
                            //     'icon' => null,
                            //     'target' => '_self',
                            //     'path' => '/resources/filtros',
                            //     'params' => [ 'resourceId' => 1 ]
                            // ]),
                            InternalLink::make([
                                'label' => 'Cliente',
                                'badge' => null,
                                'icon' => null,
                                'target' => '_self',
                                'path' => '/resources/clientes',
                                'params' => [ 'resourceId' => 1 ]
                            ]),
                            InternalLink::make([
                                'label' => 'Honores',
                                'badge' => null,
                                'icon' => null,
                                'target' => '_self',
                                'path' => '/resources/honors',
                                'params' => [ 'resourceId' => 1 ]
                            ]),
                             \App\Nova\Libro::class,
                             \App\Nova\Nota::class,
                             \App\Nova\Nosotros::class,
                             InternalLink::make([
                                'label' => 'Categorías',
                                'badge' => null,
                                'icon' => null,
                                'target' => '_self',
                                'path' => '/resources/categorias',
                                'params' => [ 'resourceId' => 1 ]
                            ]),
                            InternalLink::make([
                                'label' => 'Subcategorías',
                                'badge' => null,
                                'icon' => null,
                                'target' => '_self',
                                'path' => '/resources/subcategorias',
                                'params' => [ 'resourceId' => 1 ]
                            ]),
                             \App\Nova\Tema::class,                              
                             \App\Nova\Enlace::class,                              
                             \App\Nova\Noticia::class,                              
                        ]                       
                    ]),
                    
                ]
            ])
        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
