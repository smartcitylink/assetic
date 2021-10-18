<?php

/*
 * This file is part of the Assetic package, an OpenSky project.
 *
 * (c) 2010-2014 OpenSky Project Inc
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Assetic\Extension\Twig;

use Twig\Compiler;
use Twig\Node\Expression\FunctionExpression;

class AsseticFilterNode extends FunctionExpression
{
    protected function compileCallable(Compiler $compiler)
    {
        $compiler->raw(sprintf('$this->env->getExtension(\'Assetic\\Extension\\Twig\\AsseticExtension\')->getFilterInvoker(\'%s\')->invoke', $this->getAttribute('name')));

        $this->compileArguments($compiler);
    }
}
