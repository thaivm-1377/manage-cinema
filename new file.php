<?php

namespace App\Http\Controllers;

use App\Exceptions\InvalidPayloadSignatureException;
use App\Exceptions\UnsupportedEventException;
use App\Git\GitService;
use App\Jobs\CI\ProcessHook;
use App\Models\Repository;
use Illuminate\Http\Request;

class HandleHook extends Controller
{
    protected $gitService;

    public function __construct(GitService $gitService)
    {
        $this->gitService = $gitService;
    }

    public function __invoke(Request $request, $scm)
    {
        abort_unless($this->gitService->isSupportedProvider($scm), 404);

        if (!$request->only('repository.id')) {
            abort(response('Hook structure error!', 400));
        }

        $repo = Repository::where('scm_uuid', $request->input('repository')['id'])
            ->where('scm', $scm)
            ->first();

        
        
        
        if (!$repo) {
            abort(response('Repository not found!', 400));
        }

        
        
        
        try {
            $webhookPayload = $this->gitService
                ->webhooks($scm)
                ->parseIncomingWebhook($request, $repo->webhook_secret);
        } catch (InvalidPayloadSignatureException $e) {
            abort(response('Signatures didn\'t match!', 400));
        } catch (UnsupportedEventException $e) {
            abort(response($e->getMessage(), 200));
        }

        dispatch((new ProcessHook($webhookPayload)));

        return response()->json($webhookPayload);
    }
}
