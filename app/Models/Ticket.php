<?php

namespace App\Models;

use App\Enums\TicketStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Ticket extends Model implements Sortable
{
    use HasFactory, SortableTrait;

    protected $fillable = [
        'title',
        'description',
        'status',
        'assigned_to',
        'priority',
        'created_at',
        'updated_at',
    ];

    public array $sortable = [
        'order_column_name' => 'order',
        'sort_when_creating' => true,
    ];

    protected $casts = [
        'status' => TicketStatusEnum::class,
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Access the user that this ticket is assigned to.
     *
     * @return BelongsTo
     */
    public function assignee(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    /**
     * Access the labels that belong to this ticket.
     *
     * @return BelongsToMany
     */
    public function labels(): BelongsToMany
    {
        return $this->belongsToMany(Label::class, 'ticket_labels');
    }
}
