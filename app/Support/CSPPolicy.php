<?php

namespace App\Support;

use Spatie\Csp\Directive;
use Spatie\Csp\Keyword;
use Spatie\Csp\Policies\Policy;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CSPPolicy extends Policy
{
    public function configure()
    {
        // Css
        $this->addNonceForDirective(Directive::STYLE);
        $this->addDirective(Directive::STYLE, Keyword::SELF);

        // Fonts
        $this->addDirective(Directive::FONT, 'https://fonts.bunny.net');

        // Javascripts
        $this->addNonceForDirective(Directive::SCRIPT);
        $this->addDirective(Directive::SCRIPT, Keyword::SELF);

        // Others
        $this->addDirective(Directive::BASE, Keyword::SELF);
        $this->addDirective(Directive::CONNECT, [Keyword::SELF, 'ws://127.0.0.1:5174/']);
        $this->addDirective(Directive::DEFAULT, Keyword::SELF);
        $this->addDirective(Directive::FORM_ACTION, Keyword::SELF);
        $this->addDirective(Directive::IMG, [Keyword::SELF, 'https://api.dicebear.com']);
        $this->addDirective(Directive::MEDIA, Keyword::SELF);
        $this->addDirective(Directive::OBJECT, Keyword::NONE);
    }

    public function shouldBeApplied(Request $request, Response $response): bool
    {
        if (config('app.debug') && ($response->isClientError() || $response->isServerError())) {
            return false;
        }

        return parent::shouldBeApplied($request, $response);
    }
}
