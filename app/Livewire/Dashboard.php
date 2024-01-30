<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Dashboard extends Component
{
    public function getStats(): array
    {
        return [
            'users' => [
                'count' => 1,
                'subtitle' => 'Total amount of tickets',
                'title' => 'Users',
            ],
            'posts' => [
                'count' => 2,
                'subtitle' => 'Open tickets',
                'title' => 'Posts',
            ],
            'comments' => [
                'count' => 3,
                'subtitle' => 'comments',
                'title' => 'Comments',
            ],
        ];
    }

    public function render(): View
    {
        return view('livewire.dashboard');
    }
}
