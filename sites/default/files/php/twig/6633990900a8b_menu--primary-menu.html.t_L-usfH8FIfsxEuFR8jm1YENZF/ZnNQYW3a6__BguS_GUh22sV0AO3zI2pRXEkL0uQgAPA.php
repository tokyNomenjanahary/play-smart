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

/* core/themes/olivero/templates/navigation/menu--primary-menu.html.twig */
class __TwigTemplate_28b07ba47de001983b0e1458460f3657 extends Template
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
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("olivero/navigation-primary"), "html", null, true);
        echo "

";
        // line 25
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 26
        echo "
";
        // line 31
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["menu"], "method", false, false, true, 31);
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, "primary-menu-item-"], 32, $context, $this->getSourceContext()));
        echo "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "menu_level", "loop"]);    }

    // line 34
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__aria_id__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "aria_id" => $__aria_id__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 35
            echo "  ";
            $context["primary_nav_level"] = ("primary-nav__menu--level-" . (($context["menu_level"] ?? null) + 1));
            // line 36
            echo "  ";
            $context["drupal_selector_primary_nav_level"] = (((($context["menu_level"] ?? null) <= 1)) ? (("primary-nav-menu--level-" . (($context["menu_level"] ?? null) + 1))) : (false));
            // line 37
            echo "  ";
            $context["is_top_level_menu"] = (($context["menu_level"] ?? null) == 0);
            // line 38
            echo "  ";
            $macros["menus"] = $this;
            // line 39
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 40
                echo "
    ";
                // line 45
                echo "    ";
                if ((($context["menu_level"] ?? null) == 1)) {
                    // line 46
                    echo "      <span data-drupal-selector=\"primary-nav-menu-🥕\" class=\"primary-nav__menu-🥕\"></span>
    ";
                }
                // line 48
                echo "
    <ul ";
                // line 49
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["primary-nav__menu", ($context["primary_nav_level"] ?? null)], "method", false, false, true, 49), "setAttribute", ["data-drupal-selector", ($context["drupal_selector_primary_nav_level"] ?? null)], "method", false, false, true, 49), 49, $this->source), "html", null, true);
                echo ">
      ";
                // line 50
                $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [($context["primary_nav_level"] ?? null)], "method", false, false, true, 50);
                // line 51
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 52
                    echo "
        ";
                    // line 53
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 53), "isRouted", [], "any", false, false, true, 53) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 53), "routeName", [], "any", false, false, true, 53) == "<nolink>"))) {
                        // line 54
                        echo "          ";
                        $context["menu_item_type"] = "nolink";
                        // line 55
                        echo "        ";
                    } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 55), "isRouted", [], "any", false, false, true, 55) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 55), "routeName", [], "any", false, false, true, 55) == "<button>"))) {
                        // line 56
                        echo "          ";
                        $context["menu_item_type"] = "button";
                        // line 57
                        echo "        ";
                    } else {
                        // line 58
                        echo "          ";
                        $context["menu_item_type"] = "link";
                        // line 59
                        echo "        ";
                    }
                    // line 60
                    echo "
        ";
                    // line 61
                    $context["item_classes"] = ["primary-nav__menu-item", ("primary-nav__menu-item--" . $this->sandbox->ensureToStringAllowed(                    // line 63
($context["menu_item_type"] ?? null), 63, $this->source)), ("primary-nav__menu-item--level-" . (                    // line 64
($context["menu_level"] ?? null) + 1)), ((twig_get_attribute($this->env, $this->source,                     // line 65
$context["item"], "in_active_trail", [], "any", false, false, true, 65)) ? ("primary-nav__menu-item--active-trail") : ("")), ((twig_get_attribute($this->env, $this->source,                     // line 66
$context["item"], "below", [], "any", false, false, true, 66)) ? ("primary-nav__menu-item--has-children") : (""))];
                    // line 69
                    echo "
        ";
                    // line 70
                    $context["link_classes"] = ["primary-nav__menu-link", ("primary-nav__menu-link--" . $this->sandbox->ensureToStringAllowed(                    // line 72
($context["menu_item_type"] ?? null), 72, $this->source)), ("primary-nav__menu-link--level-" . (                    // line 73
($context["menu_level"] ?? null) + 1)), ((twig_get_attribute($this->env, $this->source,                     // line 74
$context["item"], "in_active_trail", [], "any", false, false, true, 74)) ? ("primary-nav__menu-link--active-trail") : ("")), ((twig_get_attribute($this->env, $this->source,                     // line 75
$context["item"], "below", [], "any", false, false, true, 75)) ? ("primary-nav__menu-link--has-children") : (""))];
                    // line 78
                    echo "
        <li";
                    // line 79
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 79), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 79), "setAttribute", ["data-drupal-selector", (((($context["is_top_level_menu"] ?? null) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 79))) ? ("primary-nav-menu-item-has-children") : (false))], "method", false, false, true, 79), 79, $this->source), "html", null, true);
                    echo ">
          ";
                    // line 85
                    echo "          ";
                    $context["aria_id"] = \Drupal\Component\Utility\Html::getId(($this->sandbox->ensureToStringAllowed(($context["aria_id"] ?? null), 85, $this->source) . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 85), 85, $this->source)));
                    // line 86
                    echo "          ";
                    ob_start();
                    // line 87
                    echo "            <span class=\"primary-nav__menu-link-inner primary-nav__menu-link-inner--level-";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["menu_level"] ?? null) + 1), "html", null, true);
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
                    echo "</span>
          ";
                    $context["link_title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 89
                    echo "
          ";
                    // line 90
                    if (((($context["menu_item_type"] ?? null) == "link") || (($context["menu_item_type"] ?? null) == "nolink"))) {
                        // line 91
                        echo "            ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink((((($context["menu_item_type"] ?? null) == "link")) ? (($context["link_title"] ?? null)) : (twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 91))), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 91), 91, $this->source), ["class" =>                         // line 92
($context["link_classes"] ?? null), "data-drupal-selector" => ((                        // line 93
($context["is_top_level_menu"] ?? null)) ? ("primary-nav-menu-link-has-children") : (false))]), "html", null, true);
                        // line 95
                        echo "

            ";
                        // line 97
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 97)) {
                            // line 98
                            echo "              ";
                            // line 103
                            echo "              ";
                            if (($context["is_top_level_menu"] ?? null)) {
                                // line 104
                                echo "                ";
                                $context["toggle_button_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["class" => "primary-nav__button-toggle", "data-drupal-selector" => "primary-nav-submenu-toggle-button", "aria-controls" =>                                 // line 107
($context["aria_id"] ?? null), "aria-expanded" => "false", "aria-hidden" => "true", "tabindex" => "-1"]);
                                // line 112
                                echo "
                <button";
                                // line 113
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["toggle_button_attributes"] ?? null), 113, $this->source), "html", null, true);
                                echo ">
                  <span class=\"visually-hidden\">";
                                // line 114
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("@title sub-navigation", ["@title" => twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 114)]));
                                echo "</span>
                  <span class=\"icon--menu-toggle\"></span>
                </button>
              ";
                            }
                            // line 118
                            echo "
              ";
                            // line 119
                            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["id", ($context["aria_id"] ?? null)], "method", false, false, true, 119);
                            // line 120
                            echo "              ";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 120), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["aria_id"] ?? null)], 120, $context, $this->getSourceContext()));
                            echo "
            ";
                        }
                        // line 122
                        echo "
          ";
                    } elseif ((                    // line 123
($context["menu_item_type"] ?? null) == "button")) {
                        // line 124
                        echo "
            ";
                        // line 125
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(($context["link_title"] ?? null), 125, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 125), 125, $this->source), ["class" =>                         // line 126
($context["link_classes"] ?? null), "aria-controls" => (((                        // line 127
($context["is_top_level_menu"] ?? null) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 127))) ? (($context["aria_id"] ?? null)) : (false)), "aria-expanded" => (((                        // line 128
($context["is_top_level_menu"] ?? null) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 128))) ? ("false") : (false)), "data-drupal-selector" => (((                        // line 129
($context["is_top_level_menu"] ?? null) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 129))) ? ("primary-nav-submenu-toggle-button") : (false))]), "html", null, true);
                        // line 130
                        echo "

            ";
                        // line 132
                        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["id", ($context["aria_id"] ?? null)], "method", false, false, true, 132);
                        // line 133
                        echo "            ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 133), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["aria_id"] ?? null)], 133, $context, $this->getSourceContext()));
                        echo "
          ";
                    }
                    // line 135
                    echo "        </li>
      ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 137
                echo "    </ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/themes/olivero/templates/navigation/menu--primary-menu.html.twig";
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
        return array (  280 => 137,  265 => 135,  259 => 133,  257 => 132,  253 => 130,  251 => 129,  250 => 128,  249 => 127,  248 => 126,  247 => 125,  244 => 124,  242 => 123,  239 => 122,  233 => 120,  231 => 119,  228 => 118,  221 => 114,  217 => 113,  214 => 112,  212 => 107,  210 => 104,  207 => 103,  205 => 98,  203 => 97,  199 => 95,  197 => 93,  196 => 92,  194 => 91,  192 => 90,  189 => 89,  181 => 87,  178 => 86,  175 => 85,  171 => 79,  168 => 78,  166 => 75,  165 => 74,  164 => 73,  163 => 72,  162 => 70,  159 => 69,  157 => 66,  156 => 65,  155 => 64,  154 => 63,  153 => 61,  150 => 60,  147 => 59,  144 => 58,  141 => 57,  138 => 56,  135 => 55,  132 => 54,  130 => 53,  127 => 52,  109 => 51,  107 => 50,  103 => 49,  100 => 48,  96 => 46,  93 => 45,  90 => 40,  87 => 39,  84 => 38,  81 => 37,  78 => 36,  75 => 35,  59 => 34,  51 => 32,  49 => 31,  46 => 26,  44 => 25,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Olivero's theme implementation for the menus in the primary_menu region.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link URL, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 *
 * @ingroup themeable
 */
#}
{{ attach_library('olivero/navigation-primary') }}

{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see https://twig.symfony.com/doc/3.x/tags/macro.html
#}
{% set attributes = attributes.addClass('menu') %}
{{ menus.menu_links(items, attributes, 0, 'primary-menu-item-') }}

{% macro menu_links(items, attributes, menu_level, aria_id) %}
  {% set primary_nav_level = 'primary-nav__menu--level-' ~ (menu_level + 1) %}
  {% set drupal_selector_primary_nav_level = menu_level <= 1 ? 'primary-nav-menu--level-' ~ (menu_level + 1) : false %}
  {% set is_top_level_menu = menu_level == 0 %}
  {% import _self as menus %}
  {% if items %}

    {#
      Place the menu arrow (caret) outside of the submenu because the submenu
      has the overflow:hidden CSS rule applied.
    #}
    {% if menu_level == 1 %}
      <span data-drupal-selector=\"primary-nav-menu-🥕\" class=\"primary-nav__menu-🥕\"></span>
    {% endif %}

    <ul {{ attributes.addClass('primary-nav__menu', primary_nav_level).setAttribute('data-drupal-selector', drupal_selector_primary_nav_level) }}>
      {% set attributes = attributes.removeClass(primary_nav_level) %}
      {% for item in items %}

        {% if item.url.isRouted and item.url.routeName == '<nolink>' %}
          {% set menu_item_type = 'nolink' %}
        {% elseif item.url.isRouted and item.url.routeName == '<button>' %}
          {% set menu_item_type = 'button' %}
        {% else %}
          {% set menu_item_type = 'link' %}
        {% endif %}

        {% set item_classes = [
            'primary-nav__menu-item',
            'primary-nav__menu-item--' ~ menu_item_type,
            'primary-nav__menu-item--level-' ~ (menu_level + 1),
            item.in_active_trail ? 'primary-nav__menu-item--active-trail',
            item.below ? 'primary-nav__menu-item--has-children',
          ]
        %}

        {% set link_classes = [
            'primary-nav__menu-link',
            'primary-nav__menu-link--' ~ menu_item_type,
            'primary-nav__menu-link--level-' ~ (menu_level + 1),
            item.in_active_trail ? 'primary-nav__menu-link--active-trail',
            item.below ? 'primary-nav__menu-link--has-children',
          ]
        %}

        <li{{ item.attributes.addClass(item_classes).setAttribute('data-drupal-selector', is_top_level_menu and item.below ? 'primary-nav-menu-item-has-children' : false) }}>
          {#
            A unique HTML ID should be used, but that isn't available through
            Twig yet, so the |clean_id filter is used for now.
            @see https://www.drupal.org/project/drupal/issues/3115445
          #}
          {% set aria_id = (aria_id ~ loop.index)|clean_id %}
          {% set link_title %}
            <span class=\"primary-nav__menu-link-inner primary-nav__menu-link-inner--level-{{ menu_level + 1 }}\">{{ item.title }}</span>
          {% endset %}

          {% if menu_item_type == 'link' or menu_item_type == 'nolink' %}
            {{ link(menu_item_type == 'link' ? link_title : item.title, item.url, {
              'class': link_classes,
              'data-drupal-selector': is_top_level_menu ? 'primary-nav-menu-link-has-children' : false,
              })
            }}

            {% if item.below %}
              {#
                Aria-hidden  and tabindex attributes are removed via JS. Button is non-functional,
                but still visible in non-JS environments so that chevron can indicate presence of
                drop menu).
              #}
              {% if is_top_level_menu %}
                {% set toggle_button_attributes = create_attribute({
                  'class': 'primary-nav__button-toggle',
                  'data-drupal-selector': 'primary-nav-submenu-toggle-button',
                  'aria-controls': aria_id,
                  'aria-expanded': 'false',
                  'aria-hidden': 'true',
                  'tabindex': '-1',
                }) %}

                <button{{ toggle_button_attributes }}>
                  <span class=\"visually-hidden\">{{ '@title sub-navigation'|t({'@title': item.title}) }}</span>
                  <span class=\"icon--menu-toggle\"></span>
                </button>
              {% endif %}

              {% set attributes = attributes.setAttribute('id', aria_id) %}
              {{ menus.menu_links(item.below, attributes, menu_level + 1, aria_id) }}
            {% endif %}

          {% elseif menu_item_type == 'button' %}

            {{ link(link_title, item.url, {
              'class': link_classes,
              'aria-controls': is_top_level_menu and item.below ? aria_id : false,
              'aria-expanded': is_top_level_menu and item.below ? 'false' : false,
              'data-drupal-selector': is_top_level_menu and item.below ? 'primary-nav-submenu-toggle-button' : false,
            }) }}

            {% set attributes = attributes.setAttribute('id', aria_id) %}
            {{ menus.menu_links(item.below, attributes, menu_level + 1, aria_id) }}
          {% endif %}
        </li>
      {% endfor %}
    </ul>
  {% endif %}
{% endmacro %}
", "core/themes/olivero/templates/navigation/menu--primary-menu.html.twig", "/var/www/html/drupal/tuto/core/themes/olivero/templates/navigation/menu--primary-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 25, "set" => 31, "macro" => 34, "if" => 39, "for" => 51);
        static $filters = array("escape" => 23, "clean_id" => 85, "t" => 114);
        static $functions = array("attach_library" => 23, "link" => 91, "create_attribute" => 104);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'set', 'macro', 'if', 'for'],
                ['escape', 'clean_id', 't'],
                ['attach_library', 'link', 'create_attribute']
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
