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

/* modules/Custom/resume_creator/templates/my-template.html.twig */
class __TwigTemplate_98d05aa5f735a9169ec546ed1d07fdce extends \Twig\Template
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
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("resume_creator/resume_creator-style"), "html", null, true);
        echo "

";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["test_var"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 4
            echo "
<div class=\"wrapper\">
  
    <!-- left panel -->
  <div class=\"left\">
    
    <!-- photo -->
    <div class=\"logo\">
      <i><img /></i>
    </div>

    <br />

    <!-- contact info -->
    <div class=\"contact\">
      <h3>Contact</h3>
      <hr />
      <h5>Phone</h5>
      <p>";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["data"], "phone", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "</p>
      <h5>Email</h5>
      <p>";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["data"], "email", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "</p>
      <h5>Address</h5>
      <p>";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["data"], "address", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "</p>
    </div>

    <!-- educational info -->
    <div class=\"education\">
      <h3>Education</h3>
      <hr />
      <h5>Post Graduation</h5>
      <p>";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["data"], "pg", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "</p>
      <h5>Under Graduation</h5>
      <p>";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["data"], "ug", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "</p>
      <h5>Tenth</h5>
      <p>";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["data"], "tenth", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "</p>
    </div>

    <!-- skill set -->
    <div class=\"skill\">
      <h3>Skills</h3>
      <hr />
      <p>";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["data"], "skill", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "</p>
    </div>

    <!-- languages known -->
    <div class=\"language\">
      <h3>Language</h3>
      <hr />
      <ul>
        <li>English</li>
        <li>Hindi</li>
        <li>Tamil</li>
      </ul>
    </div>
  </div>

  <!-- right panel -->
  <div class=\"right\">
    <!-- right top panel for name, desc, designation -->
    <div class=\"top\">
      <h1 class=\"name\">";
            // line 64
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["data"], "name", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo "</h1>
      <p class=\"desig\"><i>'Designation'</i></p>
      <p class=\"desc\">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero expedita
        molestias nostrum facere debitis. Aliquam a necessitatibus, perspiciatis
        tenetur reiciendis illum accusamus cupiditate maxime vel praesentium
        odio at nulla rem.
      </p>
    </div>

    <!-- right middle panel for experience -->
    <div class=\"middle\">
      <h3>Experience</h3>
      <hr />
      <p>
        ";
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["data"], "intern", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "
      </p>
    </div>

    <!-- right bottom panel for references etc  -->
    <div class=\"bottom\">
      <h3>Reference</h3>
      <hr />
      <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta illo
        debitis fuga, rem velit fugit quas minus non quo, dolorem, officiis
        natus itaque ipsa accusamus sint unde similique voluptatem veritatis?
      </p>
    </div>
  </div>
</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modules/Custom/resume_creator/templates/my-template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 79,  131 => 64,  109 => 45,  99 => 38,  94 => 36,  89 => 34,  78 => 26,  73 => 24,  68 => 22,  48 => 4,  44 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/Custom/resume_creator/templates/my-template.html.twig", "C:\\xampp\\htdocs\\resume\\modules\\Custom\\resume_creator\\templates\\my-template.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 3);
        static $filters = array("escape" => 1);
        static $functions = array("attach_library" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
                ['attach_library']
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
