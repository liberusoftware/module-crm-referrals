<?php

declare(strict_types=1);

namespace Liberu\CRM\Referrals\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/** @property int $team_id */
final class ReferralReward extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_referral_rewards';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['amount' => 'float', 'paid_at' => 'datetime'];
    }
}
