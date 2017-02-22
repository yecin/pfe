<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_33bc112c755553306500e34f7620a1ad84d11b608f1a2a1a6921e836b0946a32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0edc461bed7b8ac0520785cf34984ffcd1e752ea2d07dedebb78ffed385a0b9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0edc461bed7b8ac0520785cf34984ffcd1e752ea2d07dedebb78ffed385a0b9d->enter($__internal_0edc461bed7b8ac0520785cf34984ffcd1e752ea2d07dedebb78ffed385a0b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_73c90f4423c4f5359ba70f5fff66bcb2583002fd984955e820ef03d2129960ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c90f4423c4f5359ba70f5fff66bcb2583002fd984955e820ef03d2129960ee->enter($__internal_73c90f4423c4f5359ba70f5fff66bcb2583002fd984955e820ef03d2129960ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0edc461bed7b8ac0520785cf34984ffcd1e752ea2d07dedebb78ffed385a0b9d->leave($__internal_0edc461bed7b8ac0520785cf34984ffcd1e752ea2d07dedebb78ffed385a0b9d_prof);

        
        $__internal_73c90f4423c4f5359ba70f5fff66bcb2583002fd984955e820ef03d2129960ee->leave($__internal_73c90f4423c4f5359ba70f5fff66bcb2583002fd984955e820ef03d2129960ee_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f343c3a182bb93b723365b45fc859d972ae56e2bbdfabdafda2d249cfedc89ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f343c3a182bb93b723365b45fc859d972ae56e2bbdfabdafda2d249cfedc89ac->enter($__internal_f343c3a182bb93b723365b45fc859d972ae56e2bbdfabdafda2d249cfedc89ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_824e95da4539b252796c07bb0af875cdcbd3cf69602005aa2b2cedd9a7bd92d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_824e95da4539b252796c07bb0af875cdcbd3cf69602005aa2b2cedd9a7bd92d9->enter($__internal_824e95da4539b252796c07bb0af875cdcbd3cf69602005aa2b2cedd9a7bd92d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_824e95da4539b252796c07bb0af875cdcbd3cf69602005aa2b2cedd9a7bd92d9->leave($__internal_824e95da4539b252796c07bb0af875cdcbd3cf69602005aa2b2cedd9a7bd92d9_prof);

        
        $__internal_f343c3a182bb93b723365b45fc859d972ae56e2bbdfabdafda2d249cfedc89ac->leave($__internal_f343c3a182bb93b723365b45fc859d972ae56e2bbdfabdafda2d249cfedc89ac_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb01ce6a49cd3e881ad5e9ff3bf814c48893b26c2ea4955052acea38f15d5092 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb01ce6a49cd3e881ad5e9ff3bf814c48893b26c2ea4955052acea38f15d5092->enter($__internal_cb01ce6a49cd3e881ad5e9ff3bf814c48893b26c2ea4955052acea38f15d5092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bb35ca06b06869fcc5ded2dc896b60bc4f6555b00bfa7cffa3cfef945bcee560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb35ca06b06869fcc5ded2dc896b60bc4f6555b00bfa7cffa3cfef945bcee560->enter($__internal_bb35ca06b06869fcc5ded2dc896b60bc4f6555b00bfa7cffa3cfef945bcee560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bb35ca06b06869fcc5ded2dc896b60bc4f6555b00bfa7cffa3cfef945bcee560->leave($__internal_bb35ca06b06869fcc5ded2dc896b60bc4f6555b00bfa7cffa3cfef945bcee560_prof);

        
        $__internal_cb01ce6a49cd3e881ad5e9ff3bf814c48893b26c2ea4955052acea38f15d5092->leave($__internal_cb01ce6a49cd3e881ad5e9ff3bf814c48893b26c2ea4955052acea38f15d5092_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5397335a9d52127f32458693d0b58106e1ec604153013f3d794b6ef434968de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5397335a9d52127f32458693d0b58106e1ec604153013f3d794b6ef434968de->enter($__internal_a5397335a9d52127f32458693d0b58106e1ec604153013f3d794b6ef434968de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_72c4a449d49a7e9d55ffedd8edf917c10a8a966ddcfaac2df70a3f89bf097e84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72c4a449d49a7e9d55ffedd8edf917c10a8a966ddcfaac2df70a3f89bf097e84->enter($__internal_72c4a449d49a7e9d55ffedd8edf917c10a8a966ddcfaac2df70a3f89bf097e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_72c4a449d49a7e9d55ffedd8edf917c10a8a966ddcfaac2df70a3f89bf097e84->leave($__internal_72c4a449d49a7e9d55ffedd8edf917c10a8a966ddcfaac2df70a3f89bf097e84_prof);

        
        $__internal_a5397335a9d52127f32458693d0b58106e1ec604153013f3d794b6ef434968de->leave($__internal_a5397335a9d52127f32458693d0b58106e1ec604153013f3d794b6ef434968de_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/ecom/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
