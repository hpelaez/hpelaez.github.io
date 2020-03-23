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

/* formdata.html.twig */
class __TwigTemplate_05330578220849faf08257724bf49410205ef9fddf4d84e0e42fe483895897e9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/page.html.twig", "formdata.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        echo ($context["content"] ?? null);
        echo "

    <div class=\"alert\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "message", []), "html", null, true);
        echo "</div>

    <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_ENGINE_FORM_SUMMARY"), "html", null, true);
        echo "</p>

    ";
        // line 10
        $this->loadTemplate("forms/data.html.twig", "formdata.html.twig", 10)->display($context);
    }

    public function getTemplateName()
    {
        return "formdata.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 10,  53 => 8,  48 => 6,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"partials/page.html.twig\" %}

{% block content %}
    {{ content|raw }}

    <div class=\"alert\">{{ form.message }}</div>

    <p>{{ 'GANTRY5_ENGINE_FORM_SUMMARY'|trans }}</p>

    {% include \"forms/data.html.twig\" %}
{% endblock %}
", "formdata.html.twig", "/Users/hpelaez/Workspace/project-mozart/user/plugins/gantry5/engines/nucleus/templates/formdata.html.twig");
    }
}
