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

/* @gantry-admin/pages/positions/particle.html.twig */
class __TwigTemplate_bf979e0b21509129afa55226e89605e732128ecf457fb192f4b72f497ac9f816 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'gantry' => [$this, 'block_gantry'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((($context["ajax"] ?? null) - ($context["suffix"] ?? null))) ? ("@gantry-admin/partials/ajax.html.twig") : ("@gantry-admin/partials/base.html.twig")), "@gantry-admin/pages/positions/particle.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_gantry($context, array $blocks = [])
    {
        // line 4
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", [0 => ($context["action"] ?? null)], "method"), "html", null, true);
        echo "\">
    <div class=\"g-tabs\" role=\"tablist\">
        <ul>
            <li class=\"active\">
                <a href=\"#\" id=\"g-switcher-platforms-tab\" role=\"presentation\" aria-controls=\"g-switcher-platforms\" role=\"tab\" aria-expanded=\"true\">
                    ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PARTICLE"), "html", null, true);
        echo "
                </a>
            </li>
            <li>
                <a href=\"#\" id=\"g-chrome-tab\" role=\"presentation\" aria-controls=\"g-chrome\" role=\"tab\" aria-expanded=\"false\">
                    ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_CHROME"), "html", null, true);
        echo "
                </a>
            </li>
            <li>
                <a href=\"#\" id=\"g-settings-assignments-tab\" role=\"presentation\" aria-controls=\"g-settings-assignments\" role=\"tab\" aria-expanded=\"false\">
                    ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_ASSIGNMENTS"), "html", null, true);
        echo "
                </a>
            </li>
        </ul>
    </div>

    <div class=\"g-panes\">
        <div class=\"g-pane active\" role=\"tabpanel\" id=\"g-settings-particle\" aria-labelledby=\"g-settings-particle-tab\" aria-expanded=\"true\">
            <div class=\"card settings-block\">
                <h4>
                    <span data-title-editable=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
        echo "\" class=\"title\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "title", []), "html", null, true);
        echo "</span>
                    <i class=\"fa fa-pencil font-small\" aria-hidden=\"true\" tabindex=\"0\" aria-label=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_EDIT_TITLE", $this->getAttribute(($context["item"] ?? null), "title", [])), "html", null, true);
        echo "\" data-title-edit=\"\"></i>
                    <span class=\"badge font-small\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["item"] ?? null), "options", []), "type", []), "html", null, true);
        echo "</span>
                    ";
        // line 32
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "form", []), "fields", []), "enabled", [])) {
            // line 33
            echo "                    ";
            $this->loadTemplate("forms/fields/enable/enable.html.twig", "@gantry-admin/pages/positions/particle.html.twig", 33)->display(twig_array_merge($context, ["name" => (($context["prefix"] ?? null) . "enabled"), "field" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "form", []), "fields", []), "enabled", []), "value" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["item"] ?? null), "options", []), "particle", []), "enabled", []), "default" => 1]));
            // line 34
            echo "                    ";
        }
        // line 35
        echo "                </h4>

                <div class=\"inner-params\">
                    ";
        // line 38
        $this->loadTemplate("forms/fields.html.twig", "@gantry-admin/pages/positions/particle.html.twig", 38)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["particle"] ?? null), "form", []), "data" => ($context["data"] ?? null), "prefix" => ($context["prefix"] ?? null), "skip" => [0 => "enabled"]]));
        // line 39
        echo "                    <input type=\"hidden\" name=\"id\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "id", []), "html", null, true);
        echo "\" />
                </div>
            </div>
        </div>

        <div class=\"g-pane\" role=\"tabpanel\" id=\"g-chrome\" aria-labelledby=\"g-chrome-tab\" aria-expanded=\"false\">
            <div class=\"card settings-block\">
                <h4>
                    ";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_CHROME"), "html", null, true);
        echo "
                </h4>
                <div class=\"inner-params\">
                    ";
        // line 50
        $this->loadTemplate("forms/fields.html.twig", "@gantry-admin/pages/positions/particle.html.twig", 50)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["chrome"] ?? null), "form", []), "data" => ($context["data"] ?? null), "prefix" => "chrome."]));
        // line 51
        echo "                </div>
            </div>
        </div>

        <div class=\"g-pane\" role=\"tabpanel\" id=\"g-settings-assignments\" aria-labelledby=\"g-settings-assignments-tab\" aria-expanded=\"false\">
            <div class=\"card settings-assignments\">
                <h4>
                    ";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_ASSIGNMENTS"), "html", null, true);
        echo "
                </h4>
                <div class=\"inner-params\">
                    ";
        // line 61
        $this->loadTemplate("pages/positions/assignments.html.twig", "@gantry-admin/pages/positions/particle.html.twig", 61)->display(twig_array_merge($context, ["assignments" => ($context["assignments"] ?? null)]));
        // line 62
        echo "                </div>
            </div>
        </div>
    </div>
    <div class=\"g-modal-actions\">
        <button class=\"button button-primary\" type=\"submit\">";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_APPLY"), "html", null, true);
        echo "</button>
        <button class=\"button button-primary\" data-apply-and-save=\"\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_APPLY_SAVE"), "html", null, true);
        echo "</button>
        <button class=\"button g5-dialog-close\">";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_CANCEL"), "html", null, true);
        echo "</button>
    </div>
    <input type=\"hidden\" name=\"_end\" value=\"1\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/pages/positions/particle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 69,  156 => 68,  152 => 67,  145 => 62,  143 => 61,  137 => 58,  128 => 51,  126 => 50,  120 => 47,  108 => 39,  106 => 38,  101 => 35,  98 => 34,  95 => 33,  93 => 32,  89 => 31,  85 => 30,  79 => 29,  66 => 19,  58 => 14,  50 => 9,  41 => 4,  38 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@gantry-admin/pages/positions/particle.html.twig", "/Users/hpelaez/Workspace/project-mozart/user/plugins/gantry5/admin/templates/pages/positions/particle.html.twig");
    }
}
