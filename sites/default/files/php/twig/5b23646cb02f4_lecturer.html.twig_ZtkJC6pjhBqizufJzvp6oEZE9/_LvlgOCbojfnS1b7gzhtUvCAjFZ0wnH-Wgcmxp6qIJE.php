<?php

/* modules/custom/lecturer/templates/lecturer.html.twig */
class __TwigTemplate_f9d11a1d50a623a6875df14ffc2fc60bac71fb751d445b9e9c29ad68469ce8a5 extends Twig_Template
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
        $tags = array("for" => 18);
        $filters = array("first" => 22);
        $functions = array("attach_library" => 1);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for'),
                array('first'),
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("lecturer/bootstrap-pagination"), "html", null, true));
        echo "

<div class=\"container\">
  <h2>Lecturer Table</h2>
  <p>This table show a list of lecturer</p>            
   <table class=\"table\" id=\"lecturerTable\"  data-show-header=\"true\" data-pagination=\"true\"
           data-id-field=\"name\"
           data-page-list=\"[5, 10, 25, 50, 100, ALL]\"
           data-page-size=\"5\">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lecturer"]) {
            // line 19
            echo "

      <tr>
        <td>";
            // line 22
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($context["lecturer"], "name", array())), "value", array()), "html", null, true));
            echo "</td>
        <td>";
            // line 23
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($context["lecturer"], "surname", array())), "value", array()), "html", null, true));
            echo "</td>
        <td>";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($context["lecturer"], "email", array())), "value", array()), "html", null, true));
            echo "</td>
      </tr>
    
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lecturer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </tbody>
 </table>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/lecturer/templates/lecturer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 28,  80 => 24,  76 => 23,  72 => 22,  67 => 19,  63 => 18,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/custom/lecturer/templates/lecturer.html.twig", "C:\\xampp\\htdocs\\site4\\modules\\custom\\lecturer\\templates\\lecturer.html.twig");
    }
}
