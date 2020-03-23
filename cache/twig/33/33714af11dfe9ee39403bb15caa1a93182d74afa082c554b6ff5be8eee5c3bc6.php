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

/* @particles/login.html.twig */
class __TwigTemplate_3c804944b46dbddabbaca5085cf117bae5eac1bbf322e4ffd9b9a676a9e0b993 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'particle' => [$this, 'block_particle'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = [])
    {
        // line 4
        echo "
    ";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "enabled", []) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "route", []))) {
            // line 6
            echo "    ";
            if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "authenticated", [])) {
                // line 7
                echo "        <h4>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_LOGIN.WELCOME"), "html", null, true);
                echo " <strong>";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "fullname", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "fullname", [])) : ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []))), "html", null, true);
                echo "</strong></h4>
        <a class=\"button logout\" href=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => ((((($context["base_url_relative"] ?? null) . ((($this->getAttribute(($context["uri"] ?? null), "path", []) != "/")) ? ($this->getAttribute(($context["uri"] ?? null), "path", [])) : (""))) . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . "login.logout"), 1 => "logout-form", 2 => "logout-nonce"], "method"), "html", null, true);
                echo "\">
            ";
                // line 9
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_LOGIN.BTN_LOGOUT"), "html", null, true);
                echo "
        </a>

    ";
            } else {
                // line 13
                echo "        <form method=\"post\">
            ";
                // line 14
                if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "plugins_hooked_loginPage", [])) {
                    // line 15
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "plugins_hooked_loginPage", []));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                        // line 16
                        echo "                    ";
                        $this->loadTemplate($context["label"], "@particles/login.html.twig", 16)->display($context);
                        // line 17
                        echo "                ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 18
                    echo "            ";
                }
                // line 19
                echo "
            ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable([0 => ["name" => "username", "type" => "text", "id" => "username", "placeholder" => "Username", "label" => "PLUGIN_LOGIN.USERNAME", "autofocus" => true], 1 => ["name" => "password", "type" => "password", "id" => "password", "placeholder" => "Password", "label" => "PLUGIN_LOGIN.PASSWORD"]]);
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
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 34
                    echo "                ";
                    if ($this->getAttribute($context["field"], "type", [])) {
                        // line 35
                        echo "                    <div>
                        ";
                        // line 36
                        $this->loadTemplate([0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", [])) . "/") . $this->getAttribute($context["field"], "type", [])) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"], "@particles/login.html.twig", 36)->display($context);
                        // line 37
                        echo "                    </div>
                ";
                    }
                    // line 39
                    echo "            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "            <div class=\"form-actions secondary-accent\">
                ";
                // line 41
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "rememberme", []), "enabled", [])) {
                    // line 42
                    echo "                    <div class=\"form-data rememberme\" data-grav-default=\"null\" data-grav-disabled=\"true\" data-grav-field=\"checkbox\">
                        <div class=\"form-input-wrapper\">
                            <input type=\"checkbox\" value=\"1\" name=\"rememberme\" id=\"#rememberme\">
                            <label class=\"inline\" for=\"#rememberme\" title=\"";
                    // line 45
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_LOGIN.REMEMBER_ME_HELP"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_LOGIN.REMEMBER_ME"), "html", null, true);
                    echo "</label>
                        </div>
                    </div>
                ";
                }
                // line 49
                echo "
                <a class=\"button secondary\" href=\"";
                // line 50
                echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "route_forgot", []), "html", null, true);
                echo "\"><i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_LOGIN.BTN_FORGOT"), "html", null, true);
                echo "</a>

                <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"login.login\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> ";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_LOGIN.BTN_LOGIN"), "html", null, true);
                echo "</button>
            </div>

            ";
                // line 55
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("login-form", "login-form-nonce");
                echo "
        </form>
    ";
            }
            // line 58
            echo "
";
        }
        // line 60
        echo "
";
    }

    public function getTemplateName()
    {
        return "@particles/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 60,  199 => 58,  193 => 55,  187 => 52,  179 => 50,  176 => 49,  167 => 45,  162 => 42,  160 => 41,  157 => 40,  143 => 39,  139 => 37,  137 => 36,  134 => 35,  131 => 34,  114 => 20,  111 => 19,  108 => 18,  94 => 17,  91 => 16,  73 => 15,  71 => 14,  68 => 13,  61 => 9,  57 => 8,  50 => 7,  47 => 6,  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@nucleus/partials/particle.html.twig' %}

{% block particle %}

    {% if config.plugins.login.enabled and config.plugins.login.route %}
    {% if grav.user.authenticated %}
        <h4>{{ 'PLUGIN_LOGIN.WELCOME'|t }} <strong>{{ grav.user.fullname ?: grav.user.username }}</strong></h4>
        <a class=\"button logout\" href=\"{{ uri.addNonce(base_url_relative ~ (uri.path != '/' ? uri.path) ~ '/task' ~ config.system.param_sep ~ 'login.logout', 'logout-form', 'logout-nonce') }}\">
            {{ 'PLUGIN_LOGIN.BTN_LOGOUT'|t }}
        </a>

    {% else %}
        <form method=\"post\">
            {% if grav.twig.plugins_hooked_loginPage %}
                {% for label in grav.twig.plugins_hooked_loginPage %}
                    {% include label %}
                {% endfor %}
            {% endif %}

            {% for field in [{
                name: 'username',
                type: 'text',
                id: 'username',
                placeholder: 'Username',
                label: 'PLUGIN_LOGIN.USERNAME',
                autofocus: true
            }, {
                name: 'password',
                type: 'password',
                id: 'password',
                placeholder: 'Password',
                label: 'PLUGIN_LOGIN.PASSWORD'
            }] %}
                {% if field.type %}
                    <div>
                        {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
                    </div>
                {% endif %}
            {% endfor %}
            <div class=\"form-actions secondary-accent\">
                {% if config.plugins.login.rememberme.enabled %}
                    <div class=\"form-data rememberme\" data-grav-default=\"null\" data-grav-disabled=\"true\" data-grav-field=\"checkbox\">
                        <div class=\"form-input-wrapper\">
                            <input type=\"checkbox\" value=\"1\" name=\"rememberme\" id=\"#rememberme\">
                            <label class=\"inline\" for=\"#rememberme\" title=\"{{ 'PLUGIN_LOGIN.REMEMBER_ME_HELP'|t }}\">{{ 'PLUGIN_LOGIN.REMEMBER_ME'|t }}</label>
                        </div>
                    </div>
                {% endif %}

                <a class=\"button secondary\" href=\"{{ base_url_relative }}{{ config.plugins.login.route_forgot }}\"><i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i> {{ 'PLUGIN_LOGIN.BTN_FORGOT'|t }}</a>

                <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"login.login\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> {{ 'PLUGIN_LOGIN.BTN_LOGIN'|t }}</button>
            </div>

            {{ nonce_field('login-form', 'login-form-nonce')|raw }}
        </form>
    {% endif %}

{% endif %}

{% endblock %}", "@particles/login.html.twig", "/Users/hpelaez/Workspace/project-mozart/user/plugins/gantry5/engines/nucleus/particles/login.html.twig");
    }
}
