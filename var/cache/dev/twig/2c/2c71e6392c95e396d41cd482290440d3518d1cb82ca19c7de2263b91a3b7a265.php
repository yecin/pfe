<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_1a77698b4baf86797e2c8f072bf8214cfd93db67fc99a97d5ca77e5d2ce01dd5 extends Twig_Template
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
        $__internal_27ddd6bd5667f4fc5ac8d25aad30f08c684ff921046726583d680e52bc5ab337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27ddd6bd5667f4fc5ac8d25aad30f08c684ff921046726583d680e52bc5ab337->enter($__internal_27ddd6bd5667f4fc5ac8d25aad30f08c684ff921046726583d680e52bc5ab337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_ce1a8b27295d8e3fce8bae8aee47747d4b0e01986823ed264ab5da47b53784c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce1a8b27295d8e3fce8bae8aee47747d4b0e01986823ed264ab5da47b53784c5->enter($__internal_ce1a8b27295d8e3fce8bae8aee47747d4b0e01986823ed264ab5da47b53784c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_27ddd6bd5667f4fc5ac8d25aad30f08c684ff921046726583d680e52bc5ab337->leave($__internal_27ddd6bd5667f4fc5ac8d25aad30f08c684ff921046726583d680e52bc5ab337_prof);

        
        $__internal_ce1a8b27295d8e3fce8bae8aee47747d4b0e01986823ed264ab5da47b53784c5->leave($__internal_ce1a8b27295d8e3fce8bae8aee47747d4b0e01986823ed264ab5da47b53784c5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/var/www/html/ecom/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
