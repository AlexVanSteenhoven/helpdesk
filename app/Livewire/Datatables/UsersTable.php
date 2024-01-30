<?php

namespace App\Livewire\Datatables;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;

    #[url(as: 'q', history: true, keep: true)]
    public string $search = '';

    #[url(as: 'p', history: false, keep: true)]
    public int $pagination = 10;

    #[url(as: 'sort', history: true, keep: true)]
    public string $sortColumn = 'name';

    #[url(as: 'order', history: true, keep: true)]
    public string $sortDirection = 'asc';

    /**
     * Resets the page to 1 on search so results are always shown (if there are records)
     *
     * @return void
     */
    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    /**
     * Filtering the results of the table
     *
     * @param string $column
     * @param mixed $value
     * @return void
     */
    public function filter(string $column, mixed $value): void
    {
      // TODO: Implement filter logic
    }

    /**
     * Returns a skeleton placeholder for when the data is not fully loaded
     *
     * @return View
     */
    public function placeholder(): View
    {
        return view('placeholders.datatable');
    }

    /**
     * Sorts the table based on the column and order
     *
     * @param string $column
     * @return void
     */
    public function sort(string $column): void
    {
        if ($this->sortColumn === $column) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';

            return;
        }

        $this->sortColumn = $column;
        $this->sortDirection = 'asc';
    }

    /**
     * Returns the view for the datatable based on the configured parameters
     *
     * @return View
     */
    public function render(): View
    {
        return view('livewire.datatables.users-table', [
            'users' => User::search($this->search)
                ->orderBy($this->sortColumn,$this->sortDirection)
                ->paginate($this->pagination)
        ]);
    }
}
