<?php

/* BOOccasionBundle:Advert:add.html.twig */
class __TwigTemplate_8e4d8a52a414a3a03fe7a276fe5494ede09d461694460543994499ca9cffb08a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "BOOccasionBundle:Advert:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f0fc813552185be8f114f5b2b6bcbdb47f07caf09ce467d5572bbab009e0fef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f0fc813552185be8f114f5b2b6bcbdb47f07caf09ce467d5572bbab009e0fef->enter($__internal_3f0fc813552185be8f114f5b2b6bcbdb47f07caf09ce467d5572bbab009e0fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BOOccasionBundle:Advert:add.html.twig"));

        $__internal_d34e01fc0fdd0c9ea369f20468b4d8a3697b50982c89e015917c97f51f60f7f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d34e01fc0fdd0c9ea369f20468b4d8a3697b50982c89e015917c97f51f60f7f8->enter($__internal_d34e01fc0fdd0c9ea369f20468b4d8a3697b50982c89e015917c97f51f60f7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BOOccasionBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f0fc813552185be8f114f5b2b6bcbdb47f07caf09ce467d5572bbab009e0fef->leave($__internal_3f0fc813552185be8f114f5b2b6bcbdb47f07caf09ce467d5572bbab009e0fef_prof);

        
        $__internal_d34e01fc0fdd0c9ea369f20468b4d8a3697b50982c89e015917c97f51f60f7f8->leave($__internal_d34e01fc0fdd0c9ea369f20468b4d8a3697b50982c89e015917c97f51f60f7f8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d6f5993297cb6a678cce737194087b0d911fddd2fd38b2a76b504815aa6c88f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d6f5993297cb6a678cce737194087b0d911fddd2fd38b2a76b504815aa6c88f->enter($__internal_8d6f5993297cb6a678cce737194087b0d911fddd2fd38b2a76b504815aa6c88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_12fdd76ca3d6333e5deb77cecb3e36e4dc62a59ca8e44517ba54efb75848c93e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12fdd76ca3d6333e5deb77cecb3e36e4dc62a59ca8e44517ba54efb75848c93e->enter($__internal_12fdd76ca3d6333e5deb77cecb3e36e4dc62a59ca8e44517ba54efb75848c93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
    Ajouter une annonce
";
        
        $__internal_12fdd76ca3d6333e5deb77cecb3e36e4dc62a59ca8e44517ba54efb75848c93e->leave($__internal_12fdd76ca3d6333e5deb77cecb3e36e4dc62a59ca8e44517ba54efb75848c93e_prof);

        
        $__internal_8d6f5993297cb6a678cce737194087b0d911fddd2fd38b2a76b504815aa6c88f->leave($__internal_8d6f5993297cb6a678cce737194087b0d911fddd2fd38b2a76b504815aa6c88f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4750ca6f2d24ef09a9e186f2e112630e7f5e08f2b42ca1fcdd0d409d6c4b5b66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4750ca6f2d24ef09a9e186f2e112630e7f5e08f2b42ca1fcdd0d409d6c4b5b66->enter($__internal_4750ca6f2d24ef09a9e186f2e112630e7f5e08f2b42ca1fcdd0d409d6c4b5b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b8bb15a12e4ebfe7143f4bb98b4eab3af35af3ef10b4062a7b7cdca746c29252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8bb15a12e4ebfe7143f4bb98b4eab3af35af3ef10b4062a7b7cdca746c29252->enter($__internal_b8bb15a12e4ebfe7143f4bb98b4eab3af35af3ef10b4062a7b7cdca746c29252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    
<!-- Submit Ad -->
<div class=\"submit-ad main-grid-border\">
        <div class=\"container\">
                <h2 class=\"head\">Je publie une annonce - objet d'occasion</h2>
                <div class=\"post-ad-form\">
                        ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
                                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "category", array()), 'label', array("label" => "Catégorie"));
        echo "
                                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "category", array()), 'widget');
        echo "
                                <div class=\"clearfix\"></div>
                                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "phone"), "label" => "Titre"));
        echo "
                                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "phone")));
        echo "
                                <div class=\"clearfix\"></div>
                                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "phone"), "label" => "Description"));
        echo "
                                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "mess")));
        echo "
                                <div class=\"clearfix\"></div>
                                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "price", array()), 'label', array("label_attr" => array("class" => "phone"), "label" => "Prix"));
        echo "
                                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "price", array()), 'widget', array("attr" => array("class" => "phone")));
        echo "
                                <div class=\"clearfix\"></div>
                                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "brand", array()), 'label', array("label_attr" => array("class" => "name"), "label" => "Marque"));
        echo "
                                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "brand", array()), 'widget', array("attr" => array("class" => "name", "placeholder" => "Marque(s)")));
        echo "
                                <div class=\"clearfix\"></div>
                                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "state", array()), 'label', array("label_attr" => array("class" => "name"), "label" => "Etat"));
        echo "
                                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "state", array()), 'widget');
        echo "
                                <div class=\"clearfix\"></div>
                                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "published", array()), 'label', array("label_attr" => array("class" => "name"), "label" => "Publier"));
        echo "
                                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "published", array()), 'widget');
        echo "
                                <div class=\"clearfix\"></div>
                                
                        <div class=\"upload-ad-photos\">
                                ";
        // line 43
        echo "                                <!--div class=\"photos-upload-view\">
                                    ";
        // line 45
        echo "                                    <form id=\"upload\" action=\"index.html\" method=\"POST\" enctype=\"multipart/form-data\">
                                    <input type=\"hidden\" id=\"MAX_FILE_SIZE\" name=\"MAX_FILE_SIZE\" value=\"300000\" />
                                    ";
        // line 48
        echo "                                    ";
        // line 49
        echo "                                    </form>
                                </div-->
                        <!--
                        <label>Ajoutez vos photos d'annonce :</label>\t
                                    <div class=\"photos-upload-view\">
                                        <form id=\"upload\" action=\"index.html\" method=\"POST\" enctype=\"multipart/form-data\">
                                        <input type=\"hidden\" id=\"MAX_FILE_SIZE\" name=\"MAX_FILE_SIZE\" value=\"300000\" />
                                        <div>
                                                <input type=\"file\" id=\"fileselect\" name=\"fileselect[]\" multiple=\"multiple\" />
                                                <div id=\"filedrag\">or drop files here</div>
                                        </div>
                                        <div id=\"submitbutton\">
                                                <button type=\"submit\">Upload Files</button>
                                        </div>
                                        </form>
                                        <div id=\"messages\">
                                        <p>Status Messages</p>
                                        </div>
                                    </div>
                                <div class=\"clearfix\"></div>
                        -->!!!
                        </div>
                                <div class=\"personal-details\">
                                    ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "customer", array()), "lnamecust", array()), 'label', array("label_attr" => array("class" => "phone"), "label" => "Nom"));
        echo "
                                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "customer", array()), "lnamecust", array()), 'widget', array("attr" => array("class" => "name")));
        echo "
                                        <div class=\"clearfix\"></div>
                                    ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "customer", array()), "fnamecust", array()), 'label', array("label_attr" => array("class" => "phone"), "label" => "Prénom"));
        echo "
                                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "customer", array()), "fnamecust", array()), 'widget', array("attr" => array("class" => "name")));
        echo "
                                        <div class=\"clearfix\"></div>
                                        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "customer", array()), "governate", array()), 'label', array("label" => "Region"));
        echo "
                                        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "customer", array()), "governate", array()), 'widget');
        echo "                                        
                                        <div class=\"clearfix\"></div>
                                    ";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "customer", array()), "telcust", array()), 'label', array("label" => "Téléphone"));
        echo "
                                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "customer", array()), "telcust", array()), 'widget', array("attr" => array("class" => "phone")));
        echo "
                                    <div class=\"clearfix\"></div>
                                    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "showphone", array()), 'label', array("label_attr" => array("class" => "name"), "label" => "Afficher le numéro"));
        echo "
                                    ";
        // line 85
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "showphone", array()), 'widget');
        echo "
                                    <div class=\"clearfix\"></div>
                                    ";
        // line 88
        echo "                                    ";
        // line 89
        echo "                                        <div class=\"clearfix\"></div>
                                        <p class=\"post-terms\">En cliquant sur  <strong> \"Publier mon annonce\"</strong>  j'accepte la charte du bon annonceur.</p>
                                    ";
        // line 91
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("value" => "Publier mon annonce")));
        echo "
                                        <!--input type=\"submit\" value=\"Publier mon annonce\"-->
                                <div class=\"clearfix\"></div>
                                ";
        // line 94
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
                                ";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["form"] ?? $this->getContext($context, "form")));
        echo "
                                ";
        // line 96
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                                </div>
                </div>
        </div>\t
</div>
<!-- // Submit Ad -->   
";
        
        $__internal_b8bb15a12e4ebfe7143f4bb98b4eab3af35af3ef10b4062a7b7cdca746c29252->leave($__internal_b8bb15a12e4ebfe7143f4bb98b4eab3af35af3ef10b4062a7b7cdca746c29252_prof);

        
        $__internal_4750ca6f2d24ef09a9e186f2e112630e7f5e08f2b42ca1fcdd0d409d6c4b5b66->leave($__internal_4750ca6f2d24ef09a9e186f2e112630e7f5e08f2b42ca1fcdd0d409d6c4b5b66_prof);

    }

    // line 103
    public function block_footer($context, array $blocks = array())
    {
        $__internal_03a3756a299657f11097323791682ad523452814f861abfe4f8da1374c6f11c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03a3756a299657f11097323791682ad523452814f861abfe4f8da1374c6f11c3->enter($__internal_03a3756a299657f11097323791682ad523452814f861abfe4f8da1374c6f11c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_a646b09a82561b85841f1052d5ffe788e910844fe4127623f386fdd6a1e7185d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a646b09a82561b85841f1052d5ffe788e910844fe4127623f386fdd6a1e7185d->enter($__internal_a646b09a82561b85841f1052d5ffe788e910844fe4127623f386fdd6a1e7185d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo "    
        

";
        
        $__internal_a646b09a82561b85841f1052d5ffe788e910844fe4127623f386fdd6a1e7185d->leave($__internal_a646b09a82561b85841f1052d5ffe788e910844fe4127623f386fdd6a1e7185d_prof);

        
        $__internal_03a3756a299657f11097323791682ad523452814f861abfe4f8da1374c6f11c3->leave($__internal_03a3756a299657f11097323791682ad523452814f861abfe4f8da1374c6f11c3_prof);

    }

    public function getTemplateName()
    {
        return "BOOccasionBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 103,  255 => 96,  251 => 95,  247 => 94,  241 => 91,  237 => 89,  235 => 88,  230 => 85,  226 => 84,  221 => 82,  217 => 81,  212 => 79,  208 => 78,  203 => 76,  199 => 75,  194 => 73,  190 => 72,  165 => 49,  163 => 48,  159 => 45,  156 => 43,  149 => 38,  145 => 37,  140 => 35,  136 => 34,  131 => 32,  127 => 31,  122 => 29,  118 => 28,  113 => 26,  109 => 25,  104 => 23,  100 => 22,  95 => 20,  91 => 19,  87 => 18,  83 => 17,  74 => 10,  65 => 9,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}

{% block title %}
    {{ parent() }} 
    Ajouter une annonce
{% endblock %}


{% block body %}

    
<!-- Submit Ad -->
<div class=\"submit-ad main-grid-border\">
        <div class=\"container\">
                <h2 class=\"head\">Je publie une annonce - objet d'occasion</h2>
                <div class=\"post-ad-form\">
                        {{ form_start(form) }}
                                {{ form_errors(form) }}
                                {{ form_label(form.category, 'Catégorie') }}
                                {{ form_widget(form.category) }}
                                <div class=\"clearfix\"></div>
                                {{ form_label(form.title, 'Titre', {'label_attr': {'class': 'phone'}}) }}
                                {{ form_widget( form.title, { 'attr' : {'class' : 'phone'}} ) }}
                                <div class=\"clearfix\"></div>
                                {{ form_label(form.content, 'Description', {'label_attr': {'class': 'phone'}}) }}
                                {{ form_widget( form.content, { 'attr' : {'class' : 'mess'}} ) }}
                                <div class=\"clearfix\"></div>
                                {{ form_label(form.price, 'Prix', {'label_attr': {'class': 'phone'}}) }}
                                {{ form_widget( form.price, { 'attr' : {'class' : 'phone'}} ) }}
                                <div class=\"clearfix\"></div>
                                {{ form_label(form.brand, 'Marque', {'label_attr': {'class': 'name'}}) }}
                                {{ form_widget( form.brand, { 'attr' : {'class' : 'name', 'placeholder':'Marque(s)'}} ) }}
                                <div class=\"clearfix\"></div>
                                {{ form_label(form.state, 'Etat', {'label_attr': {'class': 'name'}}) }}
                                {{ form_widget( form.state ) }}
                                <div class=\"clearfix\"></div>
                                {{ form_label(form.published, 'Publier', {'label_attr': {'class': 'name'}}) }}
                                {{ form_widget( form.published ) }}
                                <div class=\"clearfix\"></div>
                                
                        <div class=\"upload-ad-photos\">
                                {#{ form_label(form.picture, 'Ajoutez vos photos', {'label_attr': {'class': ''} }) }#}
                                <!--div class=\"photos-upload-view\">
                                    {#{ form_start(upload) }#}
                                    <form id=\"upload\" action=\"index.html\" method=\"POST\" enctype=\"multipart/form-data\">
                                    <input type=\"hidden\" id=\"MAX_FILE_SIZE\" name=\"MAX_FILE_SIZE\" value=\"300000\" />
                                    {#{ form_widget( form.picture, { 'attr' : {'class' : 'name'} } ) }#}
                                    {#{ form_end(upload) }#}
                                    </form>
                                </div-->
                        <!--
                        <label>Ajoutez vos photos d'annonce :</label>\t
                                    <div class=\"photos-upload-view\">
                                        <form id=\"upload\" action=\"index.html\" method=\"POST\" enctype=\"multipart/form-data\">
                                        <input type=\"hidden\" id=\"MAX_FILE_SIZE\" name=\"MAX_FILE_SIZE\" value=\"300000\" />
                                        <div>
                                                <input type=\"file\" id=\"fileselect\" name=\"fileselect[]\" multiple=\"multiple\" />
                                                <div id=\"filedrag\">or drop files here</div>
                                        </div>
                                        <div id=\"submitbutton\">
                                                <button type=\"submit\">Upload Files</button>
                                        </div>
                                        </form>
                                        <div id=\"messages\">
                                        <p>Status Messages</p>
                                        </div>
                                    </div>
                                <div class=\"clearfix\"></div>
                        -->!!!
                        </div>
                                <div class=\"personal-details\">
                                    {{ form_label(form.customer.lnamecust, 'Nom', {'label_attr': {'class': 'phone'}}) }}
                                    {{ form_widget( form.customer.lnamecust, { 'attr' : {'class' : 'name'}} ) }}
                                        <div class=\"clearfix\"></div>
                                    {{ form_label(form.customer.fnamecust, 'Prénom', {'label_attr': {'class': 'phone'}}) }}
                                    {{ form_widget( form.customer.fnamecust, { 'attr' : {'class' : 'name'}} ) }}
                                        <div class=\"clearfix\"></div>
                                        {{ form_label(form.customer.governate, 'Region') }}
                                        {{ form_widget(form.customer.governate) }}                                        
                                        <div class=\"clearfix\"></div>
                                    {{ form_label(form.customer.telcust, 'Téléphone') }}
                                    {{ form_widget( form.customer.telcust, { 'attr' : {'class' : 'phone'}} ) }}
                                    <div class=\"clearfix\"></div>
                                    {{ form_label(form.showphone, 'Afficher le numéro', {'label_attr': {'class': 'name'}}) }}
                                    {{ form_widget( form.showphone ) }}
                                    <div class=\"clearfix\"></div>
                                    {#{ form_label(form.account.email, 'E-mail') }#}
                                    {#{ form_widget( form.account.email, { 'attr' : {'class' : 'email'}} ) }#}
                                        <div class=\"clearfix\"></div>
                                        <p class=\"post-terms\">En cliquant sur  <strong> \"Publier mon annonce\"</strong>  j'accepte la charte du bon annonceur.</p>
                                    {{ form_widget( form.save, { 'attr' : {'value' : 'Publier mon annonce'}} ) }}
                                        <!--input type=\"submit\" value=\"Publier mon annonce\"-->
                                <div class=\"clearfix\"></div>
                                {{ form_rest(form) }}
                                {{dump(form)}}
                                {{ form_end(form) }}
                                </div>
                </div>
        </div>\t
</div>
<!-- // Submit Ad -->   
{% endblock %}
{% block footer %}    
        

{% endblock %}
", "BOOccasionBundle:Advert:add.html.twig", "/var/www/html/ecom/src/BO/OccasionBundle/Resources/views/Advert/add.html.twig");
    }
}
