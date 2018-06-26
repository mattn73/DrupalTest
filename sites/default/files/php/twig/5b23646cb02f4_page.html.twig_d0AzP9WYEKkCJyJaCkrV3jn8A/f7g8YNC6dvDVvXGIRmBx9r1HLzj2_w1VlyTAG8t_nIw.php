<?php

/* page.html.twig */
class __TwigTemplate_163de881da4bcfef2d01c4c522e9c7098dca497cb5618abb8c2055926b8dabb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 4, "if" => 6, "block" => 7, "include" => 75);
        $filters = array("clean_class" => 12);
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

        // line 1
        echo "


";
        // line 4
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 6
        if ($this->getAttribute(($context["page"] ?? null), "navigation", array())) {
            // line 7
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 32
        echo "
";
        // line 34
        $this->displayBlock('main', $context, $blocks);
        // line 91
        echo "
";
        // line 92
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 93
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 7
    public function block_navbar($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        // line 9
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 11
($context["theme"] ?? null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 12
($context["theme"] ?? null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "navbar_position", array())))) : (($context["container"] ?? null))));
        // line 15
        echo "    <header";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", array(0 => ($context["navbar_classes"] ?? null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 16
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => ($context["container"] ?? null)), "method")) {
            // line 17
            echo "        <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo "\">
      ";
        }
        // line 19
        echo "      <div class=\"navbar-header\">
        ";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 22
        echo "      </div>


     
      ";
        // line 26
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => ($context["container"] ?? null)), "method")) {
            // line 27
            echo "        </div>
      ";
        }
        // line 29
        echo "    </header>
  ";
    }

    // line 34
    public function block_main($context, array $blocks = array())
    {
        // line 35
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 39
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 40
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 45
            echo "      ";
        }
        // line 46
        echo "
      ";
        // line 48
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 49
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 54
            echo "      ";
        }
        // line 55
        echo "
      ";
        // line 57
        echo "      ";
        // line 58
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 59
($context["page"] ?? null), "sidebar_first", array()) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 60
($context["page"] ?? null), "sidebar_first", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 61
($context["page"] ?? null), "sidebar_second", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 62
($context["page"] ?? null), "sidebar_first", array())) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 65
        echo "      <section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => ($context["content_classes"] ?? null)), "method"), "html", null, true));
        echo ">

       
        ";
        // line 69
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 73
        echo "
       ";
        // line 74
        if (($this->getAttribute(($context["page"] ?? null), "overlay", array()) && ($context["admin"] ?? null))) {
            // line 75
            echo "          ";
            $this->loadTemplate((($context["directory"] ?? null) . "/templates/include/overlay.html.twig"), "page.html.twig", 75)->display($context);
            // line 76
            echo "       ";
        }
        echo " 

      </section>

      ";
        // line 81
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 82
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 87
            echo "      ";
        }
        // line 88
        echo "    </div>
  </div>
";
    }

    // line 40
    public function block_header($context, array $blocks = array())
    {
        // line 41
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 42
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 49
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 50
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 51
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 69
    public function block_content($context, array $blocks = array())
    {
        // line 70
        echo "          <a id=\"main-content\"></a>
          ";
        // line 71
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
        ";
    }

    // line 82
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 83
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 84
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 93
    public function block_footer($context, array $blocks = array())
    {
        // line 94
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo "\" role=\"contentinfo\">
      ";
        // line 95
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 95,  262 => 94,  259 => 93,  252 => 84,  249 => 83,  246 => 82,  240 => 71,  237 => 70,  234 => 69,  227 => 51,  224 => 50,  221 => 49,  214 => 42,  211 => 41,  208 => 40,  202 => 88,  199 => 87,  196 => 82,  193 => 81,  185 => 76,  182 => 75,  180 => 74,  177 => 73,  174 => 69,  167 => 65,  165 => 62,  164 => 61,  163 => 60,  162 => 59,  161 => 58,  159 => 57,  156 => 55,  153 => 54,  150 => 49,  147 => 48,  144 => 46,  141 => 45,  138 => 40,  135 => 39,  128 => 35,  125 => 34,  120 => 29,  116 => 27,  114 => 26,  108 => 22,  104 => 20,  101 => 19,  95 => 17,  93 => 16,  88 => 15,  86 => 12,  85 => 11,  84 => 9,  82 => 8,  79 => 7,  73 => 93,  71 => 92,  68 => 91,  66 => 34,  63 => 32,  59 => 7,  57 => 6,  55 => 4,  50 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "page.html.twig", "themes/custom/custom_theme/templates/page.html.twig");
    }
}
