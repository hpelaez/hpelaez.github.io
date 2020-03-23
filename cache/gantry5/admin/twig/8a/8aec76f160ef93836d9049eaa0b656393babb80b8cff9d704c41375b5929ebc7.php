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

/* pages/positions/assignments.html.twig */
class __TwigTemplate_97fb8f1adf68495db2188953da8200592595f2bd8e76dd78359ab6e3b922942e extends \Twig\Template
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
        if ( !((twig_length_filter($this->env, ($context["assignments"] ?? null)) == 1) && (twig_length_filter($this->env, $this->getAttribute(twig_first($this->env, twig_first($this->env, ($context["assignments"] ?? null))), "items")) == 1))) {
            // line 2
            echo "<div class=\"g-filters-bar\">
    <div class=\"g-panel-filters\" data-g-global-filter=\"\">
        <div class=\"search settings-block\">
            <input type=\"text\" placeholder=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_GLOBAL_FILTER_ELI"), "html", null, true);
            echo "\" aria-label=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_GLOBAL_FILTER_ELI"), "html", null, true);
            echo "\" role=\"search\">
            <i class=\"fa fa-fw fa-search\" aria-hidden=\"true\"></i>
        </div>
    </div>
    <div class=\"float-right\">
        <label>
            <input type=\"checkbox\" data-assignments-enabledonly=\"\" /> ";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_ASSIGNMENTS_HIDE_UNASSIGNED"), "html", null, true);
            echo "
        </label>
        <a href=\"#\" data-g-assignments-check=\"\" data-tip=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_ASSIGNMENTS_SELECT_ALL"), "html", null, true);
            echo "\" data-tip-place=\"top\">All</a>
        <a href=\"#\" data-g-assignments-uncheck=\"\" data-tip=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_ASSIGNMENTS_UNSELECT_ALL"), "html", null, true);
            echo "\" data-tip-place=\"top\">None</a>
    </div>
</div>
";
        }
        // line 18
        echo "
<div class=\"cards-wrapper clearfix";
        // line 19
        echo (((twig_length_filter($this->env, ($context["assignments"] ?? null)) == 1)) ? (" only-child") : (""));
        echo "\">
    ";
        // line 20
        $context["all"] = ($this->getAttribute(($context["data"] ?? null), "assignments", []) == "all");
        // line 21
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["assignments"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["type"] => $context["types"]) {
            // line 22
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["types"]);
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["list"]) {
                // line 23
                echo "            <div class=\"card settings-block\">
                <h4 data-g5-positions-assignments>
                    ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "label", []), "html", null, true);
                echo "

                    ";
                // line 27
                $context["path"] = ((("assignments." . $context["type"]) . ".") . $context["name"]);
                // line 28
                echo "                    ";
                $context["all_value"] = (($context["all"] ?? null) || ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->nestedFunc(($context["data"] ?? null), ($context["path"] ?? null)) === true));
                // line 29
                echo "                    ";
                $this->loadTemplate("forms/fields/enable/enable.html.twig", "pages/positions/assignments.html.twig", 29)->display(twig_array_merge($context, ["default" => true, "name" => $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->fieldNameFilter(                // line 31
($context["path"] ?? null)), "field" => $this->getAttribute(                // line 32
($context["link"] ?? null), "field", []), "value" =>                 // line 33
($context["all_value"] ?? null), "disabled" =>  !                // line 34
($context["all_value"] ?? null)]));
                // line 36
                echo "                    <div class=\"g-panel-filters float-right align-right ";
                echo ((((twig_length_filter($this->env, $this->getAttribute($context["list"], "items", [])) > 1) && (twig_length_filter($this->env, ($context["assignments"] ?? null)) == 1))) ? ("hidden") : (""));
                echo "\">
                        <div class=\"search settings-block\">
                            <input type=\"text\" placeholder=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_FILTER_ELI"), "html", null, true);
                echo "\" aria-label=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_FILTER_ELI"), "html", null, true);
                echo "\">
                            <i class=\"fa fa-fw fa-search\" aria-hidden=\"true\"></i>
                        </div>
                        <a href=\"#\" data-g-assignments-check=\"\" data-tip=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_ASSIGNMENTS_SELECT_ALL"), "html", null, true);
                echo "\" data-tip-place=\"top\">All</a>
                        <a href=\"#\" data-g-assignments-uncheck=\"\" data-tip=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_ASSIGNMENTS_UNSELECT_ALL"), "html", null, true);
                echo "\" data-tip-place=\"top\">None</a>
                    </div>
                </h4>

                <div class=\"";
                // line 46
                echo ((($context["all_value"] ?? null)) ? ("hide ") : (""));
                echo "settings-param-wrapper\">
                    ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["list"], "items", []));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                    // line 48
                    echo "                        ";
                    $context["path"] = ((((("assignments." . $context["type"]) . ".") . $context["name"]) . ".") . $this->getAttribute($context["link"], "name", []));
                    // line 49
                    echo "                        ";
                    $context["group"] = (($this->getAttribute($context["link"], "section", [])) ? ((("data-g-assignments-group=\"" . twig_escape_filter($this->env, $this->getAttribute($context["link"], "name", []))) . "\"")) : ((("data-g-assignments-parent=\"" . twig_escape_filter($this->env, $this->getAttribute($context["link"], "taxonomy", []))) . "\"")));
                    // line 50
                    echo "                        ";
                    $context["value"] = (0 || $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->nestedFunc(($context["data"] ?? null), ($context["path"] ?? null)));
                    // line 51
                    echo "                        <label class=\"settings-param";
                    if ($this->getAttribute($context["link"], "section", [])) {
                        echo " settings-param-section";
                    }
                    echo "\" ";
                    echo ($context["group"] ?? null);
                    echo ">
                            ";
                    // line 52
                    $this->loadTemplate("forms/fields/enable/enable.html.twig", "pages/positions/assignments.html.twig", 52)->display(twig_array_merge($context, ["default" => true, "name" => $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->fieldNameFilter(                    // line 54
($context["path"] ?? null)), "field" => $this->getAttribute(                    // line 55
$context["link"], "field", []), "value" =>                     // line 56
($context["value"] ?? null), "disabled" =>  !                    // line 57
($context["value"] ?? null), "turned_off" => $this->getAttribute(                    // line 58
$context["link"], "disabled", [])]));
                    // line 60
                    echo "                            <span class=\"settings-param-title";
                    if ($this->getAttribute($context["link"], "section", [])) {
                        echo " settings-param-section-title";
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "label", []), "html", null, true);
                    echo "</span>
                        </label>
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "                </div>
            </div>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['list'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['types'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "pages/positions/assignments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 67,  239 => 66,  223 => 63,  201 => 60,  199 => 58,  198 => 57,  197 => 56,  196 => 55,  195 => 54,  194 => 52,  185 => 51,  182 => 50,  179 => 49,  176 => 48,  159 => 47,  155 => 46,  148 => 42,  144 => 41,  136 => 38,  130 => 36,  128 => 34,  127 => 33,  126 => 32,  125 => 31,  123 => 29,  120 => 28,  118 => 27,  113 => 25,  109 => 23,  91 => 22,  73 => 21,  71 => 20,  67 => 19,  64 => 18,  57 => 14,  53 => 13,  48 => 11,  37 => 5,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "pages/positions/assignments.html.twig", "/Users/hpelaez/Workspace/project-mozart/user/plugins/gantry5/admin/templates/pages/positions/assignments.html.twig");
    }
}
