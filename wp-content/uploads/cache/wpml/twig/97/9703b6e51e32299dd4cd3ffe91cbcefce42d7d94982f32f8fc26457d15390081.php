<?php

/* save-notification.twig */
class __TwigTemplate_1401dd450be99830a2c511ba14a92ad90ba5267e579aa6421f5db9fac3284dac extends Twig_Template
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
        // line 1
        echo "<span class=\"js-wpml-ls-messages wpml-ls-messages\"></span><span class=\"spinner\"></span>
";
    }

    public function getTemplateName()
    {
        return "save-notification.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"js-wpml-ls-messages wpml-ls-messages\"></span><span class=\"spinner\"></span>
", "save-notification.twig", "C:\\xampp\\htdocs\\e3mtechnologie-com\\wp-content\\plugins\\sitepress-multilingual-cms\\templates\\language-switcher-admin-ui\\save-notification.twig");
    }
}
