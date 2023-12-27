<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Newsletter $newsletter)
    {
        try {
            $request->validate([
                'email' => ['required', 'email']
            ]);

            $newsletter->subscribe(request('email'));

        } catch (ValidationException $e) {
            throw $e::withMessages([
                'email' => $e->getMessage()
            ])->redirectTo('/#newsletter');
        } catch (Exception $e) {
            throw ValidationException::withMessages([
                'email' => 'This email could not be signed up'
            ])->redirectTo('/#newsletter');
        }

        return redirect('/')
            ->with('success', 'You are signed up to our newsletter');
    }
}
