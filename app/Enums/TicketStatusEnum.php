<?php

namespace App\Enums;

enum TicketStatusEnum: string
{
    case NOT_STARTED = 'not_started';
    case ASSIGNED = 'assigned';
    case IN_PROGRESS = 'in_progress';
    case ON_HOLD = 'on_hold';
    case RESOLVED = 'resolved';
    case CLOSED = 'closed';

    public function name():string
    {
        return match ($this) {
            self::NOT_STARTED => 'Not Started',
            self::ASSIGNED => 'Assigned',
            self::IN_PROGRESS => 'In Progress',
            self::ON_HOLD => 'On Hold',
            self::RESOLVED => 'Resolved',
            self::CLOSED => 'Closed',
        };
    }

    public static function statuses(): array
    {
        return [
            self::NOT_STARTED->value => self::NOT_STARTED->name(),
            self::ASSIGNED->value => self::ASSIGNED->name(),
            self::IN_PROGRESS->value => self::IN_PROGRESS->name(),
            self::ON_HOLD->value => self::ON_HOLD->name(),
            self::RESOLVED->value => self::RESOLVED->name(),
            self::CLOSED->value => self::CLOSED->name(),
        ];
    }
}
