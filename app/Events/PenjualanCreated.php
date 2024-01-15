<?php

// PenjualanCreated.php

namespace App\Events;

use App\Models\ModelPenjualan;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class PenjualanCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $penjualan;

    public function __construct(ModelPenjualan $penjualan)
    {
        $this->penjualan = $penjualan;
    }
}

