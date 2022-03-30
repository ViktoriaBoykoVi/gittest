<?php

/* common/footer.twig */
class __TwigTemplate_89a9dd69bb94660fe841da2d92091251199e3d7e4faff599a890d0f4cb7778b2 extends Twig_Template
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
        echo "<footer>
  <div class=\"container\">
    <a href=\"http://opencart.ru\" target=\"_blank\">";
        // line 3
        echo (isset($context["text_project"]) ? $context["text_project"] : null);
        echo "</a>
  </div>
</footer>
</body></html>";
    }

    public function getTemplateName()
    {
        return "common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
/* <footer>*/
/*   <div class="container">*/
/*     <a href="http://opencart.ru" target="_blank">{{ text_project }}</a>*/
/*   </div>*/
/* </footer>*/
/* </body></html>*/
