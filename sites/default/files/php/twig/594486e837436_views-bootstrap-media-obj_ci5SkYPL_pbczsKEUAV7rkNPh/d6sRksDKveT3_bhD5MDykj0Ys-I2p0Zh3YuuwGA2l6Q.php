<?php

/* modules/views_bootstrap/templates/views-bootstrap-media-object.html.twig */
class __TwigTemplate_32c06a6232bd1651ef8ad9354b170f3e08afa7b9e9b5b096717dec1007c62961 extends Twig_Template
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
        $tags = array("for" => 3, "if" => 6);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'if'),
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

        // line 2
        echo "<div id=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true));
        echo "\" ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 4
            echo "<div class=\"media\">

              ";
            // line 6
            if (($this->getAttribute($context["row"], "image_class", array()) == "media-left")) {
                // line 7
                echo "                  <div class=\"pull-left\">
                      ";
                // line 8
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "image", array()), "html", null, true));
                echo "
                  </div>
              ";
            }
            // line 11
            echo "
              ";
            // line 12
            if (($this->getAttribute($context["row"], "image_class", array()) == "media-middle")) {
                // line 13
                echo "                  <div class=\"media-middle\">
                      ";
                // line 14
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "image", array()), "html", null, true));
                echo "
                  </div>
              ";
            }
            // line 17
            echo "
              <div class=\"media-body\">
                    ";
            // line 19
            if ($this->getAttribute($context["row"], "heading", array())) {
                // line 20
                echo "                          <h4 class=\"media-heading\">
                              ";
                // line 21
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "heading", array()), "html", null, true));
                echo "
                          </h4>
                    ";
            }
            // line 24
            echo "                    ";
            if ($this->getAttribute($context["row"], "body", array())) {
                // line 25
                echo "                        ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "body", array()), "html", null, true));
                echo "
                    ";
            }
            // line 27
            echo "
                  ";
            // line 28
            if (($this->getAttribute($context["row"], "image_class", array()) == "media-right")) {
                // line 29
                echo "                      <div class=\"pull-right\">
                          ";
                // line 30
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "image", array()), "html", null, true));
                echo "
                      </div>
                  ";
            }
            // line 33
            echo "
              </div>
          </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "modules/views_bootstrap/templates/views-bootstrap-media-object.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 37,  121 => 33,  115 => 30,  112 => 29,  110 => 28,  107 => 27,  101 => 25,  98 => 24,  92 => 21,  89 => 20,  87 => 19,  83 => 17,  77 => 14,  74 => 13,  72 => 12,  69 => 11,  63 => 8,  60 => 7,  58 => 6,  54 => 4,  50 => 3,  43 => 2,);
    }

    public function getSource()
    {
        return "{# @TODO: How to remove bootstrap theme's default .img-responsive class on image fields, which doesn't work with .media-left, etc. For now, I'm using .pull-left as a fix. #}
<div id=\"{{ id }}\" {{ attributes.addClass(classes) }}>
    {% for key, row in rows -%}
          <div class=\"media\">

              {% if row.image_class == \"media-left\" %}
                  <div class=\"pull-left\">
                      {{ row.image }}
                  </div>
              {% endif %}

              {% if row.image_class == \"media-middle\" %}
                  <div class=\"media-middle\">
                      {{ row.image }}
                  </div>
              {% endif %}

              <div class=\"media-body\">
                    {% if row.heading %}
                          <h4 class=\"media-heading\">
                              {{ row.heading }}
                          </h4>
                    {% endif %}
                    {% if row.body %}
                        {{ row.body }}
                    {% endif %}

                  {% if row.image_class == \"media-right\" %}
                      <div class=\"pull-right\">
                          {{ row.image }}
                      </div>
                  {% endif %}

              </div>
          </div>
    {%- endfor %}
</div>

";
    }
}
