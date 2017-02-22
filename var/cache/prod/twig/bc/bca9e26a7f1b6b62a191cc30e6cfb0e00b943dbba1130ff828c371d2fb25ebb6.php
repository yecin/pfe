<?php

/* BOOccasionBundle:Advert:category.html.twig */
class __TwigTemplate_147d3023f1480ab6f61daf25cb14c33f783d0d28367166a15cfec14313580edc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "BOOccasionBundle:Advert:category.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
    Liste des débarras
";
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "

    
";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        echo "  
\t<!-- Mobiles -->
\t<div class=\"total-ads main-grid-border\">
\t\t<div class=\"container\">
\t\t\t<div class=\"select-box\">
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t\t<ol class=\"breadcrumb\" style=\"margin-bottom: 5px;\">
\t\t\t  <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bo_occasion_home");
        echo "\">Accueil</a></li>
\t\t\t  <!--li><a href=\"categories.html\">Categories</a></li-->
\t\t\t  <li class=\"active\">";
        // line 24
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "category"), "method")), "html", null, true);
        echo " </li>
\t\t\t</ol>
\t\t\t<div class=\"ads-grid\">
\t\t\t\t<div class=\"side-bar col-md-3\">
\t\t\t\t\t<div class=\"search-hotel\">
\t\t\t\t\t<h3 class=\"sear-head\">Recherche</h3>
\t\t\t\t\t<form>
\t\t\t\t\t\t<input type=\"text\" value=\"Nom du produit...\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'PNom du produit...';}\" required=\"\">
\t\t\t\t\t\t<input type=\"submit\" value=\" \">
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"range\">
\t\t\t\t\t<h3 class=\"sear-head\">Prix</h3>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu6\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t                
\t\t\t\t\t\t\t\t\t<div id=\"slider-range\"></div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"amount\" style=\"border: 0; color: #ffffff; font-weight: normal;\" />
\t\t\t\t\t\t\t\t\t</li>\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<!---->
\t\t\t\t\t\t\t<script type=\"text/javascript\" src=\"js/jquery-ui.js\"></script>
\t\t\t\t\t\t\t<script type='text/javascript'>//<![CDATA[ 
\t\t\t\t\t\t\t\$(window).load(function(){
\t\t\t\t\t\t\t \$( \"#slider-range\" ).slider({
\t\t\t\t\t\t\t\t\t\trange: true,
\t\t\t\t\t\t\t\t\t\tmin: 0,
\t\t\t\t\t\t\t\t\t\tmax: 9000,
\t\t\t\t\t\t\t\t\t\tvalues: [ 50, 6000 ],
\t\t\t\t\t\t\t\t\t\tslide: function( event, ui ) {  \$( \"#amount\" ).val( \"\$\" + ui.values[ 0 ] + \" - \$\" + ui.values[ 1 ] );
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t });
\t\t\t\t\t\t\t\$( \"#amount\" ).val( \"\$\" + \$( \"#slider-range\" ).slider( \"values\", 0 ) + \" - \$\" + \$( \"#slider-range\" ).slider( \"values\", 1 ) );

\t\t\t\t\t\t\t});//]]>  

\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"brand-select\">
\t\t\t\t\t<h3 class=\"sear-head\">Marque</h3>
\t\t\t\t\t  <select class=\"selectpicker\" data-live-search=\"true\">
\t\t\t\t\t  <option data-tokens=\"All\">Tous</option>
\t\t\t\t\t  <option data-tokens=\"Asus\">Asus</option>
\t\t\t\t\t  <option data-tokens=\"Black Berry\">Black Berry</option>
\t\t\t\t\t  <option data-tokens=\"HTC\">HTC</option>
\t\t\t\t\t  <option data-tokens=\"Intex\">Intex</option>
\t\t\t\t\t  <option data-tokens=\"iPhone\">iPhone</option>
\t\t\t\t\t  <option data-tokens=\"Karbonn\">Karbonn</option>
\t\t\t\t\t  <option data-tokens=\"Lava\">Lava</option>
\t\t\t\t\t  <option data-tokens=\"Lenovo\">Lenovo</option>
\t\t\t\t\t  <option data-tokens=\"LG\">LG</option>
\t\t\t\t\t  <option data-tokens=\"Mi\">Mi</option>
\t\t\t\t\t  <option data-tokens=\"Micromax\">Micromax</option>
\t\t\t\t\t  <option data-tokens=\"Motorola\">Motorola</option>
\t\t\t\t\t  <option data-tokens=\"Nokia\">Nokia</option>
\t\t\t\t\t  <option data-tokens=\"Samsung\">Samsung</option>
\t\t\t\t\t  <option data-tokens=\"Sony\">Sony</option>
\t\t\t\t\t  <option data-tokens=\"Other Mobiles\">Other Mobiles</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
                                    
\t\t\t\t</div>
\t\t\t\t<div class=\"ads-display col-md-9\">
\t\t\t\t\t<div class=\"wrapper\">\t\t\t\t\t
\t\t\t\t\t<div class=\"bs-example bs-example-tabs\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
\t\t\t\t\t  <div id=\"myTabContent\" class=\"tab-content\">
\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade in active\" id=\"home\" aria-labelledby=\"home-tab\">
\t\t\t\t\t\t   <div>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"container\">
\t\t\t\t\t\t\t\t<div class=\"view-controls-list\" id=\"viewcontrols\">
\t\t\t\t\t\t\t\t\t<label>vue :</label>
\t\t\t\t\t\t\t\t\t<a class=\"gridview\"><i class=\"glyphicon glyphicon-th\"></i></a>
\t\t\t\t\t\t\t\t\t<a class=\"listview active\"><i class=\"glyphicon glyphicon-th-list\"></i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"sort\">
\t\t\t\t\t\t\t\t   <div class=\"sort-by\">
\t\t\t\t\t\t\t\t\t\t<label>Trié par : </label>
\t\t\t\t\t\t\t\t\t\t<select>
                                                                                        <option value=\"\">Plus Récent1</option>
                                                                                        <option value=\"\">Prix : de - vers +</option>
                                                                                        <option value=\"\">Prix : de + vers -</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t<ul class=\"list\">
                                                            ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list_ad"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 113
            echo "\t\t\t\t\t\t\t\t<a href=\"show/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<img 
                                                                                src=\"";
            // line 116
            echo "\"
                                                                                alt=\"";
            // line 117
            echo "\"
                                                                                title=\"\" alt=\"\" />
\t\t\t\t\t\t\t\t\t<section class=\"list-left\">
\t\t\t\t\t\t\t\t\t<h5 class=\"title\">";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "title", array()), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t\t<span class=\"adprice\">";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "price", array()), "html", null, true);
            echo " DT</span>
\t\t\t\t\t\t\t\t\t<p class=\"catpath\">";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "category"), "method"), "html", null, true);
            echo " » ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "brand", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t<section class=\"list-right\">
\t\t\t\t\t\t\t\t\t<span class=\"date\">";
            // line 125
            if ((twig_date_format_filter($this->env, "now", "d/m/Y") == twig_date_format_filter($this->env, $this->getAttribute($context["ad"], "datecreate", array()), "d/m/Y"))) {
                echo "Aujourdhui, ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ad"], "datecreate", array()), "H:i"), "html", null, true);
                echo "
                                                                        ";
            } else {
                // line 126
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ad"], "datecreate", array()), "d/m/Y  H:i"), "html", null, true);
                echo " ";
            }
            echo " </span>
\t\t\t\t\t\t\t\t\t<span class=\"cityname\">";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["ad"], "customer", array()), "governate", array()), "name", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t\t</li> 
\t\t\t\t\t\t\t\t</a>
                                                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 133
            echo "                                                            <li>Pas d'annonces trouvées.</li>            
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"profile\" aria-labelledby=\"profile-tab\">
\t\t\t\t\t\t <div>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"container\">
\t\t\t\t\t\t\t\t<div class=\"view-controls-list\" id=\"viewcontrols\">
\t\t\t\t\t\t\t\t\t<label>Vue :</label>
\t\t\t\t\t\t\t\t\t<a class=\"gridview\"><i class=\"glyphicon glyphicon-th\"></i></a>
\t\t\t\t\t\t\t\t\t<a class=\"listview active\"><i class=\"glyphicon glyphicon-th-list\"></i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"sort\">
\t\t\t\t\t\t\t\t   <div class=\"sort-by\">
\t\t\t\t\t\t\t\t\t\t<label>Trier par : </label>
\t\t\t\t\t\t\t\t\t\t<select>
                                                                                        <option value=\"\">Plus Récent2</option>
                                                                                        <option value=\"\">Prix : de - vers +</option>
                                                                                        <option value=\"\">Prix : de + vers -</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t<ul class=\"list\">
\t\t\t\t\t\t\t\t<a href=\"single.html\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<img src=\"images/m1.jpg\" title=\"\" alt=\"\" />
\t\t\t\t\t\t\t\t\t<section class=\"list-left\">
\t\t\t\t\t\t\t\t\t<h5 class=\"title\">There are many variations of passages of Lorem Ipsum</h5>
\t\t\t\t\t\t\t\t\t<span class=\"adprice\">\$290</span>
\t\t\t\t\t\t\t\t\t<p class=\"catpath\">Mobile Phones » Brand</p>
\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t<section class=\"list-right\">
\t\t\t\t\t\t\t\t\t<span class=\"date\">Today, 17:55</span>
\t\t\t\t\t\t\t\t\t<span class=\"cityname\">City name</span>
\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t\t</li> 
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade\" id=\"samsa\" aria-labelledby=\"samsa-tab\">
\t\t\t\t\t\t  <div>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"container\">
\t\t\t\t\t\t\t\t<div class=\"view-controls-list\" id=\"viewcontrols\">
\t\t\t\t\t\t\t\t\t<label>Vue :</label>
\t\t\t\t\t\t\t\t\t<a class=\"gridview\"><i class=\"glyphicon glyphicon-th\"></i></a>
\t\t\t\t\t\t\t\t\t<a class=\"listview active\"><i class=\"glyphicon glyphicon-th-list\"></i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"sort\">
\t\t\t\t\t\t\t\t   <div class=\"sort-by\">
\t\t\t\t\t\t\t\t\t\t<label>Trier par : </label>
\t\t\t\t\t\t\t\t\t\t<select>
                                                                                        <option value=\"\">Plus récent3</option>
                                                                                        <option value=\"\">Prix : de - vers +</option>
                                                                                        <option value=\"\">Prix : de + vers -</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t<ul class=\"list\">
\t\t\t\t\t\t\t\t<a href=\"single.html\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<img src=\"images/m1.jpg\" title=\"\" alt=\"\" />
\t\t\t\t\t\t\t\t\t<section class=\"list-left\">
\t\t\t\t\t\t\t\t\t<h5 class=\"title\">There are many variations of passages of Lorem Ipsum</h5>
\t\t\t\t\t\t\t\t\t<span class=\"adprice\">\$290</span>
\t\t\t\t\t\t\t\t\t<p class=\"catpath\">Mobile Phones » Brand</p>
\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t<section class=\"list-right\">
\t\t\t\t\t\t\t\t\t<span class=\"date\">Today, 17:55</span>
\t\t\t\t\t\t\t\t\t<span class=\"cityname\">City name</span>
\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t\t</li> 
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"pagination pagination-sm\">
\t\t\t\t\t\t\t<li><a href=\"#\">Prev</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">1</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">2</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">3</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Next</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t</div>\t
\t</div>
\t<!-- // Mobiles -->  

";
    }

    public function getTemplateName()
    {
        return "BOOccasionBundle:Advert:category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 135,  222 => 133,  211 => 127,  204 => 126,  197 => 125,  189 => 122,  185 => 121,  181 => 120,  176 => 117,  173 => 116,  166 => 113,  161 => 112,  70 => 24,  65 => 22,  53 => 14,  44 => 8,  41 => 7,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BOOccasionBundle:Advert:category.html.twig", "/var/www/html/ecom/src/BO/OccasionBundle/Resources/views/Advert/category.html.twig");
    }
}
