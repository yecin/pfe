<?php

/* BOOccasionBundle:Advert:removead.html.twig */
class __TwigTemplate_76194d5610034883f1911569d758b7da355e20e0c4d0f5266c2afea9cc292253 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "BOOccasionBundle:Advert:removead.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
    Ajouter une annonce
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "

    <script type=\"text/css\">
        #filedrag {
          display: none;
          font-weight: 600;
          text-align: center;
          padding: 25px 0;
          margin: 25px 0;
          color: #f3c500;
          border: 2px dashed #f3c500;
          border-radius: 0px;
          -webkit-border-radius: 0px;
          -moz-border-radius: 0px;
          -ms-border-radius: 0px;
          -o-border-radius: 0px;
          cursor: default;
          font-size: 20px;
        }        
    </script>

    
<!-- Submit Ad -->
<div class=\"submit-ad main-grid-border\">
        <div class=\"container\">
                <h2 class=\"head\">Je publie une annonce - objet d'occasion</h2>
                <div class=\"post-ad-form\">
                        <form>
                                <label>Catégorie <span>*</span></label>
                                <select class=\"\">
                                  <option>Sélectionnez une catégorie</option>
                                  <option>Electroménagers</option>
                                  <option>Mobiles </option>
                                  <option>Bébé & Puériculture</option>
                                  <option>Vêtements</option>
                                  <option>Meubles</option>
                                  <option>Accessoires & Beauté</option>
                                  <option>Livres, Sports & Loisirs</option>
                                  <option>Jardin & Bricolage</option>
                                  <option>Autres</option>
                                </select>
                                <div class=\"clearfix\"></div>
                                <label>Titre de votre annonce <span>*</span></label>
                                <input type=\"text\" class=\"phone\" placeholder=\"\">
                                <div class=\"clearfix\"></div>
                                <label>Texte de votre annonce <span>*</span></label>
                                <textarea class=\"mess\" placeholder=\"Write few lines about your product\"></textarea>
                                <div class=\"clearfix\"></div>
                        <div class=\"upload-ad-photos\">
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
                                        <!--script src=\"js/filedrag.js\"></script-->
                        </div>
                                <div class=\"personal-details\">
                               <label>Nom <span>*</span></label>
                                        <input type=\"text\" class=\"name\" placeholder=\"\">
                                        <div class=\"clearfix\"></div>
                                        <label>Prénom <span>*</span></label>
                                        <input type=\"text\" class=\"name\" placeholder=\"\">
                                        <div class=\"clearfix\"></div>
                                        <div class=\"clearfix\"></div>
                                        <label>Région <span>*</span></label>
                                        <select class=\"\">
                                          <option>Régions</option>
                                            <option >Ariana</option>
                                            <option >Béja</option>
                                            <option >Ben Arous</option>
                                            <option >Bizerte</option>
                                            <option >Gabès</option>
                                            <option >Gafsa</option>
                                            <option >Jendouba</option>
                                            <option >Kairouan</option>
                                            <option >Kasserine</option>
                                            <option >Kébili</option>
                                            <option >Kef</option>
                                            <option >Mahdia</option>
                                            <option >Manouba</option>
                                            <option >Médnine</option>
                                            <option >Monastir</option>
                                            <option >Nabeul</option>
                                            <option >Sfax</option>
                                            <option >Sidi Bouzid</option>
                                            <option >Siliana</option>
                                            <option >Sousse</option>
                                            <option >Tataouine</option>
                                            <option >Tozeur</option>
                                            <option >Tunis</option>                                            
                                            <option >Zaghouane</option>  
                                        </select>
                                        <div class=\"clearfix\"></div>                                  
                                        <label>Téléphone <span>*</span></label>
                                        <input type=\"text\" class=\"phone\" placeholder=\"\">
                                        <div class=\"clearfix\"></div>
                                        <label>E-mail<span>*</span></label>
                                        <input type=\"text\" class=\"email\" placeholder=\"\">
                                        <div class=\"clearfix\"></div>
                                        <p class=\"post-terms\">En cliquant sur  <strong> \"Publier mon annonce\"</strong>  j'accepte la charte du bon annonceur.</p>
                                <input type=\"submit\" value=\"Publier mon annonce\">\t\t\t\t\t
                                <div class=\"clearfix\"></div>
                                </form>
                                </div>
                </div>
        </div>\t
</div>
<!-- // Submit Ad -->   

";
    }

    // line 137
    public function block_footer($context, array $blocks = array())
    {
        echo "    
        

";
    }

    public function getTemplateName()
    {
        return "BOOccasionBundle:Advert:removead.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 137,  44 => 10,  41 => 9,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BOOccasionBundle:Advert:removead.html.twig", "/var/www/html/ecom/src/BO/OccasionBundle/Resources/views/Advert/removead.html.twig");
    }
}
