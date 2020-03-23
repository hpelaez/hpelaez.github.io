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

/* __string_template__3155d2becf306b7632b228ddf06cfc01488f2a36f26d3225c6c4e27b802c2fff */
class __TwigTemplate_0b306f45f73af3d74f727e08bf94ee9d4d76ebefee3aeb0188e44d133f6ce060 extends \Twig\Template
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
        echo "<h2 class=\"g-title\">We are sorry!</h2>
<p>Gantry 5 provides a custom error page for you to configure with either positions, particles or a combination of both, as well as styling.</p>";
    }

    public function getTemplateName()
    {
        return "__string_template__3155d2becf306b7632b228ddf06cfc01488f2a36f26d3225c6c4e27b802c2fff";
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
        return new Source("<h2 class=\"g-title\">We are sorry!</h2>
<p>Gantry 5 provides a custom error page for you to configure with either positions, particles or a combination of both, as well as styling.</p>", "__string_template__3155d2becf306b7632b228ddf06cfc01488f2a36f26d3225c6c4e27b802c2fff", "");
    }
}
