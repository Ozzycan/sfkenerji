<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = [
        'phone', 'email', 'address',
        'vision_title', 'vision_description',
        'facebook_link', 'instagram_link', 'linkedin_link',
        'metric_1_val', 'metric_1_lbl',
        'metric_2_val', 'metric_2_lbl',
        'metric_3_val', 'metric_3_lbl',
        'metric_4_val', 'metric_4_lbl',
        
        // New fields
        'hero_badge', 'hero_title', 'hero_description', 'hero_cta_1', 'hero_cta_2',
        'vision_badge', 'vision_quote',
        'about_features',
        'services_badge', 'services_title', 'services_description',
        'projects_badge', 'projects_title',
        'simulator_badge', 'simulator_title', 'simulator_description', 'simulator_info_1', 'simulator_info_2', 'simulator_trees_text',
        'packages_badge', 'packages_title', 'packages_description',
        'partners',
        'privacy_policy', 'kvkk_text'
    ];

    protected $casts = [
        'about_features' => 'array',
        'partners' => 'array',
    ];
}
