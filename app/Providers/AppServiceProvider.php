<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        \Filament\Support\Facades\FilamentView::registerRenderHook(
            \Filament\View\PanelsRenderHook::HEAD_END,
            function (): string {
                $breezyCss = '';
                $manifestPath = public_path('build/manifest.json');
                if (file_exists($manifestPath)) {
                    $manifest = json_decode(file_get_contents($manifestPath), true);
                    if (isset($manifest['resources/css/filament/admin/theme.css']['file'])) {
                        $cssPath = public_path('build/' . $manifest['resources/css/filament/admin/theme.css']['file']);
                        if (file_exists($cssPath)) {
                            $breezyCss = file_get_contents($cssPath);
                        }
                    }
                }

                $glassCss = \Illuminate\Support\Facades\Blade::render('
                <style>
                    /* Premium Glassmorphic Sidebar & Topbar */
                    .fi-sidebar, .fi-topbar {
                        background: rgba(255, 255, 255, 0.65) !important;
                        backdrop-filter: blur(24px) saturate(180%) !important;
                        -webkit-backdrop-filter: blur(24px) saturate(180%) !important;
                        transform: translateZ(0); /* Safari hardware acceleration fix */
                        -webkit-transform: translateZ(0);
                    }
                    .fi-sidebar {
                        border-right: 1px solid rgba(255, 255, 255, 0.8) !important;
                        box-shadow: 4px 0 30px rgba(0, 0, 0, 0.03) !important;
                    }
                    .fi-topbar {
                        border-bottom: 1px solid rgba(255, 255, 255, 0.8) !important;
                        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.02) !important;
                    }
                    .dark .fi-sidebar, .dark .fi-topbar {
                        background: rgba(15, 23, 42, 0.65) !important;
                        backdrop-filter: blur(24px) saturate(180%) !important;
                        -webkit-backdrop-filter: blur(24px) saturate(180%) !important;
                    }
                    .dark .fi-sidebar {
                        border-right: 1px solid rgba(255, 255, 255, 0.05) !important;
                        box-shadow: 4px 0 30px rgba(0, 0, 0, 0.2) !important;
                    }
                    .dark .fi-topbar {
                        border-bottom: 1px solid rgba(255, 255, 255, 0.05) !important;
                    }
                    /* Modern Panel Enhancements */
                    .fi-main {
                        background-color: #f8fafc !important;
                    }
                    .dark .fi-main {
                        background-color: #0f172a !important;
                    }
                    .fi-ta-record, .fi-wi-widget, .fi-fo-component-container {
                        box-shadow: 0 4px 20px -2px rgba(0,0,0,0.03) !important;
                        border-radius: 1rem !important;
                        border: 1px solid rgba(255,255,255,0.7) !important;
                        background: rgba(255,255,255,0.8) !important;
                    }
                    .dark .fi-ta-record, .dark .fi-wi-widget, .dark .fi-fo-component-container {
                        border: 1px solid rgba(255,255,255,0.05) !important;
                        background: rgba(30,41,59,0.5) !important;
                    }
                    
                    /* FIXED BREEZY SVG SIZES & SPACING (Ignored by Tailwind v4 parser) */
                    svg.w-4 { width: 1rem !important; }
                    svg.h-4 { height: 1rem !important; }
                    svg.w-5 { width: 1.25rem !important; }
                    svg.h-5 { height: 1.25rem !important; }
                    svg.w-6 { width: 1.5rem !important; }
                    svg.h-6 { height: 1.5rem !important; }
                    svg.w-8 { width: 2rem !important; }
                    svg.h-8 { height: 2rem !important; }
                    svg.mr-2 { margin-right: 0.5rem !important; }
                    
                    /* FIXED BREEZY SPACING */
                    .space-y-6 > :not([hidden]) ~ :not([hidden]) { margin-top: 1.5rem !important; margin-bottom: 0; }
                    .space-y-3 > :not([hidden]) ~ :not([hidden]) { margin-top: 0.75rem !important; margin-bottom: 0; }
                    .space-x-4 > :not([hidden]) ~ :not([hidden]) { margin-left: 1rem !important; margin-right: 0; }
                    .mt-2 { margin-top: 0.5rem !important; }
                    .mt-3 { margin-top: 0.75rem !important; }
                    .mt-5 { margin-top: 1.25rem !important; }
                    .mb-2 { margin-bottom: 0.5rem !important; }
                    .pt-6 { padding-top: 1.5rem !important; }
                    .pb-6 { padding-bottom: 1.5rem !important; }
                    .gap-2 { gap: 0.5rem !important; }
                    .text-right { text-align: right !important; }
                </style>
                ');

                return $glassCss . ($breezyCss ? "<style>{$breezyCss}</style>" : "");
            }
        );
    }
}
