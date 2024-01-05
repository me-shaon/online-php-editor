<?php

declare(strict_types=1);

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Process;
use Illuminate\Support\Facades\Storage;

class CodeController
{
    public function __invoke(Request $request)
    {
        $filePath = 'tmp/' . uniqid() . '.php';
        Storage::put($filePath, $request->input('code'));

        $result = Process::run("php " . Storage::path($filePath));

        Storage::delete($filePath);

        if ($result->successful()) {
            return response()->json([
                'result' => $result->output(),
            ]);
        } else {
            return response()->json([
                'result' => [],
                'error' => $result->errorOutput(),
            ]);
        }
    }
}
