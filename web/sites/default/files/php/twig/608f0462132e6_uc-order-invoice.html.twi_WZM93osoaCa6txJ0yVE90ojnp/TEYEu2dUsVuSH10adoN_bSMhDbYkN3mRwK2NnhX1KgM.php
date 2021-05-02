<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/ubercart/uc_order/templates/uc-order-invoice.html.twig */
class __TwigTemplate_db481f5b82678fd3d52f370bb8bc1873c10b09ec48c22af58266fccd63d4b87b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 43, "for" => 199];
        $filters = ["escape" => 49, "t" => 70];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 39
        echo "<table width=\"95%\" border=\"0\" cellspacing=\"0\" cellpadding=\"1\" align=\"center\" bgcolor=\"#006699\" style=\"font-family: verdana, arial, helvetica; font-size: small;\">
  <tr>
    <td>
      <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"5\" align=\"center\" bgcolor=\"#FFFFFF\" style=\"font-family: verdana, arial, helvetica; font-size: small;\">
        ";
        // line 43
        if (($context["business_header"] ?? null)) {
            // line 44
            echo "        <tr valign=\"top\">
          <td>
            <table width=\"100%\" style=\"font-family: verdana, arial, helvetica; font-size: small;\">
              <tr>
                <td>
                  ";
            // line 49
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null)), "html", null, true);
            echo "
                </td>
                <td width=\"98%\">
                  <div style=\"padding-left: 1em;\">
                  <span style=\"font-size: large;\">";
            // line 53
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["store_name"] ?? null)), "html", null, true);
            echo "</span><br />
                  ";
            // line 54
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null)), "html", null, true);
            echo "
                  </div>
                </td>
                <td nowrap=\"nowrap\">
                  ";
            // line 58
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["store_address"] ?? null)), "html", null, true);
            echo "<br />";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["store_phone"] ?? null)), "html", null, true);
            echo "
                </td>
              </tr>
            </table>
          </td>
        </tr>
        ";
        }
        // line 65
        echo "
        <tr valign=\"top\">
          <td>

            ";
        // line 69
        if (($context["thank_you_message"] ?? null)) {
            // line 70
            echo "            <p><b>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Thanks for your order, @order_first_name!", ["@order_first_name" => ($context["order_first_name"] ?? null)]));
            echo "</b></p>

            ";
            // line 72
            if ($this->getAttribute($this->getAttribute(($context["order"] ?? null), "data", []), "new_user_name", [])) {
                // line 73
                echo "            <p><b>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("An account has been created for you with the following details:"));
                echo "</b></p>
            <p><b>";
                // line 74
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Username:"));
                echo "</b> ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["order_new_username"] ?? null)), "html", null, true);
                echo "<br />
            <b>";
                // line 75
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Password:"));
                echo "</b> ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["order_new_password"] ?? null)), "html", null, true);
                echo "</p>
            ";
            }
            // line 77
            echo "
            <p><b>";
            // line 78
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Want to manage your order online?"));
            echo "</b><br />
            ";
            // line 79
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("If you need to check the status of your order, please visit our home page at @store_link and click on \"My account\" in the menu or login with the following link:", ["@store_link" => ($context["store_link"] ?? null)]));
            echo "
            <br /><br />";
            // line 80
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_login_link"] ?? null)), "html", null, true);
            echo "</p>
            ";
        }
        // line 82
        echo "
            <table cellpadding=\"4\" cellspacing=\"0\" border=\"0\" width=\"100%\" style=\"font-family: verdana, arial, helvetica; font-size: small;\">
              <tr>
                <td colspan=\"2\" bgcolor=\"#006699\" style=\"color: white;\">
                  <b>";
        // line 86
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Purchasing Information:"));
        echo "</b>
                </td>
              </tr>
              <tr>
                <td nowrap=\"nowrap\">
                  <b>";
        // line 91
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("E-mail Address:"));
        echo "</b>
                </td>
                <td width=\"98%\">
                  ";
        // line 94
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["order_email"] ?? null)), "html", null, true);
        echo "
                </td>
              </tr>
              <tr>
                <td colspan=\"2\">

                  <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" style=\"font-family: verdana, arial, helvetica; font-size: small;\">
                    <tr>
                      <td valign=\"top\" width=\"50%\">
                        <b>";
        // line 103
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Billing Address:"));
        echo "</b><br />
                        ";
        // line 104
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["order_billing_address"] ?? null)), "html", null, true);
        echo "<br />
                        <br />
                        <b>";
        // line 106
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Billing Phone:"));
        echo "</b><br />
                        ";
        // line 107
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["order_billing_phone"] ?? null)), "html", null, true);
        echo "<br />
                      </td>
                      ";
        // line 109
        if (($context["shippable"] ?? null)) {
            // line 110
            echo "                      <td valign=\"top\" width=\"50%\">
                        <b>";
            // line 111
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Shipping Address:"));
            echo "</b><br />
                        ";
            // line 112
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["order_shipping_address"] ?? null)), "html", null, true);
            echo "<br />
                        <br />
                        <b>";
            // line 114
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Shipping Phone:"));
            echo "</b><br />
                        ";
            // line 115
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["order_shipping_phone"] ?? null)), "html", null, true);
            echo "<br />
                      </td>
                      ";
        }
        // line 118
        echo "                    </tr>
                  </table>

                </td>
              </tr>
              <tr>
                <td nowrap=\"nowrap\">
                  <b>";
        // line 125
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Order Grand Total:"));
        echo "</b>
                </td>
                <td width=\"98%\">
                  <b>";
        // line 128
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["order_total"] ?? null)), "html", null, true);
        echo "</b>
                </td>
              </tr>

              ";
        // line 132
        if (($context["order_payment_method"] ?? null)) {
            // line 133
            echo "              <tr>
                <td nowrap=\"nowrap\">
                  <b>";
            // line 135
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Payment Method:"));
            echo "</b>
                </td>
                <td width=\"98%\">
                  ";
            // line 138
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["order_payment_method"] ?? null)), "html", null, true);
            echo "
                </td>
              </tr>
              ";
        }
        // line 142
        echo "
              <tr>
                <td colspan=\"2\" bgcolor=\"#006699\" style=\"color: white;\">
                  <b>";
        // line 145
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Order Summary:"));
        echo "</b>
                </td>
              </tr>

              ";
        // line 149
        if (($context["shippable"] ?? null)) {
            // line 150
            echo "              <tr>
                <td colspan=\"2\" bgcolor=\"#EEEEEE\">
                  <font color=\"#CC6600\"><b>";
            // line 152
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Shipping Details:"));
            echo "</b></font>
                </td>
              </tr>
              ";
        }
        // line 156
        echo "
              <tr>
                <td colspan=\"2\">

                  <table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" width=\"100%\" style=\"font-family: verdana, arial, helvetica; font-size: small;\">
                    <tr>
                      <td nowrap=\"nowrap\">
                        <b>";
        // line 163
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Order #:"));
        echo "</b>
                      </td>
                      <td width=\"98%\">
                        ";
        // line 166
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["order_link"] ?? null)), "html", null, true);
        echo "
                      </td>
                    </tr>

                    <tr>
                      <td nowrap=\"nowrap\">
                        <b>";
        // line 172
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Order Date: "));
        echo "</b>
                      </td>
                      <td width=\"98%\">
                        ";
        // line 175
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["order_created"] ?? null)), "html", null, true);
        echo "
                      </td>
                    </tr>

                    ";
        // line 179
        if ((($context["shipping_method"] ?? null) && ($context["shippable"] ?? null))) {
            // line 180
            echo "                    <tr>
                      <td nowrap=\"nowrap\">
                        <b>";
            // line 182
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Shipping Method:"));
            echo "</b>
                      </td>
                      <td width=\"98%\">
                        ";
            // line 185
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["order_shipping_method"] ?? null)), "html", null, true);
            echo "
                      </td>
                    </tr>
                    ";
        }
        // line 189
        echo "
                    <tr>
                      <td nowrap=\"nowrap\">
                        ";
        // line 192
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Products Subtotal:"));
        echo "&nbsp;
                      </td>
                      <td width=\"98%\">
                        ";
        // line 195
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["order_subtotal"] ?? null)), "html", null, true);
        echo "
                      </td>
                    </tr>

                    ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["line_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            if ((($this->getAttribute($context["item"], "type", []) != "subtotal") && ($this->getAttribute($context["item"], "type", []) != "total"))) {
                // line 200
                echo "
                    <tr>
                      <td nowrap=\"nowrap\">
                        ";
                // line 203
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                echo ":
                      </td>
                      <td>
                        ";
                // line 206
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "formatted_amount", [])), "html", null, true);
                echo "
                      </td>
                    </tr>

                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "
                    <tr>
                      <td>&nbsp;</td>
                      <td>------</td>
                    </tr>

                    <tr>
                      <td nowrap=\"nowrap\">
                        <b>";
        // line 219
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Total for this Order:"));
        echo "&nbsp;</b>
                      </td>
                      <td>
                        <b>";
        // line 222
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["order_total"] ?? null)), "html", null, true);
        echo "</b>
                      </td>
                    </tr>

                    <tr>
                      <td colspan=\"2\">
                        <br /><br /><b>";
        // line 228
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Products on order:"));
        echo "&nbsp;</b>

                        <table width=\"100%\" style=\"font-family: verdana, arial, helvetica; font-size: small;\">

                          ";
        // line 232
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 233
            echo "                          <tr>
                            <td valign=\"top\" nowrap=\"nowrap\">
                              <b>";
            // line 235
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["product"], "qty", [])), "html", null, true);
            echo " x </b>
                            </td>
                            <td width=\"98%\">
                              <b>";
            // line 238
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["product"], "title", [])), "html", null, true);
            echo " - ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["product"], "total_price", [])), "html", null, true);
            echo "</b>
                              ";
            // line 239
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["product"], "individual_price", [])), "html", null, true);
            echo "<br />
                              ";
            // line 240
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("SKU"));
            echo ": ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["product"], "model", [])), "html", null, true);
            echo "<br />
                              ";
            // line 241
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["product"], "details", [])), "html", null, true);
            echo "
                            </td>
                          </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 245
        echo "                        </table>

                      </td>
                    </tr>
                  </table>

                </td>
              </tr>

              ";
        // line 254
        if (((($context["help_text"] ?? null) || ($context["email_text"] ?? null)) || ($context["store_footer"] ?? null))) {
            // line 255
            echo "              <tr>
                <td colspan=\"2\">
                  <hr noshade=\"noshade\" size=\"1\" /><br />

                  ";
            // line 259
            if (($context["help_text"] ?? null)) {
                // line 260
                echo "                  <p><b>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Where can I get help with reviewing my order?"));
                echo "</b><br />
                  ";
                // line 261
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("To learn more about managing your orders on @store_link, please visit our <a href=\"@store_help_url\">help page</a>.", ["@store_link" => ($context["store_link"] ?? null), "@store_help_url" => ($context["store_help_url"] ?? null)]));
                echo "
                  <br /></p>
                  ";
            }
            // line 264
            echo "
                  ";
            // line 265
            if (($context["email_text"] ?? null)) {
                // line 266
                echo "                  <p>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Please note: This e-mail message is an automated notification. Please do not reply to this message."));
                echo "</p>

                  <p>";
                // line 268
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Thanks again for shopping with us."));
                echo "</p>
                  ";
            }
            // line 270
            echo "
                  ";
            // line 271
            if (($context["store_footer"] ?? null)) {
                // line 272
                echo "                  <p><b>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["store_link"] ?? null)), "html", null, true);
                echo "</b><br /><b>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null)), "html", null, true);
                echo "</b></p>
                  ";
            }
            // line 274
            echo "                </td>
              </tr>
              ";
        }
        // line 277
        echo "
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "modules/ubercart/uc_order/templates/uc-order-invoice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  530 => 277,  525 => 274,  517 => 272,  515 => 271,  512 => 270,  507 => 268,  501 => 266,  499 => 265,  496 => 264,  490 => 261,  485 => 260,  483 => 259,  477 => 255,  475 => 254,  464 => 245,  454 => 241,  448 => 240,  444 => 239,  438 => 238,  432 => 235,  428 => 233,  424 => 232,  417 => 228,  408 => 222,  402 => 219,  392 => 211,  380 => 206,  374 => 203,  369 => 200,  364 => 199,  357 => 195,  351 => 192,  346 => 189,  339 => 185,  333 => 182,  329 => 180,  327 => 179,  320 => 175,  314 => 172,  305 => 166,  299 => 163,  290 => 156,  283 => 152,  279 => 150,  277 => 149,  270 => 145,  265 => 142,  258 => 138,  252 => 135,  248 => 133,  246 => 132,  239 => 128,  233 => 125,  224 => 118,  218 => 115,  214 => 114,  209 => 112,  205 => 111,  202 => 110,  200 => 109,  195 => 107,  191 => 106,  186 => 104,  182 => 103,  170 => 94,  164 => 91,  156 => 86,  150 => 82,  145 => 80,  141 => 79,  137 => 78,  134 => 77,  127 => 75,  121 => 74,  116 => 73,  114 => 72,  108 => 70,  106 => 69,  100 => 65,  88 => 58,  81 => 54,  77 => 53,  70 => 49,  63 => 44,  61 => 43,  55 => 39,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/ubercart/uc_order/templates/uc-order-invoice.html.twig", "/opt/drupal/web/web/modules/ubercart/uc_order/templates/uc-order-invoice.html.twig");
    }
}
