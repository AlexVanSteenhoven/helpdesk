<?php

namespace App\Filament\Pages;

use App\Enums\TicketStatusEnum;
use App\Models\Ticket;
use Illuminate\Support\Collection;
use Mokhosh\FilamentKanban\Pages\KanbanBoard;

class TicketsKanbanBoard extends KanbanBoard
{

    protected ?string $maxContentWidth = 'max-w-full';

    protected function statuses(): Collection
    {
         $cases = TicketStatusEnum::cases();
         $statuses = [];

         foreach ($cases as $case) {

             if ($case->value == 'not_started' || $case->value == 'assigned' || $case->value == 'in_progress' || $case->value == 'closed') {
                 $statuses[] = [
                     'id' => $case->value,
                     'title' => $case->name(),
                 ];
             }
         }

         return collect($statuses);
    }

    protected function records(): Collection
    {
        return Ticket::all();
    }

    public function onStatusChanged(int $recordId, string $status, array $fromOrderedIds, array $toOrderedIds): void
    {
         Ticket::find($recordId)->update(['status' => $status]);
         Ticket::setNewOrder($toOrderedIds);

    }

    public function onSortChanged(int $recordId, string $status, array $orderedIds): void
    {
         Ticket::setNewOrder($orderedIds);
    }
}
