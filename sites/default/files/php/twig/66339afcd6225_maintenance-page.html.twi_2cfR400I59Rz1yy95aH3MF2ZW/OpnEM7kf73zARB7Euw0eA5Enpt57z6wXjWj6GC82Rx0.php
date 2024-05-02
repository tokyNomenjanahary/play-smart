<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/themes/claro/templates/maintenance-page.html.twig */
class __TwigTemplate_1300b61123bac31df19fa4f268b2044d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "<div class=\"layout-container\">

  <header role=\"banner\">
    ";
        // line 19
        if (($context["site_name"] ?? null)) {
            // line 20
            echo "      <h2 class=\"site-name\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 20, $this->source), "html", null, true);
            echo "</h2>
    ";
        }
        // line 22
        echo "  </header>

  ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 24)) {
            // line 25
            echo "    <aside class=\"layout-sidebar-first\" role=\"complementary\">
      ";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "
    </aside>";
            // line 28
            echo "  ";
        }
        // line 29
        echo "
  <main role=\"main\" class=\"main-content\">
    ";
        // line 31
        if (($context["title"] ?? null)) {
            // line 32
            echo "      <h1 class=\"title\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 32, $this->source), "html", null, true);
            echo "</h1>
    ";
        }
        // line 34
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
        echo "
    <div class=\"content\">
      ";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
        echo "
    </div>
  </main>

  ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_bottom", [], "any", false, false, true, 40)) {
            // line 41
            echo "    <footer role=\"contentinfo\">
      ";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_bottom", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 45
        echo "
</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["site_name", "page", "title"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/themes/claro/templates/maintenance-page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  104 => 45,  98 => 42,  95 => 41,  93 => 40,  86 => 36,  80 => 34,  74 => 32,  72 => 31,  68 => 29,  65 => 28,  61 => 26,  58 => 25,  56 => 24,  52 => 22,  46 => 20,  44 => 19,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Claro's theme implementation for maintenance page.
 *
 * This template is used for rendering non-frontpage maintenance pages. An
 * example of this is /update.php.
 *
 * All available variables are mirrored in page.html.twig.
 * Some may be blank but they are provided for consistency.
 *
 * @see template_preprocess_maintenance_page()
 * @see maintenance-page--front.html.twig
 */
#}
<div class=\"layout-container\">

  <header role=\"banner\">
    {% if site_name %}
      <h2 class=\"site-name\">{{ site_name }}</h2>
    {% endif %}
  </header>

  {% if page.sidebar_first %}
    <aside class=\"layout-sidebar-first\" role=\"complementary\">
      {{ page.sidebar_first }}
    </aside>{# /.layout-sidebar-first #}
  {% endif %}

  <main role=\"main\" class=\"main-content\">
    {% if title %}
      <h1 class=\"title\">{{ title }}</h1>
    {% endif %}
    {{ page.highlighted }}
    <div class=\"content\">
      {{ page.content }}
    </div>
  </main>

  {% if page.page_bottom %}
    <footer role=\"contentinfo\">
      {{ page.page_bottom }}
    </footer>
  {% endif %}

</div>{# /.layout-container #}
", "core/themes/claro/templates/maintenance-page.html.twig", "/var/www/html/drupal/tuto/core/themes/claro/templates/maintenance-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19);
        static $filters = array("escape" => 20);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}