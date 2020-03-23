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

/* @Page:/Users/hpelaez/Workspace/project-mozart/user/pages/08.contact-us */
class __TwigTemplate_bb2177932b2311642398f2c1d807ac36172e81886b50be32ca630fe0380502b6 extends \Twig\Template
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
        echo "<h1>Contacto</h1>
<p>En caso de preguntas concretas en relacion a la masoneria, sientase usted con la libertad de contactarnos mediante la siguiente forma y le responderemos a la brevedad posible. </p>
<p><strong>Nota:</strong> Nuestro sitio cumple con las politicas de confidencialidad y encriptado de datos personales por medio de https para garantizar la seguridad de su informacion personal. </p>";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/hpelaez/Workspace/project-mozart/user/pages/08.contact-us";
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
        return new Source("<h1>Contacto</h1>
<p>En caso de preguntas concretas en relacion a la masoneria, sientase usted con la libertad de contactarnos mediante la siguiente forma y le responderemos a la brevedad posible. </p>
<p><strong>Nota:</strong> Nuestro sitio cumple con las politicas de confidencialidad y encriptado de datos personales por medio de https para garantizar la seguridad de su informacion personal. </p>", "@Page:/Users/hpelaez/Workspace/project-mozart/user/pages/08.contact-us", "");
    }
}
