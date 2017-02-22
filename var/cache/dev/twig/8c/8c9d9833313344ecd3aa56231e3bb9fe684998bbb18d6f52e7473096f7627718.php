<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b6accece8157d65efe15f4b3f71f5e5348c4732629cefe7dc0fa403274b137ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_37b2a0c0361ab099fbe40007c081966fd808904eaee3d4652eb164672eb7ffe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37b2a0c0361ab099fbe40007c081966fd808904eaee3d4652eb164672eb7ffe5->enter($__internal_37b2a0c0361ab099fbe40007c081966fd808904eaee3d4652eb164672eb7ffe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5b29b9ab5d5621faa08592effcf72244ad8f36f4dd7bb4e5b2e0b91a07edac08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b29b9ab5d5621faa08592effcf72244ad8f36f4dd7bb4e5b2e0b91a07edac08->enter($__internal_5b29b9ab5d5621faa08592effcf72244ad8f36f4dd7bb4e5b2e0b91a07edac08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37b2a0c0361ab099fbe40007c081966fd808904eaee3d4652eb164672eb7ffe5->leave($__internal_37b2a0c0361ab099fbe40007c081966fd808904eaee3d4652eb164672eb7ffe5_prof);

        
        $__internal_5b29b9ab5d5621faa08592effcf72244ad8f36f4dd7bb4e5b2e0b91a07edac08->leave($__internal_5b29b9ab5d5621faa08592effcf72244ad8f36f4dd7bb4e5b2e0b91a07edac08_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a136e236c7284e34f8e66e63cc49dd5bee07492c66a6c887dd6326090491f3b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a136e236c7284e34f8e66e63cc49dd5bee07492c66a6c887dd6326090491f3b0->enter($__internal_a136e236c7284e34f8e66e63cc49dd5bee07492c66a6c887dd6326090491f3b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ededb4ff296a9b8ae4ac263cc8d7a48245fd30b4535f0d7ffaac4fb750788f79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ededb4ff296a9b8ae4ac263cc8d7a48245fd30b4535f0d7ffaac4fb750788f79->enter($__internal_ededb4ff296a9b8ae4ac263cc8d7a48245fd30b4535f0d7ffaac4fb750788f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ededb4ff296a9b8ae4ac263cc8d7a48245fd30b4535f0d7ffaac4fb750788f79->leave($__internal_ededb4ff296a9b8ae4ac263cc8d7a48245fd30b4535f0d7ffaac4fb750788f79_prof);

        
        $__internal_a136e236c7284e34f8e66e63cc49dd5bee07492c66a6c887dd6326090491f3b0->leave($__internal_a136e236c7284e34f8e66e63cc49dd5bee07492c66a6c887dd6326090491f3b0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8e880c0ea97063e153e26ddb379edb423133c79b36657a9851fb86909eb19058 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e880c0ea97063e153e26ddb379edb423133c79b36657a9851fb86909eb19058->enter($__internal_8e880c0ea97063e153e26ddb379edb423133c79b36657a9851fb86909eb19058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2e2d9c4b4e7eb3a6698d44bf5af1dff0ae9983e1248fb68fe625cce100917796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e2d9c4b4e7eb3a6698d44bf5af1dff0ae9983e1248fb68fe625cce100917796->enter($__internal_2e2d9c4b4e7eb3a6698d44bf5af1dff0ae9983e1248fb68fe625cce100917796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_2e2d9c4b4e7eb3a6698d44bf5af1dff0ae9983e1248fb68fe625cce100917796->leave($__internal_2e2d9c4b4e7eb3a6698d44bf5af1dff0ae9983e1248fb68fe625cce100917796_prof);

        
        $__internal_8e880c0ea97063e153e26ddb379edb423133c79b36657a9851fb86909eb19058->leave($__internal_8e880c0ea97063e153e26ddb379edb423133c79b36657a9851fb86909eb19058_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0021cd2ac76f09303e93f337d7305d8191769d4924272f26734afecd72ff966f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0021cd2ac76f09303e93f337d7305d8191769d4924272f26734afecd72ff966f->enter($__internal_0021cd2ac76f09303e93f337d7305d8191769d4924272f26734afecd72ff966f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_092583641ad7ead90b365cd752abbeb3fa432094507466b677d73f47f9629309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_092583641ad7ead90b365cd752abbeb3fa432094507466b677d73f47f9629309->enter($__internal_092583641ad7ead90b365cd752abbeb3fa432094507466b677d73f47f9629309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_092583641ad7ead90b365cd752abbeb3fa432094507466b677d73f47f9629309->leave($__internal_092583641ad7ead90b365cd752abbeb3fa432094507466b677d73f47f9629309_prof);

        
        $__internal_0021cd2ac76f09303e93f337d7305d8191769d4924272f26734afecd72ff966f->leave($__internal_0021cd2ac76f09303e93f337d7305d8191769d4924272f26734afecd72ff966f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/ecom/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
