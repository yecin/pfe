<?php

/* BOOccasionBundle:Advert:delete.html.twig */
class __TwigTemplate_51b664f2e4e7c41cd3483fe35bb45d96924b2f295608288b9d8d7812fef4e6bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>

<html>

  <head>

    <title>Bienvenue sur ma première page avec OpenClassrooms !</title>

  </head>

  <body>

    <h1>Supprimer une annonce</h1>


    <p>

      ";
        // line 20
        echo "
      ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 22
            echo "
        <p>Message flash : ";
            // line 23
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>

      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
    </p>


    <p>

      Ici nous pourrons lire l'annonce ayant comme id : ";
        // line 32
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "<br />

      Mais pour l'instant, nous ne savons pas encore le faire, cela viendra !

    </p>

  </body>

</html>";
    }

    public function getTemplateName()
    {
        return "BOOccasionBundle:Advert:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 32,  58 => 26,  49 => 23,  46 => 22,  42 => 21,  39 => 20,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BOOccasionBundle:Advert:delete.html.twig", "/var/www/html/ecom/src/BO/OccasionBundle/Resources/views/Advert/delete.html.twig");
    }
}
