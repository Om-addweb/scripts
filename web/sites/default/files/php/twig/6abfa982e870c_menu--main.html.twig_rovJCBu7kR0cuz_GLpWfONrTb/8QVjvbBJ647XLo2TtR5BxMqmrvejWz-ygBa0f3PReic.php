<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* core/profiles/demo_umami/themes/umami/templates/components/navigation/menu--main.html.twig */
class __TwigTemplate_2f7659d0e7174e1c6cdaec247a9d41a5 extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        $this->sandbox = $env->getExtension(SandboxExtension::class)->getChecker();
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        yield "
";
        // line 22
        $macros["menus"] = $this->macros["menus"] = $this->getMacroNamespace();
        // line 23
        yield "
";
        // line 31
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($macros["menus"] ?? $this->throwUninitializedMacroNamespace(31))->call("menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_name"] ?? null)], $context, 31, $this->source));
        yield " ";
        // line 32
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_name", "menu_level"]);        return; yield;
    }

    protected function loadDeclaredMacros(): array
    {
        return [
            "menu_links" => new \Twig\TwigMacro("menu_links", function ($items = null, $attributes = null, $menu_level = null, $menu_name = null, ...$varargs): string|Markup {
                // line 33
                $macros = $this->macros;
                $context = [
                    "items" => $items,
                    "attributes" => $attributes,
                    "menu_level" => $menu_level,
                    "menu_name" => $menu_name,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
                    yield " ";
                    // line 34
                    yield "  ";
                    $macros["menus"] = $this->getMacroNamespace();
                    // line 35
                    yield "  ";
                    // line 36
                    yield "  ";
                    // line 37
                    $context["menu_classes"] = [("menu-" . \Drupal\Component\Utility\Html::getClass(                    // line 38
($context["menu_name"] ?? null)))];
                    // line 41
                    yield "  ";
                    // line 42
                    yield "  ";
                    // line 43
                    $context["submenu_classes"] = [(("menu-" . \Drupal\Component\Utility\Html::getClass(                    // line 44
($context["menu_name"] ?? null))) . "__submenu")];
                    // line 47
                    yield "  ";
                    if ((($tmp = ($context["items"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 48
                        yield "    ";
                        if ((($context["menu_level"] ?? null) == 0)) {
                            // line 49
                            yield "      <ul";
                            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["menu_classes"] ?? null)], "method", false, false, true, 49), "setAttribute", ["data-drupal-selector", "menu-main"], "method", false, false, true, 49), "html", null, true);
                            yield "> ";
                            // line 50
                            yield "    ";
                        } else {
                            // line 51
                            yield "      <ul";
                            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [($context["menu_classes"] ?? null)], "method", false, false, true, 51), "addClass", [($context["submenu_classes"] ?? null)], "method", false, false, true, 51), "html", null, true);
                            yield "> ";
                            // line 52
                            yield "    ";
                        }
                        // line 53
                        yield "    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                            // line 54
                            yield "      ";
                            // line 55
                            yield "      ";
                            // line 56
                            $context["item_classes"] = [(("menu-" . \Drupal\Component\Utility\Html::getClass(                            // line 57
($context["menu_name"] ?? null))) . "__item"), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                             // line 58
$context["item"], "is_expanded", [], "any", false, false, true, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((("menu-" . \Drupal\Component\Utility\Html::getClass(($context["menu_name"] ?? null))) . "__item--expanded")) : ("")), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                             // line 59
$context["item"], "is_collapsed", [], "any", false, false, true, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((("menu-" . \Drupal\Component\Utility\Html::getClass(($context["menu_name"] ?? null))) . "__item--collapsed")) : ("")), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                             // line 60
$context["item"], "in_active_trail", [], "any", false, false, true, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((("menu-" . \Drupal\Component\Utility\Html::getClass(($context["menu_name"] ?? null))) . "__item--active-trail")) : (""))];
                            // line 63
                            yield "      ";
                            // line 64
                            yield "      ";
                            // line 65
                            $context["link_classes"] = [(("menu-" . \Drupal\Component\Utility\Html::getClass(                            // line 66
($context["menu_name"] ?? null))) . "__link")];
                            // line 69
                            yield "      <li";
                            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 69), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 69), "html", null, true);
                            yield ">";
                            // line 70
                            yield "        ";
                            // line 71
                            yield "        ";
                            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(CoreExtension::getAttribute($this->env, $this->source,                             // line 73
$context["item"], "title", [], "any", false, false, true, 73), CoreExtension::getAttribute($this->env, $this->source,                             // line 74
$context["item"], "url", [], "any", false, false, true, 74), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                             // line 75
$context["item"], "attributes", [], "any", false, false, true, 75), "removeClass", [($context["item_classes"] ?? null)], "method", false, false, true, 75), "addClass", [($context["link_classes"] ?? null)], "method", false, false, true, 75)), "html", null, true);
                            // line 77
                            yield "
        ";
                            // line 78
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 79
                                yield "          ";
                                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($macros["menus"] ?? $this->throwUninitializedMacroNamespace(79))->call("menu_links", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 79), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["menu_name"] ?? null)], $context, 79, $this->source));
                                yield " ";
                                // line 80
                                yield "        ";
                            }
                            // line 81
                            yield "      </li>
    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent);
                        $context += $_parent;
                        // line 83
                        yield "    </ul>
  ";
                    }
                    return; yield;
                })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["items" => false, "attributes" => false, "menu_level" => false, "menu_name" => false], false),
        ];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/profiles/demo_umami/themes/umami/templates/components/navigation/menu--main.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDefaultEscapeStrategy(): string|false
    {
        return "html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  172 => 83,  164 => 81,  161 => 80,  157 => 79,  155 => 78,  152 => 77,  150 => 75,  149 => 74,  148 => 73,  146 => 71,  144 => 70,  140 => 69,  138 => 66,  137 => 65,  135 => 64,  133 => 63,  131 => 60,  130 => 59,  129 => 58,  128 => 57,  127 => 56,  125 => 55,  123 => 54,  118 => 53,  115 => 52,  111 => 51,  108 => 50,  104 => 49,  101 => 48,  98 => 47,  96 => 44,  95 => 43,  93 => 42,  91 => 41,  89 => 38,  88 => 37,  86 => 36,  84 => 35,  81 => 34,  67 => 33,  56 => 32,  53 => 31,  50 => 23,  48 => 22,  45 => 21,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/templates/components/navigation/menu--main.html.twig", "/home/addweb/serverdata/srv/www/drupal/drupal-3/web/core/profiles/demo_umami/themes/umami/templates/components/navigation/menu--main.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 22, "macro" => 33, "set" => 37, "if" => 47, "for" => 53];
        static $filters = ["clean_class" => 38, "escape" => 49];
        static $functions = ["link" => 72];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "import", 1 => "macro", 2 => "set", 3 => "if", 4 => "for"],
                [0 => "clean_class", 1 => "escape"],
                [0 => "link"],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            } elseif ($e instanceof SecurityNotAllowedTestError && isset($tests[$e->getTestName()])) {
                $e->setTemplateLine($tests[$e->getTestName()]);
            }

            throw $e;
        }

    }
}
