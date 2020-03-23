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
class __TwigTemplate_d4d4d9c9e79c2256d486070590ad6999e33282d68bef67ab9e994da8aa6532cc extends \Twig\Template
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
        echo "<h1>Mensaje enviado!</h1>";
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
        return new Source("<h1>Mensaje enviado!</h1>", "@Page:/Users/hpelaez/Workspace/project-mozart/user/pages/08.contact-us/thankyou", "");
    }
}
