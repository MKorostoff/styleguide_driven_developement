<?php

/* modules/demo_footer/templates/demo_footer.html.twig */
class __TwigTemplate_fa5f8d5549eef608f66a91e2ef294eebc460744a91b8a8453180339ae24b4dc3 extends Twig_Template
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
        $tags = array("for" => 10);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<footer class=\"footer-distributed\">

    <div class=\"footer-left\">

        <h3>Company<span>logo</span></h3>

        <p class=\"footer-links\">

        </p>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 11
            echo "            ";
            // line 12
            echo "            <a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["link"], "url", array()), "uri", array()), "html", null, true));
            echo "\">foo</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
        <p class=\"footer-company-name\">Company Name &copy; 2015</p>
    </div>

    <div class=\"footer-center\">

        <div>
            <i class=\"fa fa-map-marker\"></i>
            <p><span>21 Revolution Street</span> Paris, France</p>
        </div>

        <div>
            <i class=\"fa fa-phone\"></i>
            <p>+1 555 123456</p>
        </div>

        <div>
            <i class=\"fa fa-envelope\"></i>
            <p><a href=\"mailto:support@company.com\">support@company.com</a></p>
        </div>

    </div>

    <div class=\"footer-right\">

        <p class=\"footer-company-about\">
            <span>About the company</span>
            Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
        </p>

        <div class=\"footer-icons\">

            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
            <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
            <a href=\"#\"><i class=\"fa fa-github\"></i></a>

        </div>

    </div>

</footer>";
    }

    public function getTemplateName()
    {
        return "modules/demo_footer/templates/demo_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 14,  60 => 12,  58 => 11,  54 => 10,  43 => 1,);
    }
}
/* <footer class="footer-distributed">*/
/* */
/*     <div class="footer-left">*/
/* */
/*         <h3>Company<span>logo</span></h3>*/
/* */
/*         <p class="footer-links">*/
/* */
/*         </p>*/
/*         {% for link in links%}*/
/*             {#{{ dump(link) }}#}*/
/*             <a href="{{ link.url.uri }}">foo</a>*/
/*         {% endfor %}*/
/* */
/*         <p class="footer-company-name">Company Name &copy; 2015</p>*/
/*     </div>*/
/* */
/*     <div class="footer-center">*/
/* */
/*         <div>*/
/*             <i class="fa fa-map-marker"></i>*/
/*             <p><span>21 Revolution Street</span> Paris, France</p>*/
/*         </div>*/
/* */
/*         <div>*/
/*             <i class="fa fa-phone"></i>*/
/*             <p>+1 555 123456</p>*/
/*         </div>*/
/* */
/*         <div>*/
/*             <i class="fa fa-envelope"></i>*/
/*             <p><a href="mailto:support@company.com">support@company.com</a></p>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/*     <div class="footer-right">*/
/* */
/*         <p class="footer-company-about">*/
/*             <span>About the company</span>*/
/*             Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.*/
/*         </p>*/
/* */
/*         <div class="footer-icons">*/
/* */
/*             <a href="#"><i class="fa fa-facebook"></i></a>*/
/*             <a href="#"><i class="fa fa-twitter"></i></a>*/
/*             <a href="#"><i class="fa fa-linkedin"></i></a>*/
/*             <a href="#"><i class="fa fa-github"></i></a>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/* </footer>*/
