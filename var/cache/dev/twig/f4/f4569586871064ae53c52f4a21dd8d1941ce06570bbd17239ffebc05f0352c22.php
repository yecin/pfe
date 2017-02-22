<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8f86478ac25dc11a71141ac4442469f483b4d9cb09fc4cb055b197f2f0ef6dc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbe70ad16a3bb281e30294613fb50c20a45db133b964bda642a966f73f290f0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbe70ad16a3bb281e30294613fb50c20a45db133b964bda642a966f73f290f0d->enter($__internal_bbe70ad16a3bb281e30294613fb50c20a45db133b964bda642a966f73f290f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e2d72a31a49f193570d8279a8418bdde0fb10fc4ce722807e62f8a848f6af320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2d72a31a49f193570d8279a8418bdde0fb10fc4ce722807e62f8a848f6af320->enter($__internal_e2d72a31a49f193570d8279a8418bdde0fb10fc4ce722807e62f8a848f6af320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbe70ad16a3bb281e30294613fb50c20a45db133b964bda642a966f73f290f0d->leave($__internal_bbe70ad16a3bb281e30294613fb50c20a45db133b964bda642a966f73f290f0d_prof);

        
        $__internal_e2d72a31a49f193570d8279a8418bdde0fb10fc4ce722807e62f8a848f6af320->leave($__internal_e2d72a31a49f193570d8279a8418bdde0fb10fc4ce722807e62f8a848f6af320_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_922f37f543d84e28365439185dfbda0660ff89a1bb4048e8d8b76995bdf31a8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_922f37f543d84e28365439185dfbda0660ff89a1bb4048e8d8b76995bdf31a8e->enter($__internal_922f37f543d84e28365439185dfbda0660ff89a1bb4048e8d8b76995bdf31a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a5d83ff393b5eee2ccc116d4be39c0c7015eb2ebe2b81c659906aaa8ba26ec65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5d83ff393b5eee2ccc116d4be39c0c7015eb2ebe2b81c659906aaa8ba26ec65->enter($__internal_a5d83ff393b5eee2ccc116d4be39c0c7015eb2ebe2b81c659906aaa8ba26ec65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a5d83ff393b5eee2ccc116d4be39c0c7015eb2ebe2b81c659906aaa8ba26ec65->leave($__internal_a5d83ff393b5eee2ccc116d4be39c0c7015eb2ebe2b81c659906aaa8ba26ec65_prof);

        
        $__internal_922f37f543d84e28365439185dfbda0660ff89a1bb4048e8d8b76995bdf31a8e->leave($__internal_922f37f543d84e28365439185dfbda0660ff89a1bb4048e8d8b76995bdf31a8e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4a906c748f9fdf5f033f4735c7d24bbf58edc5d78d8c11c8b7a09d29394a8dcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a906c748f9fdf5f033f4735c7d24bbf58edc5d78d8c11c8b7a09d29394a8dcc->enter($__internal_4a906c748f9fdf5f033f4735c7d24bbf58edc5d78d8c11c8b7a09d29394a8dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_89d1df4fb91f7840bec55be0941627cdb8f99a1132377a42f09e11627a42c5d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89d1df4fb91f7840bec55be0941627cdb8f99a1132377a42f09e11627a42c5d6->enter($__internal_89d1df4fb91f7840bec55be0941627cdb8f99a1132377a42f09e11627a42c5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_89d1df4fb91f7840bec55be0941627cdb8f99a1132377a42f09e11627a42c5d6->leave($__internal_89d1df4fb91f7840bec55be0941627cdb8f99a1132377a42f09e11627a42c5d6_prof);

        
        $__internal_4a906c748f9fdf5f033f4735c7d24bbf58edc5d78d8c11c8b7a09d29394a8dcc->leave($__internal_4a906c748f9fdf5f033f4735c7d24bbf58edc5d78d8c11c8b7a09d29394a8dcc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b256b2beec1371e543802fd727a7b166eadf424b2ed0813275ebbb9c174b5acb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b256b2beec1371e543802fd727a7b166eadf424b2ed0813275ebbb9c174b5acb->enter($__internal_b256b2beec1371e543802fd727a7b166eadf424b2ed0813275ebbb9c174b5acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2f58f892914a236cdd885bcf5b4ac2ad8b318d80c261e67dde0bb036d5d68abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f58f892914a236cdd885bcf5b4ac2ad8b318d80c261e67dde0bb036d5d68abd->enter($__internal_2f58f892914a236cdd885bcf5b4ac2ad8b318d80c261e67dde0bb036d5d68abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2f58f892914a236cdd885bcf5b4ac2ad8b318d80c261e67dde0bb036d5d68abd->leave($__internal_2f58f892914a236cdd885bcf5b4ac2ad8b318d80c261e67dde0bb036d5d68abd_prof);

        
        $__internal_b256b2beec1371e543802fd727a7b166eadf424b2ed0813275ebbb9c174b5acb->leave($__internal_b256b2beec1371e543802fd727a7b166eadf424b2ed0813275ebbb9c174b5acb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/ecom/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
