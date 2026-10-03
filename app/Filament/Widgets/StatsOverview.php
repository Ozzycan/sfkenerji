<?php

namespace App\Filament\Widgets;

use App\Models\EnergyPackage;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Sistem Paketleri', EnergyPackage::count())
                ->description('Aktif olarak listelenen GES ve enerji paketleri')
                ->descriptionIcon('heroicon-m-rectangle-stack')
                ->chart([3, 5, 4, 6, 8, EnergyPackage::count()])
                ->color('primary'),

            Stat::make('Kurulu Güç Kapasitesi', '15.4 MWp')
                ->description('Toplam tamamlanan projelerdeki aktif güç')
                ->descriptionIcon('heroicon-m-bolt')
                ->chart([10, 12, 11, 13, 14, 15])
                ->color('success'),

            Stat::make('Toplam Projeler', '450+')
                ->description('Sürdürülebilir enerji projelerimizin toplamı')
                ->descriptionIcon('heroicon-m-globe-alt')
                ->chart([380, 400, 410, 425, 435, 450])
                ->color('info'),

            Stat::make('Sistem Yöneticileri', User::count())
                ->description('Yönetim paneline erişimi olan kullanıcılar')
                ->descriptionIcon('heroicon-m-users')
                ->color('warning'),
        ];
    }
}
