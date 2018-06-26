<?php

/* modules/custom/svg_grid/templates/svg_grid.html.twig */
class __TwigTemplate_400ef0ebdac8c1c46d2ce95bded424984be751450952595ef46130c87a24edc6 extends Twig_Template
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
        $tags = array("for" => 9);
        $filters = array();
        $functions = array("attach_library" => 1);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for'),
                array(),
                array('attach_library')
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("svg_grid/svg-hover"), "html", null, true));
        echo "





<div class=\"demo-2\">
<section id=\"grid\" class=\"grid clearfix\">
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            // line 10
            echo "\t<a href=\"#\" data-path-hover=\"m 180,34.57627 -180,0 L 0,0 180,0 z\">
\t\t<figure>
\t\t\t<img src=\"";
            // line 12
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["employee"], "image", array()), "html", null, true));
            echo "\" />
\t\t\t<svg viewBox=\"0 0 180 320\" preserveAspectRatio=\"none\"><path d=\"M 180,160 0,218 0,0 180,0 z\"/></svg>
\t\t\t<figcaption>
\t\t\t\t<h2>";
            // line 15
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["employee"], "name", array()), "html", null, true));
            echo "</h2>
\t\t\t\t<p>";
            // line 16
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["employee"], "email", array()), "html", null, true));
            echo "</p>
\t\t\t\t<button>View</button>
\t\t\t</figcaption>
\t\t</figure>
\t</a>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t
</section>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/svg_grid/templates/svg_grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 21,  72 => 16,  68 => 15,  62 => 12,  58 => 10,  54 => 9,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/custom/svg_grid/templates/svg_grid.html.twig", "C:\\xampp\\htdocs\\site4\\modules\\custom\\svg_grid\\templates\\svg_grid.html.twig");
    }
}
