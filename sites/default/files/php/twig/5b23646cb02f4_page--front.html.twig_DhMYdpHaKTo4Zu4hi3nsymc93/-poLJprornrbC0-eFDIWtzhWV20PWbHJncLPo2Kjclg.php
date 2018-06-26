<?php

/* themes/custom/custom_theme/templates/page--front.html.twig */
class __TwigTemplate_20e7e8f2d6c5bbe87e6382502547b847aa75a540d7691d91c5eb420c95b6c4b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("page.html.twig", "themes/custom/custom_theme/templates/page--front.html.twig", 1);
        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 3, "if" => 5, "block" => 39, "include" => 58);
        $filters = array("clean_class" => 11);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block', 'include'),
                array('clean_class'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 3
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 5
        if ($this->getAttribute(($context["page"] ?? null), "navigation", array())) {
        }
        // line 67
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_navbar($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        // line 8
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 10
($context["theme"] ?? null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 11
($context["theme"] ?? null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "navbar_position", array())))) : (($context["container"] ?? null))));
        // line 14
        echo "    <header";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", array(0 => ($context["navbar_classes"] ?? null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 15
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => ($context["container"] ?? null)), "method")) {
            // line 16
            echo "        <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo "\">
      ";
        }
        // line 18
        echo "      <div class=\"navbar-header\">
        ";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 21
        echo "      </div>


     
      ";
        // line 25
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => ($context["container"] ?? null)), "method")) {
            // line 26
            echo "        </div>
      ";
        }
        // line 28
        echo "    </header>
  ";
    }

    // line 33
    public function block_main($context, array $blocks = array())
    {
        // line 34
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 38
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 39
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 44
            echo "      ";
        }
        // line 45
        echo "
      
      ";
        // line 48
        echo "      <section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => ($context["content_classes"] ?? null)), "method"), "html", null, true));
        echo ">

       
        ";
        // line 52
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "
         ";
        // line 57
        if (($this->getAttribute(($context["page"] ?? null), "overlay", array()) && ($context["admin"] ?? null))) {
            // line 58
            echo "          ";
            $this->loadTemplate((($context["directory"] ?? null) . "/templates/include/overlay.html.twig"), "themes/custom/custom_theme/templates/page--front.html.twig", 58)->display($context);
            // line 59
            echo "       `";
        }
        echo " 
      </section>


    </div>
  </div>
";
    }

    // line 39
    public function block_header($context, array $blocks = array())
    {
        // line 40
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 41
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 52
    public function block_content($context, array $blocks = array())
    {
        // line 53
        echo "          <a id=\"main-content\"></a>
          ";
        // line 54
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
        ";
    }

    // line 68
    public function block_footer($context, array $blocks = array())
    {
        // line 69
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo "\" role=\"contentinfo\">
      ";
        // line 70
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/custom_theme/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 70,  192 => 69,  189 => 68,  183 => 54,  180 => 53,  177 => 52,  170 => 41,  167 => 40,  164 => 39,  152 => 59,  149 => 58,  147 => 57,  144 => 56,  141 => 52,  134 => 48,  130 => 45,  127 => 44,  124 => 39,  121 => 38,  114 => 34,  111 => 33,  106 => 28,  102 => 26,  100 => 25,  94 => 21,  90 => 19,  87 => 18,  81 => 16,  79 => 15,  74 => 14,  72 => 11,  71 => 10,  70 => 8,  68 => 7,  65 => 6,  61 => 1,  58 => 67,  55 => 5,  53 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/custom_theme/templates/page--front.html.twig", "C:\\xampp\\htdocs\\site4\\themes\\custom\\custom_theme\\templates\\page--front.html.twig");
    }
}
