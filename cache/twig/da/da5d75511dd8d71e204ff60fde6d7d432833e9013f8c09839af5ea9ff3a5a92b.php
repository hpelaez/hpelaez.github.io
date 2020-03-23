<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Page:/Users/hpelaez/Workspace/project-mozart/user/pages/08.contact-us/thankyou */
class __TwigTemplate_d11793bec19863fe9ee79a22662bb4ecab0afcd64bba109aba26ead6064680fd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<h2>Email sent!</h2>";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/hpelaez/Workspace/project-mozart/user/pages/08.contact-us/thankyou";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<h2>Email sent!</h2>", "@Page:/Users/hpelaez/Workspace/project-mozart/user/pages/08.contact-us/thankyou", "");
    }
}
