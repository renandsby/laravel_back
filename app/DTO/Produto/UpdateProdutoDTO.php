<?php

namespace App\DTO\Produto;

use App\Enuns\ProdutoStatus;
use App\Http\Requests\StoreUpdateSupports;

class UpdateSupportDTO
{
    public function __construct(
        public string $id,
        public string $subject,
        public SupportStatus $status,
        public string $body,
    )
    {}

    public static function makeFromRequest(StoreUpdateSupports $request, string $id = null) : self
    {
        return new self(
            $id ?? $request->id,
            $request->subject,
            SupportStatus::A,
            $request->body,
        );
    }
}
