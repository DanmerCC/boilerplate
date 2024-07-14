<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class PdfScannerController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf|max:100000',
        ]);

        $pdf = $request->file('file');
        $pdfPath = $pdf->store('pdfs');
        $outputPdfPath = 'scanned_' . $pdf->hashName();

        $pythonScriptPath = env('PYTHON_SCRIPT',base_path('pdftoscan.py'));

        Log::info("Convirtiendo PDF a escaneado: " . $outputPdfPath);

        $process = new Process([
            env('PYTHON_PATH','python3'),
            $pythonScriptPath,
            storage_path('app/' . $pdfPath),
            storage_path('app/converted/' . $outputPdfPath),
            $request->input('noise_level', 0.1),
            $request->input('max_angle', 3),
            $request->input('border_size', 2),
        ]);

        $process->run();

        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        Log::info("PDF convertido a escaneado: " . $outputPdfPath);

        return response()->json(['success' => true, 'url' => Storage::disk('exported')->url($outputPdfPath)]);
    }
}
