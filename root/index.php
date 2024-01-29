<?php
  if (!isset($_GET["header"])) {
    if (isset($_GET["lang"]) && $_GET["lang"] == "") {
      include("copyright/normal.html");
    }
    else if (isset($_GET["lang"]) && $_GET["lang"] != "") {
      if ($_GET["lang"] == "pt" || $_GET["lang"] == "br" || $_GET["lang"] == "pt_br" || $_GET["lang"] == "pt_BR" || $_GET["lang"] == "PT_BR") {
        include("copyright/pt_BR/normal.html");
      }
      else {
        $_GET["lang"] = "en";
        include("copyright/en_US/normal.html");
      }
    }
    else {
      $_GET["lang"] = "en";
      include("copyright/en_US/normal.html");;
    }
  }
  else if (isset($_GET["header"]) && $_GET["header"] == "minecraft" || isset($_GET["header"]) && $_GET["header"] == "Minecraft" || isset($_GET["header"]) && $_GET["header"] == "mine" || isset($_GET["header"]) && $_GET["header"] == "Mine") {
    if (isset($_GET["lang"]) && $_GET["lang"] == "") {
      include("copyright/minecraft.html");
    }
    else if (isset($_GET["lang"]) && $_GET["lang"] != "") {
      if ($_GET["lang"] == "pt" || $_GET["lang"] == "br" || $_GET["lang"] == "pt_br" || $_GET["lang"] == "pt_BR" || $_GET["lang"] == "PT_BR") {
        include("copyright/pt_BR/minecraft.html");
      }
      else {
        include("copyright/en_US/minecraft.html");
      }
    }
    else {
      include("copyright/en_US/minecraft.html");
    }
  }
  else if (isset($_GET["header"]) && $_GET["header"] == "mht" || isset($_GET["header"]) && $_GET["header"] == "MHT") {
    header("content-type: text/plain");
    include("copyright/index.mht");
  }
  else {
    header("content-type: text/plain");
    if (isset($_GET["lang"]) && $_GET["lang"] == "") {
      include("copyright/text-plain.html");
    }
    else if (isset($_GET["lang"]) && $_GET["lang"] != "") {
      if ($_GET["lang"] == "pt" || $_GET["lang"] == "br" || $_GET["lang"] == "pt_br" || $_GET["lang"] == "pt_BR" || $_GET["lang"] == "PT_BR") {
        include("copyright/pt_BR/text-plain.html");
      }
      else {
        include("copyright/en_US/text-plain.html");
      }
    }
    else {
      include("copyright/en_US/text-plain.html");
    }
  }
?>
